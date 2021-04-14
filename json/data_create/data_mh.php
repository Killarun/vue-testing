<?
    // --- менять данные ниже этой строки!!!

    $material = "МЧ";

        $arMaterial[$material]["code"] = $material;
        $arMaterial[$material]["text"] = "Металлочерепица";
        $arMaterial[$material]["default"] = true;

        $parent = "Монтаж кровельного покрытия";
            $group = "Металлочерепица и комплектующие";
            $arMainMaterial[$material][$parent][$group][$min] = '490 руб./кв.м';
            $arMainMaterial[$material][$parent][$group][$mid] = '590 руб./кв.м';
            $arMainMaterial[$material][$parent][$group][$max] = '690 руб./кв.м';
        //*-
        
        //*Массив сметы 
        //*родитель
        $parent = "Работы по устройству кровли";    
            //*группа
            $group = "Подготовка основания для монтажа кровельного материала";
            $arGroup[$material][$parent][$group]["expand"] = true;
            
                $work = "Монтаж стропильной системы";
                $arSmeta[$material][$parent][$group][$work][$min] = '800 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$mid] = '1000 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$max] = '1200 руб./кв.м';

                $work = "Монтаж гидроизоляции";
                $arSmeta[$material][$parent][$group][$work][$min] = '80 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$mid] = '100 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$max] = '120 руб./кв.м';

                $work = "Монтаж контробрешетки";
                $arSmeta[$material][$parent][$group][$work][$min] = '80 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$mid] = '90 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$max] = '100 руб./кв.м';

                $work = "Монтаж шаговой обрешетки";
                $arSmeta[$material][$parent][$group][$work][$min] = '95 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$mid] = '115 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$max] = '135 руб./кв.м';
            //*группа
            $group = "Утепление и пароизоляция";
            $arGroup[$material][$parent][$group]["expand"] = true;
            
                $work = "Утепление кровли 150 мм";
                $arSmeta[$material][$parent][$group][$work][$min] = '250 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$mid] = '300 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$max] = '350 руб./кв.м';

                $work = "Утепление кровли 200 мм";
                $arSmeta[$material][$parent][$group][$work][$min] = '250 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$mid] = '300 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$max] = '350 руб./кв.м';

                $work = "Утепление кровли 250 мм";
                $arSmeta[$material][$parent][$group][$work][$min] = '250 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$mid] = '300 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$max] = '350 руб./кв.м';

                $work = "Утепление фронтона и мауэрлата";
                $arSmeta[$material][$parent][$group][$work][$min] = '490 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$mid] = '590 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$max] = '690 руб./кв.м';

                $work = "Монтаж пароизоляции с проклейкой нахлестов";
                $arSmeta[$material][$parent][$group][$work][$min] = '150 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$mid] = '180 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$max] = '225 руб./кв.м';

                $work = "Подготовка кирпичной стены для приклейки паро и гидроизоляции (оштукатуривание)";
                $arSmeta[$material][$parent][$group][$work][$min] = '90 руб./пог.м';
                $arSmeta[$material][$parent][$group][$work][$mid] = '90 руб./пог.м';
                $arSmeta[$material][$parent][$group][$work][$max] = '90 руб./пог.м';

                $work = "Подготовка стены из бруса или бревна для приклейки паро и гидроизоляции";
                $arSmeta[$material][$parent][$group][$work][$min] = '150 руб./пог.м';
                $arSmeta[$material][$parent][$group][$work][$mid] = '150 руб./пог.м';
                $arSmeta[$material][$parent][$group][$work][$max] = '150 руб./пог.м';

                $work = "Монтаж черновой (поддерживающей) обрешетки";
                $arSmeta[$material][$parent][$group][$work][$min] = '90 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$mid] = '100 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$max] = '110 руб./кв.м';
            
        //*родитель
        $parent = "Установка дополнительных кровельных элементов";       
            $group = "Водосточная система";
            $arGroup[$material][$parent][$group]["expand"] = false;
            
                $work = "Монтаж водосточных труб";
                $arSmeta[$material][$parent][$group][$work][$min] = '490 руб./пог.м';
                $arSmeta[$material][$parent][$group][$work][$mid] = '490 руб./пог.м';
                $arSmeta[$material][$parent][$group][$work][$max] = '590 руб./пог.м';

                $work = "Монтаж желобов";
                $arSmeta[$material][$parent][$group][$work][$min] = '490 руб./пог.м';
                $arSmeta[$material][$parent][$group][$work][$mid] = '490 руб./пог.м';
                $arSmeta[$material][$parent][$group][$work][$max] = '590 руб./пог.м';
        
            $group = "Элементы безопасности";
            $arGroup[$material][$parent][$group]["expand"] = false;
            
                $work = "Снегозадержание";
                $arSmeta[$material][$parent][$group][$work][$min] = '490 руб./пог.м';
                $arSmeta[$material][$parent][$group][$work][$mid] = '490 руб./пог.м';
                $arSmeta[$material][$parent][$group][$work][$max] = '490 руб./пог.м';

            $group = "Трубы";
            $arGroup[$material][$parent][$group]["expand"] = false;
            
                $work = "Монтаж фартука трубы (периметр до 3 м)";
                $arSmeta[$material][$parent][$group][$work][$min] = '3900 руб./шт';
                $arSmeta[$material][$parent][$group][$work][$mid] = '3900 руб./шт';
                $arSmeta[$material][$parent][$group][$work][$max] = '3900 руб./шт';

                $work = "Монтаж фартука трубы (периметр более 3 м)";
                $arSmeta[$material][$parent][$group][$work][$min] = '4900 руб./шт';
                $arSmeta[$material][$parent][$group][$work][$mid] = '4900 руб./шт';
                $arSmeta[$material][$parent][$group][$work][$max] = '4900 руб./шт';

            $group = "Подшивка свесов софитами";
            $arGroup[$material][$parent][$group]["expand"] = false;
            
                $work = "Подшивка пластиковым софитом";
                $arSmeta[$material][$parent][$group][$work][$min] = '300 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$mid] = '350 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$max] = '470 руб./кв.м';

                $work = "Монтаж каркаса подшивки в горизонт";
                $arSmeta[$material][$parent][$group][$work][$min] = '250 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$mid] = '300 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$max] = '400 руб./кв.м';

                $work = "Монтаж лобовой планки";
                $arSmeta[$material][$parent][$group][$work][$min] = '100 руб./пог.м';
                $arSmeta[$material][$parent][$group][$work][$mid] = '100 руб./пог.м';
                $arSmeta[$material][$parent][$group][$work][$max] = '100 руб./пог.м';

            $group = "Мансардные окна";  
            $arGroup[$material][$parent][$group]["expand"] = false;
            
                $work = "Установка мансардного окна с утеплением откосов под ключ (при одновременном монтаже с кровлей)";
                $arSmeta[$material][$parent][$group][$work][$min] = '6700 руб./шт';
                $arSmeta[$material][$parent][$group][$work][$mid] = '6700 руб./шт';
                $arSmeta[$material][$parent][$group][$work][$max] = '6700 руб./шт';

                $work = "Установка мансардного окна отдельно";
                $arSmeta[$material][$parent][$group][$work][$min] = '15000 руб./шт';
                $arSmeta[$material][$parent][$group][$work][$mid] = '15000 руб./шт';
                $arSmeta[$material][$parent][$group][$work][$max] = '15000 руб./шт';
                
            $group = "Проходки и вентиляционные элементы ";
            $arGroup[$material][$parent][$group]["expand"] = false;
            
                $work = "Установка вентилятора подкровельного пространства";
                $arSmeta[$material][$parent][$group][$work][$min] = '900 руб./шт';
                $arSmeta[$material][$parent][$group][$work][$mid] = '900 руб./шт';
                $arSmeta[$material][$parent][$group][$work][$max] = '900 руб./шт';
                
                $work = "Проходка вентиляционная труба";
                $arSmeta[$material][$parent][$group][$work][$min] = '1900 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$mid] = '1900 руб./кв.м';
                $arSmeta[$material][$parent][$group][$work][$max] = '1900 руб./кв.м';
                

            

            

?>