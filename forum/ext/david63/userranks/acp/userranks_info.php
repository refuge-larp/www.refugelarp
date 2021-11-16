<?php
/**
*
* @package User Ranks Extension
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\userranks\acp;

class userranks_info
{
	function module()
	{
		return array(
			'filename'	=> '\david63\userranks\acp\userranks_module',
			'title'		=> 'USER_RANKS',
			'modes'		=> array(
				'main'	=> array('title' => 'USER_RANKS_MANAGE', 'auth' => 'ext_david63/userranks && acl_a_board', 'cat' => array('USER_RANKS')),
			),
		);
	}
}
