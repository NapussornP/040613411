<?php
    $keyword = $_GET["keyword"];
    $conn = mysqli_connect("localhost", "root", "","blueshop");
    // if ($conn) {
    //     mysql_select_db("blueshop");
    //     mysql_query("SET NAMES utf8");
    // } else {
    //     echo mysql_errno();
    // }
    $sql = "SELECT * FROM member WHERE username LIKE '%$keyword%'";
    $objQuery = mysqli_query($conn,$sql);
    ?>
    <table border="1">
        <tr>
            <th>USERNAME</th>
            <th>MEMBER_PHOTO</th>
        </tr>
            <?php while($row = mysqli_fetch_array($objQuery)): ?>
            <tr>
            <td><a href="memberDetail.php?username=<?php echo $row["username"]?>"><?php echo $row["username"]?></a></td>
            <td><img src="member_photo/<?php echo $row["username"] ?>.jpg" width="100"></td>
            

           

            </tr>
        <?php endwhile;?>
    </table>