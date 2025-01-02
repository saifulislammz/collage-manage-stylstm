<?php 
$page_title = "রোভার্স এন্ড স্কাউট";
include('includes/header.php'); 
?>

<style>
    .custom-gradient {
        background: linear-gradient(135deg, #006A4E20, #F42A4110);
    }
    .achievement-card {
        transition: transform 0.3s ease;
    }
    .achievement-card:hover {
        transform: translateY(-5px);
    }
</style>

<div class="py-8" style="background-color: #FFF8F0;">
    <div class="container mx-auto px-4">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4" style="color: #006A4E;">রোভার্স এন্ড স্কাউট</h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">ফেনী পলিটেকনিক ইনস্টিটিউটের রোভার্স এন্ড স্কাউট দল</p>
        </div>

        <!-- Main Content -->
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden border-t-4" style="border-color: #006A4E;">
            <!-- Image Section -->
            <div class="relative aspect-w-16 aspect-h-9 mb-6">
                <img src="assetscontant/images/rovers.jpg" alt="Rovers and Scouts" class="w-full h-[400px] object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
            </div>

            <!-- Content Section -->
            <div class="p-8">
                <div class="space-y-8">
                    <!-- About Section -->
                    <div class="custom-gradient p-6 rounded-lg">
                        <h2 class="text-2xl font-semibold mb-4" style="color: #006A4E;">আমাদের সম্পর্কে</h2>
                        <p class="text-gray-600 leading-relaxed">
                            ফেনী পলিটেকনিক ইনস্টিটিউটের রোভার স্কাউট গ্রুপ শিক্ষার্থীদের মধ্যে নেতৃত্ব, সামাজিক দায়িত্ববোধ এবং দেশপ্রেম জাগ্রত করার লক্ষ্যে কাজ করে যাচ্ছে। আমাদের দল বিভিন্ন সামাজিক ও সেবামূলক কার্যক্রমে সক্রিয় অংশগ্রহণ করে থাকে।
                        </p>
                    </div>

                    <!-- Activities Section -->
                    <div>
                        <h2 class="text-2xl font-semibold mb-6" style="color: #006A4E;">আমাদের কার্যক্রম</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex items-start space-x-3 p-4 rounded-lg" style="background-color: #FFF8F0;">
                                <i class="fas fa-hands-helping mt-1" style="color: #F42A41;"></i>
                                <div>
                                    <h3 class="font-medium mb-2" style="color: #006A4E;">সামাজিক সেবামূলক কার্যক্রম</h3>
                                    <p class="text-gray-600 text-sm">সমাজের উন্নয়নে বিভিন্ন সেবামূলক কাজে অংশগ্রহণ</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3 p-4 rounded-lg" style="background-color: #FFF8F0;">
                                <i class="fas fa-hand-holding-heart mt-1" style="color: #F42A41;"></i>
                                <div>
                                    <h3 class="font-medium mb-2" style="color: #006A4E;">দুর্যোগ ব্যবস্থাপনা</h3>
                                    <p class="text-gray-600 text-sm">প্রাকৃতিক দুর্যোগে সহায়তা ও ত্রাণ বিতরণ</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3 p-4 rounded-lg" style="background-color: #FFF8F0;">
                                <i class="fas fa-tree mt-1" style="color: #F42A41;"></i>
                                <div>
                                    <h3 class="font-medium mb-2" style="color: #006A4E;">পরিবেশ সংরক্ষণ</h3>
                                    <p class="text-gray-600 text-sm">বৃক্ষরোপণ ও পরিবেশ সচেতনতা কার্যক্রম</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3 p-4 rounded-lg" style="background-color: #FFF8F0;">
                                <i class="fas fa-heartbeat mt-1" style="color: #F42A41;"></i>
                                <div>
                                    <h3 class="font-medium mb-2" style="color: #006A4E;">স্বাস্থ্য সচেতনতা</h3>
                                    <p class="text-gray-600 text-sm">স্বাস্থ্য শিক্ষা ও সচেতনতা কর্মসূচি</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Achievement Section -->
                    <div>
                        <h2 class="text-2xl font-semibold mb-6" style="color: #006A4E;">আমাদের অর্জন</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="achievement-card p-6 rounded-lg border-l-4" style="background-color: #FFF8F0; border-left-color: #F42A41;">
                                <h3 class="font-medium mb-3" style="color: #006A4E;">জাতীয় পুরস্কার</h3>
                                <p class="text-gray-600">বিভিন্ন জাতীয় প্রতিযোগিতায় সেরা অবস্থান অর্জন</p>
                            </div>
                            <div class="achievement-card p-6 rounded-lg border-l-4" style="background-color: #FFF8F0; border-left-color: #F42A41;">
                                <h3 class="font-medium mb-3" style="color: #006A4E;">সামাজিক অবদান</h3>
                                <p class="text-gray-600">উল্লেখযোগ্য সামাজিক কার্যক্রমে অবদানের স্বীকৃতি</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Section -->
                    <div class="p-6 rounded-lg" style="background-color: #FFF8F0;">
                        <h2 class="text-2xl font-semibold mb-6" style="color: #006A4E;">যোগাযোগ</h2>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-full flex items-center justify-center" style="background-color: #006A4E20;">
                                    <i class="fas fa-user" style="color: #006A4E;"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">রোভার লিডার</p>
                                    <p class="text-gray-700">জনাব মোঃ আব্দুল করিম</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-full flex items-center justify-center" style="background-color: #006A4E20;">
                                    <i class="fas fa-phone" style="color: #006A4E;"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">ফোন</p>
                                    <p class="text-gray-700">+880-1234567890</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-full flex items-center justify-center" style="background-color: #006A4E20;">
                                    <i class="fas fa-envelope" style="color: #006A4E;"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">ইমেইল</p>
                                    <p class="text-gray-700">rovers@feni.polytech.gov.bd</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- PDF Button Section -->
                <div class="mt-8 text-center">
                    <a href="https://feni.polytech.gov.bd/sites/default/files/files/feni.polytech.gov.bd/page/e4660949_266f_4c32_9be4_5e34c28e4eab/2023-12-23-10-35-17413b661c7fe83ca280dec88352d62d.pdf" 
                       class="inline-flex items-center px-8 py-3 text-white font-medium rounded-lg transition duration-150 ease-in-out"
                       style="background-color: #006A4E; hover:background-color: #005841;">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        রোভার্স তথ্য ডাউনলোড
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
