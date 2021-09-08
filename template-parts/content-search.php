<article <?php post_class(); ?>>
    <h2><a href="<?php the_permalink(); ?>" aria-label="Search"><?php the_title(); ?></a></h2>    
    <p><?php _e('Published in ', 'baixoparanaiba'); ?> <?php echo get_the_date(); ?> <?php _e('by', 'baixoparanaiba'); ?> <?php the_author_posts_link(); ?></p>
    <?php if( has_category() ) : ?>
        <p><?php _e('Categories: ', 'baixoparanaiba'); ?> <?php the_category( ' ' ); ?></p>
    <?php endif; ?>
    <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
    <?php the_excerpt(); ?>
</article>