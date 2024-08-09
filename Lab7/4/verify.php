<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lab7.4</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "Sarabun", sans-serif;
        background: #444;
      }
      .container {
        max-width: 800px;
        border-radius: 8px;
        background: white;
      }
    </style>
  </head>
  <body>
    <div class="container mt-3 pt-3">
      <div class="row">
        <div class="col mb-3">
          <h4 class="text-center">ฟอร์มสำหรับกรอกข้อมูล</h4>
          <?php
            $info = array();
            $id = $_POST['ID'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $address = $_POST['address'];
            $district = $_POST['district'];
            $province = $_POST['province'];
            $postalCode = $_POST['postal-code'];
            $phoneNum = $_POST['phone-number'];
            $v1 = strlen($id)>= 5 && strlen($fname) >= 5 && strlen($lname) >= 5 && strlen($address) >= 5 && strlen($district) >= 5 && strlen($province) >= 5 && strlen($postalCode) >= 5 && strlen($phoneNum) >= 5;
            if(!$v1){
                echo "<h4 class='text-danger text-center'>กรุณากรอกฟอร์มให้สมบูรณ์ก่อนทำรายการ</h4>";
            }else{
                $info[$id] = array($fname, $lname, $address, $district, $province, $postalCode, $phoneNum);
            }
          ?>
          <form id="data-form" action="verify.php" method="POST">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"
                  >หมายเลขบัตรประชาชน</span
                >
              </div>
              <input
                id="ID"
                name="ID"
                type="text"
                class="form-control"
                value=""
              />
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text pr-5" id="basic-addon1"
                  >ชื่อ</span
                >
              </div>
              <input id="fname" name="fname" type="text" class="form-control" />
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">นามสกุล</span>
              </div>
              <input id="lname" name="lname" type="text" class="form-control" />
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text pr-3" id="basic-addon1"
                  >ที่อยู่</span
                >
              </div>
              <input
                id="address"
                name="address"
                type="text"
                class="form-control"
              />
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"
                  >อำเภอ/เขต</span
                >
              </div>
              <input
                id="district"
                name="district"
                type="text"
                class="form-control"
              />
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text pr-4" id="basic-addon1"
                  >จังหวัด</span
                >
              </div>
              <input
                id="province"
                name="province"
                type="text"
                class="form-control"
              />
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"
                  >รหัสไปรษณีย์</span
                >
              </div>
              <input
                id="postal-code"
                name="postal-code"
                type="text"
                class="form-control"
              />
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text pr-2" id="basic-addon1"
                  >เบอร์โทรศัพท์</span
                >
              </div>
              <input
                id="phone-number"
                name="phone-number"
                type="text"
                class="form-control"
              />
            </div>
            <input class="btn btn-primary w-100" type="submit" value="ยืนยัน" />
          </form>
        </div>
      </div>
    </div>
    <?php
        if($v1){
            echo "<div class='container mt-4 pt-4 pb-4'>";
            echo "<div class='row'>";
            echo "<div class='col'>";

            //$info[$id] = array($fname 0, $lname 1, $address 2, $district 3, $province 4, $postalCode 5, $phoneNum 6);
            echo "<table class='table'>";
            echo "<thead class='thead-dark text-center'>";
            echo "<th style='width: 20%;'>เลขประจำตัว</th>";
            echo "<th style='width: 20%;'>ชื่อ</th>";
            echo "<th style='width: 20%;'>นามสกุล</th>";
            echo "<th style='width: 40%;'>ที่อยู่</th>";
            foreach($info as $key => $val){
              echo "<tr>";
              echo "<td style='width: 20%;'>".$key."</td>";
              echo "<td style='width: 20%;'>".$val[0]."</td>";
              echo "<td style='width: 20%;'>".$val[1]."</td>";
              echo "<td style='width: 40%; text-align: left;'>".$val[2]."<br>".$val[3]." ".$val[4]." ".$val[5]."<br>โทร ".$val[6]."</td>";
              echo "</tr>";
            }
            echo "</table'>";
            echo "</thead";

            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    ?>
  </body>
</html>
