<?php 
$STYLE_CSS_PATH = "css/";
$RESET_CSS_PATH = "css/";
$PAGE_TITLE = "Map";
$FAVICON_PATH = "images/";
$CLASS_NAME_FOOTER = "footer__wrapper";
?> 

<?php include_once('page/layout/header.php'); ?>
<body>
    <div class="index__container">
        <header>
            <div class="header__logo">
                <h1>
                    <img src="images/top/prim_logo.png" alt="プリムローズガーデン_ロゴ">
                </h1>
            </div>
        </header>
        <div class="index__desc-wrapper">
            <p class="index__description">施設名をタップすると詳細をご覧いただけます</p>
        </div>
        <div class="prim-map-wrapper">
            <map name="prim-map">
                <!-- chapel -->
                <area shape="poly" coords="339,713,494,939,675,712,675,712,677,712" href="page/chapel.php" alt="森と水の教会" />
                <!-- primrose -->
                <area shape="poly" coords="350,827,262,702,60,744,67,992,382,968,382,969,371,980" href="page/primrose.php" alt="プリムローズ" />
                <!-- glamping terras -->
                <area shape="rect" coords="716,577,1116,737" href="page/glamping.php" alt="グランピングテラス" />
                <!-- restaurant of forest -->
                <area shape="poly" coords="1234,827,1083,1073,1383,1077,1370,892,1230,829,1230,833" href="page/restaurant.php" alt="森のレストラン" />
                <!-- olif -->
                <area shape="rect" coords="421,1374,679,1603" href="page/olif.php" alt="宿泊ヴィラ_オリフ" />
                <!-- florence -->
                <area shape="rect" coords="888,1446,1207,1639" href="page/florence.php" alt="フローレンス" />
                <!-- garden -->
                <area shape="rect" coords="253,301,707,429" href="page/garden.php" alt="浮島ホワイトガーデン/オープンガーデン" />
                <!-- guest house -->
                <area shape="poly" coords="757,802,1027,802,958,1038,812,1032,812,1032,812,1032" href="page/guesthouse.php" alt="ゲストハウス" />
                <!-- front waiting -->
                <area shape="rect" coords="67,1050,447,1192" href="page/front.php" alt="受付・親族控室・ゲスト更衣室" />
            </map>
            <img usemap="#prim-map" src="images/top/prim_map.jpg" alt="プリムローズガーデン_マップ">
        </div>
       <?php include_once('page/layout/footer.php'); ?>
    </div>
    <!-- Image Map Resizer -->
    <script src="js/resize.js"></script>
    <script>
        imageMapResize();
    </script>
</body>

</html>