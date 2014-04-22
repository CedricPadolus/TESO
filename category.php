<?php get_header();?>
<div id="content">
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div id="thepost">
    <a href="<?php the_permalink(); ?>"><div id="thepost-thumb"><div class="post-content">
      <?php the_excerpt(); ?>
      </div><?php the_post_thumbnail('customsmall'); ?>
    </div></a>
      <h3 class="post-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h3>
      <p class="post-info">
        Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
      </p>

    </div>
  <?php endwhile; ?>
<?php else : ?>
  <p class="nothing">
    Il n'y a pas de Post à afficher !
  </p>
<?php endif; ?>
</div><!-- content -->
<?php get_sidebar();?>
<?php get_footer();?>