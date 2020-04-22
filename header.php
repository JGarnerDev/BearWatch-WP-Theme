<!DOCTYPE html>
<!-- Step 5. -->
<html <?php language_attributes(); ?>>

<head>
    <!--  Step 4. -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Step 5. -->
    <meta charset=<?php bloginfo('charset'); ?> />

    <!-- Step 5. -->
    <?php wp_head();?>

    <title><?php bloginfo('name')?></title>
</head>

<!-- Step 5. -->

<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <h1>
                <a href="<?php echo home_url('/') ?>">
                    <?php bloginfo('name')?>
                </a>
                <small>
                    <?php bloginfo('description')?>
                </small>
            </h1>
            <div class="h_right">
                <form method="get" action="<?php esc_url( home_url('/') )?>">
                    <input type="text" placeholder="Search..." />
                </form>
            </div>
        </div>
    </header>
    <nav class="nav main-nav">
        <div class="container">
            <!-- Step 6. -->
            <?php 
            
            $args = array('theme_location' => 'primary');

            wp_nav_menu($args);

            ?>
        </div>
    </nav>