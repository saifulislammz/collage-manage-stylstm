<?php
require_once 'config/db_config.php';

if (!isset($_GET['group_id'])) {
    header("Location: gallery.php");
    exit();
}

$group_id = $_GET['group_id'];

// Get group details
$stmt = $conn->prepare("
    SELECT pg.*, u.name as uploader_name
    FROM photo_groups pg
    JOIN users u ON pg.created_by = u.id
    WHERE pg.id = ?
");
$stmt->execute([$group_id]);
$group = $stmt->fetch();

if (!$group) {
    header("Location: gallery.php");
    exit();
}

// Get all photos in the group
$stmt = $conn->prepare("
    SELECT * FROM photos 
    WHERE group_id = ? 
    ORDER BY created_at ASC
");
$stmt->execute([$group_id]);
$photos = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($group['title']); ?> - ফটো গ্যালারি</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <style>
        .gallery-image {
            transition: transform 0.3s ease-in-out;
        }
        .gallery-image:hover {
            transform: scale(1.03);
        }
        .masonry-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 1.5rem;
            grid-auto-flow: dense;
        }
        @media (max-width: 640px) {
            .masonry-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
        }
        .aspect-ratio-box {
            position: relative;
            padding-top: 75%; /* 4:3 Aspect Ratio */
            overflow: hidden;
            background-color: #FFF8F0;
            border-radius: 0.5rem;
        }
        .aspect-ratio-box img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .aspect-ratio-box:hover img {
            transform: scale(1.05);
        }
    </style>
</head>
<body style="background-color: #FFF8F0;">
    <!-- Include Header -->
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <div style="background-color: #006A4E;" class="text-white py-12 text-center">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-3xl md:text-4xl font-bold mb-4"><?php echo htmlspecialchars($group['title']); ?></h1>
                <div class="flex flex-wrap items-center justify-center gap-4 text-sm md:text-base" style="color: #FFB81C;">
                    <div class="flex items-center">
                        <i class="fas fa-user mr-2"></i>
                        আপলোড করেছেন: <?php echo htmlspecialchars($group['uploader_name']); ?>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-calendar mr-2"></i>
                        তারিখ: <?php echo date('F j, Y', strtotime($group['created_at'])); ?>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-folder mr-2"></i>
                        ক্যাটাগরি: <?php echo htmlspecialchars($group['category']); ?>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-images mr-2"></i>
                        মোট ছবি: <?php echo count($photos); ?> টি
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery Section -->
    <div class="container mx-auto px-4 py-12">
        <?php if (empty($photos)): ?>
            <div class="text-center py-12">
                <div style="color: #006A4E;">
                    <i class="fas fa-images text-4xl mb-4"></i>
                    <p class="text-xl">এই অ্যালবামে কোন ছবি নেই।</p>
                </div>
            </div>
        <?php else: ?>
            <!-- Image Grid -->
            <div class="masonry-grid">
                <?php foreach ($photos as $photo): ?>
                    <div class="gallery-image">
                        <a href="<?php echo htmlspecialchars($photo['image_path']); ?>" 
                           data-lightbox="gallery" 
                           data-title="<?php echo htmlspecialchars($photo['title']); ?>"
                           class="block">
                            <div class="aspect-ratio-box shadow-lg rounded-lg overflow-hidden">
                                <img src="<?php echo htmlspecialchars($photo['image_path']); ?>" 
                                     alt="<?php echo htmlspecialchars($photo['title']); ?>"
                                     class="w-full h-full object-cover">
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
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
            'albumLabel': 'ছবি %1 / %2',
            'fadeDuration': 300,
            'imageFadeDuration': 300,
            'disableScrolling': true
        });

        // Lazy loading for images
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('img[data-src]');
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        observer.unobserve(img);
                    }
                });
            });

            images.forEach(img => imageObserver.observe(img));
        });
    </script>
</body>
</html>
