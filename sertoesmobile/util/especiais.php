<?

$str = "SELECT c02_codigo, c02_nome FROM t02_trecho WHERE c02_status='I' AND c02_aparece_no_relatorio=1";

if ($_REQUEST['trecho'] > 0) {
    $str .= " AND c02_codigo <= ".$_REQUEST['trecho'];
}

if (isset($_REQUEST['trechos'])) {
	$str .= " AND c02_codigo IN (".$_REQUEST['trechos'].")";
}

$arr = criaArray($str);

foreach ($arr AS $item){
	$arr_ss[] = $item['c02_codigo'];
	$arr_especiais[] = $item['c02_nome'];
}

?>
