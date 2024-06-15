<?php
    $POSTER_PATH = "../images/poster/" .  $PAGE_NAME . "/" . $PAGE_NAME . "_poster.jpg";
    $VIDEO_PATH = "../videos/". $PAGE_NAME . "/". $PAGE_NAME . "_video.mp4";
?>

<div class="video__wrapper">
    <video width="100%" controls poster=<?php echo $POSTER_PATH; ?>>
        <source src=<?php echo $VIDEO_PATH; ?> type="video/mp4">
        <p>お使いのブラウザではご視聴いただけません。</p>
    </video>
</div>