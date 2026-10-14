<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saleem Academy</title>
    <!-- meta tags ends here -->


    <!-- favicon -->
    <link rel="shortcut icon" href="./includes/favicon.png" type="image/x-icon">
    <!-- urdu fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400;600;700&family=Noto+Sans+Arabic:wght@300;400;600;700&family=Plus+Jakarta+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- my header footer css -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/about.css">


</head>

<body>

    <!-- =========================
         NAVBAR
    ========================== -->
    <?php
    include_once 'includes/header.php';
    ?>



    <!-- =========================
         Website  CONTENT
    ========================== -->
    <!-- About Owner section -->
    <div class="container py-5">
        <!-- Main Bootstrap Grid Card -->
        <div class="instructor-card">
            <div class="row align-items-center g-4">
                <!-- =========================
                 LEFT COLUMN
            ========================== -->
                <div class="col-12 col-md-4 col-lg-3 text-center">
                    <img src="./includes/Saleem Shah.png"
                        alt="Saleem Shah"
                        class="img-fluid instructor-image">
                    <h3 class="instructor-name">
                        Saleem Shah
                    </h3>
                    <div class="instructor-role">
                        Biological Science Specialist
                    </div>
                </div>
                <!-- =========================
                 RIGHT COLUMN
            ========================== -->
                <div class="col-12 col-md-8 col-lg-9">
                 <!-- Certification Badge -->
                    <div class="certified-badge">
                        <i class="bi bi-lightning-fill"></i>
                        CAMBRIDGE TRAINED &amp; CERTIFIED
                    </div>
                    <!-- Heading -->
                    <h2 class="instructor-heading">
                        Meet Your Instructor
                    </h2>
                    <!-- Description -->
                    <p class="instructor-description">
                        Welcome to Saleem Academy. I'm Muhammad Saleem Shah, a
                        Cambridge-trained Enterprenaur and educator with
                        over 5 years of teaching experience. My goal is to
                        help students develop strong conceptual understanding,
                        logical thinking, and problem-solving skills through
                        structured, exam-focused instruction.
                    </p>
                </div>
            </div>
        </div>
    </div>



    <!-- Our Team Section -->
    <H1 id="teamhead">Our Team</H1>
    <div class="container text-center">
        <div class="row">
            <!-- card 1 -->
            <div class="col-sm-6 col-md-3 gy-3 gx-3">

                <div class="card" style="width: 18rem;">
                    <img src="./includes/Saleem Shah.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Saleem Shah</h5> <span class="badge text-bg-success">Founder</span>
                    </div>
                </div>

            </div>
            <!-- card 2 -->
            <div class="col-sm-6 col-md-3 gy-3 gx-3">

                <div class="card" style="width: 18rem;">
                    <img src="./includes/team3.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Warda Yasmin</h5> <span class="badge text-bg-warning">Operational
                            Manager</span>
                    </div>
                </div>

            </div>
            <!-- card 3 -->
            <div class="col-sm-6 col-md-3 gy-3 gx-3">

                <div class="card" style="width: 18rem;">
                    <img src="./includes/team4.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sonia Malik</h5> <span class="badge text-bg-secondary">Developer</span>
                    </div>
                </div>

            </div>
            <!-- card 4 -->
            <div class="col-sm-6 col-md-3 gy-3 gx-3">

                <div class="card" style="width: 18rem;">
                    <img src="./includes/team 2.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ume Habiba</h5> <span class="badge text-bg-danger">Supervisor</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
<!-- ads of adestra code starts here -->
<script>
  atOptions = {
    'key' : 'dc2f0e4fa8aafa08a8360d57c42ad5cd',
    'format' : 'iframe',
    'height' : 90,
    'width' : 728,
    'params' : {}
  };
</script>
<script src="https://www.highrevenueformat.com/dc2f0e4fa8aafa08a8360d57c42ad5cd/invoke.js"></script>
<!-- adestra code ends here -->
    <!-- =========================
         FOOTER
    ========================== -->

    <?php
    include_once 'includes/footer.php';
    ?>


    <!-- MOVE TO TOP BUTTON -->

    <button id="moveToTopBtn" class="btn-move-top" title="Go to top">
        <i class="bi bi-arrow-up"></i>
    </button>


    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>


    <!-- Custom JavaScript -->

    <script>
        /* =========================
            CURRENT YEAR
        ========================== */

        document.getElementById("currentYear").textContent =
            new Date().getFullYear();


        /* =========================
            NAVBAR SCROLL EFFECT
        ========================== */

        const navbar = document.querySelector(".main-navbar");
        const moveToTopBtn = document.getElementById("moveToTopBtn");

        window.addEventListener("scroll", function() {

            // Navbar shadow on scroll
            if (window.scrollY > 30) {
                navbar.style.boxShadow =
                    "0 5px 20px rgba(15, 23, 42, 0.08)";
            } else {
                navbar.style.boxShadow =
                    "0 3px 15px rgba(15, 23, 42, 0.04)";
            }

            // Move To Top Button Toggle
            if (window.scrollY > 300) {
                moveToTopBtn.classList.add("show");
            } else {
                moveToTopBtn.classList.remove("show");
            }

        });


        /* =========================
            MOVE TO TOP FUNCTIONALITY
        ========================== */

        moveToTopBtn.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });


        /* =========================
            NEWSLETTER FORM
        ========================== */

        document
            .getElementById("newsletterForm")
            .addEventListener("submit", function(event) {

                event.preventDefault();

                const email =
                    document.getElementById("emailInput").value;

                if (email) {

                    alert(
                        "Thank you for subscribing to Saleem Academy!"
                    );

                    document.getElementById("emailInput").value = "";

                }

            });


        /* =========================
            CLOSE MOBILE MENU
            AFTER CLICKING LINK
        ========================== */

        const navLinks =
            document.querySelectorAll(
                ".navbar-nav .nav-link:not(.dropdown-toggle)"
            );

        const navbarCollapse =
            document.getElementById("mainNavbar");

        navLinks.forEach(function(link) {

            link.addEventListener("click", function() {

                if (window.innerWidth < 992) {

                    const bsCollapse =
                        bootstrap.Collapse.getInstance(
                            navbarCollapse
                        );

                    if (bsCollapse) {
                        bsCollapse.hide();
                    }

                }

            });

        });
    </script>
</body>

</html>