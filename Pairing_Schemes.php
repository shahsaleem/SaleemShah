<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- meta tags starts -->
     <!-- Primary Meta Tags -->
<title>Latest Pairing Scheme 9th & 10th Class (All Boards PDF) | Saleem Academy</title>
<meta name="title" content="Latest Pairing Scheme 9th & 10th Class (All Boards PDF) | Saleem Academy">
<meta name="description" content="Download the latest official board pairing scheme and paper pattern for 9th and 10th class in PDF. Check chapter-wise weightage and marks distribution now!">
<meta name="keywords" content="pairing scheme, Multan Boards pairing scheme 2026-27, Bahawalpur board pairing scheme, Punjab boards paper scheme, 9th class pairing scheme, 10th class pairing scheme, matric paper scheme pdf, assessment scheme all boards, BISE paper pattern, Saleem Academy">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://www.saleemacademy.com/Pairing_schemes">

<!-- Open Graph / Facebook / WhatsApp -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="Saleem Academy">
<meta property="og:url" content="https://www.saleemacademy.com/Pairing_Schemes">
<meta property="og:title" content="Updated Board Pairing Scheme & Paper Pattern PDF | Saleem Academy">
<meta property="og:description" content="Study smart for your board exams! View and download the latest subject-wise pairing schemes and marks distribution in PDF.">
<meta property="og:image" content="https://www.saleemacademy.com/uploads/paper_scheme.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">

<!-- Twitter / X -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="https://www.saleemacademy.com/Pairing-Schemes">
<meta name="twitter:title" content="Updated Board Pairing Scheme & Paper Pattern PDF | Saleem Academy">
<meta name="twitter:description" content="Download the latest official board pairing scheme and paper pattern for 9th and 10th class in PDF.">
<meta name="twitter:image" content="https://www.saleemacademy.com/images/uploads/paper_scheme.jpg">
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


</head>

<body>

    <!-- =========================
         NAVBAR
    ========================== -->
    <?php
    include_once 'includes/header.php';
    ?>



    <!-- =========================
         DEMO CONTENT
    ========================== -->

    <!-- Our Team Section -->
    <H1 id="teamhead">Paper Schemes</H1>
  

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