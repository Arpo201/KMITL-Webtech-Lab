<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab8.2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
    *{
        font-family: 'Roboto', sans-serif;
    }
    body{
        background: #EEE;
    }
    .container{
        max-width: 800px;
    }
</style>
<body>
<?php
    $url = "http://10.0.15.12/lab8/restapis/movies90";    
    $response = file_get_contents($url);
    $result = json_decode($response);

    $num = 1;
    echo "<div class='container'>";
    echo "<h3 class='text-center mt-3'><b>Movies</b></h3>";
    foreach($result as $movie){
        echo "<div class='row'>";
        echo "<div class='col'>";

        echo "<div class='card mb-3 bg-light'>";
        echo "<div class='card-header text-white bg-dark'><b>$num. $movie->title</b> ($movie->year)</div>";
        echo "<div class='card-body'>";

        echo "<div class='row'>";
            echo "<div class='col-6'>";
                echo "<p class='text'>";
                echo "<b>Cast: </b><br>";
                foreach($movie->cast as $cast){
                    echo "- $cast <br>";
                }
                echo "</p>";
            echo "</div>";
            echo "<div class='col-6'>";
                echo "<p class='text'>";
                echo "<b>Genres: </b><br>";
                foreach($movie->genres as $genres){
                    echo "- $genres <br>";
                }
                echo "</p>";
            echo "</div>";
        echo "</div>";

        echo "</div>";
        echo "</div>";

        echo "</div>";
        echo "</div>";
        $num++;
    }
    echo "</div>";
  ?>
</body>
</html>