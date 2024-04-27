<?php
$STYLE_CSS_PATH = "../css/";
$RESET_CSS_PATH = "../css/";
$PAGE_TITLE = "｜フローレンス";
$FAVICON_PATH = "../images/";
$PAGE_NUM = "06.";
$PAGE_DESC_TITLE = "宿泊施設“フローレンス";
$PAGE_DESCRIPTION = "大山山麓に位置するお洒落な洋館を丸ごと1棟貸切り。最大21名までご宿泊可能。大人数でのご利用にお勧めです。";
$CLASS_NAME_FOOTER = "page__no-video-footer";
?>

<?php include_once('layout/header.php'); ?>
<body>
    <div class="page__container">
        <?php include_once('component/returnbtn.php'); ?>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="../images/florence/florence01.jpg" alt="フローレンス_外観">
                </div>
                <div class="swiper-slide">
                    <img src="../images/florence/florence02.jpg" alt="フローレンス_リビング">
                </div>
                <div class="swiper-slide">
                    <img src="../images/florence/florence03.jpg" alt="フローレンス_ベッド01">
                </div>
                <div class="swiper-slide">
                    <img src="../images/florence/florence04.jpg" alt="フローレンス_ベッド02">
                </div>
                <div class="swiper-slide">
                    <img src="../images/florence/florence05.jpg" alt="フローレンス_キッチン">
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
       <?php include_once('component/description.php'); ?>
    </div>
    <?php include_once('layout/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/swiper.js"></script>
</body>

</html>