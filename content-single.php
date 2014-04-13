<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
    <?php if ( flat_get_theme_option('single_metadata') != 0 ) ) : ?>
      <div class="entry-meta"><?php flat_entry_meta(); ?></div>
    <?php endif; ?>
	</header>

	<?php if ( has_post_thumbnail() && ! post_password_required() && flat_get_theme_option('single_featured_image') != 0 ) : ?>
		<div class="entry-thumbnail"><?php the_post_thumbnail(); ?></div>
  <?php endif; ?>

	<div class="entry-content">
		<?php the_content( __( 'Continue reading', 'flat' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'flat' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div>

	<?php
	$tag_list = get_the_tag_list( '', __( ' ', 'flat' ) );
	if ( $tag_list && is_single() ) {
		echo '<div class="tags-links">' . $tag_list . '</div>';
	} ?>
</article>

<?php if ( get_the_author_meta( 'description' ) && flat_get_theme_option('single_author_box') != 0 ) : ?>
	<?php get_template_part( 'author-bio' ); ?>
<?php endif; ?>