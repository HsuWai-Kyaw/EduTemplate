<?php

session_start();

if (!isset($_SESSION['username'])) {
     header("Location: index.php");
}
require("./partials/header.php");
require("./partials/header_banner.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Welcome</title>

     <style>
          h1 {
               display: flex;
               flex-wrap: wrap;
               justify-content: center;
               align-items: center;
          }

          .input-group {
               display: flex;
               flex-wrap: wrap;
               justify-content: flex-end;
               align-items: center;
          }
     </style>
</head>

<body>
     <?php
     echo "<script>alert('Welcome From Our Educational Website!')</script>"
     ?>
     <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>

     <div class="input-group">
          <button class="btn btn-info"><a href="logout.php">Logout</a></button>
     </div>

</body>

</html>

<?php
require("./partials/categorie.php");
require("./partials/our_course.php");
require("./partials/testimonial.php");
require("./partials/counter.php");
require("./partials/gallery.php");
require("./partials/footer.php");
?>