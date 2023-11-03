<?php get_header() ?>

<?php
if (have_posts()) :
while ( have_posts() ) : the_post();?>

<article>
<h2><?php the_title() ?></h2>
    <?php the_content(); ?>

<footer>
    <div>Posted <?php the_date(); ?></div>
    <?php the_tags( '<div>Tagged: ', ', ', '</div>' ); ?> 
</footer>
</article>

<?php endwhile; ?>
<?php else : ?>
<article>
    <p>Oops, couldn't find anything!</p>
</article>
<?php endif; ?>
</section>

<?php get_sidebar() ?>
<?php get_footer() ?>