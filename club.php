<!DOCTYPE html>
<html>
<head>
	<title> </title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf8_unicode_ci">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="fonts/BYekan.eot">
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="frameworks/pure.css">
    <link rel="stylesheet" href="frameworks/bootstrap.css">
    <script src="sidebar_response.js"></script>

</head>
<body dir="rtl" style="font-family: BYekan">
<!--=============================================== top-header ===============================================-->
<div class="header-top">
</div>
<!--=============================================== header ===============================================-->
<div class="header">
    <img src="photo/2000px-Logo_Sport.svg.png" class="logo-header">
    <div class="topnav" id="myTopnav">
        <a href="#home">خانه</a>
        <a href="#contact">مدیریت کل</a>
        <a href="#news">ورود به باشگاه ها</a>
        <a href="#about">درباره ما</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
    <div class="social-link-header">
        <a href="#"><i class="fa fa-facebook-official fa-lg top-header-social-media" aria-hidden="true" id="li-facebook" ></i></a>
        <a href="#"><i class="fa fa-instagram fa-lg top-header-social-media" aria-hidden="true" id="li-instagram"></i></a>
        <a href="#"><i class="fa fa-pinterest-p fa-lg" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter-square fa-lg top-header-social-media" aria-hidden="true" id="li-twitter"></i></a>
    </div>
</div>
<!--=============================================== navigation ==============================================-->

<!--=============================================== content-title ===============================================-->

<div class="content-title animated fadeIn">
    <hr class="title-hr">
    <h3><p id="title-p" class="fadeInDown" style="font-family: BYekan">باشگاه بدنسازی</p></h3>
    <hr class="title-hr">
</div>

<!--=============================================== sidebar ===============================================-->
<div class="vertical-menu animated fadeIn">
    <!--active_navigation(this.id , 'نمایش اعضا') -->
    <button href="#" onclick="sidebar_bodybuilding_timing_table()" class="btn-default" id="timing-table">جدول زمانبندی</button>
    <button href="#" onclick="sidebar_bodybuilding_show_member();" class="btn-default" id="show-member">نمایش اعضا</button>
    <button href="#" onclick="sidebar_bodybuilding_search_member()" class="btn-default" id="search-member">جستجوی اعضا</button>
    <button href="#" onclick="sidebar_bodybuilding_modify_member()" class="btn-default" id="modify-member">ویرایش اعضا</button>
    <button href="#" onclick="sidebar_bodybuilding_show_trainer()" class="btn-default" id="show-trainer">نمایش مربی ها</button>
    <button href="#" onclick="sidebar_bodybuilding_search_trainer()" class="btn-default" id="search-trainer">جستجوی مربی ها</button>
    <button href="#" onclick="sidebar_bodybuilding_modify_trainer()" class="btn-default" id="modify-trainer">ویرایش مربی ها</button>
    <button href="#" onclick="active_navigation(this.id , 'کلاس های آموزشی')" class="btn-default" id="training-class">کلاس های آموزشی</button>
    <button href="#" onclick="active_navigation(this.id , ' ویرایش کلاس های آموزشی')" class="btn-default" id="modify-training-class"> ویرایش کلاس های آموزشی</button>

</div>
<!--=============================================== content ===============================================-->
<div class="content animated fadeInDown">
    <div>
        <button class="content-exit pure-button">خروج از باشگاه</button>
    </div>
    <div class="content-db-connection" id="content-db-connection">
        <?php
        require_once "config.php";
        require_once "functions.php";
        $mysqli = new mysqli($dbHost, $dbUser, $dbPass);
        if(!$mysqli->select_db($dbName)){
            ?>
            <script>
                document.getElementById("content-db-connection").style.backgroundColor = "red";
            </script>
            <?php
            echo "<p>اشکال در ارتباط با پایگاه داده!!</p>";
            exit(0);
        }
        else{
            echo "<p>ارتباط با پایگاه داده با موفقیت برقرار شد.</p>";
            $mysqli->query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
        }
        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
        ?>
    </div>
    <br><br><br>
    <div class="operation-box" id="operation-box">
        <p style="text-align: center; padding-top: 40px;">شما با موفقیت وارد شدید.</p>
    </div>

    <div>

    </div>
</div>
<div style="clear:both;">
<?php

echo "<br>";
echo "<br>";
$sql_query="SELECT * from member;";
$result=$mysqli->query($sql_query);
/*echo string($result);
echo "<br>";
while($row = $result->fetch_array(2)){ // fetch_object() , fetch_assoc()
    foreach($row as $val){
        echo "\n" . $val;
    }
}
}
*/
print_table($result);
echo "<br><br><br>";

?>
</div>

<!--=============================================== Footer ===============================================-->
<footer class="animated fadeIn">
    <p style="font-family: BYekan">کلیه حقوق این نرم افزار محفوظ می باشد.</p>
</footer>

</body>
</html>

