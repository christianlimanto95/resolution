<div class="section" style="background-color: <?php echo $item->resolution_background_color; ?>;">
    <div class="logo">
        <div class="resolution-image" style="background-image: url(<?php echo base_url("assets/images/resolution.png"); ?>);"></div>
        <div class="for-us">FOR US</div>
    </div>
    <div class="type-your-resolution" style="color: <?php echo $item->resolution_text_color; ?>; font-family: <?php echo $item->resolution_text_font_family; ?>;"><?php echo $item->resolution_text; ?></div>
    <a class="create-my-resolution" href="<?php echo base_url(); ?>">I want to create my own resolution too!</a>
    <div class="share-container">
        <div class="share-image" data-clipboard-text="<?php echo $url; ?>" style="background-image: url(<?php echo base_url("assets/images/share.png"); ?>);"></div>
    </div>
</div>
<script src="<?php echo base_url("assets/js/clipboard.min.js"); ?>" defer></script>