<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Student Records</title>
    <style>
        body{font-family:Arial,sans-serif;
            text-align:center;margin-top:20px;}
        table{
            margin:auto;border-collapse:collapse;width:80%;}
            th,td{padding:10px;border:1px solid #ddd;}
            th{ background-color: #f4f4f4;}
    </style>
</head>
<body>
    <h1>SPANDANA AITHAL</h1>
    <h1>4MW23CS163</h1>
    <h1>Sorted Student Records</h1>
    <table>
        <tr><th>ID</th><th>Name</th><th>Grade</th></tr>
        <?php
    $conn=new mysqli("localhost","root","1239","student135");
    $students=$conn->query("SELECT * FROM student135")->fetch_all(MYSQLI_ASSOC);
    for($i=0;$i<count($students)-1;$i++){
        $min=$i;
        for($j=$i+1;$j<count($students);$j++){
            if($students[$j]['name']<$students[$min]['name'])$min=$j;

        }
        $temp=$students[$min];
        $students[$min]=$students[$i];
        $students[$i]=$temp;
    }
    foreach($students as $student){
        echo
        "<tr><td>{$student['id']}</td><td>{$student['name']}</td><td>{$student['grade']}</td></tr>";
    }
    $conn->close();
    ?>

    </table>
    
</body>
</html>

show databases;
create database student135;
use student135;
create table student135(id int primary key,name varchar(50),grade float);
insert into student135 values(1,"v abc",99);



