<?php
/**
 * [BEGIN_COT_EXT]
 * Hooks=banlist.admin.tags
 * [END_COT_EXT]
 */

 /**
 * [SEDBY] Ban IP Plugin
 *
 * @package banip
 * @author Dmitri Beliavski
 * @copyright (c) 2023 sed.by
 */

(defined('COT_CODE') && defined('COT_ADMIN')) or die('Wrong URL.');

if ($a == 'addip') {
	$ip2ban = cot_import('ip2ban', 'GET', 'TXT');
	$tt->assign([
		'ADMIN_BANLIST_IP' => cot_inputbox('text', 'nbanlistip', $ip2ban, 'size="18" maxlength="64"'),
		'ADMIN_BANLIST_REASON' => cot_inputbox('text', 'nbanlistreason', 'Abusive IP', 'size="48" maxlength="64"'),
	]);
}
