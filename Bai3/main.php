<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi màu chữ và màu nền</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function clearForm() {
            document.getElementById("replaceForm").reset();
            window.location.href = window.location.pathname;
        }
    </script>
</head>
<body>
    <form method="post" id="replaceForm">
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
        <button type="button" onclick="clearForm()">Xóa</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $noidung = isset($_POST['noidung']) ? $_POST['noidung'] : '';
            $mauchu = !empty($_POST['hexchu']) ? $_POST['hexchu'] : $_POST['mauchu'];
            $maunen = !empty($_POST['hexnen']) ? $_POST['hexnen'] : $_POST['maunen'];

            if ($noidung == null) {
                echo "Vui lòng nhập nội dung";
            } else {
                echo "<div style='margin-top:20px; padding:10px; color:$mauchu; background-color:$maunen;'>";
                echo "$noidung";
                echo "</div>";
            }
            
        }
    ?>
</body>
</html>
