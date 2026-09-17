<!-- <script src="/wp-content/themes/thegem-child/js/sweetalert.js"></script> -->
<script>       
function  verify_email_vu(email){
     
        var pageid = jQuery("input#pageid").val();
              if(email != ''){
        if(email.indexOf("@", 0) < 0){
         jQuery('#email_vu_error').html('Invalid Email');
         
         
       }
       else if(email.indexOf(".", 0) < 0){
        jQuery('#email_vu_error').html('Invalid Email');
        
        
      }else  if(email.toLowerCase().slice(email.length - 9) == 'gmail.com'){
         jQuery('#email_vu_error').html('Please enter your business email address. This form does not accept addresses from gmail.com.');
       }else  if(email.toLowerCase().slice(email.length - 9) == 'yahoo.com'){
         jQuery('#email_vu_error').html('Please enter your business email address. This form does not accept addresses from yahoo.com.');
       }else  if(email.toLowerCase().slice(email.length - 8) == 'yahoo.in'){
         jQuery('#email_vu_error').html('Please enter your business email address. This form does not accept addresses from yahoo.in.');
       }else  if(email.toLowerCase().slice(email.length - 10) == 'rediff.com'){
         jQuery('#email_vu_error').html('Please enter your business email address. This form does not accept addresses from rediff.com.');
       }else  if(email.toLowerCase().slice(email.length - 11) == 'outlook.com'){
         jQuery('#email_vu_error').html('Please enter your business email address. This form does not accept addresses from outlook.com.');
       }else  if(email.toLowerCase().slice(email.length - 11) == 'hotmail.com'){
         jQuery('#email_vu_error').html('Please enter your business email address. This form does not accept addresses from hotmail.com.');
       }else {
        jQuery('#email_vu_error').html(' ');
        jQuery('span.ldremailchk_vu2').show();
        var email_check = email.trim();
        
        var baseURL =  location.protocol + '//' + document.location.hostname + '/wp-content/themes/thegem-child/verifyEmail.php?id='+ pageid;
        jQuery.ajax({
          crossDomain: true,
          url: baseURL,
          method: 'POST',
          data: "email="+email_check,
          success: function(response) {
           jQuery('span.ldremailchk_vu2').hide();
           res = JSON.parse(response);
           if(res.status == false){
             
            jQuery('#email_vu_error').html('Invalid Email');
                    //   jQuery('#email').val('');
                    jQuery('#ever1').val('0');
                  }
                  else if(res.status == true){
                   jQuery('#email_vu_error').html('<span style="color:green">Valid Email</span>');                                  jQuery('#ever1').val('1'); 
                 }
               }
             });
      }
    }else{
    jQuery('#email_vu_error').html(' ');  
       jQuery('#email_vu_error').html('Email Required');  
  }
    }
jQuery('select#phone_code_vu').on('change', function() {
   jQuery('span#phone2_vu_error').html(' ');
       //jQuery("input#phone").val('');
       var selval = jQuery('select#phone_code_vu').val();
       var phone = jQuery("input#phone2").val();
       if(selval == ''){
        console.log('1');
      //alert('sdasdasd');
      jQuery('span#country_error').html('Please select country code');
  }else if( selval == '' && phone.length < 10){
      jQuery('#phone2_vu_error').html('');   
      jQuery('span#country_error').html(' ');
      jQuery('span#country_error').html('Invalid Number');
  } else if( selval != '' && phone.length < 10 && phone != ""){
   console.log('2');
   jQuery('#phone2_vu_error').html('');   
   jQuery('span#country_error').html(' ');
   jQuery('span#country_error').html('Invalid Number');
}else{
    console.log('no');

    jQuery('span#country_error').html('');
    if(phone!= '' && selval!= '' && phone.length >= 10){
      console.log('3');
      jQuery('span.ldrphone2_other').show();
      var phone_check = phone.trim();
      var ever = jQuery('#ever1').val();
      var phone_code = jQuery('#phone_code_vu').val();
      var pageid = jQuery("input#pageid").val();
      var baseURL =  location.protocol + '//' + document.location.hostname + '/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
      jQuery.ajax({
        crossDomain: true,
        url: baseURL,
        method: 'POST',
        data: {"phone_code":phone_code,"phone":phone_check},
        success: function(response) {
           jQuery('span.ldrphone2_other').hide();
           res = JSON.parse(response);
           if(res.status == false){ 
             jQuery('#phone2_vu_error').html(' ');   
             jQuery('span#country_error').html('');
             jQuery('#phone2_vu_error').html('Invalid Number');

             if(ever == "1" || ever == 1 ){  
                         // alert(ever);
                       }else{ //alert(ever);
                        jQuery('#phone2_vu_error').html('');   
                        jQuery('span#country_error').html('');
                        jQuery('#phone2_vu_error').html('Invalid Number'); 
                        
                        //   jQuery('#phone').val('');  
                    }
                }
                else if(res.status == true){
                 jQuery('span#country_error').html('');
                 jQuery('#phone2_vu_error').html(' ');
                 jQuery('#phone2_vu_error').html('<span style="color:green">Valid Number</span>');
                 jQuery('#pver1').val('1'); 
             }
         }
     });
  }
}
});
jQuery("input#phone_code_vu").keypress(function(){
    var selval = jQuery('select#phone_code_vu').val();
    var phone = jQuery("input#phone_code_vu").val();
    if(selval == ''){      
      jQuery('span#country2_error').html(' ');
      jQuery('span#country2_error').html('Please select country code');
      jQuery("input#phone_code_vu").val(' ');
  } else{     
   if(phone!= '' && selval!= ''){
      jQuery('span#country_error').html('');
  }
}

});
jQuery(document).ready(function () {
    jQuery("p.btnRefresh_bottom_vu").click(function(){
        console.log('new hit bottom one');
        var pageid = jQuery("input#pageid").val();
        var rand = Math.random() + new Date().getTime();
         jQuery("img.codeImg_vu").attr('src','<?php echo get_site_url();?>/wp-content/themes/thegem-child/cap2.php?p=img&rand='+rand+'&id='+pageid);
    });
});
jQuery(document).ready(function () {
    jQuery("#referralSubmission_vu").click(function(e){
     e.preventDefault();
      console.log('Hi New Form Bottom nnnnnnnnnnnn');
     var ids = ['last_name_vu','email_vu','vercode_vu'];
     
     var last_name = jQuery('#last_name_vu').val();
     var email = jQuery('#email_vu').val();
     var vercode = jQuery('#vercode_vu').val();
     var phone = jQuery('#phone_code_vu').val();
     removeValidations(ids);
     if(last_name == "" || email == "" ||  vercode == "" ){
        
        if(last_name == ""){
            jQuery("#last_name_vu_error").html('Required Field');
        }
        if(email == ""){
            jQuery("#email_vu_error").html('Required Field');
        }       
        if(vercode == ""){
            jQuery("#vercode_vu_error").html('Required Field');
        }
        
        return false;   
    }
    else if(email.indexOf("@", 0) < 0){
     jQuery('#email_vu_error').html('Invalid Email');
     jQuery('#email_vu').focus();
     return false;
 }
 else if(email.indexOf(".", 0) < 0){
    jQuery('#email_vu_error').html('Invalid Email');
    jQuery('#email_vu').focus();
    return false;
}
else if(jQuery('span#phone2_vu_error').text() == 'Invalid Number' && jQuery('#phone_code_vu').val() != ''){
    return false;
}
else{
    console.log('check dev');
            // var baseURL =  location.protocol + '//' + document.location.hostname + '/wp-content/themes/degree/vwebtolead.php';
            var baseURL =  '<?php echo site_url(); ?>/wp-content/themes/thegem-child/checkdata_hireforsalesforce.php';
            var form = jQuery('#virtual_uniqueue');
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
                    }else if(res.st === parseInt(5)){
                      jQuery("#company_error").html(res.msg);
                      return false;   
                    }else if(res.st === parseInt(6)){
                      jQuery("#description_error").html(res.msg);
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

<div class="d-flex d-flexform">
<link href="<?php echo site_url(); ?>/wp-content/themes/thegem-child/css/flag-tel.css" rel="stylesheet" media="screen">
    <script src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/phoneDesign/js/jquery.min.js" defer></script>
   <script src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/phoneDesign/js/intlTelInput.js" defer></script>
   <script src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/phoneDesign/js/intlTelInput.min.js" defer></script>
   <script src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/phoneDesign/js/utils.js" defer></script> 
   
 <script type="text/javascript">
        jQuery(function () { 
            var code = "+1"; // Assigning value from model.
            jQuery('#phone_code_vu').val(code);
            jQuery('#phone_code_vu').intlTelInput({
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
            jQuery('#referralSubmission_vu').on('click', function () {
                var code = $("#phone_code_vu").intlTelInput("getSelectedCountryData").dialCode;
                var phoneNumber = $('#phone_code_vu').val();
                var name = $("#phone_code_vu").intlTelInput("getSelectedCountryData").name;
                //alert('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);
            });
        });
      function verify_phone_contactnews2_vu(phone){ 
         
        var pageid = jQuery("input#pageid").val();
   var selval = jQuery('form#virtual_uniqueue .selected-dial-code').text().slice(1);
   var phone = jQuery('input#phone_code_vu').val();
      console.log(phone + ' ' + selval);
     if(phone!= '' && phone.length >= 10 && selval!= ''){       
        jQuery('span.ldrphone2_other').show();
         jQuery('span#phone2_vu_error').hide();
        var phone_check = phone.trim();
        var ever = jQuery('#ever1').val();
        var phone_code2 = jQuery('form#virtual_uniqueue .selected-dial-code').text().slice(1);
        var baseURL =  location.protocol + '//' + document.location.hostname + '/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
        jQuery.ajax({
          crossDomain: true,
          url: baseURL,
          method: 'POST',
          data: {"phone_code":phone_code2,"phone":phone_check},
          success: function(response) {
           jQuery('span.ldrphone2_other').hide();
           jQuery('span#phone2_vu_error').show();
           res = JSON.parse(response);
           if(res.status == false){
          
       jQuery('#phone2_vu_error').html('');   
             jQuery('#phone2_vu_error').html('Invalid Number');
             if(ever == "1" || ever == 1 ){  
                         // alert(ever);
                       }else{ //alert(ever);
                
            jQuery('#phone2_vu_error').html('');   
                        jQuery('#phone2_vu_error').html('Invalid Number');
                        //   jQuery('#phone').val('');  
                      }
                    }
                    else if(res.status == true){
             
                     jQuery('#phone2_vu_error').html('<span style="color:green">Valid Number</span>');
                     jQuery('#pver1').val('1'); 
                   }
                 }
               });
      
   }else if(selval!= '' && phone != "" && phone.length < 10){
     
        jQuery('#phone2_vu_error').html(' ');
        jQuery('#phone2_vu_error').html('Invalid Number');
      }else if(selval == ''){
        
        jQuery('#phone2_vu_error').html(' ');
        jQuery('#phone2_vu_error').html('Please select country code.');
      }else if(phone == ""){
      
      jQuery('#phone2_vu_error').html(' ');
      jQuery('#phone2_vu_error').html('Invalid Number');
   }
    }
    </script>

