<?php
/**
 * blocks
 *
 * @copyright	Geekwright, LLC http://geekwright.com
 * @license	GNU General Public License (GPL)
 * @since	1.0
 * @author	Richard Griffith richard@geekwright.com
 * @package	speechsearch
 * @version	$Id$
 **/

if (!defined('XOOPS_ROOT_PATH')){ exit(); }

function b_speechsearch_show($options) {
	$block=array();
	$block['lang_search']=_MB_SPEECHSEARCH_SEARCH_TXT;
    $block['lang_advsearch']=_MB_SPEECHSEARCH_ADVANCED_TXT;
    $block['lang_mic_alt']=_MB_SPEECHSEARCH_MIC_ICON_ALT;
    $block['locale']=$options[0];
	$block['show_advanced']=$options[1];

	return $block;
}

function b_speechsearch_edit($options) {
	$locales = array(
		'af-ZA'=>'Afrikaans', 
		'id-ID'=>'Bahasa Indonesia',
		'ms-MY'=>'Bahasa Melayu',
		'ca-ES'=>'Català', 
		'cs-CZ'=>'Čeština', 
		'de-DE'=>'Deutsch',
		'en-AU'=>'English - Australia',
		'en-CA'=>'English - Canada',
		'en-IN'=>'English - India',
		'en-NZ'=>'English - New Zealand',
		'en-ZA'=>'English - South Africa',
		'en-GB'=>'English - United Kingdom',
		'en-US'=>'English - United States',
		'es-AR'=>'Español - Argentina',
		'es-BO'=>'Español - Bolivia',
		'es-CL'=>'Español - Chile',
		'es-CO'=>'Español - Colombia',
		'es-CR'=>'Español - Costa Rica',
		'es-EC'=>'Español - Ecuador',
		'es-SV'=>'Español - El Salvador',
		'es-ES'=>'Español - España',
		'es-US'=>'Español - Estados Unidos',
		'es-GT'=>'Español - Guatemala',
		'es-HN'=>'Español - Honduras',
		'es-MX'=>'Español - México',
		'es-NI'=>'Español - Nicaragua',
		'es-PA'=>'Español - Panamá',
		'es-PY'=>'Español - Paraguay',
		'es-PE'=>'Español - Perú',
		'es-PR'=>'Español - Puerto Rico',
		'es-DO'=>'Español - República Dominicana',
		'es-UY'=>'Español - Uruguay',
		'es-VE'=>'Español - Venezuela',
		'eu-ES'=>'Euskara',
		'fr-FR'=>'Français',
		'gl-ES'=>'Galego', 
		'hr_HR'=>'Hrvatski',
		'zu-ZA'=>'IsiZulu',
		'is-IS'=>'Íslenska',
		'it-IT'=>'Italiano - Italia',
		'it-CH'=>'Italiano - Svizzera',
		'hu-HU'=>'Magyar',
		'nl-NL'=>'Nederlands',
		'nb-NO'=>'Norsk bokmål',
		'pl-PL'=>'Polski',
		'pt-BR'=>'Português - Brasil',
		'pt-PT'=>'Português - Portugal',
		'ro-RO'=>'Română',
		'sk-SK'=>'Slovenčina',
		'fi-FI'=>'Suomi',
		'sv-SE'=>'Svenska',
		'tr-TR'=>'Türkçe',
		'bg-BG'=>'български',
		'ru-RU'=>'Pусский', 
		'sr-RS'=>'Српски',
		'ko-KR'=>'한국어', 
		'cmn-Hans-CN'=>'中文 - 普通话 (中国大陆)',
		'cmn-Hans-HK'=>'中文 - 普通话 (香港)',
		'cmn-Hant-TW'=>'中文 - 中文 (台灣)',
		'yue-Hant-HK'=>'中文 - 粵語 (香港)',
		'ja-JP'=>'日本語',
		'la'=>'日本語',
		// the following were mentioned as supported but rtl. If supported by CMS they should work, but should get proper names
		'he-IL'=> 'עברית', //'Hebrew - Israel',
		'ar-EG'=> 'العربية'); //'Arabic - Egypt');

	$form = _MB_SPEECHSEARCH_LOCALE.": <select name='options[0]'>";
	foreach($locales as $k => $v) {
		$selected=''; if($k==$options[0]) $selected=' selected ';
		$form .= '<option value="'.$k.'"'.$selected.'>'.$v.'</option>';
	}
	$form .= '</select><br /><br />';

	$form .=_MB_SPEECHSEARCH_SHOW_ADVANCE.": <input type='radio' name='options[1]' value='1' ";
	if($options[1]) $form .="checked='checked'"; 
	$form .=" />&nbsp;"._YES."&nbsp;<input type='radio' name='options[1]' value='0' ";
	if(!$options[1]) $form .="checked='checked'"; 
	$form .= " />&nbsp;"._NO."<br /><br />";

	return $form;
}

?>
