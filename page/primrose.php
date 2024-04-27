<?php
$STYLE_CSS_PATH = "../css/";
$RESET_CSS_PATH = "../css/";
$PAGE_TITLE = "｜プリムローズ";
$FAVICON_PATH = "../images/";
$PAGE_NAME = "prim";
$PAGE_NUM = "02.";
$PAGE_DESC_TITLE = "バンケット“プリムローズ”";
$PAGE_DESCRIPTION = "全面ガラスのハイウィンドウから自然光が降り注ぐ明るい会場。<br>会場前に広がるガーデンやテラスを使った演出もお勧め。<br>■着席100名まで";
$CLASS_NAME_FOOTER = "page__footer";
?>

<?php include_once('layout/header.php'); ?>
<body>
    <div class="page__container">
        <?php include_once('component/returnbtn.php'); ?>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="../images/prim/prim01.jpg" alt="プリム1">
                </div>
                <div class="swiper-slide">
                    <img src="../images/prim/prim02.jpg" alt="プリム2">
                </div>
                <div class="swiper-slide">
                    <img src="../images/prim/prim03.jpg" alt="プリム3">
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <?php include_once('component/description.php'); ?>
        <?php include('component/video.php'); ?>
    </div>
    <?php include_once('layout/footer.php'); ?>
    <!-- swiper CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/swiper.js"></script>
</body>

</html>