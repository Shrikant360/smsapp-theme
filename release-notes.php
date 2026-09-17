 
<?php 
/* Template Name: Release Notes */

get_header(); ?>

<style>
body{font-family: 'Source Sans Pro', sans-serif !important;}
#main{position: unset;}
.modal-dialog {top:20%;}
button.close {color: #f00;
    opacity: 1;
  
    font-size: 25px;
    
}
 span.figDescription {
    font-style: italic;
    text-align: center !important;
    display: block;
    align-items: center;
}
span.img_Sec img {
    display: block;
    max-width: 100%;
}
ul.subpoints {
    list-style: disc !important;
    padding-left: 25px !important;
}
#page-title h1 {color:#fff;}
.releasenotehead{
    /* text-align: center; */
    text-transform: none;
    background: #f2f2f2;
    line-height: 20px;
    border-radius: 5px;
    font-size: 22px !important;
    padding: 10px;
    font-weight: 700 !important;
    font-family: 'Montserrat' !important;
	margin:0 0 20px 0;
}
h5{
    font-size: 20px !important;
    font-weight: 700 !important;
    font-family: 'Montserrat' !important;
}
p.notFound {
    font-size: 20px;
}
input#searchF {
    padding: 6px 10px;
}
.mobiledropDownSection{
    display:none;
}
 .toggle-box-region {
  padding: 0px 5px !important;
}
button.tablinks.cust-button {
    text-align: left;
}
.toggle-box-content.toggle-box-region.tog-box {
    margin-bottom: 10px;
}
.custom-banner{
    background-image: url(<?php echo get_stylesheet_directory_uri();?>/img/search-bg.png);
    padding: 20px;
    background-size: cover;
}
.toggle-box-content label {
    padding-right: 5px;
}
.toggle-box-content.tog-box {
            border: 1px solid #999999;
    padding-right: 20px;
    box-shadow: rgb(0 0 0 / 16%) 0px 1px 4px;
    border-radius: 5px;
}
.toggle-box-content ul li a:hover{
    color:#1c7cbf;
}
label.bluetext a{
    color:#1c7cbf !important;
}
.toggle-box-region label{
    color: #2479b6;
    font-weight: 700;
}
.toggle-box-content.toggle-box-region.tog-box {
    border: 0px !important;
    padding-right: 20px;
    /* box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;*/
    box-shadow: none; 
    border-radius: 5px;
}
.side-border .vc_custom_heading.appheading {
    /*text-align: center;*/
    /*background: #f2f2f2;*/
    margin: 10px;
    padding: 5px;
        margin-top: 15px;
}
.toggle-box-content li {
    margin: 10px 0px 0px 20px;
    list-style: square;
}
.toggle-box + label:after,.toggle-box.cust-text + label:after,.toggle-box.cust-text1 + label:after,.toggle-box.cust-text2 + label:after{
    color: #2196f3 !important;
    content: "\f055" !important;
}
 .toggle-box.cust-text1 + label:after{
        right: -11px !important;
}
.toggle-box:checked + label:after {
    content: "\f056" !important;
    color: #f34235 !important;
}
.seperateColumn2.wpb_column.vc_column_container.vc_col-sm-8 {
   
    margin-top: 15px;
}
.seperateColumn2 .vc_column-inner {
    padding-top: 20px !important;
}
.headerdesign {
    background: #f2f2f2;
    text-align: center;
    text-transform:capitalize;
} 
.cust_mar.seperateColumn2 .toggle-box + label:after,.cust_mar.seperateColumn2 .toggle-box.cust-text + label:after,.cust_mar.seperateColumn2 .toggle-box.cust-text1 + label:after,.cust_mar.seperateColumn2 .toggle-box.cust-text2 + label:after{
    color: #f34235 !important;
    content: "\f13a" !important;
}

.cust_mar.seperateColumn2 .toggle-box:checked + label:after{
   content: "\f139" !important; 
}
h2{
    font-size: 14px !important;
    font-family: "Freight San Font" !important;
    font-weight: 300 !important;
}
.widget.widget_search form {
    border-radius: 3px;
    overflow: hidden;
    width: 100%;
    /* margin-left: 10%; */
    margin: 0 auto;
}
/*.custom-banner{*/
/*    height:200px;*/
/*}*/
.toggle-box-content li {
    margin: 7px 0px 0px 25px !important;
}
.cust-text a{
     color: black !important;
       font-weight: 600;
}
.cus_font{
   color:#3c3950 !important;
   font-weight: 600;
}
.color-text{
    color:#3c3950;
}
.searchresult{
    margin: 1px 0px 0 22%;
    background-color: #f4f6f7;
    width: 56%;
}
.searchresult li{
        padding: 8px 0px 8px 0;
}

.cust-button{
    background-color: white;
    border: 0px;
    color: #313c44;
}
div#sticky.stick {
        width: 260px !important;
    height: 40vh !important;

}
div#page-title {
  margin-bottom: 30px;
}
.mobile-dropdown option {
  font-family: 'Source Sans Pro', sans-serif !important;
  font-size: 14px;
}
	
@media only screen and (max-width: 1024px){
.custom-banner{
    margin-top:5%;
}}
@media screen and (min-device-width: 360px) and (max-device-width:600px){

    div#sticky.stick {
        position: relative !important;
        width: 100% !important;
        height:22vh;
    }
   
}
@media only screen and (max-width: 425px){
    .content-custom{
     margin-top:42px !important;   

    }
}
@media only screen and (max-width: 320px){

    .stick {
        position: relative !important;
    }

}
@media only screen and (max-width: 375px){

    .stick {
        position: relative !important;
    }
    .cust_mar{
        margin-top:30px !important;  
    }

}
@media screen and (min-device-width: 1420px) and (max-device-width:1600px){
    .toggle-custom-width{
        width:83%;
    }
}
@media screen and (min-device-width: 320px) and (max-device-width: 600px){

   div#sticky.stick {
    width: 100%;
    height: 120px !important;
    overflow: auto !important;
}
   .stick1{
        position: relative !important;
    }
}

  @media only screen and (max-width: 425px){
        nav#nav-main .icon img {
            /*width: 175px !important;*/
            height: 43px !important;
        }
        .widget.widget_search form {width:90%;}
  }
  @media (max-width: 750px){
        .call-num {
            display: flex;
        }
        .block-content.no-bottom-margin.no-top-margin>div>.row>div {
            padding: 0;
        }
        #footer-menu {
            display: inline-block !important;
        }
        #wrapper {
            margin: unset !important;
        }
        #wrapper .sidebar>div {
            padding-left: 10px;
            padding-right: 10px;
        }
        #wrapper .sidebar>div .appheading {
            text-align: center !important;
        }
  }
  @media (max-width: 991px) and (min-width:768px){
      .seperateColumn2.wpb_column.vc_column_container.vc_col-sm-8 {
            margin-top: 38px;
        }
        .doc-cont>div>.vc_column-inner {
            padding-left: 0 !important;
            padding-right: 25px;
        }
  }
  @media (max-width: 1020px) and (min-width: 750px){
        .call-num {
            display: flex;
        }
        #wrapper {
            padding: 0 20px;
        }
  }
  #wrapper .sidebar>div .appheading {
        text-align: center !important;
    }
    
    
    
.toggle-box.cust-text + label:before {
    position: absolute;
    font-family: FontAwesome;
    top: 0.3em;
    right: 5px;
    color: #3574f3 !important;
    content: "\f13a" !important;
    font-size:18px;
}
.cust-button.active {
    background-color: #f6f6f6;
}

.cust-button {
    width: 96%;
    text-align: left;
    margin-left: 5px;
    padding: 5px;
}

.toggle-box-region label {
    color: #2c77ae;
    font-size:18px;
    font-family:'Source Sans Pro', sans-serif;
}
.activebox .toggle-box.cust-text + label:before {
    transform: rotate(180deg);
}
.subpoints>li {
    /*margin-left: 0 !important;*/
        margin-left: 30px !important;
    list-style-type: circle;
}
.activebox {
    background-color: #f8f8f8 !important;
    border: none !important;
    box-shadow: none !important;
    border-radius: 5px !important;
    padding-top: 10px !important;
    padding-bottom: 10px !important;
}
.pdf-dwnld a {
    border: 1px solid #f0483f;
    padding: 0px 30px;
    box-shadow: 0 0 5px #9d5d59;
}

.cust_mar.seperateColumn2>div>div.wpb_wrapper h1.releasenotehead {
    margin-bottom: 15px;
}
.seperateColumn2 .vc_column-inner {
    padding: 0 !important;
}
.border-des {
    border: 1px #b3b3bb  solid;
    padding: 30px 20px;
}

@media(max-width:767px){
   .mobiledropDownSection{
       display:block;
   }
    div#searchSection {
    margin-top: -35px;
}
.mobile-dropdown {
    width: 100% !important;
    margin: 0 !important;
    box-shadow: 0 0 5px 0 #9f9a9a;
}
.doc-cont>div>div {
    padding-top: 0 !important;
}
.doc-cont>div {
    margin-top: 0;
}
.cust_mar {
    margin-top: 20px !important;
}
.toggle-box + label {
    padding-right: 20px !important;
}
#wrapper .vc_col-sm-3>div {
    padding: 0;
}
}

span.img_Sec img{
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.modal-backdrop{ } 

 .post_outer.show {
    display: block;
    }
   .post_outer {
    position: fixed;
    background: rgba(0,0,0,0.5);
    z-index: 999999999;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    border-radius: 4px;
    display: none;
}
    .post_loader.show {
    display: block;
    position: absolute;
    z-index: 1001;
    opacity: 1;
    left: 50%;
    bottom: 0;
    right: 0;
    top: 50%;
    border: 8px solid #f3f3f3;
    border-radius: 50%;
    border-top: 8px solid #3498db;
    width: 40px;
    height: 40px;
    -webkit-animation: spins 2s linear infinite; / Safari /
    animation: spins 2s linear infinite;
    }
    / Safari /
    @-webkit-keyframes spins {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }
    
    @keyframes spins {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

</style>

 <div class="post_outer"><span class="post_loader show"></span></div>

<div id="main-content" class="main-content">


	
<div class="block-content no-bottom-margin no-top-margin">

		<div class="panel row">

			<div class="panel-center col-xs-12">
				<article class="page type-page status-publish">
					<div class="entry-content post-content">
						<div id="page-title" class="page-title-block page-title-alignment-center page-title-style-1 custom-banner" style="padding-top: 80px;padding-bottom: 80px;">
						        <div class="container">
						            <div class="page-title-title" style="">
						                    <h1 style=""> <?php the_title();?></h1>
						            </div>
						        </div>
						</div>




<div class="container">   

<div class="sidebar wpb_column vc_column_container vc_col-sm-3">

   <style>
.toggle-box + label:after{
  display: none;
}
</style>
<div class="desktopSection">
<div class="toggle-box-region" id="sticky">
<div class="side-border">
<div class="vc_custom_heading appheading"><?php echo do_shortcode("[releaseNotes_form]");?></div>

<!--1.271------------------------------------------------------------------------------------------->

<input data-id="version_seven_one" class="toggle-box matchingDrop" id="toggleId-71" type="checkbox" />
<label data-id="version_seven_one" for="toggleId-71"><button class="tablinks cust-button" onclick="openPage(event, 'version_seven_one')" id="defaultOpen">Release Note 1.271</button></label>

<!--1.270------------------------------------------------------------------------------------------->


<input data-id="version_seven_zero" class="toggle-box matchingDrop" id="toggleId-70" type="checkbox" />
<label data-id="version_seven_zero" for="toggleId-70"><button class="tablinks cust-button" onclick="openPage(event, 'version_seven_zero')" id="defaultOpen">Release Note 1.270</button></label>

<!--1.267------------------------------------------------------------------------------------------->


<input data-id="version_six_seven" class="toggle-box matchingDrop" id="toggleId-67" type="checkbox" />
<label data-id="version_six_seven" for="toggleId-67"><button class="tablinks cust-button" onclick="openPage(event, 'version_six_seven')" id="defaultOpen">Release Note 1.267</button></label>

<!--1.266------------------------------------------------------------------------------------------->


<input data-id="version_six_six" class="toggle-box matchingDrop" id="toggleId-6661" type="checkbox" />
<label data-id="version_six_six" for="toggleId-6661"><button class="tablinks cust-button" onclick="openPage(event, 'version_six_six')" id="defaultOpen">Release Note 1.266</button></label>

<!--1.259------------------------------------------------------------------------------------------->

<input data-id="version_five_nine" class="toggle-box matchingDrop" id="toggleId-59" type="checkbox" />
<label data-id="version_five_nine" for="toggleId-59"><button class="tablinks cust-button" onclick="openPage(event, 'version_five_nine')" id="defaultOpen">Release Note 1.259</button></label>

<!--1.254------------------------------------------------------------------------------------------->

<input data-id="version_five_four" class="toggle-box matchingDrop" id="toggleId-54" type="checkbox" />
<label data-id="version_five_four" for="toggleId-54"><button class="tablinks cust-button" onclick="openPage(event, 'version_five_four')" id="defaultOpen">Release Note 1.254</button></label>

<!--1.253------------------------------------------------------------------------------------------->

<input data-id="version_five" class="toggle-box matchingDrop" id="toggleId-51" type="checkbox" />
<label data-id="version_five" for="toggleId-51"><button class="tablinks cust-button" onclick="openPage(event, 'version_five')" id="defaultOpen">Release Note 1.253</button></label>

<!--1.251------------------------------------------------------------------------------------------->

<input data-id="version_five_one" class="toggle-box matchingDrop" id="toggleId-51" type="checkbox" />
<label data-id="version_five_one" for="toggleId-51"><button class="tablinks cust-button" onclick="openPage(event, 'version_five_one')" id="defaultOpen">Release Note 1.251</button></label>

<!--1.246------------------------------------------------------------------------------------------->

<input data-id="version_four_six" class="toggle-box matchingDrop" id="toggleId-46" type="checkbox" />
<label data-id="version_four_six" for="toggleId-46"><button class="tablinks cust-button" onclick="openPage(event, 'version_four_six')" id="defaultOpen">Release Note 1.246</button></label>


<!--1.242------------------------------------------------------------------------------------------->

<input data-id="version_four_two" class="toggle-box matchingDrop" id="toggleId-42" type="checkbox" />
<label data-id="version_four_two" for="toggleId-42"><button class="tablinks cust-button active" onclick="openPage(event, 'version_four_two')" id="defaultOpen">Release Note 1.242</button></label>

 
      <!--------------------------------stickysender----------------------------------------------------------------->

   </div>
</div>
</div> 
<style>
@media (max-width: 767px) {
 .desktopSection{
display:none;
}
  .mobile-dropdown {
    display: block;
    margin: 20px;
    padding: 10px;
    width: calc(100% - 40px);
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    color: #333;
    background-color: #fff;
  }
}
</style>  
<div class="mobiledropDownSection">
<select class="mobile-dropdown" placeholder="Select Release Notes">
<option value="version_seven_one">Release Note 1.271</option>
<option value="version_seven_zero">Release Note 1.270</option>
<option value="version_six_seven">Release Note 1.267</option>
<option value="version_six_six">Release Note 1.266</option>
<option value="version_five_nine">Release Note 1.259</option>
<option value="version_five_four">Release Note 1.254</option>
<option value="version_five">Release Note 1.253</option>
<option value="version_five_one">Release Note 1.251</option>
<option value="version_four_six">Release Note 1.246</option>
<option value="version_four_two">Release Note 1.242</option>
</select>
</div>
<script>
$(document).ready(function() {
var dropdown = $('.mobile-dropdown');
var toggleBoxes = $('div.tabcontent');
dropdown.on('change', function() {
  toggleBoxes.each(function() {
    if ($(this).attr('id') === dropdown.val()) {
       // alert($(this).attr('id') + "d" + dropdown.val());
        $('.tabcontent').css('display','none');
        $(this).css('display','block');
        
        
    } 
  });
});
});

</script>
</div>


<div class="cust_mar seperateColumn2 wpb_column vc_column_container vc_col-sm-9">
    
    <div id="sectoggleboxing">
<div id="noResults" style="display:none"></div>
<div id="toggleboxing">
<div id="sectoggleboxing">
<div id="noResults" style="display:none"></div>
<div id="toggleboxing">
<div id="i-search" class="tabcontent" style="display:none;">

      <h2 class="releasenotehead">Search For: <span id="servalue"></span></h2>
      <div id="searchNotfound">Nothing found
      </div>

</div>
<!------------------------1.242---------------------------------------->
<div id="version_four_two" class="tabcontent" style="display:none;">
    <div class="border-des">
<h2 class="releasenotehead">Release Notes- 1.242 <a data-toggle="modal" data-target="#myModal" href="<?php echo get_stylesheet_directory_uri();?>/images/release-note/Release Notes1.242(Summary).pdf" class="downloadPDF" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/images/pdf-icon.png" width="30px"></a></h2>
<p class="notFound" style="display:none">No content found related to Release Notes- 1.242</p>
   <h5>New Feature:</h5>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r0242" type="checkbox" />
      <label for="toggleId-r0242">Read Receipt for SpeedBoosting</label>
      <div class="toggle-box-content">
         <ul>
            <li>Users can now check whether their outgoing WhatsApp message has been read or not in the Outgoing SMS History through the Status and Read fields.</li>
            <li><strong>“Delivered” Checkbox field:</strong> When enabled, outgoing messages will display a 'delivered' sign (double tick) below the SMS. When disabled, users will not be able to see any delivery confirmation</li>
            <li><strong>“Read” Checkbox field:</strong> When enabled, outgoing messages will display a'read' sign (with'read' written below the outgoing message). When disabled, the user will not be able to see any 'read' sign.</li>
         </ul>
         <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/SMS-History.png"> </span>

      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r2242" type="checkbox" />
      <label for="toggleId-r2242">Read Receipt for WhatsApp outgoing</label>
      <div class="toggle-box-content">
      <p>When you send a WhatsApp message, you will see a ‘Read’ below your message in the Conversation View after it is read.</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Read-receipt.png"> </span>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r3242" type="checkbox" />
      <label for="toggleId-r3242">User Name Display</label>
      <div class="toggle-box-content">
      <p>The first and last name of the user will be displayed beside “Generated By” or “Last Setup done by” on the SMS setup page.</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/SMS-Composing-Utility.png"> </span>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r4242" type="checkbox" />
      <label for="toggleId-r4242">Field Mapping Setup for New Record cretion</label>
      <div class="toggle-box-content">
      <p>New features are added to field mapping when you create a new record. You can View, Edit and Delete a new record with the drop down (as shown in the image).</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/User-Name.png"></span>
      </div>
   </div>
    <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r5242" type="checkbox" />
      <label for="toggleId-r5242">Create SMS History record in case of Voice drop failure </label>
      <div class="toggle-box-content">
      <p>We now know whether a message has been delivered or not, and if not, what the reason for the failure is. An error message will be displayed in the voicemail history when a voicemail is not delivered to the receiving party.</p>
      <p class="text-center">SMS History -> Voicemail -> Error message</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Voicemail.png"></span>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r6242" type="checkbox" />
      <label for="toggleId-r6242">SMS History dashboard for failed Messages </label>
      <div class="toggle-box-content">
      <p>Under the SMS Analytics object, one more report is added named as “Failed SMS per Day”, which displays the number of undelivered SMS per day. </p>
      <p class="text-center">SMS History -> Voicemail -> Error message</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Failed-SMS.png"></span>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r7242" type="checkbox" />
      <label for="toggleId-r7242">Select All option for Bulk Messaging</label>
      <div class="toggle-box-content">
      <p>The new functionality allows users to select all records in the List View when sending bulk messages, thus bypassing the previous limitation of Salesforce, which restricted the selection to only 200 records at a time. This option can be checked true on the Create Message page from the Send SMS button on the List View. Once selected, it will select all the records in that List View, regardless of the user’s previous record selection. </p>

      <p>Note: This feature works only if speed boosting is enabled in the user’s Salesforce organization.</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Send-All.png"></span>
      </div>
   </div>

    <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r8242" type="checkbox" />
      <label for="toggleId-r8242">Help Texts added in SMS setup</label>
      <div class="toggle-box-content">
      <p>In the SMS setup page, under the section named as “Enable/Disable/Hide Interface Element”, help texts are added with all the fields that tell you about the field when you hover your cursor over it.</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Help-Texts.png"></span>
      </div>
   </div>

   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r9242" type="checkbox" />
      <label for="toggleId-r9242">Sync SMS Number status in real time</label>
      <div class="toggle-box-content">
      <p>Sync the real-time value of the status. Once you change the status from inactive to active, click the “Sync to Client” button on the top right. It will show you that the record has been synced successfully.</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Sync-Client.png"></span>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Pop-up-message.png"></span>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r10242" type="checkbox" />
      <label for="toggleId-r10242">Message Settings Modification</label>
      <div class="toggle-box-content">
      <p>A new option called “Last Message Owner” has been added to this list. This means that you can now set the default as the “Last Message Owner”, and messages will be sent to the person who last sent you a message from the particular organization.</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Message-Settings.png"></span>
      </div>
   </div>

   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r5242" type="checkbox" />
      <label for="toggleId-r5242">Dark hour for Scheduled Job</label>
      <div class="toggle-box-content">
      <p>The Dark Hour works as "do not disturb" mode that can be enabled during certain hours of the day or night. When you enable the "dark hour," the app will typically stop sending you notifications during the specified time period. Instead, the messages will be stored in the app until the "dark hour" period ends, and then the notifications will resume. When enabled, the "Dark Hour" functionality will be active for the record. Its default value is set to true for system-generated records, and if created manually then the default value is set to false.</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/dark-hours.png"></span>
      </div>
   </div>

   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r11242" type="checkbox" />
      <label for="toggleId-r11242">Schedule SMS Changes</label>
      <div class="toggle-box-content">
      <p>When a client creates a record for scheduling SMS and does not specify the channel, the default channel will be set as “SMS” if it’s a text message and “MMS” if they add any attachments.</p>
      </div>
   </div>

   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r12242" type="checkbox" />
      <label for="toggleId-r12242">SpeedBoosting feature </label>
      <div class="toggle-box-content">
      <p>MMS and link tracking are supported in the SpeedBoosting feature for SMS reports. With this feature, MMS and link tracking are supported, meaning that users can include multimedia content in their messages and track link clicks within them.S</p>
      </div>
   </div>

   <h5>Enhancements:</h5>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r13242" type="checkbox" />
      <label for="toggleId-r13242">Multiple link shortening and tracking </label>
      <div class="toggle-box-content">
      <p>When you send several URL links in a message, a record for message URLs is created and stored in the SMS History's "Message URL" section.</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Messages-URLs.png"></span>
      <p>We can now track if the user clicks on those links, how many times they click them, and the timestamps. You can track 5 links at a time in a message.</p>

      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r14242" type="checkbox" />
      <label for="toggleId-r14242">Compliance Mechanism Support for Drip/Speedboosting/others</label>
      <div class="toggle-box-content">
      <p>In the past, Drip Campaigns, SpeedBoosting, and other similar marketing strategies did not fully support compliance mechanism features. However, now these strategies have been updated to include complete support for such features.</p>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r15242" type="checkbox" />
      <label for="toggleId-r15242">Voice Template Recording limit</label>
      <div class="toggle-box-content">
      <p>A limit will be shown below the recording button to display the supported limit. A recording limit as to how long your voice note can be is displayed below the recording button to make sure the user knows the time limit. Previously, the limit was not shown on the screen.</p>
      <p class="text-center"><strong>Recording Time Limit:</strong> 30 seconds</p>
      <p class="text-center"><strong>File Size Limit:</strong> 4.5 MB</p>
   <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Voice-Note.png"></span>


      </div>
   </div>
    <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r16242" type="checkbox" />
      <label for="toggleId-r16242">Link Shortening using 360 Domain</label>
      <div class="toggle-box-content">
      <p>Previously, "Link shortening using 360 domains" was a standalone field in the General Settings. However, it is now listed under the Link Tracking section within the General Settings</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Link-Tracking.png"></span>

      </div>
   </div>
    <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r17242" type="checkbox" />
      <label for="toggleId-r17242">Drip Campaign Updates</label>
      <div class="toggle-box-content">
      <p>Dark hour features and direct field editing weren't supported by Drip Campaign before. The Drip Campaign for this release has undergone the following improvement:</p>
      <ul>
         <li>The UI has been improved which is now similar to Salesforce lightening UI.</li>
         <li>You can now navigate to the Drip Campaign Action page and directly view the field you have set for a specific field in the Field Set.</li>
         <li>You can also edit the field set as per your requirements.</li>
         <li>“Add Row” is renamed "Add Action”.
         <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Action-Button.png"></span></li>
         <li>Tab title on drip campaign tab: When you hover over the drip campaign tab you will now notice that it shows the drip campaign’s name.
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Drip-Campaign.png"></span> </li>
      <li>You can now also enable dark hour functionality for Drip Campaign.</li>
      </ul>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r18242" type="checkbox" />
      <label for="toggleId-r18242">‘Salesforce Down’ error message</label>
      <div class="toggle-box-content">
      <p>If any number cannot be assigned due to a Salesforce issue, an error message will be displayed indicating that Salesforce is unavailable. one lead will be created and all other incomings will get synced to that.</p>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r19242" type="checkbox" />
      <label for="toggleId-r19242">Signature for batch only</label>
      <div class="toggle-box-content">
      <p>This functionality lets you enable user signatures (as shown in the image) to send signatures along with your messages in batches. This works for bulk messages only. </p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Bulk-messaging.png"></span>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r20242" type="checkbox" />
      <label for="toggleId-r20242">Switch process builder to job mode</label>
      <div class="toggle-box-content">
      <p>The scheduled time message is triggered in two ways, first by real-time process builder; second by job process builder. Previously, we had to go to the client’s org to change the client automation manually. Now we have introduced a new feature in General Settings, named as <strong>Disable “Schedule in Real Time” Process Builder.</strong> If this is enabled, all the messages will be sent from Job Mode.</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/SMS-Preference.png"></span>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r21242" type="checkbox" />
      <label for="toggleId-r21242">Link Shortening changes</label>
      <div class="toggle-box-content">
      <p>Users can customize whether they want a particular link to be shortened or not. 
You can stop a link from shortening by adding “tsd=NA” at the end of the link. </p>
   <p class="text-center">Example: <span style="color:red;">CompanyName.com/tsd=NA</span></p>
   <p class="text-center">You can also do the same in custom settings.</p>
       <img src="<?php echo get_stylesheet_directory_uri();?>/images/Stop-link.png">
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r22242" type="checkbox" />
      <label for="toggleId-r22242">Enhance iText Reply</label>
      <div class="toggle-box-content">
      <p>Previously, there was a delay in the outbound replies for iText. It can be resolved by creating a custom setting (itextboosting) to boost speed in iText. The "ReplySMSRest" class should include a call to "itext boosting" before any operations are performed.</p>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r23242" type="checkbox" />
      <label for="toggleId-r23242">SMS App Owner in General Settings</label>
      <div class="toggle-box-content">
      <p>In the SMS App Owner section of the General Settings, initially, all the users with Salesforce licenses were displayed. To avoid long lists due to a large number of users, we have made a changes to only display the following users:</p>
         <ul>
            <li>Users with System Admin Profile</li>
            <li>Previous SMS App Owner</li>
            <li>Currently logged-in users with edit capability</li>

      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r24242" type="checkbox" />
      <label for="toggleId-r24242">Scheduling SMS From Reports</label>
      <div class="toggle-box-content">
      <p>Earlier, the number of records you could send data to through a report was set to 2000 at a time. Now, the limit has been increased to 50,000. 360 SMS supports scheduling messages to unlimited records from the SMS From Reports component with real-time data. </p>
      <p>There are two cases for this:</p>
      <p><strong>Case 1: Less than or equal to 50,000 records</strong></p>
      <p>When the report’s records are less than or equal to 50,000 records, the following conditions need to be met:</p>
      <ul>
         <li>While creating your Salesforce Report, add the following:
               <ul class="subpoints">
                  <li>Add a filter with the field ‘Filter Number’ > 0. </li>
                  <li>Sort by Filter Number field, in ascending order</li>
                  <li>Add the Record ID field and Filter Number field in the report. For instance, Lead ID if the report is on Leads. </li>
               </ul>
         </li>
         <li>When scheduling messages from the SMS from Reports, there is a  checkbox named ‘Run report on scheduled time to fetch new records’.
            <ul class="subpoints">
               <li>The checkbox is checked as <strong>True:</strong>
                     <ul class="subpoints"> 
                        <li>When the report is executed at the scheduled time, it will automatically retrieve real-time data.</li>
                        <li>For example, if there were 10,000 records in the report today, and at the scheduled time, which is tomorrow at 10 am, the total records increase to 14,000, then messages will be sent to those 14,000 updated records.</li>

                     </ul>
                </li>
                <li>The checkbox is checked as <strong>False:</strong>
                     <ul class="subpoints">
                        <li>When the report is executed at the scheduled time, it will retrieve the records that were present in the report at the time of scheduling rather than real-time data. </li>
                        <li>For example, if there were 10,000 records in the report today and at the scheduled time, which is tomorrow at 10 am, the total records are 14,000, then messages will be sent to those 10,000 records that were present at the time of scheduling.</li>

                     </ul>
                 </li>
            </ul>
            <p><strong>Note:</strong> When you are scheduling a message and have checked the check box, you need to ensure that the number of records does not cross 50,000.</p>
         </li>
      </ul>
      <p><strong>Case 2: More than 50,000 records</strong></p>
      <p>When the report’s records are more than 50,000 records, the following are the conditions that need to be met:</p>
      <ul>
         <li>While creating your Salesforce Report, add the following:
            <ul class="subpoints">
               <li>Add a filter with the field ‘Filter Number’ > 0. </li>
               <li>Row limit is set to 99.</li>
               <li>Sort by Filter Number field, in ascending order</li>
               <li>Add the Record ID field and Filter Number field in the report. For instance, Lead ID if the report is on Leads. </li>
            </ul>
         </li>
         <li>Create a custom setting for ‘SMS_Incoming_Alert__c’ to control the chunk size with the below details.
                  <p><strong>Name:-</strong> Run Report Per Hour </p>
                  <p><strong>Value:-</strong> chunk size (number of times a report can be run in an hour)</p>
                  <p><strong>Total records fetched in an hour:</strong> 99*Value</p>
         </li>
      </ul>
      <p>For instance, Value = 200, so the total records fetched is 99*200 and messages will be sent to these records in that hour. Once this is done, the report is scheduled to fetch the next batch of records in the next hour.  </p>
      <p>The default value for ‘Value’ by 360 SMS is 200. However, the user can choose whatever they want. The maximum value for this field is 500 from Salesforce itself. </p>
      <p>For both of the above cases: </p>
      <p>When scheduling messages from the SMS from Reports, there is a checkbox named ‘Run report on scheduled time to fetch new records.’</p>
      <ul>
         <li>The checkbox is checked as <strong>True:</strong>
            <ul class="subpoints">
               <li>When the report is executed at the scheduled time, it will automatically retrieve real-time data.</li>
               <li>For example, if there were 10,000 records in the report today, and at the scheduled time, which is tomorrow at 10 am, the total records increase to 14,000, then messages will be sent to those 14,000 updated records.</li>
            </ul>
          </li>
          <li>The checkbox is checked as <strong>False:</strong>
            <ul class="subpoints"> 
               <li>When the report is executed at the scheduled time, it will retrieve the records that were present in the report at the time of scheduling rather than real-time data. </li>
               <li>For example, if there were 10,000 records in the report today and at the scheduled time, which is tomorrow at 10 am, the total records are 14,000, then messages will be sent to those 10,000 records that were present at the time of scheduling.</li>
            </ul>
         </li>
      </ul>

      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r25242" type="checkbox" />
      <label for="toggleId-r25242">Drip Campaign</label>
      <div class="toggle-box-content">
      <p>In the case of drip through the record owner's email, the Email feature has been enabled. To activate this feature, a custom setting named  "EmailSenderAsRecordOwner" should be created in the SMSIncomingAlert record, and the OptOut checkbox field should be enabled.</p>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r26242" type="checkbox" />
      <label for="toggleId-r26242">Opt-in template in Object Setup</label>
      <div class="toggle-box-content">
      <p>The Opt-in template in the object setup is now sorted by “Last Modified Date”. However, we were facing an issue where if there were more than 1000 templates, the system would crash. As a temporary fix, we have implemented a limit of 999 templates to prevent the page from breaking. Additionally, if there are any issues, we can edit old templates to bring them into the list.</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Link-Objects.png"> </span>

      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r27242" type="checkbox" />
      <label for="toggleId-r27242">Search for Case Object in SMS Composer </label>
      <div class="toggle-box-content">
      <p>Previously, you could only search Names in the SMS Composer, which is located in the utility bar. Now, the Case object may also be found using the SMS Composer's search feature.</p>
      </div>
   </div>
   <h5>Minor Bug Fixes:</h5>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r28242" type="checkbox" />
      <label for="toggleId-r28242">Minor Bug Fixes</label>
      <div class="toggle-box-content">
      <p>Bug fixes and performance improvements.</p>
      </div>
   </div>
    
</div>
</div>

<!------------------------1.246---------------------------------------->
<div id="version_four_six" class="tabcontent" style="display:none;">
    <div class="border-des">
<h2 class="releasenotehead">Release Notes- 1.246 <a data-toggle="modal" data-target="#myModal" href="<?php echo get_stylesheet_directory_uri();?>/images/release-note/Release Notes1.246(Summary).pdf" class="downloadPDF" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/images/pdf-icon.png" width="30px"></a></h2>
<p class="notFound" style="display:none">No content found related to Release Notes- 1.246</p>
  <h5>New Feature:</h5>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r0246" type="checkbox" />
      <label for="toggleId-r0246">SpeedBoosting feature</label>
      <div class="toggle-box-content">
      <p>Previously, if a number wasn't assigned to a user, you couldn’t send messages. But now we have introduced a feature called Auto Assign Numbers, which is by default enabled. Whenever a record is updated, it will automatically assign the number to the user.</p>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r1246" type="checkbox" />
      <label for="toggleId-r1246">Group-based restriction on SMS Composing</label>
      <div class="toggle-box-content">
      <p>Earlier, the restriction on SMS Composition was only based on profiles.               However, now we also have the option of restricting based on groups. In the Message Settings section of General Settings, you can edit your preferences for restricting SMS Composing.</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/SMS-composing.png"></span>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r2246" type="checkbox" />
      <label for="toggleId-r2246">Manage Unicode Character From LMA</label>
      <div class="toggle-box-content">
      <p>Previously, Unicode character records were manually created in our organization. However, we have now introduced a new record type in the production org. The record type is a unique code character on the general setup object, where both Name and CC address are used. The CC address will be treated as a replacement for the name that needs to be replaced.</p>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r3246" type="checkbox" />
      <label for="toggleId-r3246">Owner-Based Signature Parsing</label>
      <div class="toggle-box-content">
      <p>Signature text will now be selected or parsed based on the record owner's signature instead of the current user's.</p>
      <p><strong>Limitations:</strong></p>
      <ul>
         <li>This functionality is dependent on the Org-Wide Signature General Setting. The Org-Wide General Setting must be enabled to use this functionality.</li>
         <li>This functionality will not work in the cases of Speed Boosting and Cross Object Automation.</li>
      </ul>
      </div>
   </div>

   <h5>Enhancements:</h5>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r4246" type="checkbox" />
      <label for="toggleId-r4246">Enhance iText Reply </label>
      <div class="toggle-box-content">
      <p>In the past, there was a delay in sending outbound replies through iText. This issue can be resolved by adjusting a custom setting named "itextboosting," which is designed to optimize the speed of iText operations.  The "ReplySMSRest" class should initiate an "iText boosting" call prior to executing any DML (Data Manipulation Language) operations. </p>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r5246" type="checkbox" />
      <label for="toggleId-r5246">Restrict Composing Enhancement </label>
      <div class="toggle-box-content">
      <p>The 'Restrict Composing' feature is now also operational on the SMS Composing Utility. When this feature is enabled, only specific numbers that have been approved or added to a list of approved numbers can send messages to the restricted number.</p>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r6246" type="checkbox" />
      <label for="toggleId-r6246">SMS Template Changes</label>
      <div class="toggle-box-content">
      <p>Previously, SMS templates would not work if the selected object in the template had more than 1,000 fields. We have added a new feature to the SMS templates. We only displayed a few standard objects in the SMS template, and there was no way to add any additional standard objects to the SMS template object picklist. However, this issue has now been resolved. To add a new object to the picklist, we simply need to add that object to the Object Setup page.</p>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r7246" type="checkbox" />
      <label for="toggleId-r7246">SMS App Owner in General Settings</label>
      <div class="toggle-box-content">
      <p>In the SMS App Owner section of the General Settings, initially all the users with Salesforce licenses were displayed. To avoid long lists due to the large number of users, we have made a change to only display the following users:</p>
      <ul>
         <li>Users with System Admin Profile</li>
         <li>Previous SMS App Owner</li>
         <li>Currently, logged-in users have edit capability.</li>
      </ul>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r8246" type="checkbox" />
      <label for="toggleId-r8246">Scheduling from SMS From Reports</label>
      <div class="toggle-box-content">
      <p>Earlier, the number of records you could send data to through a report was set to 2000 at a time. Now, the limit has been increased to 50,000. 360 SMS supports scheduling messages to unlimited records from the SMS From Reports component with real-time data. </p>
      <p>There are two cases for this:</p>
      <p><strong>Case 1: Less than or equal to 50,000 records</strong></p>
      <p>When the report’s records are less than or equal to 50,000 records, the following conditions need to be met:</p>
      <ol>
         <li>While creating your Salesforce Report, add the following</li>
            - Add a filter with the field ‘Filter Number’ > 0. <br/>
            - Sort by Filter Number field, in ascending order <br/>
            - Add the Record ID field and Filter Number field in the report. For instance, Lead ID if the report is on Leads. <br/>

         <li>When scheduling messages from the SMS from Reports, there is a checkbox named ‘Run report on scheduled time to fetch new records’. 
         <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Run-report.png"></span>
         <ul>
            <li>The checkbox is checked as <strong>True:</strong> </li>
               <ul class="subpoints">
                  <li>When the report is executed at the scheduled time, it will automatically retrieve real-time data.</li>
                  <li>For example, if there were 10,000 records in the report today, and at the scheduled time, which is tomorrow at 10 am, the total records increase to 14,000, then messages will be sent to those 14,000 updated records.</li>
               </ul>
               <li>The checkbox is checked as <strong>False:</strong> </li>
               <ul class="subpoints">
                  <li>When the report is executed at the scheduled time, it will retrieve the records that were present in the report at the time of scheduling, rather than real-time data. </li>
                  <li>For example, if there were 10,000 records in the report today and at the scheduled time, which is tomorrow at 10 am, the total records are 14,000, then messages will be sent to those 10,000 records that were present at the time of scheduling.</li>
               </ul>
         </ul>
         </li>
      </ol>
      <p><strong>Note:</strong> When you are scheduling a message and have checked the check box, you need to ensure that the number of records does not cross 50,000.</p>

      <p><strong>Case 2: More than 50,000 records</strong></p>
      <p>When the report’s records are more than 50,000, the following are the conditions that need to be met:</p>
      <ol>
         <li>While creating your Salesforce Report, add the following:</li>
            - Add a filter with the field ‘Filter Number’ > 0. <br/>
            - The row limit is set to 99.<br/>
            - Sort by Filter Number field in ascending order<br/>
            - Add the Record ID field and Filter Number field in the report. For instance, Lead ID if the report is on leads 
       <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Filter-number.png"></span>

         <li>Create a custom setting for ‘SMS_Incoming_Alert__c’ to control the chunk size with the below details. <br/>
         Name:- Run Report Per Hour  <br/>
         Value:- chunk size (number of times a report can be run in an hour)<br/><br/>
         Total records fetched in an hour: 99*Value <br/>
         For instance, Value = 200, so the total records fetched is 99*200 and messages will be sent to these records in that hour. Once this is done, the report is scheduled to fetch the next batch of records in the next hour.  <br/><br/>
         The default value for ‘Value’ by 360 SMS is 200. However, the user can choose whatever they want. The maximum value for this field is 500 from Salesforce itself.
        <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Incoming-Alert.png"></span>
        <p>For both of the above cases: </p>
        <p>When scheduling messages from the SMS from Reports, there is a checkbox named ‘Run report on scheduled time to fetch new records'. </p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Create-Message-2.png"></span>

      <ul>
         <li>The checkbox is checked as <strong>True:</strong>
            <ul class="subpoints">
               <li>When the report is executed at the scheduled time, it will automatically retrieve real-time data.</li>
               <li>For example, if there were 10,000 records in the report today, and at the scheduled time, which is tomorrow at 10 am, the total records increase to 14,000, then messages will be sent to those 14,000 updated records.</li>
            </ul>
         </li>
      </ul>
       </li>
      <li>The checkbox is checked as <strong>False:</strong>
         <ul class="subpoints">
            <li>When the report is executed at the scheduled time, it will retrieve the records that were present in the report at the time of scheduling, rather than real-time data. </li>
            <li>For example, if there were 10,000 records in the report today and at the scheduled time, which is tomorrow at 10 am, the total records are 14,000, then messages will be sent to those 10,000 records that were present at the time of scheduling.</li>
         </ul>
       </li>

      </ol>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r9246" type="checkbox" />
      <label for="toggleId-r9246">Opt-in template in Object Setup</label>
      <div class="toggle-box-content">
      <p>The Opt-in template in the object setup is now sorted by “Last Modified Date”. However, we were facing an issue where if there were more than 1000 templates, the system would crash. </p>
      <p>As a temporary fix, we have implemented a limit of 999 templates to prevent the page from breaking. Additionally, if there are any issues, we can edit old templates to bring them into the list.</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Phone-API.png"></span>

      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r10246" type="checkbox" />
      <label for="toggleId-r10246">Search for Case Object in SMS Composer</label>
      <div class="toggle-box-content">
      <p>Previously, you could only search names in the SMS composer, which is located in the utility bar. Now, the Case object may also be found using the SMS Composer's search feature.</p>

      </div>
   </div>
    <h5>Minor Bug Fixes:</h5>
   <div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r11246" type="checkbox" />
      <label for="toggleId-r11246">Minor Bug Fixes</label>
      <div class="toggle-box-content">
      <p>Bug fixes and performance improvements.</p>

      </div>
   </div>


</div>
</div>

<!------------------------1.251---------------------------------------->
<div id="version_five_one" class="tabcontent" style="display:none;">
    <div class="border-des">
<h2 class="releasenotehead">Release Notes- 1.251 <a data-toggle="modal" data-target="#myModal" href="<?php echo get_stylesheet_directory_uri();?>/images/release-note/Release Notes1.251(Summary).pdf" class="downloadPDF" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri();?>/images/pdf-icon.png" width="30px"> </a></h2>
<p class="notFound" style="display:none">No content found related to Release Notes- 1.251</p>
<h5>Enhancements:</h5>

<div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r0251" type="checkbox" />
      <label for="toggleId-r0251">Schedule SMS</label>
      <div class="toggle-box-content">
      <p>While scheduling a message, if the time period is too short (2 to 5 minutes), the message will be sent immediately. This feature is usually for automated messages.</p>
      </div>
</div>

<div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r1251" type="checkbox" />
      <label for="toggleId-r1251">Change in object picklist value in SMS App</label>
      <div class="toggle-box-content">
      <p>The drop-down options in various locations (such as SMS Templates, Drip Campaigns, General Settings, etc.) can be customized, and the number of items can be manually set by the user. The standard items are already displayed in the drop-down.</p>
      </div>
</div>

<div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r2251" type="checkbox" />
      <label for="toggleId-r2251">SMS from report phase 2</label>
      <div class="toggle-box-content">
      <p>Earlier, the number of records you could send data to through a report was set to 2000 at a time. Now, the limit has been increased to 50,000. 360 SMS supports scheduling messages to unlimited records from the SMS From Reports component with real-time data.</p>
      

<p>There are two cases:</p>
<ul>
   <li>If the report contains 50,000 records:
      <ul class="subpoints">
         <li>The report will run synchronously in batch execution. When the batch of reports is generated, each report will be executed one after the other in the same process, without any parallel processing.</li>
         <li>The report will be generated in chunks of 2,000 rows at a time. The maximum number of reports that will be generated in a batch is 25, meaning that the total number of rows being processed will be 2,000 * 25 = 50,000. The report will be generated for each set of 2,000 rows, and after retrieving the 2,000 IDs, SMS messages will be sent in parallel, meaning that multiple messages will be sent at the same time.</li>
      </ul>
   </li>
   <li>If the report contains more than 50,000 reports:</li>
      <ul class="subpoints">
         <li>In this case, we will run the report, collect the IDs, and send the SMS messages in parallel.</li>
         <li>If the booster is not enabled, the report chunk size will be set at 30 or 25, depending on the current functionality.</li>
         <li>If the speed booster is enabled, the report chunk size will be set to 100.</li>
         <li>If there is a limit reached for the number of reports that can be executed per hour, the batch will stop, and a new batch will be scheduled for execution after one hour for the remaining records.</li>
      </ul>
</ul>
</div>
</div>

<div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r3251" type="checkbox" />
      <label for="toggleId-r3251">Number sync from Setup Org</label>
      <div class="toggle-box-content">
      <p>Currently, different clients use different number formats, which are utilized in both the SMS and CTI systems. </p>
      </div>
</div>

<div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r4251" type="checkbox" />
      <label for="toggleId-r4251">WhatsApp Profile name displayed on incoming</label>
      <div class="toggle-box-content">
      <p>In the case of WhatsApp, the provider gives us the profile name of the sender's account. We can use this profile name as the name mapping for new leads in incoming WhatsApp messages.</p>
      <p>WhatsApp providers will give us the profile name saved in the SMS history. For lead conversion field mapping, we will map the field in the SMS history to the lead for the new lead name mapping, and so on in the conversion process.</p>
      </div>
</div>

<div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r5251" type="checkbox" />
      <label for="toggleId-r5251">Field Mapping setup for new record creation</label>
      <div class="toggle-box-content">
      <p>Field mapping setup for creating new records.</p>
      <p>Linked to the WA profile name, the admin can change the default lead name for unknown incoming messages.</p>
      </div>
</div>

<div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r6251" type="checkbox" />
      <label for="toggleId-r6251">Signature Parsing</label>
      <div class="toggle-box-content">
      <p>Need to enable from General settings.</p>

      <p>In the Sign option in General settings, a sign is automatically added to every outgoing message, which is the sign of the user who is sending the message (not the record owner [RO]). Through this setting, the sign can be changed to the record owner.</p>

      <p>For example, if the marketing team is sending SMS, but the SMS is being sent from the RO because the field is checked, there can be one setting for one user, either to use the "sending user" sign or the RO sign as an organization-wide setup.</p>

      <p>This setting can be changed for each user, and the user can change it through "My SMS setup" for a user-wise setup.</p>
      </div>
</div>

<div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r7251" type="checkbox" />
      <label for="toggleId-r7251">Stop Autoplay for voicedrop template selection</label>
      <div class="toggle-box-content">
      <p>"Stop Autoplay" refers to disabling the automatic playback feature for the "voicedrop template selection." By stopping the autoplay feature, the voicedrop template will not play automatically and will only play when the user initiates it manually.</p>
      </div>
</div>

<div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r8251" type="checkbox" />
      <label for="toggleId-r8251">Read Incoming after sending Outgoing message</label>
      <div class="toggle-box-content">
      <p>Previously, the last incoming message was marked as read only when an outgoing message was sent from the conversation view or the utility bar.</p>

      <p>Now, incoming messages will be marked as read for all outgoing messages sent from anywhere (conversation view, utility bar, automation, etc.).</p>

      <p>Whenever an outgoing message is sent, if there is an incoming message, it will be marked as "Read." This functionality is enabled through the General Settings. It will only work if it is set to true.</p>
      </div>
</div>

<div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r9251" type="checkbox" />
      <label for="toggleId-r9251">Channel option on SMS template/folder</label>
      <div class="toggle-box-content">
      <p>Currently, it is on the SMS Template used for filtering templates.</p>

      <p>Once a channel is assigned, the template can only be used for that channel. There is a multi-channel picklist and the "Channel All" option.</p>

      <p>Use case: This is used for WhatsApp-approved templates.</p>
      </div>
</div>

<div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r10251" type="checkbox" />
      <label for="toggleId-r10251">Blacklisted number use case</label>
      <div class="toggle-box-content">
      <p>Outgoing messages will not be sent if the recipient number is on a blacklist.
This is a security measure to ensure that restricted or unwanted numbers cannot receive messages from the app.</p>
      </div>
</div>

<div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r11251" type="checkbox" />
      <label for="toggleId-r11251">Signature for bulk messages</label>
      <div class="toggle-box-content">
      <p>The sign is currently appended to all outgoing messages in the General Settings. Now, the sign can only be added to bulk messaging and not to one-to-one messaging.</p>
      </div>
</div>

<div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r12251" type="checkbox" />
      <label for="toggleId-r12251">Labels for “To” and “From” number</label>
      <div class="toggle-box-content">
      <p>In the conversation view, the thread displays the "to" and "from" numbers. Currently, the numbers are displayed without a label.</p>

      <p>For the "to" number, we will provide an option to display the label, such as "Mobile," "Phone," "Home Phone," etc.</p>

      <p>For the "from" number, the label set in the org setup will be displayed.</p>
      </div>
</div>

<div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r13251" type="checkbox" />
      <label for="toggleId-r13251">Schedule SMS button in conversation view</label>
      <div class="toggle-box-content">
      <p>In the conversation view, we have now added the scheduling option. This was previously only available in the "Send SMS" button. It is now live.</p>
      </div>
</div>

<div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r14251" type="checkbox" />
      <label for="toggleId-r14251">Update parent records for new incoming</label>
      <div class="toggle-box-content">
      <p>Whenever a new lead is created, the "SMS Last Sender Number" field will be prefilled. This can be done with a field mapping task. The field will only be updated once, when the lead is first created. Currently, the user has to manually update this field, but with this change, the first default value will be automatically set when the lead is created.</p>
      </div>
</div>
 <h5>Minor Bug Fixes:</h5>
<div class="toggle-box-content toggle-box-region tog-box">
      <input class="toggle-box cust-text" id="toggleId-r15251" type="checkbox" />
      <label for="toggleId-r15251">Minor Bug Fixes</label>
      <div class="toggle-box-content">
      <p>Bug fixes and performance improvements.</p>
      </div>
</div>



</div>
</div>

<!------------------------1.253---------------------------------------->
<div id="version_five" class="tabcontent">
<div class="border-des">
   <h2 class="releasenotehead">Release Note: 1.253 <a data-toggle="modal" data-target="#myModal" href="<?php echo get_stylesheet_directory_uri();?>/images/release-note/Release Notes1.253(Summary).pdf" class="downloadPDF" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/images/pdf-icon.png" width="30px"></a></h2>

   <p class="notFound" style="display:none">No content found related to Release Notes- 1.253</p>
   <h5>New Feature:</h5>

   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r0253" type="checkbox" />
      <label for="toggleId-r0253">Auto Assign Number</label>
      <div class="toggle-box-content">
         <p>Previously, if a number wasn’t assigned to a user, you couldn’t send messages. But now we have introduced a feature called Auto Assign Numbers, which is by default enabled. Whenever a record is updated, it will automatically assign the number to the user.</p>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r1253" type="checkbox" />
      <label for="toggleId-r1253">Carrier Violation due to Cannabis keyword</label>
      <div class="toggle-box-content">
        <p> You can add keywords to the Restricted Keywords section under General Settings in the SMS Setup. These words will be restricted from being sent to the customer.</p>
   </div>
   </div>

   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r2253" type="checkbox" />
      <label for="toggleId-r2253">Channel support in SMS Composing Module</label>
      <div class="toggle-box-content">
        <p> We have introduced three new channels with the SMS Composing Module, i.e., WhatsApp, SMS, and VoiceMail.</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/SMS-Composing2.png"></span>
      </div>
   </div>

   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r3253" type="checkbox" />
      <label for="toggleId-r3253">Field Mapping Setup for New Record creation</label>
      <div class="toggle-box-content">
       <p>New features are added to field mapping when you create a new record. You can View, Edit and Delete a new record with the drop down (as shown in the image).</p>
       <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Field-Mapping2.png"></span>

      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r4253" type="checkbox" />
      <label for="toggleId-r4253">Mark Incoming as Read</label>
      <div class="toggle-box-content">
        <p>This new functionality will mark your incoming messages as read after you send an outgoing message to the same message. To enable this functionality, enable "Mark Incoming as Read" in the General Settings.</p>
   <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Mark-incoming2.png"></span>


      </div>
   </div>
   <h5>Enhancements:</h5>

   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r5253" type="checkbox" />
      <label for="toggleId-r5253">Partner and Customer Community License</label>
      <div class="toggle-box-content">
       <p>When a customer clicks on the incoming/outgoing button, we fetch the partner and customer community license.</p>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r6253" type="checkbox" />
      <label for="toggleId-r6253">'From Address' displayed</label>
      <div class="toggle-box-content">
         <p>The "from" address will also be shown when we send emails through a drip campaign.</p>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r7253" type="checkbox" />
      <label for="toggleId-r7253">Functionality changes in VTP</label>
      <div class="toggle-box-content">
         <p>In the VTP History, verified phone numbers can be changed and re-verified, and the details can be seen on the details page.</p>
      </div>
   </div>
   
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r8253" type="checkbox" />
      <label for="toggleId-r8253">WhatsApp Profile Name</label>
      <div class="toggle-box-content">
         <p>You can now see the "WhatsApp profile name" field on the SMS History page.</p>
      </div>
   </div>
   

   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r9253" type="checkbox" />
      <label for="toggleId-r9253">Channel option on SMS Template/Folder</label>
      <div class="toggle-box-content">
         <p>You can now create different templates for different channels. Select your desired channel on the "Create SMS" page and choose the template.</p>
         <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Channel.png"></span>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r10253" type="checkbox" />
      <label for="toggleId-r10253">Signature for batch only</label>
      <div class="toggle-box-content">
        <p>This functionality lets you enable user signatures (as shown in the image) to send signatures along with your messages in batches. This works for bulk messages only. </p>
        <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Bulk-messaging2.png"></span>

      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r11253" type="checkbox" />
      <label for="toggleId-r11253">Use record owner's signature</label>
      <div class="toggle-box-content">
         <p>Previously, only the user signature was displayed, but now you have the option to enable the functionality to send the record owner's signature.  This functionality won't work in the case of speed boosting and cross-automation.</p>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r12253" type="checkbox" />
      <label for="toggleId-r12253">Change in Object Picklist value in SMS App</label>
      <div class="toggle-box-content">
         <p>Previously, we displayed various objects on the object setup page that clients would likely not use. Now, the number of standard objects has been reduced.</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Add-objects2.png"></span>

      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r13253" type="checkbox" />
      <label for="toggleId-r13253">Changes in SMS Scheduling</label>
      <div class="toggle-box-content">
         <p>While scheduling a message, the message will be sent immediately if the time period is too short (2 to 5 minutes). This feature is usually for automated messages.</p>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r14253" type="checkbox" />
      <label for="toggleId-r14253">Labels should be shown on the new “To Number” and “From Number” options of the conversation view thread</label>
      <div class="toggle-box-content">
         <p>Earlier in the conversation view, we could see only numbers in place of ‘To number’, now we can see the API of the number. For example, if it’s a mobile number, ‘the'mobile number’ label will be displayed; if it’s a landline, home phone, or any other number, then that label will be displayed.</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Number-Labels2.png"></span>

      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r15253" type="checkbox" />
      <label for="toggleId-r15253">Number Formats Design Sync from Setup Org</label>
      <div class="toggle-box-content">
        <p>Previously, we created custom settings in the client’s organization, where we supported only five formats of numbers. Now, more than five formats are supported.</p>

      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r16253" type="checkbox" />
      <label for="toggleId-r16253">Remove duplicate numbers from bulk list</label>
      <div class="toggle-box-content">
          <p>If two contacts have the same number, one of them is removed and marked as duplicated so that the same number won’t receive a message twice.</p>

      </div>
   </div>
   
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r17253" type="checkbox" />
      <label for="toggleId-r17253">Black List Number Use Case</label>
      <div class="toggle-box-content">
         <p>If you have blacklisted any number, you cannot send messages or voice notes to that number. If you try to send a message to a blacklisted number, an error will be shown.</p>
      </div>
   </div>
  
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r18253" type="checkbox" />
      <label for="toggleId-r18253">Invocable Method in SMS with Wrapper Signature</label>
      <div class="toggle-box-content">
        <p>When you select Send Message in Apex Class through Process Builder, you need to fill in the following information, as shown in the image below.</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Process-Builder2.png"></span>

      </div>
   </div>
 <h5>Minor Bug Fixes:</h5>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r19253" type="checkbox" />
      <label for="toggleId-r19253">Minor Bug Fixes</label>
      <div class="toggle-box-content">
        <p>Bug fixes and performance improvements.</p>
      </div>
   </div>

 </div>
  
</div>

<!------------------------1.254---------------------------------------->
<div id="version_five_four" class="tabcontent" style="display:none;">
    <div class="border-des">
<h2 class="releasenotehead">Release Notes- 1.254 <a data-toggle="modal" data-target="#myModal" href="<?php echo get_stylesheet_directory_uri();?>/images/release-note/Release Notes1.254(Summary).pdf" class="downloadPDF" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri();?>/images/pdf-icon.png" width="30px"> </a></h2>
<p class="notFound" style="display:none">No content found related to Release Notes- 1.254</p>
<h5>New Feature:</h5>

  <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r0254" type="checkbox" />
      <label for="toggleId-r0254">ChatGPT with 360 SMS</label>
      <div class="toggle-box-content">
        <p>To start with ChatGPT, a manual remote site setting needs to be created with URL 
        </p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Remote-Site.png"></span>
      <ul>
         <li>The CSM team will provide the user with a ChatGPT number.</li>
         <li>You can assign multiple ChatGPT numbers to a single 360 SMS organization.</li>
         <li>To link ChatGPT with 360 SMS, you need to create an account in ChatGPT and generate an API key through it.</li>
      </ul>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/API-Keys.png"></span>      
      <p>There are a few free trial credits already provided by ChatGPT, after which it becomes a paid feature.</p>

      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Free-trial.png"></span>
      
      </div>
   </div>

   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r1254" type="checkbox" />
      <label for="toggleId-r1254">ChatGPT features</label>
      <div class="toggle-box-content">
        <p>You can enter your required questions or suggestions in the ChatGPT Question box on the Create SMS page, and it will generate a prepared template that can be sent to your clients and customers.</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/ChatGPT.png"></span>
      <ul>
         <li>ChatGPT also suggests a reply based on ten recent messages in the 360 SMS’ "Conversation view" and "Incoming SMS Utility bar." </li>
      </ul>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/conversation.png"></span>      
      <p>There are a few free trial credits already provided by ChatGPT, after which it becomes a paid feature.</p>

      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/ChatGPT-utility.png"></span>
      
      </div>
   </div>
   <h5>Minor Bug Fixes:</h5>
<div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r2254" type="checkbox" />
      <label for="toggleId-r2254">Minor Bug Fixes</label>
      <div class="toggle-box-content">
        <p>Bug fixes and performance improvements.</p>
      </div>
   </div>


</div>
</div>

<!------------------------1.259---------------------------------------->
<div id="version_five_nine" class="tabcontent" style="display:none;">
    <div class="border-des">
<h2 class="releasenotehead">Release Notes- 1.259 <a data-toggle="modal" data-target="#myModal" href="<?php echo get_stylesheet_directory_uri();?>/images/release-note/Release Notes1.259(Summary).pdf" class="downloadPDF" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri();?>/images/pdf-icon.png" width="30px"> </a>    </h2>  
   <p class="notFound" style="display:none">No content found related to Release Notes- 1.259</p>

    <h5>New Feature:</h5>

   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r0259" type="checkbox" />
      <label for="toggleId-r0259">Frequent Messaging and Exception Handling in General Settings</label>
      <div class="toggle-box-content">
         <p>Frequent Messaging feature prevents users from sending the same message to the same number and channel within a set time interval. This functionality helps prevent accidental spamming. For instance, it is useful when an automation at the backend goes wrong and spams the client with the same messages without the Admin being aware of it.</p>
         <p>This feature allows you to enable or disable Frequent Messaging in the SMS Setup: General Settings. Once enabled, you can set the time interval for Frequent Messaging. </p><br><span class="img_Sec"><img src="/wp-content/uploads/2023/05/3-n.png" ></span><br><span class="figDescription">Fig: Frequent messaging and time</span>

         <p>If this feature is enabled, and the same message is sent to the same number and channel within the specified time interval, an error message will appear on the screen, saying “Please select a different message” for a single transaction.</p>
         <span class="img_Sec"><img src="/wp-content/uploads/2023/05/4-n.png" ></span><br><span class="figDescription">Fig: Error Message in Conversation View</span>

         <p>For Bulk Messaging, no error message is shown, but an SMS history is created with an error code (360035) and message (Duplicate Transcation).</p>
         <p>Note that while the error message will be shown in the Conversation View, it will not be shown in bulk messaging. </p>
         <span class="img_Sec"><img src="/wp-content/uploads/2023/05/5-n.png" ></span><br><span class="figDescription">Fig: SMS History record having error code and Error message</span><br>
         <span class="img_Sec"><img src="/wp-content/uploads/2023/05/6-n.png" ></span><br><span class="figDescription">Fig: Error message and Error Code under SMS history</span><br>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r1259" type="checkbox" />
      <label for="toggleId-r1259">Spin Text Feature: Send multiple Templates alternately</label>
      <div class="toggle-box-content">
         <p>Now we have the ability to select multiple templates for bulk messaging in List View, SMS From Reports, and Campaigns. You can select multiple templates and when we send the message, it will be sent alternately using the selected templates. It will also reduce the chances of being marked as spam for that number. </p>

         <p><strong>For example-</strong> let's say you need to send bulk messages to 10 Contacts, and you send 3 templates via bulk message. It will send the templates 1, 2, and 3 in a sequential manner to the initial 3 Contacts, and then in the 4th contact, it will send template 1 again, and then the cycle continues sequentially for the rest of the Contacts.</p>
         <span class="img_Sec"><img src="/wp-content/uploads/2023/05/7-n.png" ></span>
         <span class="figDescription">Fig: Multiple template selection</span>
         <br><span class="img_Sec"><img src="/wp-content/uploads/2023/05/8.png" ></span>
         <span class="figDescription">Fig: SMS history of sending templates in bulk message</span>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r2259" type="checkbox" />
      <label for="toggleId-r2259">Channel Restriction</label>
      <div class="toggle-box-content">
         <p>In SMS Setup: General Settings, there is now an option called 'Enable Channel Restriction for User Setup.' When this is enabled and you assign a number in the SMS Setup: User Config page, you can choose which channels the user can access using the 'Allowed Channels' field. </p>

         <p>Only channels supported by the selected number will be displayed (as shown in the figure). If you choose only some channels, the user won't be able to use unselected channels and send cross-channel messages. The user will only see selected channels as active channels in the Conversation View: Channel list. Unselected channels will be visible as inactive and cannot be used. You can do this while assigning a new number or edit the existing number settings. </p>
         <span class="img_Sec"><img src="/wp-content/uploads/2023/05/9.png" ></span>
         <span class="figDescription">Fig: Enable channel restriction for user setup option in general setup</span>
         <span class="img_Sec"><img src="/wp-content/uploads/2023/05/10.png" ></span>
         <span class="figDescription">Fig: Assigned channels to user</span>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r3259" type="checkbox" />
      <label for="toggleId-r3259">Introducing LINE Channel with Attachment Support via provider</label>
      <div class="toggle-box-content">
         <p>We have introduced the LINE Channel with another provider.  Previously, we offered this channel with another provider,, but it lacked support for attachments. With as our current provider, we can now support attachments up to 10 MB. As a result, we have added the LINE channel to our current provider.</p>

         <p>It is important to note that this feature is only supported for one-on-one messaging and is not available for bulk messaging.</p>

         <span class="img_Sec"><img src="/wp-content/uploads/2023/05/11.png" ></span>
         <span class="figDescription">Fig: LINE channel</span><br>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r4259" type="checkbox" />
      <label for="toggleId-r4259">“Invoke a Drip” Channel in Drip Campaigns</label>
      <div class="toggle-box-content">
         <p>We are now supporting an additional channel in drip called 'Invoke a Drip'. This channel allows users to invoke another drip by selecting it from the Drip Campaign: Channel field, which displays a list of associated drips for the respective object.</p>

         <p>For example, if we have a Drip Campaign set up for the Contact object and we want to execute another drip campaign for the same object, this functionality allows us to do so.</p>

         <p>Note: Previously, we recommended that users add only 20 actions per drip, but now users can add as many drip actions as they desire without any limitations.</p>

      <span class="img_Sec"><img src="/wp-content/uploads/2023/05/12.png" ></span>
      <span class="figDescription">Fig: 10 Invoke a drip channel in channel list</span>
      <span class="img_Sec"><img src="/wp-content/uploads/2023/05/13.png" ></span>
      <span class="figDescription">Fig: 11 Drip campaigns field</span><br>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r5259" type="checkbox" />
      <label for="toggleId-r5259">iText Supported in Conversation View</label>
      <div class="toggle-box-content">
         <p>Previously, iText was not supported in the conversation view, but now it is supported (as shown in the figure):</p>

         <span class="img_Sec"><img src="/wp-content/uploads/2023/05/14.png" ></span><br><span class="figDescription">Fig: iText Icon</span><br>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r6259" type="checkbox" />
      <label for="toggleId-r6259">Quick Replies and Call-to-Action Buttons are now available for Approved Templates and iText</label>
      <div class="toggle-box-content">
         <p>Buttons in quick replies in SF. We supported it before too. Template created at provider end. We made only content in our SF. So if button in provider template, it wasnt there in our sf. So for the client end, quick reply was visible, but SF user didnt see it. For meta too, the client has to create </p>

         <p>Can give quickly reply with an approved template. Usually approved. But it can be used for normal WhatsApp messages as well as session messages. </p>

         <p>A quick reply is clicked by the user, and it comes as an incoming message. </p>

         <p>When a template is approved for a button, it will appear as a button on the WhatsApp receiver's end. Previously, these buttons were not displayed on the conversation view SMS thread. However, we have now added two options: quick replies and Call to Action.</p>

         <p>If the respective template body is approved for Quick Replies, then when you send the template, the SMS will include the Quick Replies button, which the user can create on the respective template. You can add up to three buttons in a Quick Reply. For Call to Action, you can add up to two buttons. This functionality will also work for iText.

         <p><strong>In Templates:</strong> To create a new SMS template, you should first click on the SMS Template Object and then click on the 'New' button</p>

         <p>Initially, the notifications were sent through Salesforce Chatter. Now the app uses push notifications for Salesforce mobile app.</p>

         <p>After clicking on 'New', you will enter the 'New Template' window, where you will need to provide the necessary details to create the new template. Additionally, you will see options under the 'Approved' button for 'Quick Replies' and 'Call to Action'.</p>

         <span class="img_Sec"><img src="/wp-content/uploads/2023/05/15.png" ></span>
         <span class="figDescription">Fig: Quick replies and Call to action buttons in Templates 
         </span>

         <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Quick-replies.png"></span><span class="figDescription">Fig: Quick replies and Call to action in templates</span>

         <p><b>In iText:</b> Similar processes will be performed in iText also.</p>

         <span class="img_Sec"><img src="/wp-content/uploads/2023/05/18.png" ></span><br><span class="figDescription">Fig: Quick replies and Call to action options in iText</span><br>

         <span class="img_Sec"><img src="/wp-content/uploads/2023/05/19.png" ></span><br><span class="figDescription">Fig: Quick replies in chat</span><br>

         <span class="img_Sec"><img src="/wp-content/uploads/2023/05/20.png" ></span><br><span class="figDescription">Fig: Message with Quick reply buttons in Whatsapp</span><br>
      </div>
   </div>

   <h5>Enhancements:</h5>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r7259" type="checkbox" />
      <label for="toggleId-r7259">Synced Multi-Conversation View and Incoming SMS Alert for Message Read Status</label>
      <div class="toggle-box-content">
         <p>Previously, if we read an incoming message in the Multi-Conversation View,that message would still be marked as unread in the Incoming Alert. We have now synchronized both components - the Multi-Conversation View and the Incoming Alert and have resolved this issue.</p>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r8259" type="checkbox" />
      <label for="toggleId-r8259">Restrict the 360 SMS app access to licensed users Only</label>
      <div class="toggle-box-content">
         <p>We are restricting users who do not have a 360 SMS App’s license. Let's say there are two users in an organization - User-1 and User-2 - and only User-1 has been assigned a license for the 360 SMS app. Previously, some components of 360 SMS App (for instance, Incoming Alert, SMS_Composing_Utility, etc.) were visible  to both users. However, now User-2 will not have access to any 360 SMS App’s components and will see a popup message that says, 'You do not have a license to access the 360 SMS app.' There is also a lightning button labeled 'Request for License' in the popup window. This button allows users to request a license. Once the user clicks this button, an email is automatically sent to the user who set up the 360 SMS App (displayed under SMS Setup- Org Config - “Last Setup done by:”  requesting a license.</p>
         <span class="img_Sec"><img src="/wp-content/uploads/2023/05/21.png" ></span>
         <span class="figDescription">Fig: Request for License button</span>

         <span class="img_Sec"><img src="/wp-content/uploads/2023/05/22.png" ></span><br><span class="figDescription">Fig: Sample email send by the user to request for license</span>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r9259" type="checkbox" />
      <label for="toggleId-r9259">Enhanced Control Options for Emoji and Attachment Buttons</label>
      <div class="toggle-box-content">
         <p>Previously, the option to enable or disable the Emoji and Attachment buttons on the conversation view was only available in the SMS Setup: General Settings: Enable/Disable/Hide Interface Element section. Now, this functionality has been extended to the Multi-Conversation and the Incoming Alert utility bars. Users are presented with three options: "Enable", "Disable", and "Hide". These options provide greater flexibility and control over the use of Emoji and Attachment buttons in conversations.</p>
         <p><strong>Enable Option:</strong> To enable the Emoji button and Attachement Button.</p>
         <p><strong>Disabe Option:</strong> In this, the emoji and attachment buttons are visible but disabled.</p>
         <p><strong>Hide Option:</strong> In this, the emoji and attachment buttons are not visible. </p>

         <span class="img_Sec"><img src="/wp-content/uploads/2023/05/23.png" ></span>
         <span class="figDescription">Fig:  Emoji and attachment Enable/Disable button </span>

         <span class="img_Sec"><img src="/wp-content/uploads/2023/05/24.png" ></span><br><span class="figDescription">Fig: options available</span>

         <span class="img_Sec"><img src="/wp-content/uploads/2023/05/25.png" ></span><br><span class="figDescription">Fig: Emoji and attachments disabled</span><br>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r10259" type="checkbox" />
      <label for="toggleId-r10259">Group Chats Made Better: Increase in Participants from 5 to 10 Members</label>
      <div class="toggle-box-content">
         <p>Previously, we only supported group chats with up to 5 members (5 recipients and 1 sender). Now, we have expanded our support to allow for up to 10 participants (To Number), in addition to the 1 sender member, to join a group chat.</p>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r11259" type="checkbox" />
      <label for="toggleId-r11259">Enhanced Voicemail System: Opt-Out Option and History Records</label>
      <div class="toggle-box-content">
         <p>For now, compliance mechanism: contact opts out. We can't send the next message. Record-wise and channel-wise compliance, we can do channel-wise mech too. Only manually done channel-wise. </p>

         <p>If the client opted out of SMS, then by default he opted out of voicemail. Not both channels opt out. Unsub records. </p>

         <p>Whenever a Ringless Voicemail SMS History record is created, the voicemail information will be included in the History record channel if the channel contains the voicemail value. Additionally, we have also introduced a new channel for SMS unsubscribers called Voicemail. With this channel, you can now stop sending voice mail to selected customers.</p>

      <span class="img_Sec"><img src="/wp-content/uploads/2023/05/26.png" ></span><span class="figDescription">Fig: Voicemail Channel Optout in SMS Unsubscribe</span>

      <span class="img_Sec"><img src="/wp-content/uploads/2023/05/27.png" ></span><span class="figDescription">Fig: Voicemail Opted out</span><br>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r12259" type="checkbox" />
      <label for="toggleId-r12259">iText: Default Status, Name Change, and Improved Folder Options</label>
      <div class="toggle-box-content">
         <p>We have made some upgrades to iText: </p>

         <ul>
            <li>Previously, when creating a new iText, the status would default to "Inactive." However, now it will be set to "Active" by default. </li>
            <li> We have changed the display name from "Survey" to "iText."</li>
            <li> Previously, there was no option to “Add new”  button to folders, but now “Add new" button is available in Folder field.</li>
         </ul>
            <span class="img_Sec"><img src="/wp-content/uploads/2023/05/28.png" ></span>
            <span class="figDescription">Fig: iText Active status</span>

            <span class="img_Sec"><img src="/wp-content/uploads/2023/05/29.png" ></span><br><span class="figDescription">Fig: Add New button in Folder field in iText</span><br>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r13259" type="checkbox" />
      <label for="toggleId-r13259">Expanded Query Limitations in iText</label>
      <div class="toggle-box-content">
         <p>Previously, 10–50 queries were allowed for answers to one question. This has been increased to 120 answers for one question. </p>

         <p>Previously, there were query limitations for 10–50 answer records in iText (surveys). However, we have now increased this limit to 120.</p>
      </div>
   </div>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r14259" type="checkbox" />
      <label for="toggleId-r14259">Custom Notification</label>
      <div class="toggle-box-content">
         <p>Initially, the notifications were sent through Salesforce Chatter. Now the app uses push notifications for the Salesforce mobile app. </p>

         <p>When an incoming message arrives, Salesforce's standard functionality displays notifications in the bell icon <img src="/wp-content/uploads/2023/05/30-removebg-preview.png" >.We have introduced two options for custom notifications in SMSSetup: :General Settings: Enable Custom Notification and Custom Notification.</p>

         <p>To use custom notifications, first enable the "Enable Custom Notification" checkbox and add the Custom Notification API. Then, create Custom Notification records under the Custom Notifications setup and edit the general settings accordingly.</p>

        <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/CustomNotificationHistory.png" ></span>

       <p>When you receive an incoming message, you can check the notification via the bell icon. <img src="/wp-content/uploads/2023/05/30-removebg-preview.png" > Clicking on the notification will redirect you to the respective record.</p>

      <span class="img_Sec"><img src="/wp-content/uploads/2023/05/32.png" ></span>
      <span class="figDescription">Fig: Custom notification</span>

      <span class="img_Sec"><img src="/wp-content/uploads/2023/05/33.png" ></span>
      <span class="figDescription">Fig: Custom notification option in General settings</span>
      </div>
   </div>
 <h5>Minor Bug Fixes:</h5>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r15259" type="checkbox" />
      <label for="toggleId-r15259">Minor Bug Fixes</label>
      <div class="toggle-box-content">
         <p>Bug fixes and performance improvements.</p>
      </div>
   </div>

 </div>
   
   </div>

<!------------------------1.266---------------------------------------->
<div id="version_six_six" class="tabcontent" style="display:none;">
    <div class="border-des">
<h2 class="releasenotehead">Release Notes- 1.266 <a data-toggle="modal" data-target="#myModal" href="<?php echo get_stylesheet_directory_uri();?>/images/release-note/Release Notes1.266(Summary).pdf" class="downloadPDF" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri();?>/images/pdf-icon.png" width="30px"> </a>  </h2>

   
   <p class="notFound" style="display:none">No content found related to Release Notes- 1.266</p>
   <h5>Minor Bug Fixes:</h5>
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r0266" type="checkbox" />
      <label for="toggleId-r0266">Minor Bug Fixes and Performance Improvements</label>
      <div class="toggle-box-content">
      <p>Bug fixes and performance improvements.</p>
      </div>
   </div>   
  
 </div>
   
   </div>
  <!------------------------1.267---------------------------------------->
<div id="version_six_seven" class="tabcontent" style="display:none;">
    <div class="border-des">
<h2 class="releasenotehead">Release Notes- 1.267 <a data-toggle="modal" data-target="#myModal" href="<?php echo get_stylesheet_directory_uri();?>/images/release-note/Release Notes1.267(Summary).pdf" class="downloadPDF" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri();?>/images/pdf-icon.png" width="30px"> </a></h2>
<p class="notFound" style="display:none">No content found related to Release Notes- 1.267</p>
<h5>Enhancements:</h5>
 <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r0267" type="checkbox" />
      <label for="toggleId-r0267">Improved Auto-Sync Feature</label>
      <div class="toggle-box-content">
      <p>We introduced a new Twilio API in the last package (1.266). But Twilio WhatsApp had a problem: assigned numbers didn't update when sending templates. So, we had to delete and recreate records.</p>

      <p>With the new package installed, manual number re-assignment is unnecessary. Numbers will synchronize automatically.</p>

      <p><strong>Note:</strong> </p>

      <ul>
         <li>After installing the package, the user simply clicks the "Outgoing & Incoming Setup" button in the SMS Setup section to initiate the sync.</li>
         <li>The script will execute once after the package upgrade, updating all records.</li>
      </ul>

      <p><strong>Sinch Provider Delivery Changes</strong></p>
      <p>Before, delivery status for Sinch-Line messages didn't update on SMS History. Now, after an update, it's consistently resolved.</p>

      </div>
   </div> 
 <h5>Minor Bug Fixes:</h5>
    <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r1267" type="checkbox" />
      <label for="toggleId-r1267">Minor Bug Fixes:</label>
      <div class="toggle-box-content">
      <p>Bug fixes and performance improvements.</p>
      </div>
   </div>     


</div>
</div>

<!------------------------1.270 ---------------------------------------->
<div id="version_seven_zero" class="tabcontent" style="display:none;">
    <div class="border-des">
<h2 class="releasenotehead">Release Notes- 1.270 <a data-toggle="modal" data-target="#myModal" href="<?php echo get_stylesheet_directory_uri();?>/images/release-note/Release Notes1.270(Summary).pdf" class="downloadPDF" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri();?>/images/pdf-icon.png" width="30px"> </a></h2>
<p class="notFound" style="display:none">No content found related to Release Notes- 1.270</p>
<h5>Enhancements:</h5>

 <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r0270" type="checkbox" />
      <label for="toggleId-r0270">Media supported for WhatsApp Approved Templates</label>
      <div class="toggle-box-content">
      <p>We now support media files (such as an image, video, or document) in WhatsApp approved templates from our current provider. You can send the WhatsApp Approved Templates with media files by selecting media using the attachment option from any of our modules (such as Conversation View, Send SMS button, etc.).</p>
      </div>
   </div>

    <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r1270" type="checkbox" />
      <label for="toggleId-r1270">Link Tracking and Link Shortening support</label>
      <div class="toggle-box-content">
      <p>For the current provider, Link Tracking and Link shortening are supported for approved WhatsApp templates using merge fields.</p>

      <p>We need to create approved templates that include variables. Instead of the variables themselves, we should use merge fields when creating an SMS template record. These merge fields should contain long URLs that need to be both shortened and tracked.</p>      
   </div>
   </div>   
     <h5>Minor Bug Fixes:</h5>
    <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r2270" type="checkbox" />
      <label for="toggleId-r2270">Minor Bug Fixes</label>
      <div class="toggle-box-content">
      <p>Bug fixes and performance improvements.`</p>
      </div>
   </div>        


</div>
</div>

<!------------------------1.271 ---------------------------------------->
<div id="version_seven_one" class="tabcontent" style="display:none;">
    <div class="border-des">
<h2 class="releasenotehead">Release Notes- 1.271 <a data-toggle="modal" data-target="#myModal" href="<?php echo get_stylesheet_directory_uri();?>/images/release-note/Release Notes_  1.271 (Summary) - Website.pdf" class="downloadPDF" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri();?>/images/pdf-icon.png" width="30px"></a></h2>
<!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->
<p class="notFound" style="display:none">No content found related to Release Notes- 1.271</p>

        <div class="toggle-box-content toggle-box-region tog-box" style="border: 1px solid #92999c;">
              <input class="toggle-box cust-text" id="toggleId-r01271" type="checkbox">
              <label for="toggleId-r01271">Package to support Salesforce’s Enhanced Domain Update </label>
              <div class="toggle-box-content">
              <p>Salesforce is enforcing a major and mandatory change related to the <a href="https://help.salesforce.com/s/articleView?id=000393816&amp;type=1">Enhanced Domains</a>, in the Mid-October 2023. Since all Salesforce sites would be affected, we have proactively rolled out this package release for 360 SMS to ensure that the services are not affected.</p>
               </div>
        </div>
    <div class="toggle-box-content toggle-box-region tog-box">
          <input class="toggle-box cust-text" id="toggleId-r02271" type="checkbox">
          <label for="toggleId-r02271">What does this mean for you?</label>
          <div class="toggle-box-content">
          <p>The 360 SMS App will stop working for you if you are on any previous SMS package (versions before 1.271). </p>
    
          </div>
       </div>
       <div class="toggle-box-content toggle-box-region tog-box" style="border: 1px solid #92999c;">
          <input class="toggle-box cust-text" id="toggleId-r03271" type="checkbox">
          <label for="toggleId-r03271">How can you ensure there is no impact?</label>
          <div class="toggle-box-content">
          <p>To ensure uninterrupted product functionality, it is imperative that you upgrade the product package to 1.271 at the earliest. Please contact the 360 SMS Support team for assistance. </p>
          </div>
       </div>
<h5>New Feature:</h5>

    <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r0271" type="checkbox" />
      <label for="toggleId-r0271">Number Masking </label>
      <div class="toggle-box-content">
      <p>We have introduced a feature called “Number Masking,” and by Enabling Number Masking in the SMS general settings, we will now conceal the recipient's number in the Incoming Alert Slidebar, Multi Conversation View, SMS Composing, and Detail Page. (as shown in figure)</p>

      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Number-Masking.png" ></span><br/>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Incoming-Alert2.png" ></span>
      </div>
   </div> 
   
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r02712" type="checkbox" />
      <label for="toggleId-r02712">PushTopic Optimization </label>
      <div class="toggle-box-content">
      <p>A new feature has been introduced to optimize PushTopic for creating, updating, or performing both operations. Anyone can access these options in the general settings.</p>
      </div>
   </div> 


   <h5>Enhancements:</h5>

    <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r1271" type="checkbox" />
      <label for="toggleId-r1271">Task Creation in Async Mode</label>
      <div class="toggle-box-content">
      <p>Introduction of a new enhancement feature, the ability to create tasks in asynchronous mode. With this update, users can now select the "Create task in Async Mode" checkbox in the SMS General Settings (as shown in Figure), enabling the generation of tasks in an asynchronous manner. This enhancement significantly improves workflow efficiency, streamlining the task creation process.</p>
      <span class="img_Sec"><img src="<?php echo get_stylesheet_directory_uri();?>/images/Async.png" ></span>
      </div>
   </div>

   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r2271" type="checkbox" />
      <label for="toggleId-r2271">Improved Functionality of "List View ALL" with SpeedBoosting Support</label>
      <div class="toggle-box-content">
      <p>In this latest update, we have enhanced the functionality of "List View ALL" by introducing a dependency on the sender number's support for SpeedBoosting. With this improvement, if the sender number does have SpeedBoosting capabilities, the checkbox for “List View ALL” will be enabled, allowing users to take advantage of this feature. Conversely, if the sender number does not support SpeedBoosting, the checkbox will be automatically disabled to prevent any potential issues. This enhancement ensures that the checkbox availability aligns with the capabilities of the sender number, providing a seamless experience for users.</p>
      </div>
   </div>  

   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r3271" type="checkbox" />
      <label for="toggleId-r3271">Speed Boosting and Link Shortening</label>
      <div class="toggle-box-content">
      <p>Provider has incorporated Speed Boosting into its latest update, thereby improving its overall performance and efficiency. Furthermore, the upcoming release will introduce link shortening functionality, which will further enhance optimization.</p>
      </div>
   </div> 

   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r4271" type="checkbox" />
      <label for="toggleId-r4271">Duplicate Entries</label>
      <div class="toggle-box-content">
      <p>Previously, duplicate entries were prevented for messages with the same "To" number, even when sent concurrently from ListView, Campaigns, and SMS From Reports. This was achieved by adding a custom setting named "duplicateToNum" to SMS incoming alerts, enabling the unrestricted sending of messages to duplicate "To" numbers.</p>
      </div>
   </div> 
    <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r4272" type="checkbox" />
      <label for="toggleId-r4272">Preview Functionality</label>
      <div class="toggle-box-content">
      <p>Now Preview functionality is available for File Records within Conversation View,  Incoming Alerts, and Multi Conversation View.</p>
      </div>
   </div> 
   <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r4273" type="checkbox" />
      <label for="toggleId-r4273">Send SMS with a customized schedule</label>
      <div class="toggle-box-content">
      <p>Previously, the enterprise scheduling option automatically caused the flex queue to parallel execution. Now, users can choose when to send SMS with a customized schedule. Once they enable this feature, the system sets the schedule for 15 minutes after activation. Users can pick their time, but it must be at least 15 minutes later than the current time.</p>
      </div>
   </div> 
 <h5>Minor Bug Fixes:</h5>
    <div class="toggle-box-content toggle-box-region tog-box" >
      <input class="toggle-box cust-text" id="toggleId-r5271" type="checkbox" />
      <label for="toggleId-r5271">Minor Bug Fixes</label>
      <div class="toggle-box-content">
      <p>Bug fixes and performance improvements.</p>
      </div>
   </div>   

</div>
</div>

<!---------------------------END---------------------------------------------->
 </div>
 </div>
   </div>
 </div>
 </div>
</div>
</div>
</article>
 

</div>
</div>
</div>

</div><!-- #main-content -->
<script>
$('input.toggle-box.cust-text').click(function() {
  $('input.toggle-box.cust-text').each(function() {
    if ($(this).is(":checked")) {
      $(this).parent().addClass('activebox');

    } else {
      $(this).parent().removeClass('activebox');
    }
  });
});
function openPage(evt, pageName) {
     var i, tabcontent, tablinks;
     tabcontent = document.getElementsByClassName("tabcontent");
     for (i = 0; i < tabcontent.length; i++) {
       tabcontent[i].style.display = "none";
     }
     tablinks = document.getElementsByClassName("tablinks");
     for (i = 0; i < tablinks.length; i++) {
       tablinks[i].className = tablinks[i].className.replace(" active", "");
     }
     document.getElementById(pageName).style.display = "block";
     evt.currentTarget.className += " active";
   }
   
   // Get the element with id="defaultOpen" and click on it
   document.getElementById("defaultOpen").click();
</script>




<!---------------------------END---------------------------------------------->

<script>
$('input.toggle-box.cust-text').click(function() {
  $('input.toggle-box.cust-text').each(function() {
    if ($(this).is(":checked")) {
      $(this).parent().addClass('activebox');

    } else {
      $(this).parent().removeClass('activebox');
    }
  });
});
function openPage(evt, pageName) {
     var i, tabcontent, tablinks;
     tabcontent = document.getElementsByClassName("tabcontent");
     for (i = 0; i < tabcontent.length; i++) {
       tabcontent[i].style.display = "none";
     }
     tablinks = document.getElementsByClassName("tablinks");
     for (i = 0; i < tablinks.length; i++) {
       tablinks[i].className = tablinks[i].className.replace(" active", "");
     }
     document.getElementById(pageName).style.display = "block";
     evt.currentTarget.className += " active";
   }
   
   // Get the element with id="defaultOpen" and click on it
   document.getElementById("defaultOpen").click();
</script>


   


<!--- start popup ------>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Release Notes</h4>
        </div>
        <div class="modal-body">
            <div class="form-part"> <?php //echo do_shortcode('[about_pageshortcode]');?>
               <form id="formFirstLead" target="_blank">
                  <input type="hidden" name="encoding" value="UTF-8">
                  <input type="hidden" id="ever" name="email_status" value="0">
                  <input type="hidden" id="pver" name="phone_status" value="0">
                  <input type="hidden" value="360SMS_ReleaseNotes" id="lead_source" name="lead_source">
                  <input type="hidden" value="" id="pdf_link" name="pdf_link">
                  
                 
                  <div class="d-flex d-flexform">
                    <div class="col-12 col-xs-12 col-md-12 phone_pd">
                     <input placeholder="Name" id="last_name" maxlength="255" name="last_name" size="20" type="text" class="form-control wpcf7-text "
                                    style="border: 1px solid #ccc;margin-bottom: 15px;" />
                                <span id="last_name_error" style="color:red;"></span>
                    </div>

                    <div class="col-12 col-xs-12 col-md-12 phone_pd" id="email_p">
                     <input placeholder="Business Email" id="email" maxlength="80"
                                    name="email" size="20" type="email" class="form-control wpcf7-text "
                                    style="border: 1px solid #ccc;"
                                    onblur="verify_emailad(this.value)" />
                                <span id="email_error" style="color:red;"></span>
                                <span class="ldremailchk text-center" style="display: none !important;">
                                    <h4 style="font-size:1rem;"><b>Loading......</b></h4>
                                </span>
                    </div>
                  </div>

          <div class="d-flex d-flexform">

          

          <div class="col-12 col-xs-12 col-md-12 phone_pd">

           <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                            placeholder="Phone" id="phone_code" name="phone" onblur="verify_phonead(this.value)"
                            type="tel" class="form-control wpcf7-text focus-on phnnumb"
                            style="border-top: 1px solid #ccc;border-bottom: 1px solid #ccc;border-right: 1px solid #ccc; border-left: 1px solid #ccc;">
                        <span id="phone_error" style="color:red;"></span> <span id="country_error"
                            style="color:red;"></span>
                        <span class="ldrphone text-center" style="display: none;">
                            <h4 style="font-size:1rem;"><b>Loading......</b></h4>
                        </span>
          </div>
          
          <div class="col-12 col-xs-12 col-md-12" >
            <?php  $pid = get_queried_object_id();?>
            <input placeholder="Company" id="company" maxlength="40" name="company" size="20"
                                    type="text" class="form-control wpcf7-text" style="border: 1px solid #ccc;" />
                                <span id="company_error" style="color:red;"></span>
                                <input type="hidden" name="pageid" id="pageid"  value="<?php echo $pid;?>">
         </div>

        </div>
        <br/>


<!--country deepak      -->
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/country-picker-flags/build/css/countrySelect.css">
    	<style>
    	.country-select.inside{
    	    width:100%;
    	}
        .country-select .country-list .country {
            padding: 0px 7px;
        }
        .selected-flag {
            background: #f2f2f2;
        }
        .selected-flag {
    height: 31px !important;
}
        input#country_selector {
            text-indent: 5px; width: 100%;
        }
        input#country_selector {
         border: 1px solid #ccc;
    height: 34px;border-radius:4px;
    background: #f4f6f7;
}
        .country-select.inside {
            width: 100%;
        }
        p.country {
   margin:0;text-indent:12px;
}

	</style>
	<p class="country">Please select country below</p>

          <div class="d-flex d-flexform">
                    <div class="col-12 col-xs-12 col-md-12 phone_pd"> 
            <fieldset class="form-col" id="" style="padding: 0px;border: none;margin-bottom:1.1em;">
                <input id="country_selector" type="text" name="">
                  <span id="companydev_error" style="color:red;"></span>

				<label for="country_selector" style="display:none;">Select a country here...</label>
				<div class="form-item" style="display:none;">
        				<input type="text" id="country_selector_code" name="Country__c" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
        				<label for="country_selector_code">...and the selected country code will be updated here</label>
        			</div>
        			<button type="submit" style="display:none;">Submit</button>
    		</fieldset> 
          </div>
          </div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script src="https://www.jqueryscript.net/demo/country-picker-flags/build/js/countrySelect.js"></script>    
              <script>
    			$("#country_selector").countrySelect({
    				// defaultCountry: "jp",
    				// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    				// responsiveDropdown: true,
    				preferredCountries: ['us', 'gb', 'in', 'ca']
    			});
    		</script>
    			
      <!--country end deepak      -->


<div class="d-flex d-flexform formBack">
        <div class="col-sm-4 col-xs-4 mt-4">
 <?php  $pid = get_queried_object_id();?>
    <img src="<?php echo get_stylesheet_directory_uri();?>/cap2.php?id=<?php echo $pid;?>&time=<?php echo time(); ?>" class="codeImg" style="width:100%;height: 44px;padding-left: 10px"  alt="codeImg">

                                      </div>

                                      <div class="col-sm-2 col-xs-2 mt-4">

                                        <p  class="btnRefresh" style="cursor: grab;"><img src="<?php echo get_site_url();?>/wp-content/uploads/2022/04/free-refresh-icon-3104-thumb-1.png" style="height: 40px;"  alt="Refresh"></p>

                                      </div>

                                      <div class="col-sm-6 col-xs-6 mt-4">

                                        <div class="form-group ">

                                          <input type="text" name="vercode" id="vercode" class="form-control" placeholder="Enter value">

                                          <span id="vercode_error" style="color:red;"></span>

                                        </div>

                                      </div> </div>
                                       <div class="d-flex d-flexform">

        <div class="form-col" style="width: 100%;">
          <p style="color: #271c1c; font-size: 14px;">By clicking 'Submit,' I agree to subscribe to promotional messages and newsletters.</p>

        </div>

      </div>

                                      <div class="form-col" style="width: 100%;">

                                       

                                         <input type="submit" name="submit" id="webtoLeadFormOne" style="margin-top:1rem;background-color: #00bcd4;
    transition: .3s;
    font-weight: 500;
    border-radius: 4px;
    font-weight: 600;
    letter-spacing: 1px;
    border: none;margin-left:5px;
    cursor: pointer;" class="href button">

                                      </div>

                                    </form>        
                </div>
        </div>
        
      </div>
      
    </div>
  </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script nonce="rAnd0m">

    function verify_emailad(email) {

        if (email != '') {
            if (email.indexOf("@", 0) < 0) {
                jQuery('#email_error').html('Invalid Email');


            }
            else if (email.indexOf(".", 0) < 0) {
                jQuery('#email_error').html('Invalid Email');


            }
            
             else if (myVars.blockedDomains.includes(email.split('@')[1])) {
        jQuery('#email2_popup_ptt_error').html('Please enter your business email address. This form does not accept addresses from public/free domains.');
    } 
            else {
                jQuery('#email_error').html(' ');
               //  jQuery('span.ldremailchk').show();
               //  var email_check = email.trim();
               //  var pageid = jQuery("input#pageid").val();
               //  var baseURL = '<?php echo get_stylesheet_directory_uri();?>/verifyEmail.php?id='+pageid;
               //  jQuery.ajax({
               //      crossDomain: true,
               //      url: baseURL,
               //      method: 'POST',
               //      data: "email=" + email_check,
               //      success: function (response) {
               //          jQuery('span.ldremailchk').hide();
               //          res = JSON.parse(response);
               //          if (res.status == false) {

               //              jQuery('#email_error').html('Invalid Email');
               //              //   jQuery('#email').val('');
               //              jQuery('#ever').val('0');
               //          }
               //          else if (res.status == true) {
               //              jQuery('#email_error').html('<span style="color:green">Valid Email</span>'); jQuery('#ever').val('1');
               //          }
               //      }
               //  });
            }
        } else {
            jQuery('#email_error').html(' ');
            jQuery('#email_error').html('Email Required');
        }
    }
    // jQuery("input#phone").prop("readonly", true);

   //  jQuery('select#phone_code').on('change', function () {
   //      jQuery('span#phone_error').html(' ');
   //      //jQuery("input#phone").val('');
   //      var selval = jQuery('select#phone_code').val();
   //      var phone = jQuery("input#phone").val();
   //      if (selval == '') {
   //          console.log('1');
   //          //alert('sdasdasd');

   //      } else if (selval == '' && phone.length < 10) {
   //          jQuery('#phone_error').html('');


   //      } else if (selval != '' && phone.length < 10 && phone != "") {
   //          console.log('2');
   //          jQuery('#phone_error').html('');


   //      } else {
   //          console.log('no');


   //          if (phone != '' && selval != '' && phone.length >= 10) {
   //              console.log('3');
   //              jQuery('span.ldrphone').show();
   //              jQuery('span#phone_error').hide();
   //              var phone_check = phone.trim();
   //              var ever = jQuery('#ever').val();
   //              var phone_code = jQuery('#phone_code').val();
   //              var pageid = jQuery("input#pageid").val();
   //              var baseURL = '<?php echo get_stylesheet_directory_uri();?>/verifyPhone.php?id='+pageid;
   //              jQuery.ajax({
   //                  crossDomain: true,
   //                  url: baseURL,
   //                  method: 'POST',
   //                  data: { "phone_code": phone_code, "phone": phone_check },
   //                  success: function (response) {
   //                      jQuery('span.ldrphone').hide();
   //                      jQuery('span#phone_error').show();
   //                      res = JSON.parse(response);
   //                      if (res.status == false) {
   //                          jQuery('#phone_error').html(' ');

   //                          jQuery('#phone_error').html('Invalid Number');

   //                          if (ever == "1" || ever == 1) {
   //                              // alert(ever);
   //                          } else { //alert(ever);
   //                              jQuery('#phone_error').html('');

   //                              jQuery('#phone_error').html('Invalid Number');

   //                              //   jQuery('#phone').val('');  
   //                          }
   //                      }
   //                      else if (res.status == true) {

   //                          jQuery('#phone_error').html(' ');
   //                          jQuery('#phone_error').html('<span style="color:green">Valid Number</span>');
   //                          jQuery('#pver').val('1');
   //                      }
   //                  }
   //              });
   //          }
   //      }
   //  });


    jQuery("input#phone").keypress(function () {
        var selval = jQuery('select#phone_code').val();
        var phone = jQuery("input#phone").val();
        if (selval == '') {


            jQuery("input#phone").val(' ');
        } else {
            if (phone != '' && selval != '') {

            }
        }

    });


     jQuery(document).ready(function () {
    jQuery("p.btnRefresh").click(function () {
        console.log('simple');
         var rand = Math.random() + new Date().getTime();
  		       // var p_id = jQuery('body').attr('id');
  		         var p_id = jQuery('#pageid').val();
                jQuery("img.codeImg").attr('src', '<?php echo get_stylesheet_directory_uri();?>/cap2.php?id='+p_id+'&p=img&rand='+rand);
    });
   
    });

    $(function () {
        var code = "+1"; // Assigning value from model.
        $('#phone_code').val(code);
        $('#phone_code').intlTelInput({
            allowExtensions: true,
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['US', 'GB', 'AU', 'CA', 'IN'],
            separateDialCode: true
        });
    });
    function verify_phonead(phone) {
        var selval = jQuery('.selected-dial-code').text().slice(1);
        var phone = jQuery('input#phone_code').val();
        console.log(phone + ' ' + selval);
        
        if (selval != '' && phone != "" && phone.length < 10) {

            jQuery('#phone_error').html(' ');
            jQuery('#phone_error').html('Invalid Number');
        } else if (selval == '') {

            jQuery('#phone_error').html(' ');
         } else if (phone == "") {

            jQuery('#phone_error').html(' ');
            jQuery('#phone_error').html('Invalid Number');
        }
        else{
           jQuery('#phone_error').html(' ');
        }
    }
    jQuery("#webtoLeadFormOne").click(function(e){
        console.log('Home JS');
         e.preventDefault();
         
        jQuery('span#country_error').val();
    
        var ids = ['last_name','email','company','vercode'];
        
        var last_name = jQuery('#last_name').val();
        var email = jQuery('#email').val();
        var company = jQuery('#company').val();
        var vercode = jQuery('#vercode').val();
        //var description = jQuery('#description').val();
        var phone = jQuery('#phone').val();
         removeValidations(ids);
        if(last_name == "" || email == "" || company == "" || phone == "" || vercode == "" ){
            
            if(last_name == ""){
                jQuery("#last_name_error").html('Required Field');
            }
            if(email == ""){
                jQuery("#email_error").html('Required Field');
            }
            if(company == ""){
                jQuery("#company_error").html('Required Field');
            }
            if(vercode == ""){
                jQuery("#vercode_error").html('Required Field');
            }
         
         return false;   
        }
        else if(email.indexOf("@", 0) < 0){
             jQuery('#email_error').html('The Email  must contain a valid email address.');
             jQuery('#email').focus();
             return false;
        }
        else if(email.indexOf(".", 0) < 0){
            jQuery('#email_error').html('The Email  must contain a valid email address.');
            jQuery('#email').focus();
            return false;
        } 
           else if (myVars.blockedDomains.includes(email.split('@')[1])) {
        jQuery('#email2_popup_ptt_error').html('Please enter your business email address. This form does not accept addresses from public/free domains.');
    } 

        else{
            // var baseURL =  '<?php echo site_url(); ?>/wp-content/themes/thegem/vwebtolead.php';
                 $('.post_outer').addClass('show');


            var baseURL =  '<?php echo get_stylesheet_directory_uri();?>/server-check.php';
            
            var form = jQuery('#formFirstLead'); 
            jQuery.ajax({ 
              url: baseURL,
              method: 'post',
              data: form.serialize(),
              success: function(response) {
                           $('.post_outer').removeClass('show');

                 var res = JSON.parse(response); 
                 console.log(res);
                 //alert(res); //exit;
                 form[0].reset();
                    if(res.st === parseInt(1)){
						location.reload();
						window.open(res.url, '_blank'); 
//                         location.href = res.url;
                         // setTimeout(function() {
                         //   window.location.reload();
                         //  },0);
                         
						this.submit();

                          //console.log(res.url);
                      // window.open(res.url, '_blank').focus();
                     
                    }else if(res.st === parseInt(2)){
                      jQuery("#vercode_error").html(res.msg);
                      return false;   
                    }else if(res.st === parseInt(3)){
                      jQuery("#last_name_error").html(res.msg);
                      return false;   
                    }else if(res.st === parseInt(4)){
                      jQuery("#email_error").html(res.msg);
                      return false;   
                    }else if(res.st === parseInt(5)){
                      jQuery("#company_error").html(res.msg);
                      return false;   
                    }else if(res.st === parseInt(6)){
                      jQuery("#phone_error").html(res.msg);
                      return false;   
                    }
                    else if(res.st === parseInt(8)){
                      jQuery("#all_error").html(res.msg);
                      return false;   
                    }
                    else if(res.st === parseInt(0)){
                      jQuery("#all_error").html(res.msg);
                      return false;   
                    }
                    else{
                         jQuery("#all_error").html("Something Went Wrong Please Try Again Later");
                      return false; 
                       
                    }
                    
                   
                  }
            });  
        }
         function removeValidations(ids) {
            jQuery(ids).each(function (index, key) {
                jQuery("#" + key).keyup(function () {
                    jQuery("#" + key + "_error").html('');
                });
            });
        }
      
});
// Get all elements with the class 'myLinks'
const links = document.querySelectorAll('.downloadPDF');

// Loop through each anchor tag and add a click event listener
links.forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        const linkHref = this.href;
      //  alert('Clicked link:' + linkHref);
        $('#pdf_link').val(linkHref);
       // $('input').val('');
        // Perform any other action with the href as needed
    });
});
 jQuery('#myModal').on('hidden.bs.modal', function () {
  jQuery("#formFirstLead").trigger("reset");
        jQuery('#formFirstLead span').text('');
  });
</script>

<link href="<?php echo get_stylesheet_directory_uri();?>/css/flag-tel.css" rel="stylesheet" media="screen" rel="preload" as="font">
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/phoneDesign/js/jquery.min.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri();?>/js/phoneDesign/js/intlTelInput.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri();?>/js/phoneDesign/js/intlTelInput.min.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri();?>/js/phoneDesign/js/utils.js"></script>  
       <script src="<?php echo get_stylesheet_directory_uri();?>/js/custom.js"></script>

  <!--- End popup ------>
  <?php get_footer(); ?>