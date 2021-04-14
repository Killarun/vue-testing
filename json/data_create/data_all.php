<?
    //*Массив с покрытиями
    unset($arReconstruction);
    $arReconstruction = Array();
    
    //*Массив с покрытиями
    unset($arMaterial);
    $arMaterial = Array();
    
    //*Первый однострочный массив - вид покрытия
    unset($arMainMaterial);
    $arMainMaterial = Array();

    //массив групп и работ
    unset($arSmeta);
    $arSmeta = Array();

    $min = "min";
    $mid = "mid";
    $max = "max";

    //массив групп и работ
    unset($arLevel);
    $arLevel = Array();

    $arLevel[$min]["code"] = $min;
    $arLevel[$min]["text"] = "Простая кровля";
    $arLevel[$mid]["code"] = $mid;
    $arLevel[$mid]["text"] = "Средняя кровля";
    $arLevel[$max]["code"] = $max;
    $arLevel[$max]["text"] = "Сложная кровля";

    unset($arGroup);
    $arGroup = Array();

    unset($arParent);
    $arParent = Array();

    $code = "Демонтажные работы";
    $arParent[$code]["code"] = $code;
    $arParent[$code]["text"] = "";

    $code = "Монтаж кровельного покрытия";
    $arParent[$code]["code"] = $code;
    $arParent[$code]["text"] = "";

    $code = "Работы по устройству кровли";
    $arParent[$code]["code"] = $code;
    $arParent[$code]["text"] = "";
    
    $code = "Установка дополнительных кровельных элементов";
    $arParent[$code]["code"] = $code;
    $arParent[$code]["text"] = "Цены на эти работы действуют при условии одновременного монтажа вместе с кровельным покрытием. <br>Если нужно установить элемент отдельно на готовую кровлю цена будет выше.";
    
?>