<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?

$trecho = $_GET["trecho"];

if (!$trecho) $trecho = 1;



function sel($text, $event, $nom) {



global $trecho;

$sel = "<form name=\"sel".$nom."\" method=\"get\"> ";

$sel .= " <select name=\"trecho\" id=\"trecho\" onchange=\"form.submit();\"> ";

//$sel .= " <select name=\"trecho\" id=\"trecho\" onchange=\"document.sel".$nom.".submit();\"> ";



//$sel = $text." <select name=\"trecho\" id=\"trecho\" onchange=\"document.location('".$event."+this.value');\"> ";



for ($i=1;$i<=3;$i++) {

     if ($i==$trecho) $txt = " selected";

     else $txt = "";

	

	  	if ($i==1)  $sel .= "<option value=\"".$i."\" ".$txt.">SS".$i."</option>";

		if ($i==3)	$sel .= "<option value=\"3\" ".$txt.">SS2</option>";

}

$sel .= "</select> ".$text;

//$sel .= "<input type='hidden' name='campeonato' value='".$value."'> ";

$sel .= "</form> ";



return $sel;

}







?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title></title>

<style type="text/css">

<!--

body {

	background-image: url(imagens/fundo.jpg);

	background-repeat: no-repeat;

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

	background-position: center top;

}

a {

	color: #CC9900;

	text-decoration: none;

}

a:hover {

	color: #FFFFFF;

	text-decoration: underline;

}

.style2 {

	color: #CC9900;

	font-family: Arial, Helvetica, sans-serif;

}

.style4 {

        color: #CC9900;

        font-family: Arial, Helvetica, sans-serif;

        font-weight: bold;

        font-size: 18px;

}

.style6 {color: #CC9900; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 14px; }

.auto-style1 {
	text-align: center;
}
.auto-style2 {
	text-align: center;
	background-color: #CC9900;
}

.auto-style3 {
	color: #CC9900;
	font-family: Arial, Helvetica, sans-serif;
	text-align: center;
}

.auto-style5 {
	text-align: center;
	color: #CC9900;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: large;
}
.auto-style6 {
	border-width: 0px;
}

.auto-style7 {
	font-size: x-large;
}

-->

</style>

</head>



<body marginheight="0" marginwidth="0" leftmargin="0" rightmargin="0" topmargin="0" bgcolor="#000000">

<p align="right"><br />

</p>

<p align="center">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img alt="" src="imagens/CBR2016-2-Estacao.jpg" width="400" /><br>

</p>

<table border="0" align="center" cellpadding="0" cellspacing="0" style="width: 717px">

  <tr>

    <td valign="bottom" class="auto-style3" style="width: 592px">CBR 2016 - 2ª etapa - Estação/RS</td>

    <td valign="bottom" class="style2" style="width: 148px">&nbsp;</td>

    <td valign="bottom" class="auto-style3" style="width: 336px">Resultados Extra-Oficiais</td>

    <td align="right" valign="bottom" class="style2" style="width: 19px">&nbsp;</td>
  </tr>

  <tr bgcolor="#CC9900">

    <td height="3" colspan="4"></td>
  </tr>

  
tr>
    <tr>
  <td style="height: 28px; width: 592px;" class="auto-style5">
    <a href="geral.php"><span class="auto-style7">Resultados Gerais</span></a><br />
	<span class="style6"><a href="geral.php?categoria=2">RC2N</a></span><br />
	<span class="style6"><a href="geral.php?categoria=3">RC3</a></span><br />
	<span class="style6"><a href="geral.php?categoria=4">RC4</a></span><br />
	<span class="style6"><a href="geral.php?categoria=5">RC5</a></span><br />
	<span class="style6"><a href="geral.php?categoria=6">RCR</a></span><br />
	<br />
&nbsp;<a href="geral.php?campeonato=B">CBR</a><br />
	<br />
	<a href=" ">Gaúcho</a><br />
	<a href="geral.php?trecho=6&campeonato=G">         Etapa 1        </a>
	<a href="geral.php?trechos=7,8,9,10&campeonato=G">Etapa 2</a></td>
  <td style="height: 28px; width: 148px;">
	</td>
  <td style="height: 28px; width: 60px;" class="auto-style5">

    Resultados por SS<br />
	<br />
          
		  <span class="style6"><a href="ss_geral.php?trecho=1">SS 1</a></span><br />
		  <span class="style6"><a href="ss_geral.php?trecho=2">SS 2</a></span><br />
          <span class="style6"><a href="ss_geral.php?trecho=3">SS 3</a><br />
		  <a href="ss_geral.php?trecho=4">SS 4</a><br />
          <a href="ss_geral.php?trecho=5">SS 5</a><br />
          <a href="ss_geral.php?trecho=6">SS 6</a><br />
          <a href="ss_geral.php?trecho=7">SS 7</a><br />
          <a href="ss_geral.php?trecho=8">SS 8</a><br />
		  <a href="ss_geral.php?trecho=9">SS 9</a><br />
		  <a href="ss_geral.php?trecho=10">SS 10</a><br />
	<br />
			<a href="resultados/largada1.pdf">Ordem de Largada</a> - 1</span><br />
	<br />
          <span class="style6"><a href="resultados/largada2.pdf">Ordem de Largada</a> 
	- 2</span><br />
		</td>
		
  <td valign="top" style="height: 28px; width: 19px;">

	</tr>
    <td style="height: 50px; width: 50px;">
    <p class="auto-style1">        
	&nbsp;<p class="auto-style1">        
		<span class="style6"> 
		<span class="style6">&nbsp;</span></p>
	</td>
  <td style="height: 103px; width: 10px;">
    &nbsp;</td>
  <td valign="top" style="height: 103px; width: 336px;" class="auto-style1">

        <br />
          
		  <span class="style6"><br />
	<br />
	</td>
		
  <td valign="top" style="height: 103px; width: 19px;">
    <p>&nbsp;</p>
    <p>&nbsp;</p>        </td>
  
  
  
         

<tr>

  <td valign="top" class="auto-style2" style="height: 6px; width: 592px;"></td>

  <td valign="top" style="width: 148px; height: 6px;"></td>

  <td valign="top" class="auto-style2" style="height: 6px; width: 336px;"></td>

  <td valign="top" style="height: 6px; width: 19px;"></td>
</tr>





<tr>

 

  <td valign="top" style="width: 592px">&nbsp;</td>

  <td valign="top" class="auto-style1" style="width: 148px">
  <span class="style6">Supervisão&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><br />
  <a href="http://www.cba.org.br"><img alt="" height="39" src="imagens/cba.jpg" width="58" class="auto-style6" />
  <br />
  Apuração / Cronometragem<br />
  <img alt="" height="59" src="imagens/logo-site.png" width="165" /></span></td>

  <td valign="top" style="width: 19px">&nbsp;</td>
</tr>

  <tr bgcolor="#CC9900">

    <td height="3" colspan="4"></td>
  </tr>
</table>

</p>

</body>

</html>

