<?php include "connect.php"?>

<?php


if ($_POST)
{
    $username = $_POST["username"];
    if(isset($_FILES['image'])) {
        // สร้างชื่อไฟล์ใหม่โดยใช้ username
        $image_name = $username .".jpg";
        $image_temp = $_FILES["image"]["tmp_name"];
        $image_path = "img/member_photo/" . $image_name;
        
        // ย้ายไฟล์รูปภาพไปยังตำแหน่งที่ต้องการ
        move_uploaded_file($_FILES["image"]["tmp_name"], $image_path);
    } else {
        // ถ้าไม่มีการอัปโหลดรูปภาพ, ให้ $image_path เป็นค่าว่าง
        $image_path = "";
    }

    // ตรวจสอบว่า $image_path ไม่เป็น null หรือว่าง
    if($image_path !== null && $image_path !== "") {
        // สร้างคำสั่ง SQL และ execute ตามปกติ
        $stmt = $pdo->prepare("INSERT INTO member VALUES(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $_POST["username"]);
        $stmt->bindParam(2, $_POST["password"]);
        $stmt->bindParam(3, $_POST["name"]);
        $stmt->bindParam(4, $_POST["address"]);
        $stmt->bindParam(5, $_POST["mobile"]);
        $stmt->bindParam(6, $_POST["email"]);
        $stmt->bindParam(7, $image_path);
        $stmt->execute();
        // echo "เพิ่มข้อมูลสมาชิกสำเร็จ username ใหม่ คือ " . $_POST["username"];
    } else {
        // ถ้า $image_path เป็น null หรือว่าง
        echo "ไม่มีรูปภาพถูกอัปโหลด";
    }
}
    

?>

<html>
    <head>
        <meta charset='UTF-8'>
    </head>

    <body>
        เพิ่มข้อมูลสมาชิกสำเร็จ username ใหม่ คือ <?=$_POST["username"]?>
</html>