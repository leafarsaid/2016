<?
header("Content-type: text/xml; charset=utf-8",true);
header("Cache-Control: no-cache, must-revalidate",true);
header("Pragma: no-cache",true);

function timetosec4($time){
	$str_time = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $time);
	sscanf($str_time, "%d:%d:%d", $hours, $minutes, $seconds);
	$time_seconds = $hours * 3600 + $minutes * 60 + $seconds;
	return $time_seconds;
}

function posicoes_coluna($lista, $coluna){
	$array_coluna = array();
	$array_posicoes = array();

	for($f=0; $f < sizeof($lista); $f++){
	
		$tempo = timetosec4($lista[$f][$coluna]);
		if($tempo != "03:46:39.00" && $tempo != "* * *"){
			$array_coluna[] = $tempo;
		}
	}
	
	asort($array_coluna);
	
	foreach($array_coluna as $key => $val){
		$array_posicoes[] = $key+1;
	}
	
	return $array_posicoes;
}

//var_dump(posicoes_coluna($lista,13));

require_once"util/objDB.php";
require_once"util/gerador_linhas.php";
require_once"util/sql.php";
require_once"util/especiais.php";
require_once"util/geraDados.php";

//
$int_id_ss=(int)$_REQUEST["trecho"]; 
$int_id_cat= ($_REQUEST["subcategoria"]) ? (int)$_REQUEST["subcategoria"] : (int)$_REQUEST["categoria"];
$int_id_mod=(int)$_REQUEST["modalidade"];
$mod = $_REQUEST["mod"];
$strFIM = ($_REQUEST["db"] == 2) ? $_REQUEST["campeonato"] : "";
///

$array_ss = criaArray(geraSqlSS2($int_id_ss, $int_id_cat, $int_id_mod, $mod, $strFIM));
$lista = geraDadosSS($array_ss, $_REQUEST["fim"]);

$posicoes_i1 = posicoes_coluna($lista,13);
$posicoes_i2 = posicoes_coluna($lista,14);
$posicoes_i3 = posicoes_coluna($lista,15);
$posicoes_i4 = posicoes_coluna($lista,16);

for($f=0; $f < sizeof($lista); $f++){
	$lista[$f][13] = ($lista[$f][13] == "03:46:39.00" || $lista[$f][13] == "* * *") ? "* * *" : $lista[$f][13]."&lt;br /&gt;(".$posicoes_i1[$f].")";
	$lista[$f][14] = ($lista[$f][14] == "03:46:39.00" || $lista[$f][14] == "* * *") ? "* * *" : $lista[$f][14]."&lt;br /&gt;(".$posicoes_i2[$f].")";
	$lista[$f][15] = ($lista[$f][15] == "03:46:39.00" || $lista[$f][15] == "* * *") ? "* * *" : $lista[$f][15]."&lt;br /&gt;(".$posicoes_i3[$f].")";
	$lista[$f][16] = ($lista[$f][16] == "03:46:39.00" || $lista[$f][16] == "* * *") ? "* * *" : $lista[$f][16]."&lt;br /&gt;(".$posicoes_i4[$f].")";
}

printf("<?xml version=\"1.0\" encoding=\"utf-8\"?>\n\r");
$texto = sprintf("<especial dia=\"%s\">\n\r",$int_id_ss);

// campos do cabecalho
$campos_header_ss = array();
array_push($campos_header_ss,"pos");
array_push($campos_header_ss,"numeral");
array_push($campos_header_ss,"tripulacao");
array_push($campos_header_ss,"modelo");
array_push($campos_header_ss,"licenca");
array_push($campos_header_ss,"equipe");
array_push($campos_header_ss,"categoria");
array_push($campos_header_ss,"L");
array_push($campos_header_ss,"I1");
array_push($campos_header_ss,"I2");
array_push($campos_header_ss,"I3");
array_push($campos_header_ss,"I4");
array_push($campos_header_ss,"C");
array_push($campos_header_ss,"tempo1");
array_push($campos_header_ss,"tempo2");
array_push($campos_header_ss,"tempo3");
array_push($campos_header_ss,"tempo4");
array_push($campos_header_ss,"tempo");
array_push($campos_header_ss,"penalidade");
array_push($campos_header_ss,"bonus");
array_push($campos_header_ss,"total");
array_push($campos_header_ss,"diferenca_lider");
array_push($campos_header_ss,"diferenca_anterior");
array_push($campos_header_ss,"diferenca_lider_bruto");
array_push($campos_header_ss,"vel_media");

$texto .= geraLinhaXml ("veiculo", $lista, $campos_header_ss);
$texto .= sprintf("</especial>\n\r");
$texto = str_replace("\" \"","\"\"",$texto);
$texto = str_replace(" \"","\"",$texto);

echo $texto;
?>

