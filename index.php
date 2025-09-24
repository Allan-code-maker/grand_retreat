<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Grand Retreat & Dining</title>
  <style>
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background: #f5f5f5;
    }
    header {
      background: #2c3e50;
      color: white;
      padding: 20px;
      text-align: center;
    }
    nav {
      display: flex;
      justify-content: center;
      background: #34495e;
    }
    nav a {
      color: white;
      text-decoration: none;
      padding: 14px 20px;
      display: inline-block;
    }
    nav a:hover {
      background: #1abc9c;
    }
    .hero {
      background: url("IMG_9802 (1).jpg") no-repeat center center/cover;
      height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 2rem;
      font-weight: bold;
    }
    .container {
      padding: 30px;
      text-align: center;
    }
    .btn {
      display: inline-block;
      margin: 10px;
      padding: 12px 20px;
      background: #1abc9c;
      color: white;
      border-radius: 6px;
      text-decoration: none;
      font-weight: bold;
    }
    .btn:hover {
      background: #16a085;
    }
  </style>
</head>
<body>

  <header>
    <h1>🌟 The Grand Retreat & Dining 🌟</h1>
    <p>Luxury Rooms & Exquisite Dining</p>
  </header>

  <nav>
    <a href="index.php">Home</a>
    <a href="hotel.php">Our Dishes</a>
    <a href="rooms.php">Book a Room</a>
    <a href="contact.php">Contact</a>
  </nav>

  <div class="hero">
    Welcome to The Grand Retreat
  </div>

  <div class="container">
    <h2>Choose Your Experience</h2>
    <p>experience luxury like never before</p>
    <p>Indulge in our exquisite dining and luxurious rooms</p>
    <a href="hotel.php" class="btn">🍽️ View Menu & Order</a>
    <a href="rooms.php" class="btn">🏨 Book a Room</a>
    <br><br>
    <a href="admin_login.php" class="btn" style="background:#e74c3c;">🔑 Employer Login</a>
  </div>

</body>
</html>
