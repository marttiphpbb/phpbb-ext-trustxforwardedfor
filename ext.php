<?php
/**
* phpBB Extension - marttiphpbb Trust X-Forwarded-For
* @copyright (c) 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\trustxforwardedfor;

use phpbb\extension\base;

class ext extends base
{
    /**
	 * phpBB 3.2+ and PHP 7+
	 */
	public function is_enableable()
	{
		$config = $this->container->get('config');
		return phpbb_version_compare($config['version'], '3.2', '>=') && version_compare(PHP_VERSION, '7', '>=');
	}
}