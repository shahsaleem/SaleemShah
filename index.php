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
    <link rel="shortcut icon" href="./includes/logo.png" type="image/x-icon">
    <!-- urdu fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400;600;700&family=Noto+Sans+Arabic:wght@300;400;600;700&family=Plus+Jakarta+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <!-- google fonts and popins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- my header footer css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- indexpage css -->
    <link rel="stylesheet" href="./css/indexpage.css">

</head>

<body>

    <!-- =========================
         NAVBAR
    ========================== -->
<?php
include_once 'includes/header.php';
?>


    <!-- =========================
         Website body CONTENT
    ========================== -->

       <section class="demo-content">

        <div>

            <h1>
                Welcome to <span>Saleem Academy</span>
            </h1>

            <p class="text-muted mt-3">
                Learn new skills. Build your future. Achieve your goals.
            </p>

        </div>

    </section>


<!-- buttons starts here -->
<div class="container py-4">
    <div class="row g-4 justify-content-center">

        <!-- Home -->
        <div class="col-6 col-md-3">
            <a href="/index.php" class="edu-btn home-btn">
                <i class="bi bi-house-door-fill"></i>
                <span>Home</span>
            </a>
        </div>

        <!-- Books -->
        <div class="col-6 col-md-3">
            <a href="/books.php" class="edu-btn books-btn">
                <i class="bi bi-book-fill"></i>
                <span>Books</span>
            </a>
        </div>

        <!-- Paper Schemes -->
        <div class="col-6 col-md-3">
            <a href="/papers-schemes.php" class="edu-btn papers-btn">
                <i class="bi bi-file-earmark-text-fill"></i>
                <span>Paper Schemes</span>
            </a>
        </div>

        <!-- Notes -->
        <div class="col-6 col-md-3">
            <a href="/notes.php" class="edu-btn notes-btn">
                <i class="bi bi-journal-text"></i>
                <span>Notes</span>
            </a>
        </div>

    </div>
</div>

<!-- buttons ends here -->

    <!-- carosal -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./includes/banner_1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./includes/banner_2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./includes/banner_3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carosal ends -->
  
    



    <!-- body content ends here -->
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

        window.addEventListener("scroll", function () {

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

        moveToTopBtn.addEventListener("click", function () {
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
            .addEventListener("submit", function (event) {

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

        navLinks.forEach(function (link) {

            link.addEventListener("click", function () {

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