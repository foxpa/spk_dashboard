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
        <a href="adminSpecific.php">
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
        <img src="img/dp.jpeg">
      </div>
      </div>
   
    <div class="table-wrapper">
    <?php
    $sql = "SELECT 
    category,
    GROUP_CONCAT(schools SEPARATOR '<br><br>') AS schools
    FROM
    cat_spec
    GROUP BY
    category;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='tableS table-bordered table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Kategori</th>"; 
        echo "<th>Nama Sekolah</th>"; 
        echo "<th></th>"; 
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        
        /*ouput data */
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["category"]) . "</td>";
            echo "<td>" . $row["schools"] . "</td>";
            echo "<td class='d-md-flex gap-3 mt-3'>";
            echo "<a href='edit.php?Id=" . htmlspecialchars($row['schools']) . "'><ion-icon name='pencil-sharp'></ion-icon></a>";
            echo "<a href='remove.php?Id=" . htmlspecialchars($row['schools']) . "'><ion-icon name='trash-outline'></ion-icon></a>";
            echo "</td>";
            echo "</tr>";
        }
        
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "No results found";
    }

    $conn->close();
    ?>
</div>
</div>
</div>

<script src="main.js"></script>
<script src="js/main.js"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>