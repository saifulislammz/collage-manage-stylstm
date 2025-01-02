<?php
$page_title = "একাডেমিক ক্যালেন্ডার";
$page = 'calendar';
require_once('includes/header.php');
?>

<style>
    .month-card {
        transition: transform 0.3s ease;
        border: 1px solid rgba(0, 106, 78, 0.1);
    }
    .month-card:hover {
        transform: translateY(-5px);
    }
    .holiday-item {
        padding-left: 1.5rem;
        position: relative;
    }
    .holiday-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0.5rem;
        width: 0.75rem;
        height: 0.75rem;
        background-color: #F42A41;
        border-radius: 50%;
    }
    .regular-item {
        padding-left: 1.5rem;
        position: relative;
    }
    .regular-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0.5rem;
        width: 0.75rem;
        height: 0.75rem;
        background-color: #006A4E;
        border-radius: 50%;
    }
</style>

<div class="py-12" style="background-color: #FFF8F0;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <!-- Header Section -->
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold mb-4" style="color: #006A4E;">একাডেমিক ক্যালেন্ডার ২০২৪</h1>
                <p class="text-gray-600">ফেনী পলিটেকনিক ইনস্টিটিউট</p>
            </div>

            <!-- Calendar Grid -->
            <div class="space-y-6">
                <!-- June -->
                <div class="month-card bg-white rounded-lg overflow-hidden shadow-lg">
                    <div class="px-6 py-4" style="background-color: #006A4E;">
                        <h2 class="text-xl font-semibold text-white">জুন ২০২৪</h2>
                    </div>
                    <div class="p-6 space-y-3">
                        <div class="regular-item">১১-২১ জুন: ২য়, ৪র্থ ও ৬ষ্ঠ পর্বের ক্লাস পুনঃ শুরু</div>
                        <div class="regular-item">২০-৩০ জুন: ২য়, ৪র্থ ও ৬ষ্ঠ পর্বের ক্লাস পূর্ব এবং ৮ম পর্বের সংশ্লিষ্ট শিক্ষা প্রতিষ্ঠানে ইন্ডাস্ট্রিয়াল ট্রেনিং শুরু</div>
                    </div>
                </div>

                <!-- July -->
                <div class="month-card bg-white rounded-lg overflow-hidden shadow-lg">
                    <div class="px-6 py-4" style="background-color: #006A4E;">
                        <h2 class="text-xl font-semibold text-white">জুলাই ২০২৪</h2>
                    </div>
                    <div class="p-6 space-y-3">
                        <div class="regular-item">০১-০১ জুলাই: ২য়, ৪র্থ ও ৬ষ্ঠ পর্বের ক্লাস অব্যাহত</div>
                        <div class="holiday-item">০৮ জুলাই: সোমবার (বিশ্ব নববর্ষ)</div>
                        <div class="holiday-item">২৭ জুলাই: ঈদুল আযহা, মহররম (আশুরা)</div>
                    </div>
                </div>

                <!-- August -->
                <div class="month-card bg-white rounded-lg overflow-hidden shadow-lg">
                    <div class="px-6 py-4" style="background-color: #006A4E;">
                        <h2 class="text-xl font-semibold text-white">আগস্ট ২০২৪</h2>
                    </div>
                    <div class="p-6 space-y-3">
                        <div class="regular-item">০১-০১ আগস্ট: ২য়, ৪র্থ ও ৬ষ্ঠ পর্বের ক্লাস অব্যাহত এবং ৮ম পর্বের সংশ্লিষ্ট শিক্ষা প্রতিষ্ঠানে ইন্ডাস্ট্রিয়াল ট্রেনিং অব্যাহত</div>
                        <div class="holiday-item">১৬ আগস্ট: সোমবার, শুভ জন্মাষ্টমী</div>
                    </div>
                </div>

                <!-- September -->
                <div class="month-card bg-white rounded-lg overflow-hidden shadow-lg">
                    <div class="px-6 py-4" style="background-color: #006A4E;">
                        <h2 class="text-xl font-semibold text-white">সেপ্টেম্বর ২০২৪</h2>
                    </div>
                    <div class="p-6 space-y-3">
                        <div class="regular-item">০১-১৫ সেপ্টেম্বর: ২য়, ৪র্থ ও ৬ষ্ঠ পর্বের ক্লাস অব্যাহত এবং ৮ম পর্বের সংশ্লিষ্ট শিক্ষা প্রতিষ্ঠানে ইন্ডাস্ট্রিয়াল ট্রেনিং অব্যাহত</div>
                        <div class="regular-item">১৭-২৪ সেপ্টেম্বর: ২য়, ৪র্থ ও ৬ষ্ঠ পর্বের পর্ব মধ্য পরীক্ষা</div>
                        <div class="regular-item">২৫-৩০ সেপ্টেম্বর: ২য়, ৪র্থ ও ৬ষ্ঠ পর্বের ক্লাস অব্যাহত</div>
                    </div>
                </div>

                <!-- October -->
                <div class="month-card bg-white rounded-lg overflow-hidden shadow-lg">
                    <div class="px-6 py-4" style="background-color: #006A4E;">
                        <h2 class="text-xl font-semibold text-white">অক্টোবর ২০২৪</h2>
                    </div>
                    <div class="p-6 space-y-3">
                        <div class="regular-item">০১-০১ অক্টোবর: ২য়, ৪র্থ ও ৬ষ্ঠ পর্বের ক্লাস অব্যাহত</div>
                        <div class="regular-item">০২ অক্টোবর: ৮ম পর্বের সংশ্লিষ্ট শিক্ষা প্রতিষ্ঠানে ইন্ডাস্ট্রিয়াল ট্রেনিং সমাপ্ত</div>
                        <div class="regular-item">১৭ অক্টোবর: ৮ম পর্বের ইন্ডাস্ট্রিয়াল ট্রেনিং-এর মূল্যায়ন শুরু</div>
                        <div class="holiday-item">১০-১৬ অক্টোবর: দুর্গাপূজা (বিজয়া দশমী)</div>
                        <div class="holiday-item">১৫ অক্টোবর: মহালয়া, ফাতেহা-ই-ইয়াজদাহম</div>
                        <div class="holiday-item">১৮ অক্টোবর: বুধবার, কালী পূজা</div>
                    </div>
                </div>

                <!-- November -->
                <div class="month-card bg-white rounded-lg overflow-hidden shadow-lg">
                    <div class="px-6 py-4" style="background-color: #006A4E;">
                        <h2 class="text-xl font-semibold text-white">নভেম্বর ২০২৪</h2>
                    </div>
                    <div class="p-6 space-y-3">
                        <div class="regular-item">০১-৩০ নভেম্বর: ২য়, ৪র্থ ও ৬ষ্ঠ পর্বের ক্লাস অব্যাহত</div>
                        <div class="regular-item">প্রতিষ্ঠান পর্যায়ের ইন্ডাস্ট্রিয়াল ট্রেনিং অব্যাহত ও সমাপ্ত</div>
                        <div class="holiday-item">২১ নভেম্বর: বৃহস্পতিবার, শ্যামাপূজা</div>
                    </div>
                </div>

                <!-- December -->
                <div class="month-card bg-white rounded-lg overflow-hidden shadow-lg">
                    <div class="px-6 py-4" style="background-color: #006A4E;">
                        <h2 class="text-xl font-semibold text-white">ডিসেম্বর ২০২৪</h2>
                    </div>
                    <div class="p-6 space-y-3">
                        <div class="regular-item">০১-৩১ ডিসেম্বর: ২য়, ৪র্থ, ৬ষ্ঠ এবং ৮ম পর্ব সমাপনী পরীক্ষা</div>
                        <div class="holiday-item">১৬ ডিসেম্বর: সোমবার, মহান বিজয় দিবস</div>
                        <div class="holiday-item">২৭-৩১ ডিসেম্বর: শিশু বিজ্ঞান কর্ম দিবস ও শীতকালীন অবকাশ</div>
                    </div>
                </div>

                <!-- January -->
                <div class="month-card bg-white rounded-lg overflow-hidden shadow-lg">
                    <div class="px-6 py-4" style="background-color: #006A4E;">
                        <h2 class="text-xl font-semibold text-white">জানুয়ারি ২০২৫</h2>
                    </div>
                    <div class="p-6 space-y-3">
                        <div class="regular-item">০১ -১০ জানুয়ারি: ২য়, ৪র্থ, ৬ষ্ঠ এবং ৮ম পর্ব সমাপনী পরীক্ষা অব্যাহত ও সমাপ্ত</div>
                        <div class="regular-item">২৬ জানুয়ারি: ২য়, ৩য়, ৫ম এবং ৭ম পর্বের ক্লাস শুরু (সম্ভাব্য)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>