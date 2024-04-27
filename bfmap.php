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
                <area shape="rect" coords="555,1065,884,1316" href="page/chapel.php" alt="森と水の教会" />
                <!-- primrose -->
                <area shape="poly" coords="495,1226,327,1034,59,1126,166,1487,534,1371,534,1371,534,1363" href="page/primrose.php" alt="プリムローズ" />
                <!-- glamping terras -->
                <area shape="rect" coords="1071,858,1628,1095" href="page/glamping.php" alt="グランピングテラス" />
                <!-- restaurant of forest -->
                <area shape="poly" coords="1790,1213,1574,1416,1564,1575,2036,1563,2021,1209,2021,1209,2021,1207" href="page/restaurant.php" alt="森のレストラン" />
                <!-- olif -->
                <area shape="rect" coords="617,2032,918,2272" href="page/olif.php" alt="宿泊ヴィラ_オリフ" />
                <!-- florence -->
                <area shape="rect" coords="1296,2126,1770,2397" href="page/florence.php" alt="フローレンス" />
                <!-- garden -->
                <area shape="rect" coords="427,483,1000,746" href="page/garden.php" alt="浮島ホワイトガーデン/オープンガーデン" />
                <!-- guest house -->
                <area shape="poly" coords="1115,1187,1213,1529,1450,1477,1561,1163,1226,1161,1226,1161,1225,1164" href="page/guesthouse.php" alt="ゲストハウス" />
                <!-- front waiting -->
                <area shape="rect" coords="129,1546,611,1787" href="page/front.php" alt="受付・親族控室・ゲスト更衣室" />
            </map>
            <img usemap="#prim-map" src="images/top/prim_map_v1.1.jpg" alt="プリムローズガーデン_マップ">
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