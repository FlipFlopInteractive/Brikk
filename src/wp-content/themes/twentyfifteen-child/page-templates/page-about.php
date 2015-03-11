<?php
/**
 * Template Name: about page
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php get_header(); ?>

<section class="about">
      
      <article class="aboutHeader">
		
        <h1>We love new challenges,</br> and we love to make good motion.</h1>

		<ul class="cb-slideshow">
			<li><span>Image 01</span></li>
			<li><span>Image 02</span></li>
			<li><span>Image 03</span></li>
			<li><span>Image 04</span></li>
	        <!--<img class="headerImage" alt="headerImage" title="headerImage" src="../images/Screens/dupstep_cat.jpg"></img>-->
	    </ul>    

      </article>  

	<p class="about_text">Brikk is a Stockholm-based design driven Production company and animation studio. </br>
	We have a versatile mix of directors, animators, designers, and illustrators from al over the world and</br>
	together with our clients we always strive to create worldclass animations with alot of creativty and love.</br></br>

	If you want to get in contact to start a production give our Creative Director <span class="bold_text">Samuel Fast</span> a call </br>
	or if you are a shy you can just send us an email with your brief, and we get back to you as qucik as we can.
	</p>
	
	<div id="map_wrapper">
		<div class="map_overlay">
			<article id="information_map">
				<h2>Schedule an appointment</h2>
				<p><a href="mailto:samuel@brikk.se">samuel@brikk.se</a></br>+46 (0)73 612 06 04</p>
				<h2>Apply for our internship program,</br> or maybe you just want to show your portoflio?</h2>
				<p><a href="mailto:post@brikk.se">post@brikk.se</a></p>
				<h2>Stockholm office:</h2>
				<p>Brikk Animation och Film AB</br>Pryssgränd 10B</br>118 20 Stockholm</p>
			</article>
		</div>
    	<div id="map-canvas"></div>
	</div>

    <p class="about_text">Brikk Is a social company, please follow us for updates: </p>
	
	<div id="icons">

	    <article class="about_social_icons">
	    	
		  <!-- <div id="wrapper_social_about"> -->
	          <a href="https://www.linkedin.com/company/2818774?trk=vsrp_companies_cluster_name&trkInfo=VSRPsearchId%3A2994728381425290837835%2CVSRPtargetId%3A2818774%2CVSRPcmpt%3Acompanies_cluster" target="_blank"><p class="linkedIn social_icons" target="_blank"><span class="hide_text">linkedin</span></p></a>
	          <a href="https://www.facebook.com/brikk.se" target="_blank"><p class="facebook social_icons"><span class="hide_text">facebook</span></p></a>
	          <a href="https://vimeo.com/brikk" target="_blank"><p class="vimeo social_icons"><span class="hide_text">vimeo</span></p></a>
	          <a href="https://dribbble.com/BRIKK" target="_blank"><p class="dribbble social_icons"><span class="hide_text">dribbble</span></p></a>
	          <a href="https://twitter.com/BRIKKSTUDIO" target="_blank"><p class="twitter social_icons"><span class="hide_text">twitter</span></p></a>
	          <!-- <img class="about_social_icons_img" alt="about_social" title="about_social" src="<?php echo get_child_template_directory_uri(); ?>/images/social/about_facebook.png"/> -->
	      <!-- </div>	 -->
		
	    </article>

    </div>

</section> 

 <?php get_footer(); ?>