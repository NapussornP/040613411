<?php
	include "connect.php";
    session_start();
    // ตรวจสอบว่ามีชื่อใน session หรือไม่ หากไม่มีให้ไปหน้า login อัตโนมัติ
    if (empty($_SESSION["username"]) ) { 
        header("location: login-form.php");
    }
?>

<html>
<head><meta charset="utf-8"></head>
<body>
<?php
//     $username = $_SESSION["username"];
//     $stmt = $pdo->prepare("SELECT orders.ord_id, orders.ord_date, `pname`, `price` FROM `product` 
//                             INNER JOIN item ON product.pid = item.pid
//                             INNER JOIN orders ON item.ord_id = orders.ord_id
//                             INNER JOIN member ON member.username = orders.username
//                             WHERE member.username = '$username' ;");

//    $stmt->execute();

//    while ($row = $stmt->fetch()) {
//        echo "หมายเลขคำสั่งซื้อ: " . $row ["ord_id"] . "<br>";
//        echo "วันที่สั่งสินค้า: " . $row ["ord_date"] . "<br>";
//        echo "ชื่อสินค้า: " . $row ["pname"] . "<br>";
//        echo "ราคา: " . $row ["price"] . " บาท <br>";
//        echo "<hr>\n";
//    }


    //---------------------2-------------------------------------
    // $username = $_SESSION["username"];
    // $stmt = $pdo->prepare("SELECT * FROM member WHERE member.username = '$username' ;");
    // $stmt->execute();
    
    // $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // $permission = $row["permission"];

    // if($permission === 'admin')
    // {
    //     $stmt = $pdo->prepare("SELECT orders.username, COUNT(orders.ord_id) AS oreder_count FROM orders
    //                         INNER JOIN member
    //                         ON member.username = orders.username
    //                         GROUP BY member.username;");
       
    //    $stmt->execute();

    //    while($row = $stmt->fetch())
    //    {
    //        echo "ชื่อผู้ใช้งาน: " .$row["username"] ."<br>";
    //        echo "จำนวนหมายเลขคำสั่งซื้อ: " ."<a href = '../../cart/cart/detail.php'>".$row["oreder_count"] ."</a>" ."<br>";
    //        echo "<hr>\n";
    //    }
    // }
    // else
    // {
    //     $stmt = $pdo->prepare("SELECT orders.ord_id, orders.ord_date, `pname`, `price` FROM `product` 
    //     INNER JOIN item ON product.pid = item.pid
    //     INNER JOIN orders ON item.ord_id = orders.ord_id
    //     INNER JOIN member ON member.username = orders.username
    //     WHERE member.username = '$username' ;");

    //     $stmt->execute();

    //     while ($row = $stmt->fetch()) {
    //     echo "หมายเลขคำสั่งซื้อ: " . $row ["ord_id"] . "<br>";
    //     echo "วันที่สั่งสินค้า: " . $row ["ord_date"] . "<br>";
    //     echo "ชื่อสินค้า: " . $row ["pname"] . "<br>";
    //     echo "ราคา: " . $row ["price"] . " บาท <br>";
    //     echo "<hr>\n";
    //     }
    // }

    //-------------------------------------------------3-----------------------------------------------
    
    $username = $_SESSION["username"];
    $stmt = $pdo->prepare("SELECT orders.ord_id, orders.ord_date, `pname`, `price` FROM `product` 
                            INNER JOIN item ON product.pid = item.pid
                            INNER JOIN orders ON item.ord_id = orders.ord_id
                            INNER JOIN member ON member.username = orders.username
                            WHERE member.username = '$username' ;");

   $stmt->execute();
   $row = $stmt->fetch();

   if(!empty($row))
   {
        while ($row) {
                echo "หมายเลขคำสั่งซื้อ: " . $row ["ord_id"] . "<br>";
                echo "วันที่สั่งสินค้า: " . $row ["ord_date"] . "<br>";
                echo "ชื่อสินค้า: " . $row ["pname"] . "<br>";
                echo "ราคา: " . $row ["price"] . " บาท <br>";
                echo "<hr>\n";
            }
   }
   else{

        $stmt = $pdo->prepare("SELECT orders.username, COUNT(orders.ord_id) AS oreder_count FROM orders
                                INNER JOIN member
                                ON member.username = orders.username
                                GROUP BY member.username");
        $stmt->execute();
        
        while($row = $stmt->fetch())
        {
            echo "ชื่อผู้ใช้งาน: " .$row["username"] ."<br>";
            echo "จำนวนหมายเลขคำสั่งซื้อ: " ."<a href = 'orders-detail.php'>".$row["oreder_count"] ."</a>" ."<br>";
            echo "<hr>\n";
        }
   }
        
    


?>
</body>
</html>
