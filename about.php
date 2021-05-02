<?php /* Template Name: About */ ?>
<?php get_header();?>

<section id="about" class="about">
    <div class="container">
        <h2><?php echo get_the_title(); ?></h2>
        <p class="about-intro">
            <?php the_field('about_intro'); ?>
        </p>

        <?php 
        $image = get_field('band_photo');
        if( !empty($image) ): ?>
        <img class="about-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>

        <div class="about-main">
            <?php the_field('about'); ?>
        </div>
    </div>
</section>

<?php get_footer();?>