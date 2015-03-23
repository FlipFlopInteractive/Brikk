<?php
/**
 * Template Name: detailCase page
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php get_header(); ?>

<section class="detailCase">
		
	<div id="wrapper"> 
    	  <!--<iframe src="//player.vimeo.com/video/<?php echo $video_id; ?>?color=f0f0f0&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
		  <iframe src="https://player.vimeo.com/video/50981239?color=f0f0f0&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	</div>

	<h2>dupstep cat / personal project</h2>
	<p>Winter is coming, and this year it’s bringing some hot and tasty white cocoa  get our winter flavorscape on.</br>
refreshment along with a bevy of nonsensical cuteness. e folks at Leo Burnett for letting u get our winter flavorscape</br>
Thanks to the folks at Leo Burnett for letting us get our winter flavorscape on.</p>

	<p class="information"> Producer: <span>Brikk</span></br>
		Director: <span>Brikk</span></br>
		Animation: <span>Björn Johansson, Edward Moulder</span></br>
		Illustration: <span>Gustaf Öhrnell</span></br>
		DOP: <span>Olle Lundin</span></br>
		Sounddesign: <span>Calle Wachtmeister</span></br>
		Music: <span>Calle Wachtmeister</span></p>

		<h2>stills from project</h2>

		<img class="logoCases" alt="detailCases" title="detailCases" src="<?php echo get_child_template_directory_uri(); ?>/images/screens/stills.png"/>

</section> 

 <?php get_footer(); ?>
