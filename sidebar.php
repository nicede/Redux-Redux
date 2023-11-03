<section id="sidebar">
<?php
echo '<div id="portrait">';
if ( has_custom_logo() ) {
        the_custom_logo();
}
else{
    echo '<img src="https://dummyimage.com/120x120/cccccc/fff.png">';
}
echo '</div>';
?>

    <div id="sidebar-body">
    <?php dynamic_sidebar( 'main_sidebar' ); ?>
    </div>

    <footer>
        &copy; <?php echo date('Y') ?>
    </footer>
</section>