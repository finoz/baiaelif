<section id="about" class="section section__about">
    <div class="section__inner">
        <div class="section__content">
            <figure class="section__decoration">
                <img src="./img/logo-monogram.png" alt="">
            </figure>
            <h2 class="section__title"><?php echo $texts['about']['title']; ?></h2>
            <p class="section__subtitle"><?php echo $texts['about']['subtitle']; ?></p>
        </div>
        <div class="section__listwrapper">
            <ul class="section__list">
                <?php foreach ($texts['about']['list'] as $about_item) : ?>
                <li>
                    <h3><?php echo $about_item['title']; ?></h3>
                    <p><?php echo $about_item['text']; ?></p>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>
