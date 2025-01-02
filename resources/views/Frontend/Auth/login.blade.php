<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link rel="icon" type="image/x-icon" href="https://i.pinimg.com/736x/6d/42/27/6d4227f404c512da7143e5f9e7d571db.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    
      
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
            <h2 class="text-center mb-4">Login</h2>
            <form action="{{route('user.login')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" value="{{old('email')}}">
                    @error('email')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" value="{{old('password')}}">
                    @error('password')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary ">Login</button>
                </div>

                <button class="g-recaptcha" 
                    data-sitekey="6LfLZKIqAAAAAMz3ZcJDctLQ2FgaI9sq-lnTSE0A" 
                    data-callback='onSubmit' 
                    data-action='submit'></button>
                <p class="text-center mt-3">Don't have an account? <a href="{{route('user.register.page')}}">Register</a></p>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function onSubmit(token) {
          document.getElementById("demo-form").submit();
        }
      </script>
</body>
</html>
