<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elysse Stuff's</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">


    <link rel="icon" type="image/x-icon" href="img/ICONSS.ico" sizes="64x64">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
       .navbar {
            background: linear-gradient(135deg, rgba(214, 146, 228, 0.9), rgba(152, 194, 235, 0.9)) !important;
            backdrop-filter: blur(5px);
        }

        .navbar-brand img {
            opacity: 0.9;
            transition: opacity 0.3s ease-in-out;
        }

        .navbar-brand img:hover {
            opacity: 1;
        }

        .navbar-nav .nav-link {
            color: rgb(53, 34, 53) !important;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }

        .navbar-nav .nav-link:hover {
            color: rgb(152, 194, 235) !important;
        }
        .logo {
            width: 50px;
            height: 50px;
            object-fit: cover; /* Ensures the image fills the container */
            object-position: center; /* Centers the zoomed-in area */
            transform: scale(3.6); /* Zooms in by 1.5x */
        }

        /* Adjust the carousel height */
        .carousel-inner img {
            width: 90%;
            max-height: 650px; /* Reduce height for better fit */
            object-fit: contain; /* Ensures images are fully visible without cropping */
        }

        /* Slogan styling */
        .slogan {
            font-size: 2rem;
            font-weight: bold;
            color: rgb(53, 34, 53);
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        .social-icon {
        transition: transform 0.3s ease-in-out;
    }

    .social-icon:hover {
        transform: scale(1.3); /* Zoom effect on hover */
    }

    .contact-container {
    background: linear-gradient(135deg, rgba(214, 146, 228, 0.9), rgba(152, 194, 235, 0.9));
    backdrop-filter: blur(5px);
    border-radius: 15px;
    padding: 20px;
}

.social-icon {
    transition: transform 0.3s ease-in-out;
}

.social-icon:hover {
    transform: scale(1.3); /* Zoom effect on hover */
}

.gradient-icon {
    font-size: 40px;
    background: linear-gradient(135deg, #00C6FF,rgb(235, 117, 215));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    transition: transform 0.3s ease-in-out;
}

.gradient-icon:hover {
    transform: scale(1.3); /* Zoom effect on hover */
}


    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">
    <img src="img/branding.png" alt="Logo" class="logo">

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Oder</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Slogan Section -->
<div class="container text-center mt-4">
    <h2 class="slogan">Welcome to Elysse Stuff's -Where Every Petal Tells a Story.</h2>
</div>

<!-- Slideshow -->
<div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img1.jpg" class="d-block w-100 img-fluid" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="img/img2.jpg" class="d-block w-100 img-fluid" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="img/img3.jpg" class="d-block w-100 img-fluid" alt="Slide 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="container text-center mt-5 contact-container">
    <h3 class="mb-3">Contact Us</h3>
    <p>Order or inquire through the links below:</p>

    <div class="d-flex justify-content-center gap-4">
        <!-- Facebook -->
        <a href="https://www.facebook.com/profile.php?id=61558679676218" target="_blank">
            <i class="bi bi-facebook gradient-icon"></i>
        </a>

        <!-- Instagram -->
        <a href="https://www.instagram.com/Elysse_Stuff's" target="_blank">
        <i class="bi bi-instagram gradient-icon" ></i>
        </a>

        <!-- Gmail -->
        <a href="mailto:gamefugaku@gmail.com">
            <i class="bi bi-envelope-fill gradient-icon"></i>
        </a>

    </div>
</div>





</body>
</html>
