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
<!--card-->
      <div class="cardbox">
        <div class="card">
          <div>
            <div class="numbers">778</div>
            <div class="cardname">Bilangan Guru Rendah</div>
          </div>
          <div class="iconbx">
          <img width="38" height="38" src="https://img.icons8.com/color/38/classroom.png" alt="classroom"/>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="numbers">646</div>
            <div class="cardname">Bilangan Guru Menengah</div>
          </div>
          <div class="iconbx">
          <img width="35" height="35" src="https://img.icons8.com/stickers/35/training-skin-type-1.png" alt="training-skin-type-1"/>        
        </div>
        </div>
        <div class="card">
          <div>
            <div class="numbers">133</div>
            <div class="cardname">Sekolah Rendah</div>
          </div>
          <div class="iconbx">
          <img width="35" height="35" src="https://img.icons8.com/color/35/playing-children-skin-type-3.png" alt="playing-children-skin-type-3"/>         </div>
        </div>
        <div class="card">
          <div>
            <div class="numbers">77</div>
            <div class="cardname">Sekolah Menengah</div>
          </div>
          <div class="iconbx">
          <img width="35" height="35" src="https://img.icons8.com/cotton/35/backpack.png" alt="backpack"/>    
        </div>
    </div>
  </div>
     <!--charts-->
      <div class="chartsBx">
          <div class="chart"> <canvas id="chart-1"></canvas> </div>
          <div class="chart"> <canvas id="chart-2"></canvas> </div>
          <div class="chart"> <canvas id="chart-3"></canvas> </div>
          <div class="chart"> <canvas id="chart-4"></canvas> </div>
          <div class="chart"> <canvas id="chart-5"></canvas> </div>
          <div class="chart"> <canvas id="chart-6"></canvas> </div>
      </div>
</div>  
<script src="main.js"></script>
<script src="js/main.js"></script>
<!--Charts js-->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script src="js/chart.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>