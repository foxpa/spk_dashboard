<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sektor Pendidikan Khas</title>
    <link rel="stylesheet" href="dashboard.css" />
  </head>
  <body>
  <?php
  require_once 'connection.php';
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Retrieve username
$username = $_SESSION['username'];
?>
<!--nav -->
<div class="nav-container">
  <div class="nav">
    <ul>
      <li>
        <a href="#">
          <span class="title">Welcome, <?php echo htmlspecialchars($username); ?>!</span>
        </a>
      </li>
      <li>
        <a href="dashboard.php">
          <span class="icon"><ion-icon name="home-outline"></ion-icon></ion-icon></span>
          <span class="title">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="school.php">
          <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
          <span class="title">Sekolah</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="icon"><ion-icon name="file-tray-full-outline"></ion-icon></span>
          <span class="title">Kelas spasefik</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="icon"><ion-icon name="briefcase-outline"></span>
          <span class="title">Carta Organisasi</span>
        </a>
      </li>
      <li>
        <a href="addFAQ.php">
          <span class="icon"><ion-icon name="help-circle-outline"></span>
          <span class="title">Soalan lazim</span>
        </a>
      </li>
      <li>
        <a href="login.php">
          <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
          <span class="title">Daftar keluar</span>
        </a>
      </li>
    </ul>
  </div>
<!--main-->
  <div class="main">
    <div class="topbar">
      <div class="toggle">
      <ion-icon name="menu-sharp"></ion-icon>
      </div>
     
      <div class="user">
        <img src="img/dp.jpeg" alt="">
      </div>
      </div>

</div>  
<script src="main.js"></script>
<script src="js/main.js"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>