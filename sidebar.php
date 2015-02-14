
<div id="secondary" class="widget-area" role="complementary">
	<a href="/" title="לעמוד הראשי"><img src="<?php echo  get_template_directory_uri();?>/img/logo-haemek-side.svg" id="logo-haemek" alt="העמק"></a>

	<div id="userbox">
		<?php if ( is_user_logged_in() ): ?>

			<?php haemek_user_avatar_link(); ?>
			<a href="<?php echo wp_logout_url(get_permalink());?>">יציאה</a>
			<ul>
				<li><a href="/saved-post"><i class="fa fa-star"></i> שמורים</a></li>
				<li><a href="/my-posts"><i class="fa fa-user"></i> שלי</a></li>
				<li><a href="/new-post"><i class="fa fa-pencil-square-o"></i> חדש</a></li>
			</ul>

		<?php else: ?>

			התחבר/י לאתר כדי לשמור פוסטים מועדפים, להגיב לפוסטים, לדרג פוסטים ותגובות, ולתרום מהידע שלך לתושבי העמק.
			<?php jfb_output_facebook_btn(); ?>

		<?php endif; ?>
	</div>



	<div id="search_form">
		<?php get_search_form(); ?>
	</div>



	<div id="categories_nav">
	<?php wp_list_cats("children=TRUE&hide_empty=0&optioncount=1&sort_column=count&order=desc"); ?>
	</div>




	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
