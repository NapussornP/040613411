<?php
  include "connect.php";
  
  session_start();?>

<html>
    <head>
        <style>
            table{
                border-collapse: collapse; /* ปรับให้เส้นขอบของตารางมีลักษณะพับตัวกลาง */
                width: 50%;
            }
        </style>
    </head>
    <body>

        <table border="1" style="margin:1%">
            <th>หมายเลขคำสั่งซื้อ</th>
            <th>วันที่สั่งสินค้</th>
            <th>ชื่อสินค้า</th>
            <th>ราคารวม</th>
            <?php
                $stmt = $pdo->prepare("SELECT orders.ord_id, orders.username, orders.ord_date, product.pname, item.quantity,(item.quantity*product.price) as total, orders.status FROM item 
                INNER JOIN orders on orders.ord_id = item.ord_id
                INNER JOIN product on product.pid = item.pid
                WHERE 1");

                $stmt->execute();
                $row = $stmt->fetch();

                
                echo "<h3>ออเดอร์ของผู้ใช้: " .$row["username"] ."</h3>" ;

                while($row = $stmt->fetch()){
                    echo "<tr>";
                    echo "<td>" . $row ["ord_id"] . "</td>";
                    echo "<td>" . $row ["ord_date"] . "</td>";
                    echo "<td>" . $row ["pname"] . "</td>";
                    echo "<td>" . $row ["total"] . " บาท </td>";
                    echo "</tr>";
                     
                } 
            ?>
        </table>

        <a href="admin-home.php">กลับหน้าหลัก</a>
    </body>
</html>
