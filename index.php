<?php
session_start();
$loggedIn = isset($_SESSION["loggedin"]) && $_SESSION["loggedin"];
$name = $loggedIn ? $_SESSION["user"]["name"] : null;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MOVIESRECS - Your Personalized Movie Recommender</title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <style>
      body {
        font-family: "Arial", sans-serif;
        background-color: #f8f9fa;
        color:rgb(9, 8, 8);
      }

      .header-section {
        background: url('images/back2.jpg') no-repeat center center;
        background-size: cover;
        padding: 100px 0;
        color:rgb(11, 11, 11);
      }

      .header-section h6,
      .header-section p {
        color: #000;
        font-weight: bold;
      }

      .header-section img {
        max-width: 100%;
        height: auto;
        margin-bottom: 20px;
      }

      .card {
        transition: transform 0.3s ease;
        border: none;
        box-shadow: 0 2px 8px rgba(247, 219, 219, 0.1);
      }

      .card:hover {
        transform: translateY(-10px);
      }

      .footer {
        background: #343a40;
        color: #fff;
        padding: 60px 0;
      }

      .footer a {
        color: #adb5bd;
        text-decoration: none;
      }

      .footer a:hover {
        color: #fff;
        text-decoration: underline;
      }
    </style>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="#">🎬 MovieRecs</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#recommendations">Recommendations</a></li>
        <li class="nav-item"><a class="nav-link" href="#top-movies">Top Movies</a></li>
        <li class="nav-item"><a class="nav-link" href="#genres">Genres</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="ai.php">Futuristic AI</a></li>
      </ul>
    </div>
  </div>
</nav>


    <header class="header-section" id="home">
  <div class="container text-center">
    <h4>WELCOME TO MOVIERECS 🎬</h4>
    <p>Your one-stop platform for personalized movie recommendations.</p>
    <p>Explore new films based on your tastes and mood!</p>
    <p>Let’s get started on your movie journey.</p>
    <a href="#recommendations" class="btn btn-primary mt-3">Explore Recommendations</a>
  </div>
</header>

    <!-- Main Content -->
    <main class="container my-5">
      <!-- About Section -->
      <section id="about" class="mb-5">
        <div class="text-center mb-4">
          <h2>About Our Webpage</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <p class="text-center">
              MovieRecs is a movie recommendation application that leverages smart algorithms to suggest movies based on your personal taste.
              Whether you’re looking for a classic drama, an action-packed thriller, or a light-hearted comedy etc..!!
            </p>
          </div>
        </div>
      </section>

      <!-- Personalized Recommendations Section -->
      <section id="recommendations" class="mb-5">
        <div class="text-center mb-4">
          <h2>Your Personalized Recommendations</h2>
        </div>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card">
              <img src="images/Memento.jpg" class="card-img-top" alt="Memento" />
              <div class="card-body">
                <h5 class="card-title">Memento</h5>
                <p class="card-text">An exciting adventure filled with suspense and compelling storytelling.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="images/Our.jpg" class="card-img-top" alt="Our Family Wedding" />
              <div class="card-body">
                <h5 class="card-title">Our Family Wedding</h5>
                <p class="card-text">A heartwarming tale that blends romance with light comedy.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="images/inception.jpg" class="card-img-top" alt="Inception" />
              <div class="card-body">
                <h5 class="card-title">Inception</h5>
                <p class="card-text">A thrilling journey that takes you through twists and turns.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Top Movies Section -->
      <section id="top-movies" class="mb-5">
        <div class="text-center mb-4">
          <h2>Top Movies</h2>
        </div>
        <div class="row g-4">
          <div class="col-md-3">
            <div class="card">
              <img src="images/Passengers.jpg" class="card-img-top" alt="Top Movie 1" />
              <div class="card-body text-center">
                <h6 class="card-title">Top Movie 1</h6>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="images/FastFive.jpg" class="card-img-top" alt="Top Movie 2" />
              <div class="card-body text-center">
                <h6 class="card-title">Top Movie 2</h6>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="images/Friendship.jpg" class="card-img-top" alt="Top Movie 3" />
              <div class="card-body text-center">
                <h6 class="card-title">Top Movie 3</h6>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="images/sonic.jpg" class="card-img-top" alt="Top Movie 4" />
              <div class="card-body text-center">
                <h6 class="card-title">Top Movie 4</h6>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Genres Section -->
      <section id="genres" class="mb-5">
        <div class="text-center mb-4">
          <h2>Popular Genres</h2>
        </div>
        <div class="row g-4">
          <div class="col-md-3">
            <div class="card text-center p-3">
              <div class="card-body">
                <h5 class="card-title">ACTION</h5>
                <p class="card-text">Energetic and pulse-pounding thrill rides.</p>
                <a href="action.php">Explore Action Movies</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-center p-3">
              <div class="card-body">
                <h5 class="card-title">DRAMA</h5>
                <p class="card-text">Emotional and gripping stories that touch the soul.</p>
                <a href="drama.php">Explore Drama Movies</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-center p-3">
              <div class="card-body">
                <h5 class="card-title">LOVE</h5>
                <p class="card-text">Romantic stories that capture hearts.</p>
                <a href="love.php">Explore Love Movies</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-center p-3">
              <div class="card-body">
                <h5 class="card-title">COMEDY</h5>
                <p class="card-text">Keep jokes and funny stories short and sweet.</p>
                <a href="comedy.php">Explore Comedy Movies</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-center p-3">
              <div class="card-body">
                <h5 class="card-title">SCI-FI</h5>
                <p class="card-text">Futuristic adventures and cutting-edge imagination.</p>
                <a href="sci-fi.php">Explore Sci-Fi Movies</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-center p-3">
              <div class="card-body">
                <h5 class="card-title">HORROR</h5>
                <p class="card-text">Adventures and Horror imagination.</p>
                <a href="horror.php">Explore Horror Movies</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Section -->
      <section id="contact" class="mb-5">
        <div class="text-center mb-4">
          <h2>CONTACT US</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Your Name" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com" />
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100">Post Comments</button>
            </form>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-4">
            <h5>About Us</h5>
            <p>At MovieRecs, we connect you with movies that inspire, entertain, and excite. Personalized just for you.</p>
            <a href="aboutus.php">Learn More</a>
          </div>
          <div class="col-md-4 mb-4">
            <h5>Quick Links</h5>
            <ul class="list-unstyled">
              <li><a href="index.php">Home</a></li>
              <li><a href="aboutus.php">About</a></li>
              <li><a href="#recommendations">Recommendations</a></li>
              <li><a href="#top-movies">Top Movies</a></li>
              <li><a href="#genres">Genres</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-4 mb-4">
            <h5>Contact</h5>
            <ul class="list-unstyled">
              <li>Email: support@movierecs.com</li>
              <li>Phone: +1 234 567 8xxx</li>
              <li>Address: East West (EWIT) , Banglore</li>
            </ul>
            <a href="contact.php">Reach Out</a>
          </div>
        </div>
        <hr class="bg-light" />
        <div class="row">
          <div class="col-md-12 text-center">
            <p class="mb-0">&copy; 2025 MovieRecs. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
