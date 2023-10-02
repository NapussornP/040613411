<?php include "connect.php";?>
<html>
    <head>
        <meta charset="utf-8">
    </head>  

    <body>
    
        <?php
            $stmt = $pdo->prepare("SELECT*FROM member WHERE username LIKE ?");
            $stmt->execute([$_GET["username"]]);

            $row = $stmt->fetch();
        ?>

        <div style="disply: flex">
            <div>
                <img src="img/member_photo/<?=$row["username"]?>.jpg" width='200'>
            </div>
            <div style="padding: 15px">
                <h2><?=$row["username"]?></h2>
                ชื่อสมาชิก: <?=$row["name"]?><br>
                ที่อยู่: <?=$row["address"]?><br>
                เบอร์โทรศัพท์: <?=$row["mobile"]?><br>
                อีเมล: <?=$row["email"]?><br>
            </div>
        </div>            
        
        
    </body>

</html>