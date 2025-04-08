# OMNEST Website Redesign Preview

This file contains HTML and CSS code for a modernized version of the OMNEST website homepage. To view this design:

1. Copy all the code between the triple backticks below
2. Paste it into a new file with a `.html` extension
3. Open the HTML file in your web browser

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMNEST - High-Performance Simulation for All Kinds of Networks</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        /* CSS Variables for theming */
        :root {
            /* Primary brand colors */
            --color-primary: #005CAC;
            --color-primary-dark: #004a8a;
            --color-primary-light: #3a7db5;
            
            /* Secondary accent colors */
            --color-accent: #E54426;
            --color-accent-dark: #c93a1f;
            --color-accent-light: #e9664d;
            
            /* Neutral colors */
            --color-text: #333333;
            --color-text-light: #666666;
            --color-background: #ffffff;
            --color-background-alt: #f5f7fa;
            --color-border: #e0e0e0;
            
            /* Typography */
            --font-primary: 'Inter', Arial, sans-serif;
            --font-heading: 'Montserrat', Arial, sans-serif;
            
            /* Spacing */
            --spacing-xs: 0.25rem;
            --spacing-sm: 0.5rem;
            --spacing-md: 1rem;
            --spacing-lg: 2rem;
            --spacing-xl: 3rem;
            
            /* Container widths */
            --container-width: 1200px;
            --container-padding: 1rem;
            
            /* Shadows */
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.1);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
            --shadow-lg: 0 10px 15px rgba(0,0,0,0.1);
            
            /* Border radius */
            --radius-sm: 4px;
            --radius-md: 8px;
            --radius-lg: 12px;
        }

        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-primary);
            font-size: 16px;
            line-height: 1.6;
            color: var(--color-text);
            background-color: var(--color-background);
        }

        img {
            max-width: 100%;
            height: auto;
        }

        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            font-family: var(--font-heading);
            font-weight: 600;
            line-height: 1.3;
            color: var(--color-primary);
            margin-bottom: var(--spacing-md);
        }

        h1 {
            font-size: 2.5rem;
        }

        h2 {
            font-size: 2rem;
        }

        h3 {
            font-size: 1.75rem;
        }

        p {
            margin-bottom: var(--spacing-md);
        }

        a {
            color: var(--color-primary);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: var(--color-accent);
        }

        /* Layout */
        .container {
            width: 100%;
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 var(--container-padding);
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -1rem;
        }

        .col {
            flex: 1;
            padding: 0 1rem;
        }

        /* Header */
        .header {
            background-color: white;
            box-shadow: var(--shadow-sm);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: var(--spacing-md) 0;
        }

        .logo {
            height: 40px;
        }

        /* Navigation */
        .nav {
            display: flex;
            align-items: center;
        }

        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-item {
            margin-left: var(--spacing-lg);
        }

        .nav-link {
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.9rem;
        }

        .nav-link.active {
            color: var(--color-accent);
        }

        .nav-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1.5rem;
        }

        /* Hero section */
        .hero {
            background-color: var(--color-primary);
            background-image: linear-gradient(135deg, var(--color-primary), var(--color-primary-dark));
            color: white;
            padding: var(--spacing-xl) 0;
            margin-bottom: var(--spacing-xl);
        }

        .hero-content {
            max-width: 600px;
        }

        .hero h1 {
            color: white;
            font-size: 3rem;
            margin-bottom: var(--spacing-lg);
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: var(--spacing-lg);
        }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            text-align: center;
            border-radius: var(--radius-sm);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-primary {
            background-color: var(--color-accent);
            color: white;
            border: 2px solid var(--color-accent);
        }

        .btn-primary:hover {
            background-color: var(--color-accent-dark);
            border-color: var(--color-accent-dark);
        }

        .btn-secondary {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .btn-group {
            display: flex;
            gap: var(--spacing-md);
        }

        /* Cards */
        .card {
            background-color: white;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-md);
            padding: var(--spacing-lg);
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: var(--spacing-md);
        }

        .card-link {
            font-weight: 500;
            display: inline-flex;
            align-items: center;
        }

        .card-link::after {
            content: "→";
            margin-left: var(--spacing-xs);
            transition: transform 0.3s ease;
        }

        .card-link:hover::after {
            transform: translateX(5px);
        }

        /* References section */
        .references {
            background-color: var(--color-background-alt);
            padding: var(--spacing-xl) 0;
            margin: var(--spacing-xl) 0;
        }

        .references-title {
            text-align: center;
            margin-bottom: var(--spacing-lg);
        }

        .references-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: var(--spacing-lg);
            align-items: center;
            justify-items: center;
        }

        .reference-logo {
            max-width: 120px;
            filter: grayscale(100%);
            opacity: 0.7;
            transition: filter 0.3s ease, opacity 0.3s ease;
        }

        .reference-logo:hover {
            filter: grayscale(0%);
            opacity: 1;
        }

        /* Footer */
        .footer {
            background-color: #333;
            color: #fff;
            padding: var(--spacing-xl) 0;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: var(--spacing-xl);
        }

        .footer-column h3 {
            color: white;
            font-size: 1.2rem;
            margin-bottom: var(--spacing-md);
            padding-bottom: var(--spacing-sm);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-links {
            list-style: none;
        }

        .footer-link {
            margin-bottom: var(--spacing-sm);
        }

        .footer-link a {
            color: #ccc;
        }

        .footer-link a:hover {
            color: white;
        }

        .footer-bottom {
            text-align: center;
            padding-top: var(--spacing-lg);
            margin-top: var(--spacing-lg);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #999;
        }

        /* Responsive styles */
        @media (max-width: 992px) {
            .container {
                max-width: 100%;
            }
        }

        @media (max-width: 768px) {
            .row {
                flex-direction: column;
            }
            
            .col {
                width: 100%;
                margin-bottom: var(--spacing-lg);
            }
            
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: white;
                flex-direction: column;
                box-shadow: var(--shadow-md);
            }
            
            .nav-menu.active {
                display: flex;
            }
            
            .nav-item {
                margin: 0;
                width: 100%;
                text-align: center;
            }
            
            .nav-link {
                display: block;
                padding: var(--spacing-md);
                border-bottom: 1px solid var(--color-border);
            }
            
            .nav-toggle {
                display: block;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .btn-group {
                flex-direction: column;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .card {
                padding: var(--spacing-md);
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-inner">
                <a href="/" class="logo-link">
                    <img src="common/images/logo.png" alt="OMNEST" class="logo">
                </a>
                <nav class="nav">
                    <button class="nav-toggle" id="navToggle">☰</button>
                    <ul class="nav-menu" id="navMenu">
                        <li class="nav-item">
                            <a href="/omnest-is" class="nav-link">Product</a>
                        </li>
                        <li class="nav-item">
                            <a href="/try-omnest" class="nav-link">Try OMNEST</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link">How to Buy</a>
                        </li>
                        <li class="nav-item">
                            <a href="/services" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="/company" class="nav-link">About Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>High-Performance Simulation for All Kinds of Networks</h1>
                <p>OMNEST simulation software has been chosen by R&D staff, researchers and engineers worldwide to investigate scenarios and design alternatives in various wired/wireless networks, interconnection networks, queueing-based performance models and other systems.</p>
                <div class="btn-group">
                    <a href="/omnest-is" class="btn btn-secondary">Learn More</a>
                    <a href="/try-omnest" class="btn btn-primary">Download Evaluation</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container">
        <!-- Features Section -->
        <section class="row">
            <div class="col">
                <div class="card">
                    <h2 class="card-title">Simulation Models</h2>
                    <p>Models exist for Internet protocols, wireless networks, switched LANs, TSN, peer-to-peer networks, media streaming, mobile ad-hoc networks, mesh networks, wireless sensor networks, vehicular networks, NoCs, optical networks, HPC clusters, cloud computing, SANs, and more...</p>
                    <a href="/simulation-models" class="card-link">Explore the models</a>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h2 class="card-title">Add Simulation To Your Software Products!</h2>
                    <p>You can embed the simulation kernel or whole simulations into your software products.</p>
                    <a href="/embedding" class="card-link">Learn more</a>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="row" style="margin-top: var(--spacing-xl);">
            <div class="col">
                <div class="card">
                    <h2 class="card-title">Free Orientation/Consulting Session</h2>
                    <p>Simulation is an art, and one can save a substantial amount of time by choosing the right tools and approach (model library, detail level, etc.) from the start. A license purchase entitles you to a one-hour video discussion session with our developers, where you can receive expert advice to reach your project goals sooner.</p>
                    <a href="/services#orientation" class="card-link">Learn more</a>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h2 class="card-title">Visualize your Simulation in 3D!</h2>
                    <img src="images/misc/3d_sats.png" alt="3D Visualization" style="float: left; margin-right: 10px; width: 150px;">
                    <p>The OMNEST runtime user interface allows you to build 3D animations for your simulation model employing the widely used OpenSceneGraph library.</p>
                    <div style="clear:both"></div>
                    <a href="/whatsnew-50" class="card-link">Learn more</a>
                </div>
            </div>
        </section>

        <!-- Case Studies Section -->
        <section class="row" style="margin-top: var(--spacing-xl);">
            <div class="col">
                <div class="card">
                    <h2 class="card-title">Case Studies</h2>
                    <ul style="padding-left: 20px;">
                        <li><a href="casestudy-ibmzurich">Simulation of Next-Generation Supercomputing Systems at IBM Research</a></li>
                        <li><a href="casestudy-adhoc">Detailed Cross-Layer Simulator for Content Transmission over Wireless Ad-Hoc Networks</a></li>
                        <li><a href="casestudy-photonic">Architectural Exploration of Chip-Scale Photonic Interconnection Networks</a></li>
                        <li><a href="case-studies">More case studies</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h2 class="card-title">News</h2>
                    <div class="news-item">
                        <h3 style="font-size: 1.2rem;">OMNEST 6.1.0 Released</h3>
                        <p style="color: #666; font-size: 0.9rem;">October 28, 2024</p>
                        <p>We are happy to announce the release of OMNEST 6.1.0. This version brings several improvements including enhanced visualization capabilities, performance optimizations, and new simulation features.</p>
                    </div>
                    <div class="news-item">
                        <h3 style="font-size: 1.2rem;">OMNEST 6.0.3 Released</h3>
                        <p style="color: #666; font-size: 0.9rem;">March 18, 2024</p>
                        <p>OMNEST 6.0.3 maintenance release is now available with bug fixes and minor improvements.</p>
                    </div>
                    <a href="/news" class="card-link">All news</a>
                </div>
            </div>
        </section>
    </main>

    <!-- References Section -->
    <section class="references">
        <div class="container">
            <h2 class="references-title">Trusted by Industry Leaders</h2>
            <div class="references-grid">
                <img src="refs/ibm.png" alt="IBM" class="reference-logo">
                <img src="refs/thales.gif" alt="Thales" class="reference-logo">
                <img src="refs/alcatel-lucent.gif" alt="Alcatel-Lucent" class="reference-logo">
                <img src="refs/cisco.gif" alt="Cisco" class="reference-logo">
                <img src="refs/eads.png" alt="EADS" class="reference-logo">
                <img src="refs/fraunhofer.jpg" alt="Fraunhofer" class="reference-logo">
            </div>
            <div style="text-align: center; margin-top: var(--spacing-lg);">
                <a href="/references" class="card-link">More references</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>Product</h3>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="/omnest-is">What is OMNEST?</a></li>
                        <li class="footer-link"><a href="/tour-models">Product Tour</a></li>
                        <li class="footer-link"><a href="/overview">Overview</a></li>
                        <li class="footer-link"><a href="/application-areas">Application Areas</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Learn More</h3>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="/simulation-models">Simulation Models</a></li>
                        <li class="footer-link"><a href="/ide">Simulation IDE</a></li>
                        <li class="footer-link"><a href="/demo-videos">Demo Videos</a></li>
                        <li class="footer-link"><a href="/documentation">Documentation</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>OMNEST In the World</h3>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="/references">Customers</a></li>
                        <li class="footer-link"><a href="/publications">Publications</a></li>
                        <li class="footer-link"><a href="/case-studies">Case Studies</a></li>
                        <li class="footer-link"><a href="/network-simulation-book">Book Recommendation</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Purchase</h3>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="/contact">Contact Us / Request Quotation</a></li>
                        <li class="footer-link"><a href="/licensingfaq">Do I Need a License?</a></li>
                        <li class="footer-link"><a href="/licensing">Licensing Options</a></li>
                        <li class="footer-link"><a href="/support">Technical Support</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>Copyright (c), Cogitative Software FZE. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Simple JavaScript for mobile menu toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navToggle = document.getElementById('navToggle');
            const navMenu = document.getElementById('navMenu');
            
            navToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
            });
        });
    </script>
</body>
</html>
```

## Key Design Features

1. **Responsive Layout**: The design adapts to different screen sizes using media queries
2. **Modern Typography**: Uses Google Fonts (Inter and Montserrat) for a clean, professional look
3. **CSS Variables**: Makes theming and maintenance easier
4. **Card-Based Design**: Content is organized in clean, modern cards with subtle hover effects
5. **Mobile-First Navigation**: Includes a mobile menu that works on smaller screens
6. **Visual Hierarchy**: Improved spacing, typography, and color contrast for better readability
7. **Modern Color Scheme**: Maintains brand colors while adding depth and contrast
8. **Subtle Animations**: Hover effects and transitions for a more engaging experience

## Next Steps

After reviewing this design preview, we can:

1. Refine the visual design based on your feedback
2. Create a comprehensive CSS framework for the entire site
3. Update all templates to use the new design system
4. Implement responsive behavior for all pages
5. Test across different devices and browsers