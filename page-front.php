<?php
/*
Template Name: Front Page
*/
get_header(); ?>

  <?php
    // If a feature image is set, get the id, so it can be injected as a css background property

    if ( has_post_thumbnail( $post->ID ) ) :
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
      $image = $image[0];
  ?>
      <div class="media-banner">
        <img src="<?php echo $image; ?>">
      </div>
  <?php
    endif;
  ?>
    <div class="row">

    <?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
        <p><?php the_tags(); ?></p>
      </footer>
      <?php comments_template(); ?>
    </article>
    <?php endwhile; // End the loop ?>
  </div>

<?php get_footer();?>