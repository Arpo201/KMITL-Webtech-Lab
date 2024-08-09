<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lab7.3</title>
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
            $num = 0;
            $id = $_POST['ID'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $address = $_POST['address'];
            $district = $_POST['district'];
            $province = $_POST['province'];
            $postalCode = $_POST['postal-code'];
            $phoneNum = $_POST['phone-number'];
            $v1 = strlen($id) >= 5 && strlen($fname) >= 5 && strlen($lname) >= 5 && strlen($address) >= 5 && strlen($district) >= 5 && strlen($province) >= 5 && strlen($postalCode) >= 5 && strlen($phoneNum) >= 5;
            if(!$v1){
                echo "<h4 class='text-danger text-center'>กรุณากรอกฟอร์มให้สมบูรณ์ก่อนการทำรายการ</h4>";
            }else{
                $num++;
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

            echo "<div class='card bg-light mb-3'>";//card
            echo "<div class='card-header'>" . $fname . " " . $lname . "</div>";
            echo "<div class='card-body'>";//body
            echo "<h5 class='card-title'><b>ID: </b>" . $id . "</h5>";
            echo "<p class='card-text'>";
            echo "<b>ที่อยู่: </b>" . $address . "<br>";
            echo "<b>อำเภอ/เขต: </b>" . $district . " ";
            echo "<b>จังหวัด: </b>" . $province . "<br>";
            echo "<b>รหัสไปรษณีย์: </b>" . $postalCode . "<br>";
            echo "<b>เบอร์โทรศัพท์: </b>" . $phoneNum . "<br>";
            echo "</p>";
            echo "</div>";//body
            echo "</div>";//card

            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    ?>
  </body>
</html>
