<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation Builder</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>oriJEEn</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="./index.html" class="nav-item nav-link active">Home</a>
                <a href="./about.html" class="nav-item nav-link">About</a>
                <a href="./courses.html" class="nav-item nav-link">Courses</a>
                <a href="./team.html" class="nav-item nav-link">Our Team</a>
                <a href="./testimonial.html" class="nav-item nav-link">Testimonial</a>
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> -->
                <a href="./contact.html" class="nav-item nav-link">Contact</a>
                <a href="./join-now.html" class="nav-item nav-link">Join Now</a>
            </div>
            <a href="std1/index.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Log In<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Course 1</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About The Course</h6>
                    <h1 class="mb-4">Foundation Builder</h1>
                    <p class="mb-4"> A comprehensive course designed to build a strong foundation in Physics, Chemistry, and Mathematics for students in the early stages of JEE preparation.</p>
                    <p class="mb-4"> Our Foundation Builder Course is specifically designed to provide students with a solid foundation in these subjects, preparing them for success at the board level examinations. This comprehensive course covers the essential concepts and topics required for board-level exams in mathematics, physics, and chemistry.</p>

                    <div class="row gy-2 gx-4 mb-4">
                        
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i> Duration : 10-11 Months</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>For Students : 8 to 12</p>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <section class="about-tabs mt-5">
        <ul class="nav nav-pills" style="margin-left: 100px;" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Math</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Physics</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Chemistry</button>
            </li>
        </ul>
    </section>
    <section class="main-about-page mb-5" style="border: 2px solid #06BBCC; margin-top: 20px; margin-left: 100px; margin-right: 100px; border-radius: 10px; padding: 5px;">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
                <h3>Mathematics</h3>
                <p>In the mathematics component of the course, students will develop a strong understanding of fundamental concepts. They will learn how to solve equations, work with geometric figures, analyze functions, and apply mathematical principles to real-world problems. The course emphasizes problem-solving techniques, logical reasoning, and mathematical applications in various fields.</p>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">
                <h2>Physics</h2>
                <p>The physics component focuses on building a conceptual understanding of key topics. Students will learn fundamental principles, laws, and formulas, and apply them to solve numerical problems and interpret physical phenomena. The course also covers practical aspects, experimental methods, and data analysis.</p>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="contact-tab">
                <h2>Chemistry</h2>
                <p>The chemistry component covers the fundamental principles and concepts of organic, inorganic, and physical chemistry. Students will learn fundamental principles, laws, and formulas, and apply them to solve numerical problems</p>
            </div>
        </div>

    </section>


     <!-- About Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    
                    <h1 class="mb-4">Teaching Methodology</h1>
                    <p class="mb-4"> Our Foundation Builder Course employs a combination of lectures, interactive discussions, examples, and practice exercises to reinforce learning. Students will have access to comprehensive study materials, including textbooks, reference books, and practice papers. Regular assessments and mock exams are conducted to track progress and identify areas for improvement. Our experienced faculty members provide guidance, clarify doubts, and ensure that students develop a strong conceptual understanding of the subjects.</p>
                    <p class="mb-4"> Overall, our Foundation Builder Course equips students with the knowledge, problem-solving skills, and analytical thinking required to excel in their board-level examinations. By mastering the fundamental concepts in these subjects, students will be well-prepared to tackle the board exams with confidence and achieve excellent results. Apply</p>
                    <div class="row gy-2 gx-4 mb-4">
                        
                        <!-- <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i> Duration : 10-11 Months</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>For Students : 8 to 12</p>
                        </div> -->
                        
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="join-now.html">Join Now</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


     <!-- Footer Start -->
     <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="">Home</a>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Courses</a>
                    <a class="btn btn-link" href="">Team Members</a>
                    <a class="btn btn-link" href="">Join Now</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>3/17, Prafulla Chakki Path, City Centre, Durgapur, W.B., 713216</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>89186 52513 / 89065 40698</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>orijeenacademy@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-6">
                            <img class="img-fluid bg-light p-1" src="img/img2.jpeg" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-light p-1" src="img/img3.jpeg" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-light p-1" src="img/img6.jpeg" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-light p-1" src="img/img7.jpeg" alt="">
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Join our newsletter to get daily update from oriJEEn.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="index.html">oriJEEn</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://teatechsolution.com">TTS</a><br><br>
                       
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="index.html">Home</a>
                            <a href="about.html">About</a>
                            <a href="courses.html">Courses</a>
                            <a href="contact.html">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


</body>
</html>