<?
   require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
   $APPLICATION->SetTitle("Кровля под ключ с УНИКМА");

   $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets1/css/slick.css");
   $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets1/css/slick-theme.css");
   // Подключение плагина прокрутки блоков на главной странице
   $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.scrollify.js");
   $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets1/js/slick1.js");
   $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets1/js/skript1.js");
?>

<script>
   var gl_ar_capt = [
     "Завершенность<br>и великолепный внешний вид",
     "Страховочная гидроизоляция",
     "Подкровельная<br> вентиляция",
     "Качественное<br>утепление<br>и пароизоляция",
     "Безопасность",
     "Надежные примыкания",
   ];
   var gl_ar_txt = [
     "делаем вашу кровлю красивой",
     "отводим конденсат и капиллярную влагу<br> из-под кровли",
     "сохраняем подконструкцию в сухом состоянии, продлеваем срок службы кровли",
     "исключаем промерзания и образование конденсата, обеспечиваем комфортную температуру внутри помещения",
     "уберегаем людей и нижние скаты от падения снежно-ледяных глыб",
     "предотвращаем прямые протечки внутрь конструкции",

     "",
     "",
     "",
     "",
     "",
     ""
   ];
   var gl_ar_btn = ["n", "n", "n", "n", "n", "n"];

   $(document).ready(function(){
      $( ".avt_block" ).on( "click", function() {
       var numSpan =  $(this).attr("data-num");

       if (gl_ar_btn[numSpan] == "n") {

         $(this).find(".avt_caption").html("");
         $(this).find(".avt_txt").html(gl_ar_txt[numSpan]);
         gl_ar_btn[numSpan] = "y";
       } else {
         $(this).find(".avt_caption").html(gl_ar_capt[numSpan]);
         $(this).find(".avt_txt").html("");
         gl_ar_btn[numSpan] = "n";

       }
      });
   });


</script>
<script>
   
   $(document).ready(function(){
   $('.avt_btn_fil__deact').on('click', function(){
         $('.avt_btn_fil__deact').not(this).removeClass('active');
      $(this).addClass('active');
   });
   });
</script>

<!-- Optional theme -->
<link rel="stylesheet" type="text/css" href="/avt_test/content/maket/DataTables/datatables.css"/>
<script type="text/javascript" src="/avt_test/content/maket/DataTables/datatables.js"></script>
<link rel="stylesheet" type="text/css" href="/roofing_firm/build/specializations/stroyka.css">
<link rel="stylesheet" type="text/css" href="/roofing_firm/build/specializations/objects_info.css">
<script type="text/javascript" src="/avt_test/content/maket/script.js"></script>

<style>
   .iknopka {
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      border: solid 1px #999999;
      background-color: #eaeaea;
   }
   .iknopka:hover {
      box-shadow: 0 0 10px rgba(0,0,0,0.5);
   }
</style>

<section class="slider-nav">
   <div class="inner">
      <div class="container-fluid">
         <div class="col-lg-12 marTop">
            <div class="bl-1">
               <h1>
                  Кровля под ключ с УНИКМА<br>
               </h1>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="img-block">
   <div class="inner     avt_main_text">
      <div class="dopmenu">
         <a href="#dopmenu" id="dopmenu" name="dopmenu"></a>
         <div class="column">
            <div class="col-item active" onclick="colItem(0);"><span>НОВОЕ СТРОИТЕЛЬСТВО</span></div>
         </div>
         <div class="column">
            <div class="col-item" onclick="colItem(1);"><span>РЕКОНСТРУКЦИЯ</span></div>
         </div>
      </div>
   </div>
</section>

<section class="inner avt_main_text" id="content-blocks">
   <div style="display:block;">
      <div class="inner">
         <div class="container-fluid nopadding">
            <p style="font-size: 20px;">Мы строим кровли по Стандартам УНИКМА. Наши кровли не текут, не промерзают и не требуют вложений долгие годы.<br> Мы неуклонно соблюдаем основные правила:
            </p>
         </div>
         <br><br>
      </div>
      <div>
         <div class="avt_grid_col_60">
            <div class="avt_grid_col_66">
               <div class="avt_block" data-num="0">
                  <img src="/avt_test/content/maket/images/stroy/sla1.jpg">
                  <div class="avt_txt"></div>
                  <div class="avt_caption   avt_caption2">Завершенность<br>и великолепный внешний вид</div>
               </div>
            </div>
            <!--
               -->
            <div class="avt_grid_col_33">
               <div class="avt_grid_col_100_50">
                  <div class="avt_block" data-num="1">
                     <img src="/avt_test/content/maket/images/stroy/sla2.jpg">
                     <div class="avt_txt" style="padding-top: 25%;"></div>
                     <div class="avt_caption   avt_caption2">Страховочная гидроизоляция</div>
                  </div>
               </div>
               <!--
                  -->
               <div class="avt_grid_col_100_50">
                  <div class="avt_block" data-num="2">
                     <img src="/avt_test/content/maket/images/stroy/sla5.jpg">
                     <div class="avt_txt" style="padding-top: 17%;"></div>
                     <div class="avt_caption   avt_caption2">Подкровельная<br> вентиляция</div>
                  </div>
               </div>
            </div>
         </div>
         <!--
            -->
         <div class="avt_grid_col_40">
            <div class="avt_grid_col_50">
               <div class="avt_block" data-num="3">
                  <img src="/avt_test/content/maket/images/stroy/sla3.jpg">
                  <div class="avt_txt" style="padding-top: 10%;"></div>
                  <div class="avt_caption   avt_caption3">Качественное<br>утепление<br>и пароизоляция</div>
               </div>
            </div>
            <!--
               -->
            <div class="avt_grid_col_50">
               <div class="avt_block" data-num="4">
                  <img src="/avt_test/content/maket/images/stroy/sla4.jpg">
                  <div class="avt_txt" style="padding-top: 25%;"></div>
                  <div class="avt_caption   avt_caption1">Безопасность</div>
               </div>
            </div>
            <!--
               -->
            <div class="avt_grid_col_100">
               <div class="avt_block" data-num="5">
                  <img src="/avt_test/content/maket/images/stroy/sla6.jpg">
                  <div class="avt_txt" style="padding-top: 15%;"></div>
                  <div class="avt_caption   avt_caption1">Надежные примыкания</div>
               </div>
            </div>
         </div>
      </div>
      <br><br>
    
      <div class="container-fluid nopadding">
         <div style="text-align:center;">
            <?$APPLICATION->IncludeComponent(
               "api:formdesigner", 
               "modalform", 
               array(
                  "CACHE_TIME" => "",
                  "CACHE_TYPE" => "N",
                  "COMPATIBLE_ON" => "N",
                  "COMPONENT_TEMPLATE" => "modalform",
                  "DATE" => date("d-m-Y"),
                  "DATE_TIME" => date("d-m-Y H:i:s"),
                  "DIR_URL" => $APPLICATION->GetCurDir(),
                  "DIVIDER_FIELDS" => array(
                  ),
                  "ENABLED_FIELDS" => array(
                  ),
                  "FORM_HORIZONTAL" => "N",
                  "FORM_TITLE" => "Заказать консультацию",
                  "FORM_WIDTH" => "",
                  "GA_ON" => "Y",
                  "HIDE_FIELDS" => array(
                  ),
                  "IBLOCK_ELEMENT_ACTIVE" => "N",
                  "IBLOCK_ELEMENT_CODE" => "",
                  "IBLOCK_ELEMENT_NAME" => "Обращение от #PHONE#",
                  "IBLOCK_ID" => "298",
                  "IBLOCK_ON" => "Y",
                  "IBLOCK_TICKET_CODE" => "#TICKET_ID#",
                  "IBLOCK_TYPE" => "forms_api",
                  "IP" => $_SERVER["REMOTE_ADDR"],
                  "JQUERY_ON" => "Y",
                  "JQUERY_VERSION" => "jquery",
                  "MESS_CHECK_EMAIL" => "",
                  "MESS_CHOOSE" => "(выбрать)",
                  "MESS_PRIVACY" => "",
                  "MESS_PRIVACY_CONFIRM" => "",
                  "MESS_PRIVACY_LINK" => "",
                  "MESS_REQUIRED_FIELD" => "Поле #FIELD# является обязательным",
                  "MESS_SUCCESS" => "Ваш запрос отправлен.",
                  "MESS_SUCCESS_DESC" => "Спасибо за Ваше обращение.",
                  "MODAL_BTN_CLASS" => "green_btn14",
                  "MODAL_BTN_ID" => "",
                  "MODAL_BTN_SPAN_CLASS" => "",
                  "MODAL_BTN_TEXT" => "ЗАДАТЬ ВОПРОС СПЕЦИАЛИСТУ",
                  "MODAL_FOOTER_TEXT" => "*Нажимая кнопку «Заказать звонок», Вы подтверждаете свое согласие на обработку своих персональных данных в соответствии с <a style=\"font-size: 10px;\" href=\"/upload/raznoe/eb/Politika.pdf\" target=\"_blank\">Условиями</a>",
                  "MODAL_HEADER_TEXT" => "",
                  "MODAL_ID" => "#first",
                  "PAGE_TITLE" => $APPLICATION->GetTitle(),
                  "PAGE_URL" => $APPLICATION->GetCurPage(),
                  "PAGE_VARS" => array(
                     0 => "",
                     1 => "",
                  ),
                  "POST_ADMIN_MESSAGE_ID" => array(
                     0 => "125",
                     1 => "",
                  ),
                  "POST_ADMIN_SUBJECT" => "#SITE_NAME#: Сообщение из формы Перезвоните мне",
                  "POST_EMAIL_CODE" => "",
                  "POST_EMAIL_FROM" => "",
                  "POST_EMAIL_TO" => "builder@unikma.ru",
                  "POST_MESS_STYLE_VALUE" => "",
                  "POST_MESS_STYLE_WRAP" => "padding:10px;border-bottom:1px dashed #dadada;",
                  "POST_MESS_STYLE_NAME" => "font-weight:bold;",
                  "POST_ON" => "Y",
                  "POST_REPLACE_FROM" => "N",
                  "POST_USER_MESSAGE_ID" => array(
                     0 => "",
                     1 => "",
                  ),
                  "POST_USER_SUBJECT" => "",
                  "REDIRECT_URL" => "",
                  "SERVER_VARS" => array(
                     0 => "",
                     1 => "",
                  ),
                  "SHOW_ERRORS" => "N",
                  "SHOW_TITLE" => "Y",
                  "SUBMIT_BUTTON_AJAX" => "Отправляется запрос...",
                  "SUBMIT_BUTTON_CLASS" => "btn1",
                  "SUBMIT_BUTTON_TEXT" => "Заказать звонок",
                  "TEMPLATE_BG_COLOR" => "",
                  "TEMPLATE_COLOR" => "green1",
                  "TEMPLATE_THEME" => "simple",
                  "UNIQUE_FORM_ID" => "",
                  "UPLOAD_FILE_LIMIT" => "5",
                  "UPLOAD_FILE_SIZE" => "10M",
                  "UPLOAD_FOLDER" => "/upload/api_formdesigner",
                  "USER_CONSENT" => "N",
                  "USE_BX_CAPTCHA" => "N",
                  "USE_EULA" => "N",
                  "USE_MODAL" => "Y",
                  "USE_PRIVACY" => "N",
                  "UTM_VARS" => array(
                     0 => "",
                     1 => "",
                  ),
                  "INPUTMASK_FIELD_PHONE" => "'mask': '+7(999) 999-9999'",
                  "INPUTMASK_JS" => "Y",
                  "INPUTMASK_ON" => "Y",
                  "VALIDATE_MESS_PHONE" => "data-fv-regexp-message='Телефон введен неполностью'",
                  "VALIDATE_ON" => "N",
                  "VALIDATE_RULE_PHONE" => "pattern='^((8|+7)[- ]?)?((?d{3})?[- ]?)?[d- ]{7,10}\$'",
                  "WYSIWYG_ON" => "N",
                  "YAMETRIKA_COUNTER_ID" => "39057090",
                  "YAMETRIKA_ON" => "Y",
                  "YAMETRIKA_TARGET_NAME" => "UNI_Vopros_specialistu",
                  "YM2_ON" => "N",
                  "INPUTMASK_FIELD_NAME" => "",
                  "INPUTMASK_FIELD_TIME" => "",
                  "INPUTMASK_FIELD_THEME" => "",
                  "INPUTMASK_FIELD_COMMENT" => "",
                  "GA_GTAG" => "ga('send','event','Knopka','uniCallbackOpen');",
                  "INPUTMASK_FIELD_QUESTION" => "",
                  "INPUTMASK_FIELD_EMAIL" => ""
               ),
               false
            );?>
         </div><br><br>

         <h3>Преимущества строительства с УНИКМА</h3>
         <img src="/upload/raznoe/news/stat/line.png"><br><br>

         <div class="bl-3__"; style="flex-direction:row; flex-wrap:wrap; line-height: normal;";>
            <div onclick="window.open('https://unikma.ru/roofing_firm/build/specializations/service/')" class="iknopka">
               <p style="font-size: 20px;font-weight: bold; margin-bottom: 45px">Кровля под ключ</p>
               Выбор материалов, смета и строительство кровли - все в одном месте
            </div>

            <div onclick="window.open('https://unikma.ru/roofing_firm/build/builders/finde/search.php?checkbox%5B6%5D=%D0%90%D1%82%D1%82%D0%B5%D1%81%D1%82%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D1%8B%D0%B5+%D0%BF%D1%80%D0%BE%D1%80%D0%B0%D0%B1%D1%8B')" class="iknopka">
               <p style="font-size: 20px;font-weight: bold; margin-bottom: 20px">Прорабы, аттестованные<br> фирмой УНИКМА</p>
               16 строительных компаний,
               <br>25 аттестованных прорабов
            </div>
            <div onclick="window.open('https://unikma.ru/roofing_firm/build/inspections/')"  class="iknopka">
               <p style="font-size: 20px;font-weight: bold; margin-bottom: 45px">Технадзор</p>
               Регулярные инспекции качества работы аттестованных прорабов
            </div>
         </div>
      </div>
   <br><br>
</section>


<section class="inner avt_main_text" id="content-blocks">
   <div style="display:none;">
      <div class="inner">
         <div class="container-fluid nopadding">
            <p style="font-size: 20px;">Основные причины реконструкции кровли:</p>
         </div>
         <br><br>
      </div>
      <div>
         <div class="avt_grid_col_60">
            <div class="avt_grid_col_66">
               <div class="avt_block" data-num="6">
                  <img src="/avt_test/content/maket/images/stroy/sla11.jpg">
                  <div class="avt_txt"></div>
                  <div class="avt_caption1   avt_caption1">Ошибки в монтаже пароизоляции</div>
               </div>
            </div>
            <!--
               -->
            <div class="avt_grid_col_33">
               <div class="avt_grid_col_100_50">
                  <div class="avt_block" data-num="7">
                     <img src="/avt_test/content/maket/images/stroy/sla8.jpg">
                     <div class="avt_caption1   avt_caption2">Некачественное<br> утепление</div>
                  </div>
               </div>
               <!--
                  -->
               <div class="avt_grid_col_100_50">
                  <div class="avt_block" data-num="8">
                     <img src="/avt_test/content/maket/images/stroy/sla9.jpg">
                     <div class="avt_caption1   avt_caption2">Ошибки в монтаже гидроизоляции</div>
                  </div>
               </div>
            </div>
         </div>
         <!--
            -->
         <div class="avt_grid_col_40">
            <div class="avt_grid_col_50">
               <div class="avt_block" data-num="9">
                  <img src="/avt_test/content/maket/images/stroy/sla10.jpg">
                  <div class="avt_caption1   avt_caption33">Наличие пустот<br> между <br>гидроизоляционной мембраной <br>и утеплителем</div>
               </div>
            </div>
            <!--
               -->
            <div class="avt_grid_col_50">
               <div class="avt_block" data-num="10">
                  <img src="/avt_test/content/maket/images/stroy/sla7.jpg">
                  <div class="avt_caption1   avt_caption21">Несоблюдение технологии монтажа<br> кровельного<br> покрытия</div>

               </div>
            </div>
            <!--
               -->
            <div class="avt_grid_col_100">
               <div class="avt_block" data-num="11">
                  <img src="/avt_test/content/maket/images/stroy/sla12.jpg">
                  <div class="avt_caption1   avt_caption1">Отсутствие основания <br>под кровельное покрытие</div>
               </div>
            </div>
         </div>
      </div>
      <br><br>
      <div class="container-fluid nopadding">
         <h3>Преимущества строительства с УНИКМА</h3>
         <img src="/upload/raznoe/news/stat/line.png"><br><br>
         <div class="bl-3__"; style="flex-direction:row; flex-wrap:wrap; line-height: normal;";>
            <div onclick="window.open('https://unikma.ru/roofing_firm/build/builders/finde/search.php?checkbox%5B6%5D=%D0%90%D1%82%D1%82%D0%B5%D1%81%D1%82%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D1%8B%D0%B5+%D0%BF%D1%80%D0%BE%D1%80%D0%B0%D0%B1%D1%8B')" class="iknopka">
               <span style="font-size: 20px;font-weight: bold;">Прорабы, аттестованные<br> фирмой УНИКМА</span><br>
               <br>16 строительных компаний,
               <br>25 аттестованных прорабов
            </div>
            <div onclick="window.open('https://unikma.ru/roofing_firm/build/obsledovanie/')" class="iknopka">
               <span style="font-size: 20px;font-weight: bold;">С чего начать?<br> Диагностика</span><br>
               <br> Выявление причин проблем с кровлей
            </div>
            <div onclick="window.open('https://unikma.ru/roofing_firm/build/specializations/service/')" class="iknopka">
               <span style="font-size: 20px;font-weight: bold;">Реконструкция<br> под ключ </span><br>
               <br>Выбор материалов, смета и строительство – все в одном месте
            </div>
         </div>
      </div>
      <br><br>
   </div>
</section>

<section class="inner avt_main_text">
   <h3>Сколько стоит кровля</h3>
   <img src="/upload/raznoe/news/stat/line.png"><br><br>

   <?/* для вставки таблиц со сметами  VUE */?>


   <?/* для вставки таблиц со сметами  VUE */?>
</section>

<section class="inner avt_main_text">

   <br><br>
   <?
      unset($ar_Obj);
      $ar_Obj = Array();
      unset($ar_Main_Mat);
      $ar_Main_Mat = Array();
      unset($ar_Builders);
      $ar_Builders = Array();
      $arFilter = Array("IBLOCK_ID"=>167,"ACTIVE"=>"Y",'CHECK_PERMISSIONS'=>'N');
      $res = CIBlockElement::GetList(Array("SORT"=>'ASC',"NAME"=>"ASC"), $arFilter, false, false);
      while($ob = $res->GetNextElement()) {
        $arFields = $ob->GetFields();
        $ar_Main_Mat[$arFields["ID"]]["ID"] = $arFields["ID"];
        $ar_Main_Mat[$arFields["ID"]]["SORT"] = $arFields["SORT"];
        $ar_Main_Mat[$arFields["ID"]]["NAME"] = $arFields["NAME"];
      }
      $arFilter = Array("IBLOCK_ID"=>34,'CHECK_PERMISSIONS'=>'N');
      $res = CIBlockElement::GetList(Array("SORT"=>'ASC'), $arFilter, false, false);
      while($ob = $res->GetNextElement()) {
        $arFields = $ob->GetFields();
        $ar_Builders[$arFields["ID"]]["ID"] = $arFields["ID"];
        $ar_Builders[$arFields["ID"]]["NAME"] = $arFields["NAME"];
        $ar_Builders[$arFields["ID"]]["DETAIL_PAGE_URL"] = $arFields["DETAIL_PAGE_URL"];
      }

      $arSelect = Array("ID", "IBLOCK_ID", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_PAGE_URL", "PROPERTY_MAIN_MATERIAL", "PROPERTY_FIRMA", "PROPERTY_RE_BUILD","PROPERTY_SYSTEM","PROPERTY_STOIM_MAT","PROPERTY_STOIM_RAB");
      $arFilter = Array("IBLOCK_ID"=>166,"ACTIVE"=>"Y","PROPERTY_SYSTEM"=>'185156','CHECK_PERMISSIONS'=>'N');
      $res = CIBlockElement::GetList(Array("SORT"=>'ASC'), $arFilter, false, false, $arSelect);
      while($ob = $res->GetNextElement()) {
        $arFields = $ob->GetFields();
        $ar_Obj[$arFields["ID"]]["NAME"] = $arFields["PREVIEW_TEXT"];
        $ar_Obj[$arFields["ID"]]["PICTURE"] = CFile::GetPath($arFields["PREVIEW_PICTURE"]);
        $ar_Obj[$arFields["ID"]]["FIRMA"] = $ar_Builders[$arFields["PROPERTY_FIRMA_VALUE"]]["NAME"];
        $ar_Obj[$arFields["ID"]]["DETAIL_PAGE_URL"] = $arFields["DETAIL_PAGE_URL"];
		if ($arFields["PROPERTY_RE_BUILD_VALUE"]== "Да"){
			$ar_Obj[$arFields["ID"]]["TYPE"] = 1;
		} else {
			$ar_Obj[$arFields["ID"]]["TYPE"] = 0;
		}
		$sum_stoim = 0;
		$str_rashod = "";
		if ($arFields["PROPERTY_STOIM_MAT_VALUE"]!= "" AND $arFields["PROPERTY_STOIM_RAB_VALUE"]!= ""){
			$sum_stoim = ((int)$arFields["PROPERTY_STOIM_MAT_VALUE"]+(int)$arFields["PROPERTY_STOIM_RAB_VALUE"])/1000;
			if ($sum_stoim <= 1000) {
				$str_rashod = "менее 1 млн.руб";
			} 
			if ($sum_stoim <= 2000 AND $sum_stoim > 1000) {
				$str_rashod = "от 1 до 2 млн.руб";
			} 
			if ($sum_stoim > 2000) {
				$str_rashod = "более 2 млн.руб";
			}			
		}
		if ($str_rashod<>""){
			$ar_Obj[$arFields["ID"]]["SUM_STOIM"] = "<span class='avt_lbl_firma'>Стоимость кровли: </span><span class='avt_txt_object'>".$str_rashod."</span>";
		} else {
			$ar_Obj[$arFields["ID"]]["SUM_STOIM"] = $str_rashod;
		}	
        $ar_Obj[$arFields["ID"]]["MAIN_MATERIAL"][$arFields["PROPERTY_MAIN_MATERIAL_VALUE"]]["NAME"] = $ar_Main_Mat[$arFields["PROPERTY_MAIN_MATERIAL_VALUE"]]["NAME"];
        $ar_Obj[$arFields["ID"]]["MAIN_MATERIAL"][$arFields["PROPERTY_MAIN_MATERIAL_VALUE"]]["SORT"] = $ar_Main_Mat[$arFields["PROPERTY_MAIN_MATERIAL_VALUE"]]["SORT"];
        /*?>
   <pre><?print_r($arFields);?></pre>
   <?*/
      }
		
	  unset($ar_type_build);
      $ar_type_build = Array("0" => "НОВОЕ СТРОИТЕЛЬСТВО", "1" => "РЕКОНСТРУКЦИЯ");

      unset($ar_button);
      $ar_button = Array();
      unset($ar_button_sort);
      $ar_button_sort = Array();
      foreach($ar_Obj as $it_obj){
        foreach($it_obj["MAIN_MATERIAL"] as $id_mat => $it_mat){
          $ar_button_sort[$id_mat] = $it_mat["SORT"];
        }
      }
      asort($ar_button_sort);
      foreach($ar_button_sort as $id_obj => $sort_obj){
        $ar_button[$id_obj]["BUTTON"] = $ar_Main_Mat[$id_obj]["NAME"];
      }
      foreach($ar_Obj as $key_obj => $it_obj){
        $ar_button[0]["OBJECTS"][$key_obj]["NAME"] = $it_obj["NAME"];
        $ar_button[0]["OBJECTS"][$key_obj]["PICTURE"] = $it_obj["PICTURE"];
        $ar_button[0]["OBJECTS"][$key_obj]["FIRMA"] = $it_obj["FIRMA"];
        $ar_button[0]["OBJECTS"][$key_obj]["DETAIL_PAGE_URL"] = $it_obj["DETAIL_PAGE_URL"];
		$ar_button[0]["OBJECTS"][$key_obj]["TYPE"] = $it_obj["TYPE"];
		$ar_button[0]["OBJECTS"][$key_obj]["SUM_STOIM"] = $it_obj["SUM_STOIM"];
        foreach($it_obj["MAIN_MATERIAL"] as $id_mat => $it_mat){
			$ar_button[$id_mat]["OBJECTS"][$key_obj]["NAME"] = $it_obj["NAME"];
			$ar_button[$id_mat]["OBJECTS"][$key_obj]["PICTURE"] = $it_obj["PICTURE"];
			$ar_button[$id_mat]["OBJECTS"][$key_obj]["FIRMA"] = $it_obj["FIRMA"];
			$ar_button[$id_mat]["OBJECTS"][$key_obj]["DETAIL_PAGE_URL"] = $it_obj["DETAIL_PAGE_URL"];
			$ar_button[$id_mat]["OBJECTS"][$key_obj]["TYPE"] = $it_obj["TYPE"];
			$ar_button[$id_mat]["OBJECTS"][$key_obj]["SUM_STOIM"] = $it_obj["SUM_STOIM"];
        }
      }
      ?>
   <div class="inner">
      <div style="text-align:center;">
         <?$APPLICATION->IncludeComponent(
            "api:formdesigner", 
            "modalform", 
            array(
               "CACHE_TIME" => "",
               "CACHE_TYPE" => "N",
               "COMPATIBLE_ON" => "N",
               "COMPONENT_TEMPLATE" => "modalform",
               "DATE" => date("d-m-Y"),
               "DATE_TIME" => date("d-m-Y H:i:s"),
               "DIR_URL" => $APPLICATION->GetCurDir(),
               "DIVIDER_FIELDS" => array(
               ),
               "ENABLED_FIELDS" => array(
               ),
               "FORM_HORIZONTAL" => "N",
               "FORM_TITLE" => "Заказать смету",
               "FORM_WIDTH" => "",
               "GA_ON" => "Y",
               "HIDE_FIELDS" => array(
                  0 => "PAGE_URL",
               ),
               "IBLOCK_ELEMENT_ACTIVE" => "N",
               "IBLOCK_ELEMENT_CODE" => "",
               "IBLOCK_ELEMENT_NAME" => "Обращение от #NAME#",
               "IBLOCK_ID" => "170",
               "IBLOCK_ON" => "Y",
               "IBLOCK_TICKET_CODE" => "#TICKET_ID#",
               "IBLOCK_TYPE" => "forms_api",
               "IP" => $_SERVER["REMOTE_ADDR"],
               "JQUERY_ON" => "Y",
               "JQUERY_VERSION" => "jquery",
               "MESS_CHECK_EMAIL" => "",
               "MESS_CHOOSE" => "(выбрать)",
               "MESS_PRIVACY" => "",
               "MESS_PRIVACY_CONFIRM" => "",
               "MESS_PRIVACY_LINK" => "",
               "MESS_REQUIRED_FIELD" => "Поле #FIELD# является обязательным",
               "MESS_SUCCESS" => "Ваш запрос отправлен.",
               "MESS_SUCCESS_DESC" => "Спасибо за Ваше обращение.",
               "MODAL_BTN_CLASS" => "green_btn14",
               "MODAL_BTN_ID" => "",
               "MODAL_BTN_SPAN_CLASS" => "",
               "MODAL_BTN_TEXT" => "РАССЧИТАТЬ СТОИМОСТЬ ВАШЕЙ КРОВЛИ ПОД КЛЮЧ",
               "MODAL_FOOTER_TEXT" => "*Нажимая кнопку «Заказать звонок», Вы подтверждаете свое согласие на обработку своих персональных данных в соответствии с <a style=\"font-size: 10px;\" href=\"/upload/raznoe/eb/Politika.pdf\" target=\"_blank\">Условиями</a>",
               "MODAL_HEADER_TEXT" => "",
               "MODAL_ID" => "#second",
               "PAGE_TITLE" => $APPLICATION->GetTitle(),
               "PAGE_URL" => $APPLICATION->GetCurPage(),
               "PAGE_VARS" => array(
                  0 => "",
                  1 => "",
               ),
               "POST_ADMIN_MESSAGE_ID" => array(
                  0 => "125",
                  1 => "",
               ),
               "POST_ADMIN_SUBJECT" => "#SITE_NAME#: Сообщение из формы РАССЧИТАТЬ СТОИМОСТЬ ВАШЕЙ КРОВЛИ ПОД КЛЮЧ",
               "POST_EMAIL_CODE" => "",
               "POST_EMAIL_FROM" => "",
               "POST_EMAIL_TO" => "builder@unikma.ru",
               "POST_MESS_STYLE_VALUE" => "",
               "POST_MESS_STYLE_WRAP" => "padding:10px;border-bottom:1px dashed #dadada;",
               "POST_MESS_STYLE_NAME" => "font-weight:bold;",
               "POST_ON" => "Y",
               "POST_REPLACE_FROM" => "N",
               "POST_USER_MESSAGE_ID" => array(
                  0 => "",
                  1 => "",
               ),
               "POST_USER_SUBJECT" => "",
               "REDIRECT_URL" => "",
               "SERVER_VARS" => array(
                  0 => "",
                  1 => "",
               ),
               "SHOW_ERRORS" => "Y",
               "SHOW_TITLE" => "Y",
               "SUBMIT_BUTTON_AJAX" => "Отправляется запрос...",
               "SUBMIT_BUTTON_CLASS" => "btn1",
               "SUBMIT_BUTTON_TEXT" => "Заказать смету",
               "TEMPLATE_BG_COLOR" => "",
               "TEMPLATE_COLOR" => "green1",
               "TEMPLATE_THEME" => "simple",
               "UNIQUE_FORM_ID" => "",
               "UPLOAD_FILE_LIMIT" => "5",
               "UPLOAD_FILE_SIZE" => "10M",
               "UPLOAD_FOLDER" => "/upload/api_formdesigner",
               "USER_CONSENT" => "N",
               "USE_BX_CAPTCHA" => "N",
               "USE_EULA" => "N",
               "USE_MODAL" => "Y",
               "USE_PRIVACY" => "N",
               "UTM_VARS" => array(
                  0 => "",
                  1 => "",
               ),
               "INPUTMASK_FIELD_PHONE" => "'mask': '+7(999) 999-9999'",
               "INPUTMASK_JS" => "Y",
               "INPUTMASK_ON" => "Y",
               "VALIDATE_MESS_PHONE" => "data-fv-regexp-message='Телефон введен неполностью'",
               "VALIDATE_ON" => "N",
               "VALIDATE_RULE_PHONE" => "pattern='^((8|+7)[- ]?)?((?d{3})?[- ]?)?[d- ]{7,10}\$'",
               "WYSIWYG_ON" => "N",
               "YAMETRIKA_COUNTER_ID" => "39057090",
               "YAMETRIKA_ON" => "Y",
               "YAMETRIKA_TARGET_NAME" => "UNI_Smeta_Po_Planu_Krovli",
               "YM2_ON" => "N",
               "INPUTMASK_FIELD_NAME" => "",
               "INPUTMASK_FIELD_TIME" => "",
               "INPUTMASK_FIELD_THEME" => "",
               "INPUTMASK_FIELD_COMMENT" => "",
               "GA_GTAG" => "ga('send','event','Knopka','uniCallbackOpen');",
               "INPUTMASK_FIELD_EMAIL" => ""
            ),
            false
         );?>
      </div><br><br>
1
      <div class="container-fluid nopadding">
         <h3><b>Наши кровли со сметами</b></h3>
         <img src="/upload/raznoe/news/stat/line.png"><br><br>
		   <div id="type_build" style="flex-direction:row; flex-wrap:wrap; line-height: normal;display: flex;">
            <?foreach($ar_type_build as $id_type_build => $type_build){?>
               <div onclick="click_type_build(<?=$id_type_build;?>);" class="selector-rk">
         
                  <a class="avt_btn_fil   avt_btn_fil__deact   avt_btn_fil_gr01 <?if ($id_type_build==0){?> active <?}?>">
                     <?=$type_build;?>
                  </a>
                  <br>
               </div>
            <?}?>
            <div class="smotret_vse">
               <a class="avt_button2" href="/roofing_firm/build/objects/" target="_blank">
                  <div style="text-align: center; font-size: 13px;">
                     <b>СМОТРЕТЬ ВСЕ ОБЪЕКТЫ</b>
                  </div>
               </a>
               <br><br>
            </div>
		   </div><br><br>
		 
		
         <div id="bl-3" class="bl-34" style="flex-direction:row; flex-wrap:wrap; line-height: normal;">
            <style>
               @media (max-width: 769px) and (min-width: 320px){
               .col-item_i21 {
                  margin: 3px 5px;
               }
               .avt_btn_fil__deact {
                  font-size: 12px;
               }}
            </style>
         </div>
         <br><br>

         <div id="rows">

         </div>

         <script>
            function click_type_build(type_build) {
               <?/* Определение другого текущего параметра без нажатия на него по его классу  (Здесь не используем, но наработка важна)*/?>
               var id_button = 0;
               <?foreach($ar_button as $key => $item){?>
                  var element  = document.getElementById('#btn_<?=$key;?>');
                  if(element != null) {
                     if(element.classList.contains('active_but2')) {
                        id_button = '<?=$key;?>';
                     }
                  }
               <?}?>
               <?/* Определение другого текущего параметра без нажатия на него по его классу  (Здесь не используем, но наработка важна)*/?>
               $('#bl-3').html("");  // Обнуляем текущий список кнопок
               var element  = document.getElementById('bl-3');
               var fragment = document.createDocumentFragment();
               <?foreach($ar_button as $id_button => $it_button){?>
                  <?if ($id_button<>0){?>
                     var div = document.createElement('div');
                     div.setAttribute("class", "col-item_i21");
                     div.setAttribute("onclick", "click_button("+type_build+",<?=$id_button;?>);");
                     // div.setAttribute("style", "text-align: center;");
                     div.innerHTML = "";
                     inner = "<a class='iknopka2' id='btn_<?=$id_button;?>'><?=$it_button["BUTTON"];?></a><br>";
                     div.innerHTML = inner;
                     inner = "";
                     fragment.appendChild(div);
                     element.appendChild(fragment);
                  <?} ?>
               <?}?>
               $('.iknopka_type').removeClass('active_but2-1');
               $('#type_'+type_build).addClass('active_but2-1');
               $('.iknopka2').removeClass('active_but2');
               click_button(type_build,0);
               }
               function click_button(type_build,id_button) {
               <?foreach($ar_button as $key => $item) {?>	//  делаем перебор по всем кнопкам-материалам
                  var element  = document.getElementById('btn_<?=$key;?>');
                  if(element != null) {  //  Проверяем на существование этой кнопки
                     if(element.classList.contains('active_but2')) {
                        if (id_button == '<?=$key;?>') { // Если кликнули по активной кнопке
                              id_button = 0;  //  её отжимаем
                        }
                     }
                  }
               <?}?>
               $('#rows').html("");  // Обнуляем текущий список
               <?foreach($ar_button as $key => $item){?>
                  if (id_button == '<?=$key;?>'){
                     <?foreach($ar_type_build as $id_type_build => $type_build){?>
                        if (type_build == '<?=$id_type_build;?>'){
                           var inner = "";
                           <?$current_Obj = 0;?>
                           <?foreach($item["OBJECTS"] as $key_obj => $it_obj){?>
                              <?if ($it_obj["TYPE"] == $id_type_build){?>
                                 <?if ($current_Obj == 0 OR $current_Obj>3){ ?>
                                    <?  $current_Obj = 1;   ?>
                                    var element  = document.getElementById('rows');
                                    var fragment = document.createDocumentFragment();
                                    var br = document.createElement('br');
                                    br.innerHTML = "";
                                    var div = document.createElement('div');
                                    div.setAttribute("class", "row");
                                    div.innerHTML = "";
                                    inner = "";
                                    inner = inner+"<div class='avt_grid_col_33_1'><a href='<?=$it_obj["DETAIL_PAGE_URL"];?>'><div class='avt_LIST_block'><img src='<?=$it_obj["PICTURE"];?>'><br><br><span class='avt_txt_object'><?=$it_obj["NAME"];?></span><br><span class='avt_lbl_firma'>Строитель: </span><span class='avt_txt_firma'><?=$it_obj["FIRMA"];?></span><br><?=$it_obj["SUM_STOIM"];?></div></a></div>";
                                    <?  $current_Obj++; ?>
                                 <?} else {?>
                                    inner = inner+"<div class='avt_grid_col_33_1'><a href='<?=$it_obj["DETAIL_PAGE_URL"];?>'><div class='avt_LIST_block'><img src='<?=$it_obj["PICTURE"];?>'><br><br><span class='avt_txt_object'><?=$it_obj["NAME"];?></span><br><span class='avt_lbl_firma'>Строитель: </span><span class='avt_txt_firma'><?=$it_obj["FIRMA"];?></span><br><?=$it_obj["SUM_STOIM"];?></div></a></div>";
                                    <?  $current_Obj++; ?>
                                 <?}?>
                                 <?if ($current_Obj>3){ ?>
                                    div.innerHTML = inner;
                                    inner = "";
                                    fragment.appendChild(div);
                                    element.appendChild(fragment);
                                    element.appendChild(br);
                                 <?}?>
                              <?}?>
                           <?}?>
                           <?if ($current_Obj>0 AND $current_Obj<=3){ ?>
                              div.innerHTML = inner;
                              inner = "";
                              fragment.appendChild(div);
                              element.appendChild(fragment);
                              element.appendChild(br);
                           <?}?>
                        }
                     <?}?>
                  }
               <?}?>
               $('.iknopka2').removeClass('active_but2');
               $('#btn_'+id_button).addClass('active_but2');
            }

            // начальное заполнение списка кнопок и объектов
            $(document).ready(function(){
               // начальное заполнение списка кнопок
               var element  = document.getElementById('bl-3');
               var fragment = document.createDocumentFragment();
               <?foreach($ar_button as $id_button => $it_button){?>
                  <?if ($id_button<>0){?>
                     var div = document.createElement('div');
                     div.setAttribute("class", "col-item_i21");
                     div.setAttribute("onclick", "click_button(0,<?=$id_button;?>);");
                     // div.setAttribute("style", "text-align: center;");
                     div.innerHTML = "";
                     inner = "<a class='iknopka2' id='btn_<?=$id_button;?>'><?=$it_button["BUTTON"];?></a><br>";
                     div.innerHTML = inner;
                     inner = "";
                     fragment.appendChild(div);
                     element.appendChild(fragment);
                  <?}?>

               <?}?>
               $('.iknopka_type').removeClass('active_but2-1');
               $('#type_0').addClass('active_but2-1');
               // начальное заполнение списка объектов
               var inner = "";
               <?$current_Obj = 0;?>
               <?foreach($ar_button[0]["OBJECTS"] as $key_obj => $it_obj){?>
                  <?if($it_obj["TYPE"] == 0){?>
                     <?if ($current_Obj == 0 OR $current_Obj>3){ ?>
                        <?  $current_Obj = 1;   ?>
                        var element  = document.getElementById('rows');
                        var fragment = document.createDocumentFragment();
                        var br = document.createElement('br');
                        br.innerHTML = "";
                        var div = document.createElement('div');
                        div.setAttribute("class", "row");
                        div.innerHTML = "";
                        inner = "";
                        inner = inner+"<div class='avt_grid_col_33_1'><a href='<?=$it_obj["DETAIL_PAGE_URL"];?>'><div class='avt_LIST_block'><img src='<?=$it_obj["PICTURE"];?>'><br><br><span class='avt_txt_object'><?=$it_obj["NAME"];?></span><br><span class='avt_lbl_firma'>Строитель: </span><span class='avt_txt_firma'><?=$it_obj["FIRMA"];?></span><br><?=$it_obj["SUM_STOIM"];?></div></a></div>";
                        <?  $current_Obj++; ?>
                     <?} else {?>
                        inner = inner+"<div class='avt_grid_col_33_1'><a href='<?=$it_obj["DETAIL_PAGE_URL"];?>'><div class='avt_LIST_block'><img src='<?=$it_obj["PICTURE"];?>'><br><br><span class='avt_txt_object'><?=$it_obj["NAME"];?></span><br><span class='avt_lbl_firma'>Строитель: </span><span class='avt_txt_firma'><?=$it_obj["FIRMA"];?></span><br><?=$it_obj["SUM_STOIM"];?></div></a></div>";
                        <?  $current_Obj++; ?>
                     <?}?>
                     <?if ($current_Obj>3){ ?>
                        div.innerHTML = inner;
                        inner = "";
                        fragment.appendChild(div);
                        element.appendChild(fragment);
                        element.appendChild(br);
                     <?}?>
                  <?}?>
               <?}?>
               <?if ($current_Obj>0 AND $current_Obj<=3){ ?>
                  div.innerHTML = inner;
                  inner = "";
                  fragment.appendChild(div);
                  element.appendChild(fragment);
                  element.appendChild(br);
               <?}?>

               $('.iknopka2').removeClass('active_but2');
            });
         </script>
      </div>
   </div>
   <br><br><br>
</section>


<section class="container-fluid bacgraundknop">
   <div class="inner avt_main_text conta">
      <p class="p-3" style="margin-bottom: 22px; font-size: 30px;color: #666;">Начните действовать</p>

      <div class="col-lg-4 col-md-4 col-sm-12 cb"><img src="/images_new/n1.png" alt=""> <span style="margin-left: 20px; color: #d44437;font-size: 22px;">Замер</span><p style="margin: 40px auto;font-size: 17px; color: #222;">У вас нет проекта - закажите замер</p>
         <?$APPLICATION->IncludeComponent(
            "api:formdesigner",
            "modalform",
            array(
               "CACHE_TIME" => "",
               "CACHE_TYPE" => "N",
               "COMPATIBLE_ON" => "N",
               "COMPONENT_TEMPLATE" => "modalform",
               "DATE" => date("d-m-Y"),
               "DATE_TIME" => date("d-m-Y H:i:s"),
               "DIR_URL" => $APPLICATION->GetCurDir(),
               "DIVIDER_FIELDS" => array(
               ),
               "ENABLED_FIELDS" => array(
               ),
               "FORM_HORIZONTAL" => "N",
               "FORM_TITLE" => "Заказать замер",
               "FORM_WIDTH" => "",
               "GA_ON" => "Y",
               "HIDE_FIELDS" => array("PAGE_URL"),
               "IBLOCK_ELEMENT_ACTIVE" => "N",
               "IBLOCK_ELEMENT_CODE" => "",
               "IBLOCK_ELEMENT_NAME" => "Обращение от #NAME#",
               "IBLOCK_ID" => "170",
               "IBLOCK_ON" => "Y",
               "IBLOCK_TICKET_CODE" => "#TICKET_ID#",
               "IBLOCK_TYPE" => "forms_api",
               "IP" => $_SERVER["REMOTE_ADDR"],
               "JQUERY_ON" => "Y",
               "JQUERY_VERSION" => "jquery",
               "MESS_CHECK_EMAIL" => "",
               "MESS_CHOOSE" => "(выбрать)",
               "MESS_PRIVACY" => "",
               "MESS_PRIVACY_CONFIRM" => "",
               "MESS_PRIVACY_LINK" => "",
               "MESS_REQUIRED_FIELD" => "Поле #FIELD# является обязательным",
               "MESS_SUCCESS" => "Ваш запрос отправлен.",
               "MESS_SUCCESS_DESC" => "Спасибо за Ваше обращение.",
               "MODAL_BTN_CLASS" => "button_green",
               "MODAL_BTN_ID" => "",
               "MODAL_BTN_SPAN_CLASS" => "",
               "MODAL_BTN_TEXT" => "ЗАКАЗАТЬ ЗАМЕР",
               "MODAL_FOOTER_TEXT" => "*Нажимая кнопку «Заказать замер», Вы подтверждаете свое согласие на обработку своих персональных данных в соответствии с <a style=\"font-size: 10px;\" href=\"/upload/raznoe/eb/Politika.pdf\" target=\"_blank\">Условиями</a>",
               "MODAL_HEADER_TEXT" => "",
               "MODAL_ID" => "#therd",
               "PAGE_TITLE" => $APPLICATION->GetTitle(),
               "PAGE_URL" => $APPLICATION->GetCurPage(),
               "PAGE_VARS" => array(
                  0 => "",
                  1 => "",
               ),
               "POST_ADMIN_MESSAGE_ID" => array(
                  0 => "125",
                  1 => "",
               ),
               "POST_ADMIN_SUBJECT" => "#SITE_NAME#: Сообщение из формы ЗАКАЗАТЬ ЗАМЕР",
               "POST_EMAIL_CODE" => "",
               "POST_EMAIL_FROM" => "",
               "POST_EMAIL_TO" => "builder@unikma.ru",
               "POST_MESS_STYLE_VALUE" => "",
               "POST_MESS_STYLE_WRAP" => "padding:10px;border-bottom:1px dashed #dadada;",
               "POST_MESS_STYLE_NAME" => "font-weight:bold;",
               "POST_ON" => "Y",
               "POST_REPLACE_FROM" => "N",
               "POST_USER_MESSAGE_ID" => array(
                  0 => "",
                  1 => "",
               ),
               "POST_USER_SUBJECT" => "",
               "REDIRECT_URL" => "",
               "SERVER_VARS" => array(
                  0 => "",
                  1 => "",
               ),
               "SHOW_ERRORS" => "Y",
               "SHOW_TITLE" => "Y",
               "SUBMIT_BUTTON_AJAX" => "Отправляется запрос...",
               "SUBMIT_BUTTON_CLASS" => "btn1",
               "SUBMIT_BUTTON_TEXT" => "Заказать замер",
               "TEMPLATE_BG_COLOR" => "",
               "TEMPLATE_COLOR" => "green1",
               "TEMPLATE_THEME" => "simple",
               "UNIQUE_FORM_ID" => "",
               "UPLOAD_FILE_LIMIT" => "5",
               "UPLOAD_FILE_SIZE" => "10M",
               "UPLOAD_FOLDER" => "/upload/api_formdesigner",
               "USER_CONSENT" => "N",
               "USE_BX_CAPTCHA" => "N",
               "USE_EULA" => "N",
               "USE_MODAL" => "Y",
               "USE_PRIVACY" => "N",
               "UTM_VARS" => array(
                  0 => "",
                  1 => "",
               ),
               "INPUTMASK_FIELD_PHONE" => "'mask': '+7(999) 999-9999'",
               "INPUTMASK_JS" => "Y",
               "INPUTMASK_ON" => "Y",
               "VALIDATE_MESS_PHONE" => "data-fv-regexp-message='Телефон введен неполностью'",
               "VALIDATE_ON" => "N",
               "VALIDATE_RULE_PHONE" => "pattern='^((8|+7)[- ]?)?((?d{3})?[- ]?)?[d- ]{7,10}\$'",
               "WYSIWYG_ON" => "N",
               "YAMETRIKA_COUNTER_ID" => "39057090",
               "YAMETRIKA_ON" => "Y",
               "YAMETRIKA_TARGET_NAME" => "UNI_Zamerit_Krovlyu",
               "YM2_ON" => "N",
               "INPUTMASK_FIELD_NAME" => "",
               "INPUTMASK_FIELD_TIME" => "",
               "INPUTMASK_FIELD_THEME" => "",
               "INPUTMASK_FIELD_COMMENT" => "",
               "GA_GTAG" => "ga('send','event','Knopka','uniCallbackOpen');"
            ),
            false
         );?>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 cb"><img src="/images_new/n2.png" alt=""> <span style="margin-left: 30px; color: #d44437;font-size: 22px;">Расчет</span><p style="margin: 40px auto;font-size: 17px; color: #222;">Рассчитайте кровлю по проекту или эскизу</p>
         <?$APPLICATION->IncludeComponent(
            "api:formdesigner", 
            "modalform", 
            array(
               "CACHE_TIME" => "",
               "CACHE_TYPE" => "N",
               "COMPATIBLE_ON" => "N",
               "COMPONENT_TEMPLATE" => "modalform",
               "DATE" => date("d-m-Y"),
               "DATE_TIME" => date("d-m-Y H:i:s"),
               "DIR_URL" => $APPLICATION->GetCurDir(),
               "DIVIDER_FIELDS" => array(
               ),
               "ENABLED_FIELDS" => array(
               ),
               "FORM_HORIZONTAL" => "N",
               "FORM_TITLE" => "Заявка на расчет",
               "FORM_WIDTH" => "",
               "GA_ON" => "N",
               "HIDE_FIELDS" => array(
                  0 => "PAGE_URL",
               ),
               "IBLOCK_ELEMENT_ACTIVE" => "N",
               "IBLOCK_ELEMENT_CODE" => "",
               "IBLOCK_ELEMENT_NAME" => "Запрос расчета от #RASCHET_NAME#",
               "IBLOCK_ID" => "47",
               "IBLOCK_ON" => "Y",
               "IBLOCK_TICKET_CODE" => "#TICKET_ID#",
               "IBLOCK_TYPE" => "forms_api",
               "IP" => $_SERVER["REMOTE_ADDR"],
               "JQUERY_ON" => "Y",
               "JQUERY_VERSION" => "jquery",
               "MESS_CHECK_EMAIL" => "Указанный email некорректен",
               "MESS_CHOOSE" => "(выбрать)",
               "MESS_PRIVACY" => "",
               "MESS_PRIVACY_CONFIRM" => "",
               "MESS_PRIVACY_LINK" => "",
               "MESS_REQUIRED_FIELD" => "Поле #FIELD# является обязательным",
               "MESS_SUCCESS" => "Ваш запрос отправлен.",
               "MESS_SUCCESS_DESC" => "Спасибо за Ваше обращение.",
               "MODAL_BTN_CLASS" => "button_green",
               "MODAL_BTN_ID" => "",
               "MODAL_BTN_SPAN_CLASS" => "",
               "MODAL_BTN_TEXT" => "ОТПРАВИТЬ ПРОЕКТ",
               "MODAL_FOOTER_TEXT" => "*Нажимая кнопку «Заявка на расчет», Вы подтверждаете свое согласие на обработку своих персональных данных в соответствии с <a style=\"font-size: 10px;\" href=\"/upload/raznoe/eb/Politika.pdf\">Условиями</a>",
               "MODAL_HEADER_TEXT" => "",
               "MODAL_ID" => "#forth",
               "PAGE_TITLE" => $APPLICATION->GetTitle(),
               "PAGE_URL" => $APPLICATION->GetCurPage(),
               "PAGE_VARS" => array(
                  0 => "",
                  1 => "",
               ),
               "POST_ADMIN_MESSAGE_ID" => array(
                  0 => "125",
                  1 => "",
               ),
               "POST_ADMIN_SUBJECT" => "#SITE_NAME#: Сообщение из формы Запрос расчета",
               "POST_EMAIL_CODE" => "RASCHET_EMAIL",
               "POST_EMAIL_FROM" => "",
               "POST_EMAIL_TO" => "builder@unikma.ru",
               "POST_MESS_STYLE_VALUE" => "",
               "POST_MESS_STYLE_WRAP" => "padding:10px;border-bottom:1px dashed #dadada;",
               "POST_MESS_STYLE_NAME" => "font-weight:bold;",
               "POST_ON" => "Y",
               "POST_REPLACE_FROM" => "N",
               "POST_USER_MESSAGE_ID" => array(
                  0 => "159",
                  1 => "",
               ),
               "POST_USER_SUBJECT" => "",
               "REDIRECT_URL" => "",
               "SERVER_VARS" => array(
                  0 => "",
                  1 => "",
               ),
               "SHOW_ERRORS" => "Y",
               "SHOW_TITLE" => "Y",
               "SUBMIT_BUTTON_AJAX" => "Отправляется запрос...",
               "SUBMIT_BUTTON_CLASS" => "btn1",
               "SUBMIT_BUTTON_TEXT" => "Заявка на расчет",
               "TEMPLATE_BG_COLOR" => "",
               "TEMPLATE_COLOR" => "green1",
               "TEMPLATE_THEME" => "simple",
               "UNIQUE_FORM_ID" => "",
               "UPLOAD_FILE_LIMIT" => "5",
               "UPLOAD_FILE_SIZE" => "10M",
               "UPLOAD_FOLDER" => "/upload/api_formdesigner",
               "USER_CONSENT" => "N",
               "USE_BX_CAPTCHA" => "N",
               "USE_EULA" => "N",
               "USE_MODAL" => "Y",
               "USE_PRIVACY" => "N",
               "UTM_VARS" => array(
                  0 => "",
                  1 => "",
               ),
               "WYSIWYG_ON" => "N",
               "YAMETRIKA_COUNTER_ID" => "39057090",
               "YAMETRIKA_ON" => "Y",
               "YAMETRIKA_TARGET_NAME" => "UNI_Raschet_krovli_pod_kluch",
               "YM2_ON" => "N",
               "INPUTMASK_FIELD_RASCHET_EMAIL" => "'alias':'email'",
               "INPUTMASK_FIELD_RASCHET_TEL" => "'mask': '+7(999) 999-9999'",
               "INPUTMASK_JS" => "Y",
               "INPUTMASK_ON" => "Y",
               "VALIDATE_RULE_RASCHET_EMAIL" => "data-fv-emailaddress='true'",
               "VALIDATE_MESS_RASCHET_EMAIL" => "data-fv-emailaddress-message='Указанный e-mail некорректен'",
               "VALIDATE_RULE_RASCHET_TEL" => "pattern='^((8|+7)[- ]?)?((?d{3})?[- ]?)?[d- ]{7,10}\$'",
               "VALIDATE_MESS_RASCHET_TEL" => "data-fv-regexp-message='Телефон введен неполностью'",
               "VALIDATE_ON" => "N",
               "VALIDATE_RULE_RASCHET_NAME" => "data-fv-notempty='true'",
               "VALIDATE_MESS_RASCHET_NAME" => "data-fv-notempty-message='Поле обязательно'",
               "INPUTMASK_FIELD_RASCHET_NAME" => "",
               "INPUTMASK_FIELD_RASCHET_CHTO" => ""
            ),
            false
         );?>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 cb"><img src="/images_new/n3.png" alt=""> <span style="margin-left: 24px; color: #d44437;font-size: 22px;">Смета</span><p style="margin: 40px auto;font-size: 17px; color: #222;">Составьте смету на материалы и на работы</p> 
         <?$APPLICATION->IncludeComponent(
            "api:formdesigner",
            "modalform",
            array(
               "CACHE_TIME" => "",
               "CACHE_TYPE" => "N",
               "COMPATIBLE_ON" => "N",
               "COMPONENT_TEMPLATE" => "modalform",
               "DATE" => date("d-m-Y"),
               "DATE_TIME" => date("d-m-Y H:i:s"),
               "DIR_URL" => $APPLICATION->GetCurDir(),
               "DIVIDER_FIELDS" => array(
               ),
               "ENABLED_FIELDS" => array(
               ),
               "FORM_HORIZONTAL" => "N",
               "FORM_TITLE" => "Заказать смету",
               "FORM_WIDTH" => "",
               "GA_ON" => "Y",
               "HIDE_FIELDS" => array("PAGE_URL"),
               "IBLOCK_ELEMENT_ACTIVE" => "N",
               "IBLOCK_ELEMENT_CODE" => "",
               "IBLOCK_ELEMENT_NAME" => "Обращение от #NAME#",
               "IBLOCK_ID" => "170",
               "IBLOCK_ON" => "Y",
               "IBLOCK_TICKET_CODE" => "#TICKET_ID#",
               "IBLOCK_TYPE" => "forms_api",
               "IP" => $_SERVER["REMOTE_ADDR"],
               "JQUERY_ON" => "Y",
               "JQUERY_VERSION" => "jquery",
               "MESS_CHECK_EMAIL" => "",
               "MESS_CHOOSE" => "(выбрать)",
               "MESS_PRIVACY" => "",
               "MESS_PRIVACY_CONFIRM" => "",
               "MESS_PRIVACY_LINK" => "",
               "MESS_REQUIRED_FIELD" => "Поле #FIELD# является обязательным",
               "MESS_SUCCESS" => "Ваш запрос отправлен.",
               "MESS_SUCCESS_DESC" => "Спасибо за Ваше обращение.",
               "MODAL_BTN_CLASS" => "button_green",
               "MODAL_BTN_ID" => "",
               "MODAL_BTN_SPAN_CLASS" => "",
               "MODAL_BTN_TEXT" => "Получить смету",
               "MODAL_FOOTER_TEXT" => "*Нажимая кнопку «Заказать звонок», Вы подтверждаете свое согласие на обработку своих персональных данных в соответствии с <a style=\"font-size: 10px;\" href=\"/upload/raznoe/eb/Politika.pdf\" target=\"_blank\">Условиями</a>",
               "MODAL_HEADER_TEXT" => "",
               "MODAL_ID" => "#fifth",
               "PAGE_TITLE" => $APPLICATION->GetTitle(),
               "PAGE_URL" => $APPLICATION->GetCurPage(),
               "PAGE_VARS" => array(
                  0 => "",
                  1 => "",
               ),
               "POST_ADMIN_MESSAGE_ID" => array(
                  0 => "125",
                  1 => "",
               ),
               "POST_ADMIN_SUBJECT" => "#SITE_NAME#: Сообщение из формы Заказать смету",
               "POST_EMAIL_CODE" => "",
               "POST_EMAIL_FROM" => "",
               "POST_EMAIL_TO" => "builder@unikma.ru",
               "POST_MESS_STYLE_VALUE" => "",
               "POST_MESS_STYLE_WRAP" => "padding:10px;border-bottom:1px dashed #dadada;",
               "POST_MESS_STYLE_NAME" => "font-weight:bold;",
               "POST_ON" => "Y",
               "POST_REPLACE_FROM" => "N",
               "POST_USER_MESSAGE_ID" => array(
                  0 => "",
                  1 => "",
               ),
               "POST_USER_SUBJECT" => "",
               "REDIRECT_URL" => "",
               "SERVER_VARS" => array(
                  0 => "",
                  1 => "",
               ),
               "SHOW_ERRORS" => "Y",
               "SHOW_TITLE" => "Y",
               "SUBMIT_BUTTON_AJAX" => "Отправляется запрос...",
               "SUBMIT_BUTTON_CLASS" => "btn1",
               "SUBMIT_BUTTON_TEXT" => "Заказать смету",
               "TEMPLATE_BG_COLOR" => "",
               "TEMPLATE_COLOR" => "green1",
               "TEMPLATE_THEME" => "simple",
               "UNIQUE_FORM_ID" => "",
               "UPLOAD_FILE_LIMIT" => "5",
               "UPLOAD_FILE_SIZE" => "10M",
               "UPLOAD_FOLDER" => "/upload/api_formdesigner",
               "USER_CONSENT" => "N",
               "USE_BX_CAPTCHA" => "N",
               "USE_EULA" => "N",
               "USE_MODAL" => "Y",
               "USE_PRIVACY" => "N",
               "UTM_VARS" => array(
                  0 => "",
                  1 => "",
               ),
               "INPUTMASK_FIELD_PHONE" => "'mask': '+7(999) 999-9999'",
               "INPUTMASK_JS" => "Y",
               "INPUTMASK_ON" => "Y",
               "VALIDATE_MESS_PHONE" => "data-fv-regexp-message='Телефон введен неполностью'",
               "VALIDATE_ON" => "N",
               "VALIDATE_RULE_PHONE" => "pattern='^((8|+7)[- ]?)?((?d{3})?[- ]?)?[d- ]{7,10}\$'",
               "WYSIWYG_ON" => "N",
               "YAMETRIKA_COUNTER_ID" => "39057090",
               "YAMETRIKA_ON" => "Y",
               "YAMETRIKA_TARGET_NAME" => "UNI_Smeta_Po_Planu_Krovli",
               "YM2_ON" => "N",
               "INPUTMASK_FIELD_NAME" => "",
               "INPUTMASK_FIELD_TIME" => "",
               "INPUTMASK_FIELD_THEME" => "",
               "INPUTMASK_FIELD_COMMENT" => "",
               "GA_GTAG" => "ga('send','event','Knopka','uniCallbackOpen');"
            ),
            false
         );?>
      </div>
   </div>
</section>

<section>
   <div style="clear: both;"></div>
   <br><br>
   <script>
      function setEqualHeight(columns) {
         var tallestcolumn = 0;
         columns.each(
         function()
         {
         currentHeight = $(this).height();
         if(currentHeight > tallestcolumn)
         {
         tallestcolumn = currentHeight;
         }
         }
         );
         columns.height(tallestcolumn);
         }
         $(document).ready(function() {
         setEqualHeight($(".conta > div p"));
      }); 
   </script>
   <div class="inner avt_main_text">

      <h3> Что делать если нет свободных проверенных бригад? </h3>
      <img src="/upload/raznoe/news/stat/line.png"><br>

      Спрос на строительство имеет ярко выраженную сезонность. 
      С июня по сентябрь включительно хорошие строители всегда заняты, ВСЕГДА. 
      Ожидание выхода на объект 3-6 недель для лета это норма.<br>

      В таких ситуациях, не все заказчики соглашаются ждать и берут себе на кровлю непроверенных строителей с досок объявлений в интернете, которые заверяют, 
      что 20 лет строят и никто не жалуется. 
      Результат часто бывает плачевный. 
      Нам известны случаи, когда кровлю переделывали ТРИ раза и только на четвертый обратились к нам и получили качественную реконструкцию под ключ, 
      прекратив свои страдания под протекающей крышей.<br><br>
      Так вот, ответ на вопрос в заголовке: однозначно ЖДАТЬ проверенную бригаду, строить по договору с письменной гарантией. <br>
      Берегите свои деньги, время и нервы.<br><br>


      <?$GLOBALS["XML_ID_GALLERY"]="3215847";?>
      <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_TEMPLATE_PATH."/gallery/gallery.php"), false);?>

   </div><br><br>

   <div style="background-color: #d44437;">

      <div class="visdesk">
         <div class="inner avt_main_text">
            <br>
            <h3>Наша команда. Кровельный отдел</h3>
            <img src="/upload/raznoe/news/stat/line.png"><br>
         </div>
         <br><br><br>

         <div style="width: 90%; margin: auto;">
            <div style="display: flex;justify-content: space-around; ">
          
               <div class="flex-x">
                  <div class="circle"><img src="/upload/raznoe/verstka/markulin-krg.jpg"></div>
                  <div style="position: relative;
                     top: -19px;">
                     <span style="font-size: 18px;">Николай Маракулин</span><br><br>
                     <i style="color: #339933" class="fas fa-mobile-alt"></i><a style="font-size: 16px;" href="tel://8 (800) 333-0094"> 8 (800) 333-0094</a><br><span style="color:#3aaa38;">доб. 1761</span><br>
                     <span class="call_phone_2">
                     <i style="color: #339933" style="color: #339933" class="far fa-envelope"></i><a style="color:#3aaa38;" href="mailto:marakulin@unikma.ru"> marakulin@unikma.ru</a></span>
                     <hr>
                     <div style="margin: 5px auto; text-align: center;font-weight: bold;" onclick="window.open('https://unikma.ru/contacts/filialy/sever/')">
                        <i style="    color: red;    font-size: x-large;" class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Север
                     </div>
                  </div>
               </div>

               <div class="flex-x">
                  <div class="circle"><img src="/upload/raznoe/verstka/baranov-krg.jpg"></div>
                  <div style="position: relative;
                     top: -19px;">
                     <span style="font-size: 18px;" >Александр Баранов</span><br><br>
                     <i style="color: #339933" class="fas fa-mobile-alt"></i><a style="font-size: 16px;" href="tel://8 (800) 333-0094"> 8 (800) 333-0094</a><br><span style="color:#3aaa38;">доб. 1788</span><br>
                     <span class="call_phone_2">
                     <i style="color: #339933" class="far fa-envelope"></i><a style="color:#3aaa38;" href="mailto:baranov_al@unikma.ru "> baranov_al@unikma.ru </a></span>
                     <hr>
                     <div style="margin: 5px auto; text-align: center;font-weight: bold;" onclick="window.open('https://unikma.ru/contacts/filialy/zapad/')">
                        <i style="    color: red;    font-size: x-large;" class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Запад
                     </div>
                  </div>
               </div>
			      <div class="flex-x">
                  <div class="circle"><img src="/upload/raznoe/verstka/pronina-krg.jpg"></div>
                  <div style="position: relative; top: -19px;">
                     <span style="font-size: 18px;">Александра Пронина</span><br><br>
                     <i style="color: #339933" class="fas fa-mobile-alt"></i><a style="font-size: 16px;" href="tel://8 (800) 333-0094"> 8 (800) 333-0094</a><br><span style="color:#3aaa38;">доб. 3627</span><br>
                     <span class="call_phone_2">
                     <i style="color: #339933" class="far fa-envelope"></i><a style="color:#3aaa38;" href="mailto:pronina@unikma.ru"> pronina@unikma.ru </a></span>
                     <hr>
                     <div style="margin: 5px auto; text-align: center;font-weight: bold;" onclick="window.open('https://unikma.ru/contacts/filialy/zapad/')">
                        <i style="    color: red;    font-size: x-large;" class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Запад
                     </div>
                  </div>
               </div>
            </div>
            <br><br>
            <br><br>
            <br><br>
         </div>
      </div>

      <div class="vismob">
         <div class="inner avt_main_text">
            <br>
            <h3>Наша команда. Кровельный отдел</h3>
            <img src="/upload/raznoe/news/stat/line.png"><br>
         </div>
         <br><br><br>

         <div style="width: 90%;margin: auto;">
            <div class="container-fluid last padding-none">
               <div class="container" style="padding-left: 1px;">

                  <div class="responsive-slider-6">
                     <div class="flex-x" style="text-align: center;">
                        <div class="circle"><img src="/upload/raznoe/verstka/baranov-krg.jpg"></div>
                        <div style="position: relative;top: -19px;">
                           <span style="font-size: 18px;">Александр Баранов</span><br><br>
                           <i style="color: #339933" class="fas fa-mobile-alt"></i><a style="font-size: 16px;" href="tel://8 (800) 333-0094"> 8 (800) 333-0094</a><br><span style="color:#3aaa38;">доб. 1788</span><br>
                           <span class="call_phone_2">
                           <i style="color: #339933" class="far fa-envelope"></i><a style="color:#3aaa38;" href="mailto:baranov_al@unikma.ru "> baranov_al@unikma.ru </a></span>
                           <hr>
                           <div style="margin: 5px auto; text-align: center;font-weight: bold;" onclick="window.open('https://unikma.ru/contacts/filialy/zapad/')">
                           <i style="    color: red;    font-size: x-large;" class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Запад
                        </div>
                     </div>
                  </div>
            
                  <div class="flex-x" style="text-align: center;">
                     <div class="circle"><img src="/upload/raznoe/verstka/markulin-krg.jpg"></div>
                     <div style="position: relative;top: -19px;">
                        <span style="font-size: 18px;">Николай Маракулин</span><br><br>
                        <i style="color: #339933" class="fas fa-mobile-alt"></i><a style="font-size: 16px;" href="tel://8 (800) 333-0094"> 8 (800) 333-0094</a><br><span style="color:#3aaa38;">доб. 1761</span><br>
                        <span class="call_phone_2">
                        <i style="color: #339933" style="color: #339933" class="far fa-envelope"></i><a style="color:#3aaa38;" href="mailto:marakulin@unikma.ru"> marakulin@unikma.ru</a></span>
                        <hr>
                        <div style="margin: 5px auto; text-align: center;font-weight: bold;" onclick="window.open('https://unikma.ru/contacts/filialy/sever/')">
                           <i style="    color: red;    font-size: x-large;" class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Север
                        </div>
                     </div>
                  </div>

			         <div class="flex-x" style="text-align: center;">
                     <div class="circle"><img src="/upload/raznoe/verstka/pronina-krg.jpg"></div>
                     <div style="position: relative;top: -19px;">
                        <span style="font-size: 18px;">Александра Пронина</span><br><br>
                        <i style="color: #339933" class="fas fa-mobile-alt"></i><a style="font-size: 16px;" href="tel://8 (800) 333-0094"> 8 (800) 333-0094</a><br><span style="color:#3aaa38;">доб. 3627</span><br>
                        <span class="call_phone_2">
                        <i style="color: #339933" class="far fa-envelope"></i><a style="color:#3aaa38;" href="mailto:pronina@unikma.ru"> pronina@unikma.ru </a></span>
                        <hr>
                        <div style="margin: 5px auto; text-align: center;font-weight: bold;" onclick="window.open('https://unikma.ru/contacts/filialy/zapad/')">
                           <i style="    color: red;    font-size: x-large;" class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Запад
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <br><br>

         <style>
            .slick-list{
               overflow: visible;
            }
            @media(min-width: 320px) and (max-width: 812px) {
               .frame{margin: 0; width: 100%; float: none;}
               .tile_tab_click{font-size: 12px; padding: 8px 6px;margin-right: 3px;    border: solid 1px #ccc;margin-top: 1px;}
               .tile_tab{ border-top: none;}
               .avt_text_200pr{font-size: 100%}
               .image_section{margin: 0; width: 100%; float: none;}
               .kol1{width: 100%;}
               .slick-dots{display: block !important;}
               .bor{border: none;}
               .bor1{border-top: solid 1px #ddd; margin-top: -19px;}
               .bor2{margin-top: 30px;}
               .bor3{border: none;}
               .bor6{padding: 0;}
               .un1{margin: 0;}
               .uf1{margin: 0;}
               .uf2{margin: 0;}
               /*   .iknopka2{height: auto;    margin: 10px auto;width: 100%;*/
            }

            .bor{padding: 0;}
            .iopisanie_left{width: 64%; font-size: 120%;}
            .blr1{width: 100%;}
            .blr2{
               width: 100%;    border-top: solid 1px #eee;
               margin-top: -27px;position: unset;
            }
            .brt{
               border-top: solid 1px #eee;
               margin-top: 20px;
            }
         </style>
      </div>
   </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>