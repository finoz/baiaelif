<section id="teachers" class="section section__teachers">
    <div class="section__inner">
        <div class="section__content">
        <h2 class="section__title"><?php echo $texts['teachers']['title']; ?></h2>
        </div>
        <div class="section__listwrapper">
            <ul class="section__list">
                <?php foreach ($texts['teachers']['list'] as $teacher) : ?>
                <li>
                    <figure><img src="./img/teachers/<?php echo $teacher['id']; ?>.jpg" alt=""></figure>
                    <h3><?php echo $teacher['name']; ?> <?php echo $teacher['surname']; ?></h3>
                    <p><?php echo $teacher['company']; ?></p>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>
