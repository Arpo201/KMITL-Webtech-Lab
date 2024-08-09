<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab8.5</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap');
        *{
            font-family: 'Kanit', sans-serif;
        }
        .container{
            max-width: 800px;
        }
    </style>
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col">
                <h2 class="text-center">BMX49 DANCER CONTEST</h2>
                <h6 class="text-center text-info">Voting Score</h6>
                <form class="text-center" action="" method="GET">
                    <select name="number" id="number" class="custom-select w-75">
                        <option selected value="x">Select number</option>
                        <option value="0">1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                        <option value="4">5</option>
                        <option value="5">6</option>
                        <option value="6">7</option>
                        <option value="7">8</option>
                        <option value="8">9</option>
                        <option value="9">10</option>
                    </select>
                    <input class="btn btn-primary" name="submit" type="submit" value="Submit">
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <?php
                        $url = "http://10.0.15.12/lab8/restapis/candidates";
                        $response = file_get_contents($url);
                        $result = json_decode($response);
                        if(isset($_GET['submit'])){
                            $sequence = $_GET['number'];
                            if($sequence != "x"){
                                echo "<div class='card'>";
                                echo "<img class='card-img-top p-2 w-50 m-auto' src='" . $result[$sequence]->img . "'>";
                                echo "<div class='card-body'>";
                                echo "<h4 class='card-title'>" . $result[$sequence]->name . "</h4>";
                                echo "<p class='card-text'>";
                                echo "<h6 class='text-danger'>อันดับ " . $result[$sequence]->no . "</h6>";
                                echo $result[$sequence]->score . " คะแนน";
                                echo "</div>";
                            }
                        }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
