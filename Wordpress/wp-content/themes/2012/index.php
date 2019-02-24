<?php get_header(); get_page( $page_id );  ?>
<div id="wrapper"><div id="bg_header"><div id="footcodewrap">
<div id="header">
  <div id="header_titel"><a href="../index.php">Talent voor Taal</a></div>
  <div id="header_text">Nederlandse taaltraining</div>
</div>
<div id="pad"></div>
<div id="menu">
<div><a href="../Voorstellen.php">Voorstellen</a></div><div id="space"></div>
<div><a href="../Cursist.php">Cursist</a></div><div id="space"></div>
<div><a href="../Werkgever.php">Werkgever</a></div><div id="space"></div>
<div><a href="../Collega.php">Collega</a></div><div id="space"></div>
<div><a href="../Wordpress/?page_id=41">Foto's </a></div><div id="space"></div>
<div><a href="../English.php">English</a></div><div id="space"></div>
<div><a href="../Contact.php">Contact</a></div><div id="space"></div>
<img src="wp-content/themes/2012/images/T.jpg" height="56px" style="margin-top: -16px; margin-left: -143px;"/>
</div>
<div id="content">
<div id="bodyright"><br />
<?php if ($page_id != '41') {get_sidebar();} ?>
<?php if ($page_id == '41') {?>
 <!-- <h1>Index</h1>
<ul>
  <li><a href="#10">Kamerlid in inburgeringsgroep</a></li>
  <li><a href="#1">Workshop VWR</a></li>
  <li><a href="#2">Florence Rijswijk</a></li>
  <li><a href="#3">Minor NT2 Hogeschool</a></li>
  <li><a href="#4">NodW Flair Talen</a></li>
  <li><a href="#5">Inburgering Fox AOB</a></li>
  </ul><a href="#6" style="color:#800080 !important;">Meer...</a> -->
<?php } ?>
</div>
<div id="bodyleft"><br />
<?php if(is_home() || is_front_page()) {  query_posts('showposts=999'); } ?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="entry-head">
					<?php if ($page_id != '41'){ ?><a name="<?php $articletags = strip_tags(get_the_tag_list('',', ','')); echo str_replace(' ','_',$articletags); ?>"><h1><?php the_title(); ?></h1></a>
					<div id="time"><?php the_time('j F Y') ?></div><?php }?>
				</div>
				<div class="entry-wrap">
					<div class="entry-content">
						<?php the_content(''); ?>
						<!-- <?php trackback_rdf(); ?> -->
					</div>
					<div class="rc"></div>
				</div>
			</div>
			
			<?php if ($page_id != '41'){?><br /><div class="separator"></div><br /><?php } ?>
			<?php endwhile; ?>
</div>
</div>
</div>
</div>
</div>

<?php 
/* SCREEN SCRAPING */
if ($page_id == '16') {
query_posts('showposts=3');
$i = 0;
$myFile = "NIL.txt";
$fh = fopen($myFile, 'w') or die("can't open file");

while(have_posts()) : the_post(); 
if ($i < 5) {
  fwrite($fh, the_tags("*!", ',', "!*"));
  $i += 1;
}
endwhile; 
$args = array( 'numberposts' => 5);
$lastposts = get_posts( $args );
ob_start();
foreach($lastposts as $post) : setup_postdata($post); 
	the_tags("*!", ',', "!*");
endforeach;
$content = ob_get_flush();
$NewStart = 0;
for ($i = 0; $i < 5; $i++) {
  $start = strpos($content,'rel="tag">', $NewStart) + 10;
  $end = strpos($content,'</a>',$start);
  fwrite($fh,'<li><a href="../Wordpress/#'. str_replace(' ','_',substr($content,$start,$end-$start)) . '">' . substr($content,$start,$end-$start) . "</a></li>");
  $NewStart = $end + 6;
  if ($NewStart >= strlen($content)){ break; }
}
fclose($fh);
}
?>
<?php get_footer(); ?>