<html>
    <body>
        <?php

            //setcookie ถ้ายังไม่มีค่าlang
            if(empty($_COOKIE["lang"]))
            {
                setcookie("lang",$_GET["language"], time()+10);
            }

            //setcookie เป็นค่าใหม่
            if(isset($_COOKIE["lang"]))
            {
                setcookie("lang",$_GET["language"], time()+10);
            }
        ?>

        <a href="main.php">Go to main</a>
    </body>
</html>