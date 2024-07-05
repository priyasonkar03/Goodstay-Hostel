<!-- By CodeAstro - codeastro.com -->
<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Goodstay Hostels</title>
    <!-- Custom CSS -->
    <!-- <link href="dist/css/style.min.css" rel="stylesheet"> -->
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="dist/css/styles.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- AOS animation link -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">    
</head>
<style>
    .service-card {
        margin: 20px 0;
        align-items: center;
        justify-content: center;
        text-align: center;
        border: none;
    }
    .service-img {
        height: 250px;
        /* padding: 10px; */
        width: 250px;
        object-fit: cover;
        margin-top: 10px;
        border-radius: 20px;
    }
    .gallery-img{
        height: 250px;
        /* padding: 10px; */
        width: 250px;
        object-fit: cover;
        margin-top: 10px;
        border-radius: 20px;
    }
    .logo{
        border-radius: 50px;
    }
    .home-img{
        height: 50%;
        width: 100%;
    }
    .home-testimonial{background-color: #231834;height: 380px}.home-testimonial-bottom{background-color: #f8f8f8;transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top: 20px;margin-bottom: 0px;position: relative;height: 130px;top: 190px}.home-testimonial h3{color: var(--orange);font-size: 14px;font-weight: 500;text-transform: uppercase}.home-testimonial h2{color: white;font-size: 28px;font-weight: 700}.testimonial-inner{position: relative;top: -174px}.testimonial-pos{position: relative;top: 24px}.testimonial-inner .tour-desc{border-radius: 5px;padding: 40px}.color-grey-3{font-family: "Montserrat", Sans-serif;font-size: 14px;color: #6c83a2}.testimonial-inner img.tm-people{width: 60px;height: 60px;-webkit-border-radius: 50%;border-radius: 50%;-o-object-fit: cover;object-fit: cover;max-width: none}.link-name{font-family: "Montserrat", Sans-serif;font-size: 14px;color: #6c83a2}.link-position{font-family: "Montserrat", Sans-serif;font-size: 12px;color: #6c83a2}
</style>

<body>

<?php include 'header.php'?>
<!-- Home Section -->
<section id="home" class="py-3 mt-5">
    <img src="assets/img/home.png" class="home-img" alt="home">
</section>
<!-- Services Section -->
<section id="services" class="py-2">
    <div class="container">
        <h2 class="text-center my-4" style="color: var(--orange);">Our Services</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card service-card"  data-aos="flip-left">
                    <img src="assets/img/service1.png" class="card-img-top service-img" alt="Room Management">
                    <div class="card-body">
                        <h5 class="card-title">Funrihsed Rooms</h5>
                        <p class="card-text">We provide fully Funrihsed rooms with quality matteresses, tables, closets and other required facilities.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card" data-aos="flip-left">
                    <img src="assets/img/service2.png" class="card-img-top service-img" alt="Maintenance Requests">
                    <div class="card-body">
                        <h5 class="card-title">WIFI</h5>
                        <p class="card-text">We provide wirelesss high speed internet so that you can stay connected with your friends and faimly.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card" data-aos="flip-left">
                    <img src="assets/img/service3.png" class="card-img-top service-img" alt="Billing and Payments">
                    <div class="card-body">
                        <h5 class="card-title">Canteen</h5>
                        <p class="card-text">We cater to your food requirements as well. We provide breakfast lunch & dinner services in our canteen.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card" data-aos="flip-left">
                    <img src="assets/img/service4.png " class="card-img-top service-img" alt="Communication">
                    <div class="card-body">
                        <h5 class="card-title">Housekeeping</h5>
                        <p class="card-text">We also provide Housekeeping services like laundry, dish cleaning and room cleaning based on requirements.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card" data-aos="flip-left">
                    <img src="assets/img/service5.png" class="card-img-top service-img" alt="Security">
                    <div class="card-body">
                        <h5 class="card-title">Watchman</h5>
                        <p class="card-text">Depending on the purpose of keeping a close watch on the visitors and passersby we provide efficient watchman.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card" data-aos="flip-left">
                    <img src="assets/img/service6.png" class="card-img-top service-img" alt="Customization">
                    <div class="card-body">
                        <h5 class="card-title">Armed Guards</h5>
                        <p class="card-text">One security agency facilities Guards who have prolific knowledge in handling licensed arms to tackle situations</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About section -->
<section id="about">
    <div class="container px-5"  data-aos="zoom-in-up">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5"><img class="img-fluid" src="assets/img/About.png" alt="..." /></div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h2 class="display-4" style="color: var(--orange);">About Us!</h2>
                    <p>At Goodstay hostel, we are dedicated to transforming the way hostels are managed and operated. Founded in 2024, our mission is to provide an efficient, user-friendly platform that simplifies the complexities of hostel administration, ensuring a seamless experience for both administrators and residents.<br>
                        Our mission is to empower hostel managers with the tools they need to create an organized, stress-free living environment. By leveraging cutting-edge technology, we aim to streamline daily operations, enhance communication, and improve the overall quality of life for hostel residents.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Gallery section -->
<section id="gallery" class="py-5">
    <div class="container">
        <h2 class="text-center my-4" style="color: var(--orange);">Our Gallery</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card service-card"  data-aos="zoom-out-up">
                    <img src="assets/img/gallery1.png" class="card-img-top gallery-img" alt="Room Management">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card"  data-aos="zoom-out-up">
                    <img src="assets/img/gallery2.png" class="card-img-top gallery-img" alt="Room Management">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card"  data-aos="zoom-out-up">
                    <img src="assets/img/gallery3.png" class="card-img-top gallery-img" alt="Room Management">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section-->
<section id="testimonial" class="home-testimonial">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center testimonial-pos">
            <div class="col-md-12 pt-4 d-flex justify-content-center">
                <h3>Testimonials</h3>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <h2>Explore the students experience</h2>
            </div>
        </div>
        <section class="home-testimonial-bottom">
            <div class="container testimonial-inner">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 style-3" data-aos="flip-up">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                <div class="link-position d-flex justify-content-center">Student</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 style-3" data-aos="flip-up">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                <div class="link-position d-flex justify-content-center">Student</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 style-3" data-aos="flip-up">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                <div class="link-position d-flex justify-content-center">Student</div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
</section>


<footer class="py-5 bg-black mt-2">
<?php include 'footer.php'?>    
</footer>

  <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <!-- <script src="assets/libs/jquery/dist/jquery.min.js "></script> -->
    <!-- Bootstrap tether Core JavaScript -->
    <!-- <script src="assets/libs/popper.js/dist/umd/popper.min.js "></script> -->
    <!-- <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js "></script> -->
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- Footer-->

<!-- AOS animations js -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
     AOS.init();
</script>
</body>
</html>