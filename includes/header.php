<?php


?>
<nav class="navbar navbar-expand-lg main-navbar">

        <div class="container">

            <!-- Logo Image -->

            <a class="navbar-brand" href="/index.php">
                <img src="./includes/logo.png" alt="Saleem Academy" class="brand-logo-img">

                <div class="brand-text">
                    Saleem <span>Academy</span>
                    <small class="brand-tagline">
                        Learn • Grow • Succeed
                    </small>
                </div>
            </a>


            <!-- Mobile Toggle -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-4"></i>
            </button>


            <!-- Navigation -->

            <div class="collapse navbar-collapse" id="mainNavbar">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link active" href="/index.php">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/books.php">
                            Books
                        </a>
                    </li>


                    <!-- Notes Dropdown -->

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="bi bi-caret-down-fill me-1"></i>
                            Notes
                        </a>

                        <ul class="dropdown-menu">

                            <li>
                                <a class="dropdown-item" href="/8th_class_notes.php">
                                    <i class="bi bi-8-circle me-2"></i>
                                    8th Class Notes
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="/9th_class_notes.php">
                                    <i class="bi bi-9-circle me-2"></i>
                                    9th Class Notes
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="/10th_class_notes.php">
                                    <i class="bi bi-book me-2"></i>
                                    10th Class Notes
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Test Papers drop down -->
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="bi bi-caret-down-fill me-1"></i>
                            Test Papers
                        </a>

                        <ul class="dropdown-menu">

                            <li>
                                <a class="dropdown-item" href="/8th_class_papers.php">
                                    <i class="bi bi-8-circle me-2"></i>
                                    8th Class Papers
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="/9th_class_papers.php">
                                    <i class="bi bi-9-circle me-2"></i>
                                    9th Class Papers
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="/10th_class_papers.php">
                                    <i class="bi bi-book me-2"></i>
                                    10th Class Papers
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="/Pairing_Schemes.php">
                            Schemes
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/about.php">
                            About Us
                        </a>
                    </li>

                </ul>


                <!-- Search and Buttons -->

                <div class="navbar-buttons ms-lg-3 d-flex align-items-center gap-2">

                    <!-- Navbar Search Bar -->
                    <form class="nav-search-form" role="search">
                        <i class="bi bi-search search-icon"></i>
                        <input class="form-control" type="search" placeholder="Search Papers..." aria-label="Search">
                    </form>

                    <a href="#" class="btn btn-login">
                        <i class="bi bi-person-bounding-box me-2"></i>Login
                    </a>

                    <a href="#" class="btn btn-outline-warning">
                        <i class="bi bi-file-person"></i> Student
                    </a>

                </div>

            </div>

        </div>

    </nav>