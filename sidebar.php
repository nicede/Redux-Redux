<section id="sidebar">
<?php
if ( function_exists( 'the_custom_logo' ) ) {
    echo '<div id="portrait">';
        the_custom_logo();
    echo '</div>';
}
else{
    echo '<img src="https://dummyimage.com/600x400/cccccc/fff.png">';
}
?>

    <div id="sidebar-body">
    <?php dynamic_sidebar( 'main_sidebar' ); ?>
    </div>

    <footer>
        &copy; <?php echo date('Y') ?>
    </footer>
</section>