<?php session_start(); ?>

<html>
<body>
    <h1>สวัสดี <?=$_SESSION["fullname"]?></h1>
    <h3><a href = "product-list.php">members're orders</a>
    <a href="check-stock.php" style="padding-left:5%">check stock</a>
    <br><br>
    หากต้องการออกจากระบบโปรดคลิก <a href='logout.php'>ออกจากระบบ</a>

</body>
</html>
