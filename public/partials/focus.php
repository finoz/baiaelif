<section id="focus" class="section section__focus">
    <div class="section__inner">
        <div class="section__listwrapper">
            <ul class="section__list">
                <?php foreach ($texts['focus']['list'] as $focus_item) : ?>
                <li>
                    <h3><?php echo $focus_item['title']; ?></h3>
                    <i class="icon icon__<?php echo $focus_item['icon']; ?>"></i>
                    <strong><?php echo $focus_item['subtitle']; ?></strong>
                    <p><?php echo $focus_item['text']; ?></p>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>
