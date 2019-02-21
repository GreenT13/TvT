<?php
class Head
{
public function InputHeader($title, $extra = "", $meta = "")
{
echo ('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" ><html xmlns:og="http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" lang="nl"><head><title>');
echo ($title);
echo ("</title>");
echo ('<meta property="og:locale" content="nl_NL"/>
<meta property="og:title" content="Talent voor Taal"/>
<meta property="og:description" content="Website van het bedrijf Talent voor Taal van Corintha Apon."/>
<meta property="og:url" content="http://www.talentvoortaal.nl/"/>
<meta property="og:site_name" content="Talent voor Taal"/>
<meta property="og:type" content="website"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="UTF-8">
<link rel="icon" href="http://www.talentvoortaal.nl/favicon.ico" />
<script type="text/javascript">
if (screen.width <= 699) {
document.location = "http://www.talentvoortaal.nl/M/index.php";
}
</script>
');


echo ('<meta name="description" content="Talent voor Taal verzorgt in de omgeving Den Haag trainingen op het gebied van de Nederlandse taal en inburgering. Groepsles en priv�les. Bij alle trainingen staat het');
echo ("'leren door te doen'");
echo (' centraal." /><meta name="keywords" content="Nederlandse taaltraining, inburgering, inburgeren, NT2, nt2, privéles, priveles, voorburg, den haag, groepsles, coaching, porftfolio, staatsexamen, schrijfvaardigheid, spelling, examentraining, skype" />
<meta name="author" content="Corintha Apon en Rico Apon" />');
echo ('<link href="StyleSheet.css" rel="stylesheet" type="text/css">');
echo ($extra);
echo ('</head>');
}
}
?>
