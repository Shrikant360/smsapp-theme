// (function (w, d, s, l, i) {
//             w[l] = w[l] || []; w[l].push({
//                 'gtm.start':
//                     new Date().getTime(), event: 'gtm.js'
//             }); var f = d.getElementsByTagName(s)[0],
//                 j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
//                     'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
//         })(window, document, 'script', 'dataLayer', 'GTM-PT2K63B');
        
     //Begin Inspectlet Asynchronous Code
        (function () {
            window.__insp = window.__insp || [];
            __insp.push(['wid', 1766580799]);
            var ldinsp = function () {
                if (typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js?wid=1766580799&r=' + Math.floor(new Date().getTime() / 3600000); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x);
            };
            setTimeout(ldinsp, 0);
        })(); 
    
    // End Inspectlet Asynchronous Code
   //Global site tag (gtag.js) - Google Ads: 10777900607 
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'AW-10777900607');
   
 function verify_emailad(email) {

        if (email != '') {
            if (email.indexOf("@", 0) < 0) {
                jQuery('#email_error').html('Invalid Email');


            }
            else if (email.indexOf(".", 0) < 0) {
                jQuery('#email_error').html('Invalid Email');


            } 
            
               else if (myVars.blockedDomains.includes(email.split('@')[1])) {
        jQuery('#email_error').html('Please enter your business email address. This form does not accept addresses from public/free domains.');
    } 


             
            else {
                jQuery('#email_error').html(' ');
                // jQuery('span.ldremailchk').show();
                // var email_check = email.trim();
                // var pageid = jQuery("input#pageid").val();
                // var baseURL = '/wp-content/themes/thegem-child/verifyEmail.php?id='+pageid;
                // jQuery.ajax({
                //     crossDomain: true,
                //     url: baseURL,
                //     method: 'POST',
                //     data: "email=" + email_check,
                //     success: function (response) {
                //         jQuery('span.ldremailchk').hide();
                //         res = JSON.parse(response);
                //         if (res.status == false) {

                //             jQuery('#email_error').html('Invalid Email');
                //             //   jQuery('#email').val('');
                //             jQuery('#ever').val('0');
                //         }
                //         else if (res.status == true) {
                //             jQuery('#email_error').html('<span style="color:green">Valid Email</span>'); jQuery('#ever').val('1');
                //         }
                //     }
                // });
            }
        } else {
            jQuery('#email_error').html(' ');
            jQuery('#email_error').html('Email Required');
        }
    }
    // jQuery("input#phone").prop("readonly", true);

    // jQuery('select#phone_code').on('change', function () {
    //     jQuery('span#phone_error').html(' ');
    //     //jQuery("input#phone").val('');
    //     var selval = jQuery('select#phone_code').val();
    //     var phone = jQuery("input#phone").val();
    //     if (selval == '') {
    //         console.log('1');
    //         //alert('sdasdasd');

    //     } else if (selval == '' && phone.length < 10) {
    //         jQuery('#phone_error').html('');


    //     } else if (selval != '' && phone.length < 10 && phone != "") {
    //         console.log('2');
    //         jQuery('#phone_error').html('');


    //     } else {
    //         console.log('no');


    //         if (phone != '' && selval != '' && phone.length >= 10) {
    //             console.log('3');
    //             jQuery('span.ldrphone').show();
    //             jQuery('span#phone_error').hide();
    //             var phone_check = phone.trim();
    //             var ever = jQuery('#ever').val();
    //             var phone_code = jQuery('#phone_code').val();
    //             var pageid = jQuery("input#pageid").val();
    //             var baseURL = '/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
    //             jQuery.ajax({
    //                 crossDomain: true,
    //                 url: baseURL,
    //                 method: 'POST',
    //                 data: { "phone_code": phone_code, "phone": phone_check },
    //                 success: function (response) {
    //                     jQuery('span.ldrphone').hide();
    //                     jQuery('span#phone_error').show();
    //                     res = JSON.parse(response);
    //                     if (res.status == false) {
    //                         jQuery('#phone_error').html(' ');

    //                         jQuery('#phone_error').html('Invalid Number');

    //                         if (ever == "1" || ever == 1) {
    //                             // alert(ever);
    //                         } else { //alert(ever);
    //                             jQuery('#phone_error').html('');

    //                             jQuery('#phone_error').html('Invalid Number');

    //                             //   jQuery('#phone').val('');  
    //                         }
    //                     }
    //                     else if (res.status == true) {

    //                         jQuery('#phone_error').html(' ');
    //                         jQuery('#phone_error').html('<span style="color:green">Valid Number</span>');
    //                         jQuery('#pver').val('1');
    //                     }
    //                 }
    //             });
    //         }
    //     }
    // });


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


    function verify_phonead(phone) {
        var selval = jQuery('select#phone_code').val();
        if (phone != '' && phone.length >= 10 && selval != '') {
            jQuery('span.ldrphone').show();
            jQuery('span#phone_error').hide();
            var phone_check = phone.trim();
            var ever = jQuery('#ever').val();
            var phone_code = jQuery('#phone_code').val();
            var pageid = jQuery("input#pageid").val();
                var baseURL = '/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;

            jQuery.ajax({
                crossDomain: true,
                url: baseURL,
                method: 'POST',
                data: { "phone_code": phone_code, "phone": phone_check },
                success: function (response) {
                    jQuery('span.ldrphone').hide();
                    jQuery('span#phone_error').show();
                    res = JSON.parse(response);
                    if (res.status == false) {

                        jQuery('#phone_error').html('');
                        jQuery('#phone_error').html('Invalid Number');
                        if (ever == "1" || ever == 1) {
                            // alert(ever);
                        } else { //alert(ever);

                            jQuery('#phone_error').html('');
                            jQuery('#phone_error').html('Invalid Number');
                            //   jQuery('#phone').val('');  
                        }
                    }
                    else if (res.status == true) {

                        jQuery('#phone_error').html('<span style="color:green">Valid Number</span>');
                        jQuery('#pver').val('1');
                    }
                }
            });

        } else if (selval != '' && phone != "" && phone.length < 10) {

            jQuery('#phone_error').html(' ');
            jQuery('#phone_error').html('Invalid Number');
        } else if (selval == '') {

            jQuery('#phone_error').html(' ');
            jQuery('#phone_error').html('Please select country code.');
        } else if (phone == "") {

            jQuery('#phone_error').html(' ');
            jQuery('#phone_error').html('Invalid Number');
        }
    }
    function verify_emailad11(email) {
        if (email != '') {
            jQuery('.input-subs').attr('disabled',true);
            if (email.indexOf("@", 0) < 0) {
                jQuery('#email_error1').html('Invalid Email');

            }
            else if (email.indexOf(".", 0) < 0) {
                jQuery('#email_error1').html('Invalid Email');
            } else if (email.toLowerCase().slice(email.length - 9) == 'gmail.com' || email.slice(email.length - 9) == 'Gmail.com') {
                jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from gmail.com.');
            } else if (email.toLowerCase().slice(email.length - 9) == 'yahoo.com' || email.slice(email.length - 9) == 'Yahoo.com') {
                jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from yahoo.com.');
            } else if (email.toLowerCase().slice(email.length - 10) == 'rediff.com' || email.slice(email.length - 9) == 'Rediff.com') {
                jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from rediff.com.');
            } else if (email.toLowerCase().slice(email.length - 11) == 'outlook.com' || email.slice(email.length - 11) == 'Outlook.com') {
                jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from outlook.com.');
            } else if (email.toLowerCase().slice(email.length - 11) == 'hotmail.com' || email.slice(email.length - 11) == 'Hotmail.com') {
                jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from hotmail.com.');
            } else {
                jQuery('#email_error1').html(' ');
                jQuery('span.ldremailchk1').show();
                 //jQuery('#email_error1').hide();
                var email_check = email.trim();
            var pageid = jQuery("input#pageid").val();
                  var baseURL =  '/wp-content/themes/thegem-child/verifyEmail.php?id='+pageid;
                jQuery.ajax({
                    crossDomain: true,
                    url: baseURL,
                    method: 'POST',
                    data: "email=" + email_check,
                    success: function (response) {
                        jQuery('span.ldremailchk1').hide();
                        res = JSON.parse(response);
                        if (res.status == false) {
                            jQuery('#email_error1').html('Invalid Email');
                            //   jQuery('#emailfirst').val('');
                            //jQuery('#ever').val('0');
                        }
                        else if (res.status == true) {
                            jQuery('.input-subs').attr('disabled',false);
                            jQuery('#email_error1').html('<span style="color:green">Valid Email</span>');
                            // jQuery('#ever').val('1'); 
                        }
                    }
                });
            }


        } else {
            jQuery('.input-subs').attr('disabled',false);
            jQuery('#email_error').html(' ');
            jQuery('#email_error').html('Email Required');
        }

    }
    jQuery(document).ready(function () {
    jQuery("p.btnRefresh").click(function () {
        console.log('simple');
         var rand = Math.random() + new Date().getTime();
  		        var p_id = jQuery('body').attr('id');
                jQuery("img.codeImg").attr('src', '/wp-content/themes/thegem-child/cap2.php?id='+p_id+'&p=img&rand='+rand);
    });
    });
function verify_phonead(phone) {
        var selval = jQuery('.selected-dial-code').text().slice(1);
        var phone = jQuery('input#phone_code').val();
        console.log(phone + ' ' + selval);


        // if (phone != '' && phone.length >= 10 && selval != '') {
        //     jQuery('span.ldrphone').show();
        //     jQuery('span#phone_error').hide();
        //     var phone_check = phone.trim();
        //     var ever = jQuery('#ever').val();
        //     var phone_code = jQuery('.selected-dial-code').text().slice(1);
        //     var pageid = jQuery("input#pageid").val();
        //         var baseURL = '/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
        //     jQuery.ajax({
        //         crossDomain: true,
        //         url: baseURL,
        //         method: 'POST',
        //         data: { "phone_code": phone_code, "phone": phone_check },
        //         success: function (response) {
        //             jQuery('span.ldrphone').hide();
        //             jQuery('span#phone_error').show();
        //             res = JSON.parse(response);
        //             if (res.status == false) {

        //                 jQuery('#phone_error').html('');
        //                 jQuery('#phone_error').html('Invalid Number');
        //                 if (ever == "1" || ever == 1) {
        //                     // alert(ever);
        //                 } else { //alert(ever);

        //                     jQuery('#phone_error').html('');
        //                     jQuery('#phone_error').html('Invalid Number');
        //                     //   jQuery('#phone').val('');  
        //                 }
        //             }
        //             else if (res.status == true) {

        //                 jQuery('#phone_error').html('<span style="color:green">Valid Number</span>');
        //                 jQuery('#pver').val('1');
        //             }
        //         }
        //     });

        // } else
         if (selval != '' && phone != "" && phone.length < 10) {

            jQuery('#phone_error').html(' ');
            jQuery('#phone_error').html('Invalid Number');
        } else if (selval == '') {

            jQuery('#phone_error').html(' ');
            jQuery('#phone_error').html('Please select country code.');
        } else if (phone == "") {

            jQuery('#phone_error').html(' ');
            jQuery('#phone_error').html('Invalid Number');
        }
        else{
           jQuery('#phone_error').html(' ');
        }

    }
//     jQuery("#webtoLeadFormOne").click(function(e){
//         console.log('Home JS');
 
//          e.preventDefault();
//     jQuery('span#country_error').val();
    
//         var ids = ['last_name','email','company','vercode'];
        
//         var last_name = jQuery('#last_name').val();
//         var email = jQuery('#email').val();
//         var company = jQuery('#company').val();
//         var vercode = jQuery('#vercode').val();
//         var description = jQuery('#description').val();
//         var phone = jQuery('#phone').val();
//          removeValidations(ids);
//         if(last_name == "" || email == "" || company == "" || vercode == "" ){
            
//             if(last_name == ""){
//                 jQuery("#last_name_error").html('Required Field');
//             }
//             if(email == ""){
//                 jQuery("#email_error").html('Required Field');
//             }
//             if(company == ""){
//                 jQuery("#company_error").html('Required Field');
//             }
//             if(vercode == ""){
//                 jQuery("#vercode_error").html('Required Field');
//             }
         
//          return false;   
//         }
//         else if(email.indexOf("@", 0) < 0){
//              jQuery('#email_error').html('The Email  must contain a valid email address.');
//              jQuery('#email').focus();
//              return false;
//         }
//         else if(email.indexOf(".", 0) < 0){
//             jQuery('#email_error').html('The Email  must contain a valid email address.');
//             jQuery('#email').focus();
//             return false;
//         }  
//          else if (myVars.blockedDomains.includes(email.split('@')[1])) {
//         jQuery('#email_error').html('Please enter your business email address. This form does not accept addresses from public/free domains.');
//     } 
    
    
//         else{
//                  $('.post_outer').addClass('show');

//             // var baseURL =  '/wp-content/themes/thegem-child/vwebtolead.php';
//             var baseURL =  '/wp-content/themes/thegem-child/server-check.php';
//             var form = jQuery('#formFirstLead');
            
            
//             var currentUrl = location.href;
//             var formData = form.serialize();
//             formData += '&c_url=' + encodeURIComponent(currentUrl);
            
            
//          jQuery.ajax({
//               url: baseURL,
//               method: 'post',
//               data: formData,
//               success: function(response) {
//                   $('.post_outer').removeClass('show');
                  
//                  var res = JSON.parse(response); 
//                     if(res.st === parseInt(1)){
//                         location.href = res.url;
                     
//                     }else if(res.st === parseInt(2)){
                        
//                       jQuery("#vercode_error").html(res.msg);
                    
//                       return false;   
//                     }else if(res.st === parseInt(3)){
//                       jQuery("#last_name_error").html(res.msg);
                        
//                       return false;   
//                     }else if(res.st === parseInt(4)){
//                       jQuery("#email_error").html(res.msg);
                      
//                       return false;   
//                     }else if(res.st === parseInt(5)){
//                       jQuery("#company_error").html(res.msg);
                       
//                       return false;   
//                     }else if(res.st === parseInt(6)){
//                       jQuery("#phone_error").html(res.msg);
                      
//                       return false;   
//                     }
//                     else if(res.st === parseInt(8)){
                         
//                       jQuery("#all_error").html(res.msg);
                      
//                       return false;   
//                     }
//                     else if(res.st === parseInt(0)){
                         
//                       jQuery("#all_error").html(res.msg);
//                       return false;   
//                     }
//                     else{
//                          jQuery("#all_error").html("Something Went Wrong Please Try Again Later");
                     
//                          return false; 
                       
//                     }
                    
                   
//                   }
//             });  
//         }
      
      
// });
jQuery("#input-subs11").click(function(e){
         e.preventDefault();
        var ids = ['emailfirst'];
        var email = jQuery('#emailfirst').val();
         removeValidations(ids);
        if(email == "" ){
         jQuery("#email_error1").html('Required Field');
         return false;   
        }else{
             jQuery(this).attr('disabled',true);
            // var baseURL =  '/wp-content/themes/thegem-child/vwebtolead.php';
            var baseURL =  '/wp-content/themes/thegem-child/checkdatafooter.php';
            var form = jQuery('#formFirstLeadfooter');
            jQuery.ajax({
              url: baseURL,
              method: 'post',
              data: form.serialize(),
              success: function(response) {
                 var res = JSON.parse(response); 
                    if(res.st === parseInt(1)){
                        location.href = res.url;
                     
                    }else if(res.st === parseInt(11)){
                      jQuery("#email_error1").html(res.msg);
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