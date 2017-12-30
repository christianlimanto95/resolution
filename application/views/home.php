<div class="section">
    <div class="logo">
        <div class="resolution-image" style="background-image: url(<?php echo base_url("assets/images/resolution.png"); ?>);"></div>
        <div class="for-us">FOR US</div>
        <div class="tree-image" style="background-image: url(<?php echo base_url("assets/images/tree.png"); ?>);"></div>
    </div>
    <div class="steps">
        <div class="step step-1">
            <div class="step-title">STEP 1</div>
            <div class="step-description">Type Your Resolution</div>
        </div>
        <div class="step step-2">
            <div class="step-title">STEP 2</div>
            <div class="step-description">Customize fonts and color</div>
        </div>
        <div class="step step-3">
            <div class="step-title">STEP 3</div>
            <div class="step-description">Download and share!</div>
        </div>
    </div>
    <form class="form-submit" method="post" action="<?php echo base_url("home/submit_resolution"); ?>">
        <textarea name="resolution_text" class="type-your-resolution" placeholder="Type your resolution here (max: 100 characters)" ></textarea>
        <input type="hidden" name="resolution_text_color" value="#FFFFFF" />
        <input type="hidden" name="resolution_text_font_family" value="pier-sans" />
        <input type="hidden" name="resolution_background_color" value="#790000" />
    </form>
    <div class="arrow-image" style="background-image: url(<?php echo base_url("assets/images/panah.png"); ?>);"></div>
</div>