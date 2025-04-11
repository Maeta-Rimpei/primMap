<?php
$STYLE_CSS_PATH = "../css/";
$RESET_CSS_PATH = "../css/";
$PAGE_TITLE = "｜ゲストハウス";
$FAVICON_PATH = "../images/";
$PAGE_NUM = "08.";
$PAGE_DESC_TITLE = "打合せサロン“ゲストハウス”";
$PAGE_DESCRIPTION = "結婚式当日まで打合せを行う建物。個室や授乳室・キッズルームも完備。<br>お子様連れでの打合せも安心です。";
$CLASS_NAME_FOOTER = "page__no-video-footer";
?>

<?php include_once('layout/header.php'); ?>
<body>
    <div class="page__container">
        <?php include_once('component/returnbtn.php'); ?>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="../images/guest/guest01.jpg" alt="ゲストハウス_エントランス">
                </div>
                <div class="swiper-slide">
                    <img src="../images/guest/guest02.jpg" alt="ゲストハウス_ガーデン">
                </div>
                <div class="swiper-slide">
                    <img src="../images/guest/guest03.jpg" alt="ゲストハウス_集合写真">
                </div>
                <div class="swiper-slide">
                    <img src="../images/guest/guest04.jpg" alt="ゲストハウス_対応中">
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <?php include_once('component/description.php'); ?>
    </div>
    <?php include_once('layout/footer.php'); ?>
    <!-- swiper CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/swiper.js"></script>
</body>

</html>