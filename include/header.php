<?php include "./include/connect.php"; ?>

<header class="w-100" style="color:black;background-color: rgb(254, 255, 217);">
    <br>
    <div class="row ">
        <div class="col-1"></div>
        <div class="col-2">
            <h1>哈哈購商城</h1>
        </div>
    </div>

    <div class="nav row">
        <div class="nav-item col-4"></div>
        <div class="nav-item col-4">
            <ul class='d-flex justify-content-evenly'>
                <li>1</li>
                <li>2</li>
                <li>3</li>
            </ul>
        </div>
        <div class="nav-item col-4">
            <?php
            if (isset($_SESSION['user'])) {
                echo "歡迎光臨 " . $_SESSION['user'];
                echo "<a href='./api/logout.php' class='btn btn-info mx-2'>登出</a>";
                echo "<a href='member.php' class='btn btn-success mx-2'>會員中心</a>";
            } else {
                ?>
                <a href="reg.php" class="btn btn-primary mx-2">註冊</a>
                <a href="login_form.php" class="btn btn-success mx-2">登入</a>
                <?php
            }
            ?>

        </div>
        </div>
        <br><br>
</header>