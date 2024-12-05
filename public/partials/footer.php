<footer class="footer">
    <div class="footer__inner">
        <p class="footer__corp"><?php echo $texts['footer']['corp']; ?></p>
        <nav class="footer__nav">
            <ul>
                <?php foreach ($texts['footer']['list'] as $item) { ?>
                    <?php
                        $link = '#' . $item['id'];
                        if (!empty($item['link'])) {
                            $link = $item['link'];
                        } ?>
                    <li>
                        <a href="<?php echo $link; ?>" class="footer__link">
                            <?php echo $item['text']; ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</footer>