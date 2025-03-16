<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;


if (empty($arResult))
    return "";

$strReturn = '';
$strReturn .= '<div>';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);

    if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
        $strReturn .= '<a href="' . $arResult[$index]["LINK"] . '">' . $title . '</a>';
    } else {
        $strReturn .= '<strong class="text-white">' . $title . '</strong>';
    }

    if ($index < $itemSize - 1) {
        $strReturn .= ' <span class="mx-2 text-white">&bullet;</span> ';
    }
}

$strReturn .= '</div>';

return $strReturn;
