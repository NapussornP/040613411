<html>
<head><meta charset="UTF-8"></head>
<body>

    <form action="workshop8-insert.php" method="post" enctype="multipart/form-data">
        username: <input type="text" name="username" required><br><br>
        password: <input type="password" name="password" required><br><br>
        ชื่อสมาชิก: <input type="text" name="name"><br><br>
        ที่อยู่: <br><textarea name="address" rows="3" cols="40"></textarea><br><br>
        เบอร์โทร: <input type="tel" name="mobile"><br><br>
        อีเมล: <input type="email" name="email"><br><br>
        อัปโหลดรูปภาพ: <input type="file" name="image"  accept=".jpg"><br><br>
       
        <input type="submit" value="เพิ่มสมาชิก">
    </form>
</body>
</html>