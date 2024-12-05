<section id="pricing" class="section section__pricing">
    <div class="section__inner">
        <div class="section__content">
            <h2 class="section__title"><?php echo $texts['pricing']['title']; ?></h2>
            <p class="section__subtitle"><?php echo $texts['pricing']['subtitle']; ?></p>
            <a href="#registration" class="section__cta"><?php echo $texts['pricing']['cta']; ?></a>
            <div class="section__card card">
                <span class="card__badge"><?php echo $texts['pricing']['offer']['badge']; ?></span>
                <p class="card__terms"><?php echo $texts['pricing']['offer']['terms']; ?></p>
                <p class="card__price">
                    <span class="card__price-full"><?php echo $texts['pricing']['offer']['price_full']; ?></span>
                    <span class="card__price-sale"><?php echo $texts['pricing']['offer']['price_sale']; ?></span>
                    <span class="card__price-percent"><?php echo $texts['pricing']['offer']['percent_sale']; ?></span>
                </p>
                <ul class="card__list">
                    <?php foreach ($texts['pricing']['offer']['list'] as $item) : ?>
                        <li><?php echo $item; ?></li>
                    <?php endforeach; ?>
                </ul>
                <p class="card__note"><?php echo $texts['pricing']['offer']['note']; ?></p>
            </div>
        </div>
    </div>
</section>

