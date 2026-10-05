<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About Us - MovieRecs</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <!-- Custom CSS -->
    <style>
      body {
        font-family: "Roboto", sans-serif;
        background-color: #f8f9fa;
        color: #333;
      }

      /* Header Section with Light Gold Background */
      .header-section {
        background: linear-gradient(135deg,rgb(192, 191, 187), #f5e6c8); /* Light Gold Gradient */
        color: #333; /* Darker text for better contrast */
        padding: 100px 0;
        text-align: center;
      }

      .header-section h1 {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 10px;
      }

      /* About Us Section */
      .about-us {
        max-width: 800px;
        margin: 0 auto;
        padding: 40px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      }

      /* Why Choose Us Section with Gold Accents */
      .why-choose-us {
        background: linear-gradient(135deg,rgb(175, 173, 170),rgb(169, 167, 163));
        color: #fff;
        padding: 60px 0;
        text-align: center;
      }

      .why-choose-us h2 {
        font-weight: bold;
        margin-bottom: 30px;
      }

      /* Team Section */
      .team-section {
        padding: 60px 0;
      }

      .team-member {
        text-align: center;
      }

      .team-member img {
        width: 150px;
        height: 150px;
        
        object-fit: cover;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
      }

      /* Footer */
      .footer {
        background:rgb(191, 188, 185); /* Gold toned footer */
        color: #fff;
        padding: 20px 0;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="index.php">MovieRecs</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navMenu"
          aria-controls="navMenu"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header Section -->
    <header class="header-section">
      <div class="container">
        <h1>About Us</h1>
        <p>Meet the creators behind MovieRecs and discover how we bring the best movie recommendations to you.</p>
      </div>
    </header>

    <!-- About Us Section -->
    <section class="py-5">
      <div class="container">
        <div class="about-us">
          <h2 class="text-center mb-4">Who We Are</h2>
          <p>
            We are TEAM_MATES —Nidhi, Niriksha, Raghavi, and Meghana!!! 
            Our passion for movies and technology brought us together to create MovieRecs.
            A personalized movie recommendation platform.
          </p>
          <p>
            Whether you love thrilling action , heartwarming dramas , laugh-out-loud comedies , or mind-bending sci-fi . 
            MovieRecs is here to guide you through the best cinematic experiences available.
          </p>
          <p>
            Try our Movie recommendation application and enjoy your movie-watching experience like never before
            Hope uu guys enjoyed!!!
          </p>
        </div>
      </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us">
      <div class="container">
        <h2>Why Choose MovieRecs?</h2>
        <div class="row text-center">
          <div class="col-md-4">
            <h5>🎯 Personalized Suggestions</h5>
            <p>Smart algorithms tailored to **your taste and mood**.</p>
          </div>
          <div class="col-md-4">
            <h5>🎥 Diverse Movie Options</h5>
            <p>Access **action, romance, comedy, sci-fi**, and more.</p>
          </div>
          <div class="col-md-4">
            <h5>🚀 User-Friendly Experience</h5>
            <p>Simple, seamless navigation for effortless discovery.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
      <div class="container">
        <h2 class="text-center mb-5">Meet Our Team</h2>
        <div class="row justify-content-center">
          <div class="col-md-3 team-member">
            <img src="images/nidhi.jpg" alt="Nidhi" />
            <h5 class="mt-3">Nidhi</h5>
           
          </div>
          <div class="col-md-3 team-member">
            <img src="images/niri.jpg" alt="Niriksha" />
            <h5 class="mt-3">Niriksha</h5>
            
          </div>
          <div class="col-md-3 team-member">
            <img src="images/ragha.jpg" alt="Raghavi" />
            <h5 class="mt-3">Raghavi</h5>
            
          </div>
          <div class="col-md-3 team-member">
            <img src="images/megha.jpg" alt="Meghana" />
            <h5 class="mt-3">Meghana</h5>
            
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <p class="mb-0">&copy; 2025 MovieRecs. All rights reserved.</p>
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
