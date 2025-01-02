<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'config/db_config.php';

// Get current page for active menu highlighting
$current_page = basename($_SERVER['PHP_SELF'], '.php');

// Determine if we're in a subdirectory
$is_auth_page = strpos($_SERVER['PHP_SELF'], '/auth/') !== false;
$base_url = $is_auth_page ? '../' : '';

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ফেনী পলিটেকনিক ইনস্টিটিউট</title>
    <link rel="icon" type="image/x-icon" href="assetscontant/images/fpi.jpg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Add Bangla Font -->
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <?php include 'includes/header.php'; ?>
    <style>
        :root {
            --primary-color: #006A4E;
            --secondary-color: #F42A41;
            --accent-color: #FFB81C;
        }
        /* Add Bangla Font */
        .font-bangla {
            font-family: 'SolaimanLipi', sans-serif;
        }

        tailwind.config = {
            theme: {
                extend: {
                    screens: {
                        'custom': '992px',
                    },
                    fontFamily: {
                        bangla: ['SolaimanLipi', 'sans-serif'],
                    },
                    colors: {
                        primary: '#006A4E',
                        secondary: '#F42A41',
                        accent: '#FFB81C',
                    }
                },
            },
        }
    </style>
</head>
<body class="font-bangla">
    <!-- Hero Image Carousel Section -->
    <div class="relative w-full h-[300px] sm:h-[400px] md:h-[500px] lg:h-[600px] overflow-hidden">
        <!-- Carousel container -->
        <div class="carousel-container relative w-full h-full">
            <!-- Slide 1 -->
            <div class="slide absolute w-full h-full opacity-100 transition-opacity duration-500">
                <img src="assets/images/image-1.jpg" alt="Feni Polytechnic Institute Main Building" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-4">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-6xl font-bold mb-2 md:mb-4">ফেনী পলিটেকনিক ইনস্টিটিউট</h1>
                    <p class="text-base sm:text-lg md:text-xl lg:text-2xl">প্রতিষ্ঠিত: ২৯ ফেব্রুয়ারি, ১৯৬৪</p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="slide absolute w-full h-full opacity-0 transition-opacity duration-500">
                <img src="assets/images/image-2.jpeg" alt="Academic Building" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-4">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-6xl font-bold mb-2 md:mb-4">একাডেমিক ভবন</h1>
                    <p class="text-base sm:text-lg md:text-xl lg:text-2xl">উচ্চ শিক্ষার প্রাণকেন্দ্র</p>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="slide absolute w-full h-full opacity-0 transition-opacity duration-500">
                <img src="assets/images/image-3.jpg" alt="Laboratory Facilities" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-4">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-6xl font-bold mb-2 md:mb-4">আধুনিক ল্যাবরেটরি</h1>
                    <p class="text-base sm:text-lg md:text-xl lg:text-2xl">প্রযুক্তিগত শিক্ষার উৎকর্ষতা</p>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="slide absolute w-full h-full opacity-0 transition-opacity duration-500">
                <img src="assets/images/image-4.jpg" alt="Campus Life" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-4">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-6xl font-bold mb-2 md:mb-4">ক্যাম্পাস জীবন</h1>
                    <p class="text-base sm:text-lg md:text-xl lg:text-2xl">শিক্ষার্থীদের সুন্দর পরিবেশ</p>
                </div>
            </div>

            <!-- Slide 5 -->
            <div class="slide absolute w-full h-full opacity-0 transition-opacity duration-500">
                <img src="assets/images/image-5.jpeg" alt="Student Activities" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-4">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-6xl font-bold mb-2 md:mb-4">সহপাঠ্যক্রম কার্যক্রম</h1>
                    <p class="text-base sm:text-lg md:text-xl lg:text-2xl">সর্বাঙ্গীণ শিক্ষার অঙ্গীকার</p>
                </div>
            </div>
        </div>

        <!-- Navigation Arrows -->
        <button class="absolute left-2 sm:left-4 top-1/2 -translate-y-1/2 bg-white/30 hover:bg-white/50 text-white p-1 sm:p-2 rounded-full transition-all duration-300" onclick="prevSlide()">
            <svg class="w-4 h-4 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button class="absolute right-2 sm:right-4 top-1/2 -translate-y-1/2 bg-white/30 hover:bg-white/50 text-white p-1 sm:p-2 rounded-full transition-all duration-300" onclick="nextSlide()">
            <svg class="w-4 h-4 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

        <!-- Indicator Dots -->
        <div class="absolute bottom-2 sm:bottom-4 left-1/2 -translate-x-1/2 flex space-x-1 sm:space-x-2">
            <button class="w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300 indicator-dot"></button>
            <button class="w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300 indicator-dot"></button>
            <button class="w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300 indicator-dot"></button>
            <button class="w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300 indicator-dot"></button>
            <button class="w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300 indicator-dot"></button>
        </div>
    </div>

    <script>
        // Carousel functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.indicator-dot');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.opacity = i === index ? '1' : '0';
            });
            dots?.forEach((dot, i) => {
                dot.classList.toggle('bg-white', i === index);
                dot.classList.toggle('bg-white/50', i !== index);
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        // Auto advance slides
        setInterval(nextSlide, 5000);
    </script>
 <!-- About Us Section -->
 <div class="container mx-auto px-4 py-12 md:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <!-- Image Column -->
            <div class="relative">
                <img src="assets/images/image-6.jpeg" alt="Historic Building of Feni Polytechnic" class="w-full h-auto rounded-lg shadow-lg">
                <div class="absolute inset-0 bg-primary/10 rounded-lg"></div>
            </div>
            
            <!-- Content Column -->
            <div class="space-y-4">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-primary border-l-4 border-secondary pl-4">আমাদের পরিচিতি</h2>
                <div class="prose prose-lg text-gray-600">
                    <p class="text-base md:text-lg">
                    ফেনী পলিটেকনিক ইনস্টিটিউট গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের শিক্ষা মন্ত্রণালয়াধীন কারিগরি ও মাদ্রাসা শিক্ষা বিভাগের কারিগরি শিক্ষা অধিদপ্তারাধীন একটি ইনস্টিটিউট। কারিগরি শিক্ষার সম্প্রসারণ ও মানোন্নয়নের মাধ্যমে দক্ষ মানব সম্পদ সৃষ্টির লক্ষ্যে ১৯৬৪ সালের ২৯ ফেব্রুয়ারী তারিখে সিভিল ও মেকানিক্যাল টেকনোলজি দিয়ে ফেনী টেকনিক্যাল ইনস্টিটিউট যাত্রা শুরু করে।
                    </p>
                    <div class="mt-6">
                        <a href="history.php" class="inline-flex items-center px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition-all duration-300">
                            বিস্তারিত পড়ুন
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <!-- Statistics Section -->
 <div class="bg-gray-50 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12">ফেনী পলিটেকনিক ইনস্টিটিউট সংখ্যায়</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 md:gap-6">
                <!-- Established Year -->
                <div class="bg-primary rounded-lg p-6 text-center text-white hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    <div class="text-4xl mb-2">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="text-3xl font-bold mb-1"><span class="counter" data-target="1964" data-bangla="১৯৬৪">0</span></div>
                    <div class="text-sm">প্রতিষ্ঠা</div>
                </div>

                <!-- Academic Programs -->
                <div class="bg-primary rounded-lg p-6 text-center text-white hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    <div class="text-4xl mb-2">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="text-3xl font-bold mb-1"><span class="counter" data-target="8" data-bangla="০৮">0</span></div>
                    <div class="text-sm">টেকনোলজি</div>
                </div>

                <!-- Teachers -->
                <div class="bg-primary rounded-lg p-6 text-center text-white hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    <div class="text-4xl mb-2">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div class="text-3xl font-bold mb-1"><span class="counter" data-target="80" data-bangla="৮০">0</span></div>
                    <div class="text-sm">শিক্ষক</div>
                </div>

                <!-- Staff -->
                <div class="bg-primary rounded-lg p-6 text-center text-white hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    <div class="text-4xl mb-2">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="text-3xl font-bold mb-1"><span class="counter" data-target="40" data-bangla="৪০">0</span></div>
                    <div class="text-sm">কর্মচারী</div>
                </div>

                <!-- Labs -->
                <div class="bg-primary rounded-lg p-6 text-center text-white hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    <div class="text-4xl mb-2">
                        <i class="fas fa-flask"></i>
                    </div>
                    <div class="text-3xl font-bold mb-1"><span class="counter" data-target="32" data-bangla="৩২">0</span></div>
                    <div class="text-sm">ল্যাব</div>
                </div>

                <!-- Students -->
                <div class="bg-primary rounded-lg p-6 text-center text-white hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    <div class="text-4xl mb-2">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="text-3xl font-bold mb-1"><span class="counter" data-target="2000" data-bangla="২০০০+">0</span></div>
                    <div class="text-sm">শিক্ষার্থী</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Bangla number conversion
        const englishToBangla = {
            '0': '০', '1': '১', '2': '২', '3': '৩', '4': '৪',
            '5': '৫', '6': '৬', '7': '৭', '8': '৮', '9': '৯'
        };

        function convertToBanglaNumeral(number) {
            return number.toString().split('').map(digit => englishToBangla[digit] || digit).join('');
        }

        // Counter animation function with better timing
        function animateCounter(counter) {
            const target = parseInt(counter.dataset.target);
            const banglaNumber = counter.dataset.bangla;
            const duration = 2000;
            const steps = 60;
            const stepTime = duration / steps;
            let current = 0;
            
            const updateCounter = () => {
                if (current < target) {
                    current += target / steps;
                    if (current > target) current = target;
                    
                    if (current === target) {
                        counter.textContent = banglaNumber;
                    } else {
                        counter.textContent = convertToBanglaNumeral(Math.floor(current));
                    }
                    
                    if (current < target) {
                        setTimeout(updateCounter, stepTime);
                    }
                }
            };
            
            updateCounter();
        }

        // Improved Intersection Observer setup
        const observerOptions = {
            root: null,
            rootMargin: '-50px', // Only trigger when element is 50px within viewport
            threshold: 0.6 // Trigger when 60% of element is visible
        };

        let hasAnimated = false; // Flag to track if animation has run

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !hasAnimated) {
                    hasAnimated = true; // Set flag to prevent re-animation
                    
                    // Add a small delay to ensure smooth animation start
                    setTimeout(() => {
                        document.querySelectorAll('.counter').forEach(counter => {
                            animateCounter(counter);
                        });
                    }, 100);

                    observer.unobserve(entry.target); // Stop observing after animation starts
                }
            });
        }, observerOptions);

        // Start observing when document is ready
        document.addEventListener('DOMContentLoaded', () => {
            const statsSection = document.querySelector('.counter').parentElement.parentElement.parentElement;
            if (statsSection) {
                observer.observe(statsSection);
            }
        });
    </script>


    <!-- Notice Board Section -->
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-8">নোটিশ বোর্ড</h2>

        <!-- Notice List -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600 w-[60px]">ক্রমিক</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">বিষয়</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600 w-[120px]">তারিখ</th>
                            <th class="px-4 py-3 text-center text-sm font-semibold text-gray-600 w-[100px]">ডাউনলোড</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200" id="noticeList">
                        <?php
                        try {
                            // Get notices with attachments
                            $stmt = $conn->prepare("
                                SELECT n.id, n.title, n.created_at, 
                                       GROUP_CONCAT(na.file_name) as attachment_files
                                FROM notices n 
                                LEFT JOIN notice_attachments na ON n.id = na.notice_id
                                GROUP BY n.id
                                ORDER BY n.created_at DESC 
                                LIMIT 5
                            ");
                            $stmt->execute();
                            $notices = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            if (!empty($notices)) {
                                foreach ($notices as $index => $notice) {
                                    // Show serial number in English
                                    $serialNumber = ($index + 1) . '.';
                                    
                                    // Format date in English (e.g., 01 January 2025)
                                    $date = new DateTime($notice['created_at']);
                                    $englishDate = $date->format('d F Y');
                                    ?>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-3 text-sm text-gray-500"><?php echo $serialNumber; ?></td>
                                        <td class="px-4 py-3 text-sm text-gray-500 break-words min-w-[200px] max-w-[300px] md:max-w-none"><?php echo htmlspecialchars($notice['title']); ?></td>
                                        <td class="px-4 py-3 text-sm text-gray-500"><?php echo $englishDate; ?></td>
                                        <td class="px-4 py-3 text-center">
                                            <?php if (!empty($notice['attachment_files'])): ?>
                                                <a href="uploads/notices/<?php echo explode(',', $notice['attachment_files'])[0]; ?>" 
                                                   class="inline-flex items-center px-3 py-1 bg-primary text-white text-sm rounded hover:bg-primary/90 transition-all duration-300">
                                                    <i class="fas fa-download mr-2"></i> ডাউনলোড
                                                </a>
                                            <?php else: ?>
                                                <span class="text-gray-400">ফাইল নেই</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="4" class="px-4 py-3 text-center text-gray-500">
                                        কোন নোটিশ নেই
                                    </td>
                                </tr>
                                <?php
                            }
                        } catch (PDOException $e) {
                            ?>
                            <tr>
                                <td colspan="4" class="px-4 py-3 text-center text-gray-500">
                                    নোটিশ লোড করতে সমস্যা হচ্ছে। পরে আবার চেষ্টা করুন।
                                    <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']): ?>
                                        <br><small><?php echo $e->getMessage(); ?></small>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            
            <!-- Read More Button -->
            <div class="text-center mt-6">
                <a href="notices.php" class="inline-flex items-center px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition-all duration-300">
                    সকল নোটিশ দেখুন
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
<!-- Gallery Section -->
<style>
        .gallery-card {
            transition: all 0.3s ease-in-out;
        }
        .gallery-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .gallery-card img {
            transition: all 0.5s ease-in-out;
        }
        .gallery-card:hover img {
            transform: scale(1.05);
        }
        .gallery-title {
            position: relative;
            display: inline-block;
        }
        .gallery-title::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 50%;
            background-color: #006A4E;
            transition: all 0.3s ease-in-out;
        }
        .gallery-title:hover::after {
            width: 100%;
            left: 0;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease-out forwards;
        }
    </style>

    <?php
    // Get latest 3 photo groups
    $stmt = $conn->prepare("
        SELECT pg.*, u.name as uploader_name,
               COUNT(p.id) as photo_count
        FROM photo_groups pg
        JOIN users u ON pg.created_by = u.id
        LEFT JOIN photos p ON p.group_id = pg.id
        GROUP BY pg.id
        ORDER BY pg.created_at DESC
        LIMIT 3
    ");
    $stmt->execute();
    $gallery_items = $stmt->fetchAll();

    // Get cover images in a separate query
    if (!empty($gallery_items)) {
        $group_ids = array_column($gallery_items, 'id');
        $placeholders = str_repeat('?,', count($group_ids) - 1) . '?';
        
        $cover_stmt = $conn->prepare("
            SELECT p1.*
            FROM photos p1
            INNER JOIN (
                SELECT group_id, MIN(id) as min_id
                FROM photos
                WHERE group_id IN ($placeholders)
                GROUP BY group_id
            ) p2 ON p1.id = p2.min_id
        ");
        $cover_stmt->execute($group_ids);
        $cover_images = [];
        while ($row = $cover_stmt->fetch()) {
            $cover_images[$row['group_id']] = $row['image_path'];
        }
    }
    ?>

    <div class="container mx-auto px-4 py-16">
        <div class="flex justify-center mb-8">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 gallery-title">ফটো গ্যালারি</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php 
            $delay = 0;
            foreach ($gallery_items as $item): 
            ?>
            <div class="gallery-card bg-white rounded-lg shadow-lg overflow-hidden animate-fadeInUp" style="animation-delay: <?php echo $delay; ?>s">
                <div class="overflow-hidden">
                    <img src="<?php echo isset($cover_images[$item['id']]) ? htmlspecialchars($cover_images[$item['id']]) : 'assetscontant/images/placeholder.jpg'; ?>" 
                         alt="<?php echo htmlspecialchars($item['title']); ?>" 
                         class="w-full h-64 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 hover:text-primary transition-colors duration-300"><?php echo htmlspecialchars($item['title']); ?></h3>
                    <p class="text-gray-600 text-sm mb-2">আপলোডার: <?php echo htmlspecialchars($item['uploader_name']); ?></p>
                    <p class="text-gray-600 text-sm">ছবির সংখ্যা: <?php echo $item['photo_count']; ?></p>
                </div>
            </div>
            <?php 
            $delay += 0.2;
            endforeach; 
            ?>
        </div>

        <!-- View All Button -->
        <div class="text-center mt-10">
            <a href="gallery.php" class="inline-flex items-center px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition-all duration-300 hover:scale-105">
                সকল ছবি দেখুন
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</div>

<!-- Events Section -->
<style>
    .event-card {
        transition: all 0.3s ease-in-out;
    }
    .event-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    .event-date {
        background: linear-gradient(135deg, #006A4E 0%, #004a37 100%);
    }
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .animate-fadeInUp {
        animation: fadeInUp 0.6s ease-out forwards;
    }
</style>

<?php
// Get upcoming events with error handling
try {
    $stmt = $conn->prepare("
        SELECT e.*, u.name as organizer_name
        FROM events e 
        LEFT JOIN users u ON e.organizer_id = u.id 
        WHERE e.event_date >= CURRENT_DATE()
        ORDER BY e.event_date ASC, e.event_time ASC
        LIMIT 3
    ");
    $stmt->execute();
    $upcoming_events = $stmt->fetchAll();
} catch (PDOException $e) {
    $upcoming_events = [];
}
?>

<?php if (!empty($upcoming_events)): ?>
<div class="container mx-auto px-4 py-16 bg-gray-50">
    <div class="flex justify-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 gallery-title">আসন্ন অনুষ্ঠান সমূহ</h2>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php 
        $delay = 0;
        foreach ($upcoming_events as $event): 
            $event_date = new DateTime($event['event_date']);
        ?>
        <div class="event-card bg-white rounded-lg shadow-lg overflow-hidden animate-fadeInUp" style="animation-delay: <?php echo $delay; ?>s">
            <div class="event-date p-4 text-white text-center">
                <div class="text-2xl font-bold"><?php echo $event_date->format('d'); ?></div>
                <div class="text-sm"><?php echo $event_date->format('F Y'); ?></div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2 hover:text-primary transition-colors duration-300">
                    <?php echo htmlspecialchars($event['title'] ?? 'Upcoming Event'); ?>
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    <?php 
                    if (isset($event['description'])) {
                        echo htmlspecialchars(mb_substr($event['description'], 0, 100)) . '...';
                    } else {
                        echo 'Event details coming soon...';
                    }
                    ?>
                </p>
                <div class="flex items-center text-gray-500 text-sm">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <?php echo isset($event['event_time']) ? date('h:i A', strtotime($event['event_time'])) : 'TBA'; ?>
                </div>
                <div class="flex items-center text-gray-500 text-sm mt-2">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <?php echo htmlspecialchars($event['venue'] ?? 'Venue TBA'); ?>
                </div>
            </div>
        </div>
        <?php 
            $delay += 0.2;
        endforeach; 
        ?>
    </div>

    <!-- View All Button -->
    <div class="text-center mt-10">
        <a href="events.php" class="inline-flex items-center px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition-all duration-300 hover:scale-105">
            সকল অনুষ্ঠান দেখুন
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>
</div>
<?php endif; ?>

<!-- Location Section -->
<div class="relative bg-gradient-to-br from-primary/5 to-primary/10 py-20">
    <!-- Decorative Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-10 -right-10 w-40 h-40 bg-primary/10 rounded-full filter blur-3xl"></div>
        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-primary/10 rounded-full filter blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">ফেনী পলিটেকনিক ইনস্টিটিউট</h2>
            <div class="w-20 h-1 bg-primary mx-auto rounded-full"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <!-- Google Map -->
            <div class="transform hover:-translate-y-2 transition-all duration-300">
                <div class="relative w-full h-[400px] rounded-2xl overflow-hidden shadow-2xl bg-white p-2">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary/5 to-transparent"></div>
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.7965109569777!2d91.40811247425036!3d23.031242579167614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375369ae3d72f73b%3A0xaf6db3b21c8e61e9!2sFeni%20Polytechnic%20Institute-FPI!5e0!3m2!1sen!2sbd!4v1735565541781!5m2!1sen!2sbd"
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="rounded-xl"
                    ></iframe>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden transform hover:-translate-y-2 transition-all duration-300">
                <div class="p-8">
                    <div class="space-y-6">
                        <!-- Address -->
                        <div class="flex items-start space-x-6 group">
                            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-all duration-300">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">ঠিকানা</h3>
                                <p class="text-gray-600 leading-relaxed">পোস্ট - মালিপুর, পোস্ট কোড-৩৯০০<br>ফেনী সদর, ফেনী।</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start space-x-6 group">
                            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-all duration-300">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">যোগাযোগ</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    <a href="tel:02334474030" class="hover:text-primary transition-colors block">
                                        ফোন: ০২৩৩৪৪৭৪০৩০
                                    </a>
                                    <a href="tel:01765696900" class="hover:text-primary transition-colors block">
                                        মোবাইল: ০১৭৬৫৬৯৬৯০০ (অধ্যক্ষ)
                                    </a>
                                </p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start space-x-6 group">
                            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-all duration-300">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7-7m0 0l7 7m-7-7v18"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">ইমেইল</h3>
                                <a href="mailto:fenipoly69015@gmail.com" class="text-gray-600 hover:text-primary transition-colors">
                                    fenipoly69015@gmail.com
                                </a>
                            </div>
                        </div>

                        <!-- Website -->
                        <div class="flex items-start space-x-6 group">
                            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-all duration-300">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">ওয়েবসাইট</h3>
                                <a href="http://www.feni.polytech.gov.bd" target="_blank" class="text-gray-600 hover:text-primary transition-colors">
                                    www.feni.polytech.gov.bd
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scroll to Top Button -->
<button id="scrollToTop" class="fixed bottom-4 right-4 w-12 h-12 bg-primary hover:bg-primary/90 text-white rounded-full shadow-lg flex items-center justify-center transform transition-all duration-300 opacity-0 translate-y-10 hover:scale-110 z-50">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
    </svg>
</button>

<script>
    // Scroll to Top Functionality
    const scrollToTopBtn = document.getElementById('scrollToTop');
    
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollToTopBtn.classList.remove('opacity-0', 'translate-y-10');
            scrollToTopBtn.classList.add('opacity-100', 'translate-y-0');
        } else {
            scrollToTopBtn.classList.add('opacity-0', 'translate-y-10');
            scrollToTopBtn.classList.remove('opacity-100', 'translate-y-0');
        }
    });
    
    scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>

<?php include 'includes/footer.php'; ?>
</body>
</html>