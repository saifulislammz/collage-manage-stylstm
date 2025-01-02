<?php
$title = "অবকাঠামোর তথ্য | ফেনী পলিটেকনিক ইনস্টিটিউট";
include('includes/header.php');
?>

<!-- Page Header -->
<div class="bg-gradient-to-r from-green-900 via-green-800 to-green-900 text-white py-12 mb-8">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl md:text-4xl font-bold text-center mb-4">অবকাঠামোর তথ্য</h1>
        <div class="flex justify-center">
            <nav class="text-sm md:text-base">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center">
                        <a href="index.php" class="text-yellow-400 hover:text-yellow-200">হোম</a>
                        <svg class="w-3 h-3 mx-2" fill="currentColor" viewBox="0 0 12 12">
                            <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"/>
                        </svg>
                    </li>
                    <li class="text-yellow-200">অবকাঠামোর তথ্য</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <!-- Total Area -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="p-6 border-b-4 border-green-600">
                <div class="flex items-center justify-center space-x-4">
                    <i class="fas fa-ruler-combined text-4xl text-green-600"></i>
                    <div>
                        <h2 class="text-2xl font-bold text-green-800">মোট আয়তন</h2>
                        <p class="text-xl text-gray-700">১৫.৯৭ একর</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Infrastructure Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Academic Buildings -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-green-800 mb-4 flex items-center">
                        <i class="fas fa-building mr-3 text-green-600"></i>
                        শিক্ষা ভবন
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            প্রশাসনিক ভবন: ০১টি
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            একাডেমিক ভবন: একাধিক
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            ওয়ার্কশপ: ২০টি
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            লাইব্রেরী: ০১টি
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Residential Buildings -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-green-800 mb-4 flex items-center">
                        <i class="fas fa-home mr-3 text-green-600"></i>
                        আবাসিক ভবন
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            ছাত্রাবাস: ০২টি
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            ছাত্রীনিবাস: ০১টি
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            অধ্যক্ষের বাংলো: ০১টি
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            শিক্ষক ও কর্মচারী আবাস: একাধিক
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Additional Facilities -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-green-800 mb-4 flex items-center">
                        <i class="fas fa-plus-circle mr-3 text-green-600"></i>
                        অতিরিক্ত সুবিধাসমূহ
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            অডিটোরিয়াম: ৬০০ আসন বিশিষ্ট
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            ডরমেটরী: ০১টি (৫ কক্ষ)
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            ব্যাচেলর শেড: ০১টি
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            রোভার ভবন: ০১টি
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Recreational Facilities -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-green-800 mb-4 flex items-center">
                        <i class="fas fa-football-ball mr-3 text-green-600"></i>
                        বিনোদন ও অন্যান্য সুবিধা
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            খেলার মাঠ: ০১টি
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            পুকুর: ০১টি
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            ক্যান্টিন: ০১টি
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            শীতাতপ নিয়ন্ত্রিত মসজিদ: ০১টি
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
