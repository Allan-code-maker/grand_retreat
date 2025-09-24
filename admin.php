<?php
// admin.php
session_start();
include 'config.php';

// --- Handle login ---
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // simple authentication (you can improve with hashed passwords)
    $sql = "SELECT * FROM employers WHERE username='$username' AND password='$password' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['admin'] = $username;
    } else {
        $error = "❌ Invalid credentials";
    }
}

// --- Logout ---
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: admin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard | The Grand Retreat</title>
  <style>
    body { font-family: Arial, sans-serif; margin:0; background:#f4f4f9; }
    header { background:#333; color:#fff; padding:10px; text-align:center; }
    h2 { margin-top:0; }
    .container { padding:20px; }
    table { border-collapse: collapse; width: 100%; margin-bottom: 30px; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
    th { background: #555; color: #fff; }
    .logout { float:right; background:#c00; color:#fff; padding:5px 10px; text-decoration:none; border-radius:4px; }
    .error { color:red; text-align:center; }
    .login-box { max-width:300px; margin:100px auto; padding:20px; background:#fff; border-radius:8px; box-shadow:0 2px 5px rgba(0,0,0,0.1);}
    .login-box input { width:100%; padding:8px; margin:8px 0; }
    .login-box button { width:100%; background:#28a745; color:#fff; border:none; padding:10px; cursor:pointer; }
  </style>
</head>
<body>

<?php if (!isset($_SESSION['admin'])): ?>
  <!-- Login Form -->
  <div class="login-box">
    <h2>Employer Login</h2>
    <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    <form method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" name="login">Login</button>
    </form>
  </div>

<?php else: ?>
  <!-- Dashboard -->
  <header>
    <h2>Welcome, <?php echo $_SESSION['admin']; ?> | Admin Dashboard</h2>
    <a class="logout" href="admin.php?logout=1">Logout</a>
  </header>
  <div class="container">

    <h3>🥗 Food Orders</h3>
    <table>
      <tr><th>ID</th><th>Dish</th><th>Customer</th><th>Quantity</th><th>Order Time</th></tr>
      <?php
      $orders = $conn->query("SELECT * FROM orders ORDER BY order_time DESC");
      if ($orders->num_rows > 0) {
          while($row = $orders->fetch_assoc()) {
              echo "<tr>
                      <td>{$row['id']}</td>
                      <td>{$row['dish']}</td>
                      <td>{$row['customer_name']}</td>
                      <td>{$row['quantity']}</td>
                      <td>{$row['order_time']}</td>
                    </tr>";
          }
      } else {
          echo "<tr><td colspan='5'>No orders found</td></tr>";
      }
      ?>
    </table>

    <h3>🏨 Room Bookings</h3>
    <table>
      <tr><th>ID</th><th>Room</th><th>Customer</th><th>Nights</th><th>Booking Time</th></tr>
      <?php
      $bookings = $conn->query("SELECT * FROM bookings ORDER BY booking_time DESC");
      if ($bookings->num_rows > 0) {
          while($row = $bookings->fetch_assoc()) {
              echo "<tr>
                      <td>{$row['id']}</td>
                      <td>{$row['room']}</td>
                      <td>{$row['customer_name']}</td>
                      <td>{$row['nights']}</td>
                      <td>{$row['booking_time']}</td>
                    </tr>";
          }
      } else {
          echo "<tr><td colspan='5'>No bookings found</td></tr>";
      }
      ?>
    </table>
  </div>
<?php endif; ?>

</body>
</html>
