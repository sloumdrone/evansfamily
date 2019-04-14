<?php
/**
 * Theme Utilities.
 * A place to keep small function that don't really fit
 * anywhere else
 */

/**
 * Retrieves header from template-parts/headers/{filename}
 */
function ff_get_header( $filename ) {
    $location_format = 'template-parts/headers/%s';
    return get_template_part( sprintf( $location_format, $filename ) );
}

/**
 * Retrieves footer from template-parts/footers/{filename}
 */
function ff_get_footer( $filename ) {
    $location_format = 'template-parts/footers/%s';
    return get_template_part( sprintf( $location_format, $filename ) );
}

/**
 * Retrieves sidebar from template-parts/sidebars/{filename}
 */
function ff_get_sidebar( $filename ) {
    $location_format = 'template-parts/sidebars/%s';
    return get_template_part( sprintf( $location_format, $filename ) );
}

/**
 * Retrieves sidebar from template-parts/components/{filename}
 */
function ff_get_component( $filename ) {
    $location_format = 'template-parts/components/%s';
    return get_template_part( sprintf( $location_format, $filename ) );
}

/**
 * Retrieves an asset URL, defaults to image ('img')
 */
function ff_asset_url( $filename, $type = 'img' ) {
    $url = get_template_directory_uri();
    return sprintf( '%s/assets/%s/%s', $url, $type, $filename );
}

/**
 * Removes WordPress Version in head
 */
function ff_remove_wp_version() {
    return '';
}
add_filter( 'the_generator', 'ff_remove_wp_version' );


/**
 * Prevent users from accessing admin area
 */
add_action('admin_init', 'disable_dashboard');

function disable_dashboard() {
    if (!is_user_logged_in()) {
        return null;
    }
    if (!current_user_can('administrator') && is_admin()) {
        wp_redirect(home_url());
        exit;
    }
}

/**
 * Prints a separator with text heading to the screen
 */
function evans_separator( $text='', $custom_class="", $custom_id="" ) {
    $doc = <<<HTML
        <div class="container separator %s" id="%s">
            <div class="row">
                <div class="col-12">
                    <p class="font-weight-bold">
                        %s
                    </p>
                </div>
            </div>
        </div>
HTML;
    return printf( $doc, $custom_class, $custom_id, $text);
}
