<?php get_header() ?>

		<div id="content">

			<h2 class="tag-page-title"><?php _e( 'R&eacute;sultats pour:' ) ?> <span><?php the_search_query() ?></span></h2>

<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post() ?>


<div id="post-content">
<div id="meta"><?php echo 'Il y a ' .human_time_diff(get_the_time('U'), current_time('timestamp')); ?> | <a href="<?php comments_link(); ?>"><?php comments_number( 'Soyez le premier à commenter', '1 réaction', '% réactions' ); ?></a></div>
<div id="post-block-title"><h2><a href="<?php the_permalink(); ?>"/><?php the_title ();?></a></h2></div>
	<div id="postblock-content"><?php the_excerpt("Lire la suite " . the_title('', '', false)); ?></div>	
</div>						
<?php endwhile; ?>

<?php else : ?>

			<div class="entry post no-results not-found">
				<h3 class="entry-title"><?php _e( 'Aucun resultat' ) ?></h3>
				<div class="entry-content">
					<p><?php _e( 'Aucun resultat. Merci de renouveller votre recherche.' ) ?></p>
				
				</div>
			</div><!-- .post -->

<?php endif; ?>

			<div class="navigation clearfix">
				<div class="nav-previous"><?php next_posts_link(__( 'Anciens <span class="meta-nav">Articles</span>')) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( 'Suivants <span class="meta-nav">Articles</span>' )) ?></div>
			</div>


		</div><!-- #content -->

<?php get_footer() ?>