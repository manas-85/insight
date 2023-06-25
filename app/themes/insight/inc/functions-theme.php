<?php
	/* Theme settings */
	add_action( 'after_setup_theme', function () {
        global $site_text_domain;
        load_theme_textdomain( $site_text_domain );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        register_nav_menus( array(
            'menu-primary' => esc_html__( 'Primary', $site_text_domain ),
            'menu-secondary' => esc_html__( 'Secondary', $site_text_domain ),
        ) );
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
        add_post_type_support( 'page', 'excerpt' );
    } );

    /* Hide admin bar from frontend */
    add_filter( 'show_admin_bar', '__return_false' );

    /* Hide generator link */
    add_filter( 'the_generator', function () {
        return '';
    } );

    /* Remove Theme Edit Rights */
    define( 'DISALLOW_FILE_EDIT', true );


    /* Remove unwanted links and tags from front-end */
    remove_action('wp_head', 'wp_resource_hints', 2);
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_action('rest_api_init', 'wp_oembed_register_route');
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('template_redirect', 'rest_output_link_header', 11, 0);

    function wpb_disable_feed() {
        global $home;
        wp_die( __('No feed available,please visit our <a href="'. $home .'">homepage</a>!') );
    }
    add_action('do_feed', 'wpb_disable_feed', 1);
    add_action('do_feed_rdf', 'wpb_disable_feed', 1);
    add_action('do_feed_rss', 'wpb_disable_feed', 1);
    add_action('do_feed_rss2', 'wpb_disable_feed', 1);
    add_action('do_feed_atom', 'wpb_disable_feed', 1);
    add_action('do_feed_rss2_comments', 'wpb_disable_feed', 1);
    add_action('do_feed_atom_comments', 'wpb_disable_feed', 1);
    add_filter( 'xmlrpc_enabled', '__return_false' );


    function get_custom_cat_template($single_template) {
        global $post;
        
        if ( in_category( 'team' )) {
              $single_template = get_template_directory() . '/single-team-cat.php';
           }
        return $single_template;
     }
     
     add_filter( "single_template", "get_custom_cat_template" ) ;

     add_filter( 'body_class','my_body_classes' );
     function my_body_classes( $classes ) {
        if(in_category( 'team' )){        
            $classes[] = 'single-team-cat-php';
        }
            
            return $classes;
            
    }

    /**
     * Sanitization
     */
    function clean($data, $type)
    {
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);
        $data = strip_tags($data);
        $data = addslashes($data);
        $data = filter_var($data, $type);
        $arr = array("*","#","select","from","table","drop","export","import","create","insert");
        $data = str_replace($arr, '', $data);
        return $data;
    }

    /**
     * recaptcha Verification
     */
    /* function recaptchaVerification($key)
    {
        global $recapcha_private_key;
        if (isset($key) && !empty($key)) {

            $url = 'https://www.google.com/recaptcha/api/siteverify?secret='.$recapcha_private_key.'&response=' . urlencode($key);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            if (curl_errno($ch)) {
            //echo curl_error($ch);
            //echo "\n<br />";
            //$contents = '';
            } else {
                curl_close($ch);
            }
            
            $responseKeys = json_decode($response, true);
            // should return JSON with success as true
            if ($responseKeys["success"]) {
                return true;
            } else {
                return false;
                exit();
            }
        } else {
            return false;
            exit();
        }
    } */


/**
 * Insert Data Into Spread Sheet
 * $spreadsheetID Parameter Sheet ID
 * $range sheet Name
 * $values Fields Values Array
 * $data = [$full_name,$email_address, date("Y-m-d")];
 * \App\InsertDataIntoSpreadSheet(\App\get_global_variable('spreadsheet_id'), "subscribers", $data);
 */
function InsertDataIntoSpreadSheet($spreadsheetID, $range, $data)
{
    global $theme_dir;
    require_once $theme_dir.'/vendor/autoload.php';
    $client = new \Google_Client();
    $client->setApplicationName('Fieldforce');
    $client->setScopes(
        [\Google_Service_Sheets::SPREADSHEETS]
    );

    $client->setAccessType('offline');
    $client->setAuthConfig($theme_dir.'/trgworld-6d3e33c7d183.json');
    $service = new \Google_Service_Sheets($client);
    $values = [
        $data
    ];

    $body = new \Google_Service_Sheets_ValueRange(
        [
            'values' => $values
        ]
    );

    $params = [
        'valueInputOption' => 'RAW'
    ];

    $Inserts = [
        "insertDataOption" => "INSERT_ROWS"
    ];


    $Result = $service->spreadsheets_values->append(
        $spreadsheetID,
        $range,
        $body,
        $params,
        $Inserts
    );

    return (isset($Result->spreadsheetId) && !empty($Result->spreadsheetId)) ?  true :  false;
}

function create_teachers_post_type() {
    register_post_type( 'teachers',
      array(
        'labels' => array(
          'name' => __( 'Teachers' ),
          'singular_name' => __( 'Teacher' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'teachers'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
      )
    );
  }
  add_action( 'init', 'create_teachers_post_type' );