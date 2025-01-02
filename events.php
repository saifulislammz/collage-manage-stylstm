<?php
require_once 'config/db_config.php';

// Get events with organizer information
$stmt = $conn->prepare("
    SELECT e.*, u.name as organizer_name, u.department 
    FROM events e 
    JOIN users u ON e.organizer_id = u.id 
    WHERE e.event_date >= CURDATE()
    ORDER BY e.event_date ASC, e.event_time ASC
");
$stmt->execute();
$events = $stmt->fetchAll();

// Group events by month
$eventsByMonth = [];
foreach ($events as $event) {
    $month = date('F Y', strtotime($event['event_date']));
    $eventsByMonth[$month][] = $event;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $page_title = 'ইভেন্টস'; ?>
    <title><?php echo $page_title; ?> - কলেজ ম্যানেজমেন্ট সিস্টেম</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <?php include 'includes/header.php'; ?>
</head>
<body class="bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-primary to-primary/90 text-white">
        <div class="max-w-7xl mx-auto px-4 py-16 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                    ইভেন্টস
                </h1>
                <p class="mt-6 max-w-2xl mx-auto text-xl">
                    আমাদের ইনস্টিটিউটের সকল ইভেন্টের সর্বশেষ আপডেট
                </p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">
        <?php if (empty($events)): ?>
            <div class="text-center py-12">
                <div class="rounded-full bg-primary/10 w-20 h-20 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-calendar-alt text-primary text-2xl"></i>
                </div>
                <h3 class="text-lg font-medium text-gray-900">কোন আসন্ন ইভেন্ট নেই</h3>
                <p class="mt-2 text-sm text-gray-500">নতুন ইভেন্টের জন্য পরে আবার দেখুন!</p>
            </div>
        <?php else: ?>
            <!-- Events Grid -->
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($events as $event): ?>
                    <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden border border-gray-100">
                        <!-- Event Date Banner -->
                        <div class="bg-gradient-to-r from-primary to-primary/90 px-4 py-2 text-white flex justify-between items-center">
                            <div class="flex items-center">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                <span><?php echo date('M d, Y', strtotime($event['event_date'])); ?></span>
                            </div>
                            <span class="text-sm">
                                <i class="fas fa-clock mr-1"></i>
                                <?php echo date('g:i A', strtotime($event['event_time'])); ?>
                            </span>
                        </div>
                        
                        <!-- Event Content -->
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-xl font-semibold text-gray-900">
                                    <?php echo htmlspecialchars($event['title']); ?>
                                </h3>
                                <?php if ($event['status'] === 'cancelled'): ?>
                                    <span class="px-2 py-1 text-xs font-semibold text-secondary bg-secondary/10 rounded-full">
                                        বাতিল করা হয়েছে
                                    </span>
                                <?php endif; ?>
                            </div>
                            
                            <p class="text-gray-600 mb-4 line-clamp-3">
                                <?php echo nl2br(htmlspecialchars($event['description'])); ?>
                            </p>
                            
                            <!-- Location -->
                            <div class="flex items-center text-gray-500 mb-4">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                <span><?php echo htmlspecialchars($event['location']); ?></span>
                            </div>
                            
                            <!-- Organizer Info -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center">
                                        <i class="fas fa-user text-primary"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">
                                            <?php echo htmlspecialchars($event['organizer_name']); ?>
                                        </p>
                                        <p class="text-xs text-gray-500">
                                            <?php echo htmlspecialchars($event['department']); ?>
                                        </p>
                                    </div>
                                </div>
                                
                                <?php if ($event['status'] !== 'cancelled'): ?>
                                    <button onclick="showEventDetails(<?php echo htmlspecialchars(json_encode($event)); ?>)"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-primary hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary/50">
                                        <i class="fas fa-info-circle mr-2"></i>
                                        বিস্তারিত
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <!-- Event Details Modal -->
    <div id="eventModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden overflow-y-auto">
        <div class="min-h-screen text-center sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <!-- Modal container with better mobile responsiveness -->
            <div class="inline-block w-full transform overflow-hidden rounded-lg bg-white text-left align-bottom shadow-xl transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:rounded-xl sm:border sm:border-gray-100 max-h-[90vh] mx-auto px-4 pb-4 pt-5 sm:p-6">
                <div class="absolute right-0 top-0 pr-4 pt-4 sm:block">
                    <button onclick="closeEventModal()" class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none">
                        <span class="sr-only">Close</span>
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>

                <div class="sm:flex sm:items-start">
                    <div class="mt-3 w-full sm:mt-0 sm:text-left">
                        <h3 class="text-xl font-semibold leading-6 text-gray-900 mb-4 pr-6" id="modalTitle"></h3>
                        <div class="mt-2" id="modalContent"></div>
                    </div>
                </div>

                <div class="mt-5 sm:mt-4">
                    <button onclick="closeEventModal()"
                            class="w-full rounded-md bg-gray-100 px-3 py-2 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-200 focus:outline-none">
                        বন্ধ করুন
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showEventDetails(event) {
            const modal = document.getElementById('eventModal');
            const title = document.getElementById('modalTitle');
            const content = document.getElementById('modalContent');

            title.textContent = event.title;
            
            const eventDate = new Date(event.event_date);
            const formattedDate = eventDate.toLocaleDateString('bn-BD', { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric' 
            });

            content.innerHTML = `
                <div class="space-y-4">
                    <div class="bg-primary/10 p-4 rounded-lg">
                        <div class="flex items-center text-primary mb-2">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span class="font-medium">${formattedDate}</span>
                        </div>
                        <div class="flex items-center text-primary">
                            <i class="fas fa-clock mr-2"></i>
                            <span>${event.event_time}</span>
                        </div>
                    </div>
                    
                    <div class="text-gray-600 break-words">
                        ${event.description.replace(/\n/g, '<br>')}
                    </div>
                    
                    <div class="flex items-center text-gray-700 bg-gray-50 p-3 rounded-lg">
                        <i class="fas fa-map-marker-alt w-5 text-blue-600"></i>
                        <span class="ml-2 break-words">${event.location}</span>
                    </div>
                </div>
            `;

            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';

            // Ensure modal is centered on mobile
            const modalContent = modal.querySelector('.inline-block');
            modalContent.scrollTop = 0;
        }

        function closeEventModal() {
            const modal = document.getElementById('eventModal');
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }

        // Close modal when clicking outside
        document.addEventListener('click', function(event) {
            const modal = document.getElementById('eventModal');
            const modalContent = modal.querySelector('.inline-block');
            if (event.target === modal && !modalContent.contains(event.target)) {
                closeEventModal();
            }
        });

        // Close modal on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeEventModal();
            }
        });
    </script>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
