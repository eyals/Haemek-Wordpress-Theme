<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Haemek
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<a href="/" title="לעמוד הראשי"><img src="<?php echo  get_template_directory_uri();?>/img/logo-haemek-side.svg" id="logo-haemek" alt="העמק"></a>

	<div id="search_form">
		<?php get_search_form(); ?>
	</div>

	<div id="categories_nav">
	<?php wp_list_cats("children=TRUE&hide_empty=0&optioncount=1&sort_column=count&order=desc"); ?>
	</div>


	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
