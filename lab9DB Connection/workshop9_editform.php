<?php include "connect.php"?>

<?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
    $stmt->bindParam(1,$_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
?>

<html>
    <head>
        <meta charset='UTF-8'>
    </head>

    <body>
        
        <form action="workshop9_edit-member.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name = "username" value = "<?=$row["username"]?>">
            ชื่อสมาชิก: <input type="text" name = "name" value = "<?=$row["name"]?>"><br><br>
            ที่อยู่: <br> <textarea name="address" rows="3" cols="40" value = "<?=$row["address"]?>"></textarea><br><br>
            เบอร์โทร: <input type="tel" name="mobile" value = "<?=$row["mobile"]?>"><br><br>
            อีเมล: <input type="email" name="email" value = "<?=$row["email"]?>"><br><br>
            อัปโหลดรูปภาพ: <input type="file" name="image"  accept=".jpg" value = "<?=$row["img_path"]?>"><br><br>

            <input type="submit" value="แก้ไขข้อมูลสมาชิก">
        </form>
    </body>
</html>