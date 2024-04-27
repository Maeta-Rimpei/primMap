<?php
    $POSTER_PATH = "../images/poster/" .  $PAGE_NAME . "/" . $PAGE_NAME . "_poster.jpg";
    $VIDEO_PATH = "../videos/". $PAGE_NAME . "/". $PAGE_NAME . "_video.mp4";
?>

<div class="video__wrapper">
    <video controls width="100%" poster=<?php echo $POSTER_PATH; ?>  src=<?php echo $VIDEO_PATH; ?>></video>
</div>