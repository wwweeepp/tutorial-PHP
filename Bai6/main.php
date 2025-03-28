<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tính ngày trong tháng</title>
</head>
<body>
    <form method="post">
        Tháng: <input type="number" name="month" min="1" max="12" required><br><br>
        Năm: <input type="number" name="year" min="1900" required><br><br>
        <input type="submit" value="Tính">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Month = $_POST['month'];
            $Year = $_POST['year'];

            $Day = countTheDays($Month, $Year);
            echo "Tháng $Month năm $Year có $Day ngày";   
        }

        function countTheDays($Month, $Year) {
            switch ($Month) {
                case 1: 
                    return 31;  
                    break;

                case 2:
                    if (($Year % 4 == 0 && $Year % 100 != 0) || ($Year % 400 == 0)) {
                        return 29;
                    } else {
                        return 28;
                    }
                    break;

                case 3: 
                    return 31;
                    break;

                case 4:
                    return 30;
                    break;

                case 5: 
                    return 31;
                    break;

                case 6:
                    return 30;
                    break;

                case 7: 
                    return 31;
                    break;

                case 8: 
                    return 31;
                    break;

                case 9: 
                    return 30;
                    break;

                case 10: 
                    return 31;
                    break;

                case 11:
                    return 30;
                    break;

                case 12:
                    return 31;
                    break;

                default:
                    echo "Tháng sai";
                    exit;
            }
        }
    ?>
</body>
</html>
