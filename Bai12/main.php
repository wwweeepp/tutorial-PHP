<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sim lục quý</title>
</head>
<body>
    <form method="post">
        Nhập số điện thoại: <input type="number" name="sdt" required><br><br>
        <input type="submit" value="Check">
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $sdt = $_POST['sdt'];

            $sdt = str_replace(".", "", $sdt);

            if (strlen($sdt) != 10 || !is_numeric($sdt)){
                echo "<br>Số điện thoại không hợp lệ";
            }else{
                $duoi = substr($sdt, -6);

                $kitudau = $duoi[0];
                $lalucquy = true;

                for ($i = 1; $i < 6; $i++) {
                    if ($duoi[$i] != $kitudau) {
                        $lalucquy = false;
                        break;
                    }
                }

                echo "<br>Số điện thoại: $sdt<br>";
                if ($lalucquy) {
                    echo "Đây là sim lục quý!";
                } else {
                    echo "Không phải sim lục quý.";
                }                  
            }
        }

    ?>
</body>
</html>