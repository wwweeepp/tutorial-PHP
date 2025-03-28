<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả thi đại học</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        Toán: <input type="number" name="Math" step="0.01" min="0" max="10" value="<?php echo isset($_POST['Math']) ? $_POST['Math'] : ''; ?>"><br><br>
        Lý: <input type="number" name="Physics" step="0.01" min="0" max="10" value="<?php echo isset($_POST['Physics']) ? $_POST['Physics'] : ''; ?>"><br><br>
        Hóa: <input type="number" name="Chemistry" step="0.01" min="0" max="10" value="<?php echo isset($_POST['Chemistry']) ? $_POST['Chemistry'] : ''; ?>"><br><br>
        Điểm chuẩn: <input type="number" name="admissionScore" step="0.1" min="0" max="30" value="<?php echo isset($_POST['admissionScore']) ? $_POST['admissionScore'] : ''; ?>"><br><br>
        Điểm cộng thêm: <input type="number" name="bonus" step="0.01" min="0" max="3" value="<?php echo isset($_POST['bonus']) ? $_POST['bonus'] : ''; ?>"><br><br>
        <input type="submit" value="Xem kết quả">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST['Math']) && !empty($_POST['Physics']) && !empty($_POST['Chemistry']) && !empty($_POST['admissionScore'])) {
                $Math = floatval($_POST['Math']);
                $Physics = floatval($_POST['Physics']);
                $Chemistry = floatval($_POST['Chemistry']);
                $admissionScore = floatval($_POST['admissionScore']);
                $bonus = isset($_POST['bonus']) && $_POST['bonus'] !== '' ? floatval($_POST['bonus']) : 0;

                $Result = $Math + $Physics + $Chemistry + $bonus;

                echo "Tổng điểm: $Result <br>";
                echo "Kết quả: ";

                if ($Math > 0 && $Physics > 0 && $Chemistry > 0 && $Result >= $admissionScore) {
                    echo "Đậu";
                } else {
                    echo "Rớt";
                }
            } else {
                echo "Vui lòng nhập đầy đủ điểm số!";
            }
        }
    ?>
</body>
</html>
