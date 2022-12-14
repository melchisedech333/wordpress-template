<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    
    <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Libraries. -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles. -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css?r=<?php echo rand(1111, 9999); ?>" type="text/css" media="screen" />

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

    <header class="my-logo">
        <h1>
            <i class="fa fa-home" ></i>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
        </h1>
    </header>

    <?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>


