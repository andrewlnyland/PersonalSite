<?php
/**
 * Callback functions for comments
 *
 * @since AcmePhoto 1.0.0
 *
 * @param $comment
 * @param $args
 * @param $depth
 * @return void
 *
 */
if ( !function_exists('acmephoto_commment_list') ) :

    function acmephoto_commment_list($comment, $args, $depth) {
        extract($args, EXTR_SKIP);
        if ('div' == $args['style']) {
            $tag = 'div';
            $add_below = 'comment';
        }
        else {
            $tag = 'li';
            $add_below = 'div-comment';
        }
        ?>
        <<?php echo $tag ?>
        <?php comment_class(empty($args['has_children']) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
        <?php if ('div' != $args['style']) : ?>
            <div id="div-comment-<?php comment_ID() ?>" class="comment-body clearfix">
        <?php endif; ?>
        <div class="comment-author vcard">
            <?php
            if ($args['avatar_size'] != 0) echo get_avatar($comment, '64');
            echo '<cite class="fn">'.get_comment_author_link().'</cite>';
            ?>
        </div>
        <?php if ($comment->comment_approved == '0') : ?>
            <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'acmephoto'); ?></em>
            <br/>
        <?php endif; ?>
        <div class="comment-meta commentmetadata">
            <a href="<?php echo get_comment_link($comment->comment_ID); ?>">
                <i class="fa fa-clock-o"></i>
                <?php
                /* translators: 1: date, 2: time */
                printf(__('%1$s at %2$s', 'acmephoto'), get_comment_date(), get_comment_time()); ?>
            </a>
            <?php edit_comment_link(__('(Edit)', 'acmephoto'), '  ', ''); ?>
        </div>
        <?php comment_text(); ?>
        <div class="reply">
            <?php comment_reply_link( array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
        </div>
        <?php if ('div' != $args['style']) : ?>
            </div>
        <?php endif;
    }
endif;

/**
 * Return content of fixed lenth
 *
 * @since AcmePhoto 1.0.0
 *
 * @param string $acmephoto_content
 * @param int $length
 * @return string
 *
 */
if ( ! function_exists( 'acmephoto_words_count' ) ) :
    function acmephoto_words_count( $acmephoto_content = null, $length = 16 ) {

        $length = absint( $length );
        $source_content = preg_replace( '`\[[^\]]*\]`', '', $acmephoto_content );
        $trimmed_content = wp_trim_words( $source_content, $length, '...' );
        return $trimmed_content;

    }
endif;

/**
 * BreadCrumb Settings
 */
if( ! function_exists( 'acmephoto_breadcrumbs' ) ):

    function acmephoto_breadcrumbs() {

	    $acmephoto_customizer_all_values = acmephoto_get_theme_options();
	    if ( ! function_exists( 'breadcrumb_trail' ) ) {
		    require_once acmephoto_file_directory('acmethemes/library/breadcrumbs/breadcrumbs.php');
	    }
	    $breadcrumb_args = array(
		    'container'   => 'div',
		    'show_browse' => false
	    );
	    $acmephoto_you_are_here_text = $acmephoto_customizer_all_values['acmephoto-you-are-here-text'];
	    if( !empty( $acmephoto_you_are_here_text ) ){
		    $acmephoto_you_are_here_text = "<span class='breadcrumb'>".$acmephoto_you_are_here_text."</span>";
	    }

	    echo "<div class='breadcrumbs clearfix'>".$acmephoto_you_are_here_text."<div id='acmephoto-breadcrumbs'>";
	    breadcrumb_trail( $breadcrumb_args );
	    echo "</div></div><div class='clear'></div>";
    }
endif;

/**
 * check if WooCommerce activated
 */
function acmephoto_is_woocommerce_active() {
	return class_exists( 'WooCommerce' ) ? true : false;
}