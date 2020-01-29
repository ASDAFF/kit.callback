<?php
/**
 * Copyright (c) 30/1/2020 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

function pb_callback_form_init($arParams){
	global $APPLICATION;

	$sAddHeadString = '<script type="text/javascript">
	$(document).ready(function(){
		$("#pb_form_trigger_' . $arParams['FORM_ID'] . '").click(function(){
			pb_form_click_trigger(this);
		});
	});
</script>';

	$APPLICATION->AddHeadString($sAddHeadString);
}

?>
