<?php
/**
*
* @package Show first post only to guest
* @copyright (c) 2016 Rich McGirr (RMcGirr83)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// ACP
	'ENABLE_SFPO' 			=> 'عرض أول مُشاركة فقط للزائرين ',
	'ENABLE_SFPO_EXPLAIN' 	=> 'اختيارك "نعم" يعني أن الزائرين يستطيعون مُشاهدة أول مُشاركة فقط في الموضوع. وسيتطلب عليهم عليهم تسجيل دخولهم أو التسجيل في المنتدى لمُشاهدة بقية المشاركات في الموضوع.',
	'SFPO_CHARACTERS'		=> 'عدد الحروف لأول مُشاركة ',
	'SFPO_CHARACTERS_EXPLAIN'	=> 'اكتب عدد الحروف التي تريد عرضها في أول مُشاركة في الموضوع ( الإفتراضي هو 150 حرف ). القيمة صفر تعني تعطيل هذا الخيار.',
	'SFPO_CHARS'			=> 'حروف',
));
