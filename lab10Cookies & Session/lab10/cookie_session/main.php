<html>
    <body>
        <?php

            //setcookie ถ้ายังไม่มีค่าlang
            if($_COOKIE["lang"]=="en")
            {
                echo "welcome";
            }

            //setcookie เป็นค่าใหม่
            elseif($_COOKIE["lang"]=="th")
            {
                echo "ยินดีต้อนรับ";
            }
        ?>
    </body>
</html>