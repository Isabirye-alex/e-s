<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="min-height: 100vh;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4 fw-bold">Welcome Back</h3>
                    <form>
                        <!-- Username / Email -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Username or Email</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter your username or email">
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                        </div>

                        <!-- Remember + Forgot -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <a href="#" class="small text-decoration-none">Forgot password?</a>
                        </div>

                        <!-- Login Button -->
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">Login</button>
                        </div>

                        <!-- Social Login -->
                        <div class="text-center mb-3">
                            <small class="text-muted">Or login with</small>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-outline-primary w-50">
                                <i class="bi bi-facebook me-1"></i> Facebook
                            </button>
                            <button type="button" class="btn btn-outline-danger w-50">
                                <i class="bi bi-google me-1"></i> Google
                            </button>
                        </div>

                        <!-- Sign Up Link -->
                        <p class="text-center mt-4 mb-0">
                            <small>Don't have an account? <a href="#">Sign Up</a></small>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
