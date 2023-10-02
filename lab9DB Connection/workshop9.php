<?php include "connect.php";?>
<html>
    <head>
        <meta charset="utf-8">
    </head>  

    <body>
    
        <?php
            $stmt = $pdo->prepare("SELECT*FROM member");
            $stmt->execute();

            while($row = $stmt->fetch()){
                echo " username: " . $row ["username"] . "<br>";
                echo "ชื่อสมาชิก:" .$row["name"] ."<br>";
                echo "ที่อยู่:" .$row["address"] ."<br>";
                echo "เบอร์โทร: " . $row ["mobile"] . "<br>";
                echo "อีเมล:" .$row["email"] ."<br>";
                echo "<img src='img/member_photo/" . $row["username"] . ".jpg' width='100'><br>";
                echo "<a href='workshop9_editform.php?username=" .$row["username"]."'>edit</a>" . "<hr>";
            }
        ?>  
        
    </body>

</html>