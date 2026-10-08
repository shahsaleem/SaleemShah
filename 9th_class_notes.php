<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9th Class English Notes PDF | Punjab Board | Saleem Academy</title>

<meta name="description" content="Download 9th Class English Notes PDF for Punjab Board. Get chapter-wise notes, questions and answers, summaries, grammar, essays, letters, applications, translations, MCQs, and exam preparation material for Class 9 English.">

<meta name="keywords" content="9th Class English Notes, Class 9 English Notes PDF, 9th English Notes Punjab Board, 9th Class English Book Notes, 9th Class English Chapter Wise Notes, 9th English Questions and Answers, 9th Class English Summaries, 9th Class English Grammar, 9th Class English MCQs, 9th Class English Translation, 9th Class English Essays, 9th Class English Letters, 9th Class English Applications, 9th Class English Solved Exercises, 9th Class English Important Questions, 9th English Exam Preparation, Punjab Board Class 9 English Notes, 9th Class English PDF Download, Matric Part 1 English Notes, Saleem Academy">
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
    <H1 id="teamhead">9th Class All Notes</H1>

    <h2>9th Class English Notes</h2>
    <!-- section of English Notes -->
    <div class="container text-center">
        <div class="row">
            <div class="col-md-3 gy-3 col-sm-6">
                    <!-- card starts -->
                <div class="card" style="width: 18rem;">
                    <img src="./uploads/Tenses Notes Study Notebook.png" class="card-img-top" alt="9th Class Tenses Notes">
                    <div class="card-body">
                        <a href="https://drive.google.com/file/d/1IeeCSvyT2iaxpXbi1E6FObly01qCJYJ8/view?usp=drive_link" class="btn btn-primary">Download</a>
                        <h5 class="card-title ">9th Class English Tenses Notes</h5> 
                    </div>
                </div>
<!-- card ends here -->
            </div>
            <div class="col-md-3 gy-3 col-sm-6">
                                    <!-- card starts -->
                <div class="card" style="width: 18rem;">
                    <img src="./uploads/Active and Passive Voice Notes Badge.png" class="card-img-top" alt="9th Class Tenses Notes">
                    <div class="card-body">
                        <a href="https://drive.google.com/file/d/1TK9NgP-UyFoviIa7xzjICJIdz9a2JqMh/view" class="btn btn-dark">Download</a>
                        <h5 class="card-title ">9th Class Active & Passive Notes</h5> 
                    </div>
                </div>
<!-- card ends here -->
            </div>
            <div class="col-md-3 gy-3 col-sm-6">
                                 <!-- card starts -->
                <div class="card" style="width: 18rem;">
                    <img src="./uploads/9th Class Letters & Summaries.png" class="card-img-top" alt="9th Class Tenses Notes">
                    <div class="card-body">
                        <a href="https://drive.google.com/file/d/1gzvGBXCrjVw4WmKH9_ihHhQDycN_d1RZ/view" class="btn btn-danger">Download</a>
                        <h5 class="card-title ">9th Class Letters And Summaries</h5> 
                    </div>
                </div>
<!-- card ends here -->
            </div>
            <div class="col-md-3 gy-3 col-sm-6">
                                       <!-- card starts -->
                <div class="card" style="width: 18rem;">
                    <img src="./uploads/9th English Modal Papers 2026.png" class="card-img-top" alt="9th Class Tenses Notes">
                    <div class="card-body">
                        <a href="https://drive.google.com/file/d/1Jud9BuqWXM8tH_xvhG4W7oZGQVQQBhQs/view" class="btn btn-success">Download</a>
                        <h5 class="card-title ">9th Class English Up to date 2026-27</h5> 
                    </div>
                </div>
<!-- card ends here -->
            </div>

        </div>
    </div>











    <!-- content ends here -->


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