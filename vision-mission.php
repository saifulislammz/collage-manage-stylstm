<?php
$title = "ভিশন ও মিশন | ফেনী পলিটেকনিক ইনস্টিটিউট";
include('includes/header.php');
?>

<!-- Page Header -->
<div class="bg-gradient-to-r from-green-900 via-green-800 to-green-900 text-white py-12 mb-8">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl md:text-4xl font-bold text-center mb-4">ভিশন ও মিশন</h1>
        <div class="flex justify-center">
            <nav class="text-sm md:text-base">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center">
                        <a href="index.php" class="text-yellow-400 hover:text-yellow-200">হোম</a>
                        <svg class="w-3 h-3 mx-2" fill="currentColor" viewBox="0 0 12 12">
                            <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"/>
                        </svg>
                    </li>
                    <li class="text-yellow-200">ভিশন ও মিশন</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <!-- Vision Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="p-6 border-b-4 border-green-600">
                <h2 class="text-2xl font-bold text-green-800 mb-4">রূপকল্প (Vision)</h2>
                <p class="text-gray-700 leading-relaxed text-lg">
                    কারিগরি ও বৃত্তিমূলক শিক্ষা ও প্রশিক্ষণ যুগোপযোগীকরণ, মানবসম্পদ উন্নয়ন, অর্থনৈতিক সমৃদ্ধি অর্জন এবং জীবনযাত্রার মানোন্নয়ন।
                </p>
            </div>
        </div>

        <!-- Mission Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="p-6 border-b-4 border-green-600">
                <h2 class="text-2xl font-bold text-green-800 mb-4">অভিলক্ষ্য (Mission)</h2>
                <p class="text-gray-700 leading-relaxed text-lg">
                    মান সম্পন্ন ডিপ্লোমা ইঞ্জিনিয়ারিং কোর্স ও এনটিভিকিউএফ প্রশিক্ষণ নিশ্চিত করার লক্ষ্যে প্রয়োজনীয় নীতি ও কর্মসূচী বাস্তবায়ন, প্রকল্প বাস্তবায়ন, আদর্শমান নির্ধারণ এবং পরিবীক্ষণ ও মূল্যায়ন।
                </p>
            </div>
        </div>

        <!-- Performance Areas -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-6">কর্মসম্পাদনের ক্ষেত্র</h2>
                <div class="space-y-4">
                    <div class="p-4 bg-green-50 rounded-lg">
                        <p class="text-gray-700">১. মানসম্মত কারিগরি ও বৃত্তিমূলক শিক্ষা বিস্তারের লক্ষ্যে সুযোগ সুবিধা এবং প্রাতিষ্ঠানিক সক্ষমতা বৃদ্ধি;</p>
                    </div>
                    <div class="p-4 bg-green-50 rounded-lg">
                        <p class="text-gray-700">২. কারিগরি ও বৃত্তিমূলক শিক্ষা ও প্রশিক্ষণের মানোন্নয়ন;</p>
                    </div>
                    <div class="p-4 bg-green-50 rounded-lg">
                        <p class="text-gray-700">৩. কারিগরি ও বৃত্তিমূলক শিক্ষায় প্রশাসনিক কার্যক্রম ও মনিটরিং জোরদারকরণ;</p>
                    </div>
                    <div class="p-4 bg-green-50 rounded-lg">
                        <p class="text-gray-700">৪. দেশীয় ও আন্তর্জাতিক শ্রমবাজারের উপযোগী মানবিক মূল্যবোধসম্পন্ন দক্ষ মানব সম্পদ তৈরি;</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Functions -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-6">কার্যাবলি (Functions)</h2>
                <div class="grid gap-4">
                    <?php
                    $functions = [
                        "শিক্ষক ও কর্মচারীদের প্রশিক্ষণ প্রদান;",
                        "শ্রেনী কক্ষে চতুর্থ শিল্প বিপ্লবের চ্যালেঞ্জ মোকাবেলার উপযোগী আধুনিক যন্ত্রপাতি স্থাপন ও শিক্ষা উপকরন সংগ্রহ;",
                        "শিক্ষাবর্ষপঞ্জী মোতাবেক পাঠ্যসূচি সমাপন এবং যথাসময়ে যথাযথভাবে পরীক্ষা সমূহ গ্রহণ;",
                        "শুদ্ধাচার কর্মপরিকল্পনা, ই-গভর্ন্যান্স/উদ্ভাবন কর্মপরিকল্পনা ও সেবা প্রদান প্রতিশ্রুতি কর্মপরিকল্পনা ইত্যাদি বাস্তবায়ন;",
                        "দেশীয় ও আন্তর্জাতিক শ্রম বাজারের উপযোগী মানব সম্পদ তৈরির লক্ষ্যে শিক্ষা প্রতিষ্ঠান ও শিল্প-কারখানার মধ্যে যোগাযোগ বৃদ্ধি ও সমঝোতা স্মারক স্বাক্ষর।",
                        "কারিগরি শিক্ষার্থীদের উপবৃত্তি প্রদান ও দরিদ্র তহবিলের সুষ্ঠ ব্যবস্থাপনা;",
                        "প্রতিষ্ঠানে নারী/বিশেষ চাহিদা সম্পন্ন শিক্ষার্থীদের জন্য সুবিধা বৃদ্ধি;",
                        "কারিকুলাম পরিমার্জন, পরিবর্ধন ও যুগোপযোগীকরনে বিটিইবিতে সুপারিশ প্রেরন;",
                        "সপ্তম পর্বের ছাত্র-ছাত্রীদের কারিকুলাম ভুক্ত ইনোভেটিভ প্রজেক্ট সমূহ যথাযথভাবে বাস্তবায়ন ও প্রজেক্ট মেলার আয়োজন;",
                        "ছাত্রছাত্রীদের সর্বাধুনিক প্রযুক্তিতে দক্ষ করার লক্ষ্যে স্কিলস কম্পিটিশন, উদ্ভাবণী মেলা ও জব ফেয়ার আয়োজন;",
                        "প্রশাসনিক ও একাডেমিক কার্যক্রম জোরদারকরন;",
                        "জাতীয় দিবস সমূহ উদযাপন এবং মুক্তিযুদ্ধ ও দেশপ্রেমের চেতনায় উদ্বুদ্ধকরণের জন্য শিক্ষার্থীদের অংশগ্রহণে সন্ত্রাস জঙ্গীবাদ/ সাম্প্রদায়িকতা বিরোধী সভা/সেমিনার আয়োজন;",
                        "বার্ষিক ক্রয় পরিকল্পনা প্রনয়ন ও পরিকল্পনা অনুযায়ী ক্রয় কার্যক্রম বাস্তবায়ন;",
                        "চাহিদাভিত্তিক কারিগরি ও বৃত্তিমূলক শিক্ষা ও প্রশিক্ষণে উৎসাহিত করা;",
                        "চতুর্থ শিল্প বিপ্লবের চ্যালেঞ্জ মোকাবেলায় বিশ্ববাজারের উপযোগী ল্যাব/ওয়ার্কসপ আধুনিকায়ন;",
                        "প্রতিষ্ঠানিক নিরাপত্তা বৃদ্ধিতে কার্যক্রম গ্রহন;",
                        "সেমিনার/ কর্মশালা/মতবিনিময় সভা আয়োজন;",
                        "স্থাবর ও অস্থাবর সম্পত্তির তালিকা প্রস্তুত ও হালনাগাদকরন।"
                    ];

                    foreach($functions as $index => $function) {
                        $number = $index + 1;
                        echo "<div class='p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-colors duration-200'>";
                        echo "<p class='text-gray-700'><span class='font-semibold'>$number.</span> $function</p>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
