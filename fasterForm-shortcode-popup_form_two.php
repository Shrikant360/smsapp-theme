<script src="/wp-content/themes/thegem-child/js/sweetalert.js"></script>
<script>     
function  verify_email2_popup_pt(email){
     
        var pageid = jQuery("input#pageid").val();
              if(email != ''){
        if(email.indexOf("@", 0) < 0){
         jQuery('#email2_popup_pt_error').html('Invalid Email');
         
         
       }
       else if(email.indexOf(".", 0) < 0){
        jQuery('#email2_popup_pt_error').html('Invalid Email');
        
        
      }else  if(email.toLowerCase().slice(email.length - 9) == 'gmail.com'){
         jQuery('#email2_popup_pt_error').html('Please enter your business email address. This form does not accept addresses from gmail.com.');
       }else  if(email.toLowerCase().slice(email.length - 9) == 'yahoo.com'){
         jQuery('#email2_popup_pt_error').html('Please enter your business email address. This form does not accept addresses from yahoo.com.');
       }else  if(email.toLowerCase().slice(email.length - 8) == 'yahoo.in'){
         jQuery('#email2_popup_pt_error').html('Please enter your business email address. This form does not accept addresses from yahoo.in.');
       }else  if(email.toLowerCase().slice(email.length - 10) == 'rediff.com'){
         jQuery('#email2_popup_pt_error').html('Please enter your business email address. This form does not accept addresses from rediff.com.');
       }else  if(email.toLowerCase().slice(email.length - 11) == 'outlook.com'){
         jQuery('#email2_popup_pt_error').html('Please enter your business email address. This form does not accept addresses from outlook.com.');
       }else  if(email.toLowerCase().slice(email.length - 11) == 'hotmail.com'){
         jQuery('#email2_popup_pt_error').html('Please enter your business email address. This form does not accept addresses from hotmail.com.');
       }else {
        jQuery('#email2_popup_pt_error').html(' ');
        jQuery('span.ldremailchk2_pt').show();
        var email_check = email.trim();
        
        var baseURL =  location.protocol + '//' + document.location.hostname + '/wp-content/themes/thegem-child/verifyEmail.php?id='+ pageid;
        jQuery.ajax({
          crossDomain: true,
          url: baseURL,
          method: 'POST',
          data: "email="+email_check,
          success: function(response) {
           jQuery('span.ldremailchk2_pt').hide();
           res = JSON.parse(response);
           if(res.status == false){
             
            jQuery('#email2_popup_pt_error').html('Invalid Email');
                    //   jQuery('#email').val('');
                    jQuery('#ever2').val('0');
                  }
                  else if(res.status == true){
                   jQuery('#email2_popup_pt_error').html('<span style="color:green">Valid Email</span>');                                  jQuery('#ever').val('1'); 
                 }
               }
             });
      }
    }else{
    jQuery('#email2_popup_pt_error').html(' ');  
       jQuery('#email2_popup_pt_error').html('Email Required');  
  }
    }
jQuery('select#phone_code2_pt').on('change', function() {
   jQuery('span#phone_code2_pt_error').html(' ');
       //jQuery("input#phone").val('');
       var selval = jQuery('select#phone_code2_pt').val();
       var phone = jQuery("input#phone_code2_pt").val();
       if(selval == ''){
        console.log('1');
      //alert('sdasdasd');
      jQuery('span#country_error').html('Please select country code');
  }else if( selval == '' && phone.length < 10){
      jQuery('#phone_code2_pt_error').html('');   
      jQuery('span#country_error').html(' ');
      jQuery('span#country_error').html('Invalid Number');
  } else if( selval != '' && phone.length < 10 && phone != ""){
   console.log('2');
   jQuery('#phone_code2_pt_error').html('');   
   jQuery('span#country_error').html(' ');
   jQuery('span#country_error').html('Invalid Number');
}else{
    console.log('no');

    jQuery('span#country_error').html('');
    if(phone!= '' && selval!= '' && phone.length >= 10){
      console.log('3');
      jQuery('span.ldrphone2_pt').show();
      var phone_check = phone.trim();
      var ever = jQuery('#ever2').val();
      var phone_code = jQuery('#phone_code2_pt').val();
      var pageid = jQuery("input#pageid").val();
      var baseURL =  location.protocol + '//' + document.location.hostname + '/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
      jQuery.ajax({
        crossDomain: true,
        url: baseURL,
        method: 'POST',
        data: {"phone_code":phone_code,"phone":phone_check},
        success: function(response) {
           jQuery('span.ldrphone2_pt').hide();
           res = JSON.parse(response);
           if(res.status == false){ 
             jQuery('#phone_code2_pt_error').html(' ');   
             jQuery('span#country_error').html('');
             jQuery('#phone_code2_pt_error').html('Invalid Number');

             if(ever == "1" || ever == 1 ){  
                         // alert(ever);
                       }else{ //alert(ever);
                        jQuery('#phone_code2_pt_error').html('');   
                        jQuery('span#country_error').html('');
                        jQuery('#phone_code2_pt_error').html('Invalid Number'); 
                        
                        //   jQuery('#phone').val('');  
                    }
                }
                else if(res.status == true){
                 jQuery('span#country_error').html('');
                 jQuery('#phone_code2_pt_error').html(' ');
                 jQuery('#phone_code2_pt_error').html('<span style="color:green">Valid Number</span>');
                 jQuery('#pver2').val('1'); 
             }
         }
     });
  }
}
});
jQuery("input#phone_code2_pt").keypress(function(){
    var selval = jQuery('select#phone_code2_pt').val();
    var phone = jQuery("input#phone_code2_pt").val();
    if(selval == ''){      
      jQuery('span#country_error').html(' ');
      jQuery('span#country_error').html('Please select country code');
      jQuery("input#phone_code2_pt").val(' ');
  } else{     
   if(phone!= '' && selval!= ''){
      jQuery('span#country_error').html('');
  }
}

});

jQuery(document).ready(function () {
    jQuery("p.btnRefresh_pt").click(function(){
        console.log('new hit popup two');
        var pageid = jQuery("input#pageid").val();
        var rand = Math.random() + new Date().getTime();
         jQuery("img.codeImg_pt").attr('src','<?php echo get_site_url();?>/wp-content/themes/thegem-child/cap2.php?p=img&rand='+rand+'&id='+pageid);
    });
});
jQuery(document).ready(function () {
    jQuery("#referralSubmissionNewpt").click(function(e){
     e.preventDefault();
      console.log('Hello Popup two')
     var ids = ['last_name2_popup_pt','email2_popup_pt','vercode2_pt'];
     
     var last_name = jQuery('#last_name2_popup_pt').val();
     var email = jQuery('#email2_popup_pt').val();
     var vercode = jQuery('#vercode2_pt').val();
     var phone = jQuery('#phone_code2_pt').val();
     removeValidations(ids);
     if(last_name == "" || email == "" ||  vercode == ""){
        
        if(last_name == ""){
            jQuery("#last_name2_popup_pt_error").html('Required Field');
        }
        if(email == ""){
            jQuery("#email2_popup_pt_error").html('Required Field');
        }       
        if(vercode == ""){
            jQuery("#vercode2_pt_error").html('Required Field');
        }
        return false;   
    }
    else if(email.indexOf("@", 0) < 0){
     jQuery('#email2_popup_pt_error').html('Invalid Email');
     jQuery('#email2_popup_pt').focus();
     return false;
 }
 else if(email.indexOf(".", 0) < 0){
    jQuery('#email2_popup_pt_error').html('Invalid Email');
    jQuery('#email2_popup_pt').focus();
    return false;
}
else if(jQuery('span#phone_code2_pt_error').text() == 'Invalid Number' && jQuery('#phone_code2_pt').val() != ''){
    return false;
}
else{
    console.log('check');
            // var baseURL =  location.protocol + '//' + document.location.hostname + '/wp-content/themes/degree/vwebtolead.php';
            var baseURL =  location.protocol + '//' + document.location.hostname + '/wp-content/themes/thegem-child/checkdata.php';
            var form = jQuery('#refFormNewone_pt');
             console.log('check'+baseURL);
             var currentUrl = location.href;
             var formData = form.serialize();
                     formData += '&c_url=' + encodeURIComponent(currentUrl);

             //alert(baseURL);
            jQuery.ajax({
              url: baseURL,
              method: 'post',
              data: formData,
              success: function(response) {
             
            
                 var res = JSON.parse(response); 
              // console.log(res.st);

              if(res.st === parseInt(1)){
                    //location.href = res.url;
                    //window.open(res.url, '_blank');
                    void(window.open(res.url));
                    // window.location.reload(true);
                    
                }else if(res.st === parseInt(2)){
               console.log('vercode2_pt_error');
                  jQuery("#vercode2_pt_error").html(res.msg);
                  return false;   
              }else if(res.st === parseInt(3)){
                  jQuery("#last_name2_popup_pt_error").html(res.msg);
                  return false;   
              }else if(res.st === parseInt(4)){
                  jQuery("#email2_popup_pt_error").html(res.msg);
                  return false;   
              }
              else if(res.st === parseInt(8)){
                      jQuery("#all_error").html(res.msg);
                      return false;   
              }else if(res.st === parseInt(0)){
                      jQuery("#all_error").html(res.msg);
                      return false;   
              }else{
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
</script>
<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
   <!--  If necessary, please modify the charset parameter to specify the        -->
   <!--  character set of your HTML page.                                        -->
   <!--  ----------------------------------------------------------------------  -->

   <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
   

   <!--  ----------------------------------------------------------------------  -->
   <!--  NOTE: Please add the following <FORM> element to your page.             -->
       <!--  ----------------------------------------------------------------------  -->

<div class="d-flex d-flexform" style="justify-content:end;">
<link href="<?php echo site_url(); ?>/wp-content/themes/thegem-child/css/flag-tel.css" rel="stylesheet" media="screen">
    <script async src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/phoneDesign/js/jquery.min.js"></script>
   <script async src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/phoneDesign/js/intlTelInput.js"></script>
   <script async src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/phoneDesign/js/intlTelInput.min.js"></script>
   <script async src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/phoneDesign/js/utils.js"></script> 
   
 <script type="text/javascript">
        $(function () { 
            var code = "+1"; // Assigning value from model.
            $('#phone_code2_pt').val(code);
            $('#phone_code2_pt').intlTelInput({
            allowExtensions: true,
                autoHideDialCode: true,
                autoPlaceholder: "ON",
                dropdownContainer: document.body,
                formatOnDisplay: true,
                hiddenInput: "full_number",
                initialCountry: "auto",
                nationalMode: true,
                placeholderNumberType: "MOBILE",
                preferredCountries: ['US','GB' ,'AU' ,'CA' ,'IN'],
                separateDialCode: true
            });
            $('#referralSubmissionNewpt').on('click', function () {
                var code = $("#phone_code2_pt").intlTelInput("getSelectedCountryData").dialCode;
                var phoneNumber = $('#phone_code2_pt').val();
                var name = $("#phone_code2_pt").intlTelInput("getSelectedCountryData").name;
                //alert('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);
            });
        });
      function verify_phone_contact_popup_pt(phone){ 
         
        var pageid = jQuery("input#pageid").val();
   var selval = jQuery('form#refFormNewone_pt .selected-dial-code').text().slice(1);
   var phone = jQuery('input#phone_code2_pt').val();
      console.log(phone + ' ' + selval);
     if(phone!= '' && phone.length >= 10 && selval!= ''){       
        jQuery('span.ldrphone2_pt').show();
         jQuery('span#phone_code2_pt_error').hide();
        var phone_check = phone.trim();
        var ever = jQuery('#ever2').val();
        var phone_code2_pt = jQuery('form#refFormNewone_pt .selected-dial-code').text().slice(1);
        var baseURL =  location.protocol + '//' + document.location.hostname + '/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
        jQuery.ajax({
          crossDomain: true,
          url: baseURL,
          method: 'POST',
          data: {"phone_code2":phone_code2_pt,"phone":phone_check},
          success: function(response) {
           jQuery('span.ldrphone2_pt').hide();
           jQuery('span#phone_code2_pt_error').show();
           res = JSON.parse(response);
           if(res.status == false){
          
       jQuery('#phone_code2_pt_error').html('');   
             jQuery('#phone_code2_pt_error').html('Invalid Number');
             if(ever == "1" || ever == 1 ){  
                         // alert(ever);
                       }else{ //alert(ever);
                
            jQuery('#phone_code2_pt_error').html('');   
                        jQuery('#phone_code2_pt_error').html('Invalid Number');
                        //   jQuery('#phone').val('');  
                      }
                    }
                    else if(res.status == true){
             
                     jQuery('#phone_code2_pt_error').html('<span style="color:green">Valid Number</span>');
                     jQuery('#pver2').val('1'); 
                   }
                 }
               });
      
   }else if(selval!= '' && phone != "" && phone.length < 10){
     
        jQuery('#phone_code2_pt_error').html(' ');
        jQuery('#phone_code2_pt_error').html('Invalid Number');
      }else if(selval == ''){
        
        jQuery('#phone_code2_pt_error').html(' ');
        jQuery('#phone_code2_pt_error').html('Please select country code.');
      }else if(phone == ""){
      
      jQuery('#phone_code2_pt_error').html(' ');
      jQuery('#phone_code2_pt_error').html('Invalid Number');
   }
    }
    </script>

