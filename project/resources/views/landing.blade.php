<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARCENGINE | Architecture & Engineering</title>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        :root {
            --red: #d71920;
            --red-dark: #a80f15;
            --bg: #ffffff;
            --bg-secondary: #f3f3f3;
            --card: #ffffff;
            --text: #111111;
            --text-light: #666666;
            --border: #dddddd;
            --nav: rgba(255,255,255,.94);
            --shadow: 0 15px 40px rgba(0,0,0,.08);
        }

        body.dark {
            --bg: #0b0b0b;
            --bg-secondary: #151515;
            --card: #181818;
            --text: #ffffff;
            --text-light: #aaaaaa;
            --border: #292929;
            --nav: rgba(11,11,11,.94);
            --shadow: 0 15px 40px rgba(0,0,0,.45);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: var(--bg);
            color: var(--text);
            transition: .3s;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* HEADER */

        header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: var(--nav);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
        }

        .navbar {
            max-width: 1250px;
            height: 78px;
            margin: auto;
            padding: 0 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 21px;
            font-weight: 900;
            letter-spacing: 1px;
        }

        .logo-icon {
            width: 43px;
            height: 43px;
            background: var(--red);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            transform: rotate(45deg);
        }

        .logo-icon i {
            transform: rotate(-45deg);
        }

        .logo span {
            color: var(--red);
        }

        nav {
            display: flex;
            gap: 32px;
        }

        nav a {
            color: var(--text-light);
            font-size: 14px;
            font-weight: 700;
            transition: .25s;
        }

        nav a:hover {
            color: var(--red);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .signin {
            padding: 10px 16px;
            font-size: 14px;
            font-weight: 700;
        }

        .enquire {
            padding: 11px 19px;
            background: var(--red);
            color: white;
            font-size: 14px;
            font-weight: 800;
            border-radius: 3px;
            transition: .25s;
        }

        .enquire:hover {
            background: var(--red-dark);
            transform: translateY(-2px);
        }

        .theme-toggle {
            width: 42px;
            height: 42px;
            border: 1px solid var(--border);
            background: var(--card);
            color: var(--text);
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: .3s;
        }

        .theme-toggle:hover {
            color: var(--red);
            border-color: var(--red);
        }

        /* HERO */

        .hero {
            min-height: 650px;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            background:
                linear-gradient(rgba(0,0,0,.72), rgba(0,0,0,.72)),
                url("{{ asset('images/architecture.jpg') }}") center/cover;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            opacity: .16;
            background-image:
                linear-gradient(#fff 1px, transparent 1px),
                linear-gradient(90deg, #fff 1px, transparent 1px);
            background-size: 45px 45px;
        }

        .hero-container {
            position: relative;
            z-index: 2;
            width: 1250px;
            max-width: 100%;
            margin: auto;
            padding: 80px 25px;
        }

        .hero-content {
            max-width: 720px;
        }

        .hero-label {
            color: white;
            font-size: 13px;
            font-weight: 900;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .hero-label::before {
            content: "";
            display: inline-block;
            width: 35px;
            height: 3px;
            margin-right: 10px;
            vertical-align: middle;
            background: var(--red);
        }

        .hero h1 {
            margin-top: 20px;
            font-size: clamp(42px, 6vw, 78px);
            line-height: .98;
            color: white;
            text-transform: uppercase;
        }

        .hero h1 span {
            color: var(--red);
        }

        .hero p {
            max-width: 600px;
            margin-top: 25px;
            color: #ddd;
            font-size: 17px;
            line-height: 1.7;
        }

        .hero-buttons {
            margin-top: 32px;
            display: flex;
            gap: 12px;
        }

        .hero-btn {
            padding: 14px 24px;
            font-size: 14px;
            font-weight: 900;
            border-radius: 2px;
            transition: .25s;
        }

        .hero-btn.primary {
            background: var(--red);
            color: white;
        }

        .hero-btn.primary:hover {
            background: var(--red-dark);
        }

        .hero-btn.secondary {
            border: 1px solid white;
            color: white;
        }

        .hero-btn.secondary:hover {
            background: white;
            color: black;
        }

        /* STATS */

        .stats {
            background: var(--red);
            color: white;
        }

        .stats-container {
            max-width: 1100px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }

        .stat {
            padding: 28px;
            text-align: center;
            border-right: 1px solid rgba(255,255,255,.25);
        }

        .stat:last-child {
            border: none;
        }

        .stat h3 {
            font-size: 30px;
        }

        .stat p {
            margin-top: 5px;
            font-size: 12px;
            text-transform: uppercase;
            opacity: .85;
        }

        /* PROJECTS */

        .projects {
            padding: 90px 25px;
            background: var(--bg-secondary);
        }

        .section-header {
            max-width: 1250px;
            margin: auto;
        }

        .section-label {
            color: var(--red);
            font-size: 12px;
            font-weight: 900;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .section-header h2 {
            margin-top: 10px;
            font-size: 42px;
            text-transform: uppercase;
        }

        .section-header p {
            margin-top: 12px;
            max-width: 650px;
            color: var(--text-light);
            line-height: 1.6;
        }

        .project-grid {
            max-width: 1250px;
            margin: 45px auto 0;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .project-card {
            background: var(--card);
            border: 1px solid var(--border);
            overflow: hidden;
            transition: .3s;
        }

        .project-card:hover {
            transform: translateY(-7px);
            box-shadow: var(--shadow);
        }

        .project-image {
            height: 230px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            background:
                linear-gradient(rgba(0,0,0,.35), rgba(0,0,0,.35)),
                url("{{ asset('images/project-1.jpg') }}") center/cover;
            color: white;
        }

        .project-image i {
            font-size: 48px;
        }

        .project-number {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--red);
            padding: 8px 11px;
            font-size: 12px;
            font-weight: 900;
        }

        .project-info {
            padding: 24px;
        }

        .project-info h3 {
            font-size: 21px;
            text-transform: uppercase;
        }

        .project-info p {
            margin-top: 10px;
            color: var(--text-light);
            font-size: 14px;
            line-height: 1.6;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
            margin-top: 17px;
        }

        .tag {
            padding: 6px 9px;
            background: var(--bg-secondary);
            border: 1px solid var(--border);
            color: var(--text-light);
            font-size: 11px;
            font-weight: 700;
        }

        .project-link {
            display: inline-block;
            margin-top: 20px;
            color: var(--red);
            font-size: 13px;
            font-weight: 900;
        }

        /* ABOUT */

        .about {
            padding: 90px 25px;
            background: var(--bg);
        }

        .about-container {
            max-width: 1250px;
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;
            align-items: center;
        }

        .about-image {
            min-height: 400px;
            background:
                linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)),
                url("{{ asset('images/engineering.jpg') }}") center/cover;
            position: relative;
        }

        .about-image::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 15px;
            left: 15px;
            border: 3px solid var(--red);
            z-index: -1;
        }

        .about-content h2 {
            margin-top: 10px;
            font-size: 42px;
            text-transform: uppercase;
        }

        .about-content p {
            margin-top: 20px;
            color: var(--text-light);
            line-height: 1.8;
        }

        .about-list {
            margin-top: 25px;
            display: grid;
            gap: 14px;
        }

        .about-list div {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
        }

        .about-list i {
            color: var(--red);
        }

        /* CTA */

        .cta {
            padding: 75px 25px;
            background: linear-gradient(110deg, #111, #222);
            color: white;
            text-align: center;
        }

        .cta h2 {
            font-size: 40px;
            text-transform: uppercase;
        }

        .cta p {
            margin: 12px auto 25px;
            color: #aaa;
        }

        /* FOOTER */

        footer {
            padding: 45px 25px;
            background: #080808;
            color: white;
        }

        .footer-container {
            max-width: 1250px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .footer-logo {
            font-size: 20px;
            font-weight: 900;
        }

        .footer-logo span {
            color: var(--red);
        }

        .socials {
            display: flex;
            gap: 10px;
        }

        .socials a {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #333;
            color: white;
            transition: .25s;
        }

        .socials a:hover {
            background: var(--red);
            border-color: var(--red);
            transform: translateY(-3px);
        }

        .copyright {
            max-width: 1250px;
            margin: 25px auto 0;
            padding-top: 20px;
            border-top: 1px solid #222;
            color: #777;
            font-size: 12px;
        }

        /* RESPONSIVE */

        @media(max-width: 900px) {
            nav {
                display: none;
            }

            .project-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .about-container {
                grid-template-columns: 1fr;
            }

            .stats-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media(max-width: 600px) {
            .signin {
                display: none;
            }

            .hero-container {
                padding: 65px 20px;
            }

            .hero h1 {
                font-size: 45px;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .hero-btn {
                text-align: center;
            }

            .project-grid {
                grid-template-columns: 1fr;
            }

            .stats-container {
                grid-template-columns: 1fr 1fr;
            }

            .section-header h2,
            .about-content h2,
            .cta h2 {
                font-size: 32px;
            }

            .footer-container {
                flex-direction: column;
                gap: 25px;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="navbar">

        <a href="{{ url('/') }}" class="logo">
            <div class="logo-icon">
                <i class="fa-solid fa-compass-drafting"></i>
            </div>
            ARC<span>ENGINE</span>
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

            <a href="{{ route('login') }}" class="signin">
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
                Architecture • Engineering • Construction
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


<section class="stats">

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

</section>


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

        <article class="project-card">

            <div class="project-image"
                 style="background-image:url('{{ asset('images/project-house.jpg') }}')">

                <div class="project-number">01</div>

                <i class="fa-solid fa-building"></i>

            </div>

            <div class="project-info">

                <h3>Modern Residence</h3>

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
            ARC<span>ENGINE</span>
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

    <div class="copyright">
        © {{ date('Y') }} ARCENGINE — Architecture & Engineering.
        All Rights Reserved.
    </div>

</footer>


<script>

    const themeToggle =
        document.getElementById("themeToggle");

    const icon =
        themeToggle.querySelector("i");

    const savedTheme =
        localStorage.getItem("theme");

    if (savedTheme === "dark") {

        document.body.classList.add("dark");

        icon.classList.remove("fa-moon");
        icon.classList.add("fa-sun");

    }

    themeToggle.addEventListener("click", () => {

        document.body.classList.toggle("dark");

        const dark =
            document.body.classList.contains("dark");

        if (dark) {

            icon.classList.remove("fa-moon");
            icon.classList.add("fa-sun");

            localStorage.setItem("theme", "dark");

        } else {

            icon.classList.remove("fa-sun");
            icon.classList.add("fa-moon");

            localStorage.setItem("theme", "light");

        }

    });

</script>

</body>
</html>