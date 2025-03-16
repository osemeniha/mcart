<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="col-md-6 col-lg-6">
        <ul class="list-unstyled">
            <?
            $count = count($arResult);
            $half = ceil($count / 2);
            $i = 0;
            foreach($arResult as $arItem):
                if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                    continue;
                if ($i == $half) {
                    echo '</ul></div><div class="col-md-6 col-lg-6"><ul class="list-unstyled">';
                }
                $i++;
            ?>
            <?if($arItem["SELECTED"]):?>
                <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
            <?else:?>
                <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
            <?endif?>

            <?endforeach?>

        </ul>
    </div>
<?endif?>