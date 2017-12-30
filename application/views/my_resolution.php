<div class="section" style="background-color: <?php echo $item->resolution_background_color; ?>;">
    <div class="logo">
        <div class="resolution-image" style="background-image: url(<?php echo base_url("assets/images/resolusi.png"); ?>);"></div>
    </div>
    <div class="type-your-resolution" style="color: <?php echo $item->resolution_text_color; ?>; font-family: <?php echo $item->resolution_text_font_family; ?>;"><?php echo $item->resolution_text; ?></div>
    <a class="create-my-resolution" href="<?php echo base_url(); ?>">I want to create my own resolution too!</a>
    <div class="share-container">
        <div class="share-image" data-clipboard-text="<?php echo "Here's my 2018 resolution. Create yours too!" . "\r\n\r\n" .  $url; ?>" style="background-image: url(<?php echo base_url("assets/images/share.png"); ?>);"></div>
        <div class="line-it-button" data-lang="en" data-type="share-d" data-url="<?php echo "Here's my 2018 resolution. Create yours too!" . "\r\n\r\n" .  $url; ?>" style="display: none;" ></div>
    </div>
</div>
<div class="notif">Link copied</div>
<script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
<script src="<?php echo base_url("assets/js/clipboard.min.js"); ?>" defer></script>