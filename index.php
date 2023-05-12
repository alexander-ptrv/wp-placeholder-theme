<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link 
        rel="stylesheet" 
        href="<?php echo esc_url( get_stylesheet_uri() ); ?>" 
        type="text/css" 
    />
    <?php wp_head(); ?>
</head>
<body>
    <main class="main-wrapper">
        <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        if ( has_custom_logo() ) {
            echo 
                '<a href="https://ptrv.dev/">
                    <img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">
                </a>';
        } else {
            echo '<h1 class="main-wrapper__heading">'
                    . get_bloginfo('name') . 
                 '</h1>';
        }
        ?>
    </main>
</body>
</html>