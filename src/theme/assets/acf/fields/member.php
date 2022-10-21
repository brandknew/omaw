<?php
if (function_exists('acf_add_local_field_group')) :

  acf_add_local_field_group(array(
    'key' => 'members__fields',
    'title' => 'conditions',
    'style' => 'seamless',
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'speakers',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'members',
			),
		),
	),
    'menu_order' => 0,
    'position' => 'acf_after_title',
    'hide_on_screen' => array(
        // 0 => 'the_content',
           1 => 'excerpt',
        //   2 => 'custom_fields',
        //   3 => 'discussion',
        //   4 => 'comments',
        //   5 => 'slug',
        //   6 => 'author',
        //   7 => 'format',
        //   8 => 'featured_image',
        //   9 => 'categories',
        //   10 => 'tags',
        //   11 => 'send-trackbacks',
    ),
    'fields' => array(
      array(
        'key' => 'our-members__guiding_council',
        'label' => 'Guiding Council',
        'name' => 'guiding_council',
        'type' => 'true_false',
        'message' => 'Check if member is on the Guiding Council.'
      ),
    ),
  ));

endif;