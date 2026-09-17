  /* March 3 js with new captcha code */
         jQuery(document).ready(function () {
       	jQuery("#webtoLeadFormOnes").click(function(e){
        
         e.preventDefault();
        var ids = ['last_name','email', 'company', 'vercode'];
        
        var last_name = jQuery('#last_name').val();
        var email = jQuery('#email').val();
        var company = jQuery('#company').val();
        var vercode = jQuery('#vercode').val();
        var description = jQuery('#description').val();
       
         removeValidations(ids);
        if(last_name == "" || email == "" || company == "" || vercode == "" ){
            
            if(last_name == ""){
                jQuery("#last_name_error").html('Required Field');
            }
            if(email == ""){
                jQuery("#email_error").html('Required Field');
            }
             if(company == ""){
                jQuery("#company_error").html('Required Field');
            }
            if(company == ""){
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
     
        else{
            // var baseURL =  location.protocol + '//' + document.location.hostname + '/wp-content/themes/thegem-child/vwebtolead.php';
            var baseURL =  '<?php echo site_url(); ?>/wp-content/themes/thegem-child/checkdata.php';
            var form = jQuery('#formFirstLead');
            jQuery.ajax({
              url: baseURL,
              method: 'post',
              data: form.serialize(),
              success: function(response) {
                 var res = JSON.parse(response); 
                    if(res.st === parseInt(1)){
                        location.href = res.url;
                     
                    }else if(res.st === parseInt(2)){
                      jQuery("#vercode_error").html(res.msg);
                      return false;   
                    }else if(res.st === parseInt(3)){
                      jQuery("#last_name_error").html(res.msg);
                      return false;   
                    }else if(res.st === parseInt(4)){
                      jQuery("#email_error").html(res.msg);
                      return false;   
                    }
				  else if(res.st === parseInt(5)){
                      jQuery("#company_error").html(res.msg);
                      return false;   
                    }else if(res.st === parseInt(6)){
                      jQuery("#description_error").html(res.msg);
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
      
      
});

}); 

function removeValidations(ids) {
     jQuery(ids).each(function(index, key) {
            jQuery("#" + key).keyup(function() {
                  jQuery("#" + key + "_error").html('');
            });
      });
}

jQuery( document ).ready(function() {
   
    jQuery("#description").keyup(function(){
      jQuery(this).siblings('span:first').text("");
    });
});                                              
          

/*======end Js=======*/

$( document ).ready(function($) {
    console.log( "ready!" );

  

$('body').on('click tap', 'button#menu-toggle', function(){
  if( $('.headers').hasClass('active')){
    $('.headers').removeClass('active');
  }else{
    $('.headers').addClass('active');
  }

});
 
$('body').click(function(e){
  if(!$(e.target).is('button#menu-toggle')) {
    $('.headers').removeClass('active');
    //new change 
    $('.primary-menu-panel').show();
      $('div.menu-panel').removeClass('is-active');
   }
});

$('div.slide-out-menu').click(function(e){
  e.stopPropagation();
});

$('button.menu-link').click(function(){
  $('div.menu-panel').removeClass('is-active');
  $('.primary-menu-panel').show(); // new change
if ($(this).data('ref')) {
  var targetRef = $(this).data('ref');
  var $target = $('div.menu-panel[data-menu="' + targetRef + '"]');
  $('.primary-menu-panel').hide();// new change
    $target.addClass('is-active');
}
});
  
    var main = jQuery('div.mm-dropdown .textfirst')
var li = jQuery('div.mm-dropdown > ul > li.input-option')
var inputoption = jQuery("div.mm-dropdown .option")
var default_text = '<img src="https://360degreecloud.com/wp-content/uploads/elementor/thumbs/255px-Flag_of_the_United_States.svg-p40ovmwmdvx098zmnerozbu9ngrs21itasgdcv5an4.png"style="width:19px; height:14px;"><span class="ml-10">US</span><img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-down-b-128.png" width="10" height="10" class="down" />';

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
// if(livalue == 5){
// jQuery('.inp-num').html('+91 9871096860'); jQuery('.inp-num').attr('href','tel:+91 9871096860');
// }
}); 
}); 

 
     function errorElement(text) {
            var newSpan = document.createElement("SPAN");
            newSpan.classList.add("error");
            var newContent = document.createTextNode(text);
            newSpan.appendChild(newContent); 
            return newSpan;
        }
        function validateForm() {
            var hasError = false;
            //e.preventDefault();				
            var last_name = document.querySelector('#last_name').value;
            var email = document.querySelector('#email').value;
            var company = document.querySelector('#company').value;
            
            var errorArr = document.querySelectorAll(".error");
            for(var i = 0; i < errorArr.length; i++) {
                var element = errorArr[i];
                element.parentNode.removeChild(element);
            }
                
                
            if (last_name.trim() == '') {
                document.querySelector('#last_name').parentNode.appendChild(errorElement('Required Field'));
                hasError = true;
            }
            if (email.trim() == '') {
                document.querySelector('#email').parentNode.appendChild(errorElement('Required Field'));
                hasError = true;
            } else {
                var regEx = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                var validEmail = regEx.test(email);
                if (!validEmail) {
                    document.querySelector('#email').parentNode.appendChild(errorElement('Enter a valid email'));
                    hasError = true;
                }
            }
            if (company.trim() == '') {
                document.querySelector('#company').parentNode.appendChild(errorElement('Required Field'));
                hasError = true;
            }
            return !hasError;

        }
  function validateForm23() {
            var hasError = false;
            //e.preventDefault();				
           
            var email = document.querySelector('#emails3').value;
           
            
            var errorArr = document.querySelectorAll(".error");
            for(var i = 0; i < errorArr.length; i++) {
                var element = errorArr[i];
                element.parentNode.removeChild(element);
            }
                
                
           
            if (email.trim() == '') {
                document.querySelector('#erroradd3').appendChild(errorElement('Required Field'));
                hasError = true;
            } else {
                var regEx = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                var validEmail = regEx.test(email);
                if (!validEmail) {
                     document.querySelector('#erroradd3').appendChild(errorElement('Enter a valid email'));
                    hasError = true;
                }
            }
          
            return !hasError;

        }
  function validateForm2() {
            var hasError = false;
            //e.preventDefault();				
           
            var email = document.querySelector('#emails').value;
           
            
            var errorArr = document.querySelectorAll(".error");
            for(var i = 0; i < errorArr.length; i++) {
                var element = errorArr[i];
                element.parentNode.removeChild(element);
            }
                
                
           
            if (email.trim() == '') {
                document.querySelector('#erroradd').appendChild(errorElement('Required Field'));
                hasError = true;
            } else {
                var regEx = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                var validEmail = regEx.test(email);
                if (!validEmail) {
                     document.querySelector('#erroradd').appendChild(errorElement('Enter a valid email'));
                    hasError = true;
                }
            }
          
            return !hasError;

        }



 $(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );

 $("#back-event").click(function(e){
  e.stopPropagation();
  $("#inner-event").removeClass("show");
 });
 $("#inner-event").click(function(){
  $(this).addClass("show");
 });

  $("#doc-event-back-main").click(function(e){
  e.stopPropagation();
  $("#document-cons").removeClass("show");
 });
 $("#document-cons").click(function(){
  $(this).addClass("show");
  $("")
 });

    $(function() {
  
  $('.dropdown > .caption').on('click', function() {
    $(this).parent().toggleClass('open');
  });
  
  $('.dropdown > .list > .item').on('click', function() {
    $('.dropdown > .list > .item').removeClass('selected');
    $(this).addClass('selected').parent().parent().removeClass('open').children('.caption').text( $(this).text() );
  });
  
  $(document).on('keyup', function(evt) {
    if ( (evt.keyCode || evt.which) === 27 ) {
      $('.dropdown').removeClass('open');
    }
  });
  
  $(document).on('click', function(evt) {
    if ( $(evt.target).closest(".dropdown > .caption").length === 0 ) {
      $('.dropdown').removeClass('open');
    }
  });
  
});



		 (function(){ window.ldfdr = window.ldfdr || {}; (function(d, s, ss, fs){ fs = d.getElementsByTagName(s)[0]; function ce(src){ var cs = d.createElement(s); cs.async = true; cs.src = src; setTimeout(function(){fs.parentNode.insertBefore(cs,fs)}, 1); } ce(ss); })(document, 'script', 'https://sc.lfeeder.com/lftracker_v1_kn9Eq4Rmqql7RlvP.js'); })(); 

var moove_frontend_gdpr_scripts = {"ajaxurl":"https:\/\/360smsapp.com\/wp-admin\/admin-ajax.php","post_id":"31368","plugin_dir":"https:\/\/360smsapp.com\/wp-content\/plugins\/gdpr-cookie-compliance","show_icons":"all","is_page":"1","strict_init":"1","enabled_default":{"third_party":0,"advanced":0},"geo_location":"false","force_reload":"false","is_single":"","hide_save_btn":"false","current_user":"0","cookie_expiration":"365","script_delay":"2000","wp_lang":""};



gtag('event', 'conversion', {'send_to': 'AW-816273456/ttbMCKrosqMBELCwnYUD'});


//         const Menubar = document.getElementById("menu-bar");
//         const MenuContent = document.getElementById("menu-content");
//         /*   Menubar.addEventListener("click", function () {
//                  if (MenuContent.style.display == "block") {
//                      MenuContent.style.display = "none";
//                  } else {
//                      MenuContent.style.display = "block"
//                  }
//              })*/
//         const Navtop = document.getElementById("head")
//         const Nav = document.getElementById("nav-main")
//         const navheight = Navtop.getBoundingClientRect().height;
//         //console.log(navheight);
//         window.addEventListener('scroll', function () {
//             const scrollheight = window.pageYOffset;
//             // console.log(scrollheight);
//             if (scrollheight > navheight) {
//                 Nav.classList.add('nav-fixed');
//                 Nav.classList.remove('nav-101');
//             } else {
//                 Nav.classList.remove('nav-fixed');
//                 Nav.classList.add('nav-101');
//             }
//         });