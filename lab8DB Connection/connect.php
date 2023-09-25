<html>
    <body>
        <?php
            //-------------Unknown database 'blueshop' -----------------
            $pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //-------------No such host is known.-----------
            // $pdo = new PDO("mysql:host=localhost1; dbname=blueshop; charset=utf8", "root", "");
            // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:ERRMODE_EXCEPTION);

            //-----------Access denied for user 'root'@'localhost' (using password: YES)------------
            // $pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "YES");
            // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:ERRMODE_EXCEPTION);
        ?>
        
    </body>

</html>