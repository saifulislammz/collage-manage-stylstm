<?php
$page = 'hostel';
require_once('includes/header.php');
?>

<div class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-sm overflow-hidden">
            <!-- Header Image -->
            <div class="aspect-w-16 aspect-h-9 mb-6">
                <img src="assetscontant/images/hostel.jpg" alt="College Hostel" class="w-full h-64 object-cover">
            </div>

            <!-- Content Section -->
            <div class="p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6 text-center">হোস্টেল তালিকা</h1>
                
                <div class="space-y-8">
                    <!-- Boys Hostel -->
                    <div class="border-b pb-6">
                        <h2 class="text-2xl font-semibold text-indigo-600 mb-4">ছেলেদের হোস্টেল</h2>
                        <div class="bg-white rounded-lg border border-gray-200">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">হোস্টেল নাম</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">অবস্থান</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">সিট সংখ্যা</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">সুপারভাইজার</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">ছেলেদের হোস্টেল-১</td>
                                            <td class="px-6 py-4 whitespace-nowrap">মেইন ক্যাম্পাস</td>
                                            <td class="px-6 py-4 whitespace-nowrap">১০০</td>
                                            <td class="px-6 py-4 whitespace-nowrap">জনাব মোঃ আব্দুল করিম</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">ছেলেদের হোস্টেল-২</td>
                                            <td class="px-6 py-4 whitespace-nowrap">দক্ষিণ ক্যাম্পাস</td>
                                            <td class="px-6 py-4 whitespace-nowrap">১৫০</td>
                                            <td class="px-6 py-4 whitespace-nowrap">জনাব মোঃ রফিকুল ইসলাম</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Girls Hostel -->
                    <div class="border-b pb-6">
                        <h2 class="text-2xl font-semibold text-indigo-600 mb-4">মেয়েদের হোস্টেল</h2>
                        <div class="bg-white rounded-lg border border-gray-200">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">হোস্টেল নাম</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">অবস্থান</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">সিট সংখ্যা</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">সুপারভাইজার</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">মেয়েদের হোস্টেল-১</td>
                                            <td class="px-6 py-4 whitespace-nowrap">মেইন ক্যাম্পাস</td>
                                            <td class="px-6 py-4 whitespace-nowrap">৮০</td>
                                            <td class="px-6 py-4 whitespace-nowrap">জনাবা ফারজানা আক্তার</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Facilities Section -->
                    <div>
                        <h2 class="text-2xl font-semibold text-indigo-600 mb-4">হোস্টেল সুবিধাসমূহ</h2>
                        <ul class="list-disc list-inside space-y-2 text-gray-600">
                            <li>২৪/৭ নিরাপত্তা ব্যবস্থা</li>
                            <li>ওয়াই-ফাই সুবিধা</li>
                            <li>জেনারেটর সুবিধা</li>
                            <li>ক্যান্টিন সুবিধা</li>
                            <li>স্টাডি রুম</li>
                            <li>কমন রুম</li>
                            <li>দৈনিক পরিষ্কার-পরিচ্ছন্নতা</li>
                            <li>প্রাথমিক চিকিৎসা সুবিধা</li>
                        </ul>
                    </div>

                    <!-- Contact Section -->
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h2 class="text-2xl font-semibold text-indigo-600 mb-4">যোগাযোগ</h2>
                        <p class="text-gray-600">হোস্টেল সংক্রান্ত তথ্যের জন্য যোগাযোগ করুন:</p>
                        <div class="mt-4 space-y-2">
                            <p class="text-gray-700"><strong>ফোন:</strong> +৮৮-০১৭XXXXXXXX</p>
                            <p class="text-gray-700"><strong>ইমেইল:</strong> hostel@college.edu.bd</p>
                            <p class="text-gray-700"><strong>অফিস সময়:</strong> সকাল ৯:০০ টা থেকে বিকাল ৫:০০ টা</p>
                        </div>
                    </div>

                    <!-- PDF Download Button -->
                    <div class="mt-8 text-center">
                        <a trget="_blank" href="https://feni.polytech.gov.bd/sites/default/files/files/feni.polytech.gov.bd/page/99a693f2_645b_4069_ba8f_0843a1431eb9/2024-10-06-08-05-bf33ff83ca2e6cbb2e3406c2c9cccc16.pdf" 
                           class="inline-flex items-center px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition duration-150 ease-in-out">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            হোস্টেল নীতিমালা ডাউনলোড
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('includes/footer.php'); ?>
