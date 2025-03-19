<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

if(!$arResult["NavShowAlways"])
{
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>
<div class="row">
    <div class="col-md-12 text-center">
        <div class="site-pagination">
			<? if ($arResult['NavPageNomer'] > 1) { ?>
				<? if ($arResult['nStartPage'] > 1) { ?>
					<? if ($arResult['bSavePage']) { ?>
						<a href="<?= $arResult['sUrlPath']; ?>?<?= $strNavQueryString; ?>PAGEN_<?= $arResult['NavNum']; ?>=1">1</a>
					<? } else { ?>
						<a href="<?= $arResult['sUrlPath']; ?><?= $strNavQueryStringFull?>">1</a>
					<? } ?>
					<? if ($arResult['nStartPage'] > 2) { ?>
						<a href="<?= $arResult['sUrlPath']; ?>?<?= $strNavQueryString; ?>PAGEN_<?= $arResult['NavNum']; ?>=<?= round($arResult['nStartPage'] / 2)?>">...</a>
					<? } ?>
				<? } ?>
			<? } ?>
			<? do { ?>
				<? if ($arResult['nStartPage'] == $arResult['NavPageNomer']) { ?>
					<a href="javascript:void(0);" class="active"><?= $arResult['nStartPage']; ?></a>
				<? } else if ($arResult['nStartPage'] == 1 && $arResult['bSavePage'] == false) { ?>
					<a href="<?= $arResult['sUrlPath']; ?><?= $strNavQueryStringFull?>"><?= $arResult['nStartPage']; ?></a>
				<? } else { ?>
					<a href="<?= $arResult['sUrlPath']; ?>?<?= $strNavQueryString; ?>PAGEN_<?= $arResult['NavNum']; ?>=<?= $arResult['nStartPage']; ?>"><?= $arResult['nStartPage']; ?></a>
				<? } ?>
				<? $arResult['nStartPage']++; ?>
			<? } while($arResult['nStartPage'] <= $arResult['nEndPage']); ?>
			<? if ($arResult['NavPageNomer'] < $arResult['NavPageCount']) { ?>
				<? if ($arResult['nEndPage'] < $arResult['NavPageCount']) { ?>
					<? if ($arResult['nEndPage'] < ($arResult['NavPageCount'] - 1)) { ?>
						<a href="<?= $arResult['sUrlPath']; ?>?<?= $strNavQueryString; ?>PAGEN_<?= $arResult['NavNum']; ?>=<?= round($arResult['nEndPage'] + ($arResult['NavPageCount'] - $arResult['nEndPage']) / 2)?>">...</a>
					<? } ?>
					<a href="<?= $arResult['sUrlPath']; ?>?<?= $strNavQueryString; ?>PAGEN_<?= $arResult['NavNum']; ?>=<?= $arResult['NavPageCount']; ?>"><?= $arResult['NavPageCount']; ?></a>
				<? } ?>
			<? } ?>
        </div>
    </div>
</div>







