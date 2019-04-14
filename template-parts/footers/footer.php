<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ff_base
 */

?>

    <footer class="container">
        <div class="row">
            <p class="col-12 text-right mt-5 pt-5 pb-3">Last updated: <?= get_lastpostdate( 'blog' ); ?></p>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
