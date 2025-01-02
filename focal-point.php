<?php
$title = "ফোকাল পয়েন্ট কর্মকর্তা";
include('includes/header.php');
?>

<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center">
            <h1 class="page-title mb-3">ফোকাল পয়েন্ট কর্মকর্তা</h1>
            <div class="title-underline">
                <div class="line"></div>
                <div class="line-dot"></div>
                <div class="line"></div>
            </div>
        </div>

        <div class="content-grid">
            <div class="focal-point-section">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="focal-point-card">
                            <div class="card-header">
                                <div class="img-wrapper">
                                    <img src="https://feni.polytech.gov.bd/sites/default/files/files/feni.polytech.gov.bd/page/4eb46c2a_4306_4a24_a2d7_cd1ca498f400/2023-12-23-06-49-aaf9b0d93f37d8c7bafd5e9810627aa0.jpg" 
                                         alt="জনাব মামুন আহমেদ" 
                                         class="focal-point-img">
                                </div>
                            </div>
                            <div class="card-body">
                                <h3 class="person-name">জনাব মামুন আহমেদ</h3>
                                <p class="person-designation">ইনস্ট্রাক্টর (টেক/কম্পিউটার) ও বিভাগীয় প্রধান</p>
                                <div class="contact-info">
                                    <div class="info-item">
                                        <i class="fas fa-phone-alt"></i>
                                        <span>০১৭১৩৪৩৯৩৪৪</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-envelope"></i>
                                        <span>engr.mamun.ahmed@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .page-title {
        font-size: 2.8rem;
        font-weight: 700;
        color: #006A4E;
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
        background: linear-gradient(90deg, transparent, #006A4E, transparent);
    }

    .line-dot {
        width: 12px;
        height: 12px;
        background-color: #006A4E;
        border-radius: 50%;
    }

    .content-grid {
        background: linear-gradient(135deg, #FFF8F0 0%, #fff 100%);
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        padding: 35px;
        border: 1px solid rgba(0, 106, 78, 0.1);
    }

    .focal-point-section {
        padding: 20px;
    }

    .focal-point-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .focal-point-card:hover {
        transform: translateY(-5px);
    }

    .card-header {
        background: linear-gradient(135deg, #006A4E 0%, #004a37 100%);
        padding: 30px;
        text-align: center;
    }

    .img-wrapper {
        width: 200px;
        height: 200px;
        margin: 0 auto;
        border-radius: 50%;
        padding: 5px;
        background: white;
    }

    .focal-point-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #006A4E;
    }

    .card-body {
        padding: 30px;
        text-align: center;
    }

    .person-name {
        font-size: 1.8rem;
        font-weight: 600;
        color: #006A4E;
        margin-bottom: 10px;
    }

    .person-designation {
        font-size: 1.1rem;
        color: #666;
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
    }

    .contact-info {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .info-item {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        color: #444;
    }

    .info-item i {
        color: #006A4E;
        font-size: 1.2rem;
    }

    @media (max-width: 768px) {
        .page-title {
            font-size: 2.2rem;
        }
        
        .content-grid {
            padding: 20px;
        }
        
        .img-wrapper {
            width: 150px;
            height: 150px;
        }
        
        .person-name {
            font-size: 1.5rem;
        }
        
        .person-designation {
            font-size: 1rem;
        }
    }
</style>

<?php
include('includes/footer.php');
?>
