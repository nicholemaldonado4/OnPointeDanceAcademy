<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/imgs/logo.png">
  <title>On Pointe Dance Academy</title>
  
  <link
     href="https://fonts.googleapis.com/css?family=News+Cycle|Robot+Flex"
     rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <?php require_once 'php/header.php';?>

  <div>
    <img class="banner" src="/imgs/welcome_banner.jpeg" alt="Dance Performace Picture">
  </div>
  <section class="lesson-sect">
    <h2 class="white">We have the best dance classes for you!</h2>
    <div class="dance-tiles">
      <div class="tile-wrapper">
        <img src="/imgs/dance_tile.jpg">
        <p>Class A</p>
      </div>
      <div class="tile-wrapper">
        <img src="/imgs/dance_tile.jpg">
        <p>Class B</p>
      </div>
      <div class="tile-wrapper">
        <img src="/imgs/dance_tile.jpg">
        <p>Class C</p>
      </div>
    </div>
    <div class="learn-more">
      <a class="button" href="lessons">Learn More</a>
    </div>
  </section>
  <section class="reg-sect">
    <div class="reg-info">
      <div class="reg-wrapper center">
        <img src="/imgs/dance_team.png" alt="Group photo of dancers">
      </div>
      <div class="reg-wrapper vertical-container">
        <div class="vertical-center">
          <h2>Registration is now available</h2>
          <p>We are now accepting new students for any of our dance classes.</p>
          <p><a class="contact" href="contact">Contact us</a> today to get started!</p>
          <div class="button-wrapper">
            <a class="button" href="calendar">Class Schedule</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php require_once 'php/footer.php';?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="js/header.js"></script>
</body>
</html>