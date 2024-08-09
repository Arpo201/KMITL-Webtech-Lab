<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lab8.4</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
  </head>
  <body style="font-family: 'Lato', sans-serif">
    <div class="container mt-3">
      <?php
        $url = "http://10.0.15.12/lab8/restapis/10countries";
        $response = file_get_contents($url);
        $result = json_decode($response);

        foreach($result as $country){
          echo "<div class='card mb-2'>";
          echo "<div class='row card-body'>";
          echo "<div class='col'>";

          echo "<p class='card-text'>";
          echo "<b>Name: </b>" . $country->name . "<br />";
          echo "<b>Capital: </b>" . $country->capital . "<br />";
          echo "<b>Population: </b>" . $country->population . "<br />";
          echo "<b>Region: </b>" . $country->region . "<br />";
          echo "<b>Location: </b>" . $country->latlng[0] . " " . $country->latlng[1] . "<br />";
          echo "<b>Borders: </b>";
          for ($borAt = 0; $borAt < count($country->borders); $borAt++) {
            echo $country->borders[$borAt] . " ";
          }
          echo "<br />";
          echo "</p></div><div class='col-md-5'>";
          echo "<img class='card-img' src='" . $country->flag . "'/>";
          echo "</div></div></div>";
        }
      ?>
    </div>

    
  </body>
</html>
