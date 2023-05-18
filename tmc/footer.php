<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package st
 */
$social_lists   = tmc_get_option( 'tmc_social_list');
$num            = tmc_get_footer_option( 'footer_column', 3 );
$form_id        = tmc_get_footer_option( 'form_subscribe' );
?>

    </div><!-- #content -->
    <?php if (!is_404()): ?>
    <footer id="colophon" class="site-footer">
        <div class="footer-info">
            <div class="container">
                <div class="tmc-newletter my-5 pb-md-5 text-center">
                    <?php echo do_shortcode('[contact-form-7 id="'. $form_id .'"]');?>
                </div>
                <div class="z-index-3">
                    <div class="row">
                        <div class="col-md-3 lg-sc-fr">
                            <div class="footer-logo">
                                <?php
                                $image = tmc_get_footer_option( 'f_logo');
                                if(!empty($image)):?>
                                    <img src="<?php echo esc_url($image);?>" alt="<?php esc_html_e('Tomochain','tmc')?>">
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="col-md-6 nav-ft-menu">
                            <div class="row">
                                <?php
                                    $i = 0;
                                    switch ( $num ) {
                                        case 4 : $class = 'col-sm-3 mt-3 mt-md-0';
                                        break;
                                        case 3 : $class = 'col-sm-4 mt-4 mt-md-0';
                                        break;
                                        case 2 : $class = 'col-md-6 col-sm-12 mt-md-0';
                                        break;
                                        case 1 : $class = 'col-md-12 mt-md-0';
                                        break;
                                    }
                                    while ( $i < $num ) : $i ++;
                                        echo '<div class="'. $class .'">';
                                        dynamic_sidebar( 'tmc-footer-' . $i );
                                        echo '</div>';
                                    endwhile;
                                ?>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4 mt-md-0">
                            <h4 class="widget-title">Contact us</h4>
                            <ul class="social-list">
                                <?php
                                $url = $title = $icon = '';
                                foreach ( (array) $social_lists as $k => $s ) {
    
                                    if ( isset( $s['social_name'] ) ) {
                                        $title = esc_html( $s['social_name'] );
                                    }
    
                                    if ( isset( $s['social_icon'] ) ) {
                                        $icon = $s['social_icon'];
                                    }
    
                                    if ( isset( $s['social_url'] ) ) {
                                    $url = esc_url( $s['social_url'] );
                                    }?>
                                    <li class="social-item">
                                        <a href="<?php echo esc_url($url);?>" target="_blank" title="<?php echo $title?>"><?php echo $icon?></a>
                                    </li>
                                <?php }
                                ?>
                                <li class="social-item">
                                    <div class="popup icon-weixin">
                                        <i class="fab fa-weixin"></i>
                                        <div class="wechat-qrc"> <img src="https://tomochain.com/wp-content/uploads/2021/04/wechat-qr-code.jpg" alt="qr-code"> </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- #colophon -->
    <?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
