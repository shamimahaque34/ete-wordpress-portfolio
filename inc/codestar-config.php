<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'my_framework';
  
    //
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => 'My Framework',
      'menu_slug'  => 'my-framework',
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Header Section',
      'icon'   =>  'fa fa-home',
      'fields' => array(
  
        //
        // A text field
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Name',
        ),

        array(
            'id'    => 'opt-text1',
            'type'  => 'text',
            'title' => 'Email',
          ),

          array(
            'id'    => 'opt-upload-1',
            'type'  => 'upload',
            'title' => 'Upload',
          ),

          array(
            'id'    => 'opt-text2',
            'type'  => 'text',
            'title' => 'Address',
          ),
  
      )
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Tab Title 2',
      'fields' => array(
  
        // A textarea field
        array(
          'id'    => 'opt-textarea',
          'type'  => 'textarea',
          'title' => 'Simple Textarea',
        ),
  
      )
    ) );
  
  }
 
?>