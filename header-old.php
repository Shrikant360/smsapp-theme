<?php
	$thegem_page_id = is_singular() ? get_the_ID() : 0;
	$thegem_shop_page = 0;
	if(is_404() && get_post(thegem_get_option('404_page'))) {
		$thegem_page_id = thegem_get_option('404_page');
	}

	$thegem_header_params = thegem_get_sanitize_page_header_data($thegem_page_id);
	$thegem_effects_params = thegem_get_sanitize_page_effects_data($thegem_page_id);
	if(is_archive() && !$thegem_shop_page) {
		$thegem_header_params = thegem_theme_options_get_page_settings('blog');
		$thegem_effects_params = thegem_theme_options_get_page_settings('blog');
	}
	if(!$thegem_shop_page && is_tax() || is_category() || is_tag()) {
		$thegem_term_id = get_queried_object()->term_id;
		if(get_term_meta($thegem_term_id , 'thegem_taxonomy_custom_page_options', true)) {
			$thegem_header_params = thegem_get_sanitize_page_header_data($thegem_term_id, array(), 'term');
			$thegem_effects_params = thegem_get_sanitize_page_effects_data($thegem_term_id, array(), 'term');
		}
	}
	if($thegem_effects_params['effects_page_scroller']) {
		$thegem_header_params['header_hide_top_area'] = true;
		$thegem_header_params['header_transparent'] = true;
	}
	$thegem_header_light = $thegem_header_params['header_menu_logo_light'] ? '_light' : '';
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

 <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MP4GG7G2');</script>
<!-- End Google Tag Manager -->	
<!-- Google tag (gtag.js) added by shivam -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3L49KM5KJ4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-3L49KM5KJ4');
</script>
<meta name="msvalidate.01" content="0C1762AF7C2536EFC2F53A0F6BC5A04B" />
    <meta name="google-site-verification" content="QQtN8omDpc2hzU4CYIMz9gbRIl5tkLll9yJ42DeGk_k" />
    <meta name="p:domain_verify" content="720aa08f1e0162ac6aeb43207ff703e4" />

    <script>
		 (function(){ window.ldfdr = window.ldfdr || {}; (function(d, s, ss, fs){ fs = d.getElementsByTagName(s)[0]; function ce(src){ var cs = d.createElement(s); cs.async = true; cs.src = src; setTimeout(function(){fs.parentNode.insertBefore(cs,fs)}, 1); } ce(ss); })(document, 'script', 'https://sc.lfeeder.com/lftracker_v1_kn9Eq4Rmqql7RlvP.js'); })(); 


	</script>

<link rel="preload" fetchpriority="high" as="image" href="<?php echo get_site_url(); ?>/wp-content/uploads/2024/02/BGG.webp">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	
	
	<!-- google adword script-->
	<script>
	function getParam(p) {
  var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
  return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
}

function getExpiryRecord(value) {
  var expiryPeriod = 90 * 24 * 60 * 60 * 1000;

  var expiryDate = new Date().getTime() + expiryPeriod;
  return {
    value: value,
    expiryDate: expiryDate
  };
}

function addGclid() {
  var gclidParam = getParam('gclid');
  var gclidFormFields = ['00N4N00000IVjck'];
  var gclidRecord = null;
  var currGclidFormField;

  var gclsrcParam = getParam('gclsrc');
  var isGclsrcValid = !gclsrcParam || gclsrcParam.indexOf('aw') !== -1;

  gclidFormFields.forEach(function (field) {
    if (document.getElementById(field)) {
      currGclidFormField = document.getElementById(field);
    }
  });

  if (gclidParam && isGclsrcValid) {
    gclidRecord = getExpiryRecord(gclidParam);
    localStorage.setItem('gclid', JSON.stringify(gclidRecord));
  }

  var gclid = gclidRecord || JSON.parse(localStorage.getItem('gclid'));
  var isGclidValid = gclid && new Date().getTime() < gclid.expiryDate;

  if (currGclidFormField && isGclidValid) {
    currGclidFormField.value = gclid.value;
  }
}

window.addEventListener('load', addGclid);
	
	</script>
	
	<!-- Google Analytics Goal Script -->
    <script>
		setTimeout(() => {
  	let b1 = document.querySelector("#sales360");
  	if(b1) {
      b1.addEventListener("click", () => {
        gtag('event', 'Click button', {
            'event_category': 'Salesforce Appexchange US',
            'event_label': 'Salesforce Appexchange Button',
        });
      	console.log("anchor12")
    });
    }
  
  	a5 = document.querySelector("#logo360");
  	if(a5) {
    	a5.addEventListener("click", () => {
          gtag('event', 'Clicks', {
              'event_category': 'Landing Page US',
              'event_label': 'total clicks on logo',
          });
          console.log("anchor12")
      });
    }
  	
  	let b2 = document.querySelector("#call360");
  	if(b2) {
      b2.addEventListener("click", () => {
          gtag('event', 'Click number', {
              'event_category': 'Landing Page USA Number',
              'event_label': 'USA Number',
          });
          console.log("anchor12")
      });
    }
  	
  
  	let a = document.querySelector(".gem-contacts-item.gem-contacts-phone a:nth-of-type(1)");
  	if(a) {
    	a.addEventListener("click", () => {
          gtag('event', 'USA Number', {
              'event_category': 'Click Number',
              'event_label': 'USA Number - Top Bar',
          });
          console.log("anchor11")
      });
    }
  	
  	let a2 = document.querySelector("#slide-9-layer-8");
    if(a2) {
    	a2.addEventListener("click", () => {
          gtag('event', 'button Click', {
              'event_category': 'app Exchange',
              'event_label': 'try It Free - Home',
          });
          console.log("anchor2")
      });
    }
    
  
    let a3 = document.querySelector("#GDlNZAZ-1566979358244");
    if(a3) {
    	a3.addEventListener("click", () => {
          gtag('event', 'Button Click', {
              'event_category': 'Tawk.to Chat',
              'event_label': 'Chat on 360 SMS App',
          });
          console.log("click2")
    	});
    }
  	
  	let a4 = document.querySelector(".gem-contacts-item.gem-contacts-phone a:nth-of-type(1)");
  	if(a4) {
    	a4.addEventListener("click", () => {
          gtag('event', 'USA Number', {
              'event_category': 'Click Number',
              'event_label': 'USA Number - Top Bar',
          });
          console.log("click2")
      });
    }   
  	
  	
  	let a6 = document.querySelector(".gem-contacts-item.gem-contacts-phone a:nth-of-type(1)");
  	if(a6) {
        a6.addEventListener("click", () => {
          gtag('event', 'USA Number', {
              'event_category': 'Click Number',
              'event_label': 'USA Number - Top Bar',
          });
          console.log("anchor12")
      });
    }
  	
  	
  	let a7 = document.querySelector(".gem-contacts-item.gem-contacts-phone a:nth-of-type(2)");
  	if(a7) {
      a7.addEventListener("click", () => {
        gtag('event', 'AUS Number', {
            'event_category': 'Number Clicks',
            'event_label': 'AUS Number - Top Bar',
        });
      	console.log("anchor12")
    });
    }
  	
  
  	let a8 = document.querySelector(".gem-contacts-item.gem-contacts-phone a:nth-of-type(3)");
  	if(a8) {
        a8.addEventListener("click", () => {
          gtag('event', 'AUS Number', {
              'event_category': 'Number Clicks',
              'event_label': 'AUS Number - Top Bar',
          });
          console.log("anchor12")
      });
    }
  	
  
 	let a9 = document.querySelector(".gem-contacts-item.gem-contacts-email a");
  	if(a9) {
       a9.addEventListener("click", () => {
          gtag('event', 'UK Number', {
              'event_category': 'Number Clicks',
              'event_label': 'UK Number - Top Bar',
          });
          console.log("anchor12")
      });
    }
  	
  
  	let a10 = document.querySelector(".top-area-button a");
  	if(a10) {
       a10.addEventListener("click", () => {
          gtag('event', 'Button Clicks', {
              'event_category': 'Salesforce Consulting',
              'event_label': 'Salesforce Button - Top Bar',
          });
          console.log("anchor12")
      });
    }
  	
  
  	let a11 = document.querySelector(".ssb-btns-right a");
  	if(a11) {
    	a11.addEventListener("click", () => {
          gtag('event', 'Click Button', {
              'event_category': 'Contact Form',
              'event_label': 'Contact Button - Hover',
          });
          console.log("anchor12")
      });
    }
  	
    
    let a12 = document.querySelector("#logo-au");
  	if(a12) {
    	a12.addEventListener("click", () => {
          gtag('event', 'Clicks', {
              'event_category': 'AUS Logo',
              'event_label': 'Click on Logo',
          });
          console.log("anchor12")
      });
    }
  
    
  let a13 = document.querySelector("#call-au");
  	if(a13) {
    	a13.addEventListener("click", () => {
          gtag('event', 'Number Clicks', {
              'event_category': 'AUS Number',
              'event_label': 'Clicks on AUS Number',
          });
          console.log("anchor13")
      });
    }
  
  
  let a14 = document.querySelector("#sales-au");
  	if(a14) {
    	a14.addEventListener("click", () => {
          gtag('event', 'Clicks on link', {
              'event_category': 'AUS Appexchange',
              'event_label': 'AUS Landing Page Link',
          });
          console.log("anchor14")
      });
    }
  
  	
  let a15 = document.querySelector("#logo-emea");
  	if(a15) {
    	a15.addEventListener("click", () => {
          gtag('event', 'Clicks on logo', {
              'event_category': 'EMEA Logo',
              'event_label': 'EMEA Landing Page Logo',
          });
          console.log("anchor12")
      });
    }
  
  
   let a16 = document.querySelector("#call-emea");
  	if(a16) {
    	a16.addEventListener("click", () => {
          gtag('event', 'Clicks on number', {
              'event_category': 'EMEA Number L.P',
              'event_label': 'EMEA Number clicks',
          });
          console.log("anchor12")
      });
    }
  
  
}, 5000);
	</script>
	<script scr="<?php echo get_stylesheet_directory_uri();?>/js/jquery-1.12.4.min.js" async></script>
	
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
	<script>	function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setDate(date.getDate() + 1);
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}</script>
	<?php
	//echo get_the_title();
	if ( is_page('Thank You') ) {
	?>
	<meta name="description" content="Thank you for contacting 360 sms App. Salesforce sms messaging solution by 360 SMS App"/>
<meta name="robots" content="noindex,follow"/>
<meta content='all' name='robots'/>
<meta content='global' name='distribution'/>
<meta name="copyright" content="© Copyrights 360 SMS App 2020"/>
<meta property="og:locale" content="en_US"/>
<meta property="og:site_name" content="360 sms App"/>
<meta property="og:title" content="Thank You - 360 sms App"/>
<meta property="og:url" content="<?php echo get_site_url(); ?>/" />
<meta property="og:type" content="website"/>
<meta property="og:description" content="Thank you for contacting 360 SMS App. Salesforce sms messaging solution by 360 SMS App"/>
<meta property="og:image" content=""/>
	<?php
	}
?>	
	<style>
		.mobile_whatsapp {position: fixed;
    top: 70%;
    right: 0;
    z-index: 500;
    padding: 5px 6px;
    background-color: #595c71;
    color: #fff;
    border-radius: 4px;
    transition: 0.3s;
    font-weight: 900;
	height: 40px;    margin: 0;}
	.footerform input.input-mail {
    background-color: rgb(244 246 247 / 0%);
    padding: 6px 11px;
    width: 169.95px;
    max-width: 100%;
    font-size: 15px;
    border: 1px solid #fff;
    color: #fff;
    height: 40px;
    margin-top: 20px;
} .footerform .input-subs {
    background-color: rgb(108 193 222);
    position: relative;
    display: inline-block;
    text-align: center;
    text-transform: uppercase;
    white-space: nowrap;
    border: 0 none;
    vertical-align: middle;
    height: 40px;
    line-height: 40px;
    padding: 0 17px;
    font-size: 14px;
    / margin: 10px; /
    -o-transition: all .3s;
    -webkit-transition: all .3s;
    transition: all .3s;
    border-radius: 3px;
    margin-top: 20px;
    margin-left: 0px;
}</style> <script>
    jQuery(function() {
  // Set
  var main = jQuery('div.mm-dropdown .textfirst')
  var li = jQuery('div.mm-dropdown > ul > li.input-option')
  var inputoption = jQuery("div.mm-dropdown .option")
  var default_text = '<img alt="United States Flag" src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/07/255px-Flag_of_the_United_States.svg-p40ovmwmdvx098zmnerozbu9ngrs21itasgdcv5an4-1.png"style="width:19px; height:14px;"><span class="ml-10">US</span><img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-down-b-128.png" width="10" height="10" class="down" alt="Downward arrow icon"/>';

  // Animation
  main.click(function() {
    main.html(default_text);
    li.toggle('fast');
  });

  // Insert Data
  li.click(function() {
    // hide
    li.toggle('fast');
    var livalue = jQuery(this).data('value');
	 // alert(livalue);
    var lihtml = jQuery(this).html();
    main.html(lihtml);
    inputoption.val(livalue);
	  if(livalue == 1){
		 jQuery('.inp-num').html('+1 323 6414417'); jQuery('.inp-num').attr('href','tel:+1 323 6414417');
	  }
	   if(livalue == 2){
		  
jQuery('.inp-num').html('+44 740 327 9473'); 
		   jQuery('.inp-num').attr('href','tel:+44 740 327 9473');
	  } 
	   if(livalue == 3){
		 jQuery('.inp-num').html('+61 4 8885 6713'); jQuery('.inp-num').attr('href','tel:+61 4 8885 6713');
	  } 
	   if(livalue == 4){
		 jQuery('.inp-num').html('+91 8069027849'); jQuery('.inp-num').attr('href','tel:+91 8069027849');
	  }
//  if(livalue == 5){
// 		  jQuery('.inp-num').html('+91 9871096860'); jQuery('.inp-num').attr('href','tel:+91 9871096860');
// 	  }
  });
});
</script>
	<!-- Begin Inspectlet Asynchronous Code -->
<script type="text/javascript">
(function() {
window.__insp = window.__insp || [];
__insp.push(['wid', 1766580799]);
var ldinsp = function(){
if(typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js?wid=1766580799&r=' + Math.floor(new Date().getTime()/3600000); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
setTimeout(ldinsp, 0);
})();
</script>
<!-- End Inspectlet Asynchronous Code -->
<script
        type="text/javascript"> _linkedin_partner_id = "3571402"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script>
    <script
        type="text/javascript"> (function (l) { if (!l) { window.lintrk = function (a, b) { window.lintrk.q.push([a, b]) }; window.lintrk.q = [] } var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript"; b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s); })(window.lintrk); </script>
    <noscript> <img height="1" width="1" style="display:none;" alt=""
            src="https://px.ads.linkedin.com/collect/?pid=3571402&fmt=gif" /> </noscript>
		
</head>

<?php
	$thegem_preloader_data = thegem_get_sanitize_page_preloader_data($thegem_page_id);
	if(is_tax() || is_category() || is_tag()) {
		$thegem_term_id = get_queried_object()->term_id;
		if(get_term_meta($thegem_term_id , 'thegem_taxonomy_custom_page_options', true)) {
			$thegem_preloader_data = thegem_get_sanitize_page_header_data($thegem_term_id, array(), 'term');
		}
	}
?>

<body <?php body_class(); ?>>
    
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MP4GG7G2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <!--  ClickCease.com tracking-->
      <script type='text/javascript'>var script = document.createElement('script');
      script.async = true; script.type = 'text/javascript';
      var target = 'https://www.clickcease.com/monitor/stat.js';
      script.src = target;var elem = document.head;elem.appendChild(script);
      </script>
      <noscript>
      <a href='https://www.clickcease.com' rel='nofollow'><img src='https://monitor.clickcease.com' alt='ClickCease'/></a>
      </noscript>
      <!--  ClickCease.com tracking-->
        

 

<?php do_action('gem_before_page_content'); ?>

<?php if ( thegem_get_option('enable_page_preloader') || ( $thegem_preloader_data && !empty($thegem_preloader_data['enable_page_preloader']) ) ) : ?>
	<div id="page-preloader"><div class="page-preloader-spin"></div></div>
	<?php do_action('gem_after_page_preloader'); ?>
<?php endif; ?>

<?php if(thegem_get_option('header_layout') == 'perspective') : ?>
	<div id="thegem-perspective" class="thegem-perspective effect-moveleft">
		<div class="thegem-perspective-menu-wrapper <?php echo ($thegem_header_params['header_menu_logo_light'] ? ' header-colors-light' : ''); ?> mobile-menu-layout-<?php echo esc_attr(thegem_get_option('mobile_menu_layout', 'default')); ?>">
			<nav id="primary-navigation" class="site-navigation primary-navigation perspective-navigation vertical right" role="navigation">
				<?php do_action('thegem_before_perspective_nav_menu'); ?>
				<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => apply_filters( 'thegem_nav_menu_class', 'nav-menu styled no-responsive' ), 'container' => false, 'walker' => new TheGem_Mega_Menu_Walker)); ?>
				<?php do_action('thegem_after_perspective_nav_menu'); ?>
			</nav>
		</div>
<?php endif; ?>

<div id="page" class="layout-<?php echo esc_attr(thegem_get_option('page_layout_style', 'fullwidth')); ?><?php echo esc_attr(thegem_get_option('header_layout') == 'vertical' ? ' vertical-header' : '') ; ?> header-style-<?php echo esc_attr(thegem_get_option('header_layout') == 'vertical' || thegem_get_option('header_layout') == 'fullwidth_hamburger' ? 'vertical' : thegem_get_option('header_style')); ?>">

	<?php if(!thegem_get_option('disable_scroll_top_button')) : ?>
		<a href="#page" class="scroll-top-button"></a>
	<?php endif; ?>

	<?php if(!$thegem_effects_params['effects_hide_header']) : ?>

		<?php if(thegem_get_option('top_area_style') && !$thegem_header_params['header_hide_top_area'] && (thegem_get_option('header_layout') == 'vertical' && thegem_get_option('header_layout') != 'fullwidth_hamburger' || thegem_get_option('top_area_disable_fixed')) && !($thegem_header_params['header_transparent'] && $thegem_header_params['header_top_area_transparent'])) : ?>
			<?php
      // get_template_part('top_area'); 
      ?>
		<?php endif; ?>
<?php //if ( is_user_logged_in() ) {
   include('smsappheaderhtml.php');
//}  ?>
		<div id="site-header-wrapper"  class="<?php  echo $thegem_header_params['header_transparent'] ? 'site-header-wrapper-transparent' : ''; ?> <?php echo thegem_get_option('sticky_header_on_mobile') ? ' sticky-header-on-mobile' : ''; ?>"  style="display:none;">

			<?php if(thegem_get_option('header_layout') == 'fullwidth_hamburger') : ?><div class="hamburger-overlay"></div><?php endif; ?>

			<?php do_action('thegem_before_header'); ?>

			<header id="site-header" class="site-header<?php echo (thegem_get_option('disable_fixed_header') || thegem_get_option('header_layout') == 'vertical' ? '' : ' animated-header'); ?><?php echo thegem_get_option('header_on_slideshow') ? ' header-on-slideshow' : ''; ?> mobile-menu-layout-<?php echo esc_attr(thegem_get_option('mobile_menu_layout', 'default')); ?>" role="banner">
				<?php if(thegem_get_option('header_layout') == 'vertical') : ?><button class="vertical-toggle"><?php esc_html_e('Primary Menu', 'thegem'); ?><span class="menu-line-1"></span><span class="menu-line-2"></span><span class="menu-line-3"></span></button><?php endif; ?>
				<?php if(thegem_get_option('top_area_style') && !$thegem_header_params['header_hide_top_area'] && (!thegem_get_option('top_area_disable_fixed') || $thegem_header_params['header_transparent'] && $thegem_header_params['header_top_area_transparent']) && thegem_get_option('header_layout') != 'vertical' && thegem_get_option('header_layout') != 'fullwidth_hamburger') : ?>
					<?php if($thegem_header_params['header_top_area_transparent']) : ?><div class="transparent-header-background<?php echo thegem_get_option('top_area_disable_fixed') ? ' top-area-scroll-hide' : ''; ?>" style="background-color: rgba(<?php echo esc_attr(implode(', ', hex_to_rgb(thegem_get_option('top_area_background_color')))); ?>, <?php echo intval($thegem_header_params['header_top_area_opacity'])/100; ?>);"><?php endif; ?>
					<?php get_template_part('top_area'); ?>
					<?php if($thegem_header_params['header_top_area_transparent']) : ?></div><?php endif; ?>
				<?php endif; ?>

				<?php if($thegem_header_params['header_transparent']) : ?><div class="transparent-header-background" style="background-color: rgba(<?php echo esc_attr(implode(', ', hex_to_rgb(thegem_get_option('top_background_color')))); ?>, <?php echo intval($thegem_header_params['header_opacity'])/100; ?>);"><?php endif; ?>
				<div class="container<?php echo (thegem_get_option('header_layout') == 'fullwidth' || thegem_get_option('header_layout') == 'fullwidth_hamburger' || thegem_get_option('header_layout') == 'overlay' || thegem_get_option('header_layout') == 'perspective' ? ' container-fullwidth' : ''); ?>">
					<div class="header-main logo-position-<?php echo esc_attr(thegem_get_option('logo_position', 'left')); ?><?php echo ($thegem_header_params['header_menu_logo_light'] ? ' header-colors-light' : ''); ?> header-layout-<?php echo esc_attr(thegem_get_option('header_layout')); ?> header-style-<?php echo esc_attr(thegem_get_option('header_layout') == 'vertical' || thegem_get_option('header_layout') == 'fullwidth_hamburger' ? 'vertical' : thegem_get_option('header_style')); ?>">
						<?php if(thegem_get_option('logo_position', 'left') != 'right') : ?>
							<div class="site-title">
								<?php thegem_print_logo($thegem_header_light); ?>
							</div>
							<div class="mobilerows">	
            <div class="d-flex call-num">
              <div class="mm-dropdown">
                  <div class="textfirst"><img alt="United States Flag" src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/07/255px-Flag_of_the_United_States.svg-p40ovmwmdvx098zmnerozbu9ngrs21itasgdcv5an4-1.png"style="width:19px; height:14px;"><span class="ml-10">US</span><img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-down-b-128.png" width="10" height="10" class="down" alt="Downward arrow icon" /></div>
                  <ul>

                    <li class="input-option" data-value="1">
                      <img alt="United States Flag" src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/07/255px-Flag_of_the_United_States.svg-p40ovmwmdvx098zmnerozbu9ngrs21itasgdcv5an4-1.png" style="width:19px;height:14px;"><span class="ml-10"> US</span>
                    </li>

                    <li class="input-option" data-value="2">
                      <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/07/255px-Flag_of_the_United_Kingdom.svg-p40ox2lqtrvrzswj9j46agsmbnoyte81twc2r30n4w.png" title="255px-Flag_of_the_United_Kingdom.svg" alt="255px-Flag_of_the_United_Kingdom.svg" style="width:19px; height:14px;"><span class="ml-10"> UK</span>
                    </li>

                    <li class="input-option" data-value="3">
                      <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/07/255px-Flag_of_Australia_converted.svg.png" title="255px-Flag_of_Australia_(converted).svg" alt="255px-Flag_of_Australia_(converted).svg"style="width:19px;height:14px;"><span class="ml-10"> AU</span>
                    </li>

                    <li class="input-option" data-value="4">
                      <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/07/255px-Flag_of_India.svg-1.png" title="255px-Flag_of_India.svg" alt="255px-Flag_of_India.svg" style="width:19px; height:14px;"><span class="ml-10">IN</span>
                    </li>

                    <li class="input-option" data-value="5">
                      <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/07/255px-Flag_of_India.svg-1.png" title="255px-Flag_of_India.svg" alt="255px-Flag_of_India.svg" style="width:19px; height:14px;"><span class="ml-10"> IN</span>
                    </li>
                  </ul>
                 
                </div>
				<a href="tel:+1 323 641 4417" class="inp-num">+1 323 641 4417</a>
               
                <span class="phone-icon"><i class="fas fa-phone"></i></span>
            <!--   <div class="m-hov-2">
                    <a href="#" class="wrapper-blue-img-2">
                        <img src="images/call -bl.svg"/>
                    +1 323 6414417</a>
                </div>-->
                </div>
					</div>
							<?php if(has_nav_menu('primary')) : ?>
								<?php if(thegem_get_option('header_layout') != 'perspective') : ?>
									<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
										<?php do_action('thegem_before_nav_menu'); ?>
										<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => apply_filters( 'thegem_nav_menu_class', 'nav-menu styled no-responsive' ), 'container' => false, 'walker' => new TheGem_Mega_Menu_Walker)); ?>
										<?php do_action('thegem_after_nav_menu'); ?>
									</nav>
								<?php else: ?>
									<?php do_action('thegem_perspective_menu_buttons'); ?>
								<?php endif; ?>
							<?php endif; ?>
						<?php else : ?>
							<?php if(has_nav_menu('primary')) : ?>
								<?php if(thegem_get_option('header_layout') != 'perspective') : ?>
									<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
										<?php do_action('thegem_before_nav_menu'); ?>
										<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => apply_filters( 'thegem_nav_menu_class', 'nav-menu styled no-responsive' ), 'container' => false, 'walker' => new TheGem_Mega_Menu_Walker)); ?>
										<?php do_action('thegem_after_nav_menu'); ?>
									</nav>
								<?php else: ?>
									<?php do_action('thegem_perspective_menu_buttons'); ?>
								<?php endif; ?>
							<?php endif; ?>
							<div class="site-title">
								<?php thegem_print_logo($thegem_header_light); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<?php if($thegem_header_params['header_transparent']) : ?></div><?php endif; ?>
			</header><!-- #site-header -->
			<?php if(thegem_get_option('header_layout') == 'vertical') : ?>
				<div class="vertical-menu-item-widgets">
					<?php
						add_filter( 'get_search_form', 'thegem_serch_form_vertical_header' );
						get_search_form();
						remove_filter( 'get_search_form', 'thegem_serch_form_vertical_header' );
					?>
					<div class="menu-item-socials socials-colored"><?php thegem_print_socials('rounded'); ?></div></div>
			<?php endif; ?>
		</div><!-- #site-header-wrapper -->

	<?php endif; ?>
<style>
	.sixcolumn img{
	max-width:100px !important;
} 
div#bannerheading {
    padding-right: 60% !important;
	height:65vh;
}
@media only screen and (max-width:768px){
	.mobilerows{
		display:block;
	}
	div#bannerheading {
    padding-right: 30% !important;
   
}
}
#mobilerow h5{
	color:#fff;
}

#primary-navigation .menu-toggle{
	margin-left: -13px;
}


	
	#menu-new_footer-menu-1 li:nth-child(odd){
		width:51%!important;	
		margin-left:17px;
	}
	#menu-new_footer-menu-1 li:nth-child(even){
		width:42%!important;	
		
	}

#p-desk-0 .vc_column-inner{
		padding-right:0px!important;
	} 
	#menu-new_footer-menu-1 li:nth-child(odd){
		width:51%!important;	
		margin-left:17px;
	}
	#menu-new_footer-menu-1 li:nth-child(even){
		width:42%!important;	
		
	}

#p-desk-0 ul{
	margin-top:-20px;
}
/*Added on 15june */
.sixcolumn img{
	max-width:100px !important;
} 
@media only screen and (max-width: 400px) {
.textjustify p , .textjustifydiv div{
	text-align:justify; 
	}  div#btnmargin a {
    margin-top: 0px;
    margin-bottom: 50px;
} 
div#bannerheading {
       height: 55vh !important;
	padding-right: 0% !important;
}
	div#bannerheading h1 {
    font-size: 29px !important;
    line-height: 34px !important;
}
	.page-id-34927 div#bannerheading {
    height: 84vh !important;
    padding-right: 0% !important;
}
}

@media only screen and (max-width:768px) and (min-width:600px){
	#socialwidth .vc_col-sm-6{
		width:100%;
	}
	.footerform {
		margin-left: 0px!important;
	}
	.d-flex.footerform {
		padding-left: 21px!important;
		padding-right: 0px!important;
	}
	.footerform .input-subs{
		padding:0px 9px!important;
	}
}

@media only screen and (max-width:600px){
	.d-flex.menues-footer ul{
		padding-left:0px;
		margin-top:0px;
	}
	.socials-item i {
		font-size: 42px!important;
	}
	.socials-list.socials-alignment-center {
		margin-left:0px!important;
	}
	.footerlogoimg img{
		width:200px;
	}
	.text-white{
		margin-left: 16px;
		margin-bottom: 45px!important;
	}
}
@media only screen and (max-width: 600px){
  .d-flex.menues-footer ul li{
      text-align: left;
  }
  .d-flex.menues-footer ul{
    width: 50%;
    float: left;
  }
}
strong{
	line-height:26px;
}
@media only screen and (max-width: 600px){
	#mobilerow .footerform {
		 padding: 0px 0px!important;
	}
}
@media only screen and (max-width: 420px){
div#bannerheading {
    padding-right: 15% !important;
	}}


#menu-item-33845 ul{
    width: 750px !important;
    top: 0px;
    transform: translate(40%, 0%) !important;
	background-color: #f4f6f7 !important;
	display: grid;
    grid-template-columns: 1fr 1fr 1fr;
	column-fill:balance;
	
}
 
#menu-item-33845 ul li{
	border-style: none !important;
}

#menu-item-33845 ul li a:hover {
    background-color: rgb(0, 188, 212) !important;
	color:#fff !important;
}
#menu-item-33845 ul li a:before {
    display: inline-block;
    font-family: FontAwesome;
    content: "\f105";
    font-size: 14px;
    vertical-align: baseline;
	width: 25px;
    text-align: left;
    margin-left: -13px;
    padding-left: 4px;
    position: absolute;
 }
#menu-item-33845 ul li a{
	padding:9px 30px !important;
}
@media only screen and (max-width: 768px){
	#menu-item-33845 ul{
		column-count: 1 !important;
		transform: translate(0%, 0%) !important;
		width: 750px !important;
	}
	#menu-item-33845 ul li a:before {
    content: " " !important;
    
 }
}
@media only screen and (max-width: 425px){
	#menu-item-33845 ul{
		column-count: 1 !important;
		transform: translate(0%, 0%) !important;
		 width: 600px !important;
	}
	#menu-item-33845 ul li a:before {
    content: " " !important;
    
 }
}
@media only screen and (max-width: 375px){
	#menu-item-33845 ul{
		column-count: 1 !important;
		transform: translate(0%, 0%) !important;
		 width: 600px !important;
	}
	#menu-item-33845 ul li a:before {
    content: " " !important;
    
 }
}
@media only screen and (max-width: 360px){
	#menu-item-33845 ul{
		column-count: 1 !important;
		transform: translate(0%, 0%) !important;
		 width: 600px !important;
	}
	#menu-item-33845 ul li a:before {
    content: " " !important;
    
 }
}
@media only screen and (max-width: 320px){
	#menu-item-33845 ul{
		column-count: 1 !important;
		transform: translate(0%, 0%) !important;
		 width: 600px !important;
	}
	#menu-item-33845 ul li a:before {
    content: " " !important;
    
 }
} div#centerbuttons .wpb_wrapper {
    text-align: center;
	} 
.single-post div#comments {
    display: none;
}
	</style>
	<div id="main" class="site-main">