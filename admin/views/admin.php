<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   Celsius
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2014 Your Name or Company Name
 */
?>

<div class="wrap">

	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
    
    <form name="celsius_settings" method="post" action="options.php">
    <?php settings_fields( 'celsius-group' );?>
    <?php do_settings_sections( 'celsius-group' ); ?>

    <table class="form-table">
    <tbody>
    <tr>
        <th scope="row"><label for="celsius_enabled">Enable Snag Reporter</label></th>
        <td><select name="celsius_enabled"><option value="disabled">Disabled</option><option value="enabled" <?php echo (get_option('celsius_enabled')=='enabled') ? "selected='selected'" : ""; ?>>Enabled</option>    </select>
        <p class="description">Enable or disable the snag reporter.</p>
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="celsius_logged_in_only">Logged In Only?</label></th>
        <td><input type="checkbox" name="celsius_logged_in_only" value="true" <?php echo (get_option('celsius_logged_in_only')=='true') ? "checked='checked'" : ""; ?>/>
        <p class="description">Tick this if you only want the snag reporter to show if users are logged in to WordPress.</p>
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="celsius_api_key">Project API Key</label></th>
        <td><input type="text" name="celsius_api_key" class="regular-text" value="<?php echo get_option('celsius_api_key');?>"/>
        <p class="description">You can find the API key in Celsius by clicking the Snag Reporter button when viewing a project.</p>
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="celsius_account">Celsius Account Name</label></th>
        <td><input type="text" name="celsius_account" value="<?php echo get_option('celsius_account');?>"/>
        <p class="description">Normally the first part of the subdomain your instance of Celsius works from.</p>

        </td>
    </tr>

    </tbody></table>

	
    <?php submit_button(); ?>
        
    </form>

</div>
