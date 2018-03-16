<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();


// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'soldis_project_meta',
  'title'     => 'Project Options',
  'post_type' => 'project',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'project_meta_section_1',
      'title'   => 'Project Details',
      'fields' => array(

        array(
          'id'    => 'location_city',
          'type'  => 'text',
          'title' => 'Location (City)',
          'desc' => 'Enter Project Location',
        ),

        array(
          'id'    => 'year-of-commissioning',
          'type'  => 'text',
          'title' => 'Year of Commissioning',
          'desc' => 'Enter Project Year of Commissioning',
        ),

        array(
          'id'    => 'project_area',
          'type'  => 'text',
          'title' => 'Area',
          'desc' => 'Enter Area Value',
        ),

        array(
          'id'    => 'project_gallery_f',
          'type'  => 'gallery',
          'title' => 'Gallery',
        ),


      ),
    ),


    array(
      'name'   => 'project_meta_section_2',
      'title'   => 'Client Review',
      'fields' => array(

        array(
          'id'    => 'client_review_logo',
          'type'  => 'image',
          'title' => 'Client Logo',
          'desc' => 'Add Logo',
        ),

        array(
          'id'    => 'review_head_line',
          'type'  => 'text',
          'title' => 'Review Header',
        ),

        array(
          'id'    => 'review_details',
          'type'  => 'textarea',
          'title' => 'Review Details',
        ),



      ),
    ),






  ),
);
















CSFramework_Metabox::instance( $options );
