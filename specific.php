<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PPD Bachok</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg" style="background-color: #0d355c;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"><img src="img/KP.png"></a>
        <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="toggler-icon top-bar"></span>
          <span class="toggler-icon middle-bar"></span>
          <span class="toggler-icon bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="index.html">Halaman Utama</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tentang Kami
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="organization.php">Struktur Organisasi</a></li>
                  <li><a class="dropdown-item" href="vmo.html">Visi,Misi & Objektif</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Senarai Sekolah
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="bachok.php">PPD BACHOK</a></li>
                  <li><a class="dropdown-item" href="gm.php">PPD GUA MUSANG</a></li>
                  <li><a class="dropdown-item" href="machang.php">PPD MACHANG</a></li>
                  <li><a class="dropdown-item" href="kk.php">PPD KUALA KRAI</a></li>
                  <li><a class="dropdown-item" href="tumpat.php">PPD TUMPAT</a></li>
                  <li><a class="dropdown-item" href="kb.php">PPD KOTA BHARU</a></li>
                  <li><a class="dropdown-item" href="jeli.php">PPD JELI</a></li>
                  <li><a class="dropdown-item" href="pm.php">PPD PASIR MAS</a></li>
                  <li><a class="dropdown-item" href="pp.php">PPD PASIR PUTEH</a></li>
                  <li><a class="dropdown-item" href="tm.php">PPD TANAH MERAH</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="specific.php">KELAS KATEGORI SPESIFIK</a></li>
              </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="contact.html">Hubungi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="FAQ.html">Soalan Lazim</a>
            </li>
        </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2"  type="search" placeholder="Carian" aria-label="Search">
            <button class="btn-bg-light  text-black " type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    
    <!--content-->
    <?php
    
require_once 'connection.php';
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT 
    category,
    GROUP_CONCAT(schools SEPARATOR '<br>') AS schools
FROM
    cat_spec
GROUP BY
    category;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-bordered table-striped'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>BIL</th>";
    echo "<th>KATEGORI SPESIFIK</th>";
    echo "<th>SEKOLAH</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    $bil = 1;
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $bil++ . "</td>";
        echo "<td>" . $row["category"] . "</td>";
        echo "<td>" . nl2br($row["schools"]) . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

    <!--footer-->
    <footer class="footer">
      <div class="footContainer">
        <div class="row">
          <div class="footer-col">
            <h4>Pautan Luar</h4>
            <ul>
              <li><a href="https://www.moe.gov.my/">Portal rasmi Kementerian Pendidikan Malaysia (KPM)</a></li>
              <li><a href="https://jpnkelantan.moe.gov.my/">Portal rasmi Jabatan Pendidikan Negeri Kelantan (JPNK)</a></li>
            </ul>
        </div>
      <div class="footer-col">
        <h4>Alamat</h4>
        <ul>
          <li><a href="https://maps.app.goo.gl/sScuJWM8LhdPtKpY7">
            Sektor Pendidikan Khas, <br>
            Jabatan Pendidikan Negeri Kelantan, <br>
            Bandar Baru Tunjong
            Kota Bharu,<br> 
            16010 Kelantan</a></li>
        </ul>
    </div>
    <div class="footer-col">
      <h4>Hubungi kami</h4>
      <ul>
        <li class="contact-item">
          <i class="fa fa-phone"></i>
          <span>09-7418087</span>
        </li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Ikuti kami</h4>
      <div class="socMed">
        <a href="https://www.facebook.com/SPKJPNK"><i class="fab fa-facebook-f"></i></a>
      </div>
  </div>
    </div>
    </footer>
  </body>
</html>