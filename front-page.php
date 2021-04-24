<?php /* Template Name: Home */ ?>
<?php get_header();?>

<section id="hero" class="hero">
    <div class="container">
        <h1 class="sr-only">
            <?php bloginfo('title'); ?>
        </h1>
        <img class="hero-logo" src="<?php echo get_template_directory_uri() . '/images/laska-logo.svg'; ?>" alt="LASKA">
        <?php 
        $image = get_field('featured_album');
        if( !empty($image) ): ?>
        <img class="hero-album" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
    </div>
</section>

<section id="music" class="music">

    <div class="container">

        <h2 class="sr-only">Music</h2>

        <div class="featured-album">
            <div class="featured-album__play-btn"></div>
            <?php 
        $image = get_field('featured_album');
        if( !empty($image) ): ?>
            <img class="featured-album__art" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>

            <iframe class="featured-album__spotify" src="https://open.spotify.com/embed/album/54YJgyQS1W65cQ6v0aT0M6"
                frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>

        <?php if( get_field('music_headline') ): ?>
        <div class="music__headline">
            <?php the_field('music_headline'); ?>
        </div>
        <?php endif; ?>

        <div class="music__links">
            <a target="_blank" href="https://soundcloud.com/user-504760203">Soundcloud&nbsp;➝</a><br>
            <a target="_blank" href="https://laska1.bandcamp.com/">Bandcamp&nbsp;➝</a><br>
            <a target="_blank" href="https://itunes.apple.com/us/artist/laska/id305321834">Apple Music&nbsp;➝</a><br>
            <a target="_blank" href="https://open.spotify.com/artist/5fFEbTytpTGMCPXrhVLEiR">Spotify&nbsp;➝</a>
        </div>

    </div>

</section>

<section id="shows" class="shows">
    <div class="container">
        <h2>Shows</h2>
        <?php echo gigpress_shows(); ?>
    </div>
</section>

<?php get_footer();?>