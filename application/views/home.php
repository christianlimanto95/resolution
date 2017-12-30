<div class="section">
    <div class="logo">
        <div class="resolution-image" style="background-image: url(<?php echo base_url("assets/images/resolusi.png"); ?>);"></div>
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
    <div class="font-image button" style="background-image: url(<?php echo base_url("assets/images/T.png"); ?>);"></div>
    <div class="color-image button" style="background-image: url(<?php echo base_url("assets/images/watercolor.png"); ?>);"></div>
    <div class="arrow-image button" style="background-image: url(<?php echo base_url("assets/images/panah.png"); ?>);"></div>
    <div class="modal font-modal">
        <div class="font-container">
            <div class="font-color-picker">
                <label data-value="#bf3f3f"></label>
                <label data-value="#bf553f"></label>
                <label data-value="#bf6a3f"></label>
                <label data-value="#bf7f3f"></label>
                <label data-value="#bf943f"></label>
                <label data-value="#bfaa3f"></label>
                <label data-value="#bfbf3f"></label>
                <label data-value="#a9bf3f"></label>
                <label data-value="#94bf3f"></label>
                <label data-value="#7fbf3f"></label>
                <label data-value="#6abf3f"></label>
                <label data-value="#55bf3f"></label>
                <label data-value="#3fbf3f"></label>
                <label data-value="#3fbf54"></label>
                <label data-value="#3fbf6a"></label>
                <label data-value="#3fbf7f"></label>
                <label data-value="#3fbf94"></label>
                <label data-value="#3fbfaa"></label>
                <label data-value="#3fbfbf"></label>
                <label data-value="#3faabf"></label>
                <label data-value="#3f94bf"></label>
                <label data-value="#3f7fbf"></label>
                <label data-value="#3f6abf"></label>
                <label data-value="#3f54bf"></label>
                <label data-value="#3f3fbf"></label>
                <label data-value="#553fbf"></label>
                <label data-value="#6a3fbf"></label>
                <label data-value="#7f3fbf"></label>
                <label data-value="#943fbf"></label>
                <label data-value="#a93fbf"></label>
                <label data-value="#bf3fbf"></label>
                <label data-value="#bf3fa9"></label>
                <label data-value="#bf3f94"></label>
                <label data-value="#bf3f7f"></label>
                <label data-value="#bf3f6a"></label>
                <label data-value="#bf3f55"></label>
            </div>
            <div class="font font-1" data-value="century-gothic">Aa</div>
            <div class="font font-2" data-value="pier-sans">Bb</div>
            <div class="font font-3" data-value="Times New Roman">Cc</div>
            <div class="font font-4" data-value="textmeone">Dd</div>
        </div>
        <div class="btn-done">Done</div>
    </div>
    <div class="modal background-modal">
        <div class="background-container">
            <div class="background-color-picker">
                <label data-value="#bf3f3f"></label>
                <label data-value="#bf553f"></label>
                <label data-value="#bf6a3f"></label>
                <label data-value="#bf7f3f"></label>
                <label data-value="#bf943f"></label>
                <label data-value="#bfaa3f"></label>
                <label data-value="#bfbf3f"></label>
                <label data-value="#a9bf3f"></label>
                <label data-value="#94bf3f"></label>
                <label data-value="#7fbf3f"></label>
                <label data-value="#6abf3f"></label>
                <label data-value="#55bf3f"></label>
                <label data-value="#3fbf3f"></label>
                <label data-value="#3fbf54"></label>
                <label data-value="#3fbf6a"></label>
                <label data-value="#3fbf7f"></label>
                <label data-value="#3fbf94"></label>
                <label data-value="#3fbfaa"></label>
                <label data-value="#3fbfbf"></label>
                <label data-value="#3faabf"></label>
                <label data-value="#3f94bf"></label>
                <label data-value="#3f7fbf"></label>
                <label data-value="#3f6abf"></label>
                <label data-value="#3f54bf"></label>
                <label data-value="#3f3fbf"></label>
                <label data-value="#553fbf"></label>
                <label data-value="#6a3fbf"></label>
                <label data-value="#7f3fbf"></label>
                <label data-value="#943fbf"></label>
                <label data-value="#a93fbf"></label>
                <label data-value="#bf3fbf"></label>
                <label data-value="#bf3fa9"></label>
                <label data-value="#bf3f94"></label>
                <label data-value="#bf3f7f"></label>
                <label data-value="#bf3f6a"></label>
                <label data-value="#bf3f55"></label>
            </div>
        </div>
        <div class="btn-done">Done</div>
    </div>
</div>