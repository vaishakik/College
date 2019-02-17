<html>
<body>
<h1>
<marquee bgcolor="blue">
COMPOUND INTEREST IS-->
</marquee>
</h1>
<?php
$principal=$_POST["data1"];
echo "<h2>The principal value is </h2>".$principal;
$roi=$_POST["data2"];
echo "<h2>The rate of interest in % is </h2>".$roi;
$time=$_POST["data3"];
echo "<h2>The time taken in years is </h2>".$time;
$powvalue=(1+($roi/100));
$amount=$principal*(pow($powvalue,$time));
echo "<h2>The amount value is </h2>".$amount;
$ci=$amount-$principal;
echo "<h2>The CI value is </h2>".$ci;
?>
</body>
</html>