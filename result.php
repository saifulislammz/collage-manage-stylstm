<?php
session_start();
require_once 'config/db_config.php';
$page_title = "Result Check";
include 'includes/header.php';

$error = '';
$results = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $roll = $_POST['roll_number'];
    
    // Validate roll number format
    if (!preg_match('/^\d{6}$/', $roll)) {
        $error = 'Please enter a valid 6-digit roll number.';
    } else {
        // Check if roll number exists and get results
        $stmt = $conn->prepare("
            SELECT semester, gpa, failed_subjects, created_at
            FROM results 
            WHERE student_roll = ?
            ORDER BY semester ASC
        ");
        $stmt->execute([$roll]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if (empty($results)) {
            $error = 'No results found for this roll number.';
        }
    }
}
?>

<style>
    :root {
        --primary: #006A4E;
        --secondary: #F42A41;
        --accent: #FFB81C;
        --bg-neutral: #FFF8F0;
    }

    .result-card {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 4px 6px rgba(0, 106, 78, 0.1);
        transition: all 0.3s ease;
    }

    .result-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 15px rgba(0, 106, 78, 0.15);
    }

    .header-gradient {
        background: linear-gradient(135deg, var(--primary), #008060);
        padding: 2rem;
        border-radius: 1rem 1rem 0 0;
        position: relative;
        overflow: hidden;
    }

    .header-gradient::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="0" cy="0" r="40" fill="%23FFFFFF10"/></svg>') no-repeat;
        opacity: 0.1;
    }

    .input-field {
        width: 100%;
        padding: 1rem 1.5rem;
        border: 2px solid rgba(0, 106, 78, 0.1);
        border-radius: 0.75rem;
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }

    .input-field:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 4px rgba(0, 106, 78, 0.1);
        outline: none;
    }

    .submit-btn {
        width: 100%;
        padding: 1rem 2rem;
        background: linear-gradient(135deg, var(--primary), #008060);
        color: white;
        border: none;
        border-radius: 0.75rem;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .submit-btn:hover {
        background: linear-gradient(135deg, #008060, var(--primary));
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 106, 78, 0.2);
    }

    .inline-flex.items-center.px-6.py-3.bg-white.border-2.border-\[var\(--primary\)\].text-\[var\(--primary\)\].rounded-lg.hover\:bg-\[var\(--primary\)\].hover\:text-white.transition-all.duration-300.font-medium.space-x-2 {
        margin-bottom: 2rem;
    }

    .semester-badge {
        background-color: var(--primary);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 9999px;
        font-size: 0.875rem;
        font-weight: 500;
    }

    .gpa-display {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary);
        text-align: center;
        margin: 1rem 0;
    }

    .gpa-display.referred {
        color: var(--secondary);
    }

    .stats-card {
        flex: 1 1 250px;
        min-width: 250px;
        max-width: 300px;
        background: white;
        padding: 1.5rem;
        border-radius: 1rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .flex.flex-wrap.gap-6.justify-center {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        justify-content: center;
        width: 100%;
    }

    .stats-label {
        color: #666;
        font-size: 0.875rem;
        margin-bottom: 0.5rem;
    }

    .stats-value {
        color: var(--primary);
        font-size: 1.5rem;
        font-weight: 600;
    }

    .error-container {
        background: #FEE2E2;
        border: 1px solid var(--secondary);
        color: var(--secondary);
        padding: 1rem;
        border-radius: 0.75rem;
        text-align: center;
        margin-top: 1rem;
    }
</style>

<div class="min-h-screen bg-gradient-to-br from-[var(--bg-neutral)] to-white py-12">
    <div class="container mx-auto px-4">
        <?php if (!isset($_POST['roll_number'])): ?>
        <div class="max-w-xl mx-auto">
            <div class="result-card">
                <div class="header-gradient">
                    <h1 class="text-3xl font-bold text-white mb-4">ফলাফল দেখুন</h1>
                    <p class="text-white/80 mb-8">আপনার রোল নম্বর দিয়ে ফলাফল দেখুন</p>
                </div>
                
                <div class="p-8">
                    <form method="POST" action="" class="space-y-6" onsubmit="return validateForm()">
                        <div>
                            <label for="roll_number" class="block text-sm font-medium text-gray-700 mb-2">রোল নম্বর</label>
                            <input type="text" 
                                   id="roll_number" 
                                   name="roll_number" 
                                   class="input-field" 
                                   placeholder="৬ ডিজিটের রোল নম্বর"
                                   pattern="\d{6}"
                                   maxlength="6"
                                   oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 6)"
                                   required>
                        </div>
                        <button type="submit" class="submit-btn">
                            ফলাফল দেখুন
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <?php else: ?>
            <?php if ($results): ?>
            <div class="max-w-4xl mx-auto">
                <div class="result-card">
                    <div class="header-gradient">
                        <h2 class="text-3xl font-bold text-white mb-2">ফলাফল</h2>
                        <p class="text-white/80">রোল নম্বর: <?php echo htmlspecialchars($roll); ?></p>
                    </div>
                    
                    <div class="p-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <?php foreach ($results as $result): ?>
                        <div class="result-card hover:shadow-xl">
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="semester-badge">
                                        <?php echo htmlspecialchars($result['semester']); ?>ম সেমিস্টার
                                    </span>
                                    <span class="text-sm text-gray-500">
                                        <?php echo date('M Y', strtotime($result['created_at'])); ?>
                                    </span>
                                </div>
                                <div class="text-center">
                                    <div class="gpa-display <?php echo empty($result['failed_subjects']) ? '' : 'referred'; ?>">
                                        <?php if (empty($result['failed_subjects'])): ?>
                                            <?php echo number_format($result['gpa'], 2); ?>
                                        <?php else: ?>
                                            <span>Referred</span>
                                        <?php endif; ?>
                                    </div>
                                    <?php if (!empty($result['failed_subjects'])): ?>
                                        <div class="text-sm text-red-500 mt-2">
                                            Failed Subjects: <?php echo htmlspecialchars($result['failed_subjects']); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Statistics -->
                    <div class="p-8 bg-[var(--bg-neutral)] border-t border-[rgba(0,106,78,0.1)]">
                        <div class="flex flex-wrap gap-6 justify-center">
                            <div class="stats-card">
                                <div class="stats-label">মোট সেমিস্টার</div>
                                <div class="stats-value"><?php echo count($results); ?></div>
                            </div>
                            <?php
                            $total_gpa = 0;
                            $passed_semesters = 0;
                            foreach ($results as $result) {
                                if (empty($result['failed_subjects'])) {
                                    $total_gpa += $result['gpa'];
                                    $passed_semesters++;
                                }
                            }
                            ?>
                            <div class="stats-card">
                                <div class="stats-label">গড় জিপিএ</div>
                                <div class="stats-value">
                                    <?php echo $passed_semesters ? number_format($total_gpa / $passed_semesters, 2) : 'N/A'; ?>
                                </div>
                            </div>
                            <div class="stats-card">
                                <div class="stats-label">পাশ করা সেমিস্টার</div>
                                <div class="stats-value"><?php echo $passed_semesters; ?></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 text-center">
                        <a href="result.php" class="inline-flex items-center px-6 py-3 bg-white border-2 border-[var(--primary)] text-[var(--primary)] rounded-lg hover:bg-[var(--primary)] hover:text-white transition-all duration-300 font-medium space-x-2">
                            <span>অন্য ফলাফল দেখুন</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <div class="max-w-xl mx-auto">
                <div class="result-card p-8 text-center">
                    <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">কোন ফলাফল পাওয়া যায়নি</h3>
                    <p class="text-gray-600 mb-6"><?php echo $error; ?></p>
                    <a href="result.php" class="inline-block bg-[var(--primary)] text-white px-6 py-2 rounded-lg hover:bg-[#005841] transition-colors">
                        আবার চেষ্টা করুন
                    </a>
                </div>
            </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<script>
function validateForm() {
    const roll = document.getElementById('roll_number').value;
    if (!/^\d{6}$/.test(roll)) {
        alert('দয়া করে ৬ ডিজিটের রোল নম্বর দিন।');
        return false;
    }
    return true;
}
</script>
