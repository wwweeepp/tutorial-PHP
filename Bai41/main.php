<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function withdrawCash($withdrawAmount, $num500Bills, $num200Bills, $num100Bills, $num50Bills) {
        if ($withdrawAmount % 50 != 0) {
            return "Số tiền rút phải là bội số của 50 !";
        }

        $totalATMBalance = $num500Bills * 500 + $num200Bills * 200 + $num100Bills * 100 + $num50Bills * 50;
        if ($withdrawAmount > $totalATMBalance) {
            return "Số tiền rút lớn hơn số tiền ATM đang có !";
        }

        $withdrawalDetails = [];
        $denominations = [500, 200, 100, 50];
        $billCounts = [&$num500Bills, &$num200Bills, &$num100Bills, &$num50Bills];

        for ($i = 0; $i < count($denominations); $i++) {
            if ($withdrawAmount == 0) break;

            $billsToWithdraw = min(intval($withdrawAmount / $denominations[$i]), $billCounts[$i]);
            if ($billsToWithdraw > 0) {
                $withdrawalDetails[] = "{$denominations[$i]}k - {$billsToWithdraw} tờ";
                $withdrawAmount -= $billsToWithdraw * $denominations[$i];
            }
        }

        if ($withdrawAmount > 0) {
            return "Không đủ tiền để rút !";
        }

        return implode(", ", $withdrawalDetails);
    }

    $num500Bills = intval($_POST['num500Bills']);
    $num200Bills = intval($_POST['num200Bills']);
    $num100Bills = intval($_POST['num100Bills']);
    $num50Bills = intval($_POST['num50Bills']);
    $withdrawAmount = intval($_POST['withdrawAmount']);

    $withdrawalResult = withdrawCash($withdrawAmount, $num500Bills, $num200Bills, $num100Bills, $num50Bills);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rút tiền ATM</title>
    <script>
        function clearForm() {
            document.getElementById("replaceForm").reset();
            window.location.href = window.location.pathname;
        }
    </script>
</head>
<body>
    Nhập vào số tiền ATM đang có:
    <form method="post" id="replaceForm">
        Số tờ 500k: <input type="number" name="num500Bills" required><br>
        Số tờ 200k: <input type="number" name="num200Bills" required><br>
        Số tờ 100k: <input type="number" name="num100Bills" required><br>
        Số tờ 50k: <input type="number" name="num50Bills" required><br>
        Nhập vào số tiền bạn muốn rút:
        <input type="number" name="withdrawAmount" required><br>
        <button type="submit">Nhận tiền</button>
        <button type="button" onclick="clearForm()">Xóa Form</button>
    </form>
    
    <?php 
    if (isset($withdrawalResult)) {
        
         echo $withdrawalResult;
     } ?>
</body>
</html>
