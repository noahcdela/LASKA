<?php /* Template Name: Music */ ?>

<?php get_header();?>

<section class="music-page">
    <div class="container">
        <h2>
            <?php the_title(); ?>
        </h2>

        <?php if( get_field('music_page_text') ): ?>
        <p class="music__copy">
            <?php the_field('music_page_text'); ?>
        </p>
        <?php endif; ?>

        <div class="album">
            <iframe class="album__embed" src="https://open.spotify.com/embed/album/54YJgyQS1W65cQ6v0aT0M6" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <h3 class="album__name">in the blossom of this</h3>
            <hr class="album__divider">
        </div>

        <div class="album">
            <iframe class="album__embed" src="https://open.spotify.com/embed/album/0wY1I7qzaYyS4U2T0mzuMG" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <h3 class="album__name">The Experiment (Acoustic)</h3>
            <hr class="album__divider">
        </div>

        <div class="album">
            <iframe class="album__embed" src="https://open.spotify.com/embed/album/6vQsp71WD8E7SGCqPcYa1f" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <h3 class="album__name">Dirty Pools</h3>
            <hr class="album__divider">
        </div>

        <div class="album">
            <iframe class="album__embed" src="https://open.spotify.com/embed/album/4b3dFlxUyTsHSbtWRfxUxQ" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <h3 class="album__name">Ceiling Zero</h3>
            <hr class="album__divider">
        </div>
    </div>
</section>

<?php get_footer();?>