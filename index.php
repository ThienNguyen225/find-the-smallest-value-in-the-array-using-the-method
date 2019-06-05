<?php
function checkMin($array){
    $min = $array[0];
    for ($index = 0; $index < count($array); $index++){
        if ($array[$index] < $min){
            $min = $array[$index];
        }
    }
    return $min;
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $string = $_POST["numbers"];
    $array = explode(" ", $string);
    echo checkMin($array);
//    var_dump($array);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài tập tìm giá trị nhỏ nhất trong mảng sử dụng phương thức</title>
    <style>
        h2{
            color: blue;
        }
        .display{
            height:180px; width:200px;
            margin:0;
            padding:10px;
            border:1px #dd33dd solid;
        }
        .display input{
            padding:5px; margin:5px
        }
        input[type=text]{
            width: 80%;
        }
        input[type=submit]{
            width: 50%;
            margin-left: 20%;
        }
        form{
            margin-left: 35%;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="display">
        <h2>Find the smallest value in the array using the method</h2>
        <input type="text" name="numbers">
        <input type="submit" value="submit">
    </div>
</form>
</body>
</html>
