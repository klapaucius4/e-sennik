<?php if ( ! defined( 'ABSPATH' ) ) exit;
if(!strip_tags($_POST['s'])){
    wp_redirect(get_home_url());
}
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/posts'); ?>

<?php get_footer();