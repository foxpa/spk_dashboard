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
        <a href="aSpecific.php">
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
      <div class="search-container">
  <button id="addBtn" href="add.php">Tambah Sekolah</button>
  <div class="search">
    <input type="text" placeholder="Search by School Name" id="schoolSearch">
  </div>
  <div class="search">
    <select id="districtSearch">
      <option value="">Select PPD</option>
      <option value="district1">Bachok</option>
      <option value="district2">Gua Musang</option>
      <option value="district3">Jeli</option>
      <option value="district1">Kota Bharu</option>
      <option value="district2">Kuala Krai</option>
      <option value="district3">Machang</option>
      <option value="district3">Pasir Mas</option>
      <option value="district3">Pasir Puteh</option>
      <option value="district3">Tanah Merah</option>
      <option value="district3">Tumpat</option>
    </select>
  </div>
  <button id="searchButton">Search</button>
</div>

<div class="table-wrapper">
    <?php
    $sql = "SELECT * FROM slists";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table table-bordered table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Bil.</th>";
        echo "<th>Kod Sekolah</th>"; 
        echo "<th>Nama Sekolah</th>"; 
        echo "<th>Pen. Kanan Pendidikan Khas/Penyelaras</th>"; 
        echo "<th>No. Telefon</th>"; 
        echo "<th>Alamat</th>"; 
        echo "<th>PPD</th>";
        echo "<th></th>"; 
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        
        /*ouput data */
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["school_code"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["s_name"]) . "</td>"; 
            echo "<td>" . htmlspecialchars($row["pk_name"]) . "</td>"; 
            echo "<td>" . htmlspecialchars($row["phone_num"]) . "</td>"; 
            echo "<td>" . htmlspecialchars($row["address"]) . "</td>"; 
            echo "<td>" . htmlspecialchars($row["district"]) . "</td>"; 
            echo "<td class='d-md-flex gap-3 mt-3'>";
            echo "<a href='edit.php?Id=" . htmlspecialchars($row['school_code']) . "'><ion-icon name='pencil-sharp'></ion-icon></a>";
            echo "<a href='remove.php?Id=" . htmlspecialchars($row['school_code']) . "'><ion-icon name='trash-outline'></ion-icon></a>";
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