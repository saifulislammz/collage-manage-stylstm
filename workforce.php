<?php
$title = "জনবল কাঠামো | ফেনী পলিটেকনিক ইনস্টিটিউট";
include('includes/header.php');
?>

<!-- Page Header -->
<div class="bg-gradient-to-r from-green-900 via-green-800 to-green-900 text-white py-12 mb-8">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl md:text-4xl font-bold text-center mb-4">জনবল কাঠামো</h1>
        <div class="flex justify-center">
            <nav class="text-sm md:text-base">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center">
                        <a href="index.php" class="text-yellow-400 hover:text-yellow-200">হোম</a>
                        <svg class="w-3 h-3 mx-2" fill="currentColor" viewBox="0 0 12 12">
                            <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"/>
                        </svg>
                    </li>
                    <li class="text-yellow-200">জনবল কাঠামো</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container mx-auto px-4 py-8">
    <!-- Revenue Teachers Section -->
    <div class="mb-12">
        <h2 class="text-2xl font-bold text-green-800 mb-6 pb-2 border-b-2 border-green-600">
            রাজস্বখাতের শিক্ষকদের তথ্য
        </h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-lg">
                <thead class="bg-green-800 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">ক্রমিক নং</th>
                        <th class="py-3 px-4 text-left">পদের নাম</th>
                        <th class="py-3 px-4 text-center">সৃষ্ট পদের সংখ্যা</th>
                        <th class="py-3 px-4 text-center">কর্মরত শিক্ষক সংখ্যা</th>
                        <th class="py-3 px-4 text-center">শূন্য পদের সংখ্যা</th>
                        <th class="py-3 px-4 text-left">মন্তব্য</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php
                    $revenue_teachers = [
                        ['অধ্যক্ষ', 1, 0, 1, ''],
                        ['উপাধ্যক্ষ', 2, 1, 1, ''],
                        ['চিফ ইনস্ট্রাক্টর', 20, 6, 14, ''],
                        ['ইনস্ট্রাক্টর', 77, 11, 66, ''],
                        ['ওয়ার্কশপ সুপার', 5, 2, 3, ''],
                        ['জুনিয়র ইনস্ট্রাক্টর', 76, 7, 69, ''],
                        ['ফিজিক্যাল এডুকেশন ইনস্ট্রাক্টর', 1, 1, 0, '']
                    ];
                    
                    foreach($revenue_teachers as $index => $teacher) {
                        echo "<tr class='hover:bg-gray-50'>
                            <td class='py-3 px-4'>" . ($index + 1) . "</td>
                            <td class='py-3 px-4'>{$teacher[0]}</td>
                            <td class='py-3 px-4 text-center'>{$teacher[1]}</td>
                            <td class='py-3 px-4 text-center'>{$teacher[2]}</td>
                            <td class='py-3 px-4 text-center'>{$teacher[3]}</td>
                            <td class='py-3 px-4'>{$teacher[4]}</td>
                        </tr>";
                    }
                    ?>
                    <tr class="bg-green-100 font-bold">
                        <td colspan="2" class="py-3 px-4 text-right">উপমোট =</td>
                        <td class="py-3 px-4 text-center">182</td>
                        <td class="py-3 px-4 text-center">28</td>
                        <td class="py-3 px-4 text-center">154</td>
                        <td class="py-3 px-4"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- STEP Project Teachers Section -->
    <div class="mb-12">
        <h2 class="text-2xl font-bold text-green-800 mb-6 pb-2 border-b-2 border-green-600">
            STEP প্রকল্পের (রাজস্বখাতে প্রক্রিয়াধীন) শিক্ষকদের তথ্য
        </h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-lg">
                <thead class="bg-green-800 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">ক্রমিক নং</th>
                        <th class="py-3 px-4 text-left">পদের নাম</th>
                        <th class="py-3 px-4 text-center">কর্মরত শিক্ষক সংখ্যা</th>
                        <th class="py-3 px-4 text-left">মন্তব্য</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php
                    $step_teachers = [
                        ['ইনস্ট্রাক্টর', 9, 'সংযুক্তিতে ০১ জন কারিগরি শিক্ষা অধিদপ্তরে কর্মরত'],
                        ['ওয়ার্কশপ সুপার', 1, ''],
                        ['জুনিয়র ইনস্ট্রাক্টর', 9, '']
                    ];
                    
                    foreach($step_teachers as $index => $teacher) {
                        echo "<tr class='hover:bg-gray-50'>
                            <td class='py-3 px-4'>" . ($index + 1) . "</td>
                            <td class='py-3 px-4'>{$teacher[0]}</td>
                            <td class='py-3 px-4 text-center'>{$teacher[1]}</td>
                            <td class='py-3 px-4'>{$teacher[2]}</td>
                        </tr>";
                    }
                    ?>
                    <tr class="bg-green-100 font-bold">
                        <td colspan="2" class="py-3 px-4 text-right">উপমোট =</td>
                        <td class="py-3 px-4 text-center">19</td>
                        <td class="py-3 px-4"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Staff Section -->
    <div class="mb-12">
        <h2 class="text-2xl font-bold text-green-800 mb-6 pb-2 border-b-2 border-green-600">
            রাজস্বখাতের ৩য় ও ৪র্থ শ্রেণীর কর্মচারীদের তথ্য
        </h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-lg">
                <thead class="bg-green-800 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">ক্রমিক নং</th>
                        <th class="py-3 px-4 text-left">পদের নাম</th>
                        <th class="py-3 px-4 text-center">সৃষ্ট পদের সংখ্যা</th>
                        <th class="py-3 px-4 text-center">কর্মরত কর্মচারীর সংখ্যা</th>
                        <th class="py-3 px-4 text-center">শূন্য পদের সংখ্যা</th>
                        <th class="py-3 px-4 text-left">মন্তব্য</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php
                    $staff = [
                        ['ড্রাফটসম্যান', 1, 0, 1, ''],
                        ['সিনিয়র হিসাব রক্ষক', 1, 0, 1, ''],
                        ['সিনিয়র লাইব্রেরীয়ান', 1, 0, 1, ''],
                        ['রেজিস্ট্রার', 1, 1, 0, ''],
                        ['ফার্মাসিষ্ট', 1, 1, 0, 'সংযুক্তিতে মৌলভীবাজার পলি. ইন. কর্মরত'],
                        ['প্রধান সহকারী', 1, 1, 0, ''],
                        ['ক্রাফট ইনস্ট্রাক্টর (টিআর)', 52, 24, 28, ''],
                        ['ক্রাফট ইনস্ট্রাক্টর (সপ)', 49, 22, 27, ''],
                        ['ল্যাবরেটরী এসিস্ট্যান্ট', 2, 0, 2, ''],
                        ['ল্যাবরেটরী সহাকারী বিজ্ঞান', 2, 0, 2, ''],
                        ['উচ্চমান সহকারী', 2, 2, 0, ''],
                        ['হিসাব রক্ষক', 1, 0, 1, ''],
                        ['লাইব্রেরীয়ান', 1, 0, 1, ''],
                        ['স্টোর কিপার', 1, 0, 1, ''],
                        ['কোষাধ্যক্ষ', 1, 1, 0, ''],
                        ['কেয়ারটেকার', 1, 1, 0, 'সংযুক্তিতে মন্ত্রণালয়ে কর্মরত'],
                        ['অফিস সহকারী কাম-কম্পিউটার মুদ্রাক্ষরিক', 4, 1, 3, ''],
                        ['হিসাব সহকারী', 2, 1, 1, ''],
                        ['সহকারী লাইব্রেরীয়ান কাম-ক্যাটালগার', 1, 1, 0, ''],
                        ['ড্রাইভার', 2, 1, 1, ''],
                        ['ক্যাশ সরকার', 1, 0, 1, ''],
                        ['পাম্প অপারেটর', 1, 0, 1, ''],
                        ['ওয়ার্কসপ খালাসী', 1, 0, 1, ''],
                        ['ল্যাবরেটরী বেয়ারার', 1, 0, 1, ''],
                        ['বুক সর্টার', 2, 0, 2, ''],
                        ['অফিস সহায়ক', 24, 8, 16, ''],
                        ['পরিচ্ছন্নতাকর্মী (সুইপার)', 2, 1, 1, '']
                    ];
                    
                    foreach($staff as $index => $employee) {
                        echo "<tr class='hover:bg-gray-50'>
                            <td class='py-3 px-4'>" . ($index + 1) . "</td>
                            <td class='py-3 px-4'>{$employee[0]}</td>
                            <td class='py-3 px-4 text-center'>{$employee[1]}</td>
                            <td class='py-3 px-4 text-center'>{$employee[2]}</td>
                            <td class='py-3 px-4 text-center'>{$employee[3]}</td>
                            <td class='py-3 px-4'>{$employee[4]}</td>
                        </tr>";
                    }
                    ?>
                    <tr class="bg-green-100 font-bold">
                        <td colspan="2" class="py-3 px-4 text-right">উপমোট =</td>
                        <td class="py-3 px-4 text-center">159</td>
                        <td class="py-3 px-4 text-center">66</td>
                        <td class="py-3 px-4 text-center">93</td>
                        <td class="py-3 px-4"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Summary Section -->
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold text-green-800 mb-6">সামগ্রিক সারসংক্ষেপ</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="p-4 border rounded-lg bg-gray-50">
                <p class="text-lg mb-2">রাজস্বখাতে সর্বমোট শিক্ষক ও কর্মচারীর পদ সংখ্যা = <span class="font-bold">৩৪১টি</span></p>
                <p class="text-lg mb-2">বর্তমানে রাজস্বখাতে সর্বমোট কর্মরত শিক্ষক ও কর্মচারীর সংখ্যা = <span class="font-bold">৯৪ জন</span></p>
                <p class="text-lg mb-2">বর্তমানে রাজস্বখাতে সর্বমোট শিক্ষক ও কর্মচারীর শূন্য পদের সংখ্যা = <span class="font-bold">২৪৭টি</span></p>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
