<?php
$STYLE_CSS_PATH = "../css/";
$RESET_CSS_PATH = "../css/";
$PAGE_TITLE = "｜宿泊ヴィラ(オリフ)";
$FAVICON_PATH = "../images/";
$PAGE_NAME = "olif";
$PAGE_NUM = "05.";
$PAGE_DESC_TITLE = "宿泊ヴィラ“Olif（オリフ）”";
$PAGE_DESCRIPTION = "2023年オープンの4棟のヴィラ。各棟に専用の露天風呂も完備しており、四季折々の自然を感じながら、ゆったりとした時間を過ごせる場所。<br>ヴィラ中央にあるガーデンでの屋外ウエディングも可能。";
$CLASS_NAME_FOOTER = "page__footer";
?>

<?php include_once('layout/header.php'); ?>
<body>
    <div class="page__container">
        <?php include_once('component/returnbtn.php'); ?>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="../images/olif/olif01.jpg" alt="オリフ_外観">
                </div>
                <div class="swiper-slide">
                    <img src="../images/olif/olif02.jpg" alt="オリフ_内観">
                </div>
                <div class="swiper-slide">
                    <img src="../images/olif/olif03.jpg" alt="オリフ_暖炉">
                </div>
                <div class="swiper-slide">
                    <img src="../images/olif/olif04.jpg" alt="オリフ_温泉">
                </div>
                <div class="swiper-slide">
                    <img src="../images/olif/olif05.jpg" alt="オリフ_ベッド">
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