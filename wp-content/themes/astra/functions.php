<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.12.3' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
define( 'ASTRA_THEME_ORG_VERSION', file_exists( ASTRA_THEME_DIR . 'inc/w-org-version.php' ) );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.12.0' );

/**
 * Load in-house compatibility.
 */
if ( ASTRA_THEME_ORG_VERSION ) {
        require_once ASTRA_THEME_DIR . 'inc/w-org-version.php';
}

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

define( 'ASTRA_WEBSITE_BASE_URL', 'https://wpastra.com' );

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
        require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/lib/docs/class-astra-docs-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-command-palette.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/dark-mode.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

// Enable NPS Survey only if the starter templates version is < 4.3.7 or > 4.4.4 to prevent fatal error.
if ( ! defined( 'ASTRA_SITES_VER' ) || version_compare( ASTRA_SITES_VER, '4.3.7', '<' ) || version_compare( ASTRA_SITES_VER, '4.4.4', '>' ) ) {
        // NPS Survey Integration
        require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-notice.php';
        require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-survey.php';
}

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-memory-limit-notice.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-learn.php';
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
        /**
         * Admin Menu Settings
         */
        require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
        require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
        require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-elementor-editor-settings.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/surecart/class-astra-surecart.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-buddypress.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
        require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
        require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
        require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymous functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
        require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';

// ═══════════════════════════════════════════════════════════════
// VIDEO REVIEW FUNCTIONALITY
// ═══════════════════════════════════════════════════════════════

add_action( 'comment_form_logged_in_after', 'add_video_upload_field' );
add_action( 'comment_form_after_fields', 'add_video_upload_field' );

function add_video_upload_field() {
    if ( ! is_product() ) return;
    ?>
    <div style="margin:15px 0; padding:15px; background:#f9f9f9; border-radius:8px; border:1px solid #ddd;">
        <label for="review_video" style="display:block; font-weight:bold; margin-bottom:8px; color:#333;">
            📹 Upload Video Review (Optional)
        </label>
        <input type="file" name="review_video" id="review_video" accept="video/*"
               style="display:block; padding:8px; border:2px dashed #007cba; border-radius:5px; width:100%; box-sizing:border-box; background:white; cursor:pointer;">
        <p style="margin:5px 0 0 0; color:#666; font-size:13px;">
            ✅ Supported: MP4, MOV, AVI, MKV (Max 100MB)
        </p>
        <div id="video_preview_box" style="display:none; margin-top:15px;">
            <p style="font-weight:bold; color:#333; margin-bottom:5px;">📺 Preview:</p>
            <video id="video_preview_player" controls
                   style="max-width:100%; border-radius:8px; border:2px solid #007cba; max-height:300px;">
                Your browser does not support video.
            </video>
        </div>
    </div>
    <script>
    document.getElementById('review_video').addEventListener('change', function() {
        var file = this.files[0];
        if (file) {
            var url = URL.createObjectURL(file);
            document.getElementById('video_preview_player').src = url;
            document.getElementById('video_preview_box').style.display = 'block';
        }
    });
    </script>
    <?php
}

add_action( 'wp_footer', 'fix_review_form_enctype' );
function fix_review_form_enctype() {
    if ( ! is_product() ) return;
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.querySelector('.comment-form');
        if (form) { form.setAttribute('enctype', 'multipart/form-data'); }
    });
    </script>
    <?php
}

add_action( 'comment_post', 'save_video_review', 10, 2 );
function save_video_review( $comment_id, $approved ) {
    if ( ! isset( $_FILES['review_video'] ) || empty( $_FILES['review_video']['name'] ) ) return;

    $file    = $_FILES['review_video'];
    $allowed = array('video/mp4','video/quicktime','video/avi','video/x-msvideo','video/x-matroska','video/webm');
    if ( ! in_array( $file['type'], $allowed ) ) return;
    if ( $file['size'] > 104857600 ) return;

    require_once( ABSPATH . 'wp-admin/includes/file.php' );
    require_once( ABSPATH . 'wp-admin/includes/media.php' );
    require_once( ABSPATH . 'wp-admin/includes/image.php' );

    $attachment_id = media_handle_upload( 'review_video', 0 );

    if ( ! is_wp_error( $attachment_id ) ) {
        $original_url = wp_get_attachment_url( $attachment_id );

        $filename  = pathinfo( $original_url, PATHINFO_FILENAME );
        $path      = parse_url( $original_url, PHP_URL_PATH );
        $folder    = pathinfo( $path, PATHINFO_DIRNAME );
        $mp4_url   = 'https://baranitharan-output.s3.ap-south-1.amazonaws.com'
                     . $folder . '/' . $filename . '_converted.mp4';

        update_comment_meta( $comment_id, 'review_video_original_url', $original_url );
        update_comment_meta( $comment_id, 'review_video_mp4_url', $mp4_url );
        update_comment_meta( $comment_id, 'review_video_id', $attachment_id );
    }
}

add_filter( 'comment_text', 'display_video_in_review', 10, 2 );
function display_video_in_review( $text, $comment ) {
    if ( ! $comment ) return $text;

    $mp4_url      = get_comment_meta( $comment->comment_ID, 'review_video_mp4_url', true );
    $original_url = get_comment_meta( $comment->comment_ID, 'review_video_original_url', true );

    if ( ! $mp4_url ) return $text;

    $response  = wp_remote_head( $mp4_url, array( 'timeout' => 5 ) );
    $mp4_ready = ( ! is_wp_error( $response ) &&
                   200 === wp_remote_retrieve_response_code( $response ) );

    if ( $mp4_ready ) {
        $text .= '
        <div style="margin-top:15px; padding:15px; background:#f9f9f9;
                    border-radius:8px; border-left:4px solid #007cba;">
            <p style="font-weight:bold; margin:0 0 10px 0; color:#333;">
                📹 Video Review:
            </p>
            <video controls preload="metadata"
                   style="max-width:100%; width:500px; border-radius:8px;
                          border:1px solid #ddd; background:#000;">
                <source src="' . esc_url( $mp4_url ) . '" type="video/mp4">
                Your browser does not support video.
            </video>
            <br>
            <a href="' . esc_url( $mp4_url ) . '"
               target="_blank"
               style="font-size:13px; color:#007cba;
                      margin-top:8px; display:inline-block;">
                ⬇️ Download Video
            </a>
        </div>';
    } else {
        if ( $original_url ) {
            $orig_response = wp_remote_head( $original_url, array( 'timeout' => 5 ) );
            $orig_exists   = ( ! is_wp_error( $orig_response ) &&
                               200 === wp_remote_retrieve_response_code( $orig_response ) );

            if ( $orig_exists ) {
                $text .= '
                <div style="margin-top:15px; padding:15px; background:#fff8e1;
                            border-radius:8px; border-left:4px solid #ffc107;">
                    <p style="margin:0 0 10px 0; color:#856404; font-size:14px;">
                        ⏳ HD version is being processed. Showing original:
                    </p>
                    <video controls preload="metadata"
                           style="max-width:100%; width:500px; border-radius:8px;
                                  border:1px solid #ddd; background:#000;">
                        <source src="' . esc_url( $original_url ) . '">
                        Your browser does not support video.
                    </video>
                </div>
                <script>
                setTimeout(function(){ window.location.reload(); }, 20000);
                </script>';
            } else {
                $text .= '
                <div style="margin-top:15px; padding:15px; background:#fff8e1;
                            border-radius:8px; border-left:4px solid #ffc107;">
                    <p style="margin:0; color:#856404; font-size:14px;">
                        ⏳ Video is being processed. Refresh in 1-2 minutes.
                    </p>
                </div>
                <script>
                setTimeout(function(){ window.location.reload(); }, 20000);
                </script>';
            }
        }
    }

    return $text;
}

add_filter( 'upload_mimes', 'allow_video_uploads' );
function allow_video_uploads( $mimes ) {
    $mimes['mp4']  = 'video/mp4';
    $mimes['mov']  = 'video/quicktime';
    $mimes['avi']  = 'video/avi';
    $mimes['mkv']  = 'video/x-matroska';
    $mimes['webm'] = 'video/webm';
    $mimes['wmv']  = 'video/x-ms-wmv';
    return $mimes;
}

add_filter( 'upload_size_limit', 'increase_video_upload_limit' );
function increase_video_upload_limit( $size ) {
    return 104857600;
}

// ═══════════════════════════════════════════════════════════════
// TRACK ORDER BUTTON - INJECTED RIGHT NEXT TO "CONTINUE SHOPPING"
// Finds the green Continue Shopping button and places Track Your
// Order button right beside it at the bottom of the Thank You page
// ═══════════════════════════════════════════════════════════════

add_action( 'wp_footer', 'inject_track_button_next_to_continue_shopping' );
function inject_track_button_next_to_continue_shopping() {
    if ( ! is_order_received_page() ) return;
    ?>
    <style>
        .wc-track-order-btn {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
            color: #ffffff !important;
            padding: 14px 24px !important;
            text-decoration: none !important;
            border-radius: 6px !important;
            font-weight: bold !important;
            font-size: 15px !important;
            margin-left: 12px !important;
            box-shadow: 0 4px 15px rgba(102,126,234,0.4) !important;
            vertical-align: middle !important;
            border: none !important;
            cursor: pointer !important;
        }
        .wc-track-order-btn:hover {
            opacity: 0.88 !important;
            color: #ffffff !important;
            text-decoration: none !important;
        }
    </style>
    <script>
    document.addEventListener('DOMContentLoaded', function() {

        // WooCommerce renders "Continue Shopping" as a link with class "wc-forward"
        // Try multiple selectors to find it reliably
        var continueBtn =
            document.querySelector('.woocommerce-order a.wc-forward') ||
            document.querySelector('a.wc-forward') ||
            document.querySelector('.woocommerce-thankyou-order-received + p a') ||
            document.querySelector('.woocommerce-order .woocommerce-info a') ||
            (function() {
                // Fallback: find any link whose text contains "Continue Shopping"
                var links = document.querySelectorAll('a');
                for (var i = 0; i < links.length; i++) {
                    if (links[i].textContent.toLowerCase().indexOf('continue') !== -1) {
                        return links[i];
                    }
                }
                return null;
            })();

        if (continueBtn) {
            var trackBtn = document.createElement('a');
            trackBtn.href      = 'https://beyondcloud.store/track/';
            trackBtn.className = 'wc-track-order-btn';
            trackBtn.innerHTML = '🚚 Track Your Order';
            // Place Track button immediately AFTER the Continue Shopping button
            continueBtn.parentNode.insertBefore(trackBtn, continueBtn.nextSibling);
        }
    });
    </script>
    <?php
}
