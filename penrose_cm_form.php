<?php
/**
 * @package Penrose_Custom
 * @version 1.0
 */
/*
Plugin Name: Penrose CM Form
Plugin URI: http://penroseblog.com
Description: Adds a Campaign Monitor Subscribe form after post content
Author: Dustin Hoyman
Version: 1.0
Author URI: http://penroseblog.com
*/

function penrose_cm_form($content){
	/*
	 * This form appears after the post content
	 */

	if (is_single()) {	
		$content .= '
		
		<form action="http://paracore.createsend.com/t/r/s/iltlidr/" method="post" style="width:320px; max-width:320px; margin:20px auto; padding:10px; background:#eee; ">
			<h3>Subscribe for Email Updates</h3>
			<p>Small business tips, strategies and experiences to help you become more profitable sent right to your inbox.</p>
		    <p>
		        <label for="fieldName">Name</label><br />
		        <input id="fieldName" name="cm-name" type="text" />
		    </p>
		    <p>
		        <label for="fieldEmail">Email</label><br />
		        <input id="fieldEmail" name="cm-iltlidr-iltlidr" type="email" required />
		    </p>
		    <p>
		        <button type="submit">Send me Financial Lessons</button>
		    </p>
		</form>

		';
	}
		
	return $content;

}

add_action( 'the_content', 'penrose_cm_form' );