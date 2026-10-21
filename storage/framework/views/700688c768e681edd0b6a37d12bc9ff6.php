
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="A personal profile website showcasing background, skills, interests and contact information.">

    <title><?php echo $__env->yieldContent('title', 'Personal Profile'); ?> | MyPortfolio</title>

    <!-- Bootstrap 5.3.3 CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        /* ========================================
           1. GLOBAL DESIGN VARIABLES
        ======================================== */
        :root {
            --palette-burgundy: #64242f;
            --palette-red: #b44446;
            --palette-rose: #fc8f8f;
            --palette-gray: #dfd9d8;

            --bg-dark: var(--palette-gray);
            --bg-navbar: var(--palette-burgundy);
            --bg-card: #ffffff;
            --bg-footer: var(--palette-burgundy);

            --text-main: var(--palette-burgundy);
            --text-muted: var(--palette-burgundy);

            --border-color: rgba(100, 36, 47, 0.18);
            --transition: 0.25s ease;
        }

        /* ========================================
           2. GLOBAL PAGE STRUCTURE
        ======================================== */
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;

            background-color: var(--bg-dark);
            color: var(--text-main);

            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.7;
        }

        a {
            text-decoration: none;
        }

        a:focus-visible,
        button:focus-visible {
            outline: 3px solid var(--palette-rose);
            outline-offset: 4px;
        }

        /* ========================================
           3. NAVIGATION BAR
        ======================================== */
        .main-navbar {
            position: sticky;
            top: 0;
            z-index: 1030;

            background-color: var(--bg-navbar);
            border-bottom: 1px solid var(--border-color);

            padding: 15px 0;
        }

        .navbar-brand {
            color: #ffffff !important;

            font-size: 1.4rem;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .brand-accent {
            color: var(--palette-rose);
        }

        .navbar .nav-link {
            position: relative;

            margin-left: 10px;
            padding: 8px 12px;

            color: var(--palette-gray);
            font-size: 0.95rem;
            font-weight: 600;

            transition: color var(--transition);
        }

        .navbar .nav-link:hover,
        .navbar .nav-link:focus-visible,
        .navbar .nav-link.active {
            color: var(--palette-rose);
        }

        /* Active page indicator */
        .navbar .nav-link.active::after {
            content: "";

            position: absolute;
            bottom: 1px;
            left: 12px;
            right: 12px;

            height: 2px;
            border-radius: 5px;

            background-color: var(--bg-card);
        }

        .navbar .dropdown-menu {
            background-color: var(--palette-rose);
            border: 1px solid var(--border-color);
            border-radius: 8px;
        }

        .navbar .dropdown-item {
            color: var(--palette-burgundy);
        }

        .navbar .dropdown-item:hover,
        .navbar .dropdown-item:focus,
        .navbar .dropdown-item.active {
            color: var(--palette-burgundy);
            background-color: var(--palette-rose);
        }

        /* Mobile menu toggle */
        .navbar-toggler {
            border: 1px solid var(--palette-rose);
            padding: 7px 10px;
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.2rem rgba(252, 143, 143, 0.5);
        }

        .navbar-toggler-icon {
            filter: brightness(0) invert(1);
        }

        /* ========================================
           4. MAIN CONTENT AREA
        ======================================== */
        main {
            flex: 1;
            width: 100%;

            padding-top: 48px;
            padding-bottom: 64px;
        }

        /* Shared heading styles */
        .section-label {
            display: inline-block;

            margin-bottom: 12px;

            color: var(--palette-red);
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .section-title {
            margin-bottom: 20px;

            color: var(--text-main);
            font-size: clamp(2rem, 5vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: -1px;
        }

        .text-muted-custom {
            color: var(--text-muted);
        }

        /* ========================================
           5. REUSABLE CARD STYLES
        ======================================== */
        .card {
            height: 100%;

            color: var(--text-main);
            background-color: var(--bg-card);

            border: 1px solid var(--border-color);
            border-radius: 16px;

            transition:
                transform var(--transition),
                border-color var(--transition);
        }

        .card:hover {
            transform: translateY(-4px);
            border-color: var(--palette-red);
        }

        .card .card-title {
            color: var(--text-main);
            font-weight: 700;
        }

        .card .card-text {
            color: var(--text-muted);
        }

        /* ========================================
           6. REUSABLE BUTTON STYLES
        ======================================== */
        .btn-accent {
            display: inline-block;

            padding: 10px 22px;

            color: #ffffff;
            background-color: var(--palette-red);

            border: 1px solid var(--palette-red);
            border-radius: 8px;

            font-weight: 600;

            transition:
                background-color var(--transition),
                border-color var(--transition);
        }

        .btn-accent:hover {
            color: #ffffff;
            background-color: var(--palette-burgundy);
            border-color: var(--palette-burgundy);
        }

        .btn-outline-accent {
            display: inline-block;

            padding: 10px 22px;

            color: var(--palette-burgundy);
            background-color: transparent;

            border: 1px solid var(--palette-red);
            border-radius: 8px;

            font-weight: 600;

            transition:
                background-color var(--transition),
                color var(--transition);
        }

        .btn-outline-accent:hover {
            color: #ffffff;
            background-color: var(--palette-red);
        }

        /* ========================================
           7. SHARED FORM STYLING
        ======================================== */
        .form-label {
            color: var(--text-main);
            font-weight: 600;
        }

        .form-control,
        .form-select {
            color: var(--text-main);
            background-color: var(--bg-card);
            border: 1px solid rgba(100, 36, 47, 0.3);
            border-radius: 8px;
        }

        .form-control::placeholder {
            color: var(--text-muted);
            opacity: 1;
        }

        .form-control:focus,
        .form-select:focus {
            color: var(--text-main);
            background-color: var(--bg-card);

            border-color: var(--palette-red);
            box-shadow: 0 0 0 0.2rem rgba(180, 68, 70, 0.2);
        }

        /* Keep browser autofill text readable */
        .form-control:-webkit-autofill,
        .form-control:-webkit-autofill:hover,
        .form-control:-webkit-autofill:focus {
            -webkit-text-fill-color: var(--text-main);
            transition: background-color 9999s ease-out;
        }

        /* ========================================
           8. SHARED FOOTER
        ======================================== */
        .site-footer {
            padding: 24px 0;

            color: var(--palette-gray);
            background-color: var(--bg-footer);

            border-top: 1px solid rgba(223, 217, 216, 0.3);
            font-size: 0.9rem;
        }

        .footer-accent {
            color: var(--palette-rose);
            font-weight: 600;
        }

        /* ========================================
           9. RESPONSIVE DESIGN
        ======================================== */
        @media (max-width: 991.98px) {
            .navbar .nav-link {
                margin-left: 0;
                padding: 10px 0;
            }

            .navbar .nav-link.active::after {
                right: auto;
                bottom: 3px;
                left: 0;
                width: 32px;
            }
        }

        @media (max-width: 576px) {
            main {
                padding-top: 32px;
                padding-bottom: 40px;
            }

            .section-title {
                letter-spacing: -0.5px;
            }

            .site-footer {
                padding: 20px 0;
            }
        }

        /* ========================================
           10. REDUCED MOTION ACCESSIBILITY
        ======================================== */
        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition-duration: 0.01ms !important;
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
            }
        }
    </style>

    <!-- Allow individual pages to add their own CSS -->
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body>

    <!-- ========================================
         SHARED NAVIGATION BAR
    ========================================= -->
    <nav class="navbar navbar-expand-lg main-navbar">
        <div class="container">

            <!-- Website Brand -->
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                MyPortfolio<span class="brand-accent">.</span>
            </a>

            <!-- Mobile Navigation Toggle -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-controls="mainNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto">

                    <!-- Home -->
                    <li class="nav-item">
                        <a
                            class="nav-link <?php echo e(request()->routeIs('home') || request()->is('/') ? 'active' : ''); ?>"
                            href="<?php echo e(route('home')); ?>"
                            <?php if(request()->routeIs('home') || request()->is('/')): ?> aria-current="page" <?php endif; ?>
                        >
                            Home
                        </a>
                    </li>

                    <!-- About Us dropdown -->
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle <?php echo e(request()->routeIs('about.*') ? 'active' : ''); ?>"
                            href="#"
                            id="aboutUsDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            <?php if(request()->routeIs('about.*')): ?> aria-current="page" <?php endif; ?>
                        >
                            About Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="aboutUsDropdown">
                            <li>
                                <a
                                    class="dropdown-item <?php echo e(request()->routeIs('about.hazirah') ? 'active' : ''); ?>"
                                    href="<?php echo e(route('about.hazirah')); ?>"
                                    <?php if(request()->routeIs('about.hazirah')): ?> aria-current="page" <?php endif; ?>
                                >
                                    Hazirah
                                </a>
                            </li>
                            <li>
                                <a
                                    class="dropdown-item <?php echo e(request()->routeIs('about.aliyah') ? 'active' : ''); ?>"
                                    href="<?php echo e(route('about.aliyah')); ?>"
                                    <?php if(request()->routeIs('about.aliyah')): ?> aria-current="page" <?php endif; ?>
                                >
                                    Aliyah
                                </a>
                            </li>
                            <li>
                                <a
                                    class="dropdown-item <?php echo e(request()->routeIs('about.najwa') ? 'active' : ''); ?>"
                                    href="<?php echo e(route('about.najwa')); ?>"
                                    <?php if(request()->routeIs('about.najwa')): ?> aria-current="page" <?php endif; ?>
                                >
                                    Najwa
                                </a>
                            </li>
                            <li>
                                <a
                                    class="dropdown-item <?php echo e(request()->routeIs('about.maneessa') ? 'active' : ''); ?>"
                                    href="<?php echo e(route('about.maneessa')); ?>"
                                    <?php if(request()->routeIs('about.maneessa')): ?> aria-current="page" <?php endif; ?>
                                >
                                    Maneessa
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Contact -->
                    <li class="nav-item">
                        <a
                            class="nav-link <?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>"
                            href="<?php echo e(route('contact')); ?>"
                            <?php if(request()->routeIs('contact')): ?> aria-current="page" <?php endif; ?>
                        >
                            Contact
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

    <!-- ========================================
         PAGE-SPECIFIC CONTENT
         Each page inserts its content here
    ========================================= -->
    <main id="main-content">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- ========================================
         SHARED FOOTER
    ========================================= -->
    <footer class="site-footer">
        <div class="container">
            <div class="row align-items-center gy-2">

                <div class="col-md-6 text-center text-md-start">
                    &copy; <?php echo e(date('Y')); ?> MyPortfolio.
                    All rights reserved.
                </div>

                <div class="col-md-6 text-center text-md-end">
                    Built with
                    <span class="footer-accent">
                        Laravel &amp; Bootstrap
                    </span>
                </div>

            </div>
        </div>
    </footer>

    <!-- Bootstrap JavaScript Bundle -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    ></script>

    <!-- Allow individual pages to add their own JavaScript -->
    <?php echo $__env->yieldPushContent('scripts'); ?>

</body>
</html>
<?php /**PATH C:\Users\USER\OneDrive\Documents\GitHub\IntegratedFramework_Assignment1\resources\views/master.blade.php ENDPATH**/ ?>