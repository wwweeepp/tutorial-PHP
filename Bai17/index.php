<?php
    class Vemaybay {
        public $tenchuyenbay;
        public $ngaybay;
        public $giave;
    }

    class Nguoi {
        public $hoten;
        public $gioitinh;
        public $tuoi;
    }

    class Hanhkhach extends Nguoi{
        public $vemaybay;
        public $soluongve;
        public $tongtien;
    }

    $ve = new Vemaybay();
    $ve->tenchuyenbay = "VN123";
    $ve->ngaybay = "2025-04-01";
    $ve->giave = 1500000;

    $hanhkhach = new Hanhkhach();
    $hanhkhach->hoten = "Nguyen Van A";
    $hanhkhach->gioitinh = "Nam";
    $hanhkhach->tuoi = 30;
    $hanhkhach->vemaybay = $ve;
    $hanhkhach->soluongve = 2;
    $hanhkhach->tongtien = $hanhkhach->soluongve * $ve->giave;

    echo "Thông tin hành khách:<br>";
    echo "Họ tên: " . $hanhkhach->hoten . "<br>";
    echo "Giới tính: " . $hanhkhach->gioitinh . "<br>";
    echo "Tuổi: " . $hanhkhach->tuoi . "<br>";
    echo "Thông tin vé máy bay:<br>";
    echo "Tên chuyến bay: " . $hanhkhach->vemaybay->tenchuyenbay . "<br>";
    echo "Ngày bay: " . $hanhkhach->vemaybay->ngaybay . "<br>";
    echo "Giá vé: " . number_format($hanhkhach->vemaybay->giave, 0, ',', '.') . " VND<br>";
    echo "Số lượng vé: " . $hanhkhach->soluongve . "<br>";
    echo "Tổng tiền: " . number_format($hanhkhach->tongtien, 0, ',', '.') . " VND<br>";
?>
