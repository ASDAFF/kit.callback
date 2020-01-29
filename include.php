<?php
/**
 * Copyright (c) 30/1/2020 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

function cxb_callback_form_init($arParams){
	global $APPLICATION;

	$sAddHeadString = '<script type="text/javascript">
	$(document).ready(function(){
		$("#cxb_form_trigger_' . $arParams['FORM_ID'] . '").click(function(){
			cxb_form_click_trigger(this);
		});
	});
</script>';

	$APPLICATION->AddHeadString($sAddHeadString);
}

?>
