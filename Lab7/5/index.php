<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab7.5</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Nunito', sans-serif;">
    <?php
        echo "<div class='container mt-4'>";
        echo "<div class='row'>";
        echo "<div class='col'>";
        echo "<table class='table table-bordered text-center'>";
        for($i = 0; $i <= 12; $i++){
            echo "<tr>";
            for($j = 0; $j <= 12; $j++){
                if($i == 0){
                    if($j == 0){
                        echo "<th class='bg-dark text-light'>X</th>";
                    }else{
                        echo "<th class='bg-dark text-light'>" . $j . "</th>";
                    }
                }else if($j == 0){
                    echo "<th  class='bg-dark text-light'>" . $i . "</th>";
                }else{
                    echo "<td>" . ($i*$j) . "</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    ?>
</body>
</html>