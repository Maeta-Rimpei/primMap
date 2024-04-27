<?php
$STYLE_CSS_PATH = "../css/";
$RESET_CSS_PATH = "../css/";
$PAGE_TITLE = "｜受付・親族控室・ゲスト更衣室";
$FAVICON_PATH = "../images/";
$PAGE_NUM = "09.";
$PAGE_DESC_TITLE = "受付・親族控室・ゲスト更衣室";
$PAGE_DESCRIPTION = "挙式までの時間もゆったりと四季を感じながらお過ごしいただけます。授乳室やキッズルームも完備。";
$CLASS_NAME_FOOTER = "page__no-video-footer";
?>

<?php include_once('layout/header.php'); ?>
<body>
    <div class="page__container">
        <?php include_once('component/returnbtn.php'); ?>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="../images/front/front01.jpg" alt="受付_外観">
                </div>
                <div class="swiper-slide">
                    <img src="../images/front/front02.jpg" alt="親族控室1">
                </div>
                <div class="swiper-slide">
                    <img src="../images/front/front03.jpg" alt="親族控室2">
                </div>
                <div class="swiper-slide">
                    <img src="../images/front/front04.jpg" alt="キッズルーム">
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