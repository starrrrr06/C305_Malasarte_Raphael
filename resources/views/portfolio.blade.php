<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>My Portfolio</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

<style>
/* GLOBAL */
body {
  background-color: #0d0d0d;
  color: #ffffff;
  font-family: Arial, sans-serif;
  transition: all 0.3s ease;
  padding-top: 70px; /* space for navbar */
}

/* COLOR VARIABLES */
:root {
  --purple: #8C00FF;
  --gray-light: #b5b5b5;
  --gray-dark: #222;
}

/* NAVBAR */
#main-navbar {
  background-color: #111;
  border-bottom: 1px solid #444;
  transition: background-color 0.3s, border-color 0.3s;
  z-index: 10000;
}
#main-navbar .navbar-brand {
  color: var(--purple);
  font-weight: bold;
}
#main-navbar .navbar-nav .nav-link {
  color: #fff;
  margin-left: 20px;
}
#main-navbar .navbar-nav .nav-link:hover {
  color: var(--purple);
}

/* LIGHT MODE NAVBAR */
body.light-mode #main-navbar {
  background-color: #fff;
  border-bottom-color: #ccc;
}
body.light-mode #main-navbar .navbar-brand {
  color: var(--purple);
}
body.light-mode #main-navbar .navbar-nav .nav-link {
  color: #222;
}
body.light-mode #main-navbar .navbar-nav .nav-link:hover {
  color: var(--purple);
}

/* HERO SECTION */
#hero {
  padding: 80px 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}

#hero h1 {
  font-size: 3rem;
  font-weight: 900;
}

#hero p {
  color: var(--gray-light);
  max-width: 520px;
}

.hero-btn {
  border: 1px solid var(--purple);
  padding: 10px 25px;
  display: inline-block;
  margin-top: 20px;
  text-decoration: none;
  border-radius: 25px;
  color: var(--purple);
  transition: 0.3s;
}

.hero-btn:hover {
  background: var(--purple);
  color: #fff;
}

.hero-img {
  width: 320px;
  border-radius: 6px;
  border: 2px solid #fff;
  filter: grayscale(100%);
  transition: all 0.3s ease;
}

body:not(.light-mode) .hero-img:hover {
  box-shadow: 0 0 20px var(--purple), 0 0 40px var(--purple);
  transform: scale(1.05);
}

/* SECTION TITLES */
.section-title {
  border-left: 4px solid var(--purple);
  padding-left: 10px;
  margin-bottom: 25px;
  font-size: 1.6rem;
  color: var(--purple);
}

/* ABOUT SECTION */
#about p.lead {
  color: var(--gray-light);
}

/* SKILLS */
.skills .progress {
  height: 25px;
  border-radius: 10px;
  margin-bottom: 15px;
  background-color: #333;
}
.skills .progress-bar {
  background-color: var(--purple);
  transition: width 1.5s ease;
}
.skills .progress-bar span {
  color: #fff;
}

/* PROJECTS */
.project-card {
  background: #111;
  border: 1px solid #444;
  padding: 20px;
  border-radius: 10px;
  transition: 0.3s;
}
.project-card:hover {
  border-color: var(--purple);
  transform: translateY(-4px);
}

/* CONTACT */
.contact li {
  font-size: 1.1rem;
  margin-bottom: 5px;
}
.contact a {
  color: var(--purple);
  text-decoration: none;
}
.contact a:hover {
  opacity: 0.7;
}

/* LIGHT MODE STYLES */
body.light-mode {
  background-color: #f5f5f5;
  color: #222;
}
body.light-mode .section-title {
  color: var(--purple);
  border-left-color: var(--purple);
}
body.light-mode #hero p {
  color: #444;
}
body.light-mode .project-card {
  background: #fff;
  border-color: #ccc;
}
body.light-mode .skills .progress {
  background-color: #ddd;
}
body.light-mode .skills .progress-bar {
  background-color: var(--purple);
}
body.light-mode .hero-btn {
  border-color: var(--purple);
  color: var(--purple);
}
body.light-mode .hero-btn:hover {
  background: var(--purple);
  color: #fff;
}
body.light-mode .hero-img {
  border-color: #222;
}

/* THEME TOGGLE BUTTON IN NAVBAR */
#theme-toggle {
  font-size: 1.5rem;
  background: none;
  border: none;
  cursor: pointer;
  color: var(--purple);
  padding: 0;
  margin-left: 10px;
  transition: color 0.3s ease;
}
#theme-toggle:hover {
  color: #b583ff;
}
body.light-mode #theme-toggle {
  color: var(--purple);
}

.nav-link.active {
    color: var(--purple) !important;
    font-weight: bold;
}

/* Responsive tweaks */
@media (max-width: 576px) {
  #hero {
    flex-direction: column;
    text-align: center;
  }
  #hero img.hero-img {
    margin-top: 30px;
  }
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top" id="main-navbar">
  <div class="container">
    <a class="navbar-brand" href="#hero">RM</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon" style="color: var(--purple);">&#9776;</span>
    </button>

    <!-- Navbar items and theme toggle wrapper -->
    <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNav">
      <ul class="navbar-nav me-3">
        <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>

      <!-- THEME TOGGLE BUTTON -->
      <button id="theme-toggle" aria-label="Toggle Dark/Light Mode">🌙</button>
    </div>
  </div>
</nav>

<div class="container py-5">
  <!-- HERO SECTION -->
  <section id="hero">
    <div>
      <p style="letter-spacing:3px; color:var(--purple)">WELCOME TO MY WORLD</p>
      <h1>Hi, I'm Raprap<br />a Web Designer</h1>
      <p class="mt-3">
        3rd year student who loves learning and exploring the world of coding.
        I focus on clean, minimalistic web design and user-friendly layouts.
      </p>
      <a href="#contact" class="hero-btn">Get in Touch</a>
    </div>
    <div>
      <img
        src="https://cdn.rafled.com/anime-icons/images/3155b42a125f523c187b7efee81d02926398fd07182cb99a3e7122010b6cccdf.jpg"
        class="hero-img"
        alt="Profile picture"
      />
    </div>
  </section>

  <!-- ABOUT -->
  <div id="about" class="mb-5">
    <h2 class="section-title">About Me</h2>
    <p class="lead">
        A passionate 3rd-year student dedicated to deepening knowledge and exploring the vast world of coding. Focused on continuous learning, problem-solving, and creating clean, efficient, and user-friendly digital experiences.
    </p>
    <div class="row">
      <div class="col-md-6">
        <ul class="list-unstyled">
          <li><strong>Name:</strong> Raprap</li>
          <li><strong>Address:</strong> Pampanga</li>
          <li><strong>Age:</strong> 23</li>
          <li><strong>Phone:</strong> 0999-505-7903</li>
        </ul>
      </div>
      <div class="col-md-6">
        <ul class="list-unstyled">
          <li><strong>Birthday:</strong> June 10, 2002</li>
          <li><strong>Nationality:</strong> Filipino</li>
          <li><strong>Height:</strong> 5'3</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- SKILLS -->
  <div id="skills" class="mb-5">
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
  <div id="projects" class="mb-5">
    <h2 class="section-title">Projects</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="project-card">
          <h4>Project One</h4>
          <p>A simple description of your first project.</p>
          <a href="#" class="hero-btn" style="padding: 6px 15px">View</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="project-card">
          <h4>Project Two</h4>
          <p>A simple description of your second project.</p>
          <a href="#" class="hero-btn" style="padding: 6px 15px">View</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="project-card">
          <h4>Project Three</h4>
          <p>A simple description of your third project.</p>
          <a href="#" class="hero-btn" style="padding: 6px 15px">View</a>
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
      <li><strong>Facebook:</strong> <a href="#">Your FB Link</a></li>
      <li><strong>GitHub:</strong> <a href="#">github.com/username</a></li>
    </ul>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  /* DARK/LIGHT MODE */
  const toggleButton = document.getElementById("theme-toggle");
  const body = document.body;

  if (localStorage.getItem("theme") === "light") {
    body.classList.add("light-mode");
    toggleButton.textContent = "🌞";
  }

  toggleButton.addEventListener("click", () => {
    body.classList.toggle("light-mode");
    if (body.classList.contains("light-mode")) {
      localStorage.setItem("theme", "light");
      toggleButton.textContent = "🌞";
    } else {
      localStorage.setItem("theme", "dark");
      toggleButton.textContent = "🌙";
    }
  });

  /* SKILLS ANIMATION */
  document.querySelectorAll(".progress").forEach((progress) => {
    const bar = progress.querySelector(".progress-bar");
    const span = bar.querySelector("span");
    const target = parseInt(progress.getAttribute("data-percent"));
    let current = 0;

    const interval = setInterval(() => {
      if (current >= target) {
        clearInterval(interval);
        span.textContent = target + "%";
      } else {
        current++;
        bar.style.width = current + "%";
        span.textContent = current + "%";
      }
    }, 20);
  });

  /* SMOOTH SCROLLING */
  document.querySelectorAll("a.nav-link, .hero-btn").forEach((link) => {
    link.addEventListener("click", function (e) {
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        e.preventDefault();
        window.scrollTo({
          top: target.offsetTop - 65,
          behavior: "smooth",
        });
      }
    });
  });

  // Track active section on scroll
const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('.nav-link');

window.addEventListener('scroll', () => {
    let currentSection = '';
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        
        if (window.scrollY >= sectionTop - sectionHeight / 3) {
            currentSection = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').includes(currentSection)) {
            link.classList.add('active');
        }
    });
});


</script>
</body>
</html>
