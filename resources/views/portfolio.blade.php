<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>My Portfolio</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

<style>
  
body {
  background-color: #0d0d0d;
  color: #ffffff;
  font-family: Arial, sans-serif;
  transition: all 0.3s ease;
  padding-top: 60px;
}

:root {
  --purple: #8C00FF;
  --gray-light: #b5b5b5;
  --gray-dark: #222;
}

#main-navbar {
  background-color: #111;
  border-bottom: 1px solid #444;
  transition: background-color 0.3s, border-color 0.3s;
  z-index: 10000;
  padding: 1rem 0;
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

#hero {
  padding: 60px 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}
#hero h1 {
  font-size: 3rem;
  font-weight: 900;
  line-height: 1.3;
}
#hero p {
  color: var(--gray-light);
  max-width: 520px;
  line-height: 1.7;
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

.section-title {
  border-left: 4px solid var(--purple);
  padding-left: 10px;
  margin-bottom: 25px;
  font-size: 1.6rem;
  color: var(--purple);
}

#about, #skills, #projects, #contact {
  padding-top: 60px;
  padding-bottom: 60px;
}
#about p.lead, #about ul li {
  color: var(--gray-light);
  margin-bottom: 10px;
}

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

.project-card {
  background: #111;
  border: 1px solid #444;
  padding: 20px;
  border-radius: 10px;
  transition: 0.3s;
  margin-bottom: 20px;
}
.project-card:hover {
  border-color: var(--purple);
  transform: translateY(-4px);
}
.row.g-4 {
  gap: 2rem;
}

.contact li {
  font-size: 1.2rem;
  margin-bottom: 12px;
}
.contact a {
  color: var(--purple);
  text-decoration: none;
}
.contact a:hover {
  opacity: 0.7;
}

body.light-mode {
  background-color: #f5f5f5;
  color: #222;
}

body.light-mode #about p.lead,
body.light-mode #about ul li {
  color: #333;
}

body.light-mode .section-title, 
body.light-mode .hero-btn, 
body.light-mode .skills .progress-bar {
  color: var(--purple);
  border-color: var(--purple);
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
body.light-mode .hero-btn:hover {
  background: var(--purple);
  color: #fff;
}
body.light-mode .hero-img {
  border-color: #222;
}

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

@media (max-width: 576px) {
  #hero {
    flex-direction: column;
    text-align: center;
  }
  #hero img.hero-img {
    margin-top: 20px;
  }
}
</style>
</head>

<body>
<nav class="navbar navbar-expand-lg fixed-top" id="main-navbar">
  <div class="container">
    <a class="navbar-brand" href="#hero">RM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="color: var(--purple);">&#9776;</span>
    </button>
    <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNav">
      <ul class="navbar-nav me-3">
        <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
      <button id="theme-toggle" aria-label="Toggle Dark/Light Mode">🌙</button>
    </div>
  </div>
</nav>

<div class="container py-5">
  <section id="hero">
    <div>
      <p style="letter-spacing:3px; color:var(--purple)">WELCOME TO MY WORLD</p>
      <h1>Hi, I'm Raprap<br />a Web Designer</h1>
      <p class="mt-3">3rd year student who loves learning and exploring the world of coding. I focus on clean, minimalistic web design and user-friendly layouts.</p>
      <a href="#contact" class="hero-btn">Get in Touch</a>
    </div>
    <div>
      <img src="https://cdn.rafled.com/anime-icons/images/3155b42a125f523c187b7efee81d02926398fd07182cb99a3e7122010b6cccdf.jpg" class="hero-img" alt="Profile picture" />
    </div>
  </section>

  <div id="about" class="mb-5">
    <h2 class="section-title">About Me</h2>
    <p class="lead">A passionate 3rd-year student dedicated to deepening knowledge and exploring the vast world of coding. Focused on continuous learning, problem-solving, and creating clean, efficient, and user-friendly digital experiences.</p>
    <div class="row">
      <div class="col-md-6">
        <ul class="list-unstyled">
          <li><strong>Name:</strong> Raprap</li>
          <li><strong>Address:</strong> Pampanga</li>
          <li><strong>Age:</strong> 23</li>
          <li><strong>Phone:</strong> 0999-505-7903</li>
        </ul>
      </div>
    </div>
  </div>

  <div id="skills" class="mb-5">
    <h2 class="section-title">My Skills</h2>
    <div class="skills">
      <p>HTML</p>
      <div class="progress" data-percent="95%"><div class="progress-bar"><span>0%</span></div></div>
      <p>CSS</p>
      <div class="progress" data-percent="90%"><div class="progress-bar"><span>0%</span></div></div>
      <p>JavaScript</p>
      <div class="progress" data-percent="70%"><div class="progress-bar"><span>0%</span></div></div>
    </div>
  </div>

  <div id="projects" class="mb-5">
    <h2 class="section-title">Projects</h2>
    <div class="row g-4">
      <div class="col-12 col-sm-6 col-md-4">
        <div class="project-card">
          <h4>Project One</h4>
          <p>A simple description of your first project.</p>
          <button class="hero-btn" style="padding: 6px 15px" data-bs-toggle="modal" data-bs-target="#projectModal1">View</button>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="project-card">
          <h4>Project Two</h4>
          <p>A simple description of your second project.</p>
          <button class="hero-btn" style="padding: 6px 15px" data-bs-toggle="modal" data-bs-target="#projectModal2">View</button>
        </div>
      </div>
    </div>
  </div>

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

<div class="modal fade" id="projectModal1" tabindex="-1" aria-labelledby="projectModal1Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-dark text-white">
      <div class="modal-header">
        <h5 class="modal-title" id="projectModal1Label">Project One Screenshots</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="carouselProject1" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Screenshot 1">
            </div>
            <div class="carousel-item">
              <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Screenshot 2">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselProject1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselProject1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="projectModal2" tabindex="-1" aria-labelledby="projectModal2Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-dark text-white">
      <div class="modal-header">
        <h5 class="modal-title" id="projectModal2Label">Project Two Screenshots</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="carouselProject2" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Screenshot 1">
            </div>
            <div class="carousel-item">
              <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Screenshot 2">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselProject2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselProject2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
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

document.querySelectorAll("a.nav-link, .hero-btn").forEach((link) => {
  link.addEventListener("click", function (e) {
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      e.preventDefault();
      window.scrollTo({ top: target.offsetTop - 65, behavior: "smooth" });
    }
  });
});

const sections = document.querySelectorAll('#hero, #about, #skills, #projects, #contact');
const navLinks = document.querySelectorAll('.nav-link');

let lastActiveSection = sections[0].getAttribute('id');
window.addEventListener('scroll', () => {
  const scrollPosition = window.scrollY + window.innerHeight / 2;
  let currentSectionId = lastActiveSection;

  sections.forEach(section => {
    const sectionTop = section.offsetTop;
    const sectionBottom = sectionTop + section.offsetHeight;

    if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
      currentSectionId = section.getAttribute('id');
    }
  });

  if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 1) {
    currentSectionId = sections[sections.length - 1].getAttribute('id');
  }

  navLinks.forEach(link => {
    link.classList.remove('active');
    if (link.getAttribute('href').slice(1) === currentSectionId) {
      link.classList.add('active');
    }
  });

  lastActiveSection = currentSectionId;
});
</script>
</body>
</html>
