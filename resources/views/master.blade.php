
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="A personal profile website showcasing background, skills, interests and contact information.">

    <title>@yield('title', 'Personal Profile') | MyPortfolio</title>

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
            --bg-dark: #0b1020;
            --bg-navbar: #0e1528;
            --bg-card: #141c31;
            --bg-footer: #080c18;

            --accent: #8b5cf6;
            --accent-hover: #7c3aed;
            --accent-light: #c4b5fd;

            --text-main: #f8fafc;
            --text-muted: #a6b0c3;

            --border-color: rgba(255, 255, 255, 0.10);
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
            outline: 3px solid var(--accent-light);
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
            color: var(--text-main) !important;

            font-size: 1.4rem;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .brand-accent {
            color: var(--accent-light);
        }

        .navbar .nav-link {
            position: relative;

            margin-left: 10px;
            padding: 8px 12px;

            color: var(--text-muted);
            font-size: 0.95rem;
            font-weight: 600;

            transition: color var(--transition);
        }

        .navbar .nav-link:hover,
        .navbar .nav-link:focus-visible,
        .navbar .nav-link.active {
            color: var(--accent-light);
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

            background-color: var(--accent);
        }

        /* Mobile menu toggle */
        .navbar-toggler {
            border: 1px solid var(--accent);
            padding: 7px 10px;
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.2rem rgba(139, 92, 246, 0.3);
        }

        .navbar-toggler-icon {
            filter: invert(1);
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

            color: var(--accent-light);
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
            border-color: rgba(167, 139, 250, 0.65);
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
            background-color: var(--accent);

            border: 1px solid var(--accent);
            border-radius: 8px;

            font-weight: 600;

            transition:
                background-color var(--transition),
                border-color var(--transition);
        }

        .btn-accent:hover {
            color: #ffffff;
            background-color: var(--accent-hover);
            border-color: var(--accent-hover);
        }

        .btn-outline-accent {
            display: inline-block;

            padding: 10px 22px;

            color: var(--accent-light);
            background-color: transparent;

            border: 1px solid var(--accent);
            border-radius: 8px;

            font-weight: 600;

            transition:
                background-color var(--transition),
                color var(--transition);
        }

        .btn-outline-accent:hover {
            color: #ffffff;
            background-color: var(--accent);
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
            border: 1px solid #38445d;
            border-radius: 8px;
        }

        .form-control::placeholder {
            color: #a6b0c3;
            opacity: 1;
        }

        .form-control:focus,
        .form-select:focus {
            color: var(--text-main);
            background-color: var(--bg-card);

            border-color: var(--accent);
            box-shadow: 0 0 0 0.2rem rgba(139, 92, 246, 0.2);
        }

        /* Keep browser autofill readable in dark mode */
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

            color: var(--text-muted);
            background-color: var(--bg-footer);

            border-top: 1px solid var(--border-color);
            font-size: 0.9rem;
        }

        .footer-accent {
            color: var(--accent-light);
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
    @stack('styles')
</head>

<body>

    <!-- ========================================
         SHARED NAVIGATION BAR
    ========================================= -->
    <nav class="navbar navbar-expand-lg main-navbar">
        <div class="container">

            <!-- Website Brand -->
            <a class="navbar-brand" href="{{ route('home') }}">
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
                            class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}"
                            @if(request()->routeIs('home')) aria-current="page" @endif
                        >
                            Home
                        </a>
                    </li>

                    <!-- About Me -->
                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}"
                            @if(request()->routeIs('about')) aria-current="page" @endif
                        >
                            About Me
                        </a>
                    </li>

                    <!-- Contact -->
                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}"
                            @if(request()->routeIs('contact')) aria-current="page" @endif
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
        @yield('content')
    </main>

    <!-- ========================================
         SHARED FOOTER
    ========================================= -->
    <footer class="site-footer">
        <div class="container">
            <div class="row align-items-center gy-2">

                <div class="col-md-6 text-center text-md-start">
                    &copy; {{ date('Y') }} MyPortfolio.
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
    @stack('scripts')

</body>
</html>
