<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>


    <img class="logoCases" alt="worked for the cases" title="worked for the cases" src="<?php echo get_child_template_directory_uri(); ?>/images/logos.png"/>

    <section class="footer">
	
		<div class="social_logos">
			<a href="https://vimeo.com/brikk" target="_blank"><img class="social" alt="logo vimeo" title="logo vimeo" src="<?php echo get_child_template_directory_uri(); ?>/images/social/vimeo.svg"/></a>
			<a href="https://www.facebook.com/brikk.se" target="_blank"><img class="social" alt="logo facebook" title="logo facebook" src="<?php echo get_child_template_directory_uri(); ?>/images/social/facebook.svg"/></a>
			<a href="https://dribbble.com/BRIKK" target="_blank"><img class="social" alt="logo dribbble" title="logo dribbble" src="<?php echo get_child_template_directory_uri(); ?>/images/social/dribble.svg"/></a>
			<a href="https://www.linkedin.com/company/2818774?trk=vsrp_companies_cluster_name&trkInfo=VSRPsearchId%3A2994728381425290837835%2CVSRPtargetId%3A2818774%2CVSRPcmpt%3Acompanies_cluster" target="_blank"><img class="social" alt="logo linkedin" title="logo linkedin" src="<?php echo get_child_template_directory_uri(); ?>/images/social/linkedin.svg"/></a>
			<a href="https://www.behance.net/brikk" target="_blank"><img class="social" alt="logo behance" title="logo behance" src="<?php echo get_child_template_directory_uri(); ?>/images/social/behance.svg"/></a>
		</div>

      <a itemprop="email" href="mailto:post@brikk.se"><p>post@brikk.se</p></a>
      <p itemprop="company">Brikk Animation och Film AB   Pryssgränd 10B   118 20 Stockholm</p>
      <p>Copyright © 2015 Brikk Animation och Film AB. All rights reserved.</p>

    </section>
</div>
	
<?php wp_footer(); ?>

</body>
</html>