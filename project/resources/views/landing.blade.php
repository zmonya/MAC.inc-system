<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mac Lagunilla.inc</title>

    <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

            <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
            <link rel="icon" href="{{ asset('cnc.ico') }}">
    
</head>

<body>

<header>
    <div class="navbar">

<a href="{{ url('/') }}" class="logo">
    <img
        src="{{ asset('images/mac_lagunilla_logo.jpg') }}"
        alt="Mac Lagunilla Vlog"
        class="site-logo"
    >
            Mac<span>Lagunilla</span>
        </a>

        <nav>
            <a href="#home">Home</a>
            <a href="#projects">Projects</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="header-actions">

            <button class="theme-toggle" id="themeToggle">
                <i class="fa-solid fa-moon"></i>
            </button>

            <a href="#" class="signin">
                Sign In
            </a>

            <a href="#contact" class="enquire">
                Enquire
            </a>

        </div>

    </div>
</header>


<section class="hero" id="home">

    <div class="hero-container">

        <div class="hero-content">

            <div class="hero-label">
                Cornesa Ceiling • Cabinet • Construction
            </div>

            <h1>
                Designing<br>
                <span>Tomorrow.</span>
            </h1>

            <p>
                Explore innovative architectural designs,
                engineering solutions, and construction projects
                built with precision, creativity, and purpose.
            </p>

            <div class="hero-buttons">

                <a href="#projects" class="hero-btn primary">
                    Explore Projects
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <a href="#contact" class="hero-btn secondary">
                    Start a Project
                </a>

            </div>

        </div>

    </div>

</section>


<!-- <section class="stats">

    <div class="stats-container">

        <div class="stat">
            <h3>50+</h3>
            <p>Projects</p>
        </div>

        <div class="stat">
            <h3>25+</h3>
            <p>Clients</p>
        </div>

        <div class="stat">
            <h3>10+</h3>
            <p>Engineers</p>
        </div>

        <div class="stat">
            <h3>8+</h3>
            <p>Years Experience</p>
        </div>

    </div>

</section> -->


<section class="projects" id="projects">

    <div class="section-header">

        <div class="section-label">
            Selected Work
        </div>

        <h2>Featured Projects</h2>

        <p>
            A collection of architectural, engineering,
            infrastructure, and construction projects.
        </p>

    </div>

    <div class="project-grid">

            <!-- section of posting  -->

        <article class="project-card">

            <div class="project-image"
                    style="background-image:url('{{ asset('images/cornesa.jpg') }}')">

                <div class="project-number">01</div>

                <!-- <i class="fa-solid fa-building"></i> -->

            </div>

            <div class="project-info">

                <h3>Ciling Cornesa</h3>

                <p>
                    Contemporary residential architecture
                    combining functionality, natural light,
                    and modern materials.
                </p>

                <div class="tags">
                    <span class="tag">Architecture</span>
                    <span class="tag">Residential</span>
                    <span class="tag">3D Design</span>
                </div>

                <a href="#" class="project-link">
                    View Project →
                </a>

            </div>

        </article>


        <article class="project-card">

            <div class="project-image"
                    style="background-image:url('{{ asset('images/project-building.jpg') }}')">

                <div class="project-number">02</div>

                <i class="fa-solid fa-city"></i>

            </div>

            <div class="project-info">

                <h3>Commercial Complex</h3>

                <p>
                    A large-scale commercial development
                    designed for efficiency, accessibility,
                    and modern urban living.
                </p>

                <div class="tags">
                    <span class="tag">Engineering</span>
                    <span class="tag">Commercial</span>
                    <span class="tag">Structural</span>
                </div>

                <a href="#" class="project-link">
                    View Project →
                </a>

            </div>

        </article>


        <article class="project-card">

            <div class="project-image"
                    style="background-image:url('{{ asset('images/project-bridge.jpg') }}')">

                <div class="project-number">03</div>

                <i class="fa-solid fa-road"></i>

            </div>

            <div class="project-info">

                <h3>Infrastructure Project</h3>

                <p>
                    Infrastructure planning and engineering
                    designed to support safe and efficient
                    transportation.
                </p>

                <div class="tags">
                    <span class="tag">Civil</span>
                    <span class="tag">Infrastructure</span>
                    <span class="tag">Planning</span>
                </div>

                <a href="#" class="project-link">
                    View Project →
                </a>

            </div>

        </article>


        <article class="project-card">

            <div class="project-image"
                    style="background-image:url('{{ asset('images/project-interior.jpg') }}')">

                <div class="project-number">04</div>

                <i class="fa-solid fa-ruler-combined"></i>

            </div>

            <div class="project-info">

                <h3>Interior Development</h3>

                <p>
                    Interior architecture focused on
                    functionality, aesthetics, and efficient
                    space planning.
                </p>

                <div class="tags">
                    <span class="tag">Interior</span>
                    <span class="tag">Design</span>
                    <span class="tag">Planning</span>
                </div>

                <a href="#" class="project-link">
                    View Project →
                </a>

            </div>

        </article>


        <article class="project-card">

            <div class="project-image"
                    style="background-image:url('{{ asset('images/project-industrial.jpg') }}')">

                <div class="project-number">05</div>

                <i class="fa-solid fa-industry"></i>

            </div>

            <div class="project-info">

                <h3>Industrial Facility</h3>

                <p>
                    Industrial facility planning focused on
                    operational efficiency, safety, and
                    structural reliability.
                </p>

                <div class="tags">
                    <span class="tag">Industrial</span>
                    <span class="tag">Structural</span>
                    <span class="tag">Engineering</span>
                </div>

                <a href="#" class="project-link">
                    View Project →
                </a>

            </div>

        </article>


        <article class="project-card">

            <div class="project-image"
                    style="background-image:url('{{ asset('images/project-planning.jpg') }}')">

                <div class="project-number">06</div>

                <i class="fa-solid fa-drafting-compass"></i>

            </div>

            <div class="project-info">

                <h3>Master Planning</h3>

                <p>
                    Comprehensive site planning and development
                    strategies for sustainable future growth.
                </p>

                <div class="tags">
                    <span class="tag">Planning</span>
                    <span class="tag">Architecture</span>
                    <span class="tag">Development</span>
                </div>

                <a href="#" class="project-link">
                    View Project →
                </a>

            </div>

        </article>

    </div>

</section>


<section class="about" id="about">

    <div class="about-container">

        <div class="about-image"></div>

        <div class="about-content">

            <div class="section-label">
                Who We Are
            </div>

            <h2>
                Built With<br>
                Precision.
            </h2>

            <p>
                We combine architecture, engineering, and
                technology to create spaces and infrastructure
                that are functional, sustainable, and built
                to last.
            </p>

            <div class="about-list">

                <div>
                    <i class="fa-solid fa-check"></i>
                    Architectural Design
                </div>

                <div>
                    <i class="fa-solid fa-check"></i>
                    Structural Engineering
                </div>

                <div>
                    <i class="fa-solid fa-check"></i>
                    Construction Planning
                </div>

                <div>
                    <i class="fa-solid fa-check"></i>
                    3D Visualization & Modeling
                </div>

            </div>

        </div>

    </div>

</section>


<section class="cta" id="contact">

    <h2>Have A Project In Mind?</h2>

    <p>
        Let's turn your concept into a real-world project.
    </p>

    <a href="mailto:your@email.com" class="enquire">
        <i class="fa-solid fa-envelope"></i>
        Enquire Now
    </a>

</section>


<footer>

    <div class="footer-container">

        <div class="footer-logo">
            Mac<span>Lagunilla</span>
        </div>

        <div class="socials">

            <a href="https://facebook.com/" target="_blank">
                <i class="fa-brands fa-facebook-f"></i>
            </a>

            <a href="https://youtube.com/" target="_blank">
                <i class="fa-brands fa-youtube"></i>
            </a>

            <a href="https://tiktok.com/" target="_blank">
                <i class="fa-brands fa-tiktok"></i>
            </a>

        </div>

    </div>

        <!-- Dev caleb Steven A Lagunilla -->
    <div class="copyright">
        © {{ date('Y') }} Developer Caleb Steven A Lagunilla.
        hare me please.
    </div>

</footer>



    <script src="{{ asset('js/landing.js') }}"></script>
</body>
</html>