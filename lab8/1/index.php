<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab8.1</title>
</head>
<body>
<?php
    $val = "";
    if(isset($_GET['submit'])){
      $cur1 = $_GET['currency1'];
      $cur2 = $_GET['currency2'];
      $val = $_GET['val1'];
      $ans = 0;

      $url = "http://10.0.15.12/lab8/restapis/currencyrate";    
      $response = file_get_contents($url);
      $result = json_decode($response);

      $ans = $val/$result->rates->$cur1;
      $ans = $ans * $result->rates->$cur2;

    }
    
  ?>
  <h3>Currency Converter</h3>
  <form action="">
    <div>
      <label for="currency1">From:</label>
      <select name="currency1" id="currency1" >
        <option value="THB">THB</option>
        <option value="JPY">JPY</option>
        <option value="CNY">CNY</option>
        <option value="SGD">SGD</option>
        <option value="USD">USD</option>
      </select>
      <input type="text" id="val1" name="val1" value="<?php echo $val?>">
    </div>
    <div>
      <label for="currency2">To:</label>
      <select name="currency2" id="currency2" value="123">
        <option value="THB">THB</option>
        <option value="JPY">JPY</option>
        <option value="CNY">CNY</option>
        <option value="SGD">SGD</option>
        <option value="USD">USD</option>
      </select>
      <input type="number" id="val2" name="val2" readonly value="<?php echo number_format($ans, 2)?>">
    </div>
    <input id="submit" name="submit" type="submit" value="Convert">
  </form>

    <!-- {"rates":
            {
                "CAD":1.4486,
                "HKD":8.6994,
                "ISK":138.1,
                "PHP":56.623,
                "DKK":7.4706,
                "HUF":328.78,
                "CZK":25.543,
                "AUD":1.6186,
                "RON":4.7559,
                "SEK":10.7923,
                "IDR":15590.95,
                "INR":78.615,
                "BRL":4.43,
                "RUB":70.9154,
                "HRK":7.4568,
                "JPY":120.88,
                "THB":33.524,
                "CHF":1.1041,
                "SGD":1.5121,
                "PLN":4.2693,
                "BGN":1.9558,
                "TRY":6.3596,
                "CNY":7.8392,
                "NOK":10.2748,
                "NZD":1.7481,
                "ZAR":16.2241,
                "USD":1.1095,
                "MXN":21.1812,
                "ILS":3.9162,
                "GBP":0.86328,
                "KRW":1295.86,
                "MYR":4.641
            },
        "base":"EUR",
        "date":"2019-10-29"
    } -->
</body>
</html>