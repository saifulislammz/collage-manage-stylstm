<?php
require_once 'config/db_config.php';

// Get photo groups with uploader information
$stmt = $conn->prepare("
    SELECT pg.*, u.name as uploader_name,
           (SELECT COUNT(*) FROM photos p WHERE p.group_id = pg.id) as photo_count
    FROM photo_groups pg
    JOIN users u ON pg.created_by = u.id
    ORDER BY pg.created_at DESC
");
$stmt->execute();
$photo_groups = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ফটো গ্যালারি - কলেজ ম্যানেজমেন্ট সিস্টেম</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Lightbox CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <style>
        .hero-pattern {
            background-color: #006A4E;
        }
        .gallery-card {
            transition: transform 0.3s ease-in-out;
        }
        .gallery-card:hover {
            transform: translateY(-5px);
        }
        @media (max-width: 640px) {
            .hero-text {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body style="background-color: #FFF8F0;">
    <!-- Include Header -->
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <div class="hero-pattern text-white py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="hero-text text-4xl md:text-5xl font-bold mb-4" style="color: #FFF8F0;">ক্যাম্পাস ফটো গ্যালারি</h1>
                <p class="text-lg md:text-xl text-gray-200 mb-8" style="color: #FFF8F0;">আমাদের ক্যাম্পাস লাইফ এবং স্মরণীয় মুহূর্তগুলি ফটো গ্যালারিতে দেখুন</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#gallery" class="inline-flex items-center px-6 py-3 rounded-lg text-lg font-medium transition-all duration-300 hover:shadow-lg" style="background-color: #F42A41; color: #FFF8F0; border: 1px solid #FFF8F0;">
                        <i class="fas fa-images mr-2"></i>ফটোগ্যালারি দেখুন
                    </a>
                    <a href="#videos" class="inline-flex items-center px-6 py-3 rounded-lg text-lg font-medium transition-all duration-300 hover:bg-#F42A41 hover:text-#FFF8F0" style="color: #FFF8F0; border: 1px solid #FFF8F0;">
                        <i class="fas fa-video mr-2"></i>ভিডিওগ্যালারি দেখুন
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="py-12" style="background-color: #FFF8F0;">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="p-6 rounded-lg text-center" style="background-color: rgba(0, 106, 78, 0.1);">
                    <div class="text-3xl font-bold mb-2" style="color: #006A4E;"><?php echo count($photo_groups); ?></div>
                    <div style="color: #006A4E;">ফটো অ্যালবাম</div>
                </div>
                <div class="p-6 rounded-lg text-center" style="background-color: rgba(0, 106, 78, 0.1);">
                    <div class="text-3xl font-bold mb-2" style="color: #006A4E;">
                        <?php
                        $total_photos = 0;
                        foreach ($photo_groups as $group) {
                            $total_photos += $group['photo_count'];
                        }
                        echo $total_photos;
                        ?>
                    </div>
                    <div style="color: #006A4E;">মোট ছবি</div>
                </div>
                <div class="p-6 rounded-lg text-center" style="background-color: rgba(0, 106, 78, 0.1);">
                    <div class="text-3xl font-bold mb-2" style="color: #006A4E;">
                        <?php echo count(array_unique(array_column($photo_groups, 'created_by'))); ?>
                    </div>
                    <div style="color: #006A4E;">কন্ট্রিবিউটর</div>
                </div>
                <div class="p-6 rounded-lg text-center" style="background-color: rgba(0, 106, 78, 0.1);">
                    <div class="text-3xl font-bold mb-2" style="color: #006A4E;">
                        <?php echo date('Y') - 2023; ?>+
                    </div>
                    <div style="color: #006A4E;">বছরের স্মৃতি</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Gallery Section -->
    <div id="gallery" class="container mx-auto px-4 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4" style="color: #006A4E;">ফটো কালেকশন</h2>
            <p class="text-gray-600 max-w-2xl mx-auto" style="color: #006A4E;">ক্যাম্পাস লাইফ, ইভেন্ট এবং অর্জনগুলির বিভিন্ন দিক তুলে ধরা আমাদের নির্বাচিত ফটো কালেকশন দেখুন</p>
        </div>

        <!-- Search and Filter -->
        <div class="mb-8">
            <div class="max-w-xl mx-auto">
                <div class="relative">
                    <input type="text" id="gallery-search" 
                           placeholder="ফটো কালেকশন খুঁজুন..." 
                           class="w-full px-4 py-3 rounded-lg border focus:outline-none focus:ring-2" 
                           style="border-color: #006A4E; color: #006A4E;">
                    <span class="absolute right-3 top-3" style="color: #006A4E;">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <?php foreach ($photo_groups as $group): ?>
                <div class="rounded-lg overflow-hidden shadow-lg transition-transform duration-300 hover:-translate-y-1" style="background-color: #FFF8F0; border: 2px solid #006A4E;">
                    <a href="view_gallery.php?group_id=<?php echo $group['id']; ?>" class="block">
                        <div class="relative pb-[75%] overflow-hidden">
                            <img src="<?php echo htmlspecialchars($group['thumbnail_path']); ?>" 
                                 alt="<?php echo htmlspecialchars($group['title']); ?>"
                                 class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2" style="color: #006A4E;">
                                <?php echo htmlspecialchars($group['title']); ?>
                            </h3>
                            <div class="flex justify-between items-center text-sm" style="color: #006A4E;">
                                <span class="flex items-center">
                                    <i class="fas fa-user mr-1"></i>
                                    <?php echo htmlspecialchars($group['uploader_name']); ?>
                                </span>
                                <span class="flex items-center">
                                    <i class="fas fa-images mr-1"></i>
                                    <?php echo $group['photo_count']; ?> টি ছবি
                                </span>
                            </div>
                            <div class="mt-2 text-sm" style="color: #006A4E;">
                                <span class="flex items-center">
                                    <i class="fas fa-calendar-alt mr-1"></i>
                                    <?php echo date('M d, Y', strtotime($group['created_at'])); ?>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- No Results Message -->
        <div id="no-results" class="hidden text-center py-12">
            <div style="color: #006A4E;">
                <i class="fas fa-search text-4xl mb-4"></i>
                <p class="text-xl">আপনার সার্চের সাথে মিলে যাওয়া কোন ফটো কালেকশন পাওয়া যায়নি</p>
            </div>
        </div>
    </div>

    <!-- Include Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script>
        // Configure lightbox
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'albumLabel': 'Image %1 of %2'
        });

        // Search functionality
        document.getElementById('gallery-search').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const cards = document.querySelectorAll('.gallery-card');
            let hasResults = false;

            cards.forEach(card => {
                const title = card.querySelector('h3').textContent.toLowerCase();
                const uploader = card.querySelector('.fa-user').nextSibling.textContent.toLowerCase();
                
                if (title.includes(searchTerm) || uploader.includes(searchTerm)) {
                    card.style.display = 'block';
                    hasResults = true;
                } else {
                    card.style.display = 'none';
                }
            });

            // Toggle no results message
            document.getElementById('no-results').style.display = hasResults ? 'none' : 'block';
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
