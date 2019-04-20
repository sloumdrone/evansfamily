<?php
/**
 * Template Name: Home
 *
 * Template for displaying the home page.
 *
 * @package ff_base
 */

 ff_get_header( 'header' );
?>

<section class="section-shell" id="top-block">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mt-3">
                <h2 class="text-center text-md-left mb-4 mb-md-0 font-weight-bold">Welcome to the Evans family's home on the web!</h2>
            </div>
            <div class="col-12 col-md-6 mt-3 mt-md-0">
                <ul class="subnav">
                    <li class="mb-2 pb-2"><a href="#story" class="font-weight-bold downlink">Our story</a></li>
                    <li class="mb-2 pb-2"><a href="#recent" class="font-weight-bold downlink">Recent news</a></li>
                    <li class="mb-2 pb-2"><a href="#contact" class="font-weight-bold downlink">Contact info</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section-shell mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">
                <img src="<?= ff_asset_url('BandAcharityWedding_square.jpg'); ?>">
            </div>
            <div class="col-12 col-md-6 offset-md-1 mt-4 mt-md-2">
                <p class="text-center text-md-left">
                    We set up this website so that friends and family, near and far, could keep up with us and stay in touch. Doing this here rather than Facebook or the like allows us to be in control of our own information and images.
                </p>
                <p class="text-center text-md-left">
                    On this site you will find contact information, pictures, videos, and blog posts. Feel free to comment on the blog posts and send us any pictures that you think we, or others, would like to see (to the e-mail addresses listed in the contact section). We would greatly appreciate it if you did not post photos of us to social media.
                </p>
            </div>
        </div>
    </div>
</section>
<?php evans_separator('Our story so far...', '', 'story'); ?>
<section class="section-shell">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img alt="" role="presentation" src="<?= ff_asset_url('transparentinfinitywedding.png'); ?>" class="float-right d-none d-md-inline-block" style="width: 55%; margin: 0 0 1rem 1rem;">
				        <?php while ( have_posts() ) : the_post(); ?>
					          <?php the_content(); ?>
				        <?php endwhile; ?>
            </div>
            <div class="col-12 col-md-6 text-center d-md-none">
                <img alt="" role="presentation" src="<?= ff_asset_url('transparentinfinitywedding.png'); ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
            </div>
            <div class="col-12 col-md-6 mt-5 mt-md-0">

            </div>
        </div>
    </div>
</section>
<?php evans_separator('Our contact information...', '', 'contact'); ?>
<section class="section-shell">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mt-4 mt-md-0">
                <div class="row">
                    <div class="col-12 mb-4 text-center">
                        <span class="profile-pic-holder">
                            <span style="background-image: url(<?= ff_asset_url('alicia_profile_circle.png'); ?>);" class="profile-pic"></span>
                        </span>
                    </div>
                    <div class="col-12 text-center"><a href="tel:1-347-265-5204">(347) 265-5204</a></div>
                    <div class="col-12 text-center"><a href="mailto:alicia.evans@protonmail.com">alicia.evans@protonmail.com</a></div>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5 mt-md-0 pb-5">
                <div class="row">
                    <div class="col-12 mb-4 mt-5 mt-md-0 text-center">
                        <span class="profile-pic-holder">
                            <span style="background-image: url(<?= ff_asset_url('brian_profile_circle.png'); ?>);" class="profile-pic"></span>
                        </span>
                    </div>
                    <div class="col-12 text-center"><a href="tel:1-949-748-9739">(949) 748-9739</a></div>
                    <div class="col-12 text-center"><a href="mailto:brian.michael.evans@protonmail.com">brian.michael.evans@protonmail.com</a> <em>(family/friends)</em></div>
                    <div class="col-12 text-center"><a href="mailto:b__m__e@mailfence.com">b__m__e@mailfence.com</a> <em>(public)</em></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mt-5 font-weight-bold">
                652 Quail Meadow<span class="d-none d-md-inline">,</span><br class="d-md-none"> Irvine, CA 92506
            </div>
        </div>
    </div>
</section>

<?php ff_get_footer( 'footer' ); ?>
