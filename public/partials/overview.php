<?php $pdf_url = "https://96157a2c.sibforms.com/serve/MUIFAIInS-JVxCeOkhOLOXkLNYn7VJBPbxiJVpgjipDyH0TGPz66SFgkOizsWlvGhQ-0FBIDXi3BBFQYqPMkXZvHgIq_mjh33NbrXZanN-092mP7vEKBzQbY4k0vCAqVzTqbcgovaUssqK3oShXevKJQW3XVg2XJHHts-tqwvDBXhLllRNDtcakXM4A7guTWtKcACLuTNPRUI9xA"; ?>
<section id="overview" class="section section__overview">
    <div class="section__inner">
        <div class="section__content">
            <h2 class="section__title"><?php echo $texts['overview']['title']; ?></h2>
            <p class="section__subtitle"><?php echo $texts['overview']['subtitle']; ?></p>
            <div class="section__copywrapper">
                <label class="lengthtoggle" for="lengthtoggle_checkbox">
                    <input type="checkbox" id="lengthtoggle_checkbox">
                    <span class="lengthtoggle__labelmore"><?php echo $texts['overview']['lengthtoggle_showmore']; ?></span>
                    <span class="lengthtoggle__labelless"><?php echo $texts['overview']['lengthtoggle_showless']; ?></span>
                </label>
                <div class="section__text">
                    <?php foreach ($texts['overview']['text'] as $paragraph) : ?>
                        <p><?php echo $paragraph; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>

            <a class="section__cta" href="<?php echo $pdf_url; ?>" target="_blank"><?php echo $texts['overview']['cta']; ?></a>
        </div>
    </div>
</section>
