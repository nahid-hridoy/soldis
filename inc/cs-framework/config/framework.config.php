<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Option',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'soldis-theme-options',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Soldis Framework <small>by NMH47</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'general_options',
  'title'       => 'General Options',
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'phone_no',
      'type'    => 'text',
      'title'   => 'Phone No',
      'default'   => '+7 (499) 406-04-64',
    ),

    array(
      'id'      => 'address',
      'type'    => 'text',
      'title'   => 'Address',
      'default'   => 'г. Москва, Походный проезд, д. 14',
    ),



    array(
      'id'      => 'mail_info',
      'type'    => 'text',
      'title'   => 'Email',
      'default'   => 'sl@soldisgroup.ru',
    ),

    array(
      'id'      => 'header_logo',
      'type'    => 'image',
      'title'   => 'Header Logo',
    ),

    array(
      'id'      => 'footer_logo',
      'type'    => 'image',
      'title'   => 'Footer Logo',
    ),
    array(
      'id'      => 'site_favicon',
      'type'    => 'image',
      'title'   => 'Favicon',
    ),
    array(
      'id'      => 'site_preloader',
      'type'    => 'image',
      'title'   => 'Preloader GIF Image',
    ),

    array(
      'id'      => 'partner_logos',
      'type'    => 'gallery',
      'title'   => 'Partner Logos',
      'desc'    => 'Upload Partner Logos',
    ),



  ), // end: fields
);

// ------------------------------
// a option section with tabs   -
// ------------------------------



$options[]      = array(
  'name'        => 'hero_area',
  'title'       => 'Hero Area',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'hero_area_title',
      'type'    => 'text',
      'title'   => 'Title',
      'default'   => '«СТРОИМ – КАК ДЛЯ СЕБЯ!»',
    ),
    // end: a field

    array(
      'id'      => 'hero_area_desc',
      'type'    => 'textarea',
      'title'   => 'Description',
      'default'   => 'Группа компаний SOLDIS – многопрофильная инвестиционно-строительная группа.Работаем с 1998 года по всей России',
      
    ),

    array(
      'id'      => 'hero_area_background',
      'type'    => 'image',
      'title'   => 'Background Image',
    ),





 

  ), // end: fields
);







// ------------------------------
// Our COMPANY  -
// ------------------------------

$options[]      = array(
  'name'        => 'company-area',
  'title'       => 'Company Area',
  'icon'        => 'fa fa-briefcase',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'company_area_title',
      'type'    => 'text',
      'title'   => 'Title',
      'default'   => 'О КОМПАНИИ',
    ),
    // end: a field

    array(
      'id'      => 'company_area_desc',
      'type'    => 'textarea',
      'title'   => 'Description',
      
      
    ),



 

  ), // end: fields
);



// ------------------------------
// FEATURE AREA  -
// ------------------------------

$options[]      = array(
  'name'        => 'feature-area',
  'title'       => 'Feature Area',
  'icon'        => 'fa fa-university',

  // begin: fields
  'fields'      => array(

    array(
      'id'      => 'feature_area_background',
      'type'    => 'image',
      'title'   => 'Background Image',
    ),

    // begin: a field
    array(
      'id'      => 'feature_area_title',
      'type'    => 'text',
      'title'   => 'Title',
      'default'   => 'ЧТО НАС ОТЛИЧАЕТ?',
    ),
    // end: a field

    array(
      'id'      => 'feature_area_desc',
      'type'    => 'textarea',
      'title'   => 'Description',
      
      
    ),


    array(
      'id'      => 'feature_area_lists',
      'type'    => 'group',
      'title'   => 'List Data',
      'button_title'   => 'Add New Data',
      'fields'  => array(
        array(
          'id'    => 's_l_d',
          'type'  => 'text',
          'title' => 'Content',
        ),
       
      ),
    ),



 

  ), // end: fields
);







// ------------------------------
// CONTACT PAGE  -
// ------------------------------

$options[]      = array(
  'name'        => 'contact-area',
  'title'       => 'Contact Page',
  'icon'        => 'fa fa-envelope',

  // begin: fields
  'fields'      => array(

    array(
      'id'      => 'contact_area_img',
      'type'    => 'image',
      'title'   => 'Contact Page Image',
    ),

    // begin: a field
    array(
      'id'      => 'google_map_lat',
      'type'    => 'text',
      'title'   => 'Google Map [Latitude]',
    ),
    // end: a field

    // begin: a field
    array(
      'id'      => 'google_map_lan',
      'type'    => 'text',
      'title'   => 'Google Map [Longitude]',
    ),
    // end: a field



 

  ), // end: fields
);







CSFramework::instance( $settings, $options );
