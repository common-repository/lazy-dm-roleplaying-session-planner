<?php

/**
 * Plugin Name:       Lazy DM Roleplaying Session Planner
 * Description:       Block for preparing a roleplaying session using the Lazy DM method, from Mike Shea. More info here: https://slyflourish.com/
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           1.0.1
 * Author:            Juan Lucha <juanlucha@gmail.com>
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       lazy-dm-roleplaying-session-planner
 *
 * @package           juanlucha
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function juanlucha_lazy_dm_roleplaying_session_planner_block_init()
{
	register_block_type(__DIR__ . '/build');
}
add_action('init', 'juanlucha_lazy_dm_roleplaying_session_planner_block_init');
