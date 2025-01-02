<?php
session_start();
require_once 'config/db_config.php';

// Check if this is an AJAX request
if (isset($_GET['format']) && $_GET['format'] === 'json') {
    $limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 10;
    
    try {
        $sql = "
            SELECT n.*, u.role as author_role,
                   GROUP_CONCAT(na.id) as attachment_ids,
                   GROUP_CONCAT(na.file_name) as attachment_files,
                   DATE_FORMAT(n.created_at, '%d-%m-%Y') as formatted_date
            FROM notices n 
            LEFT JOIN users u ON n.user_id = u.id
            LEFT JOIN notice_attachments na ON n.id = na.notice_id
            GROUP BY n.id
            ORDER BY n.created_at DESC
            LIMIT :limit
        ";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        $notices = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Format the notices for JSON response
        $formatted_notices = array_map(function($notice) {
            // Convert date to Bangla numerals
            $date_parts = explode('-', $notice['formatted_date']);
            $bangla_date = implode('-', array_map(function($part) {
                return strtr($part, '0123456789', '০১২৩৪৫৬৭৮৯');
            }, $date_parts));
            
            return [
                'id' => $notice['id'],
                'title' => $notice['title'],
                'formatted_date' => $bangla_date,
                'attachment_url' => !empty($notice['attachment_files']) 
                    ? 'uploads/notices/' . explode(',', $notice['attachment_files'])[0]
                    : '#',
                'is_urgent' => strpos(strtolower($notice['title']), 'urgent') !== false || strpos($notice['title'], 'জরুরি') !== false,
                'is_new' => (time() - strtotime($notice['created_at'])) < 86400 // 24 hours
            ];
        }, $notices);
        
        // Send JSON response
        header('Content-Type: application/json');
        echo json_encode($formatted_notices);
        exit;
    } catch (PDOException $e) {
        header('HTTP/1.1 500 Internal Server Error');
        echo json_encode(['error' => 'Database error occurred']);
        exit;
    }
}

// Rest of the existing code for normal page view
$page_title = 'Notices';

// Get all published notices with user information
try {
    $stmt = $conn->prepare("
        SELECT n.*, u.role as author_role,
               GROUP_CONCAT(na.id) as attachment_ids,
               GROUP_CONCAT(na.file_name) as attachment_files,
               DATE_FORMAT(n.created_at, '%d %M %Y') as formatted_date
        FROM notices n 
        LEFT JOIN users u ON n.user_id = u.id
        LEFT JOIN notice_attachments na ON n.id = na.notice_id
        GROUP BY n.id
        ORDER BY n.created_at DESC
    ");
    $stmt->execute();
    $notices = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    error_log("Error fetching notices: " . $e->getMessage());
    $notices = [];
}

function get_relative_time($date) {
    $timestamp = strtotime($date);
    $difference = time() - $timestamp;
    
    if ($difference < 60) {
        return "Just now";
    } elseif ($difference < 3600) {
        $minutes = floor($difference / 60);
        return $minutes . " minute" . ($minutes > 1 ? "s" : "") . " ago";
    } elseif ($difference < 86400) {
        $hours = floor($difference / 3600);
        return $hours . " hour" . ($hours > 1 ? "s" : "") . " ago";
    } elseif ($difference < 604800) {
        $days = floor($difference / 86400);
        return $days . " day" . ($days > 1 ? "s" : "") . " ago";
    } else {
        return date("F j, Y", $timestamp);
    }
}

// Include header
include 'includes/header.php';
?>

<style>
.notice-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.notice-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 20px rgba(0, 106, 78, 0.1);
}

.attachment-preview {
    position: relative;
    overflow: hidden;
    border-radius: 0.5rem;
    box-shadow: 0 4px 6px -1px rgba(0, 106, 78, 0.1);
}

.attachment-preview::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 106, 78, 0.1);
    opacity: 0;
    transition: opacity 0.2s;
}

.attachment-preview:hover::before {
    opacity: 1;
}

.notice-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    padding: 0.25rem 0.75rem;
    border-radius: 9999px;
    font-size: 0.75rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.notice-badge.urgent {
    background-color: #F42A41;
    color: #FFF8F0;
}

.notice-badge.new {
    background-color: #006A4E;
    color: #FFF8F0;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

.pulse-animation {
    animation: pulse 2s infinite;
}

/* Custom Scrollbar */
.custom-scrollbar::-webkit-scrollbar {
    width: 6px;
}

.custom-scrollbar::-webkit-scrollbar-track {
    background: #FFF8F0;
    border-radius: 10px;
}

.custom-scrollbar::-webkit-scrollbar-thumb {
    background: #006A4E;
    border-radius: 10px;
}

.custom-scrollbar::-webkit-scrollbar-thumb:hover {
    background: #005841;
}

/* Mobile Responsive Styles */
@media (max-width: 768px) {
    .mobile-notice-title {
        font-size: 1rem;
        line-height: 1.5;
        font-weight: 600;
        color: #006A4E;
        margin-bottom: 0.5rem;
    }

    .mobile-notice-content {
        font-size: 0.875rem;
        line-height: 1.5;
        color: #4B5563;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .mobile-notice-content.expanded {
        -webkit-line-clamp: unset;
    }

    .mobile-notice-card {
        background: #FFF8F0;
        border-radius: 0.5rem;
        padding: 1rem;
        margin-bottom: 1rem;
        box-shadow: 0 1px 3px rgba(0, 106, 78, 0.1);
    }

    .mobile-notice-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 0.75rem;
        font-size: 0.75rem;
        color: #006A4E;
    }
}
</style>

<!-- Main Content -->
<div class="min-h-screen bg-[#FFF8F0] py-12">
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-lg shadow-sm">
            <!-- Mobile View -->
            <div class="block lg:hidden">
                <?php if (empty($notices)): ?>
                    <div class="p-4 text-center text-[#006A4E]">No notices available at this time.</div>
                <?php else: ?>
                    <div class="space-y-4 p-4">
                        <?php foreach ($notices as $index => $notice): 
                            $isUrgent = strpos(strtolower($notice['title']), 'urgent') !== false;
                            $isNew = (time() - strtotime($notice['created_at'])) < 86400; // 24 hours
                        ?>
                            <div class="mobile-notice-card border-l-4 border-[#006A4E]">
                                <div class="mobile-notice-meta">
                                    <div>
                                        <i class="far fa-calendar-alt mr-1 text-[#006A4E]"></i>
                                        <?php echo htmlspecialchars($notice['formatted_date']); ?>
                                    </div>
                                    <div class="flex gap-2">
                                        <?php if ($isNew): ?>
                                            <span class="px-2 py-0.5 bg-[#006A4E] text-white rounded-full text-xs">New</span>
                                        <?php endif; ?>
                                        <?php if ($isUrgent): ?>
                                            <span class="px-2 py-0.5 bg-[#F42A41] text-white rounded-full text-xs">Urgent</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                
                                <h3 class="mobile-notice-title text-[#006A4E]"><?php echo htmlspecialchars($notice['title']); ?></h3>
                                
                                <?php if (!empty($notice['content'])): ?>
                                    <div class="mobile-notice-content" id="content-<?php echo $index; ?>">
                                        <?php echo nl2br(htmlspecialchars($notice['content'])); ?>
                                    </div>
                                    <?php if (strlen($notice['content']) > 150): ?>
                                        <button onclick="toggleMobileContent(<?php echo $index; ?>)" 
                                                class="text-[#006A4E] text-sm font-medium mt-2 hover:text-[#005841] focus:outline-none">
                                            Read More
                                        </button>
                                    <?php endif; ?>
                                <?php endif; ?>
                                
                                <?php if (!empty($notice['attachment_files'])): ?>
                                    <div class="mt-3 pt-3 border-t border-[#006A4E]/10">
                                        <div class="flex justify-between items-center">
                                            <span class="text-xs text-[#006A4E]">
                                                <i class="fas fa-paperclip mr-1"></i> Attachments
                                            </span>
                                            <div class="flex gap-2">
                                                <?php 
                                                $attachment_files = explode(',', $notice['attachment_files']);
                                                foreach ($attachment_files as $file_name): 
                                                    $file_path = 'uploads/notices/' . trim($file_name);
                                                    if (file_exists($file_path)):
                                                ?>
                                                    <a href="<?php echo $file_path; ?>" 
                                                       class="text-[#006A4E] hover:text-[#005841]" 
                                                       download>
                                                        <i class="fas fa-download"></i>
                                                    </a>
                                                <?php 
                                                    endif;
                                                endforeach; 
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Desktop View -->
            <div class="hidden lg:block">
                <div class="overflow-x-auto">
                    <table class="w-full border border-[#006A4E]">
                        <thead>
                            <tr class="bg-[#006A4E] text-white border-b border-[#006A4E]">
                                <th class="px-6 py-3 text-left text-sm font-medium border-r border-[#006A4E]/20">#</th>
                                <th class="px-6 py-3 text-left text-sm font-medium w-full border-r border-[#006A4E]/20">Notice Title</th>
                                <th class="px-6 py-3 text-left text-sm font-medium border-r border-[#006A4E]/20">Date</th>
                                <th class="px-6 py-3 text-left text-sm font-medium">Download</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#006A4E]/20">
                            <?php if (empty($notices)): ?>
                                <tr class="border-b border-[#006A4E]/20">
                                    <td colspan="4" class="px-6 py-4 text-center text-[#006A4E]">
                                        No notices available at this time.
                                    </td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($notices as $index => $notice): 
                                    $isUrgent = strpos(strtolower($notice['title']), 'urgent') !== false;
                                    $isNew = (time() - strtotime($notice['created_at'])) < 86400; // 24 hours
                                ?>
                                    <tr class="hover:bg-gray-100 transition-colors duration-200 border-b border-[#006A4E]/20">
                                        <td class="px-6 py-4 text-sm text-[#006A4E] border-r border-[#006A4E]/20">
                                            <?php echo $index + 1; ?>
                                        </td>
                                        <td class="px-6 py-4 border-r border-[#006A4E]/20">
                                            <div class="mb-2">
                                                <div class="flex items-center gap-2">
                                                    <h3 class="text-base font-medium text-[#006A4E]">
                                                        <?php echo htmlspecialchars($notice['title']); ?>
                                                    </h3>
                                                    <?php if ($isNew): ?>
                                                        <span class="px-2 py-1 text-xs font-medium bg-[#006A4E] text-white rounded-full">New</span>
                                                    <?php endif; ?>
                                                    <?php if ($isUrgent): ?>
                                                        <span class="px-2 py-1 text-xs font-medium bg-[#F42A41] text-white rounded-full">Urgent</span>
                                                    <?php endif; ?>
                                                </div>
                                                <?php if (!empty($notice['content'])): ?>
                                                    <div class="mt-2 text-sm text-[#006A4E]/80 custom-scrollbar" style="max-height: 100px; overflow-y: auto;">
                                                        <?php echo nl2br(htmlspecialchars($notice['content'])); ?>
                                                    </div>
                                                <?php endif; ?>
                                                
                                                <?php if (!empty($notice['attachment_files'])): ?>
                                                    <div class="mt-3">
                                                        <span class="text-xs text-[#006A4E]">
                                                            <i class="fas fa-paperclip mr-1"></i>
                                                            Has attachments
                                                        </span>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-[#006A4E] whitespace-nowrap border-r border-[#006A4E]/20">
                                            <?php echo htmlspecialchars($notice['formatted_date']); ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php 
                                            if (!empty($notice['attachment_files'])) {
                                                $attachment_files = explode(',', $notice['attachment_files']);
                                                foreach ($attachment_files as $file_name) {
                                                    $file_path = "uploads/notices/" . $file_name;
                                                    $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                                                    
                                                    // For images
                                                    if (in_array($file_extension, ['jpg', 'jpeg', 'png', 'gif'])) {
                                            ?>
                                                        <a href="<?php echo $file_path; ?>" 
                                                           target="_blank"
                                                           class="inline-flex items-center gap-2 px-3 py-1 bg-gray-50 text-gray-700 rounded hover:bg-gray-100 transition-colors duration-200 group mb-2">
                                                            <i class="fas fa-image text-blue-500 group-hover:scale-110 transition-transform duration-200"></i>
                                                            <span class="text-sm">View Image</span>
                                                        </a>
                                            <?php
                                                    } else {
                                                        // For PDFs and other documents
                                                        $icon_class = 'fa-file-pdf';
                                                        $color_class = 'text-red-500';
                                                        $label = 'View PDF';
                                                        
                                                        switch($file_extension) {
                                                            case 'doc':
                                                            case 'docx':
                                                                $icon_class = 'fa-file-word';
                                                                $color_class = 'text-blue-500';
                                                                $label = 'View Doc';
                                                                break;
                                                            case 'xls':
                                                            case 'xlsx':
                                                                $icon_class = 'fa-file-excel';
                                                                $color_class = 'text-green-500';
                                                                $label = 'View Excel';
                                                                break;
                                                            case 'ppt':
                                                            case 'pptx':
                                                                $icon_class = 'fa-file-powerpoint';
                                                                $color_class = 'text-orange-500';
                                                                $label = 'View PPT';
                                                                break;
                                                        }
                                            ?>
                                                        <a href="<?php echo $file_path; ?>" 
                                                           target="_blank"
                                                           class="inline-flex items-center gap-2 px-3 py-1 bg-gray-50 text-gray-700 rounded hover:bg-gray-100 transition-colors duration-200 group mb-2">
                                                            <i class="fas <?php echo $icon_class; ?> <?php echo $color_class; ?> group-hover:scale-110 transition-transform duration-200"></i>
                                                            <span class="text-sm"><?php echo $label; ?></span>
                                                        </a>
                                            <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Preview Modal -->
<div id="previewModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
    <div class="relative bg-white rounded-xl max-w-3xl w-full max-h-[90vh] overflow-hidden">
        <button onclick="closePreview()" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
            <i class="fas fa-times text-xl"></i>
        </button>
        <div id="previewContent" class="p-4"></div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Create the search container
    const searchContainer = document.createElement('div');
    searchContainer.className = 'mb-6 bg-white rounded-lg shadow-sm p-4';

    // Create the search wrapper
    const searchWrapper = document.createElement('div');
    searchWrapper.className = 'max-w-xl mx-auto';

    // Create the inner wrapper with relative positioning
    const innerWrapper = document.createElement('div');
    innerWrapper.className = 'relative flex items-center';

    // Create the search icon
    const searchIcon = document.createElement('div');
    searchIcon.className = 'absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none';
    const icon = document.createElement('i');
    icon.className = 'fas fa-search text-gray-400';
    searchIcon.appendChild(icon);

    // Create the search input
    const searchInput = document.createElement('input');
    searchInput.type = 'text';
    searchInput.id = 'searchInput';
    searchInput.placeholder = 'Search notices by title or content...';
    searchInput.className = 'block w-full pl-10 pr-12 py-2.5 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200';

    // Create the clear button
    const clearButton = document.createElement('button');
    clearButton.className = 'absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 cursor-pointer transition-colors duration-200';
    clearButton.innerHTML = '<i class="fas fa-times"></i>';
    clearButton.style.display = 'none';
    clearButton.onclick = function() {
        searchInput.value = '';
        this.style.display = 'none';
        searchInput.dispatchEvent(new Event('input'));
        searchInput.focus();
    };

    // Assemble the search box
    innerWrapper.appendChild(searchIcon);
    innerWrapper.appendChild(searchInput);
    innerWrapper.appendChild(clearButton);
    searchWrapper.appendChild(innerWrapper);
    searchContainer.appendChild(searchWrapper);

    // Add to the page
    const mainContainer = document.querySelector('div.min-h-screen');
    mainContainer.insertBefore(searchContainer, mainContainer.firstChild);

    // Search functionality
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase().trim();
        clearButton.style.display = this.value ? 'flex' : 'none';

        // For mobile view
        const mobileNotices = document.querySelectorAll('.mobile-notice-card');
        let mobileVisible = false;

        mobileNotices.forEach(notice => {
            const title = notice.querySelector('.mobile-notice-title')?.textContent.toLowerCase() || '';
            const content = notice.querySelector('.mobile-notice-content')?.textContent.toLowerCase() || '';
            const shouldShow = title.includes(searchTerm) || content.includes(searchTerm);
            
            notice.style.display = shouldShow ? 'block' : 'none';
            if (shouldShow) mobileVisible = true;
        });

        // For desktop view
        const desktopRows = document.querySelectorAll('tbody tr:not(:first-child)');
        let desktopVisible = false;

        desktopRows.forEach((row, index) => {
            const title = row.querySelector('h3')?.textContent.toLowerCase() || '';
            const content = row.querySelector('.text-gray-600')?.textContent.toLowerCase() || '';
            const shouldShow = title.includes(searchTerm) || content.includes(searchTerm);
            
            row.style.display = shouldShow ? 'table-row' : 'none';
            if (shouldShow) {
                desktopVisible = true;
                const numberCell = row.querySelector('td:first-child');
                if (numberCell) numberCell.textContent = index + 1;
            }
        });

        // Handle no results message for mobile
        const mobileNoResults = document.querySelector('.mobile-no-results');
        if (!mobileVisible && !mobileNoResults) {
            const noResultsDiv = document.createElement('div');
            noResultsDiv.className = 'mobile-no-results p-4 text-center text-gray-500 bg-white rounded-lg shadow-sm mt-4';
            noResultsDiv.innerHTML = `
                <div class="flex flex-col items-center justify-center gap-2">
                    <i class="fas fa-search text-gray-400 text-2xl"></i>
                    <p>No notices found matching "${searchTerm}"</p>
                </div>
            `;
            document.querySelector('.block.lg\\:hidden').appendChild(noResultsDiv);
        } else if (mobileVisible && mobileNoResults) {
            mobileNoResults.remove();
        }

        // Handle no results message for desktop
        const desktopNoResults = document.getElementById('noResultsRow');
        if (!desktopVisible) {
            if (!desktopNoResults) {
                const noResultsRow = document.createElement('tr');
                noResultsRow.id = 'noResultsRow';
                noResultsRow.innerHTML = `
                    <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                        <div class="flex flex-col items-center justify-center gap-2">
                            <i class="fas fa-search text-gray-400 text-2xl"></i>
                            <p>No notices found matching "${searchTerm}"</p>
                        </div>
                    </td>
                `;
                document.querySelector('tbody').appendChild(noResultsRow);
            }
        } else if (desktopNoResults) {
            desktopNoResults.remove();
        }
    });

    // Clear search on ESC key
    searchInput.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            this.value = '';
            clearButton.style.display = 'none';
            this.dispatchEvent(new Event('input'));
        }
    });
});

// Preview functionality
function showPreview(path, type) {
    const modal = document.getElementById('previewModal');
    const content = document.getElementById('previewContent');
    
    if (type === 'image') {
        content.innerHTML = `<img src="${path}" alt="Preview" class="max-w-full max-h-[70vh] mx-auto">`;
    }
    
    modal.classList.remove('hidden');
}

function closePreview() {
    const modal = document.getElementById('previewModal');
    modal.classList.add('hidden');
}

// Close modal when clicking outside
document.getElementById('previewModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closePreview();
    }
});

function toggleMobileContent(index) {
    const content = document.getElementById('content-' + index);
    const button = content.nextElementSibling;
    
    content.classList.toggle('expanded');
    button.textContent = content.classList.contains('expanded') ? 'Show Less' : 'Read More';
}
</script>

<?php include 'includes/footer.php'; ?>
