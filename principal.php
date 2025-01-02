<?php
$page_title = "অধ্যক্ষ (অতিরিক্ত দায়িত্ব)";
include('includes/header.php');
?>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1 class="page-title">অধ্যক্ষ (অতিরিক্ত দায়িত্ব)</h1>
            <div class="title-underline">
                <div class="line"></div>
                <div class="line-dot"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="principal-card">
                <div class="principal-image">
                    <img src="assetscontant/images/ppp.jpeg" alt="Principal" class="img-fluid">
                </div>
                <div class="principal-info">
                    <h2 class="principal-name">শেখ মুস্তাফিজুর রহমান</h2>
                    <p class="principal-designation">অধ্যক্ষ (অতিরিক্ত দায়িত্ব)</p>
                    <p class="principal-institute">ফেনী পলিটেকনিক ইনস্টিটিউট</p>
                    <div class="principal-contact">
                        <p><i class="fas fa-envelope"></i> principal@fpi.gov.bd</p>
                        <p><i class="fas fa-phone"></i> +880 1711-000000</p>
                    </div>
                </div>
                <div class="principal-message mt-4">
                    <h3 class="message-title">অধ্যক্ষের বাণী</h3>
                    <p class="message-text">
                        ফেনী পলিটেকনিক ইনস্টিটিউটের অধ্যক্ষ (অতিরিক্ত দায়িত্ব) হিসেবে আমি অত্যন্ত গর্বিত। আমাদের প্রতিষ্ঠানটি দীর্ঘদিন ধরে 
                        বাংলাদেশের কারিগরি শিক্ষা ক্ষেত্রে গুরুত্বপূর্ণ অবদান রেখে চলেছে।
                    </p>
                    <p class="message-text">
                        আমাদের লক্ষ্য হলো শিক্ষার্থীদের সর্বোচ্চ মানের কারিগরি শিক্ষা প্রদান করা এবং তাদেরকে দক্ষ জনশক্তি হিসেবে গড়ে তোলা। 
                        আমরা আশা করি, আমাদের শিক্ষার্থীরা দেশের উন্নয়নে গুরুত্বপূর্ণ ভূমিকা পালন করবে।
                    </p>
                </div>
                <div class="principal-education mt-4">
                    <h3 class="education-title">শিক্ষাগত যোগ্যতা</h3>
                    <ul class="education-list">
                        <li>বি.এসসি. ইন মেকানিক্যাল ইঞ্জিনিয়ারিং, বুয়েট</li>
                        <li>এম.এসসি. ইন ইন্ডাস্ট্রিয়াল ইঞ্জিনিয়ারিং</li>
                        <li>পিএইচডি ইন মেকানিক্যাল ইঞ্জিনিয়ারিং</li>
                    </ul>
                </div>
                <div class="principal-experience mt-4">
                    <h3 class="experience-title">অভিজ্ঞতা</h3>
                    <ul class="experience-list">
                        <li>২০ বছরের শিক্ষকতার অভিজ্ঞতা</li>
                        <li>১০ বছর প্রশাসনিক পদে কর্মরত</li>
                        <li>বিভিন্ন জাতীয় ও আন্তর্জাতিক প্রকল্পে অংশগ্রহণ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.page-title {
    font-size: 2.8rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
}

.title-underline {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-bottom: 3rem;
}

.line {
    width: 100px;
    height: 3px;
    background: linear-gradient(90deg, transparent, var(--primary-color), transparent);
}

.line-dot {
    width: 12px;
    height: 12px;
    background-color: var(--primary-color);
    border-radius: 50%;
    position: relative;
}

.line-dot::before,
.line-dot::after {
    content: '';
    position: absolute;
    width: 8px;
    height: 8px;
    background-color: var(--primary-color);
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
}

.line-dot::before {
    left: -20px;
}

.line-dot::after {
    right: -20px;
}

.principal-card {
    background: white;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(0, 106, 78, 0.1);
}

.principal-image {
    text-align: center;
    margin-bottom: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.principal-image img {
    width: 250px;
    height: 250px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid var(--primary-color);
    padding: 5px;
    margin: 0 auto;
    display: block;
}

.principal-info {
    text-align: center;
}

.principal-name {
    color: var(--primary-color);
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 10px;
}

.principal-designation {
    color: var(--secondary-color);
    font-size: 1.2rem;
    font-weight: 500;
    margin-bottom: 5px;
}

.principal-institute {
    color: var(--text-secondary);
    font-size: 1.1rem;
    margin-bottom: 20px;
}

.principal-contact {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 20px;
}

.principal-contact p {
    color: var(--text-primary);
    display: flex;
    align-items: center;
    gap: 10px;
}

.principal-contact i {
    color: var(--primary-color);
}

.message-title, .education-title, .experience-title {
    color: var(--primary-color);
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 15px;
    padding-bottom: 10px;
    border-bottom: 2px solid var(--accent-color);
}

.message-text {
    color: var(--text-primary);
    line-height: 1.8;
    margin-bottom: 15px;
    text-align: justify;
}

.education-list, .experience-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.education-list li, .experience-list li {
    color: var(--text-primary);
    padding: 10px 0;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    position: relative;
    padding-left: 25px;
}

.education-list li::before, .experience-list li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 8px;
    height: 8px;
    background-color: var(--accent-color);
    border-radius: 50%;
}

@media (max-width: 768px) {
    .page-title {
        font-size: 2.2rem;
    }

    .principal-card {
        padding: 20px;
    }

    .principal-image img {
        width: 200px;
        height: 200px;
    }

    .principal-name {
        font-size: 1.8rem;
    }

    .principal-contact {
        flex-direction: column;
        gap: 10px;
    }
}
</style>

<?php
include('includes/footer.php');
?>
