<?
	// **********************************************************************
	// Begin of CORS things
	// ----------------------------------------------------------------------
	
	header('Access-Control-Allow-Origin: http://localhost:8753');// *
	header('Access-Control-Allow-Methods: POST');//, OPTIONS, PUT, DELETE  GET, 
	header('Access-Control-Allow-Headers: Content-Type');//,Accept,Cookie,Origin  X-Requested-With,

	if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
		header('HTTP/1.1 204 No Content');
		die;
	}
	

	// ----------------------------------------------------------------------
	// End of CORS things
	// **********************************************************************

	$PATH_DATA = "/home/p/pozdnyz8/unikma.ru/data_to_json/price_list/roofing_works/";

	// подключение настроек для отбора данных и для вывода информации на страницу
	require($PATH_DATA."data_all.php"); 
	require($PATH_DATA."data_mh.php");
	require($PATH_DATA."data_gh.php");
	require($PATH_DATA."data_komp.php");
	require($PATH_DATA."data_cph.php");
	require($PATH_DATA."data_keram.php");
	require($PATH_DATA."data_reconstruction.php");

	unset($arResult);
    $arResult = Array();

    $arResult["smeta"] = $arSmeta;
    $arResult["material"] = $arMaterial;
	$arResult["mainMaterial"] = $arMainMaterial;
    $arResult["level"] = $arLevel;
    $arResult["group"] = $arGroup;
	$arResult["reconstruction"] = $arReconstruction;
	
    $arResult["section"] = $arParent;
	
	echo json_encode($arResult);
?>