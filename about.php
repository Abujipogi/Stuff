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

.map-container {
    width: 100%;
    max-width: 800px;
    margin: auto;
    background: linear-gradient(135deg, rgba(214, 146, 228, 0.9), rgba(152, 194, 235, 0.9));
    padding: 15px;
    border-radius: 15px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
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

<!-- Google Map Section -->
<div class="container text-center mt-4">
    <h3 class="mb-3">Visit our store at the location below:</h3>
    
    <div class="map-container">
        <img src="img/map.png" alt="Map Location" class="img-fluid rounded" style="max-width: 100%; height: auto;">
    </div>
</div>

