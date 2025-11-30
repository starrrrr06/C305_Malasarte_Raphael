<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login - My Portfolio</title>
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
}
body::before {
  content: '';
  position: absolute;
  top:0; left:0; right:0; bottom:0;
  background: rgba(255,255,255,0.2);
  z-index: -1;
}

.card {
  background: rgba(255,255,255,0.95);
  padding: 2rem;
  border-radius: 15px;
  width: 100%;
  max-width: 400px;
  text-align: center;
  color: #222;
  box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}

h2 { color: #8C00FF; margin-bottom: 1.5rem; }

.form-control {
  border-radius: 8px;
  background-color: #f8f8f8;
  border: 1px solid #ccc;
  color: #222;
}

.form-control:focus {
  border-color: #8C00FF;
  box-shadow: none;
}

.btn-login {
  background-color: #8C00FF; 
  border:none; 
  border-radius:25px; 
  width:100%;
  padding:10px; 
  color:#fff; 
  font-weight:bold;
}
.btn-login:hover { background-color: #b583ff; }

a { color:#8C00FF; text-decoration: none; }
a:hover { text-decoration: underline; }

.alert { font-size: 0.9rem; }
</style>
</head>
<body>
<div class="card">
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
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3 text-start">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-login">Login</button>
    <p class="mt-3">Don't have an account? <a href="/register">Sign Up</a></p>
  </form>
</div>
</body>
</html>
