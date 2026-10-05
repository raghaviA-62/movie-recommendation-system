<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Us - MovieRecs</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts & Icons -->
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Custom CSS -->
    <style>
      body {
        font-family: "Poppins", sans-serif;
        background: linear-gradient(135deg,rgb(101, 100, 98), #f5e6c8); /* Light Gold Gradient */
        color: #333;
      }

      /* Header Section with Elegant Typography */
      .header-section {
        text-align: center;
        padding: 100px 0;
      }

      .header-section h1 {
        font-family: "Playfair Display", serif;
        font-size: 3rem;
        font-weight: bold;
      }

      /* Contact Form Section with Glassmorphism */
      .contact-form {
        max-width: 600px;
        margin: 0 auto;
        padding: 40px;
        background: rgba(123, 117, 117, 0.2);
        backdrop-filter: blur(10px);
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      }

      .form-label {
        font-weight: 600;
      }

      /* Button Hover Animation */
      .btn-primary {
        background-color:rgb(118, 116, 113);
        border: none;
        transition: all 0.3s ease-in-out;
      }

      .btn-primary:hover {
        background-color:rgb(105, 104, 101);
        transform: scale(1.05);
      }

      /* Footer */
      .footer {
        background: #333;
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
              <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header Section -->
    <header class="header-section">
      <div class="container">
        <h1>Contact Us</h1>
        <p>We’d love to hear from you! Reach out and we’ll get back as soon as possible.</p>
      </div>
    </header>

    <!-- Contact Form Section -->
    <section class="py-5">
      <div class="container">
        <div class="contact-form">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">
                <i class="fas fa-user"></i> Name
              </label>
              <input
                type="text"
                class="form-control"
                id="name"
                placeholder="Your Name"
                required
              />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">
                <i class="fas fa-envelope"></i> Email Address
              </label>
              <input
                type="email"
                class="form-control"
                id="email"
                placeholder="name@example.com"
                required
              />
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">
                <i class="fas fa-comment-dots"></i> Message
              </label>
              <textarea
                class="form-control"
                id="message"
                rows="5"
                placeholder="Your Message"
                required
              ></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">
              <i class="fas fa-paper-plane"></i> Post Comments
            </button>
          </form>
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
