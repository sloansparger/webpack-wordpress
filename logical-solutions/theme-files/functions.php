<?php
/*--- Meta box creation---*/
add_action('admin_init','inner_page_meta_init');

function inner_page_meta_init() {
  // add a meta box for WordPress pages
  add_meta_box('inner_page_meta', 'Header Info', 'show_inner_page_meta_box', 'page', 'normal', 'low');
  // add a callback function to save any data a user enters in
  add_action('save_post','save_inner_page_meta');
}

$prefix = 'custom_';
$inner_page_meta_field = array(
  array(
    'label' => 'Header Blurb',
    'desc'  => 'Displays the main text found just below the title of the page.',
    'id'    => $prefix.'description',
    'type'  => 'text'
  )
);

// The Callback
function show_inner_page_meta_box() {
  global $inner_page_meta_field, $post;
  // Use nonce for verification
  echo '<input type="hidden" name="inner_page_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

  // Begin the field table and loop
  echo '<table class="form-table">';
  foreach ($inner_page_meta_field as $field) {
    // get value of this field if it exists for this post
    $meta = get_post_meta($post->ID, $field['id'], true);
    // begin a table row with
    echo '<tr>
            <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
          <td>';
    switch($field['type']) {
      // text
      case 'text':
        echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="100" /><br />
              <span class="description">'.$field['desc'].'</span>';
      break;
    } //end switch
    echo '</td></tr>';
  } // end foreach
  echo '</table>'; // end table
}

function save_inner_page_meta($post_id) {
  global $inner_page_meta_field;

  // verify nonce
  if (!wp_verify_nonce($_POST['inner_page_meta_box_nonce'], basename(__FILE__)))
    return $post_id;
  // check autosave
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    return $post_id;
  // check permissions
  if ('page' == $_POST['post_type']) {
      if (!current_user_can('edit_page', $post_id))
          return $post_id;
  } elseif (!current_user_can('edit_post', $post_id)) {
      return $post_id;
  }

  // loop through fields and save the data
  foreach ($inner_page_meta_field as $field) {
    $old = get_post_meta($post_id, $field['id'], true);
    $new = $_POST[$field['id']];
    if ($new && $new != $old) {
      update_post_meta($post_id, $field['id'], $new);
    } elseif ('' == $new && $old) {
      delete_post_meta($post_id, $field['id'], $old);
    }
  } // end foreach
}

add_action('save_post', 'save_inner_page_meta');

/*--- #end custom meta box creation ---*/
?>
