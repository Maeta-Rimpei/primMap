<?php
$STYLE_CSS_PATH = "../css/";
$RESET_CSS_PATH = "../css/";
$PAGE_TITLE = "｜浮島ホワイトガーデン/オープンガーデン";
$FAVICON_PATH = "../images/";
$PAGE_NAME = "garden";
$PAGE_NUM = "07.";
$PAGE_DESC_TITLE = "浮島ホワイトガーデン＆オープンガーデン";
$PAGE_DESCRIPTION = "四季折々の花々が咲き誇るガーデン。大山を望む挙式や開放的なウェルカムパーティー・披露宴が可能です。";
$CLASS_NAME_FOOTER = "page__footer";
?>

<?php include_once('layout/header.php'); ?>
<body>
    <div class="page__container">
        <?php include_once('component/returnbtn.php'); ?>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="../images/garden/garden01.jpg" alt="ガーデン_新郎新婦">
                </div>
                <div class="swiper-slide">
                    <img src="../images/garden/garden02.jpg" alt="ガーデン_外">
                </div>
                <div class="swiper-slide">
                    <img src="../images/garden/garden03.jpg" alt="ガーデン_全貌">
                </div>
                <div class="swiper-slide">
                    <img src="../images/garden/garden04.jpg" alt="ガーデン_別アングル">
                </div>
                <div class="swiper-slide">
                    <img src="../images/garden/garden05.jpg" alt="ガーデン_ディナー">
                </div>
                <div class="swiper-slide">
                    <img src="../images/garden/garden06.jpg" alt="ガーデン_テーブル">
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