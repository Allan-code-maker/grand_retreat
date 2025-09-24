<?php
// rooms.php

// --- Connect to database ---
include 'config.php';

// --- Handle booking submission ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $room = $_POST['room'];
    $nights = (int) $_POST['nights'];
    $customer_name = $_POST['customer_name'];

    $sql = "INSERT INTO bookings (room, nights, customer_name) 
            VALUES ('$room', $nights, '$customer_name')";

    if ($conn->query($sql) === TRUE) {
        $message = "✅ Booking confirmed for $room ($nights night(s))!";
    } else {
        $message = "❌ Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>The Grand Retreat | Room Booking</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f9f9f9; margin: 0; padding: 20px; }
    h1 { text-align: center; }
    .rooms { display: flex; gap: 20px; flex-wrap: wrap; justify-content: center; }
    .room { background: #fff; padding: 15px; border-radius: 10px; width: 250px; text-align: center; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    img { width: 220px; height: 150px; object-fit: cover; border-radius: 8px; }
    form { margin-top: 10px; }
    input { padding: 5px; margin: 5px 0; width: 100%; }
    button { background: #28a745; color: #fff; border: none; padding: 8px; cursor: pointer; border-radius: 5px; }
    button:hover { background: #1e7e34; }
    .msg { text-align: center; color: green; margin: 10px 0; font-weight: bold; }
  </style>
</head>
<body>
  <h1>🏨 Welcome to The Grand Retreat Rooms</h1>

  <?php if (!empty($message)) echo "<p class='msg'>$message</p>"; ?>

  <div class="rooms">
    <!-- Single Room -->
    <div class="room">
      <img src="single.png" alt="Single Room">
      <h3>Single Room</h3>
      <p>$50 per night</p>
      <form method="POST">
        <input type="hidden" name="room" value="Single Room">
        <label>Your Name:</label>
        <input type="text" name="customer_name" required>
        <label>Nights:</label>
        <input type="number" name="nights" value="1" min="1" required>
        <button type="submit">Book Now</button>
      </form>
    </div>

    <!-- Double Room -->
    <div class="room">
      <img src="double.png" alt="Double Room">
      <h3>Double Room</h3>
      <p>$90 per night</p>
      <form method="POST">
        <input type="hidden" name="room" value="Double Room">
        <label>Your Name:</label>
        <input type="text" name="customer_name" required>
        <label>Nights:</label>
        <input type="number" name="nights" value="1" min="1" required>
        <button type="submit">Book Now</button>
      </form>
    </div>

    <!-- Deluxe Room -->
    <div class="room">
      <img src="deluxe.png" alt="Deluxe Room">
      <h3>Deluxe Room</h3>
      <p>$150 per night</p>
      <form method="POST">
        <input type="hidden" name="room" value="Deluxe Room">
        <label>Your Name:</label>
        <input type="text" name="customer_name" required>
        <label>Nights:</label>
        <input type="number" name="nights" value="1" min="1" required>
        <button type="submit">Book Now</button>
      </form>
    </div>
  </div>
</body>
</html>
