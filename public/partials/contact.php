<section id="contact" class="section section__contact">
    <div class="section__inner">
        <div class="section__content">
        <h2 class="section__title"><?php echo $texts['contact']['title']; ?></h2>
        <p class="section__subtitle"><?php echo $texts['contact']['subtitle']; ?></p>
        <a href="mailto:<?php echo $texts['global']['email']; ?>" class="section__cta"><?php echo $texts['contact']['cta']; ?></a>
        <ul class="section__list">
            <?php foreach ($texts['contact']['list'] as $contact_item) : ?>
            <li>
                <i class="icon icon__<?php echo $contact_item['icon']; ?>"></i>
                <h3><?php echo $contact_item['title']; ?></h3>
                <p><?php echo $contact_item['text']; ?></p>
            </li>
            <?php endforeach; ?>
        </ul>
        </div>
    </div>
</section>
