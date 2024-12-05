<section id="partners" class="section section__partners">
<div class="section__inner">
    <h2 class="section__title"><?php echo $texts['partners']['title']; ?></h2>
    <ul class="section__logos">
    <?php foreach ($texts['partners']['list'] as $logo) : ?>
        <li class="section__logo">
            <img src="img/patrocini/<?php echo $logo; ?>.png" alt="<?= $logo; ?>">
        </li>
    <?php endforeach; ?>
    </ul>
</div>
</section>
