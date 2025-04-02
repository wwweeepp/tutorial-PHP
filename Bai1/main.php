<!DOCTYPE html>
<html>
<head>
    <title>Thay thế phần tử</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function clearForm() {
            document.getElementById("replaceForm").reset();
            window.location.href = window.location.pathname;
        }
    </script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $error = array();
        $data = array();
        $original_array = array();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data['elements'] = isset($_POST['elements']) ? $_POST['elements'] : '';
            $data['old_value'] = isset($_POST['old_value']) ? $_POST['old_value'] : '';
            $data['new_value'] = isset($_POST['new_value']) ? $_POST['new_value'] : '';

            // bắt đầu và kết thúc kiểm tra dữ liệu
            if (!preg_match('/^[a-zA-Z0-9,\s]+$/', $data['elements'])) {
                $error['elements'] = "Nhập sai, chỉ được sử dụng dấu ',' và khoảng trắng";
            }
            if (empty($data['elements'])) {
                $error['elements'] = "Bạn chưa nhập các phần tử";
            }
            if (empty($data['old_value'])) {
                $error['old_value'] = "Bạn chưa nhập giá trị cần thay thế";
            }
            if (empty($data['new_value'])) {
                $error['new_value'] = "Bạn chưa nhập giá trị thay thế";
            }
            
            if (!$error) {
                $original_array = explode(",", $data['elements']);
                foreach ($original_array as &$value) {
                    $value = trim($value);
                }
                unset($value);

                $replaced_array = $original_array;
                foreach ($replaced_array as &$element) {
                    if ($element == trim($data['old_value'])) {
                        $element = $data['new_value'];
                    }
                }
                unset($element);

                echo "Mảng ban đầu: " . implode(", ", $original_array) . "<br/>";
                echo "Mảng sau khi thay thế: " . implode(", ", $replaced_array);
            } else {
                echo "Dữ liệu bị lỗi, không thể thay thế";
            }
        }
    ?>
    
    <form method="post" id="replaceForm">
        <table cellspacing="0" cellpadding="5">

            <tr>
                <td>Nhập các phần tử</td>
                <td>
                    <input type="text" name="elements" value="<?php echo isset($data['elements']) ? $data['elements'] : ''; ?>"/>
                    <?php echo isset($error['elements']) ? $error['elements'] : ''; ?>
                </td>
            </tr>
            <tr>
                <td>Giá trị cần thay thế</td>
                <td>
                    <input type="text" name="old_value" value="<?php echo isset($data['old_value']) ? $data['old_value'] : ''; ?>"/>
                    <?php echo isset($error['old_value']) ? $error['old_value'] : ''; ?>
                </td>
            </tr>
            <tr>
                <td>Giá trị thay thế</td>
                <td>
                    <input type="text" name="new_value" value="<?php echo isset($data['new_value']) ? $data['new_value'] : ''; ?>"/>
                    <?php echo isset($error['new_value']) ? $error['new_value'] : ''; ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Thực hiện thay thế"/>
                    <button type="button" onclick="clearForm()">Xóa Form</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
