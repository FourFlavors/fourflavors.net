<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FourFlavors</title>
    <link rel="icon" href="images/logo.png" type="image/png">
    <!-- Bulma CSS 1.0.4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
    <!-- FontAwesome 7.0.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-xgqOKPbcUuBKdpNf8v0yVlWKJP9n5c6FNbUC8wX7T/n1eUUKo3n9+Sj+xKu+pW9QGl8X7z8+TdEdJa9/8jJ3Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .main-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        .logo-container {
            width: 120px;
            height: 120px;
            margin: 0 auto 2rem;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }
        .logo-container:hover {
            transform: scale(1.05);
        }
        .logo-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .main-title {
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }
        .shutdown-notification {
            background: rgba(255, 107, 107, 0.1);
            border: 1px solid rgba(255, 107, 107, 0.3);
            border-radius: 12px;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .main-container {
            animation: fadeIn 0.8s ease-out;
        }
        @media (max-width: 768px) {
            .logo-container {
                width: 100px;
                height: 100px;
            }
        }
    </style>
</head>
<body>
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-half-tablet is-one-third-desktop">
                        <div class="main-container p-6 has-text-centered">
                            <!-- Logo -->
                            <div class="logo-container">
                                <img src="images/logo.png" alt="FourFlavors Logo">
                            </div>
                            <!-- Main Title -->
                            <h1 class="title is-1 main-title mb-4">
                                FourFlavors
                            </h1>
                            <!-- Subtitle -->
                            <p class="subtitle is-4 has-text-grey-dark mb-5">
                                <i class="fas fa-heart has-text-danger"></i>
                                Thank you for being part of our journey
                            </p>
                            <!-- Shutdown Notice -->
                            <div class="shutdown-notification p-4">
                                <span class="icon-text has-text-danger">
                                    <span class="icon">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </span>
                                    <span class="has-text-weight-semibold">
                                        This service has been discontinued
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>