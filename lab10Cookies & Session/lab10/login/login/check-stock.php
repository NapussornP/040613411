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
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>รายละเอียดสินค้า</th>
            <th>ราคา</th>
            <th>จำนวนคงเหลือ</th>
            <?php
                $stmt = $pdo->prepare("SELECT * FROM product");

                $stmt->execute();
                
                while($row = $stmt->fetch()){
                    echo "<tr>";
                    echo "<td>" . $row ["pid"] . "</td>";
                    echo "<td>" . $row ["pname"] . "</td>";
                    echo "<td>" . $row ["pdetail"] . "</td>";
                    echo "<td>" . $row ["price"] . "</td>";
                    echo "<td>" . $row ["pquality"] . "</td>";
                    echo "</tr>";
                     
                } 
            ?>
        </table>

        <a href="admin-home.php">กลับหน้าหลัก</a>
    </body>
</html>
