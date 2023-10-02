<?php include "connect.php";?>
<html>
    <head>
        <meta charset="utf-8">
        <script>
            function confirmDelete(username){
                var ans = confirm("ต้องการลบuser" + username);
                
                if(ans == true)
                    document.location = "workshop6_delete.php?username=" + username;
            }
        </script>

    </head>  

    <body>
    
        <?php
            $stmt = $pdo->prepare("SELECT * FROM member");
            $stmt->execute();
            

            while($row = $stmt->fetch()){

                echo "ชื่อสมาชิก:" .$row["name"]. "<br>";
                echo "ที่อยู่:" .$row["address"]."<br>";
                echo "อีเมล:" .$row["email"]."<br>";
                echo "<a href='#' onclick='confirmDelete(\"" . $row["username"] . "\")'>delete</a>";
                echo "<hr>\n";
            }
        ?>
        
        
    </body>

</html>