<?php
include('includes/header.php');
?>

<div class="container mt-5 mb-5">
    <!-- Hero Section -->
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="page-title">আমাদের সম্পর্কে</h1>
            <div class="title-underline">
                <div class="line"></div>
                <div class="line-dot"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-xl-10">
            <div class="about-grid">
                <!-- Institution Section -->
                <div class="about-section institution">
                    <div class="icon-wrapper" style="background: rgba(0, 106, 78, 0.1);">
                        <i class="fas fa-university" style="color: #006A4E;"></i>
                    </div>
                    <h3 class="section-title" style="color: #006A4E;">প্রাতিষ্ঠানিক সম্পর্কিত</h3>
                    <ul class="section-list institution-links">
                        <li><a href="vision-mission.php"><i class="fas fa-chevron-right"></i>ভিশন ও মিশন</a></li>
                        <li><a href="introduction.php"><i class="fas fa-chevron-right"></i>সংক্ষিপ্ত পরিচিতি</a></li>
                        <li><a href="history.php"><i class="fas fa-chevron-right"></i>ইতিহাস ও ঐতিহ্য</a></li>
                        <li><a href="infrastructure.php"><i class="fas fa-chevron-right"></i>অবকাঠামোগত তথ্য</a></li>
                        <li><a href="workforce.php"><i class="fas fa-chevron-right"></i>জনবল কাঠামো</a></li>
                    </ul>
                </div>

                <!-- Administration Section -->
                <div class="about-section administration">
                    <div class="icon-wrapper" style="background: rgba(244, 42, 65, 0.1);">
                        <i class="fas fa-users-cog" style="color: #F42A41;"></i>
                    </div>
                    <h3 class="section-title" style="color: #F42A41;">প্রশাসন</h3>
                    <ul class="section-list administration-links">
                        <li><a href="principal.php"><i class="fas fa-chevron-right"></i>অধ্যক্ষ / প্রতিষ্ঠান প্রধান</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i>উপাধ্যক্ষ</a></li>
                        <li><a href="former-principals.php"><i class="fas fa-chevron-right"></i>প্রাক্তন অধ্যক্ষগণ</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i>প্রাক্তন উপাধ্যক্ষগণ</a></li>
                        <li><a href="academic-council.php"><i class="fas fa-chevron-right"></i>একাডেমিক কাউন্সিল</a></li>
                        <li><a href="committees.php"><i class="fas fa-chevron-right"></i>বিভিন্ন কমিটি</a></li>
                    </ul>
                </div>

                <!-- Staff Section -->
                <div class="about-section staff">
                    <div class="icon-wrapper" style="background: rgba(255, 184, 28, 0.1);">
                        <i class="fas fa-chalkboard-teacher" style="color: #FFB81C;"></i>
                    </div>
                    <h3 class="section-title" style="color: #FFB81C;">শিক্ষক-কর্মচারী</h3>
                    <ul class="section-list staff-links">
                        <li><a href="teachers.php"><i class="fas fa-chevron-right"></i>শিক্ষকবৃন্দ</a></li>
                        <li><a href="officers.php"><i class="fas fa-chevron-right"></i>কর্মকর্তাবৃন্দ</a></li>
                        <li><a href="staff.php"><i class="fas fa-chevron-right"></i>কর্মচারীবৃন্দ</a></li>
                        <li><a href="focal-point.php"><i class="fas fa-chevron-right"></i>ফোকাল পয়েন্ট কর্মকর্তা</a></li>
                    </ul>
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

.about-grid {
    display: flex;
    justify-content: space-between;
    align-items: stretch;
    gap: 25px;
    padding: 35px;
    background: linear-gradient(135deg, #FFF8F0 0%, #fff 100%);
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    max-width: 1200px;
    margin: 0 auto;
    border: 1px solid rgba(0, 106, 78, 0.1);
}

.about-section {
    flex: 1;
    padding: 30px;
    background: white;
    border-radius: 15px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.about-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    transition: all 0.3s ease;
}

.institution::before { background: #006A4E; }
.administration::before { background: #F42A41; }
.staff::before { background: #FFB81C; }

.about-section:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}

.icon-wrapper {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    transition: all 0.3s ease;
}

.icon-wrapper i {
    font-size: 30px;
    transition: all 0.3s ease;
}

.about-section:hover .icon-wrapper {
    transform: scale(1.1);
}

.section-title {
    font-size: 1.4rem;
    margin-bottom: 25px;
    font-weight: 600;
    text-align: center;
    position: relative;
    padding-bottom: 15px;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 50px;
    height: 3px;
    background: currentColor;
    border-radius: 2px;
}

.section-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.section-list li {
    margin-bottom: 12px;
}

.section-list li a {
    color: #333;
    text-decoration: none;
    display: flex;
    align-items: center;
    padding: 10px 15px;
    border-radius: 8px;
    transition: all 0.3s ease;
    font-size: 0.95rem;
}

.section-list li a i {
    margin-right: 10px;
    font-size: 0.8rem;
    transition: all 0.3s ease;
}

/* Institution Links */
.institution-links li a:hover {
    background-color: rgba(0, 106, 78, 0.1);
    color: #006A4E;
    padding-left: 25px;
}

.institution-links li a:hover i {
    color: #006A4E;
    transform: translateX(5px);
}

/* Administration Links */
.administration-links li a:hover {
    background-color: rgba(244, 42, 65, 0.1);
    color: #F42A41;
    padding-left: 25px;
}

.administration-links li a:hover i {
    color: #F42A41;
    transform: translateX(5px);
}

/* Staff Links */
.staff-links li a:hover {
    background-color: rgba(255, 184, 28, 0.1);
    color: #FFB81C;
    padding-left: 25px;
}

.staff-links li a:hover i {
    color: #FFB81C;
    transform: translateX(5px);
}

@media (max-width: 768px) {
    .page-title {
        font-size: 2.2rem;
    }

    .line {
        width: 60px;
    }

    .about-grid {
        flex-direction: column;
        padding: 20px;
        gap: 20px;
    }
    
    .about-section {
        margin-bottom: 20px;
        padding: 25px;
    }
    
    .about-section:last-child {
        margin-bottom: 0;
    }

    .icon-wrapper {
        width: 60px;
        height: 60px;
    }

    .icon-wrapper i {
        font-size: 24px;
    }

    .section-title {
        font-size: 1.2rem;
    }
}

@media (max-width: 576px) {
    .page-title {
        font-size: 1.8rem;
        text-align: center;
    }

    .about-grid {
        padding: 15px;
        gap: 15px;
    }

    .about-section {
        padding: 20px;
    }

    .section-list li a {
        font-size: 0.9rem;
        padding: 8px 12px;
    }

    .section-list li a i {
        font-size: 0.75rem;
    }

    .container {
        padding-left: 10px;
        padding-right: 10px;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    .about-grid {
        gap: 20px;
        padding: 25px;
    }

    .about-section {
        padding: 25px;
    }

    .section-title {
        font-size: 1.3rem;
    }
}
</style>

<?php
include('includes/footer.php');
?>