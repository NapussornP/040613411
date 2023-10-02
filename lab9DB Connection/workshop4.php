<?php include "connect.php";?>
<html>
    <head>
        <meta charset="utf-8">
    </head>  

    <body>

        <form>
            <input type="text" name="keyword">
            <input type="submit" value="ค้นหา">
        </form>
        <div style="display:flex">
            <?php
                $stmt = $pdo->prepare("SELECT*FROM member WHERE username LIKE ?");

                if(!empty($_GET))
                    $value = '%'.$_GET["keyword"].'%';
                
                    $stmt->bindParam(1,$value);
                    $stmt->execute();
                while($row = $stmt->fetch()):
            ?>
            <!-- <php while($row = $stmt->fetch()):?> -->
                
                ชื่อสมาชิก: <?=$row["name"]?><br>
                ที่อยู่: <?=$row["address"]?><br>
                อีเมล: <?=$row["email"]?><br>
                <img src="img/member_photo/<?=$row["name"]?>.jpg" width='100'><br><hr>
                    
                
            <?php endwhile; ?>
        </div>
        
    </body>

</html>
