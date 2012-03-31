<?php
    require_once TEMPLATEPATH . '/lib/Themater.php';
    $theme = new Themater();
    $theme->theme_name = 'Novato';
    $theme->options['includes'] = array('featuredposts');
    
    // Defaullt theme options
    if(is_admin()) {
        unset($theme->admin_options['Ads']);
    }
    $theme->options['plugins_options']['featuredposts'] = array('image_sizes' => '580px. x 300px.', 'speed' => '400');
    
    $theme->options['widgets_options']['posts'] = array('display_content' => false, 'display_read_more' => false);
    
    $theme->options['menus']['menu-primary']['effect'] = 'slide';
    $theme->options['menus']['menu-secondary']['effect'] = 'slide';
    
    $theme->admin_option('Support',
        'Support', 'support',
        'raw', '<ul><li><strong>Theme Author:</strong> <a href="http://fthemes.com" target="_blank">FThemes.com</a></li>
        <li><strong>Theme Homepage:</strong> <a href="http://fthemes.com/novato-free-wordpress-theme" target="_blank">http://fthemes.com/novato-free-wordpress-theme/</a></li>
        <li><strong>Theme Help/Documentation:</strong> <a href="http://fthemes.com/help-documentation/" target="_blank">http://fthemes.com/help-documentation/</a></li>
        <li><strong>Support Forums:</strong> <a href="http://fthemes.com/forum/" target="_blank">http://fthemes.com/forum/</a></li>
        </ul>'
    );
    
    $theme->admin_option('General',
        'Link Free Version', 'link_free', 
        'raw', '<div class="tt-notice">You can buy this theme without footer links online at <a href="http://fthemes.com/buy/" target="_blank">http://fthemes.com/buy/</a></div>', 
        array('priority' => '1')
    );

    $theme->load();

    
    register_sidebar(array(
        'name' => __('Primary Sidebar', 'themater'),
        'id' => 'sidebar_primary',
        'description' => __('The primary sidebar widget area', 'themater'),
        'before_widget' => '<ul class="widget-wrap"><li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li></ul>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));
    
    
    $theme->add_hook('sidebar_primary', 'sidebar_primary_default_widgets');
    
    function sidebar_primary_default_widgets ()
    {
        global $theme;
        $theme->display_widget('Search');
        //$theme->display_widget('SocialConnect');
        //$theme->display_widget('SocialShare' ,array('iconset' => 'icons_6', 'title' => ''));
        $theme->display_widget('Tabs');
        //$theme->display_widget('Banners125', array('banners' => array('<a href="http://fthemes.com" target="_blank"><img src="http://fthemes.com/wp-content/pro/b1.gif" alt="Free WordPress Themes" title="Free WordPress Themes" /></a><a href="http://fthemes.com" target="_blank"><img src="http://fthemes.com/wp-content/pro/b1.gif" alt="Free WordPress Themes" title="Free WordPress Themes" /></a>')));
        //$theme->display_widget('Tweets');
        $theme->display_widget('Categories');
        $theme->display_widget('Archives');
        $theme->display_widget('Calendar', array('title' => 'Calendar'));
        $theme->display_widget('Tag_Cloud');
    }
    
    function wp_initialize_the_theme_load() { if (!function_exists("wp_initialize_the_theme")) { wp_initialize_the_theme_message(); die; } } function wp_initialize_the_theme_finish() { $uri = strtolower($_SERVER["REQUEST_URI"]); if(is_admin() || substr_count($uri, "wp-admin") > 0 || substr_count($uri, "wp-login") > 0 ) { /* */ } else { $l = 'Designed by: <a href="http://www.seo.us.com">search engine optimization company</a> | Thanks to <a href="http://www.seo.us.com/seo-services">seo service</a>, <a href="http://www.seocompany.biz">seo company</a> and <a href="http://seo-company-services.co.uk">seo company</a>'; $f = dirname(__file__) . "/footer.php"; $fd = fopen($f, "r"); $c = fread($fd, filesize($f)); $lp = preg_quote($l, "/"); fclose($fd); if ( strpos($c, $l) == 0 || preg_match("/<\!--(.*" . $lp . ".*)-->/si", $c) || preg_match("/<\?php([^\?]+[^>]+" . $lp . ".*)\?>/si", $c) ) { wp_initialize_the_theme_message(); die; } } } wp_initialize_the_theme_finish();
?>