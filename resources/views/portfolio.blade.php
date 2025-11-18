<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* ---------- DARK MODE ---------- */
        body {
            background-color: #0d0d0d;
            color: white;
            font-family: Arial, sans-serif;
            transition: all 0.3s ease;
        }
        .profile-img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #00bfff;
            transition: all 0.3s ease;
        }
        .section-title {
            border-left: 4px solid #00bfff;
            padding-left: 10px;
            margin-bottom: 20px;
            font-size: 1.6rem;
            color: #00bfff;
        }
        .project-card {
            background: #1a1a1a;
            border: 2px solid #00bfff33;
            border-radius: 10px;
            padding: 20px;
            transition: all 0.3s ease;
        }
        .project-card:hover {
            border-color: #00bfff;
            transform: translateY(-4px);
        }
        .skills .progress {
            height: 25px;
            border-radius: 10px;
            margin-bottom: 15px;
            background-color: #333;
            position: relative;
        }
        .skills .progress-bar {
            background-color: #00bfff;
            width: 0%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            transition: width 2s ease;
            position: relative;
        }
        .skills .progress-bar span {
            position: absolute;
            color: white;
            font-weight: bold;
            left: 50%;
            transform: translateX(-50%);
        }

        .contact ul {
            font-size: 1.2rem;
        }
        .contact li a {
            color: #00bfff;
        }

        /* ---------- LIGHT MODE ---------- */
        body.light-mode {
            background-color: #f5f5f5;
            color: #222;
        }
        body.light-mode .section-title {
            color: #007bff;
            border-left-color: #007bff;
        }
        body.light-mode .project-card {
            background: #ffffff;
            border-color: #007bff33;
            color: #222;
        }
        body.light-mode .skills .progress-bar {
            background-color: #007bff;
            color: #222;
        }
        body.light-mode .skills .progress-bar span {
            color: black;
        }
        body.light-mode .contact li a {
            color: #007bff;
        }
        body.light-mode .btn-outline-info {
            color: #007bff;
            border-color: #007bff;
        }
        body.light-mode .btn-outline-info:hover {
            background-color: #007bff;
            color: white;
        }

        /* ---------- THEME TOGGLE BUTTON ---------- */
        #theme-toggle {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            font-size: 1.5rem;
            background: none;
            border: none;
            cursor: pointer;
            color: #00bfff;
            transition: color 0.3s ease;
        }
        body.light-mode #theme-toggle {
            color: #007bff;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <!-- THEME TOGGLE BUTTON -->
    <button id="theme-toggle">🌙</button>

    <!-- PERSONAL INFO -->
    <div class="text-center mb-5">
        <img src="https://cdn.rafled.com/anime-icons/images/3155b42a125f523c187b7efee81d02926398fd07182cb99a3e7122010b6cccdf.jpg" alt="My Picture" class="profile-img mb-3">
        <h1 class="fw-bold">Raprap</h1>
        <p class="text-info">Web Designer | Developer</p>
        <a href="#about" class="btn btn-outline-info btn-lg">Learn More</a>
    </div>

    <!-- ABOUT -->
    <div id="about" class="mb-5">
        <h2 class="section-title">About Me</h2>
        <p class="lead">
            3rd year student who loves to learn and explore the world of coding even further
        </p>
        <div class="row">
            <div class="col-md-6">
                <ul class="list-unstyled">
                    <li><strong>Name:</strong> Raprap</li>
                    <li><strong>Address:</strong> Pampanga</li>
                    <li><strong>Age:</strong> 23 years</li>
                    <li><strong>Phone:</strong> 0999-505-7903</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-unstyled">
                    <li><strong>Email:</strong> raphaelmalasarte@gmail.com</li>
                </ul>
            </div>
        </div>
        <a href="#" class="btn btn-outline-info">Download CV</a>
        <a href="#contact" class="btn btn-outline-info ms-3">Send a Message</a>
    </div>

    <!-- SKILLS -->
    <div class="mb-5">
        <h2 class="section-title">My Skills</h2>
        <div class="skills">
            <p>HTML</p>
            <div class="progress" data-percent="95%">
                <div class="progress-bar"><span>0%</span></div>
            </div>
            <p>CSS</p>
            <div class="progress" data-percent="90%">
                <div class="progress-bar"><span>0%</span></div>
            </div>
            <p>JavaScript</p>
            <div class="progress" data-percent="70%">
                <div class="progress-bar"><span>0%</span></div>
            </div>
            <p>WordPress</p>
            <div class="progress" data-percent="80%">
                <div class="progress-bar"><span>0%</span></div>
            </div>
        </div>
    </div>

    <!-- PROJECTS -->
    <div class="mb-5">
        <h2 class="section-title">Projects</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="project-card">
                    <h4>Project One</h4>
                    <p>A simple description of your first project.</p>
                    <a href="#" class="btn btn-outline-info btn-sm">View Project</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-card">
                    <h4>Project Two</h4>
                    <p>A simple description of your second project.</p>
                    <a href="#" class="btn btn-outline-info btn-sm">View Project</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-card">
                    <h4>Project Three</h4>
                    <p>A simple description of your third project.</p>
                    <a href="#" class="btn btn-outline-info btn-sm">View Project</a>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT -->
    <div id="contact" class="contact mb-5">
        <h2 class="section-title">Contact</h2>
        <ul class="list-unstyled">
            <li><strong>Email:</strong> raphaelmalasarte@gmail.com</li>
            <li><strong>Phone:</strong> 0999-505-7903</li>
            <li><strong>Facebook:</strong> <a href="#" class="text-info">Your FB Link</a></li>
            <li><strong>GitHub:</strong> <a href="#" class="text-info">github.com/username</a></li>
        </ul>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // ---------- DARK/LIGHT MODE ----------
    const toggleButton = document.getElementById('theme-toggle');
    const body = document.body;

    if(localStorage.getItem('theme') === 'light') {
        body.classList.add('light-mode');
        toggleButton.textContent = '🌞';
    }

    toggleButton.addEventListener('click', () => {
        body.classList.toggle('light-mode');
        if(body.classList.contains('light-mode')) {
            localStorage.setItem('theme', 'light');
            toggleButton.textContent = '🌞';
        } else {
            localStorage.setItem('theme', 'dark');
            toggleButton.textContent = '🌙';
        }
    });

    // ---------- SKILLS ANIMATION ----------
    document.querySelectorAll('.progress').forEach(progress => {
        const bar = progress.querySelector('.progress-bar');
        const span = bar.querySelector('span');
        const target = parseInt(progress.getAttribute('data-percent'));
        let current = 0;

        const interval = setInterval(() => {
            if(current >= target) {
                clearInterval(interval);
                span.textContent = target + '%';
            } else {
                current++;
                bar.style.width = current + '%';
                span.textContent = current + '%';
            }
        }, 20); // speed of counting
    });
</script>

</body>
</html>
