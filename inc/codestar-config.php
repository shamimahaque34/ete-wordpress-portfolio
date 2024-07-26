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

   
  
    

    CSF::createSection( $prefix, array(
        'title'  => 'Service Section',
        'icon'   =>  'fa fa-laptop',
        'fields' => array(
            array(
                'id'        => 'opt-group-1',
                'type'      => 'group',
                'title'     => ' Service Group',
                'button_title'=>'Add New',
			    'accordion_title'=>'About Group Fields',
                'fields'    => array(
                    array(
                        'id'    => 'opt-icon-1',
                        'type'  => 'icon',
                        'title' => 'Icon',
                      ),
                      
                  array(
                    'id'    => 'opt-text',
                    'type'  => 'text',
                    'title' => 'Text',
                  ),
                  array(
                    'id'      => 'opt-textarea',
                    'type'    => 'textarea',
                    'title'   => 'Textarea',
                  ),
                ),
              ),
                 
        )
        )
        );
    
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Tab Title 2',
      'fields' => array(
  
        // A textarea field
        array(
          'id'    => 'opt_textarea',
          'type'  => 'textarea',
          'title' => 'Simple Textarea',
        ),
  
      )
    ) );
  
  }
 
?>