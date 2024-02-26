<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Individuele opdracht - Elise</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
  <h1>Welkom IPMEDT5!</h1>

  <p>times pressed {{$count->times_pressed}}</p>
  <p>led state is {{$led->led_is_on}}</p>
  <a href="toggle_led">KLIK HIER VOOR LED CHANGE</a>
</body>
</html>