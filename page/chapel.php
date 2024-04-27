<?php
$STYLE_CSS_PATH = "../css/";
$RESET_CSS_PATH = "../css/";
$PAGE_TITLE = "｜森と水の教会";
$FAVICON_PATH = "../images/";
$PAGE_NAME = "chapel";
$PAGE_NUM = "01.";
$PAGE_DESC_TITLE = "チャペル“森と水の教会”";
$PAGE_DESCRIPTION = "大山の四季に包まれた美しいチャペル。<br>目の前にきらめく水面と大山の雄大な風景が広がり、チャペルにいながらも自然を感じられる空間。";
$CLASS_NAME_FOOTER = "page__footer";
?>

<?php include_once('layout/header.php'); ?>
<body>
    <div class="page__container page__chapel">
        <?php include_once('component/returnbtn.php'); ?>
        <div class="swiper">
            <div class="chapel__image-list-wrapper swiper-wrapper">
                <div class="chapel__image swiper-slide">
                    <img src="../images/chapel/chapel01.jpg" alt="チャペル_新郎新婦対面">
                </div>
                <div class="chapel__image swiper-slide">
                    <img src="../images/chapel/chapel02.jpg" alt="チャペル_バージンロード_新郎新婦後ろ姿">
                </div>
                <div class="chapel__image swiper-slide">
                    <img src="../images/chapel/chapel03.jpg" alt="チャペル_バージンロード_新婦">
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