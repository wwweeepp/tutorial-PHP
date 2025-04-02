<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm thứ trong tuần</title>
    <script>
        function clearForm() {
            document.getElementById("replaceForm").reset();
            window.location.href = window.location.pathname;
        }
    </script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" id = replaceForm>
        <table cellspacing="0" cellpadding="5">
            <tr>
                <td>Ngày:</td>
                <td>
                    <input type="number" name="day" min="1" max="31">
                </td>
            </tr>
            <tr>
                <td>Tháng:</td>
                <td>
                    <input type="number" name="month" min="1" max="12">
                </td>
            </tr>
            <tr>
                <td>Năm:</td>
                <td>
                    <input type="number" name="year" min="1900">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Xem">
                    <button type="button" onclick="clearForm()">Xóa Form</button>
                </td>
            </tr>
        </table>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $Day = isset($_POST['day']) ? $_POST['day'] : '';
            $Month = isset($_POST['month']) ? $_POST['month'] : '';
            $Year = isset($_POST['year']) ? $_POST['year'] : '';
            


            if(checkdate($Month, $Day, $Year)){
                $Day = "$Year-$Month-$Day";
                $Time = strtotime($Day);
                $Thu = date('l', $Time);

                echo "$Day/$Month/$Year is $Thu";
            } else {
                echo "If you try February 29 of a non-leap year, it will show this line";
            }
        }
    ?>
</body>
</html>