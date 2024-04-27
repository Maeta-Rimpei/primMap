<?php
$STYLE_CSS_PATH = "../css/";
$RESET_CSS_PATH = "../css/";
$PAGE_TITLE = "｜グランピングテラス";
$FAVICON_PATH = "../images/";
$PAGE_NAME = "gp";
$PAGE_NUM = "03.";
$PAGE_DESC_TITLE = "バンケット“グランピングテラス”";
$PAGE_DESCRIPTION = "開放感抜群の会場。リゾートのようなリラックス感とキャンプのような高揚感を感じながら、型にハマらない自由なパーティーを実現。<br>■着席80名まで";
$CLASS_NAME_FOOTER = "page__footer";
?>

<?php include_once('layout/header.php'); ?>
<body>
    <div class="page__container">
        <?php include_once('component/returnbtn.php'); ?>

        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="../images/gp/gp01.jpg" alt="GP_披露宴会場">
                </div>
                <div class="swiper-slide">
                    <img src="../images/gp/gp02.jpg" alt="GP_室内">
                </div>
                <div class="swiper-slide">
                    <img src="../images/gp/gp03.jpg" alt="GP_屋外宴会">
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