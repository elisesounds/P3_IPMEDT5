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
  <h1>Dashboard individuele opdracht IPMEDT5</h1>
  <p>Gemaakt februari 2024</p>
  <article>
    <section>
      <b>Aantal keer knop gedrukt</b>
      <p>{{$count->times_pressed}}</p>
    </section>
    <section>
      <b>Led state is</b>
      <p>{{$led->led_is_on}}</p>
    </section>
    <section>
      <b>Toggle de led</b>
      <p><a class="button-styled" href="toggle_led">TOGGLE</a></p>
    </section>
  </article>
</body>
</html>