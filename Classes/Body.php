<?php
class Body {
public function CreateBody($inhoud, $NIL = 0) {
echo ('<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nl_NL/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document,');
echo (" 'script', 'facebook-jssdk'));</script>");
echo ('
<div id="wrapper"><div id="bg_header"><div id="footcodewrap">
<div id="header">
  <div id="header_titel"><a href="index.php">Talent voor Taal</a></div>
  <div id="header_text">Nederlandse taaltraining</div>
</div><div id="pad"></div><div id="menu">
  <div><a href="Voorstellen.php">Voorstellen</a></div><div id="space"></div>
  <div><a href="Cursist.php">Cursist</a></div><div id="space"></div>
  <div><a href="Werkgever.php">Werkgever</a></div><div id="space"></div>
  <div><a href="Collega.php">Collega</a></div><div id="space"></div>
  <div><a href="../Wordpress/?page_id=41">Foto'); echo "'"; echo ('s </a></div><div id="space"></div>
  <div><a href="English.php">English</a></div><div id="space"></div>
  <div><a href="Contact.php">Contact</a></div><div id="space"></div>
  <img src="images/T.jpg" height="56px" style="margin-top: -16px; margin-left: -143px;"/>
</div>
<div id="content"><div id="bodyright">
');
echo ($inhoud); echo ('</div>
</div>
</div>
</div>
<div id="bg_footer">
<div id="footer">
<div id="footer_center">
<a href="Voorstellen.php">Corintha Apon</a><div id="space_footer"></div>|<div id="space_footer"></div>M 06 4886 1056<div id="space_footer"></div>|<div id="space_footer"></div><a href="mailto:info@talentvoortaal.nl">info@talentvoortaal.nl</a><div id="space_footer"></div>|<div id="space_footer"></div><a href="Contact.php">Contact</a> <br />
<a href="index.php">Home</a><div id="space_footer"></div>|<div id="space_footer"></div><a href="Reacties.php">Reacties</a><div id="space_footer"></div>|<div id="space_footer"></div><a href="Oefenen.php">Oefenen</a><div id="space_footer"></div>|<div id="space_footer"></div><a href="../Wordpress/?page_id=41">Foto'); echo("'");  echo('s</a><div id="space_footer"></div>|<div id="space_footer"></div><a href="English.php">English</a></div>
</div></div></div></body>
</html>');
}}?>
