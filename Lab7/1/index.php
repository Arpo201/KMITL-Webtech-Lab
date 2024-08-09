<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab7.1</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Kanit', sans-serif;">
    <div class="container mt-4">
      <form id="showmsg" class="form-inline" action="" method="GET">
        <label for="">
          <h4>กรอกสูตรคูณ: </h4>
          <input
            type="text"
            id="invalue"
            class="form-control"
            name="invalue"
            value=""
          />
          <input
          class="btn btn-primary"
          type="submit"
          id="submit"
          value="Submit"
        />
        </label>
      </form>
    
<?php
    if (isset($_GET['invalue'])){
        $number = $_GET['invalue'];
        $v = intval($number);
        echo "<div class='row'><div class='col-4'><h4>ตารางสูตรคูณแม่ " . $v . "</h4><table class='table border-0'>";
        for ($i = 1; $i <= 12; $i++) {
            echo "<tr class='border-bottom'><td>";
            echo $i . " x " . $v . " = " . ($i * $v);
            echo "<tr></td>";
        } 
        echo "</table></div></div>";
    }
?>
</div>
</body>
</html>