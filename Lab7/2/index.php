<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab7.2</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Nunito', sans-serif;">
    <div class="container"><div class="row"><div class="col">
        <table class="table table-bordered text-center mt-5">
            <thead><tr>
                <th>Su</th>
                <th>Mo</th>
                <th>Tu</th>
                <th>We</th>
                <th>Th</th>
                <th>Fr</th>
                <th>Sa</th>
            </tr></thead>
            <?php
                $date = -2;
                for($i = 0; $i < 5; $i++){
                    echo "<tr>";
                    for($j = 0; $j < 7; $j++){
                        if($date < 1 || $date > 30){
                            echo "<td></td>";
                            $date++;
                        }else{
                            echo "<td style='width: calc(100%/7); padding: 2em 0;'>" . $date . "</td>";
                            $date++;
                        }
                    }
                    echo "</tr>";
                } 
            ?>
        </table>
    </div></div></div>
</body>
</html>