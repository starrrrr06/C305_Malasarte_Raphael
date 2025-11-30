<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Portfolio</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
    background: url('https://cdn.pixabay.com/photo/2016/11/29/09/32/galaxy-1867283_1280.jpg') no-repeat center center fixed;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: Arial, sans-serif;
    color: #333;
}
body::before {
    content: '';
    position: absolute; top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(255, 255, 255, 0.7);
    z-index: -1;
}
.card {
    background: rgba(255,255,255,0.95);
    padding: 2rem;
    border-radius: 15px;
    width: 100%;
    max-width: 400px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    border: 2px solid #8C00FF; /* violet border */
}
h2 { 
    color: #8C00FF; 
    text-align: center; 
    margin-bottom: 1.5rem; 
}
.form-control { 
    border-radius: 8px; 
    border: 1.5px solid #8C00FF; /* violet border */
    padding: 10px;
}
.form-control:focus {
    border-color: #b583ff;
    box-shadow: 0 0 5px rgba(140,0,255,0.5);
}
.btn-login {
    background-color: #8C00FF;
    border: none;
    border-radius: 25px;
    width: 100%;
    padding: 10px;
    color: #fff;
    font-weight: bold;
    transition: 0.3s;
}
.btn-login:hover { 
    background-color: #b583ff; 
}
a { 
    color: #8C00FF; 
    text-decoration: none; 
}
a:hover {
    text-decoration: underline;
}
.alert {
    border: 1px solid #8C00FF;
    background-color: rgba(140,0,255,0.1);
    color: #333;
}
</style>
</head>
<body>
<div class="card text-center">
    <h2>Login</h2>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="/login">
        @csrf
        <div class="mb-3 text-start">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
        </div>
        <div class="mb-3 text-start">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-login">Login</button>
        <p class="mt-3">Don't have an account? <a href="/register">Sign Up</a></p>
    </form>
</div>
</body>
</html>
