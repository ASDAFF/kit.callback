<?
/**
 * Copyright (c) 30/1/2020 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("FORM_NAME_LABEL"),
	"DESCRIPTION" => GetMessage("FORM_DESC_LABEL"),
	"ICON" => "/images/form.gif",
	"PATH" => array(
		"ID" => "KIT",
		"CHILD" => array(
			"ID" => "callback",
			"NAME" => GetMessage("MAIN_FORM_SERVICE")
		)
	),
);

?>
