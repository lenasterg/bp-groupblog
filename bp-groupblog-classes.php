<?php

/**
 * Group API
 *
 * http://codex.buddypress.org/developer-docs/group-extension-api/
 */
class BP_Groupblog_Extension extends BP_Group_Extension {

	public function __construct() {
		$bp = buddypress();

		$this->name = __( 'Group Blog', 'groupblog' );
		$this->slug = 'group-blog';

		$this->enable_create_step   = true;
		$this->create_step_position = 15;

		$this->enable_edit_item = true;

		$this->nav_item_name     = 'Blog';
		$this->nav_item_position = 30;
		//$this->enable_nav_item   = $this->enable_nav_item();
		$this->enable_nav_item = false;
		$this->template_file   = 'groupblog/blog';
	}

	function create_screen( $group_id = null ) {
		global $groupblog_create_screen;
		$bp = buddypress();
		if ( ! bp_is_group_creation_step( $this->slug ) ) {
			return false;
		}

		$groupblog_create_screen = true;

		// Attach the nonce fields in a hook. Mainly for backward compatibility
		add_action( 'signup_blogform', array( &$this, 'nonce_fields_create' ) );

		// Attaching the markup via a hook, so that plugins can unhook and replace with
		// their own markup. This is a bit of a hack.
		add_action( 'bp_groupblog_create_screen_markup', 'bp_groupblog_signup_blog' );
		do_action( 'bp_groupblog_create_screen_markup' );

		echo '<input type="hidden" name="groupblog-group-id" value="' . $bp->groups->current_group->id . '" />';
		echo '<input type="hidden" name="groupblog-create-save" value="groupblog-create-save" />';
	}

	function create_screen_save( $group_id = null ) {
		if ( isset( $_POST['save'] ) ) {
			check_admin_referer( 'groups_create_save_' . $this->slug );
			groupblog_edit_settings();
		}
	}

	function edit_screen( $group_id = null ) {
		$bp = buddypress();

		if ( ! bp_is_group_admin_screen( $this->slug ) ) {
			return false;
		}

		// Attach the nonce fields in a hook. Mainly for backward compatibility
		add_action( 'signup_blogform', array( &$this, 'nonce_fields_edit' ) );

		// Attaching the markup via a hook, so that plugins can unhook and replace with
		// their own markup. This is a bit of a hack.
		add_action( 'bp_groupblog_edit_screen_markup', 'bp_groupblog_signup_blog' );
		do_action( 'bp_groupblog_edit_screen_markup' );
	}

	function edit_screen_save( $group_id = null ) {
		if ( isset( $_POST['save'] ) ) {
			check_admin_referer( 'groups_edit_save_' . $this->slug );
			groupblog_edit_settings();
		}
	}

	function nonce_fields_edit() {
		$this->nonce_fields( 'edit' );
	}

	function nonce_fields_create() {
		$this->nonce_fields( 'create' );
	}

	function nonce_fields( $type = 'edit' ) {
		wp_nonce_field( 'groups_' . $type . '_save_' . $this->slug );
	}

	function widget_display() {
	}

	function enable_nav_item() {
		return bp_is_group() && groups_get_groupmeta( bp_get_current_group_id(), 'groupblog_enable_blog' );
	}

}
bp_register_group_extension( 'BP_Groupblog_Extension' );


