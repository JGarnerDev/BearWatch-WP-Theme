<?php get_header() ?>



<div class="container content">

    <?php if (is_active_sidebar('showcase')) : ?>
    <?php dynamic_sidebar('showcase') ?>
    <?php endif; ?>


    <?php if (is_active_sidebar('box1')) : ?>
    <?php dynamic_sidebar('box1') ?>
    <?php endif; ?>

    <?php if (is_active_sidebar('box2')) : ?>
    <?php dynamic_sidebar('box2') ?>
    <?php endif; ?>

    <?php if (is_active_sidebar('box3')) : ?>
    <?php dynamic_sidebar('box3') ?>
    <?php endif; ?>
</div>

<?php get_footer() ?>