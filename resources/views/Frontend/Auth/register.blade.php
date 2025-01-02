<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="https://i.pinimg.com/736x/6d/42/27/6d4227f404c512da7143e5f9e7d571db.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        body {
            background: url('https://media.giphy.com/media/xT9IgzoKnwFNmISR8I/giphy.gif') no-repeat center center fixed;
            background-size: cover;
        }
        .card {
            background: rgba(255, 255, 255, 0.8);
            border: none;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
            <h2 class="text-center mb-4">User Register</h2>
            <form action="{{route('user.register')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{old('name')}}">
                    @error('name')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" {{old('email')}}>
                    @error('email')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" {{old('password')}}>
                    @error('password')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirm Password<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="password_confirmation" id="confirmPassword" placeholder="Confirm your password" value="{{old('confirmtion_password')}}">
                </div>
                <div class="g-recaptcha" data-sitekey="6LexWqIqAAAAAKQ2K202IegbcRukPhQmyfhne6o2"></div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>

                <p class="text-center mt-3">Already have an account? <a href="{{route('user.login.page')}}">Login</a></p>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
