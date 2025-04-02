<?php
//câu 18
    $a = 5;
    $b = 12;
    $c = 10;
    $d = 7;
    $e = ($a * $b) + $c * $d / $a;
    print($e);
    // 74
?>
<br>
<?php
//câu 19
for ($x = 1; $x <= 2; $x++) {
    for ($y = 1; $y <= 3; $y++) {

        if ($x == $y) continue;
        print("x= $x y= $y");
    }
}
//x = 1, y = 2, x = 1, y = 3 
//x = 2, y = 1, x = 2, y = 3
?>
<br>
<?php
//câu 20
    $x = 25;
    while($x < 10){
        $x--;
    }
    print($x);
    //25
?>
<br>
<?php
    //câu 21
    switch(1){
        case 1:
            print("BookDetails");
            
        case 2:
            print("BookAuthor");
            
        default:
            print("MissingBook");
    }
    //BookDetailsBookAuthorMissingBook
?>
<br>
<?php
//câu 22
    function modvalue() {
        $a = 20;
        $b = 4;
        $c = $a % $b;
        print($c);
    }
    modvalue();
   //0
?>
<br>
<?php
//câu 23
    function b($a = 4) {
        $a = $a/2;
        return $a;
    }
    $a = 10;
    b($a);
    echo $a;
//10
?>
<br>
<?php
    //câu 24
    $a;
    for ($a = 1; $a <= 9; $a++) {
        if ($a == 5) continue;
        print($a);
    }
    //12346789
?>
<br>
<?php
//câu 25
    $array = array ("a1" => 'x', "a2" => 'e', "a3" => 'z');
    asort($array);
    foreach ($array as $keys => $values) {
    print "$keys = $values";
    }
?>
<br>
<?php
//câu 26
    // $array = array("a1"=>x, "a2"=>e, "a3"=>z);
    // ksort($array);
    // foreach ($array as $keys => $values) {
    //     print "$keys = $values";
    // }
// lỗi cú pháp
?>
<br>
<?php
//câu 27
    $array1 = array("a", "b", "c", "d", "e", "f");
    $array2 = array_slice ($array1, -3);
    foreach ($array2 as $val) {
        print "$val";
    }
// -3 phần tử đầu tiên trong mảng
?> 
<br>
<?php
//câu 28
    $string1 = "ab";
    $string2 = "cd";
    $string1 = $string1.$string2;
    $string3 = "abc";
    $string1 .= $string3;
    echo $string1;
    //nối chuỗi
    //abcdabcabcdabc
?>
<br>
<?php
//câu 29
    $a = "hi,world";
    $b = array_map ("strtoupper", explode (",",$a));
    foreach ($b as $value) {
    print "$value";
    }
    //HI WORLD
?>
<br>
<?php
//câu 30
    $s = '13149';
    $s [$s[1]] = $s[1] + $s[3];
    print_r($s);
//13179
?>
<br>
<?php
//câu 31
    if (preg_match ("/[^a-z589]+/", "ABasdfg589nmGH", $array)){
        print "<pre> \n";
        print_r ($array[0]);
        print "</pre> \n";
    }
// AB(giống mũ lên)
?>
<br>
<?php
//câu 32
    session_start ();
    if (!array_key_exists ('counter', $_SESSION)) {
        $_SESSION['counter'] = 0;
    } else {
        $_SESSION['counter']++;
    }
    session_regenerate_id();
    echo $_SESSION['counter'];
    //đếm số lần truy cập vào trang này
?>
<br>
<?php
// câu 33
class A {
    static $word = "hello";
    static function hello() {
        print static::$word;
    }
}

class B extends A {
    static $word = "bye";
}
B::hello();
   //bye
?>
<br>
<?php
// câu 34
    class C {};
    class D1 extends C {};
    class_alias('C', 'D2');
    $d1 = new D1;
    echo get_class($d1);
    $d2 = new D2;
    echo get_class($d2); 

// DIC
?>
<br>
<?php
    // câu 35
    class number {
        public $a = 10;
        public $b = 20;
        private $c = 30;
    }
    $numbers = new number();
    foreach($numbers as $var => $value){
        echo "$value";
    }
    //1020
?>
<br>
<?php
// câu 36
$values = array(10, 20, '0', '10hello', 'hello10');
    echo array_sum($values);
   //40
?>
<br>
<?php
// câu 37
$str = "It's \"good\"";
    echo strlen(addslashes($str));
    //14 kí tự
?>
<br>
<?php
    //câu 38
    // $foo = 'bar';
    // echo '$foo\" . "$foo\'';
    //lỗi cú pháp
?>
<br>
<?php
    //câu 39
    $str = 'val1,val2,,val4,';
        echo count(explode(',', $str));
    //5
?>
<br>
<?php
    // câu 40
    $a = 0.5;
    $b = 0.1;
    $c = 16;
    echo sprintf('%01.2lf %.1lf 0x%x', $a, $b, $c);
    //0.50 0.1 0x10
?>
