<section id="advantages" class="section section__advantages">
    <div class="section__inner">
        <h2 class="section__title"><?php echo $texts['advantages']['title']; ?></h2>
        <ul class="section__list">
            <?php foreach ($texts['advantages']['list'] as $advantage) : ?>
                <li><?php echo $advantage; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
