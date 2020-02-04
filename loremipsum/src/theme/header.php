<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="author" content="Krystian Kuzminski"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
    <div class="container">
        <a href="#" class="header__logo-link">
            <svg class="header__logo" width="218px" height="39px" viewBox="0 0 218 39" version="1.1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="assets/logo" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g>
                        <circle id="Oval" fill="#FFC625" fill-rule="nonzero" cx="19.5" cy="19.5" r="19.5"></circle>
                        <text id="LoremIpsum" font-family="Poppins-SemiBold, Poppins" font-size="26" font-weight="500"
                              fill="#000000">
                            <tspan x="53" y="28">LOREMIPSUM</tspan>
                        </text>
                    </g>
                </g>
            </svg>
        </a>
    </div>
</header>

<?php //edit_post_link('Edit', '<p class="edit-button">', '</p>'); ?>
