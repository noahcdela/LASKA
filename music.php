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
            <iframe class="album__embed" src="" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <h3 class="album__name">Fader UPDATE 5/7</h3>
            <hr class="album__divider">
        </div>

        <div class="album">
            <iframe class="album__embed" src="https://open.spotify.com/embed/track/3s6e0qrQv41OakFukTOa0j" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <h3 class="album__name">Rest</h3>
            <hr class="album__divider">
        </div>

        <div class="album">
            <iframe class="album__embed" src="https://open.spotify.com/embed/track/1XSDwM98IbVrsX1oNlsVnM" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <h3 class="album__name">Grandma Curly</h3>
            <hr class="album__divider">
        </div>

        <div class="album">
            <iframe class="album__embed" src="https://open.spotify.com/embed/album/5HXufk3CDPlXXBEBemLbc7" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <h3 class="album__name">Time It Won’t</h3>
            <hr class="album__divider">
        </div>

        <div class="album">
            <iframe class="album__embed" src="https://open.spotify.com/embed/track/75pqd7AwECIBszeUo2kwpa" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <h3 class="album__name">2 Days of Guilt</h3>
            <hr class="album__divider">
        </div>

        <div class="album">
            <iframe class="album__embed" src="https://open.spotify.com/embed/track/4kxG6nPEe9qt6iA3yXaqHW" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <h3 class="album__name">Iris</h3>
            <hr class="album__divider">
        </div>

        <div class="album">
            <iframe class="album__embed" src="https://open.spotify.com/embed/track/0exhVBuFVRJeH7icPhKFC4" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <h3 class="album__name">Remain Consumed</h3>
            <hr class="album__divider">
        </div>

        <div class="album">
            <iframe class="album__embed" src="https://open.spotify.com/embed/album/54YJgyQS1W65cQ6v0aT0M6" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <h3 class="album__name">in the blossom of this</h3>
            <hr class="album__divider">
        </div>

        <div class="album">
            <iframe class="album__embed" src="https://open.spotify.com/embed/track/0B6chBVoGYHWqHKNQDkoay" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <h3 class="album__name">The Experiment (Acoustic)</h3>
            <hr class="album__divider">
        </div>

        <div class="album">
            <iframe class="album__embed" src="https://open.spotify.com/embed/track/5dgH6SIgomFv6OHWV15bPc" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
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