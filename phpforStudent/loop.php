<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;500&family=Sarabun&display=swap" rel="stylesheet">
    <title>Loop</title>
    <!-- #### ส่วนของ CSS ตกแต่งเว็บไซต์ ### -->
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
    <style>
    body, html {
    background-size: cover;
    font-family: 'Kanit', sans-serif;
    }
    a{
        text-decoration: none;
        color: black;
        font-size : 25px
    }
    img,H2{

        display: inline;
    }
    .row {
    display: flex;
    }

    .column {
    flex: 50%;
    }
    
    table {
        color : black ; 
        background-image : url("24.png") ;
    }
    </style> 

</head>
<!-- ตั้งรูปพื้นหลังที่นี่ -->
<body background="41.png">
    <div class="row">
        
        <div class="column" align="right" style="padding-right: 20px;padding-top: 40px;">
            <!-- ใส่ลิงก์ในหน้าเว็บที่นี่ -->
            <a href="home.php"><strong>HOME</strong></a><strong> |
            <a href="php1.php">PHP 1</a> |
            <a href="php2.php">PHP 2</a> |
            <a href="loop.php">LOOP</a> |
			<a href="array.php">ARRAY</a> 
            </strong>
        </div>
		
    </div>
	<hr/>
	<br/><br/><br/><br/><br/><br/><br/>

<!-- ใส่ CODE PHP ที่นี่ -->	
<table align="center">
    <tr>
        <td>
        <?php
$day = 31;
$month = "February";

if ($day == 30) {
    echo "My Birthday is " . $month . "<br/>";
    for ($i = 30; $i >= 0; $i -= 10) {
        echo "countdown: " . $i . "<br/>";
    }
    echo "Happy Birthday to you!!!" . "<br/>";
    echo "Wish you all the happiness in the world!";
} else {
    if ($day == 31) {
        echo "My Birthday is " . $month . "<br/>";
        for ($i = 29; $i >= 1; $i -= 5) {
            echo "countdown: " . $i . "<br/>";
        }
        echo "Happy Birthday to you!!!" . "<br/>";
        echo "May all your dreams come true!";
    } else {
        if ($day == 28 || $day == 29) {
            echo "My Birthday is " . $month . "<br/>";
            for ($i = 28; $i >= 1; $i--) {
                echo "countdown: " . $i . "<br/>";
            }
            echo "Happy Birthday to you!!!" . "<br/>";
            echo "May your life be colorful!";
        } else {
            echo "Invalid!";
        }
    }
}
?>

        </td>
    </tr>
</table>

</body>
</html>