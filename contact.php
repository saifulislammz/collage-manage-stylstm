<?php include('includes/header.php'); ?>

<div class="container mt-5 mb-5">
    <!-- Hero Section -->
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="page-title">যোগাযোগ</h1>
            <div class="title-underline">
                <div class="line"></div>
                <div class="line-dot"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-xl-10">
            <div class="contact-grid">
                <!-- Contact Information -->
                <div class="contact-info">
                    <div class="section-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <h3 class="section-title">ফেনী পলিটেকনিক ইনস্টিটিউট</h3>
                    <div class="contact-details">
                        <p><i class="fas fa-map-marker-alt"></i>পোস্ট - মালিপুর, পোস্ট কোড-৩৯০০</p>
                        <p><i class="fas fa-map-marker-alt"></i>ফেনী সদর, ফেনী।</p>
                        <p><i class="fas fa-phone"></i>ফোন: ০২৩৩৪৪৭৪০৩০</p>
                        <p><i class="fas fa-mobile-alt"></i>মোবাইল: ০১৭৬৫৬৯৬৯০০ (অধ্যক্ষ)</p>
                        <p><i class="fas fa-envelope"></i><a href="mailto:fenipoly69015@gmail.com">fenipoly69015@gmail.com</a></p>
                        <p><i class="fas fa-globe"></i><a href="http://www.feni.polytech.gov.bd" target="_blank">www.feni.polytech.gov.bd</a></p>
                    </div>
                </div>

                <!-- Map -->
                <div class="map-section">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.7965109569777!2d91.40811247425036!3d23.031242579167614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375369ae3d72f73b%3A0xaf6db3b21c8e61e9!2sFeni%20Polytechnic%20Institute-FPI!5e0!3m2!1sen!2sbd!4v1735565541781!5m2!1sen!2sbd" 
                        width="100%" 
                        height="400" 
                        style="border:0; border-radius: 8px;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
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
    margin-bottom: 1rem;
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
    position: relative;
}

.line-dot::before,
.line-dot::after {
    content: '';
    position: absolute;
    width: 8px;
    height: 8px;
    background-color: #006A4E;
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

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.contact-info {
    padding: 20px;
    background: #f8f9fa;
    border-radius: 8px;
    border-top: 4px solid #006A4E;
}

.section-icon {
    text-align: center;
    margin-bottom: 20px;
}

.section-icon i {
    font-size: 2.5rem;
    color: #006A4E;
}

.section-title {
    color: #006A4E;
    font-size: 1.5rem;
    text-align: center;
    margin-bottom: 25px;
    font-weight: 600;
}

.contact-details {
    color: #333;
    line-height: 2;
}

.contact-details p {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.contact-details i {
    color: #006A4E;
    width: 25px;
    margin-right: 15px;
}

.contact-details a {
    color: #006A4E;
    text-decoration: none;
    transition: color 0.3s;
}

.contact-details a:hover {
    color: #F42A41;
}

.map-section {
    border-radius: 8px;
    overflow: hidden;
    border-top: 4px solid #F42A41;
    background: #f8f9fa;
    padding: 20px;
}

@media (max-width: 768px) {
    .page-title {
        font-size: 2.2rem;
    }

    .line {
        width: 60px;
    }

    .contact-grid {
        grid-template-columns: 1fr;
        padding: 15px;
    }

    .contact-info, 
    .map-section {
        padding: 15px;
    }

    .section-icon i {
        font-size: 2rem;
    }

    .section-title {
        font-size: 1.3rem;
    }

    .contact-details {
        font-size: 0.95rem;
    }
}
</style>

<?php include('includes/footer.php'); ?>