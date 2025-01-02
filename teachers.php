<?php 
$page_title = "শিক্ষকবৃন্দ তালিকা - Feni Polytechnic Institute";
include('includes/header.php'); 
?>

<div class="container-fluid pt-5 pb-5">
    <div class="container">
        <div class="text-center">
            <h1 class="page-title mb-3">শিক্ষকবৃন্দ তালিকা</h1>
            <div class="title-underline">
                <div class="line"></div>
                <div class="line-dot"></div>
                <div class="line"></div>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="row justify-content-center">
                <div class="col-12">
                    
                    <!-- Department Navigation -->
                    <div class="department-nav">
                        <button class="dept-btn active" data-dept="civil">সিভিল বিভাগ</button>
                        <button class="dept-btn" data-dept="cst">কম্পিউটার সায়েন্স অ্যান্ড টেকনোলজি</button>
                        <button class="dept-btn" data-dept="mechanical">মেকানিক্যাল</button>
                        <button class="dept-btn" data-dept="electrical">ইলেকট্রিক্যাল</button>
                        <button class="dept-btn" data-dept="power">পাওয়ার</button>
                        <button class="dept-btn" data-dept="architecture">আর্কিটেকচার</button>
                        <button class="dept-btn" data-dept="non-tech">নন-টেক সকল শিক্ষকবৃন্দ</button>
                    </div>

                    <!-- Teachers List Container -->
                    <div class="teachers-container mt-4">
                        <!-- Civil Department -->
                        <div class="department-section active" id="civil">
                            <h2 class="dept-title">সিভিল বিভাগ</h2>
                            <div class="teachers-grid">
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/rejaul.jpg" alt="মোঃ রেজাউল বাহার">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মোঃ রেজাউল বাহার</h3>
                                        <p class="designation">ওয়ার্কশপ ‍সুপার (সিভিল) ও বিভাগীয় প্রধান (১ম শিফট)</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৭১২৬২৩০৪৯
                                            <br>
                                            <i class="fas fa-envelope"></i> kajal.bahar@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/rayhanahmed.jpeg" alt="রায়হান আহমাদ">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>রায়হান আহমাদ</h3>
                                        <p class="designation">ইনস্ট্রাক্টর ও বিভাগীয় প্রধান (সিভিল) ২য় শিফট</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৫২১২২২৯৬৩
                                            <br>
                                            <i class="fas fa-envelope"></i> rayhanahmad1301125@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/mdforhadhossain.jpg" alt="মোঃ ফরহাদ হোসাইন">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মোঃ ফরহাদ হোসাইন</h3>
                                        <p class="designation">	ইনস্ট্রাক্টর (টেক/সিভিল) রাজস্বখাতে প্রক্রিয়াধীন</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৯১৩৪৪৫৫১৮
                                            <br>
                                            <i class="fas fa-envelope"></i> engr.tauhidul03@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/towhidul.jpeg" alt="মোঃ তৌহিদুল হক">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মোঃ তৌহিদুল হক</h3>
                                        <p class="designation">ইনস্ট্রাক্টর (টেক/সিভিল) রাজস্বখাতে প্রক্রিয়াধীন</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৭২১৩২৬৩০৩
                                            <br>
                                            <i class="fas fa-envelope"></i> engr.tauhidul03@gmail.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Computer Science Department -->
                        <div class="department-section" id="cst">
                            <h2 class="dept-title">কম্পিউটার সায়েন্স অ্যান্ড টেকনোলজি</h2>
                            <div class="teachers-grid">
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/mamunahmed.jpg" alt="মামুন আহমেদ">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মামুন আহমেদ</h3>
                                        <p class="designation">ইনস্ট্রাক্টর ও বিভাগীয় প্রধান (কম্পিউটার) ১ম শিফট</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৭১৩৪৩৯৩৪৪
                                            <br>
                                            <i class="fas fa-envelope"></i> engr.mamun.ahmed@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/fazlerabbi.jpeg" alt="মো: ফজলে রাব্বী">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মো: ফজলে রাব্বী</h3>
                                        <p class="designation">ইনস্ট্রাক্টর ও বিভাগীয় প্রধান (কম্পিউটার) ২য় শিফট</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৮৩২১০৩৯৯৭
                                            <br>
                                            <i class="fas fa-envelope"></i> nstu.fazlerabbi@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/jahiruddin.jpg" alt="মো: জহির উদ্দিন মজুমদার">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মো: জহির উদ্দিন মজুমদার</h3>
                                        <p class="designation">ইনস্ট্রাক্টর (টেক/কম্পিউটার)</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৭৯৩২৫৮৯৬০
                                            <br>
                                            <i class="fas fa-envelope"></i> uddinxahir@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/porijatdeb.jpeg" alt="পারিজাত দেব নাথ">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>পারিজাত দেব নাথ</h3>
                                        <p class="designation">ইনস্ট্রাক্টর (টেক/কম্পিউটার)</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৮৩৫৪২৪৪৪৫
                                            <br>
                                            <i class="fas fa-envelope"></i> parijatdebnath3@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/abdulkader.jpg" alt="আবদুল কাদের">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>আবদুল কাদের</h3>
                                        <p class="designation">	ইনস্ট্রাক্টর (কম্পিউটার) রাজস্বখাতে প্রক্রিয়াধীন</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৮২২৮০৩৫৪০
                                            <br>
                                            <i class="fas fa-envelope"></i> kader_patwary@hotmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/alihossain.jpeg" alt="মোঃ আলী হোসেন">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মোঃ আলী হোসেন</h3>
                                        <p class="designation">জুনিয়র ইনস্ট্রাক্টর (কম্পিউটার) রাজস্বখাতে প্রক্রিয়াধীন</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৭২৩০২৪৪২৪
                                            <br>
                                            <i class="fas fa-envelope"></i> alihossen.spi@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/mdfazlealahi.jpg" alt="মোহাম্মদ ফজলে এলাহী">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মোহাম্মদ ফজলে এলাহী</h3>
                                        <p class="designation">জুনিয়র ইনস্ট্রাক্টর (কম্পিউটার) রাজস্বখাতে প্রক্রিয়াধীন</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৭২৩৩৯২৪৪৭২
                                            <br>
                                            <i class="fas fa-envelope"></i> mfalahi_64@yahoo.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mechanical Department -->
                        <div class="department-section" id="mechanical">
                            <h2 class="dept-title">মেকানিক্যাল</h2>
                            <div class="teachers-grid">
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/mdaktarujjaman.jpeg" alt="মোহাম্মদ আক্তারুজ্জামান">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মোহাম্মদ আক্তারুজ্জামান</h3>
                                        <p class="designation">ইনস্ট্রাক্টর (মেকানিক্যাল) ও বিভাগীয় প্রধান (উভয় শিফট)</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৭১০৮৮২৪৫৩
                                            <br>
                                            <i class="fas fa-envelope"></i> ajamanme@yahoo.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/sujayethossain.jpeg" alt="সুজায়েত হোসেন">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>সুজায়েত হোসেন</h3>
                                        <p class="designation">	ওয়ার্কশপ সুপারিন্টেন্ডেন্ট (টেক/মেকানিক্যাল)</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৭৫৩৪৪৬৪৫৭
                                            <br>
                                            <i class="fas fa-envelope"></i> sujayet91@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/hazaratali.jpg" alt="মোঃ হযরত আলী">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মোঃ হযরত আলী</h3>
                                        <p class="designation">	জুনিয়র ইনস্ট্রাক্টর (টেক/মেকানিক্যাল) রাজস্বখাতে প্রক্রিয়াধীন</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৭৩৭৪৫৬৬৩৯
                                            <br>
                                            <i class="fas fa-envelope"></i> hazrat.ali.kpi@gmail.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Electrical Department -->
                        <div class="department-section" id="electrical">
                            <h2 class="dept-title">ইলেকট্রিক্যাল</h2>
                            <div class="teachers-grid">
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/mdamanullah.png" alt="মোহাম্মদ আমানুল্লাহ">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মোহাম্মদ আমানুল্লাহ</h3>
                                        <p class="designation">চিফ ইনস্ট্রাকটর (টেক/ইলেকট্রিক্যাল) ও বিভাগীয় প্রধান (২য় শিফট)</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৮১৮৩৫৬৩১১
                                            <br>
                                            <i class="fas fa-envelope"></i> amankpi67@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/shahalam.jpg" alt="মোঃ শাহ আলম">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মোঃ শাহ আলম</h3>
                                        <p class="designation">ইনস্ট্রাক্টর (টেক/ইলেকট্রিক্যাল) ও বিভাগীয় প্রধান (১ম শিফট)</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৫৫৭২৭৮৯২৭
                                            <br>
                                            <i class="fas fa-envelope"></i> shahalamfpi@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/mobaraksir.jpg" alt="মোঃ মোবারক হোসেন">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মোঃ মোবারক হোসেন</h3>
                                        <p class="designation">ইনস্ট্রাক্টর (টেক/ইলেকট্রিক্যাল)</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৬৭৩৩৫৭৩৭৯
                                            <br>
                                            <i class="fas fa-envelope"></i> engrmobarak14@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/ataurrahman.jpeg" alt="মোঃ আতাউর রহমান">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মোঃ আতাউর রহমান</h3>
                                        <p class="designation">	ইনস্ট্রাক্টর (টেক/ইলেকট্রিক্যাল) রাজস্বখাতে প্রক্রিয়াধীন</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> 
                                            <br>
                                            <i class="fas fa-envelope"></i>
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/shakhawathossain.jpeg" alt="মোঃ শাখাওয়াত হোসেন">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মোঃ শাখাওয়াত হোসেন</h3>
                                        <p class="designation">ইনস্ট্রাক্টর (টেক/ইলেকট্রিক্যাল) রাজস্বখাতে প্রক্রিয়াধীন</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৭২০৫৮৫৩৯০
                                            <br>
                                            <i class="fas fa-envelope"></i> hossain194@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/ajadali.jpeg" alt="মোঃ আজাদ আলী">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মোঃ আজাদ আলী</h3>
                                        <p class="designation">জুনিয়র ইনস্ট্রাক্টর (টেক/ইলেকট্রিক্যাল) রাজস্বখাতে প্রক্রিয়াধীন</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৭২২৮০৯০১০
                                            <br>
                                            <i class="fas fa-envelope"></i> azadali415@gmail.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Power Department -->
                        <div class="department-section" id="power">
                            <h2 class="dept-title">পাওয়ার</h2>
                            <div class="teachers-grid">
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/chandankantidas.jpg" alt="প্রকৌশলী চন্দন কান্তি দাস">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>প্রকৌশলী চন্দন কান্তি দাস</h3>
                                        <p class="designation">চিফ ইন্স্ট্রাক্টর (পাওয়ার) ও বিভাগীয় প্রধান (১ম শিফট)</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৭৫২৪২২২০২
                                            <br>
                                            <i class="fas fa-envelope"></i> engrchandan66@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/nayanranjan.jpeg" alt="শ্রী নয়ন রঞ্জন ভট্টাচার্য্য">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>শ্রী নয়ন রঞ্জন ভট্টাচার্য্য</h3>
                                        <p class="designation">ইনস্ট্রাক্টর (টেক/পাওয়ার) ও বিভাগীয় প্রধান (২য় শিফট)</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৭১২২১৫৮২৫
                                            <br>
                                            <i class="fas fa-envelope"></i> snrbhattacharjee@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/shahadathossain.jpg" alt="মোঃ শাহাদাৎ হোসেন">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মোঃ শাহাদাৎ হোসেন</h3>
                                        <p class="designation">জুনিয়র ইনস্ট্রাক্টর (টেক/পাওয়ার)</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> 	০১৭৪৫৯৮৫৯১২
                                            <br>
                                            <i class="fas fa-envelope"></i> shahadat3711@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/indrojithaldar.jpg" alt="ইন্দ্রজিত হালদার">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>ইন্দ্রজিত হালদার</h3>
                                        <p class="designation">জুনিয়র ইনস্ট্রাক্টর (টেক/পাওয়ার)</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৭৬৫০৫৫৪৮০
                                            <br>
                                            <i class="fas fa-envelope"></i> indra118535@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/mintudas.jpg" alt="মিন্টু দাশ">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মিন্টু দাশ</h3>
                                        <p class="designation">জুনিয়র ইনস্ট্রাক্টর (টেক/পাওয়ার) রাজস্বখাতে প্রক্রিয়াধীন</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৬২৪২৪৬৭৩৫
                                            <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Architecture Department -->
                        <div class="department-section" id="architecture">
                            <h2 class="dept-title">আর্কিটেকচার</h2>
                            <div class="teachers-grid">
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/ekhlasuddin.jpg" alt="প্রকৌশলী ইখলাস উদ্দিন">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>প্রকৌশলী ইখলাস উদ্দিন</h3>
                                        <p class="designation">	চিফ ইনস্ট্রাক্টর (পাওয়ার) ও বিভাগীয় প্রধান আর্কিটেকচার (উভয় শিফট)</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৭১২৫৫১৩২৩
                                            <br>
                                            <i class="fas fa-envelope"></i> ikhlas581966@gmail.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Non-Tech Department -->
                        <div class="department-section" id="non-tech">
                            <h2 class="dept-title">নন-টেক সকল শিক্ষকবৃন্দ</h2>
                            <div class="teachers-grid">
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/nijamuddin.jpeg" alt="মোহাম্মদ নিজাম উদ্দিন">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মোহাম্মদ নিজাম উদ্দিন</h3>
                                        <p class="designation">ইনস্ট্রাক্টর (নন-টেক) গণিত</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৮১৭৭২৪৯৮৬
                                            <br>
                                            <i class="fas fa-envelope"></i> nizamnahin@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/gmtajuddin.jpg" alt="	জি. এম তাজউদ্দিন">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>	জি. এম তাজউদ্দিন</h3>
                                        <p class="designation">ইনস্ট্রাক্টর (নন-টেক) ম্যানেজমেন্ট ও বিভাগীয় প্রধান (২য় শিফট)</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৯৯২০০৬৯৭৩
                                            <br>
                                            <i class="fas fa-envelope"></i> tuppolash@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/najninsultana.png" alt="নাজনীন সুলতানা">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>নাজনীন সুলতানা</h3>
                                        <p class="designation">ইনস্ট্রাক্টর (নন-টেক) বাংলা</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৮১৬৬৮৭৩৩১
                                            <br>
                                            <i class="fas fa-envelope"></i> nazninsultanapoly2005@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/abulbashar.jpeg" alt="মোঃ আবুল বশর">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মোঃ আবুল বশর</h3>
                                        <p class="designation">	ইনস্ট্রাক্টর (নন-টেক) পদার্থ ও বিভাগীয় প্রধান (১ম শিফট)</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৮১৪৭৭৭৪৮৮
                                            <br>
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/biplobkumar.jpg" alt="	বিপ্লব কুমার সরকার">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>	বিপ্লব কুমার সরকার</h3>
                                        <p class="designation">	ইনস্ট্রাক্টর (নন-টেক) ম্যানেজমেন্ট</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৮১৮৪৮২৭৮২
                                            <br>
                                            <i class="fas fa-envelope"></i> biplabsarker54321@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/mdhossen.jpg" alt="মোহাম্মদ হোসেন">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মোহাম্মদ হোসেন</h3>
                                        <p class="designation">	ইনস্ট্রাক্টর (নন-টেক) পদার্থ বিজ্ঞান</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৮৩১৯৬০৬৩৬
                                            <br>
                                            <i class="fas fa-envelope"></i> mhp.hosen36@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/abdulhannan.jpeg" alt="আবদুল হান্নান">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>আবদুল হান্নান</h3>
                                        <p class="designation">ইনস্ট্রাক্টর (নন-টেক) গণিত</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৫১৫-২৫০০৭৮
                                            <br>
                                            <i class="fas fa-envelope"></i> hannandupi@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/tarekmahmud.jpg" alt="তারেক মাহমুদ">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>তারেক মাহমুদ</h3>
                                        <p class="designation">জুনিয়র ইনস্ট্রাক্টর (নন-টেক) গণিত</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৮৪০২৬০৮৭১
                                            <br>
                                            <i class="fas fa-envelope"></i> tareqp1991tp@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/atikurrahman.png" alt="মোঃ আতিকুর রহমান">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মোঃ আতিকুর রহমান</h3>
                                        <p class="designation">	জুনিয়র ইনস্ট্রাক্টর (নন-টেক) ইংরেজি</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৭২৮০৮৩৪৭৭
                                            <br>
                                            <i class="fas fa-envelope"></i> atikurrahman3526@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/naimahmed.jpeg" alt="নাঈম আহমেদ">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>	নাঈম আহমেদ</h3>
                                        <p class="designation">জুনিয়র ইনস্ট্রাক্টর (নন-টেক)</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৮১৮২৮৭৪৪৩
                                            <br>
                                            <i class="fas fa-envelope"></i> naimimran5@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/srijonirani.jpg" alt="	সৃজনী রাণী কুরী">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>	সৃজনী রাণী কুরী</h3>
                                        <p class="designation">জুনিয়র ইনস্ট্রাক্টর (নন-টেক) হিসাব বিজ্ঞান</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৭৯১২৯৪৭০৭
                                            <br>
                                            <i class="fas fa-envelope"></i> srijanykuri@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/anowarparvej.jpeg" alt="আনোয়ার পারভেজ">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>আনোয়ার পারভেজ</h3>
                                        <p class="designation">জুনিয়র ইন্সট্রাক্টর (নন-টেক/রসায়ন)</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৮২৫-০০৮১৫৩
                                            <br>
                                            <i class="fas fa-envelope"></i> anwaracce@yahoo.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/nijhum.jpeg" alt="নিঝুম মজুমদার">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>নিঝুম মজুমদার</h3>
                                        <p class="designation">	জুনিয়র ইনস্ট্রাক্টর (গণিত)</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৯৬৫৬০৩২০০
                                            <br>
                                            <i class="fas fa-envelope"></i> mojumdernijhum@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/bahauddin.jpg" alt="বাহা উদ্দিন রায়হান">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>বাহা উদ্দিন রায়হান</h3>
                                        <p class="designation">জুনিয়র ইন্সট্রাক্টর (নন-টেক) গণিত</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৮১৫৩২৬৫৫৩
                                            <br>
                                            <i class="fas fa-envelope"></i> bahauddinrayhan@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/kamrulhasan.jpeg" alt="মোঃ কামরুল হাসান">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মোঃ কামরুল হাসান</h3>
                                        <p class="designation">জুনিয়র ইন্সট্রাক্টর ( নন টেক) গণিত</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৬৭৪৮১১১৩৭
                                            <br>
                                            <i class="fas fa-envelope"></i> hasankamrulbbs@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/mintukumar.jpeg" alt="	মন্টি কুমার দে">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>মন্টি কুমার দে</h3>
                                        <p class="designation">	জুনিয়র ইনস্ট্রাক্টর (নন টেক) পদার্থবিজ্ঞান</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৮২৯১৫০৬২১
                                            <br>
                                            <i class="fas fa-envelope"></i> montykumardey@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/rafiqueahmed.jpeg" alt="রফিক আহমদ">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>রফিক আহমদ</h3>
                                        <p class="designation">ফিজিক্যাল এডুকেশন ইনস্ট্রাক্টর</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৮৫৫৫৮৫০৪০
                                            <br>
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-photo">
                                        <img src="images/ujjhalghosh.jpeg" alt="উজ্জ্বল ঘোষ">
                                    </div>
                                    <div class="teacher-info">
                                        <h3>উজ্জ্বল ঘোষ</h3>
                                        <p class="designation">	জুনিয়র ইনস্ট্রাক্টর (নন-টেক) রাজস্বখাতে প্রক্রিয়াধীন</p>
                                        <p class="contact">
                                            <i class="fas fa-phone"></i> ০১৮২৫৮৬৮২৫৫
                                            <br>
                                            <i class="fas fa-envelope"></i> uzzalgh7@gmail.com
                                        </p>
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
    .content-wrapper {
        background: #fff;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

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

    .department-nav {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        justify-content: center;
        padding: 1rem;
        background: #f8f9fa;
        border-radius: 8px;
    }

    .dept-btn {
        padding: 0.8rem 1.5rem;
        border: 2px solid #006A4E;
        background: white;
        color: #006A4E;
        border-radius: 6px;
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .dept-btn:hover, .dept-btn.active {
        background: #006A4E;
        color: white!important;
    }

    .department-section {
        display: none;
    }

    .department-section.active {
        display: block;
        animation: fadeIn 0.5s ease-out;
    }

    .dept-title {
        color: #006A4E;
        font-size: 1.8rem;
        margin-bottom: 1.5rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid #006A4E;
    }

    .teachers-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 2rem;
        padding: 1rem 0;
    }

    .teacher-card {
        background: white;
        border: 1px solid #dde1e3;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .teacher-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .teacher-photo {
        width: 100%;
        padding-top: 100%; /* Creates a square aspect ratio */
        position: relative;
        overflow: hidden;
    }

    .teacher-photo img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .teacher-info {
        padding: 1.5rem;
    }

    .teacher-info h3 {
        color: #006A4E;
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
    }

    .teacher-info p {
        margin-bottom: 0.5rem;
        color: #4a5568;
    }

    .designation {
        font-weight: 600;
        color: #2d3748;
    }

    .education {
        font-size: 0.9rem;
        color: #718096;
    }

    .contact {
        margin-top: 1rem;
        font-size: 0.9rem;
    }

    .contact i {
        color: #006A4E;
        width: 20px;
        margin-right: 5px;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 768px) {
        .content-wrapper {
            padding: 1rem;
        }

        .department-nav {
            flex-direction: column;
            gap: 0.5rem;
        }

        .dept-btn {
            width: 100%;
            text-align: center;
            padding: 0.6rem 1rem;
        }

        .teachers-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .page-title {
            font-size: 1.8rem;
        }

        .dept-title {
            font-size: 1.5rem;
        }

        .teacher-photo {
            padding-top: 80%;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const deptButtons = document.querySelectorAll('.dept-btn');
    const deptSections = document.querySelectorAll('.department-section');

    deptButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons and sections
            deptButtons.forEach(btn => btn.classList.remove('active'));
            deptSections.forEach(section => section.classList.remove('active'));

            // Add active class to clicked button
            this.classList.add('active');

            // Show corresponding section
            const deptId = this.getAttribute('data-dept');
            document.getElementById(deptId).classList.add('active');
        });
    });
});
</script>

<?php include('includes/footer.php'); ?>
