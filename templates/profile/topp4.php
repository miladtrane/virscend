<section id="content">
	<div id="buddypress">
		<div class="member_header">
			<?php

			/**
			 * Fires before the display of member home content.
			 *
			 * @since BuddyPress (1.2.0)
			 */
			do_action( 'bp_before_member_home_content' ); ?>

			<div id="item-header" role="complementary">
				<?php bp_get_template_part( 'members/single/member-header3' ) ?>
			</div>
		</div><!-- #item-header -->
		<div id="item-nav" class="">
			<div class="item-list-tabs no-ajax" id="object-nav" role="navigation">
				<div class="<?php echo vibe_get_container(); ?>">
					<ul>

						<?php bp_get_displayed_user_nav(); ?>

						<?php do_action( 'bp_member_options_nav' ); ?>

					</ul>
				</div>
			</div>
		</div><!-- #item-nav -->
	    <div class="<?php echo vibe_get_container(); ?>">
	        <div class="row">	
				<div class="col-md-12">
					<div class="padder">
						