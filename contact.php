<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - The Grand Retreat & Dining</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      margin: 0;
      padding: 0;
      background: #f5f5f5;
    }
    header {
      background: #2c3e50;
      color: white;
      padding: 20px;
      text-align: center;
    }
    .container {
      max-width: 800px;
      margin: 40px auto;
      padding: 20px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      color: #1abc9c;
    }
    .info {
      margin: 20px 0;
      text-align: center;
    }
    .info p {
      margin: 8px 0;
      font-size: 1.1rem;
    }
    form {
      margin-top: 20px;
    }
    input, textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 1rem;
    }
    button {
      background: #1abc9c;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      cursor: pointer;
    }
    button:hover {
      background: #16a085;
    }
  </style>
</head>
<body>
  <header>
    <h1>📞 Contact Us</h1>
  </header>

  <div class="container">
    <h2>The Grand Retreat & Dining</h2>
    <div class="info">
      <p>📍 Location: Malaba, Kenya</p>
      <p>📧 Email: emoruallan@gmail.com</p>
      <p>📞 Phone: +254 703630174</p>
      <p>🕒 Open:monday-sunday</p>
    </div>

    <h3>Send us a message</h3>
    <form action="" method="post">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>

</body>
</html>
