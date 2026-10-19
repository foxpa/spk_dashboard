<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in || Sign up from</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                
                <h1>Create Account</h1>
                <div class="infield">
                    <input type="text" required placeholder="Username" name="username"/>
                </div>
                <div class="infield">
                    <input type="email" required placeholder="Email" name="email"/>

                </div>
                <div class="infield">
                    <input type="password" required placeholder="Password" name="password" />
                </div>
                <button type="submit" name="signup">Sign Up</button>
            </form>
        </div>
        <div></div>
        <div class="form-container sign-in-container">
            <form action="login.php" method="POST">
                <h1>Sign in</h1>
                <div class="infield">
                    <input type="email" placeholder="Email" name="email"/>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" name="password" />
                </div>
                <button type="submit" name="signin">Sign In</button>
            </form>
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Selamat Datang!</h1>
                    <p>Ada akaun? <br>Klik 'Sign In' untuk login</p>
                    <button>Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Selamat Datang!</h1>
                    <p>Pengguna baru?<br>Klik 'Sign Up' untuk signup</p>
                    <button>Sign Up</button>
                </div>
            </div>
            <button id="overlayBtn"></button>
        </div>
    </div>

    <!-- js code -->
    <script>
    const container = document.getElementById('container');
    const overlayCon = document.getElementById('overlaycon');
    const overlayBtn = document.getElementById('overlayBtn');

    overlayBtn.addEventListener('click', () => {
    container.classList.toggle('right-panel-active');

    overlayBtn.classList.remove('btnScaled');
    window.requestAnimationFrame(()=>{
      overlayBtn.classList.add('btnScaled');
    })
    });
   </script>

<?php
session_start();
require_once 'connection.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['alert_message'])) {
    echo "<script>
        window.onload = function() {
            alert('" . addslashes($_SESSION['alert_message']) . "');
        }
    </script>";
    unset($_SESSION['alert_message']);
}

if (isset($_POST['signup'])) {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Check if password is at least 8 characters long
    if (strlen($password) < 8) {
        $_SESSION['alert_message'] = 'Password must be at least 8 characters long.';
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists
    $check_email = "SELECT * FROM admin_reg WHERE email = '$email'";
    $result = $conn->query($check_email);
    if ($result->num_rows > 0) {
        $_SESSION['alert_message'] = 'Email already exists. Please use a different email.';
    } else {
        $sql = "INSERT INTO admin_reg (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION['alert_message'] = 'Signup successful!';
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            $_SESSION['alert_message'] = 'Error: ' . $conn->error;
        }
    }  
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_POST['signin'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin_reg WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username']; 
            header("Location: dashboard.php");
            exit();
        } else {
            $_SESSION['alert_message'] = 'Incorrect email or password';
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        }
    }
}
$conn->close();
?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.querySelector('.form'); // Adjust the selector if necessary

        form.addEventListener('submit', function(event) {
            // Check if the form is valid
            if (!form.checkValidity()) {
                event.preventDefault(); // Prevent form submission
                alert("Please fill out all required fields."); // Show alert
            }
        });
    });
</script>
</body>
</html>