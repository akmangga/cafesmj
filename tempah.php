<!DOCTYPE html>
<html lang="ms">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dining Reservation</title>
  <style>
    /* Your existing styles — cleaned and kept */
    body {
      background-color: #FDE09D;
      font-family: Tahoma, sans-serif;
      margin: 0;
      padding: 0;
    }

    .reservation-container h1 {
      background-color: #e68900;
      color: white;
      padding: 15px;
      text-align: center;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .white-box {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      max-width: 600px;
      margin: 0 auto;
    }

    .white-box h2 {
      margin-top: 0;
      color: #333;
      text-align: center;
    }

    .white-box p {
      font-size: 16px;
      color: #555;
      margin-bottom: 20px;
      text-align: center;
    }

    .cafe-image {
      width: 100%;
      max-width: 480px;
      height: auto;
      display: block;
      margin: 0 auto 20px auto;
      border: 2px solid #e68900;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    form label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }

    form input {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    form button {
      background-color: #e68900;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      width: 100%;
    }

    form button:hover {
      background-color: #FFF8E1;
      color: #e68900;
    }

    .back-btn {
      position: absolute;
      top: 67px;
      left: 20px;
      padding: 8px 16px;
      background-color: #FFB300;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 14px;
    }

    .back-btn:hover {
      background-color: #FFF8E1;
      color: #FFB300;
    }

    header {
      padding: 15px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

<header>
  <a href="lamanutama.php">
    <button class="back-btn">⬅ Back</button>
  </a>
</header>

<div class="reservation-container">
  <h1>Dining Reservation</h1>
  <div class="white-box">
    <h2>Welcome To Our Cafe</h2>
    <img src="img/interior2.jpeg" alt="Cafe Interior" class="cafe-image">
    <p>
      Enjoy a calm and cozy atmosphere at our café, designed with a traditional touch and natural elements. This warm interior is perfect for relaxing with friends, family, or spending personal time while savoring delicious meals.
    </p>

    <form method="post">
      <label>Name:</label>
      <input type="text" name="Name" required>

      <label>Number of People:</label>
      <input type="number" name="bilangan" required>

      <label>Date:</label>
      <input type="text" name="Date" placeholder="dd/mm/yyyy" required>

      <label>Time:</label>
      <input type="text" name="Time" placeholder="--:--" required>

      <button type="submit" name="submit">Booking Now</button>
    </form>
  </div>
</div>

</body>
</html>