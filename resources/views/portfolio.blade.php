<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <!-- Bootstrap CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >

    <style>
        body {
            background-color: #0d0d0d;
            color: white;
        }
        .profile-img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #00bfff;
        }
        .section-title {
            border-left: 4px solid #00bfff;
            padding-left: 10px;
            margin-bottom: 20px;
            font-size: 1.6rem;
        }
        .project-card {
            background: #1a1a1a;
            border: 2px solid #00bfff33;
            border-radius: 10px;
            padding: 20px;
            transition: .2s;
        }
        .project-card:hover {
            border-color: #00bfff;
            transform: translateY(-4px);
        }
    </style>
</head>
<body>

<div class="container py-5">

    <!-- PERSONAL INFO -->
    <div class="text-center mb-5">
        <img src="/images/profile.jpg" alt="My Picture" class="profile-img mb-3">
        <h1 class="fw-bold">Your Name</h1>
        <p class="text-info">Future Developer | Student | Programmer</p>
    </div>

    <!-- ABOUT -->
    <div class="mb-5">
        <h2 class="section-title">About Me</h2>
        <p class="lead">
            I am a passionate developer who loves learning new technologies and creating
            meaningful digital solutions. I enjoy coding, building applications, and exploring
            innovative ideas that can help improve user experiences.
        </p>
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
    <div class="mb-5">
        <h2 class="section-title">Contact</h2>

        <ul class="list-unstyled fs-5">
            <li><strong>Email:</strong> raphaelmalasarte@gmail.com</li>
            <li><strong>Phone:</strong> 0999-505-7903</li>
            <li><strong>Facebook:</strong> <a href="#" class="text-info">Your FB Link</a></li>
            <li><strong>GitHub:</strong> <a href="#" class="text-info">github.com/username</a></li>
        </ul>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">

</script>

</body>
</html>
