<!DOCTYPE html>
<html>
<head>
    <title>Thay thế phần tử</title>
    <script>
        function clearForm() {
            document.getElementById("replaceForm").reset();
            window.location.href = window.location.pathname;
        }
    </script>
</head>
<body>
    <form method="post" id="replaceForm">
        Nhập các phần tử:
        <br> <input type="text" name="elements" value="<?php echo $_POST['elements'] ?? ''; ?>"> <br><br>
        Giá trị cần thay thế:
        <br> <input type="text" name="old_value" value="<?php echo $_POST['old_value'] ?? ''; ?>"> <br><br>
        Giá trị thay thế:
        <br> <input type="text" name="new_value" value="<?php echo $_POST['new_value'] ?? ''; ?>"> <br><br>
        <input type="submit" value="Thực hiện thay thế"/>
        <button type="button" onclick="clearForm()">Xóa Form</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //Nếu có giá trị thì lấy từ '' còn nếu rỗng hoặc không có thì trả về ??
            $string = $_POST['elements'] ?? '';
            $old_value = $_POST['old_value'] ?? '';
            $new_value = $_POST['new_value'] ?? '';

            if (!preg_match('/^[a-zA-Z0-9,\s]+$/', $string)) {
            } else if (empty($string)) {
                echo "Bạn chưa nhập các phần tử <br/>";
            } else if (empty($old_value)) {
                echo "Bạn chưa nhập giá trị cần thay thế <br/>";
            } else if (empty($new_value)) {
                echo 'Bạn chưa nhập giá trị thay thế';
            } else {
                $original_array = splitString($string);
                $replaced_array = replace($original_array, $old_value, $new_value);

                echo "Mảng ban đầu: " . joinArray($original_array) . "<br/>";
                echo "Mảng sau khi thay thế: " . joinArray($replaced_array);
            }
        }

        function splitString($string) {
            return explode(",", $string);
        }

        function joinArray($array) {
            return implode(", ", $array);
        }

        function replace($array, $old_value, $new_value) {
            foreach ($array as &$element) {
                if (trim($element) == trim($old_value)) {
                    $element = $new_value;
                }
            }
            return $array;
        }
    ?>
</body>
</html>
