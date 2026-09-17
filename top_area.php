<div id="top-area" class="top-area top-area-style-default top-area-alignment-<?php echo esc_attr(thegem_get_option('top_area_alignment', 'left')); ?>">
	<div class="container">
		<div class="top-header desktoprow">
  			<div class="top-header-left vvvvvv">
				    <div class="link d-con">
                    <a href="tel:+1 323 641 4417">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/07/255px-Flag_of_the_United_States.svg-p40ovmwmdvx098zmnerozbu9ngrs21itasgdcv5an4-1.png" title="255px-Flag_of_the_United_States.svg" alt="255px-Flag_of_the_United_States.svg" class="ml-14-6">
                     </a>
                     <div>    
                        <p style="margin-bottom: 0px;">
                            <a href="tel:+1 323 641 4417">+1 323 641 4417</a>
                         </p>
                    </div>
                </div>

                <div class="link d-con">
                    <a href="tel:+44 740 327 9473">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/07/255px-Flag_of_the_United_Kingdom.svg-p40ox2lqtrvrzswj9j46agsmbnoyte81twc2r30n4w.png" title="255px-Flag_of_the_United_Kingdom.svg" alt="255px-Flag_of_the_United_Kingdom.svg" class="ml-14-6">
                     </a>
                     <div>    
                        <p style="margin-bottom: 0px;">
                            <a href="tel:+44 740 327 9473">+44 740 327 9473</a>
                         </p>
                    </div>
                </div>

                <div class="link d-con">
                    <a href="tel:+61 4 8885 6713">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/07/255px-Flag_of_Australia_converted.svg.png" title="255px-Flag_of_Australia_(converted).svg" alt="255px-Flag_of_Australia_(converted).svg" style="width:30px;height: 16px;" class="ml-14-6">
                     </a>
                     <div>    
                        <p style="margin-bottom: 0px;">
                            <a href="tel:+61488853632">+61 48885 3632</a>
                         </p>
                    </div>
                </div>
                
				<div class="link d-flex">
									<a href=""> <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/07/255px-Flag_of_India.svg-1.png" title="255px-Flag_of_India.svg" alt="255px-Flag_of_India.svg" style="height:16px;margin-left: 23px;"> </a>
									<div style="margin-top:0px">
										<p style="margin-bottom: 0px;"> <a href="tel:+91 9654235387">+91 9654235387</a> </p>
										<!--<p style="margin-bottom: 0px; margin-top:-5px"> <a href="tel:+91 9871096860">+91 9871096860</a> </p> -->
									</div>
				</div>
				<div class="link m-hov-1">
                    <a href="mailto:care@360smsapp.com" class="wrapper-blue-img">
                       <img src="https://360degreecloud.com/wp-content/uploads/2021/05/email-1.webp" title="email" alt="email">
                    <span style="margin-top:7px;">care@360smsapp.com</span></a>
                </div>
				<div  class="button2" style="font-weight:bold; margin: 0px 0px 0 0px; padding: 2px 18px 0px 17px; font-size: 13px; font-family: 'Montserrat'; color: #5f727f; line-height: 25px;">
							<a href="<?php echo get_site_url(); ?>/contact-us/" class="button2" target="_blank" style="padding-left:0px; color: #5f727f;">CONTACT US</a>	
								</div>
				
  			
  			</div>
  		</div>
		<div class="top-area-items inline-inside">
			<?php if(thegem_get_option('top_area_contacts')) : ?>
				<div class="top-area-block top-area-contacts">
					<div class="top-area-block top-area-contacts">
						<div class="gem-contacts inline-inside">
														<div class="gem-contacts-item">
								<select class="country" style="background: #5f727f;width: 100px;color: #fff;border: 1px solid #5f727f;border-radius: 4px;height: 30px;font-size:14px;padding:0 5px;">
			            			<option value="USA" style="font-size:14px">USA</option>
			            			<option value="UK" style="font-size:14px">UK</option>
			            			<option value="AUS" style="font-size:14px">AUS</option>
									<option value="IND" style="font-size:14px">IND</option>
			        			</select>
							</div>
							<div class="gem-contacts-item">
								<div class="box" id="contact_data_num">
       								<a href="tel:+1 3236414417" id="first_contact" class="gem-contacts-phone">+1 323 641 4417</a>
       								<a href="tel:+1 3236414417" id="second_contact" style="margin-right:30px"></a>
               						<a href="mailto:sales@360smsapp.com" class="gem-contacts-email mail"id="mail">sales@360smsapp.com</a>
               					</div>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<?php if(thegem_get_option('top_area_socials')) : ?>
				<div style="display:none"class="top-area-block top-area-socials<?php echo esc_attr(thegem_get_option('top_area_style') == 1 ? ' socials-colored-hover' : ''); ?>"><?php thegem_print_socials(); ?></div>
			<?php endif; ?>
			<?php if(has_nav_menu('top_area') || thegem_get_option('top_area_button_text')) : ?>
				<div class="top-area-block top-area-menu">
					<?php if(has_nav_menu('top_area')) : ?>
						<nav id="top-area-menu">
							<?php wp_nav_menu(array('theme_location' => 'top_area', 'menu_id' => 'top-area-navigation', 'depth' => 1, 'menu_class' => 'nav-menu styled inline-inside', 'container' => false, 'walker' => new thegem_walker_footer_nav_menu)); ?>
						</nav>
					<?php endif; ?>
					<?php if(thegem_get_option('top_area_button_text')) : ?>
						<div class="top-area-button">
							<div class="gem-button-container gem-button-position-inline">
								<a class="gem-button gem-button-size-tiny gem-button-style-flat gem-button-text-weight-normal gem-button-no-uppercase" style="border-radius: 3px;" onmouseleave="" onmouseenter="" href="https://360degreecloud.com/" target="_blank">Salesforce Consulting </a>
							</div>
							<div class="gem-button-container gem-button-position-inline " style="margin-left: 20px;">
								<a target="_blank" class="gem-button gem-button-size-tiny gem-button-style-flat gem-button-text-weight-normal gem-button-no-uppercase desk_whatsapp" style="border-radius: 3px;" onmouseleave="" onmouseenter="" href="https://web.whatsapp.com/send?phone=12028038488&text=Hello,%20I%20need%20help"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/04/ezgif-3-ce6bf46dd917-1.png" height="25" width="25"> WhatsApp Live Chat</a>
							</div>
						
					</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<script>
jQuery(document).ready(function(){
    jQuery("select.country").change(function(){
        
           var selectedCountry = jQuery(this).children("option:selected").val();
          
           
           if (selectedCountry == 'USA'){
            jQuery('#contact_data_num').children('#first_contact').attr("href", "tel:+1 3236414417");
            jQuery('#contact_data_num').children('#first_contact').html('+1 323 641 4417');
            jQuery('#contact_data_num').children('#second_contact').attr("href", "");
            jQuery('#contact_data_num').children('#second_contact').html('');
            
           }
           else if(selectedCountry == 'UK'){
            jQuery('#contact_data_num').children('#first_contact').attr("href", "tel:+44 7403279473");
            jQuery('#contact_data_num').children('#first_contact').html('+44 740 327 9473');
            jQuery('#contact_data_num').children('#second_contact').attr("href", "");
            jQuery('#contact_data_num').children('#second_contact').html('');
               
           }
           else if(selectedCountry == 'AUS'){
            jQuery('#contact_data_num').children('#first_contact').attr("href", "tel:+61488853632");
            jQuery('#contact_data_num').children('#first_contact').html('+61 48885 3632');
            jQuery('#contact_data_num').children('#second_contact').attr("href", "");
            jQuery('#contact_data_num').children('#second_contact').html('');
               
           }
           else if(selectedCountry == 'IND'){
            jQuery('#contact_data_num').children('#first_contact').attr("href", "tel:+91 9654235387");
            jQuery('#contact_data_num').children('#first_contact').html('+91 9654235387, ');
           // jQuery('#contact_data_num').children('#second_contact').attr("href", "tel:+91 9871096860");
         //   jQuery('#contact_data_num').children('#second_contact').html('+91 9871096860');
               
           }           
    });
});
</script>