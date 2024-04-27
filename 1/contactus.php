<?php
    include_once 'header.php';
?>


<style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
    }

    h1 {
      text-align: center;
    }

    .text-us {
      text-align: center;
      margin-top: 30px;
    }

    .text-us label {
      display: block;
      margin-bottom: 10px;
    }

    .text-us input[type="text"],
    .text-us textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .text-us button {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      border: none;
      border-radius: 3px;
      background-color: #4CAF50;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
    }

    .text-us button:hover {
      background-color: #45a049;
    }
</style>
</head>
<body>
<title>Contact Us</title>
  <div class="container">
    <h1>Contact Us</h1>
    <div class="text-us">
      <label for="name">Your Name:</label>
      <input type="text" id="name" name="name" placeholder="Your name" required>

      <label for="email">Your Email:</label>
      <input type="text" id="email" name="email" placeholder="Your email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="4" placeholder="Enter your message" required></textarea>

      <button type="submit">Send Message</button>
    </div>
  </div>
</body>





<?php
    include_once 'footer.php';
?>