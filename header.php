<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Scene_And_Heard
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

    <title>Scene & Herd</title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/png" id="favicon" href="img/favicon.ico" />
    <link rel="stylesheet" href="https://use.typekit.net/bgc4mak.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site-header">
        <div class="main-header">
            <div class="d-flex justify-space-between align-items-center  ">
                <?php
                    if (function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_url($custom_logo_id, 'full');
//                            var_dump($logo);
//                            exit();
                    } ?>
                <div class="site-logo">
                    <a href="<?= get_home_url(); ?>"> <img src="<?php echo $logo; ?>" width="220" height="116"
                            alt="" /></a>
                </div>
                <div class="main-navigation">
                    <div class="site-toggle">
                        <i>
                            <span></span>
                            <span></span>
                        </i>
                    </div>
                    <div class="site-nav">
                        <div class="nav-close">Close <img src="img/close-white.svg" alt="">
                        </div>
                        <div class="nav-wrapper">
                            <?php
			             wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>

                        </div>
                    </div>
                </div>
            </div>
    </header>