<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;500&family=Sarabun&display=swap" rel="stylesheet">
    <title>Array</title>
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
    </style> 

</head>
<!-- ตั้งรูปพื้นหลังที่นี่ -->
<body background="11.png">
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
                $name = array (
                    array("James", "Eldest Child", 15),
                    array("Albus", "Middle Child", 13),
                    array("Lily", "Youngest Child", 11),
                );
                sort($name);

                echo "Name : " . $name[0][0] . "<br>" . "Status : " . $name[0][1] . "<br>" . "Age : " . $name[0][2] . " <br><br>";
                echo "Name : " . $name[1][0] . "<br>" . "Status : " . $name[1][1] . "<br>" . "Age : " . $name[1][2] . " <br><br>";
                echo "Name : " . $name[2][0] . "<br>" . "Status : " . $name[2][1] . "<br>" . "Age : " . $name[2][2] . " <br><br>";
            ?>
        </td>
    </tr>
</table>


</body>
</html>