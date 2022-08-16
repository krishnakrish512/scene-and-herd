<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Scene_And_Heard
 */

?>
<?php $footer = get_field('footer_settings','option');?>
<footer class="site-footer">
    <div class="site-wrapper">
        <div class="bottom-footer">
            <div class="footer-widget">
                <?php 
					if(!empty($footer['footer_logo_1'])):?>
                <div class="ftr-logo">
                    <?php echo wp_get_attachment_image($footer['footer_logo_1'],'full')?>
                </div>
                <?php endif ?>
                <div class="ftr-menu">
                    <?php
			             wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
                </div>
                <?php if(!empty($footer['partners_logo_1'])):?>
                <div class="ftr-partners">

                    <?php 
                
            // var_dump($footer['partners_logo_url_1']);
                if(!empty ($footer['partners_logo_url_1'])){  ?>
                    <a href="<?php echo esc_url($footer['partners_logo_url_1']); ?>"
                        target="_blanke"><?php echo wp_get_attachment_image($footer['partners_logo_1'],'full')?></a>

                    <?php } else{
                            
                            echo wp_get_attachment_image($footer['partners_logo_1'],'full');
                        } ?>

                    <?php if(!empty ($footer['partners_logo_url_2'])) {  ?>

                    <a href="<?php echo esc_url($footer['partners_logo_url_2']); ?>"
                        target="_blanke"><?php echo wp_get_attachment_image($footer['partners_logo_2'],'full')?></a>
                    <?php } else {
                            
                             echo wp_get_attachment_image($footer['partners_logo_2'],'full');
                        }?>
                </div>
                <?php endif?>
            </div>
        </div>
        <div class="mt-copyright">
            <?php echo wp_kses_post($footer['copyright']); ?>

            <p>Follow Us <a href="<?php echo esc_url($footer['instagram_url']); ?>"
                    target="_blank"><?php echo wp_get_attachment_image($footer['instagram_image'],'full')?></a> </p>
        </div>
        <a href="#" class="go-top"> Back to top <svg xmlns="http://www.w3.org/2000/svg" width="20.857" height="30.334"
                viewBox="0 0 20.857 30.334">
                <path id="arrow-turn-up"
                    d="M20.577,10.149a.947.947,0,0,1-1.34,0L12.323,3.237V25.595a4.745,4.745,0,0,1-4.74,4.74H.948a.948.948,0,1,1,0-1.9H7.584a2.847,2.847,0,0,0,2.844-2.844V3.237L3.514,10.149a.948.948,0,0,1-1.34-1.34L10.705.277a.948.948,0,0,1,1.34,0l8.532,8.532A.942.942,0,0,1,20.577,10.149Z"
                    fill="#696565"></path>
            </svg>
        </a>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</body>
<?php wp_footer(); ?>

</body>

</html>