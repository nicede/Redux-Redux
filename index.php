<?php get_header() ?>

<?php
if (have_posts()) :
while ( have_posts() ) : the_post();?>

<article>
    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
    <?php the_content(); ?>

<footer>
    <div>Posted <?php the_date(); ?></div>
    <?php the_tags( '<div>Tagged: ', ', ', '</div>' ); ?> 
</footer>
</article>

<?php endwhile; ?>
<nav>
    <div id="nextPage"><?php next_posts_link('next page →') ?></div>
    <div id="previousPage"><?php previous_posts_link('← previous page') ?></div>
</nav>
<?php else : ?>
<article>
    <p>Oops, couldn't find anything!</p>
</article>
<?php endif; ?>
</section>

<?php get_sidebar() ?>
<?php get_footer() ?>