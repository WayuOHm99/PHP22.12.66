<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;500&family=Sarabun&display=swap" rel="stylesheet">
    <title>My Home Page</title>
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
    table{
        margin: auto;
        border-collapse : collapse;
    }
    
    td{
        border: 1px solid #000;
    }

    </style> 

</head>
<!-- ตั้งรูปพื้นหลังที่นี่ -->
<body background="./12.png">
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
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<!-- ใส่ CODE PHP ที่นี่ -->		  
<?php
    $Fullname = "Wayu Buapanus";
    $birtday = "15-02-2005";
    $Nikename ="OHMdigitech";

    function cal_age($birtday){
        return date_diff(date_create($birtday),date_create(date("Y-m-d")))->format('%y');
    }
?>
<table>
    <tr>
        <td>Firstname</td>
        <td>
            <?php echo strtoupper(explode(" ",$Fullname)[0]) ?>
        </td>
    </tr>
    <tr>
        <td>Lastname</td>
        <td>
            <?php echo strtoupper(explode(" ",$Fullname)[1]) ?>
        </td>
    </tr>
    <tr>
        <td>Nickname</td>
        <td>
            <?php echo strtoupper($Nikename) ?>
        </td>
    </tr>
    <tr>
        <td>Age</td>
        <td><font color="red">
            <?php echo cal_age($birtday);?>
        </font></td>
    </tr>
    <tr>
        <td>Update</td>
        <td>
            <?php echo date("Y-m-d");?>
        </td>
    </tr>
</table>
</div>
</body>
</html>