<?php
$page = 'sitemap';
require_once('includes/header.php');
?>

<div class="py-8 sm:py-12" style="background-color: #FFF8F0;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="p-6 sm:p-8">
                    <h1 class="text-2xl sm:text-3xl font-bold text-center mb-8" style="color: #006A4E;">সাইটম্যাপ</h1>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Main Pages -->
                        <div class="space-y-6">
                            <div>
                                <h2 class="text-xl font-semibold mb-4" style="color: #006A4E;">প্রধান মেনু</h2>
                                <ul class="space-y-3">
                                    <li>
                                        <a href="index.php" class="flex items-center text-gray-600 hover:text-[#006A4E] transition-colors">
                                            <i class="fas fa-home mr-2"></i>হোম
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about-us.php" class="flex items-center text-gray-600 hover:text-[#006A4E] transition-colors">
                                            <i class="fas fa-info-circle mr-2"></i>আমাদের সম্পর্কে
                                        </a>
                                    </li>
                                    <li>
                                        <a href="notice.php" class="flex items-center text-gray-600 hover:text-[#006A4E] transition-colors">
                                            <i class="fas fa-bullhorn mr-2"></i>নোটিশ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="gallery.php" class="flex items-center text-gray-600 hover:text-[#006A4E] transition-colors">
                                            <i class="fas fa-images mr-2"></i>গ্যালারি
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.php" class="flex items-center text-gray-600 hover:text-[#006A4E] transition-colors">
                                            <i class="fas fa-envelope mr-2"></i>যোগাযোগ
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Academic -->
                            <div>
                                <h2 class="text-xl font-semibold mb-4" style="color: #006A4E;">একাডেমিক</h2>
                                <ul class="space-y-3">
                                    <li>
                                        <a href="departments.php" class="flex items-center text-gray-600 hover:text-[#006A4E] transition-colors">
                                            <i class="fas fa-graduation-cap mr-2"></i>বিভাগসমূহ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="teachers.php" class="flex items-center text-gray-600 hover:text-[#006A4E] transition-colors">
                                            <i class="fas fa-chalkboard-teacher mr-2"></i>শিক্ষকবৃন্দ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="routine.php" class="flex items-center text-gray-600 hover:text-[#006A4E] transition-colors">
                                            <i class="fas fa-calendar-alt mr-2"></i>ক্লাস রুটিন
                                        </a>
                                    </li>
                                    <li>
                                        <a href="result.php" class="flex items-center text-gray-600 hover:text-[#006A4E] transition-colors">
                                            <i class="fas fa-poll mr-2"></i>ফলাফল
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Additional Pages -->
                        <div class="space-y-6">
                            <!-- Resources -->
                            <div>
                                <h2 class="text-xl font-semibold mb-4" style="color: #006A4E;">রিসোর্স</h2>
                                <ul class="space-y-3">
                                    <li>
                                        <a href="download.php" class="flex items-center text-gray-600 hover:text-[#006A4E] transition-colors">
                                            <i class="fas fa-download mr-2"></i>ডাউনলোড
                                        </a>
                                    </li>
                                    <li>
                                        <a href="regulations.php" class="flex items-center text-gray-600 hover:text-[#006A4E] transition-colors">
                                            <i class="fas fa-gavel mr-2"></i>প্রবিধান
                                        </a>
                                    </li>
                                    <li>
                                        <a href="syllabus.php" class="flex items-center text-gray-600 hover:text-[#006A4E] transition-colors">
                                            <i class="fas fa-book mr-2"></i>সিলেবাস
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Important Links -->
                            <div>
                                <h2 class="text-xl font-semibold mb-4" style="color: #006A4E;">গুরুত্বপূর্ণ লিংক</h2>
                                <ul class="space-y-3">
                                    <li>
                                        <a href="admission.php" class="flex items-center text-gray-600 hover:text-[#006A4E] transition-colors">
                                            <i class="fas fa-user-plus mr-2"></i>ভর্তি
                                        </a>
                                    </li>
                                    <li>
                                        <a href="events.php" class="flex items-center text-gray-600 hover:text-[#006A4E] transition-colors">
                                            <i class="fas fa-calendar-check mr-2"></i>ইভেন্ট
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Footer Links -->
                            <div>
                                <h2 class="text-xl font-semibold mb-4" style="color: #006A4E;">অন্যান্য</h2>
                                <ul class="space-y-3">
                                    <li>
                                        <a href="privacy-policy.php" class="flex items-center text-gray-600 hover:text-[#006A4E] transition-colors">
                                            <i class="fas fa-shield-alt mr-2"></i>গোপনীয়তা নীতি
                                        </a>
                                    </li>
                                    <li>
                                        <a href="terms-of-use.php" class="flex items-center text-gray-600 hover:text-[#006A4E] transition-colors">
                                            <i class="fas fa-file-contract mr-2"></i>ব্যবহারের শর্তাবলী
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Last Updated -->
                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <p class="text-sm text-gray-500 text-center">সর্বশেষ আপডেট: ডিসেম্বর ৩০, ২০২৪</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('includes/footer.php'); ?>
