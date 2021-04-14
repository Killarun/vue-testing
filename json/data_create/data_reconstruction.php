<?php
    // reconstruction
        unset($arListMaterial);
        $arListMaterial = Array();

        $arListMaterial[] = "ЦПЧ";
        $arListMaterial[] = "ГЧ";
        $arListMaterial[] = "КерЧ";
        $arListMaterial[] = "КомпЧ";
        $arListMaterial[] = "МЧ";

        $parent = "Демонтажные работы";

        foreach($arListMaterial as $itemMaterial) {

            $group = "Демонтаж временной кровли";
            $arReconstruction[$itemMaterial][$parent][$group][$min] = '110 руб./кв.м';
            $arReconstruction[$itemMaterial][$parent][$group][$mid] = '115 руб./кв.м';
            $arReconstruction[$itemMaterial][$parent][$group][$max] = '130 руб./кв.м';

            $group = "Демонтаж старой холодной кровли";
            $arReconstruction[$itemMaterial][$parent][$group][$min] = '245 руб./кв.м';
            $arReconstruction[$itemMaterial][$parent][$group][$mid] = '280 руб./кв.м';
            $arReconstruction[$itemMaterial][$parent][$group][$max] = '320 руб./кв.м';

            $group = "Демонтаж старой утепленной кровли";
            $arReconstruction[$itemMaterial][$parent][$group][$min] = '420 руб./кв.м';
            $arReconstruction[$itemMaterial][$parent][$group][$mid] = '460 руб./кв.м';
            $arReconstruction[$itemMaterial][$parent][$group][$max] = '500 руб./кв.м';
        }



?>