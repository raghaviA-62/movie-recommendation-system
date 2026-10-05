<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Top Horror Movies</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
    <div class="header-title">
      <i class="fas fa-ghost"></i>
      <h1>Top Horror Movies</h1>
    </div>
  </header>

  <section class="movie-list">
    <?php
      $query = "SELECT title, image, description, rating FROM movies WHERE genre = 'horror'";
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $imagePath = 'images/' . $row["image"];

          // Optional: fallback if image file doesn't exist
          if (!file_exists($imagePath)) {
            echo "<p style='color:red;'>Missing image: $imagePath</p>";
            $imagePath = 'images/placeholder.jpg';
          }

          echo '<div class="movie" onclick="toggleDetails(this)">
                  <img src="' . $imagePath . '" alt="' . htmlspecialchars($row["title"]) . '">
                  <h2>' . htmlspecialchars($row["title"]) . '</h2>
                  <div class="movie-details">
                    <p>' . htmlspecialchars($row["description"]) . '</p>
                    <p class="rating">Rating: ' . $row["rating"] . '/10</p>
                  </div>
                </div>';
        }
      } else {
        echo "<p>No horror movies found.</p>";
      }
    ?>
  </section>

  <script>
    function toggleDetails(element) {
      const details = element.querySelector('.movie-details');
      details.style.display = details.style.display === 'block' ? 'none' : 'block';
    }
  </script>
</body>
</html>
