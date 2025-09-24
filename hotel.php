<?php
// hotel.php

// --- Connect to database ---
include 'config.php';

// --- Handle order form submission ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dish = $_POST['dish'];
    $quantity = (int) $_POST['quantity'];
    $customer_name = $_POST['customer_name'];

    $sql = "INSERT INTO orders (dish, quantity, customer_name) 
            VALUES ('$dish', $quantity, '$customer_name')";

    if ($conn->query($sql) === TRUE) {
        $message = "✅ Order placed successfully for $quantity x $dish!";
    } else {
        $message = "❌ Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>The Grand Retreat | Hotel Dining</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 20px; }
    h1 { text-align: center; }
    .menu { display: flex; gap: 20px; flex-wrap: wrap; justify-content: center; }
    .dish { background: #fff; padding: 15px; border-radius: 10px; width: 220px; text-align: center; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    img { width: 200px; height: 150px; object-fit: cover; border-radius: 8px; }
    form { margin-top: 10px; }
    input, select { padding: 5px; margin: 5px 0; width: 100%; }
    button { background: #007bff; color: #fff; border: none; padding: 8px; cursor: pointer; border-radius: 5px; }
    button:hover { background: #0056b3; }
    .msg { text-align: center; color: green; margin: 10px 0; font-weight: bold; }
  </style>
</head>
<body>
  <h1>🍽 Welcome to The Grand Retreat Dining</h1>

  <?php if (!empty($message)) echo "<p class='msg'>$message</p>"; ?>

  <div class="menu">
    <!-- Pizza -->
    <div class="dish">
      <img src="pizza.png" alt="Pizza">
      <h3>Pizza</h3>
      <p>$12</p>
      <form method="POST">
        <input type="hidden" name="dish" value="Pizza">
        <label>Your Name:</label>
        <input type="text" name="customer_name" required>
        <label>Quantity:</label>
        <input type="number" name="quantity" value="1" min="1" required>
        <button type="submit">Order</button>
      </form>
    </div>

    <!-- Burger -->
    <div class="dish">
      <img src="burger.png" alt="Burger">
      <h3>Burger</h3>
      <p>$8</p>
      <form method="POST">
        <input type="hidden" name="dish" value="Burger">
        <label>Your Name:</label>
        <input type="text" name="customer_name" required>
        <label>Quantity:</label>
        <input type="number" name="quantity" value="1" min="1" required>
        <button type="submit">Order</button>
      </form>
    </div>

    <!-- Juice -->
    <div class="dish">
      <img src="juice.png" alt="Juice">
      <h3>Fresh Juice</h3>
      <p>$5</p>
      <form method="POST">
        <input type="hidden" name="dish" value="Juice">
        <label>Your Name:</label>
        <input type="text" name="customer_name" required>
        <label>Quantity:</label>
        <input type="number" name="quantity" value="1" min="1" required>
        <button type="submit">Order</button>
      </form>
    </div>
  </div>
</body>
</html>
