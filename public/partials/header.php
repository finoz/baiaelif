<header class="header">
    <div class="header__inner">
        <a class="header__logo" href="#hero">
        <img src="./img/logo-desktop.png" alt="Alta Formazione Agricola2000 - Logo">
        </a>
        <label class="navtoggle" for="navtoggle_checkbox">
            <input type="checkbox" id="navtoggle_checkbox">
            <span class="navtoggle__label" aria-label="toggle menu"></span>
        </label>
        <nav class="header__nav">
            <ul class="header__list">
                <?php foreach ($texts['header']['list'] as $header_item) : ?>
                <li class="header__item">
                    <a class="header__link" href="#<?php echo $header_item['id']; ?>">
                        <?php echo $header_item['text']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>
