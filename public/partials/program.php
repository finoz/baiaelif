<section id="program" class="section section__program">
    <div class="section__inner">
        <h2 class="section__title"><?php echo $texts['program']['title']; ?></h2>
        <h3 class="section__listtitle"><?php echo $texts['program']['listtitle']; ?></h3>
        <ul class="section__list">
            <?php foreach ($texts['program']['list'] as $program_item) : ?>
            <li><?php echo $program_item; ?></li>
            <?php endforeach; ?>
        </ul>
        <figure class="section__figure">
            <?php echo picture('program'); ?>
        </figure>
    </div>
</section>
