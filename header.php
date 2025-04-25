<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Anders Jørgensen - Multimediedesigner</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo("name"); ?></title>
        <?php wp_head(); ?>
    </head>

<?php
  $logoImage = get_field("logo");
?>
  <body <?php body_class(); ?>>
    <header>
        <div class="logo">
            <img src="<?php echo esc_url($logoImage['url']); ?>" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#om-mig-sektionen">Om Mig</a></li>
                <li><a href="#portfolio-sektionen">Portfolio</a></li>
                <li><a href="#kontakt-sektionen">Kontakt</a></li>
            </ul>
        </nav>
    </header>