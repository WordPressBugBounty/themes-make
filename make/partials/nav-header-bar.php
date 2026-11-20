<?php
/**
 * @package Make
 */
?>

<?php if ( ! empty( $header_bar_menu ) ): ?>
    <nav class="header-navigation" role="navigation">
        <?php if ( 'header-bar' === $mobile_menu ): ?>
            <button class="menu-toggle"><?php echo esc_html( make_get_thememod_value( 'navigation-mobile-label' ) ); ?></button>
        <?php endif;?>
        <?php echo $header_bar_menu; ?>
    </nav>
<?php endif; ?>