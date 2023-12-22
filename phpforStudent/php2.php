<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;500&family=Sarabun&display=swap" rel="stylesheet">
    <title>PHP2</title>
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
    h1{
        margin: auto;
        border-collapse : collapse;
        text-align: center;
    }
    </style> 

</head>
<!-- ตั้งรูปพื้นหลังที่นี่ -->
<body background="./14.png">
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
	
<!-- ใส่ CODE PHP ที่นี่ -->
<h1>การแบ่งแยกข้อความ (ฟังก์ชัน explode()) รูปแบบอาร์เรย์explode (separator, string, limit)</h1> <br>
<center><h2>โค้ดที่ใช้</h2></center>
<center>
<p>&lt;html&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;php</p>
<p>$fullname = "Albert Eistien";</p>
<p>list($firstname,$lastname) = explode("&nbsp;",$fullname);</p>
<p>echo "First name : $firstname &lt;br&gt;\n";</p>
<p>echo "Last name : $lastname";</p>
<p>?&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
</center>

<center>	
<?php
$fullname = "Wayu Buapanus";
 list($firstname,$lastname) = explode(" ",$fullname);

echo "First name : $firstname<br>\n";
 echo "Last name : $lastname";
?>
</center>	

</body>
</html>