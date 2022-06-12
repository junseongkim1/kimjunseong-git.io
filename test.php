<?php
$times = time();
$date1 = date("Y-m-d h:i:s", $times);
$name = $_GET["name"];
$data = $_GET["data"];
$kid1 = $_GET["kid1"];
$kid2 = $_GET["kid2"];
$kid3 = $_GET["kid3"];
$kid4 = $_GET["kid4"];

$adult1 = $_GET["adult1"];
$adult2 = $_GET["adult2"];
$adult3 = $_GET["adult3"];
$adult4 = $_GET["adult4"];

$sql;

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'test');
  $sql = "INSERT INTO test(name, data, kid1, kid2, kid3, kid4, adult1, adult2, adult3, adult4) VALUES($name, $data, $kid1, $kid2, $kid3, $kid4, $adult1, $adult2, $adult3, $adult4)";
  $result = mysqli_query($conn, $sql);
  var_dump($result->num_rows);

?>
<!doctype html>
<html>
<head>
    <title>놀이공원 이용권</title>
    <h1>놀이공원 이용권</h1>
    <style>
		table {
    border: 1px solid #444444; border-collapse:collapse;
    width: 600px; margin: auto;
  }
  th, td {
    border: 1px solid #444444; border-collapse:collapse;
    text-align: center;
  }
        h1 { text-align: center; }
	</style>
</head>
<body>
<form  method="get">
고객명 <input type="text" name="name">
<input type="hidden" name="data">
<input type="submit" value="합계" style="float: right;">
<table>
    <th>No</th>
    <th>구분</th>
    <th colspan="2">어린이</th>
    <th colspan="2">어른</th>
    <th>비고</th>
    <tr>
        <td>1</td>
        <td>입장권</td>
        <td>7,000</td>
        <td>
       <select  name="kid1">
          <option value="0" selected>0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
       </select>
        </td>
        <td>10,000</td>
        <td>
       <select name="adult1">
          <option value="0" selected>0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
       </select>
        </td>
        <td>입장</td>
    </tr>
    <tr>
        <td>2</td>
        <td>BIG3</td>
        <td>12,000</td>
        <td>
        <select  name="kid2">
          <option value="0" selected>0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
       </select>
        </td>
        <td>18,000</td>
        <td>
        <select name="adult2">
          <option value="0" selected>0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
       </select>
        </td>
        <td>입장+놀이3종</td>
    </tr>
    <tr>
        <td>3</td>
        <td>자유이용권</td>
        <td>21,000</td>
        <td>
        <select  name="kid3">
          <option value="0" selected>0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
       </select>
        </td>
        <td>28,000</td>
        <td>
        <select name="adult3">
          <option value="0" selected>0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
       </select>
        </td>
        <td>입장+놀이자유</td>
    </tr>
    <tr>
        <td>4</td>
        <td>연간이용권</td>
        <td>70,000</td>
        <td>  
        <select  name="kid4">
          <option value="0" selected>0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
       </select>
            </td>
        <td>90,000</td>
        <td>  
        <select name="adult4">
          <option value="0" selected>0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
       </select>
            </td>
        <td>입장+놀이자유</td>
    </tr>
</table>

<?php
echo $date1,"<br>";
echo $name, "고객님 감사합니다.";
if($kid1>0)
{
  echo "<br>어린이입장권 $kid1 매";
}
if($kid2>0)
{
  echo "<br>어린이BIG3 $kid2 매";
}
if($kid3>0)
{
  echo "<br>어린이 자유이용권 $kid3 매";
}
if($kid4>0)
{
  echo "<br>어린이 연간이용권 $kid4 매";
}
if($adult1>0)
{
  echo "<br>어른입장권 $adult1 매";
}
if($adult2>0)
{
  echo "<br>어른BIG3 $adult2 매";
}if($adult3>0)
{
  echo "<br>어른 자유이용권 $adult3 매";
}
if($adult4>0)
{
  echo "<br>어른 연간이용권 $adult4 매";
}
else 
{
  echo"";
}
$sum=
($kid1*7000)+($kid2*12000)
+($kid3*21000)+($kid4*70000)
+($adult1*10000)+($adult2*18000)
+($adult3*28000)+($adult4*90000);

echo "<br>합계 $sum 입니다 ";

?>
</form>
</body>
</html>
