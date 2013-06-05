<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="//mozorg.cdn.mozilla.net/media/css/tabzilla-min.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<script type="text/javascript">
    document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, '');
    var ignite = window.ignite || {};
</script>
<header class="masthead">
    <div class="busta clearfix">
        <h1 class="brand"><a href="https://mozillaignite.org/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" width="136" height="66" alt="Mozilla Ignite" /></a></h1>            
        <a href="http://www.mozilla.org" id="tabzilla" class="tab">from mozilla</a>
        <nav>
            <ul>
                <li><a href="https://mozillaignite.org/about/">About the challenge</a></li>
                <li><a href="https://mozillaignite.org/ideas/list/">Ideas</a></li>
                <li><a href="https://mozillaignite.org/apps/list/">Applications</a></li>
                <li><a href="https://mozillaignite.org/judges/">Judges</a></li>
                <li><a href="https://mozillaignite.org/resources/">Resources</a></li>
                <li><a href="https://blog.mozillaignite.org/">Blog</a></li>
            </ul>
        </nav>
    </div>
</header>
<div id="main">
    <div class="busta">
