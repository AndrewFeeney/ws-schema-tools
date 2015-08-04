<?php

// Add admin menu
function SchemaTools_add_menu() {
	add_options_page( 'WebSpanner SchemaTools Settings', 'WS SchemaTools', 'administrator', 'ws-schema-tools-settings', 'SchemaTools_options_menu', 'dashicons-admin-generic' );
}

// Register settings
function SchemaTools_register_settings()
{
	register_setting( 'schema-tools-settings', 'add-schema-to-body' );
	register_setting( 'schema-tools-settings', 'itemtype' );
}

// Display admin menu
function SchemaTools_options_menu() {
	
	// Display menu
	echo '<div class="wrap">';
	echo '<h2> WebSpanner SchemaTools </h2>';
	echo '<p>Add schema.org microdata to your wordpress site using shortcodes..</p>';
	echo '<p>This plugin allows you to easily markup your content with Schema.org microdata using shortcodes. See the documentation for a list 
	of shortcodes. For sites which employ markup structures that make this difficult (for example, themes where columnated content 
	cannot be wrapped in a localscope div), the below setting can be used to add the parent itemscope tag to the body element of the 
	page.</p>';
	?>
	<form method="post" action="options.php">
	
		<?php 
			settings_fields('schema-tools-settings');
			do_settings_sections('schema-tools-settings');
		?>
	
	    <table class="form-table">
	        <tr valign="top">
	        <th scope="row">Add schema.org markup to body tag:</th>
	        <td><input type="checkbox" name="add-schema-to-body" value=1<?php checked(1 == get_option('add-schema-to-body')); ?> /></td>
	        </tr>
	         
	        <tr valign="top">
	        <th scope="row">Schema.org itemtype for body tag (e.g. LocalBusiness)</th>
	        <td><input type="text" name="itemtype" value="<?php echo esc_attr( get_option('itemtype') ); ?>" /></td>
	        </tr>
	    </table>
	    
	    <?php submit_button(); ?>

	</form>
	</div>
	<?php 
}

// Add schema.org markup to body tag
function ws_body_tag_append($classes)
{
	$itemtype = get_option('itemtype');
	
	$classes[] = '" itemscope="itemscope"';
	$classes[] = ' itemtype="http://schema.org/'.$itemtype;

	return $classes;
}


?>