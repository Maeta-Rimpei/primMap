<?php
$STYLE_CSS_PATH = "../css/";
$RESET_CSS_PATH = "../css/";
$PAGE_TITLE = "｜森のレストラン";
$FAVICON_PATH = "../images/";
$PAGE_NAME = "restaurant";
$PAGE_NUM = "04.";
$PAGE_DESC_TITLE = "バンケット“森のレストラン”";
$PAGE_DESCRIPTION = "少人数でゆったりと過ごせる1日1組限定のアットホームな会場。<br>ゲスト一人一人との会話やお食事を楽しみたい方にお勧め。<br>■着席28名まで";
$CLASS_NAME_FOOTER = "page__footer";
?>

<?php include_once('layout/header.php'); ?>
<body>
    <div class="page__container">
        <?php include_once('component/returnbtn.php'); ?>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="../images/restaurant/restaurant01.jpg" alt="レストラン前_新郎新婦">
                </div>
                <div class="swiper-slide">
                    <img src="../images/restaurant/restaurant02.jpg" alt="レストラン_テラス">
                </div>
                <div class="swiper-slide">
                    <img src="../images/restaurant/restaurant03.jpg" alt="レストラン_テーブル">
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <?php include_once('component/description.php'); ?>
        <?php include_once('component/video.php'); ?>
    </div>
    <?php include_once('layout/footer.php'); ?>
    <!-- swiper CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/swiper.js"></script>
</body>

</html>