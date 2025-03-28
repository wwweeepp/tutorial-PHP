<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thu nhập lập trình viên</title>
</head>
<body>
   <form method="post">
        Số dòng code: <input type="number" name="sodongcode"min="0" required><br><br>
        Số giờ làm: <input type="number" name="sogiocode" step="0.1" min="0" max="24" required><br><br>
        <input type="submit" value="Thực nhận"><br><br>
   </form> 

   <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $sodongcode = $_POST["sodongcode"];
            $sogiocode = $_POST["sogiocode"];
            
            $tienmoigiocode = 20;
            $luong = $tienmoigiocode * $sogiocode;

            if ($sodongcode < 10) {
                $reviewcode = 1;
            } elseif ($sodongcode <= 20) {
                $reviewcode = 2;
            } else {
                $reviewcode = 5;
            }

            $thucnhan = $luong - $reviewcode;

            echo "Kết quả:<br>";
            echo "Số dòng code: $sodongcode<br>";
            echo "Số giờ làm: $sogiocode<br>";
            echo "Thu nhập thực lãnh: $thucnhan$<br>";

            echo "Quy đổi: 1$ = 25.000 VND <br>";
            $thucnhantienviet = $thucnhan * 25000;
            $thucnhantienviet = number_format($thucnhantienviet, 0, ',', '.');
            //echo number_format("1000000")."<br>";
            echo "Thực nhận quy đổi ra tiền việt: $thucnhantienviet VND";
        }   
   ?>
</body>
</html>