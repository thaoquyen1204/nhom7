<form method="post" >
Số A:<input type ="number" name="soA" value="0"><br>
Số B:<input type ="number" name="soB" value="0"><br>
Số C:<input type ="number" name="soC" value="0"><br>
<input type="submit" value ="tinh">
</form>

<?php
$a = $_POST['soA'];
$b = $_POST['soB'];
$c = $_POST['soC'];
$y = "";

$y = $b * $b - 4 * $a * $c;
$x1 = "";
$x2 = "";
if ($y > 0) {
    $x1 = (-$b + sqrt($y)) / (2 * $a);
    $x2 = (-$b - sqrt($y)) / (2 * $a);
    echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
} else if ($y == 0) {
    $x1 = (-$b / (2 * $a));
    echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
} else {
    echo ("Phương trình vô nghiệm!");
}

?>