<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://media.giphy.com/media/3o7aCUo6nMr5Nu38Tu/giphy.gif') no-repeat center center fixed;
            background-size: cover;
            color: white;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }
        .navbar {
            background: rgba(0, 0, 0, 0.7);
        }
        .hero {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .hero h1 {
            font-size: 4rem;
            animation: fadeInDown 2s;
        }
        .hero p {
            font-size: 1.5rem;
            animation: fadeInUp 2s;
        }
        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .features {
            padding: 50px 0;
            background: rgba(0, 0, 0, 0.8);
        }
        .feature-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            border: none;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .cta {
            padding: 50px 0;
            background: linear-gradient(45deg, #ff512f, #dd2476);
            text-align: center;
        }
        .cta h2 {
            color: white;
        }
        .cta button {
            background: white;
            color: #dd2476;
            border: none;
            padding: 10px 20px;
            font-size: 1.2rem;
            border-radius: 25px;
            cursor: pointer;
            transition: 0.3s;
        }
        .cta button:hover {
            background: #ff512f;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Albela</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cta">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Welcome to Our Landing Page</h1>
            <p>Your journey to greatness starts here. Experience excellence like never before.</p>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="feature-card p-4">
                        <h3>Feature One</h3>
                        <p>Discover amazing functionalities tailored just for you.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-card p-4">
                        <h3>Feature Two</h3>
                        <p>Experience cutting-edge technology at your fingertips.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-card p-4">
                        <h3>Feature Three</h3>
                        <p>Unleash your potential with our expert solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta" id="cta">
        <div class="container">
            <h2>Get Started Today!</h2>
            <button><a href="{{route('user.login.page')}}">Join Us</a></button>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
