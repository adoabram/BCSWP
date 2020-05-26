<?php
/**
 * Get current theme options
 * 
 * @return array
 */
function ale_get_options() {

    $headerfont = array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts());

    $background_defaults = array(
        'color' => '',
        'image' => '',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll',
        'background-size'=>'cover'
    );

    $wrapper_size = array(
        '100' => esc_html__('Flexible 100%','olins'),
        '960' => esc_html__('Boxed 960px','olins'),
        '1024' => esc_html__('Boxed 1024px','olins'),
        'custom' => esc_html__('Custom','olins')
    );

    $design_variant = array(
        //'ikea' => esc_html__('Olins Ikea','olins'),
        'blackwhite' => esc_html__('Olins Black & White','olins'),
        'zoo' => esc_html__('Olins Zoo','olins'),
        'bakery' => esc_html__('Olins Bakery','olins'),
        'photography' => esc_html__('Olins Photography','olins'),
        'luxuryshoes' => esc_html__('Olins Luxury Shoes','olins'),
        'camping' => esc_html__('Olins Camping','olins'),
        'travelphoto' => esc_html__('Olins Travel Photography','olins'),
        'viaje' => esc_html__('Olins Viaje','olins'),
        'wedding' => esc_html__('Olins Wedding','olins'),
        'furniture' => esc_html__('Olins Furniture','olins'),
        'magazine' => esc_html__('Olins Magazine','olins'),
        'creative' => esc_html__('Olins Creative','olins'),
        'brigitte' => esc_html__('Olins Photography Brigitte','olins'),
        'corporate' => esc_html__('Olins Corporate','olins'),
        'cv' => esc_html__('Olins CV','olins'),
        'fashion' => esc_html__('Olins Fashion Store','olins'),
        'pastel' => esc_html__('Olins Pastel Photography','olins'),
        'stephanie' => esc_html__('Olins Stephanie Lark (Wedding)','olins'),
        'cameron' => esc_html__('Olins Cameron','olins'),
        'pixel' => esc_html__('Olins Pixel','olins'),
        'jade' => esc_html__('Olins Jade','olins'),
    );
    $yes_no = array(
        'no' => esc_html__('No. Use Default Styles','olins'),
        'yes' => esc_html__('Yes, Overwrite with Custom','olins')
    );
    $show_hide = array(
        'hide' => esc_html__('Hide','olins'),
        'show' => esc_html__('Show','olins')
    );
    $date_position = array(
        'onimage' => esc_html__('On Featured Image','olins'),
        'infoline' => esc_html__('Blog Info Line','olins'),
        'beforetitle' => esc_html__('Before Title','olins')
    );
    $postline_position = array(
        'beforetitle' => esc_html__('Before Post Title','olins'),
        'aftertitle' => esc_html__('After Post Title','olins'),
        'aftercontent' => esc_html__('After Post Description','olins'),
        'disable' => esc_html__('Disable Post Line','olins')
    );
    $archive_columns = array(
        '1' => esc_html__('One Column','olins'),
        '2' => esc_html__('Two Columns','olins'),
        '3' => esc_html__('Three Columns','olins'),
        '4' => esc_html__('Four Columns','olins'),
        '5' => esc_html__('Five Columns','olins')
    );
    $archive_text_align = array(
        'left' => esc_html__('Left Align','olins'),
        'center' => esc_html__('Center Align','olins'),
        'right' => esc_html__('Right Align','olins'),
        'justify' => esc_html__('Justify','olins')

    );
    $archive_pagination = array(
        'pagination' => esc_html__('Pagination','olins'),
        'loadmore' => esc_html__('Load More Button','olins'),
        'infinite' => esc_html__('Infinite Scroll','olins'),
        'simple' => esc_html__('Simple pagination','olins')
    );
    $archive_sidebar = array(
        'no' => esc_html__('No Sideabar','olins'),
        'left_third' => esc_html__('1/3 Left','olins'),
        'left_fourth' => esc_html__('1/4 Left','olins'),
        'right_third' => esc_html__('1/3 Right','olins'),
        'right_fourth' => esc_html__('1/4 Right','olins')
    );
    $footer_variant = array(
        'default' => esc_html__('Default Footer','olins'),
        'widget' => esc_html__('Widget Footer','olins')
    );
    $page_heading = array(
        'parallax_one' => esc_html__('Dark Title on Light Parallax Image 1','olins'),
        'parallax_two' => esc_html__('Light Title on Dark Parallax Image 2','olins'),
        'simple_image' => esc_html__('White Title on Dark Image','olins'),
        'center_text' => esc_html__('Simple Centered Dart Title (without pre title)','olins'),
        'left_text' => esc_html__('Simple Title (without pre title)','olins'),
        'left_text_breadcrumbs' => esc_html__('Simple Title (without pre title) with Breadcrumbs','olins'),
        'breadcrumbs' => esc_html__('Hide Title, Show Breadcrumbs Line','olins'),
        'wedding_heading' => esc_html__('Left Image. Works for Wedding Variant.','olins'),
        'parallax_three' => esc_html__('Parallax image with Pre Title for Sticky Header','olins')
    );
    $blog_grid = array(
        'masonry' => esc_html__('Masonry Grid','olins'),
        'vintage' => esc_html__('Vintage Grid','olins'),
        'furniture' => esc_html__('Furniture Grid','olins'),
        'magazine' => esc_html__('Magazine Grid','olins'),
        'brigitte' => esc_html__('Brigitte Grid','olins'),
        'cameron' => esc_html__('Cameron Grid','olins'),
        'pixel' => esc_html__('Pixel Grid','olins'),
        'jade' => esc_html__('Jade Grid','olins'),
    );
    $woo_grid = array(
        'default' => esc_html__('Default Style','olins'),
        'vintage' => esc_html__('Vintage Style','olins'),
        'minimal' => esc_html__('Minimal Style','olins'),
        'fashion' => esc_html__('Fashion Style','olins'),
    );
    $menu_styles = array(
        'color' => '',
        'image' => '',
        'width' => '',
        'height' => '',
        'text-color' => '',
        'text-align' => '',
    );

	
	$imagepath =  ALETHEME_URL . '/assets/images/';
	
	$options = array();

    $options[] = array("name" => esc_html__("Brand","olins"),
                        "type" => "heading",
                        "icon" => "fa-desktop");

    $options[] = array( "name" => esc_html__("Site Logo","olins"),
                        "desc" => esc_html__("Upload or put the site logo link.","olins"),
                        "id" => "ale_sitelogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => esc_html__("Footer Logo","olins"),
                        "desc" => esc_html__("Upload or put the footer logo link.","olins"),
                        "id" => "ale_footerlogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => esc_html__("Uplaod a favicon icon","olins"),
                        "desc" => esc_html__("Upload or put the link of your favicon icon","olins"),
                        "id" => "ale_favicon",
                        "std" => "",
                        "type" => "upload");
		
    $options[] = array("name" => esc_html__("Footer Options","olins"),
                        "type" => "heading",
                        "icon" => "fa-copyright");

    $options[] = array( "name" => esc_html__("Email в футері","olins"),
                        "desc" => esc_html__("Введіть Email","olins"),
                        "id" => "ale_footer_email",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Номер телефону в футері","olins"),
                        "desc" => esc_html__("Введіть номер телефону","olins"),
                        "id" => "ale_footer_call",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Додатковий номер телефону в футері","olins"),
                        "desc" => esc_html__("Введіть номер телефону","olins"),
                        "id" => "ale_footer_call_next",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Адреса в футері","olins"),
                        "desc" => esc_html__("Введіть адресу","olins"),
                        "id" => "ale_footer_address",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Copyrights","olins"),
                        "desc" => esc_html__("Insert the Copyrights text","olins"),
                        "id" => "ale_copyrights",
                        "std" => "",
                        "type" => "editor");

    $options[] = array("name" => esc_html__("Header Options","olins"),
                        "type" => "heading",
                        "icon" => "fa-copyright");    

    $options[] = array( "name" => esc_html__("Головне зображення в хедері","olins"),
                        "desc" => esc_html__("Завантажте зображення","olins"),
                        "id" => "ale_main_image",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => esc_html__("Адреса в хедері","olins"),
                        "desc" => esc_html__("Введіть адресу","olins"),
                        "id" => "ale_header_address",
                        "std" => "",
                        "type" => "text");
    
    $options[] = array( "name" => esc_html__("Email в хедері","olins"),
                        "desc" => esc_html__("Введіть Email","olins"),
                        "id" => "ale_header_email",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Час роботи верхня строка","olins"),
                        "desc" => esc_html__("Введіть час роботи","olins"),
                        "id" => "ale_header_time_one",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Час роботи нижня строка","olins"),
                        "desc" => esc_html__("Введіть час роботи","olins"),
                        "id" => "ale_header_time_two",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Номер телефону в хедері","olins"),
                        "desc" => esc_html__("Введіть номер телефону","olins"),
                        "id" => "ale_header_call",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Заголовок баннер верх","olins"),
                        "desc" => esc_html__("Введіть текст","olins"),
                        "id" => "ale_header_slogan_top",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Заголовок баннер центр","olins"),
                        "desc" => esc_html__("Введіть текст","olins"),
                        "id" => "ale_header_slogan_center",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Заголовок баннер низ","olins"),
                        "desc" => esc_html__("Введіть текст","olins"),
                        "id" => "ale_header_slogan_bottom",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Рекламний слоган верх","olins"),
                        "desc" => esc_html__("Введіть текст","olins"),
                        "id" => "ale_header_advertasment_top",
                        "std" => "",
                        "type" => "text");
    
    $options[] = array( "name" => esc_html__("Рекламний слоган низ","olins"),
                        "desc" => esc_html__("Введіть текст","olins"),
                        "id" => "ale_header_advertasment_bottom",
                        "std" => "",
                        "type" => "text");
    
    $options[] = array( "name" => esc_html__("Інформаційна панель заголовок жирний","olins"),
                        "desc" => esc_html__("Введіть текст","olins"),
                        "id" => "ale_header_inform_header_bold",
                        "std" => "",
                        "type" => "text");
    
    $options[] = array( "name" => esc_html__("Інформаційна панель заголовок","olins"),
                        "desc" => esc_html__("Введіть текст","olins"),
                        "id" => "ale_header_inform_header_normal",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Інформаційна панель заголовок текст","olins"),
                        "desc" => esc_html__("Введіть текст","olins"),
                        "id" => "ale_header_inform_text",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Кількість замовлень","olins"),
                        "desc" => esc_html__("Введіть число","olins"),
                        "id" => "ale_header_inform_number",
                        "std" => "",
                        "type" => "text");

    $options[] = array("name" => esc_html__("Page Heading","olins"),
                        "type" => "heading",
                        "icon" => "fa-header");

    $options[] = array( "name" => esc_html__("Page Heading Style","olins"),
                        "desc" => esc_html__("Select a style for page heading. NOTE: Specific Heading was designed and hard coded for a specific demo variant. So after you installed a demo example, do not change this field. It will broke the layout.","olins"),
                        "id" => "ale_page_heading_style",
                        "std" => "parallax_one",
                        "type" => "select",
                        "options" => $page_heading);

    $options[] = array( "name" => esc_html__("Archive Pages Title Background","olins"),
                        "desc" => esc_html__("Upload or put the image link. Necessary size: 1800px-590px","olins"),
                        "id" => "ale_archivetitlebg",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => esc_html__("Blog Archive Page Title","olins"),
                        "desc" => esc_html__("Specify the title for Blog archive page","olins"),
                        "id" => "ale_archiveblogtitle",
                        "std" => "our blog posts",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Blog Archive Page Pre Title","olins"),
                        "desc" => esc_html__("Specify the pre title for Blog archive page","olins"),
                        "id" => "ale_archiveblogpretitle",
                        "std" => "take a look at",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Typography","olins"),
                        "type" => "heading",
                        "icon" => "fa-font");

    $options[] = array( "name" => esc_html__("Select the First Font from Google Library","olins"),
                        "desc" => esc_html__("The default Font is - Raleway","olins"),
                        "id" => "ale_font_one",
                        "std" => "Raleway",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => esc_html__("Select the First Font Properties from Google Library","olins"),
                        "desc" => esc_html__("The default Font (extended) is - 400,400i,600,800,800i,900","olins"),
                        "id" => "ale_font_one_ex",
                        "std" => "400,400i,600,800,800i,900",
                        "type" => "text",
                        );

    $options[] = array( "name" => esc_html__("Select the Second Font from Google Library","olins"),
                        "desc" => esc_html__("The default Font is - Playfair Display","olins"),
                        "id" => "ale_font_two",
                        "std" => "Playfair+Display",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => esc_html__("Select the Second Font Properties from Google Library","olins"),
                        "desc" => esc_html__("The default Font (extended) is - 400i","olins"),
                        "id" => "ale_font_two_ex",
                        "std" => "400i",
                        "type" => "text",
                        );

    $options[] = array( 'name' => esc_html__("H1 Style","olins"),
                        'desc' => esc_html__("Change the h1 style","olins"),
                        'id' => 'ale_h1sty',
                        'std' => array('size' => '32px','face' => 'Raleway','style' => 'italic','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#898989'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H2 Style","olins"),
                        'desc' => esc_html__("Change the h2 style","olins"),
                        'id' => 'ale_h2sty',
                        'std' => array('size' => '28px','face' => 'Raleway','style' => 'italic','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#898989'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H3 Style","olins"),
                        'desc' => esc_html__("Change the h3 style","olins"),
                        'id' => 'ale_h3sty',
                        'std' => array('size' => '24px','face' => 'Raleway','style' => 'italic','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#898989'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H4 Style","olins"),
                        'desc' => esc_html__("Change the h4 style","olins"),
                        'id' => 'ale_h4sty',
                        'std' => array('size' => '20px','face' => 'Raleway','style' => 'italic','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#898989'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H5 Style","olins"),
                        'desc' => esc_html__("Change the h5 style","olins"),
                        'id' => 'ale_h5sty',
                        'std' => array('size' => '16px','face' => 'Raleway','style' => 'italic','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#898989'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H6 Style","olins"),
                        'desc' => esc_html__("Change the h6 style","olins"),
                        'id' => 'ale_h6sty',
                        'std' => array('size' => '14px','face' => 'Raleway','style' => 'italic','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#898989'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("Body Style","olins"),
                        'desc' => esc_html__("Change the body font style","olins"),
                        'id' => 'ale_bodystyle',
                        'std' => array('size' => '14px','face' => 'Raleway','style' => 'normal','transform'=>'none', 'weight'=>'400','lineheight'=>'24px','color' => '#898989'),
                        'type' => 'typography');

	$options[] = array( "name" => esc_html__("Social Profiles & Share","olins"),
						"type" => "heading",
                        "icon" => "fa-address-book");

    $options[] = array( "name" => esc_html__("Twitter","olins"),
                        "desc" => esc_html__("Your twitter profile URL.","olins"),
                        "id" => "ale_twi",
                        "std" => "",
                        "type" => "text");

	$options[] = array( "name" => esc_html__("Facebook","olins"),
						"desc" => esc_html__("Your facebook profile URL.","olins"),
						"id" => "ale_fb",
						"std" => "",
						"type" => "text");

    $options[] = array( "name" => esc_html__("Youtube","olins"),
                        "desc" => esc_html__("Your youtube profile URL.","olins"),
                        "id" => "ale_you",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("LinkedIn","olins"),
                        "desc" => esc_html__("Your LinkedIn profile URL.","olins"),
                        "id" => "ale_lin",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Pinterest","olins"),
                        "desc" => esc_html__("Your Pinterest profile URL.","olins"),
                        "id" => "ale_pin",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Google Plus+","olins"),
                        "desc" => esc_html__("Your Google Plus+ profile URL.","olins"),
                        "id" => "ale_gpl",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Tumblr","olins"),
                        "desc" => esc_html__("Your Tumblr profile URL.","olins"),
                        "id" => "ale_tum",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Instagram","olins"),
                        "desc" => esc_html__("Your Instagram profile URL.","olins"),
                        "id" => "ale_insta",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Reddit","olins"),
                        "desc" => esc_html__("Your Reddit profile URL.","olins"),
                        "id" => "ale_red",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("VK","olins"),
                        "desc" => esc_html__("Your VK profile URL.","olins"),
                        "id" => "ale_vk",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Share Platforms","olins"),
                        "desc" => esc_html__("Check the platforms you want to use for social share","olins"),
                        "id" => "ale_share_platforms",
                        "std"=>array(
                            'fb'=>'1',
                            'twi'=>'1',
                            'goglp'=>'1'
                            ),
                        "type" => "multicheck",
                        "options" => array(
                            'fb'=>'Facebook',
                            'twi'=>'Twitter',
                            'goglp'=>'Google +',
                            'lin'=>'Linkedin',
                            'red'=>'Reddit',
                            'pin'=>'Pinterest',
                            'vk'=>'Vkontakte'
                        ));

	
	$options[] = array( "name" => esc_html__("Facebook Application ID","olins"),
						"desc" => esc_html__("If you have Application ID you can connect the blog to your Facebook Profile and monitor statistics there.","olins"),
						"id" => "ale_fb_id",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => esc_html__("Enable Open Graph","olins"),
						"desc" => esc_html__("The Open Graph protocol enables any web page to become a rich object in a social graph.","olins"),
						"id" => "ale_og_enabled",
						"std" => "",
						"type" => "checkbox");


	
	$options[] = array( "name" => esc_html__("Advanced Settings","olins"),
						"type" => "heading",
                        "icon" => "fa-cogs");
	
	$options[] = array( "name" => esc_html__("Footer Code","olins"),
						"desc" => esc_html__("If you have anything else to add in the footer - please add it here.","olins"),
						"id" => "ale_footer_info",
						"std" => "",
						"type" => "textarea");

    $options[] = array( "name" => esc_html__("Custom CSS Styles","olins"),
                        "desc" => esc_html__("You can add here your styles. ex. .boxclass { padding:10px; }","olins"),
                        "id" => "ale_customcsscode",
                        "std" => "",
                        "type" => "textarea");

   
   
    $options[] = array("name" => esc_html__("Blog Settings","olins"),
                       "type" => "heading",
                       "icon" => "fa-newspaper-o");

    $options[] = array( "name" => esc_html__("Number of Words in Description","olins"),
                        "desc" => esc_html__("Specify the Number of Words for Description blog per post.","olins"),
                        "id" => "ale_custom_blog_excerpt_count",
                        "std" => "20",
                        "type" => "text");

    $options[] = array("name" => esc_html__("Google Maps","olins"),
                       "type" => "heading",
                       "icon" => "fa-map-marker");

    $options[] = array( "name" => esc_html__("Google Maps API Key","olins"),
                        "desc" => ale_wp_kses(__("Paste a Google Maps API Key. You can generate a key on the  <a href=\"https://console.developers.google.com/apis/\" target=\"_blank\">Google console.</a>","olins")),
                        "id" => "ale_maps_api_key",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Custom Pin Icon","olins"),
                        "desc" => esc_html__("Upload a Custom Pin Icon. Let it empty to use the default icon.","olins"),
                        "id" => "ale_map_icon",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => esc_html__("Map Custom Style","olins"),
                        "desc" => esc_html__("Paste here a custom style for your google map. You can use the snazzymaps.com to take a ready style. ","olins"),
                        "id" => "ale_maps_style",
                        "std" => "",
                        "type" => "text");

	return $options;
}


/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array 
 */
function ale_metaboxes($meta_boxes) {
	
	$meta_boxes = array();

    $prefix = "ale_";

    $meta_boxes[] = array(
        'id'         => 'home_setting_metabox',
        'title'      => esc_html__('Home Page Setting','olins'),
        'pages'      => array( 'page',), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
		'show_on'    => array('key' => 'page-template', 'value' => array('template-homepage.php'), ),
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => esc_html__('Підключення секціїї Переваги','olins'),
                'desc' => esc_html__('Ввімкнення (Enable) або вимкнення (Disable) секції','olins'),
                'id'   => $prefix . 'advantages_section',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','olins'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','olins'), 'value' => 'disable', ),
                ),
            ), 
			array(
                'name' => esc_html__('Підключення секціїї Наша продукція','olins'),
                'desc' => esc_html__('Ввімкнення (Enable) або вимкнення (Disable) секції','olins'),
                'id'   => $prefix . 'our_services_section',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','olins'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','olins'), 'value' => 'disable', ),
                ),
            ),
			array(
                'name' => esc_html__('Підключення секціїї Популярні товари','olins'),
                'desc' => esc_html__('Ввімкнення (Enable) або вимкнення (Disable) секції','olins'),
                'id'   => $prefix . 'our_shop_section',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','olins'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','olins'), 'value' => 'disable', ),
                ),
            ),
			array(
                'name' => esc_html__('Підключення секціїї Категорії товарів','olins'),
                'desc' => esc_html__('Ввімкнення (Enable) або вимкнення (Disable) секції','olins'),
                'id'   => $prefix . 'main_categories_section',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','olins'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','olins'), 'value' => 'disable', ),
                ),
            ),
			array(
                'name' => esc_html__('Підключення секціїї Швидке замовлення','olins'),
                'desc' => esc_html__('Ввімкнення (Enable) або вимкнення (Disable) секції','olins'),
                'id'   => $prefix . 'quick_order_section',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','olins'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','olins'), 'value' => 'disable', ),
                ),
            ),
			array(
                'name' => esc_html__('Підключення секціїї Наші клієнти','olins'),
                'desc' => esc_html__('Ввімкнення (Enable) або вимкнення (Disable) секції','olins'),
                'id'   => $prefix . 'our_partners_section',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','olins'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','olins'), 'value' => 'disable', ),
                ),
            ),
            array(
                'name' => esc_html__('Заголовок секції ПЕРЕВАГИ','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'advantages_header_one',
                'std'  => 'Переваги співпраці з нами',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Заголовок секції ПЕРЕВАГИ продовження','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'advantages_header_two',
                'std'  => 'Будівельна компанія BCS ',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Заголовок секції ПЕРЕВАГИ продовження','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'advantages_header_three',
                'std'  => 'ЦЕ',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Заголовок секції ПЕРЕВАГИ аніміція','olins'),
                'desc' => esc_html__('Введіть текст (бажано до 10 символів)','olins'),
                'id'   => $prefix . 'advantages_anim_one',
                'std'  => 'Якість',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Заголовок секції ПЕРЕВАГИ аніміція','olins'),
                'desc' => esc_html__('Введіть текст (бажано до 10 символів)','olins'),
                'id'   => $prefix . 'advantages_anim_two',
                'std'  => 'Досвід',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Заголовок секції ПЕРЕВАГИ аніміція','olins'),
                'desc' => esc_html__('Введіть текст (бажано до 10 символів)','olins'),
                'id'   => $prefix . 'advantages_anim_three',
                'std'  => 'Сервіс',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Заголовок секції ПЕРЕВАГИ аніміція','olins'),
                'desc' => esc_html__('Введіть текст (бажано до 10 символів)','olins'),
                'id'   => $prefix . 'advantages_anim_four',
                'std'  => 'Вчасність',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Перший рекламний блок заголовок','olins'),
                'desc' => esc_html__('Введіть текст (бажано до 20 символів)','olins'),
                'id'   => $prefix . 'adv_block_one_header',
                'std'  => 'Тільки якісні матеріали',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Перший рекламний блок текст','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'adv_block_one_text',
                'std'  => 'Наші вироби виготовлені відповідно до найвищіх стандартів якості.',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Другий рекламний блок заголовок','olins'),
                'desc' => esc_html__('Введіть текст (бажано до 20 символів)','olins'),
                'id'   => $prefix . 'adv_block_two_header',
                'std'  => 'На ринку з 2009 року',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Другий рекламний блок текст','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'adv_block_two_text',
                'std'  => 'Працюємо на ринку будівельних матеріалів з 2009 року.',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Третій рекламний блок заголовок','olins'),
                'desc' => esc_html__('Введіть текст (бажано до 20 символів)','olins'),
                'id'   => $prefix . 'adv_block_three_header',
                'std'  => 'Дійсно якісний сервіс',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Третій рекламний блок текст','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'adv_block_three_text',
                'std'  => 'Ми цінуємо кожного клієнта незалежно від кількості замовлення.',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Четвертий рекламний блок заголовок','olins'),
                'desc' => esc_html__('Введіть текст (бажано до 20 символів)','olins'),
                'id'   => $prefix . 'adv_block_four_header',
                'std'  => 'Швидка доставка',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Четвертий рекламний блок текст','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'adv_block_four_text',
                'std'  => 'Відпускаємо та доставляємо Ваші закази завжди вчасно без затримок.',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Блок НАША ПРОДУКЦІЯ заголовок','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'our_services_header',
                'std'  => 'НАША ПРОДУКЦІЯ',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Блок НАША ПРОДУКЦІЯ текст','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'our_services_text',
                'std'  => 'З гордістю представляємо Вам нашу продукцію, за якою стоїть чудова команда, працьовитість, та дуже задоволені клієнти.',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Блок ПОПУЛЯРНІ ТОВАРИ заголовок','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'our_shop_header',
                'std'  => 'ПОПУЛЯРНІ ТОВАРИ',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Блок ПОПУЛЯРНІ ТОВАРИ текст','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'our_shop_text',
                'std'  => 'Пропонуємо Вашій увазі ТОП товарів які користуються найбільшим попитом.',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Блок ПОПУЛЯРНІ ТОВАРИ нижня строка','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'our_shop_link',
                'std'  => 'ДЛЯ ПЕРЕГЛАДУ ВСІХ ТОВАРІВ ВИ МОЖЕТЕ СКОРИСТАТИСЯ НАШИМ <a href="#" target="_blank">МАГАЗИНОМ</a> АБО ПЕРЕГЛЯНУТИ <a href="#" target="_blank">ПРАЙС.</a>',
                'type' => 'textarea',
            ),
            array(
                'name' => esc_html__('Блок КАТЕГОРІЇ ТОВАРІВ заголовок','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'main_categories_header',
                'std'  => 'КАТЕГОРІЇ ТОВАРІВ',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Блок КАТЕГОРІЇ ТОВАРІВ текст','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'main_categories_text',
                'std'  => 'Пропонуємо Вашій увазі категорії товарів.',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Блок ШВИДКЕ ЗАМОВЛЕННЯ заголовок','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'quick_order_header',
                'std'  => 'ШВИДКЕ ЗАМОВЛЕННЯ',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Блок ШВИДКЕ ЗАМОВЛЕННЯ текст','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'quick_order_text',
                'std'  => 'Замовлення відразу потрапляє до менеджера минуючи кошик.',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Блок ШВИДКЕ ЗАМОВЛЕННЯ текст низ','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'quick_order_text_one',
                'std'  => '*Щоб порахувати замовлення виберіть вироби і поставте їх кількість;',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Блок ШВИДКЕ ЗАМОВЛЕННЯ текст низ','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'quick_order_text_two',
                'std'  => '**При швидкому замовленні статистика замовлень в Вашому аккуанті не зберігається;',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Блок ШВИДКЕ ЗАМОВЛЕННЯ текст низ','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'quick_order_text_three',
                'std'  => '***Вартість доставки залежить від відстані до об\'єкта та оплачується окремо.',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Блок ШВИДКЕ ЗАМОВЛЕННЯ текст кнопки','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'quick_order_link',
                'std'  => 'ОФОРМИТИ ЗАМОВЛЕННЯ',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Блок НАШІ КЛІЄНТИ заголовок','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'our_partners_header',
                'std'  => 'НАШІ КЛІЄНТИ',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Блок КАТЕГОРІЇ ТОВАРІВ текст','olins'),
                'desc' => esc_html__('Введіть текст','olins'),
                'id'   => $prefix . 'our_partners_text',
                'std'  => 'Тут тільки деякі клієтни з якими ми працювали, працюємо і з якими раді працювати надалі.',
                'type' => 'text',
            ),
        )
    );

   	return $meta_boxes;
}

/**
 * Get image sizes for images
 * 
 * @return array
 */
function ale_get_images_sizes() {
	return array(

        'post' => array(
            array(
                'name'      => 'post-squarelarge',
                'width'     => 700,
                'height'    => 700,
                'crop'      => true,
            ),
            array(
                'name'      => 'post-simplelarge',
                'width'     => 1000,
                'height'    => 700,
                'crop'      => true,
            ),
            array(
                'name'      => 'post-simpletin',
                'width'     => 1000,
                'height'    => 480,
                'crop'      => true,
            ),
            array(
                'name'      => 'post-vertical',
                'width'     => 500,
                'height'    => 660,
                'crop'      => true,
            ),
        ),

        'works' => array(
            array(
                'name'      => 'works-squareextrabig',
                'width'     => 1200,
                'height'    => 1200,
                'crop'      => true,
            ),
            array(
                'name'      => 'works-squarebig',
                'width'     => 900,
                'height'    => 900,
                'crop'      => true,
            ),
            array(
                'name'      => 'works-squarelarge',
                'width'     => 700,
                'height'    => 700,
                'crop'      => true,
            ),
            array(
                'name'      => 'works-squaremedium',
                'width'     => 600,
                'height'    => 600,
                'crop'      => true,
            ),
            array(
                'name'      => 'works-squaresmall',
                'width'     => 400,
                'height'    => 400,
                'crop'      => true,
            ),
            array(
                'name'      => 'works-masonryextrabig',
                'width'     => 1200,
                'height'    => 9999,
                'crop'      => false,
            ),
            array(
                'name'      => 'works-masonrybig',
                'width'     => 1000,
                'height'    => 9999,
                'crop'      => false,
            ),
            array(
                'name'      => 'works-masonrylarge',
                'width'     => 700,
                'height'    => 9999,
                'crop'      => false,
            ),
            array(
                'name'      => 'works-masonrymedium',
                'width'     => 600,
                'height'    => 9999,
                'crop'      => false,
            ),
            array(
                'name'      => 'works-masonrysmall',
                'width'     => 400,
                'height'    => 9999,
                'crop'      => false,
            ),
            array(
                'name'      => 'works-gridextrabig',
                'width'     => 1200,
                'height'    => 900,
                'crop'      => true,
            ),
            array(
                'name'      => 'works-gridbig',
                'width'     => 900,
                'height'    => 700,
                'crop'      => true,
            ),
            array(
                'name'      => 'works-gridlarge',
                'width'     => 700,
                'height'    => 500,
                'crop'      => true,
            ),
            array(
                'name'      => 'works-gridmedium',
                'width'     => 600,
                'height'    => 400,
                'crop'      => true,
            ),
            array(
                'name'      => 'works-gridsmall',
                'width'     => 400,
                'height'    => 280,
                'crop'      => true,
            ),
            array(
                'name'      => 'works-linesmall',
                'width'     => 320,
                'height'    => 280,
                'crop'      => true,
            ),
            array(
                'name'      => 'works-linelarge',
                'width'     => 640,
                'height'    => 280,
                'crop'      => true,
            ),
            array(
                'name'      => 'works-vertical',
                'width'     => 410,
                'height'    => 504,
                'crop'      => true,
            ),
            array(
                'name'      => 'works-photobig',
                'width'     => 512,
                'height'    => 600,
                'crop'      => true,
            ),
            array(
                'name'      => 'works-photosmall',
                'width'     => 512,
                'height'    => 300,
                'crop'      => true,
            ),
            array(
                'name'      => 'works-viajemini',
                'width'     => 512,
                'height'    => 418,
                'crop'      => true,
            ),
            array(
                'name'      => 'works-viajetin',
                'width'     => 512,
                'height'    => 835,
                'crop'      => true,
            ),
            array(
                'name'      => 'works-viajebig',
                'width'     => 1024,
                'height'    => 835,
                'crop'      => true,
            ),
            array(
                'name'      => 'works-viajehor',
                'width'     => 1024,
                'height'    => 418,
                'crop'      => true,
            ),
            array(
                'name'      => 'works-brigitte',
                'width'     => 9999,
                'height'    => 700,
                'crop'      => false,
            ),
        ),
    );
}

/**
 * Add post formats that are used in theme
 * 
 * @return array
 */
function ale_get_post_formats() {
	return array('gallery','link','quote','video','audio');
}

/**
 * Get sidebars list
 * 
 * @return array
 */
function ale_get_sidebars() {
	$sidebars = array();
	return $sidebars;
}

/**
 * Post types where metaboxes should show
 * 
 * @return array
 */
function ale_get_post_types_with_gallery() {
	return array('gallery');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function ale_media_custom_fields() {
	return array();
}