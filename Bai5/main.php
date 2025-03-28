<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm thứ trong tuần</title>
</head>
<body>
    <form method="post">
        Day: 
        <br> <input type="number" name="day" min="1" max="31" required> <br><br>
        Month: 
        <br> <input type="number" name="month" min="1" max="12" required> <br><br>
        Year: 
        <br> <input type="number" name="year" min="1900" required> <br><br>
        <input type="submit" value="Xem">
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $Day = $_POST['day'];
            $Month = $_POST['month'];
            $Year = $_POST['year'];
        
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