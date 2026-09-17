<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/thegem-child/css/smsappstyle.css?ver=<?php echo time(); ?>" />
<!-- <link href='https://fonts.googleapis.com/css?family=Source Sans Pro' rel='stylesheet'> -->
<style>
	.boldmenu a {
    font-weight: 800 !important;
    color: #0d9dda !important;

}
.product-events {
    position: absolute;
    z-index: 9999;
    transform: translate(-30%, 12%);
  
}
.product-events ul li {
    padding: 2px 5px !important;
}
.product-events h4 {
    padding-bottom: 5px !important;
}
div#custom_industry {
    transform: translate(-40%,40%) !important;
}
 	
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap');
    	@media(min-width:1100px){	
        .nav-fixed {	
            margin-top: 50px;	
        }	
        .nav-top-fixed {	
        position: fixed;	
        top: 0;	
        z-index: 99999999;	
        width: 100%;	
        height: 60px !important;	
        padding-top: 15px;	
        }	
    }
</style>
<?php
    if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) { } else{
      ?>
<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/thegem-child/css/owl.carousel.min.css" />
<?php } ?>
<section id="desktopheader">
    <!---------------------------------TOP HEADER SECTION START----------------------------->

    <?php
    if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) {
      ?>
    <!-- ------------------------------@@  --------mobile view country part header start------------------------------@@@@@@@@   -->

    <nav class="nav-101" id="nav-main"> 
        <div class="container">
            <div class="n-head nav-container" id="custom-nav">
                <div class="icon">
                    <a href="<?php echo site_url(); ?>/"> <img
                            src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp"
                            loading="lazy" alt="360 Sms App Logo " /> </a>
                </div>
                <div class="top-header mobilerows">
                    <div class="d-flex call-num">
                        <div class="mm-dropdown">
                            <div class=" textfirst" id="textfirst1">
                                <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/10/255px-Flag_of_the_United_States.svg-p40ovmwmdvx098zmnerozbu9ngrs21itasgdcv5an4.png"
                                    loading="lazy" style="width: 19px; height: 14px;" alt="United_States"/>
                                <span class="ml-10">US</span><img
                                    src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-down-b-128.png"
                                    width="10" height="10" class="down" alt="360 Sms App arrow down" />
                            </div>
                            <ul>
                                <li class="input-option" data-value="1">
                                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/10/255px-Flag_of_the_United_States.svg-p40ovmwmdvx098zmnerozbu9ngrs21itasgdcv5an4.png"
                                        loading="lazy" style="width: 19px; height: 14px;"
                                        alt="360 Sms App USA-Legal Agencies and Law Firms" />
                                    <span class="ml-10"> US</span>
                                </li>
                                <li class="input-option" data-value="2">
                                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/10/255px-Flag_of_the_United_Kingdom.svg-p40ox2lqtrvrzswj9j46agsmbnoyte81twc2r30n4w.png"
                                        loading="lazy" alt="Flag_of_the_United_Kingdom.svg"
                                        style="width: 19px; height: 14px;" />
                                    <span class="ml-10"> UK</span>
                                </li>
                                <li class="input-option" data-value="3">
                                    <img loading="lazy"
                                        src="<?php echo site_url(); ?>/wp-content/uploads/2021/10/255px-Flag_of_Australia_converted.png"
                                        alt="255px-Flag_of_Australia_(converted).svg"
                                        style="width: 19px; height: 14px;" />
                                    <span class="ml-10"> AU</span>
                                </li>
                                <li class="input-option" data-value="4">
                                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/10/255px-Flag_of_India.png" loading="lazy"
                                        style="width: 19px; height: 14px;" alt="India Flag" />
                                    <span class="ml-10">IN</span>
                                </li>
                                <!--<li class="input-option" data-value="5">-->
                                <!--    <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/10/255px-Flag_of_India.svg.webp" loading="lazy"-->
                                <!--        alt="255px-Flag_of_India.svg" style="width: 19px; height: 14px;" />-->
                                <!--    <span class="ml-10"> IN</span>-->
                                <!--</li>-->
                            </ul>
                        </div>
                        <a href="tel:+1 323 641 4417" class="inp-num inp-num1">+1 323 641 4417</a> <span
                            class="phone-icon"><i class="fas fa-phone"></i></span>
                    </div>
                </div>
                <div class="button-div">
                    <button type="button" id="menu-toggle" aria-label="menuToggle">
                        <span class="menu-line-1"></span>
                        <span class="menu-line-2"></span>
                        <span class="menu-line-3"></span>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <!-- ------------------------------@@  --------MOBILE VIEW country part header ENDS HERE------------------------------@@@@@@@@   -->
    <!-- ------------------------------@@  --------MOBILE VIEW MENU part header STARTS HERE------------------------------@@@@@@@@  -->
<div class="headers">
        <div class="slide-out-menu">
            <div class="menu-panels">
                <div class="primary-menu-panel">
                    <ul>
                   
                         <li><button type="button" class="menu-link" data-ref="channel">Product<span class=" float-right icon-angle-4"></span></button></li>
                        
                        <li><button type="button" class="menu-link" data-ref="ai-agent">AI Agents <span class=" float-right icon-angle-4"></span></button></li>
                        
                        <li><button type="button" class="menu-link" data-ref="industries">Industries<span class=" float-right icon-angle-4"></span></button></li>
                             <li><button type="button" class="menu-link" data-ref="resources">Resources <span class=" float-right icon-angle-4"></span></button></li>                       
                       
                        <li><a target="_blank" https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation">Salesforce AppExchange</a></li>
<li><a href="<?php echo get_site_url(); ?>/partner-with-us/">Partners</a></li>   
                        <li><a href="<?php echo get_site_url(); ?>/success-stories/">Success Stories</a></li>
                        <li><button type="button" class="menu-link" data-ref="company">Company<span  class=" float-right icon-angle-4"></span></button></li>
                        <!--           <li>
                     <button type="button" class="menu-link" onclick="location.href='<?php echo get_site_url(); ?>/partner-with-us/' ">Partnership</button>
                  </li> -->
                        <li>
                            <button type="button" class="menu-link" onclick="location.href='<?php echo get_site_url(); ?>/contact-us/' ">Contact Us</button>
                        </li>
                    </ul>
                </div>
                <div class="menu-panel" data-menu="company">
                    <button type="button" class="menu-link menu-header"><span class="float-right icon-angle-back">Back</span></button>
                    <ul>
                        <li><a href="<?php echo get_site_url(); ?>/about-us/">About Us</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/careers/">Careers</a></li>
            <li><button type="button" class="menu-link" data-ref="events">Events<span class="float-right icon-angle-1"></span></button></li>
                        <li><button type="button" class="menu-link" data-ref="news">News<span class="float-right icon-angle-1"></span></button></li>
                    </ul>
                </div>
                <div class="menu-panel" data-menu="channel">
                    <button type="button" class="menu-link menu-header"><span class="float-right icon-angle-back">Back</span></button>
                    <ul>
                         <li><button type="button" class="menu-link" data-ref="core-features">Core Features<span class="float-right icon-angle-4"></span></button></li>
                         
                        <li><button type="button" class="menu-link" data-ref="Channels">Channels<span class="float-right icon-angle-4"></span></button></li>
                        <li><button type="button" class="menu-link" data-ref="Additional Features">Additional Features<span class="float-right icon-angle-4"></span></button>
                        </li>
                        <li><button type="button" class="menu-link" data-ref="Connectivity">Connectivity<span class="float-right icon-angle-4"></span></button></li>
                        <li><button type="button" class="menu-link" data-ref="Fourth">ADD-ONS<span class="float-right icon-angle-4"></span></button></li>
                   <li><button type="button" class="menu-link" data-ref="webinar">CHANNELS ZOHO<span class="float-right icon-angle-4"></span></button></li>     
                    </ul>
                    <div class="menu-panel menu-panel1" data-menu="Additional Features">
                        <button type="button" class="menu-link menu-header">
                            <span class="float-right icon-angle-back">Back</span>
                        </button>
                        <ul>
                            <li><a href="<?php echo get_site_url(); ?>/privacy-by-design/" class="icon-angle_bfd">Privacy By Design</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/automated-messaging/ "> Automated-Messaging</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/itext/"> Itext</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/conversation-manager/"> Conversation-Manager</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/bulk-batch-scheduled-sms-texting/">Bulk-Batch-Scheduled-sms-texting</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/bring-your-own-number/">Bring-your-own-number</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/link-tracking/">Link-tracking</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/drip-campaigns/">Drip-campaigns</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/one-on-one-conversations/">One-on-one-conversations</a> </li>
                            <li><a href="<?php echo get_site_url(); ?>/cti-call-auto-forwarding/">Cti-call-auto-forwarding</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/sticky-sender/">Sticky-sender</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/appointments-and-rescheduling/">Appointments-and-rescheduling</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/multiple-language-support/">Multiple-language-support</a></li>
                        </ul>
                    </div>
                    <div class="menu-panel menu-panel1" data-menu="core-features">
                        <button type="button" class="menu-link menu-header"><span class="float-right icon-angle-back">Back</span></button> 
                        <ul>
                            <li><a href="<?php echo get_site_url(); ?>/salesforce-texting/" class="icon-angle_bf">Salesforce Texting</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/salesforce-chatbot/" class="icon-angle_bf">Salesforce Chatbot</a></li>
                        </ul>
                    </div>
                    <div class="menu-panel menu-panel1" data-menu="Channels">
                        <button type="button" class="menu-link menu-header"> <span class="float-right icon-angle-back">Back</span> </button>
                        <ul>
                            <li><a href="<?php echo get_site_url(); ?>/sms/">Salesforce SMS</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/mms/">Salesforce MMS</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/computer-telephony-integration/">Salesforce Telephony Integration</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/whatsapp/">Salesforce WhatsApp</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/ringless-voicemail/">Salesforce Ringless Voicemail</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/facebook-messenger/">Salesforce Facebook Messenger</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/wechat/">Salesforce WeChat</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/viber/">Salesforce Viber</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/kakao/">Salesforce Kakao</a></li>
                            <li><a href="<?php echo site_url(); ?>/salesforce-zalo/" class="icon-angle_bf">Salesforce Zalo</a></li>

                            <li><a href="<?php echo get_site_url(); ?>/line/">Salesforce Line</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/instagram/">Salesforce Instagram</a></li>
                        </ul>
                    </div>
                    <div class="menu-panel menu-panel1" data-menu="Connectivity">
                        <button type="button" class="menu-link menu-header"><span class="float-right icon-angle-back">Back</span></button>
                        <ul>
                            <li><a href="<?php echo get_site_url(); ?>/shared-short-codes" class="icon-angle_bf">Shared short codes</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/short-codes/" class="icon-angle_bf">Short codes</a></li>
                        </ul>
                    </div>
                    <div class="menu-panel menu-panel1" data-menu="Fourth">
                        <button type="button" class="menu-link menu-header"> <span class="float-right icon-angle-back">Back</span></button>
                        <ul>
                            <li><a href="<?php echo get_site_url(); ?>/digital-engagement-on-steroids-webpage/" class="icon-angle_bf">Digital Engagement On Steroids</a></li>
                            <li><a href="<?php echo site_url(); ?>/marketing-cloud-integration/" class="icon-angle_bf">Marketing Cloud integration</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/verify-the-phone/" class="icon-angle_bf">Verify the Phone</a></li>
                            
                        </ul>
                    </div>
                    <div class="menu-panel menu-panel1" data-menu="webinar">
                        <button type="button" class="menu-link menu-header"> <span class="float-right icon-angle-back">Back</span></button>
                        <ul>
                            <li><a href="<?php echo get_site_url(); ?>/sms-messaging-app-zoho-crm/" class="icon-angle_bf">SMS App for Zoho</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/whatsapp-integration-zoho-crm/" class="icon-angle_bf">Zoho Whatsapp Integration</a></li>
<li><a href="<?php echo get_site_url(); ?>/zoho-crm-ai-powered-chatbot/" class="icon-angle_bf">Chatbot For Zoho</a></li>
                        </ul>
                    </div>
                </div>
                <div class="menu-panel" data-menu="events">
                    <button type="button" class="menu-link menu-header"><span class="float-right icon-angle-back">Back</span></button>
                    <ul>
                        <li><a href=" <?php echo get_site_url(); ?>/360-sms-monsoon-bash/">360 SMS MONSOON BASH</a></li>
                        <li><a href="<?php echo site_url(); ?>/webinar/mission-ai-possible-finale-best-ai-agents/">Webinar</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/previous-webinar/">Our Previous Webinars</a></li>
                 <li><a href="https://360smsapp.com/dreamforce-agentforce-2025/">Deamforce 2025</a></li>
                         <li><a href="<?php echo get_site_url(); ?>/dreamforce-2022/">Dreamforce 2022</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/dreamforce-2019/">Dreamforce 2019</a></li>
                        
                        <li><a href="<?php echo get_site_url(); ?>/salesforce-world-tour-los-angeles-2019/">Salesforce World Tour Los Angeles 2019</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/salesforce-world-tour-london-2019/">Salesforce World Tour London 2019</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/salesforce-tour-sydney/">Salesforce World Tour Sydney 2019</a></li>
                    </ul>
                </div>
                <div class="menu-panel" data-menu="news">
                    <button type="button" class="menu-link menu-header"> <span class="float-right icon-angle-back">Back</span></button>
                    <ul>
                        <li><a href="<?php echo get_site_url(); ?>/360-sms-app-now-enabled-with-appexchange-chat/">App Exchange Chat</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/1-percent-pledge/">1% Pledge</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/we-are-now-salesforce-platinum-partner/">Summit Partner</a></li>
                    </ul>
                </div>
                <div class="menu-panel" data-menu="ai-agent">
                        <button type="button" class="menu-link menu-header"><span
                                class="float-right icon-angle-back">Back</span></button>
                        <ul>
                            <li><a href="<?php echo get_site_url(); ?>/mira-ai-agent-recruitment-tool/">Recruitment Agent</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/aiva-ai-agent-call-coaching-transcription/">Call Transcription Agent</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/ai-connect-live-call-translating-agent/">Call Translation Agent</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/360-llm-ai-chat-assistant/">AI Chatbot</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/automated-metadata-generator-archbuddy-ai/"> Salesforce Metadata Automation</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/conversational-ai-voice-agent/">AI Voice Agent</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/linkedin-lead-parsing-ai-agent/">LinkedIn Lead Parsing</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/pre-sales-document-parsing-ai-agent/">SOW & WBS Generator</a></li>
                        </ul>
                    </div>
                <div class="menu-panel" data-menu="wishlists">
                    <button type="button" class="menu-link menu-header">
                        <span class="float-right icon-angle-back">Back</span>
                    </button>
                    <ul>
                        <li><button type="button" class="menu-link" data-ref="solutions">Solutions<span class="float-right icon-angle-4"></span></button></li>
                        <li><a href="#">Channels</a></li>
                    </ul>
                </div>
<!--  <div class="menu-panel" data-menu="solutions">
               <button type="button" class="menu-link menu-header"><span class="float-right icon-angle-back">Back</span>
               </button>
               <ul>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
               </ul>
            </div> -->
                <div class="menu-panel" data-menu="resources">
                    <button type="button" class="menu-link menu-header"><span class="float-right icon-angle-back">Back</span></button>
                    <ul>
                    <li><a href="<?php echo get_site_url(); ?>/webinar/mission-ai-possible-finale-best-ai-agents/">Webinar</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/manuals">Manuals</a></li>
                        <li><button type="button" class="menu-link" data-ref="documents">Documents<span class="float-right icon-angle-4"></span></button></li>
                        <li><a href="<?php echo site_url(); ?>/texting-for-pros/">Pro Tips</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/blog/">Blogs</a></li>
                        <li>
                            <button type="button" class="menu-link" data-ref="casestudy">Case Study<span class="float-right icon-angle-4"></span></button>
                        </li>
          </ul>
                </div>
                <div class="menu-panel" data-menu="documents">
                    <button type="button" class="menu-link menu-header">
                        <span class="float-right icon-angle-back">Back</span>
                    </button>
                    <ul>
                        <li>
                            <button type="button" class="menu-link" data-ref="coustomization">Customization Guides<span class="float-right icon-angle-4"></span></button>
                        </li>
                        <li>
                            <button type="button" class="menu-link" data-ref="guidlines">Guidelines<span class="float-right icon-angle-4"></span></button>
                        </li>
                     
                        <li>
                            <a href="/release-notes">Release Notes</a>
                        </li>
                        <li>
                            <button type="button" class="menu-link" data-ref="channelwise">SMS Channel-Wise<span class="float-right icon-angle-4"></span></button>
                        </li>
              
                                                
                    </ul>
                </div>
                <div class="menu-panel" data-menu="coustomization">
                    <button type="button" class="menu-link menu-header"><span class="float-right icon-angle-back">Back</span></button>
                    <ul>
                        <li><a href="<?php echo get_site_url(); ?>/360-sms-configuration-user-guide/">360 SMS Configuration &amp; User Guide</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/sending-sms-through-process-builder/">Sending SMS through Process Builder</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/batch-texting-techniques/">Batch Texting Techniques</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/360-sms-email-to-sms-configuration/">360 SMS – Email to SMS Configuration</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/360-sms-pardot-integration-3/">360 SMS Pardot Integration</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/360-email-sync-user-guide/">Email Sync</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/360-file-sync-user-guide/">File Sync</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/360-mass-mailer-user-guide/">Mass mailer</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/360-sms-ai/" class="">360 SMS: AI</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/360-sms-open-api-guide/" class="">Open API</a></li>

                    </ul>
                </div>
                <div class="menu-panel" data-menu="guidlines">
                    <button type="button" class="menu-link menu-header"> <span class="float-right icon-angle-back">Back</span></button>
                    <ul>
                        <li><a href="<?php echo get_site_url(); ?>/how-to-avoid-sending-spam-messages-through-360-sms-app/">Guidelines For Avoiding Spam Messages In 360 SMS App</a></li>
                    </ul>
                </div>
                <div class="menu-panel" data-menu="casestudy">
                    <button type="button" class="menu-link menu-header"> <span class="float-right icon-angle-back">Back</span></button>
                    <ul>
                        <li><a href="<?php echo get_site_url(); ?>/211-san-diego/">211 San Diego</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/mountainside/">Mountainside</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/logistics-industry/">Logistics Industry</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/hospitality-industry/">Hospitality Industry</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/educational-industry/">Educational Industry</a></li>
                    </ul>
                </div>
                <div class="menu-panel" data-menu="channelwise">
                    <button type="button" class="menu-link menu-header"> <span class="float-right icon-angle-back">Back</span></button>
                    <ul class="documents-events2 devsmsinner">
                        <li><a href="<?php echo get_site_url(); ?>/viber-user-guide/">Viber User Guide</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/facebook-user-guide/">Facebook User Guide</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/kakao-talk-user-guide/">Kakao Talk User Guide</a></li>
                    </ul>
                </div>

                <div class="menu-panel" data-menu="industries">
                    <button type="button" class="menu-link menu-header">
                        <span class="float-right icon-angle-back">Back</span>
                    </button>
                    <ul>
                        <li><a href="<?php echo get_site_url(); ?>/education-academics/">Education &amp; Academics</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/finance/">Finance</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/healthcare-wellness/">Healthcare &amp; Wellness</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/non-profit/">Non Profit</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/real-estate/">Real Estate</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/recruitment/">Recruitment</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/legal">Legal</a></li>
                        <li><a href="<?php echo get_site_url(); ?>//internet-service-providers/">ISP</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/mortgage/">Mortgage</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/insurance/">Insurance</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/sales/">Sales</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/service/">Service</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/marketing/">Marketing</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/professional-services/">Professional Services</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------------------------@@  --------MOBILE VIEW MENU part header ENDS HERE------------------------------@@@@@@@@  -->
    <?php
    } else{
      ?>
    <!-- ------------------------------@@  --------desktop view country part header starts here------------------------------@@@@@@@@  -->
    <header id="head" class="top-area-style-default top-area-alignment-center top-area">
        <div class="container">
            <div class="top-header desktoprow">
                <div class="top-header-left">
                    <div class="link d-con">
                        <a href="tel:+1 323 641 4417">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/10/255px-Flag_of_the_United_States.svg-p40ovmwmdvx098zmnerozbu9ngrs21itasgdcv5an4.png"
                                loading="lazy" alt="360 Sms App United States Flag" class="ml-14-6"
                                style="width: 30px; height: 16px;" />
                        </a>
                        <div>
                            <p style="margin-bottom: 0px;"><a href="tel:+1 323 641 4417">+1 323 641 4417</a></p>
                        </div>
                    </div>
                    <div class="link d-con">
                        <a href="tel:+44 740 327 9473">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/10/255px-Flag_of_the_United_Kingdom.svg-p40ox2lqtrvrzswj9j46agsmbnoyte81twc2r30n4w.png"
                                loading="lazy" alt="360 Sms App United Kingdom Flag" class="ml-14-6"
                                style="width: 30px; height: 16px;" />
                        </a>
                        <div>
                            <p style="margin-bottom: 0px;"><a href="tel:+44 740 327 9473">+44 740 327 9473</a></p>
                        </div>
                    </div>
                    <div class="link d-con">
                        <a href="tel:+61 4 8885 6713">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/10/255px-Flag_of_Australia_converted.png"
                                loading="lazy" alt="360 Sms App Australia Flag" style="width: 30px; height: 16px;"
                                class="ml-14-6" />
                        </a>
                        <div>
                            <p style="margin-bottom: 0px;"><a href="tel:+61488853632">+61 48885 3632</a></p>
                        </div>
                    </div>
                    <div class="link d-flex">
                        <a href="tel:+917969292507">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/10/255px-Flag_of_India.png" loading="lazy"
                                alt="360 Sms App India Flag" style="width: 30px; height: 16px; margin-left: 23px;" />
                        </a>
                        <div style="margin-top: 0px;">
                  <p style="margin-bottom: 0px;"><a href="tel:+918527100131">+91 852 710 0131</a></p>
                        </div>
                    </div>
                    <div class="link m-hov-1">
                        <a href="mailto:care@360smsapp.com" class="wrapper-blue-img">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/10/email-1.webp" loading="lazy" title="email" alt="email"
                                style="width: 16px; height: 16px;" /> <span
                                style="margin-top: 7px;">care@360smsapp.com</span>
                        </a>
                    </div>
                    <div class="button2">
                        <a href="<?php echo site_url(); ?>/contact-us/" class="button2" style="
    background-color: #0D4B78;
    border: 1px solid black;
    border-radius: 5px;
    padding: 5px 12px;
    color: white;
">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
 <!-- ------------------------------@@  --------desktop view country part header ends------------------------------@@@@@@@@  -->
<!-- ------------------------------@@  --------DESKTOP VIEW MENU part header STARTS HERE------------------------------@@@@@@@@   -->
    <nav class="nav-101" id="nav-main">
        <div class="container">
            <div class="n-head nav-container" id="custom-nav">
                <div class="icon">
                    <a href="<?php echo site_url(); ?>/"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp" loading="lazy" alt="360 Sms App Logo " /> </a>
                </div>
                <div class="nav-items">
                    <ul>
                    <li class="product items product-nav">
                            <a href="#">PRODUCT</a>
                            <div class="product-events">
                                <div class="d-flex prod-2">
                                    <ul class="w-50" style="margin:0px 10px;">
                                         <h4 style="font-size:14px;">CORE FEATURES</h4>
                                         <li><a href="<?php echo site_url(); ?>/salesforce-texting/" class="icon-angle_bf">Salesforce Texting</a></li>
                                          <li><a href="<?php echo site_url(); ?>/salesforce-chatbot/" class="icon-angle_bf">Salesforce Chatbot</a></li>
                                          
                                        <h4 style="font-size:14px;">CHANNELS SALESFORCE</h4>
                                        <li><a href="<?php echo site_url(); ?>/salesforce-sms/" class="icon-angle_bf">Salesforce SMS</a></li>
                                        <li><a href="<?php echo site_url(); ?>/salesforce-mms/" class="icon-angle_bf">Salesforce MMS</a></li>
                       			        <li><a href="<?php echo site_url(); ?>/salesforce-computer-telephony-integration/" class="icon-angle_bf">Salesforce Telephony Integration</a><button class="buttonnew">NEW</button></li>
                                        <li><a href="<?php echo site_url(); ?>/salesforce-whatsapp/" class="icon-angle_bf">Salesforce WhatsApp</a></li>
                                        <li><a href="<?php echo site_url(); ?>/salesforce-ringless-voicemail/" class="icon-angle_bf">Salesforce Ringless Voicemail</a></li>
                                        <li><a href="<?php echo site_url(); ?>/salesforce-facebook-messenger/" class="icon-angle_bf">Salesforce Facebook Messenger</a></li>
                                        <li><a href="<?php echo site_url(); ?>/salesforce-wechat/" class="icon-angle_bf">Salesforce We Chat</a></li>
                                        <li><a href="<?php echo site_url(); ?>/salesforce-viber/" class="icon-angle_bf">Salesforce Viber</a></li>
                                        <li><a href="<?php echo site_url(); ?>/salesforce-kakao/" class="icon-angle_bf">Salesforce Kakao</a></li>
                                        <li><a href="<?php echo site_url(); ?>/salesforce-zalo/" class="icon-angle_bf">Salesforce Zalo</a></li>

                                        <li><a href="<?php echo site_url(); ?>/salesforce-line/" class="icon-angle_bf">Salesforce Line</a></li>
                                        <li><a href="<?php echo site_url(); ?>/salesforce-instagram/" class="icon-angle_bf">Salesforce Instagram</a></li>
                                        
                                    </ul>
                                    <ul class="w-50" style="margin:0px 10px;">
                                        <h4 style="font-size:14px;">ADDITIONAL FEATURES</h4>
                                        <li><a href="<?php echo site_url(); ?>/privacy-by-design/" class="icon-angle_bf">Privacy By Design</a> </li>
                                        <li><a href="<?php echo site_url(); ?>/automated-messaging/" class="icon-angle_bf">Automated-Messaging</a></li>
                                        <li><a href="<?php echo site_url(); ?>/itext" class="icon-angle_bf">Itext</a></li>
                                        <li><a href="<?php echo site_url(); ?>/conversation-manager/" class="icon-angle_bf">Conversation-Manager</a></li>
                                        <li><a href="<?php echo site_url(); ?>/bulk-batch-scheduled-sms-texting/" class="icon-angle_bf">Bulk-Batch-Scheduled-sms-texting</a></li>
                                        <li><a href="<?php echo site_url(); ?>/bring-your-own-number/" class="icon-angle_bf">Bring-your-own-number</a></li>
                                        <li><a href="<?php echo site_url(); ?>/link-tracking/" class="icon-angle_bf">Link-tracking</a></li>
                                        <li><a href="<?php echo site_url(); ?>/drip-campaigns/" class="icon-angle_bf">Drip-campaigns</a></li>
                                        <li><a href="<?php echo site_url(); ?>/one-on-one-conversations/" class="icon-angle_bf">One-on-one-conversations</a></li>
                                        <li><a href="<?php echo site_url(); ?>/cti-call-auto-forwarding/" class="icon-angle_bf">Cti-call-auto-forwarding</a></li>
                                        <li><a href="<?php echo site_url(); ?>/sticky-sender/" class="icon-angle_bf">Sticky-sender</a></li>
                                        <li><a href="<?php echo site_url(); ?>/appointments-and-rescheduling/" class="icon-angle_bf">Appointments-and-rescheduling</a></li>
                                        <li><a href="<?php echo site_url(); ?>/multiple-language-support/" class="icon-angle_bf">Multiple-language-support</a></li>
                                    </ul>
                                    <ul class="w-50" style="margin:0px 10px;">
                                        <h4 style="font-size:14px;">CONNECTIVITY</h4>
                                        <li><a href="<?php echo get_site_url(); ?>/shared-short-codes" class="icon-angle_bf">Shared short codes</a></li>
                                        <li><a href="<?php echo get_site_url(); ?>/short-codes/" class="icon-angle_bf">Short codes</a></li>
                                        <h4 style="font-size:14px;">ADD-ONS</h4>

                                        <li><a href="<?php echo get_site_url(); ?>/digital-engagement-on-steroids-webpage/" class="icon-angle_bf">Digital Engagement On Steroids</a></li>
                                        <li><a href="<?php echo site_url(); ?>/marketing-cloud-integration/" class="icon-angle_bf">Marketing Cloud integration</a></li>
                                        <li><a href="<?php echo get_site_url(); ?>/verify-the-phone/" class="icon-angle_bf">Verify the Phone</a></li>

<h4 style="font-size:14px;">CHANNELS ZOHO</h4>
                                        <li><a href="<?php echo site_url(); ?>/sms-messaging-app-zoho-crm/" class="icon-angle_bf">SMS App For Zoho</a><button class="buttonnew">NEW</button></li>
                                         <li><a href="<?php echo site_url(); ?>/whatsapp-integration-zoho-crm/" class="icon-angle_bf">Zoho Whatsapp Integration</a><button class="buttonnew">NEW</button></li>
<li><a href="<?php echo get_site_url(); ?>/zoho-crm-ai-powered-chatbot/" class="icon-angle_bf">Chatbot For Zoho</a><button class="buttonnew">NEW</button></li>
                                    </ul>
                                   
 
                                </div>
                            </div>
                        </li>
                        <!-- AI Agent Added Code -->
                            <li class="items document">
                                <a href="#">AI AGENTS</a>
                                <div class="documents-con">
                                    <ul class="documents-events">
                                        <li><a href="<?php echo get_site_url(); ?>/mira-ai-agent-recruitment-tool/">Recruitment Agent</a></li>
                                            <li><a href="<?php echo get_site_url(); ?>/aiva-ai-agent-call-coaching-transcription/"> Call Transcription Agent</a></li>
                                            <li><a href="<?php echo get_site_url(); ?>/ai-connect-live-call-translating-agent/">Call Translation Agent</a></li>
                                            <li><a href="<?php echo get_site_url(); ?>/360-llm-ai-chat-assistant/">AI Chatbot</a></li>
                                            <li><a href="<?php echo get_site_url(); ?>/automated-metadata-generator-archbuddy-ai/"> Salesforce Metadata Automation</a></li>
                                            <li><a href="<?php echo get_site_url(); ?>/conversational-ai-voice-agent/">AI Voice Agent</a></li>
                                            <li><a href="<?php echo get_site_url(); ?>/linkedin-lead-parsing-ai-agent/">LinkedIn Lead Parsing</a></li>
                                            <li><a href="<?php echo get_site_url(); ?>/pre-sales-document-parsing-ai-agent/">SOW & WBS Generator</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- END AI Agent Added Code -->

                        <li class="product items">
                            <a href="#">INDUSTRY</a>
                            <div class="product-events" id="custom_industry">
                                <div class="d-flex prod-2">
                                    <ul style="width: 34%;">
                                        <li><a href="<?php echo get_site_url(); ?>/education-academics/" class="icon-angle_bf">Education & Academics</a></li>
                                        <li><a href="<?php echo get_site_url(); ?>/finance/" class="icon-angle_bf">Finance</a></li>
                                        <li><a href="<?php echo get_site_url(); ?>/healthcare-wellness/" class="icon-angle_bf">Healthcare & Wellness</a></li>
                                        <li><a href="<?php echo get_site_url(); ?>/non-profit/" class="icon-angle_bf">Non Profit</a></li>
                                        <li><a href="<?php echo get_site_url(); ?>/internet-service-providers/" class="icon-angle_bf">ISP</a></li>
                                    </ul>
                                    <ul style="width: 33%;">
                                        <li><a href="<?php echo get_site_url(); ?>/mortgage/" class="icon-angle_bf">Mortgage</a></li>
                                        <li><a href="<?php echo get_site_url(); ?>/insurance/" class="icon-angle_bf">Insurance</a></li>
                                        <li><a href="<?php echo get_site_url(); ?>/real-estate/" class="icon-angle_bf">Real Estate</a></li>
                                        <li><a href="<?php echo get_site_url(); ?>/recruitment/" class="icon-angle_bf">Recruitment</a></li>
                                        <li><a href="<?php echo get_site_url(); ?>/legal/" class="icon-angle_bf">Legal</a></li>
                                    </ul>
                                    <ul style="width: 33%;">
                                        <li><a href="<?php echo get_site_url(); ?>/sales/" class="icon-angle_bf">Sales</a></li>
                                        <li><a href="<?php echo get_site_url(); ?>/service/" class="icon-angle_bf">Service</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/marketing/" class="icon-angle_bf">Marketing</a></li>
                                        <li><a href="<?php echo get_site_url(); ?>/professional-services/" class="icon-angle_bf">Professional Services</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>


                        <!--  <li class="items item-home boldmenu"><a target="_blank" href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation"> SALESFORCE APPEXCHANGE. </a></li> -->
<li class="items item-home"><a href="<?php echo get_site_url(); ?>/partner-with-us/">PARTNERS</a></li>
                        <li class="items item-home"><a href="<?php echo site_url(); ?>/success-stories/">SUCCESS STORIES</a></li>


                        <li class="items document">
                            <a href="#">RESOURCES</a>
                            <div class="documents-con">
                                <ul class="documents-events">
                                 <li><a href="<?php echo get_site_url(); ?>/webinar/mission-ai-possible-finale-best-ai-agents/">Webinar</a></li>
                                    <li><a href="<?php echo get_site_url(); ?>/manuals/">Manuals</a></li>
                                    <li class="show-doc">
                                        <a href="#" class="icon-angle">Documents</a>
                                        <div class="documents-items3">
                                            <ul class="documents-events2">
                                                <li class="show-doc-1">
                                                    <a href="#" class="icon-angle-1 ">Customization Guides</a>
                          <div class="documents-items11">
                                                        <ul class="documents-events2">
                                                            <li><a href="<?php echo get_site_url(); ?>/360-sms-configuration-user-guide/">360 SMS Configuration and User Guide</a></li>
                                                            <li><a href="<?php echo get_site_url(); ?>/sending-sms-through-process-builder/">Sending SMS through Process Builder</a></li>
                                                            <li><a href="<?php echo get_site_url(); ?>/batch-texting-techniques/">Batch Texting Techniques</a></li>
                                                            <li><a href="<?php echo get_site_url(); ?>/360-sms-email-to-sms-configuration/">360 SMS-Email to SMS Configuration</a></li>
                                                            <li><a href="<?php echo get_site_url(); ?>/360-sms-pardot-integration-3/">360 SMS Pardot Integration</a></li>
                                                            <li><a href="<?php echo get_site_url(); ?>/360-email-sync-user-guide/">Email Sync</a></li>
                                                            <li><a href="<?php echo get_site_url(); ?>/360-file-sync-user-guide/">File Sync</a></li>
                                                            <li><a href="<?php echo get_site_url(); ?>/360-mass-mailer-user-guide/">Mass mailer</a></li>
                                                            <li><a href="<?php echo get_site_url(); ?>/360-sms-ai/" class="">360 SMS: AI</a></li>
                                                            <li><a href="<?php echo get_site_url(); ?>/360-sms-open-api-guide/">Open API</a></li>

                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="show-doc-2 ">
                                                    <a href="#" class="icon-angle-2 ">Guidelines</a>
                          <div class="documents-items22">
                                                        <ul class="documents-events2">
                                                            <li><a href="<?php echo get_site_url(); ?>/how-to-avoid-sending-spam-messages-through-360-sms-app/">Guidelines
                                                                    For Avoiding Spam Messages In 360 SMS App</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                
                                                <li>
                                                    <a href="/release-notes">Release Notes</a>
                                                </li>
                                                
                                                <li class="show-doc-3 devsms">
                                                    <a href="#" class="icon-angle-3">SMS Channel-Wise</a>
                          <div class="documents-items33">
                                                        <ul class="documents-events2 devsmsinner">
                                                            <li><a href="<?php echo get_site_url(); ?>/viber-user-guide/">Viber User Guide</a></li>
                                                            <li><a href="<?php echo get_site_url(); ?>/facebook-user-guide/">Facebook User Guide</a></li>
                                                            <li><a href="<?php echo get_site_url(); ?>/kakao-talk-user-guide/">Kakao Talk User Guide</a></li>
                                                       </ul>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="<?php echo site_url(); ?>/texting-for-pros/">Pro Tips</a></li>
																

                                    <li><a href="<?php echo get_site_url(); ?>/blog/">Blogs</a></li>
                                    <li class="show-doc-3">
                                                    <a href="#" class="icon-angle-3">Case Study</a>
                          <div class="documents-items33">
                                                        <ul class="documents-events2">
                                                            <li><a href="<?php echo get_site_url(); ?>/211-san-diego/">211 San Diego</a></li>
                                                            <li><a href="<?php echo get_site_url(); ?>/mountainside/">Mountainside</a></li>
                                                            <li><a href="<?php echo get_site_url(); ?>/logistics-industry/">Logistics Industry</a></li>
                                                            <li><a href="<?php echo get_site_url(); ?>/hospitality-industry/">Hospitality Industry</a></li>
                                                            <li><a href="<?php echo get_site_url(); ?>/educational-industry/">Educational Industry</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
											
									
									
                </ul>
                            </div>
                        </li>



                        <div class="inner-events">
                            <ul>
                                <li><a href="<?php echo get_site_url(); ?>/education-academics/">Education & Academics</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/finance/">Finance</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/healthcare-wellness/">Healthcare & Wellness</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/non-profit/">Non Profit</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/real-estate/">Real Estate</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/recruitment/">Recruitment</a></li>
                            </ul>
                        </div>
                        

                       


            <li class="items document">
                            <a href="#">COMPANY</a>
                            <div class="documents-con documents-con1" id="company-cust">
                                <ul class="documents-events">
                                    <li><a href="<?php echo get_site_url(); ?>/about-us/">About Us</a></li>
                                    <li><a href="<?php echo get_site_url(); ?>/careers/">Careers</a></li>
<li class="eventsicon">
                                        <a href="#" class="icon-angle-4">Events</a>
                                        <div class="documents-items3 documents-items4">
                                            <ul class="documents-events2">
                                                <li><a href=" <?php echo get_site_url(); ?>/360-sms-monsoon-bash/">360 SMS MONSOON BASH</a></li>
                                                <li><a href="<?php echo site_url(); ?>/webinar/mission-ai-possible-finale-best-ai-agents/">WEBINAR</a></li>
                                                <li><a href="<?php echo site_url(); ?>/previous-webinar/">OUR PREVIOUS WEBINAR</a></li>
       <li><a href="https://360smsapp.com/dreamforce-agentforce-2025/">DREAMFORCE 2025 </a></li>                            
                                                 <li><a href="<?php echo site_url(); ?>/dreamforce-2022/">DREAMFORCE 2022</a></li>
                                                <li><a href="<?php echo site_url(); ?>/dreamforce-2019/">DREAMFORCE 2019</a></li>
                                                <li><a href="<?php echo site_url(); ?>/salesforce-world-tour-los-angeles-2019/">SALESFORCE WORLD TOUR LOS ANGELS 2019</a></li>
                                                <li><a href="<?php echo site_url(); ?>/salesforce-world-tour-london-2019/">SALESFORCE WORLD TOUR LONDON 2019</a></li>
                                                <li><a href="<?php echo site_url(); ?>/salesforce-tour-sydney/">SALESFORCE WORLD TOUR SYDNEY 2019</a></li>
                                            </ul>
                                        </div>
                                    </li>
                        <!--            <li class="custom_dropdown custom_dropdownss">-->
                        <!--                <a href="#" class="icon-angle-5">News</a>-->
                        <!--                <div class="documents-items3 documents-items4">-->
                        <!--                    <ul class="documents-events2">-->
                        <!--<li><a href="<?php echo site_url(); ?>/360-sms-app-now-enabled-with-appexchange-chat/">AppExchange Chat</a></li>-->
                        <!--                        <li><a href="<?php echo get_site_url(); ?>/1-percent-pledge/">1% Pledge</a></li>-->
                        <!--                        <li><a href="<?php echo get_site_url(); ?>/we-are-now-salesforce-platinum-partner/">Summit Partner</a></li>-->
                        <!--                    </ul>-->
                        <!--                </div>-->
                        <!--            </li>-->
      <li class="show-doc-2 custom_dropdown custom_dropdownss"> 
                                                    <a href="#" class="icon-angle-2 customcls">News</a>
                          <div class="documents-items22 documents-items22sss">
                                                        <ul class="documents-events2">
                        <li><a href="<?php echo site_url(); ?>/360-sms-app-now-enabled-with-appexchange-chat/">AppExchange Chat</a></li>
                                                <li><a href="<?php echo get_site_url(); ?>/1-percent-pledge/">1% Pledge</a></li>
                                                <li><a href="<?php echo get_site_url(); ?>/we-are-now-salesforce-platinum-partner/">Summit Partner</a></li>
                                            </ul>
                                                    </div>
                                                </li>
                                    <li><a href="<?php echo site_url(); ?>/contact-us/">Contact Us</a></li>
                                </ul>
                            </div>
                        </li>
                        <!--           <li class="items item-home"><a href="<?php echo site_url(); ?>/partner-with-us/">PARTNERSHIP</a></li> -->






                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <?php
    }
  ?>
<!--------------------------------TOP HEADER SECTION END-------------------------------->
<!--------------------------------NAVIGATION BAR START-------------------------------->
<!-- ------------------------------@@  --------DESKTOP VIEW MENU part header ENDS HERE------------------------------@@@@@@@@   -->
<!--------------------------------NAVIGATION BAR START END-------------------------------->
<!-----------------------------MENU BAR NAV CONTENT START-------------------------------->
 <!-----------------------------MENU BAR NAV CONTENT END------------------------------>
</section>
<?php
if (is_front_page()):
?>
<script src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/jquery2.min.js"></script>
<?php
else:
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.js"
    integrity="sha512-sAHYBRXSgMOV2axInO6rUzuKKM5SkItFLlLHQ8YjRD+FBwowtATOs4njP9oim3/MzyAGrB52SLDjpAOLcOT9TA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/jquery2.min.js"></script>
<?php if ( is_front_page() ) {
   if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) {
    /* Display and echo mobile specific stuff here */
}else{
     ?>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
<?php
   }
} else {
    ?>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
<?php
} ?>
<script>
    $('body').on('click tap', 'button#menu-toggle', function () {
        if ($('.headers').hasClass('active')) {
            $('.headers').removeClass('active');
        } else {
            $('.headers').addClass('active');
        }

    });

    $('body').click(function (e) {
        if (!$(e.target).is('button#menu-toggle')) {
            $('.headers').removeClass('active');
            //new change 
            $('.primary-menu-panel').show();
            $('div.menu-panel').removeClass('is-active');
        }
    });

    $('div.slide-out-menu').click(function (e) {
        e.stopPropagation();
    });

    $('button.menu-link').click(function () {
        $('div.menu-panel').removeClass('is-active');
        $('.primary-menu-panel').show(); // new change
        if ($(this).data('ref')) {
            var targetRef = $(this).data('ref');
            var $target = $('div.menu-panel[data-menu="' + targetRef + '"]');
            $('.primary-menu-panel').hide();// new change
            $target.addClass('is-active');
        }
    });
</script>
<script>
    $(function () {

        $('.dropdown > .caption').on('click', function () {
            $(this).parent().toggleClass('open');
        });

        $('.dropdown > .list > .item').on('click', function () {
            $('.dropdown > .list > .item').removeClass('selected');
            $(this).addClass('selected').parent().parent().removeClass('open').children('.caption').text($(this).text());
        });

        $(document).on('keyup', function (evt) {
            if ((evt.keyCode || evt.which) === 27) {
                $('.dropdown').removeClass('open');
            }
        });

        $(document).on('click', function (evt) {
            if ($(evt.target).closest(".dropdown > .caption").length === 0) {
                $('.dropdown').removeClass('open');
            }
        });

    });
</script>
<script>
    const Menubar = document.getElementById("menu-bar");
    const MenuContent = document.getElementById("menu-content");
  /*   Menubar.addEventListener("click", function () {
        if (MenuContent.style.display == "block") {
            MenuContent.style.display = "none";
        } else {
            MenuContent.style.display = "block"
        }
    })*/
    const Navtop = document.getElementById("head")
    const Nav = document.getElementById("nav-main")
    const navheight = Navtop.getBoundingClientRect().height;
    //console.log(navheight);
    window.addEventListener('scroll', function () {
        const scrollheight = window.pageYOffset;
        // console.log(scrollheight);
 
        if (scrollheight > navheight) {
            Nav.classList.add('nav-fixed');
            Nav.classList.remove('nav-101');
             Navtop.classList.add('nav-top-fixed');
        }
        else {
            Nav.classList.remove('nav-fixed');
            Nav.classList.add('nav-101');
             Navtop.classList.remove('nav-top-fixed');
        }
    })
</script>
<?php

endif;
?>
<style>a.icon-angle-2.customcls:after {
    position: absolute;
    width: 9px;
    height: 16px;
    top: 74%;
    font-weight: normal;
    font-family: 'thegem-icons';
    content: '\e601';
    font-size: 16px;
    line-height: 16px;
    right: 16px;
} .documents-items22sss {
    position: absolute;
    transform: translate(-110%, -12%);
}</style>


	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/all.min.css">