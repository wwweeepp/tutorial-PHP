<!DOCTYPE html>
<html>
<head>
    <title>Đổi màu chữ và màu nền</title>
</head>
<body>
    <form method="post">
        Nội dung: 
        <br> <input type="text" name="noidung" value="<?php echo $_POST['noidung'] ?? ''; ?>"> <br><br>
        Màu chữ: 
        <br> <input type="color" name="mauchu"> <br><br> 
        Màu chữ (hex): 
        <br> <input type="text" name="hexchu" placeholder="#rgb" value="<?php echo $_POST['hexchu'] ?? ''; ?>"> <br><br>
        Màu nền: 
        <br> <input type="color" name="maunen"> <br><br>
        Màu nền (hex): 
        <br> <input type="text" name="hexnen" placeholder="#rgb" value="<?php echo $_POST['hexnen'] ?? ''; ?>"> <br><br>
        <input type="submit" value="Xem">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $noidung = $_POST['noidung'];
            $mauchu = !empty($_POST['hexchu']) ? $_POST['hexchu'] : $_POST['mauchu'];
            $maunen = !empty($_POST['hexnen']) ? $_POST['hexnen'] : $_POST['maunen'];

            if($noidung) {}
            echo "<div style='margin-top:20px; padding:10px; color:$mauchu; background-color:$maunen;'>";
            echo "$noidung";
            echo "</div>";
        }
    ?>
</body>
</html>
