<?php if ( ! defined( 'ABSPATH' ) ) exit;
if(!strip_tags($_GET['s'])){
    wp_redirect(get_permalink(get_option('page_for_posts')));
}
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/posts'); ?>

<?php get_footer();