

<script type="text/javascript" id="custom-own-js-extra">
/* <![CDATA[ */
var myVars = {"blockedDomains":["gmail.com","yahoo.com","rediff.com","outlook.com","hotmail.com","webinar.com","business.com","test.xyz","prateek.com","icloud.com","qq.com","google.com","qualys.com","fire.com","gmfl.com","gm.com","testing.com","manualtest.com"]};
//# sourceURL=custom-own-js-extra
/* ]]> */
</script>
<script type="text/javascript">



    adroll_adv_id = "JFPTTGG7D5H4ZFAX5XWXJ5";
    adroll_pix_id = "NUDXHQL3GBAFFJFIH6FMSU";

    (function () {
        var _onload = function () {
            if (document.readyState && !/loaded|complete/.test(document.readyState)) { setTimeout(_onload, 10); return }
            if (!window.__adroll_loaded) { __adroll_loaded = true; setTimeout(_onload, 50); return }
            var scr = document.createElement("script");
            var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] ||
                document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
        };
        if (window.addEventListener) { window.addEventListener('load', _onload, false); }
        else { window.attachEvent('onload', _onload) }
    }());

    /* VTM VTP jquery for all page..Not for home */

    function verify_email_contactus(email) {
        if (email != '') {
            if (email.indexOf("@", 0) < 0) {
                jQuery('#email_error').html('Invalid Email');


            } else if (email.indexOf(".", 0) < 0) {
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
                // var baseURL = '<?php echo site_url(); ?>/wp-content/themes/thegem-child/verifyEmail.php?id='+pageid;
                // jQuery.ajax({
                //   crossDomain: true,
                //   url: baseURL,
                //   method: 'POST',
                //   data: "email="+email_check,
                //   success: function(response) {
                //    jQuery('span.ldremailchk').hide();
                //    res = JSON.parse(response);
                //    if(res.status == false){

                //     jQuery('#email_error').html('Invalid Email');
                //             //   jQuery('#email').val('');
                //             jQuery('#ever').val('0');
                //           }
                //           else if(res.status == true){
                //            jQuery('#email_error').html('<span style="color:green">Valid Email</span>');                                  jQuery('#ever').val('1'); 
                //          }
                //        }
                //      });
            }
        } else {
            jQuery('#email_error').html(' ');
            jQuery('#email_error').html('Email Required');
        }
    }

    function verify_phone_contactus(phone) {
        var selval = jQuery('.selected-dial-code').val();

        if (selval != '' && phone != "" && phone.length < 10) {
            jQuery('#phone_error').html(' ');
            jQuery('#phone_error').html('Invalid Number');
        } else if (selval == '') {
            jQuery('#phone_error').html(' ');

        } else if (phone == "") {

            jQuery('#phone_error').html(' ');
            jQuery('#phone_error').html('Invalid Number');
        } else {
            jQuery('#phone_error').html(' ');
        }

    }
    //     	jQuery('select#phone_code').on('change', function() {
    //    jQuery('span#phone_error').html(' ');
    //        //jQuery("input#phone").val('');
    //        var selval = jQuery('.selected-dial-code').val();
    //        var phone = jQuery("input#phone").val();
    //        if(selval == ''){
    //         console.log('1');
    //       //alert('sdasdasd');
    //       jQuery('span#country_error').html('Please select country code');
    //   }else if( selval == '' && phone.length < 10){
    //       jQuery('#phone_error').html('');   
    //       jQuery('span#country_error').html(' ');
    //       jQuery('span#country_error').html('Invalid Number');
    //   } else if( selval != '' && phone.length < 10 && phone != ""){
    //    console.log('2');
    //    jQuery('#phone_error').html('');   
    //    jQuery('span#country_error').html(' ');
    //    jQuery('span#country_error').html('Invalid Number');
    // }else{
    //     console.log('no');

    //     jQuery('span#country_error').html('');
    //     if(phone!= '' && selval!= '' && phone.length >= 10){
    //       console.log('3');
    //       jQuery('span.ldrphone').show();
    //       var phone_check = phone.trim();
    //       var ever = jQuery('#ever').val();
    //       var phone_code = jQuery('#phone_code').val();
    //       var pageid = jQuery("input#pageid").val();
    //        var baseURL = '<?php echo site_url(); ?>/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
    //       jQuery.ajax({
    //         crossDomain: true,
    //         url: baseURL,
    //         method: 'POST',
    //         data: {"phone_code":phone_code,"phone":phone_check},
    //         success: function(response) {
    //            jQuery('span.ldrphone').hide();
    //            res = JSON.parse(response);
    //            if(res.status == false){ 
    //              jQuery('#phone_error').html(' ');   
    //              jQuery('span#country_error').html('');
    //              jQuery('#phone_error').html('Invalid Number');

    //              if(ever == "1" || ever == 1 ){  
    //                          // alert(ever);
    //                        }else{ //alert(ever);
    //                         jQuery('#phone_error').html('');   
    //                         jQuery('span#country_error').html('');
    //                         jQuery('#phone_error').html('Invalid Number'); 

    //                         //   jQuery('#phone').val('');  
    //                     }
    //                 }
    //                 else if(res.status == true){
    //                  jQuery('span#country_error').html('');
    //                  jQuery('#phone_error').html(' ');
    //                  jQuery('#phone_error').html('<span style="color:green">Valid Number</span>');
    //                  jQuery('#pver').val('1'); 
    //              }
    //          }
    //      });
    //   }
    // }
    // });

    jQuery("input#phone").keypress(function () {
        var selval = jQuery('.selected-dial-code').val();
        var phone = jQuery("input#phone").val();
        if (selval == '') {
            jQuery('span#phone_error').html('');
            jQuery('span#country_error').html('Please select country code');
            jQuery("input#phone").val(' ');
        } else {
            if (phone != '' && selval != '') {
                jQuery('span#country_error').html('');
            }
        }

    });

    jQuery(document).ready(function () {
        jQuery("p.btnRefresh").click(function () {
            var rand = Math.random() + new Date().getTime();
            var pageid = jQuery("input#pageid").val();
            jQuery("img.codeImg").attr('src', '<?php echo site_url(); ?>/wp-content/themes/thegem-child/cap2.php?p=img&rand=' + rand + '&id=' + pageid);
        });
        jQuery("#webtoLeadFormOne").click(function (e) {
            e.preventDefault();
            var ids = ['last_name', 'email', 'company', 'vercode','job_title','industry','city','full_url'];

            var last_name = jQuery('#last_name').val();
            var email = jQuery('#email').val();
            var company = jQuery('#company').val();
            var vercode = jQuery('#vercode').val();
            var description = jQuery('#description').val();
            var phone = jQuery('#phone').val();
            var selval = jQuery('#formFirstLead .selected-dial-code').text();
            var phone_contact = jQuery('#phone_code').val();
            var job_title = jQuery('#job_title').val();
            var industry = jQuery('#industry').val();
            var city = jQuery('#city').val();
            


            var mergedVal = selval + phone_contact;
            jQuery('#merged_phone').val(mergedVal);


            removeValidations(ids);
           if (last_name == "" || email == "" || company == "" || vercode == "" || phone_contact == "" || job_title == "" || industry == "")  {

                if (last_name == "") {
                    jQuery("#last_name_error").html('Required Field');
                }
                if (email == "") {
                    jQuery("#email_error").html('Required Field');
                }
                if (company == "") {
                    jQuery("#company_error").html('Required Field');
                }
                if (vercode == "") {
                    jQuery("#vercode_error").html('Required Field');
                }
                if (phone_contact == "") {
                    jQuery("#phone_error").html('Required Field');
                }
                 if (job_title == "") {
                    jQuery("#job_title_error").html('Required Field');
                }
                if (industry == "") {
                    jQuery("#industry_error").html('Required Field');
                }


                return false;
            }
            else if (email.indexOf("@", 0) < 0) {
                jQuery('#email_error').html('Invalid Email');
                jQuery('#email').focus();
                return false;
            }
            else if (email.indexOf(".", 0) < 0) {
                jQuery('#email_error').html('Invalid Email');
                jQuery('#email').focus();
                return false;
            }


            else if (jQuery('span#phone_error').text() == 'Invalid Number' && jQuery('#phone_code').val() != '') {
                return false;
            }

            ///////
            else if (jQuery('#phone_code').val() == '') {
                return false;
            }
            else if (jQuery('#email_error').text() == 'Invalid Email') {
                return false;
            }
            else if (jQuery('#email_error').text().includes('Please enter your business email address')) {
                return false;
            }
            else if (myVars.blockedDomains.includes(email.split('@')[1])) {
                jQuery('#email_error').html('Please enter your business email address. This form does not accept addresses from public/free domains.');
            }

            else {
                $('.post_outer').addClass('show');

                // var baseURL12 =  '<?php echo site_url(); ?>/wp-content/themes/thegem-child/vwebtolead.php';
                var baseURL = '<?php echo site_url(); ?>/wp-content/themes/thegem-child/server-check.php';
                var form = jQuery('#formFirstLead');


                var currentUrl = location.href;
                var formData = form.serialize();
                formData += '&c_url=' + encodeURIComponent(currentUrl);
                jQuery.ajax({
                    url: baseURL,
                    method: 'post',
                    data: formData,
                    success: function (response) {
                        $('.post_outer').removeClass('show');
                        var res = JSON.parse(response);
                        if (res.st === parseInt(1)) {
                             if (res["landing-page"] === true) {
                                var tyBase = res.url && res.url !== "" ? res.url : "https://360smsapp.com/paid-thank-you/";
                                var tyUrl = new URL(tyBase);
                                tyUrl.searchParams.set('ec_email', email);
                                tyUrl.searchParams.set('ec_phone', selval + phone_contact);
                                window.location.href = tyUrl.toString();
                                return;
                            } else if (res["case_study"] === true) {
                var form = jQuery("#div_replace");
                form.fadeOut(300, function() {
                 jQuery(this).replaceWith('<div class="thank-you-message" style="text-align:center; color:#000"><img src="https://360smsapp.com/wp-content/uploads/2026/03/Thanks-You-Popup_half.jpg" style="width: 100%;"><h1 class="py-5">' + res.msg + '</h1> </div><div class="text-center" style="padding-bottom:57px";><a  href="<?php echo esc_url(get_field('cs_upload_pdf')); ?>" target="_blank"; style="background-color: #0A86C6;padding: 8px 10px 8px 10px;color: white;border-radius: 5px;font-size: 12px !important;font-weight: 600;">Click Here to Download the complete Case Study</a></div>');
                });
                return;
              } 
              else if (res["playbook"] === true) {
                var form = jQuery("#div_replace");
                form.fadeOut(300, function() {
                 jQuery(this).replaceWith('<div class="thank-you-message" style="text-align:center; color:#000"><img src="https://360smsapp.com/wp-content/uploads/2026/03/Thanks-You-Popup_half.jpg" style="width: 100%;"><h1 class="py-5">' + res.msg + '</h1> </div><div class="text-center" style="padding-bottom:57px";><a  href="<?php echo esc_url(get_field('pb_upload_pdf')); ?>" target="_blank"; style="background-color: #0A86C6;padding: 8px 10px 8px 10px;color: white;border-radius: 5px;font-size: 12px !important;font-weight: 600;">Click Here to Download the complete Playbook</a></div>');
                });
                return;
              } 
              else if (res["webinar"] === true) {
								    
								    const urlParams = new URLSearchParams(window.location.search);
    const isUpcomingSubmit = urlParams.get('id') === 'upcoming_submit';

   <?php
                                $id = get_queried_object_id();
                                $l3 = get_field('level3_title', $id);
                                $slug = ($l3) ? sanitize_title(trim($l3)) : '';
                                $url = $slug ? home_url('/webinar/' . $slug . '/') : home_url('/webinar-level-3/?webinar_id=' . $id);
                                ?>
                                var redirectUrl = "<?php echo esc_url($url); ?>";

    // ✅ CASE 1: URL has ?id=upcoming_submit → show image
    if (isUpcomingSubmit) {

        var form = jQuery("#div_replace");

        form.fadeOut(300, function () {
            jQuery(this).replaceWith(`
                <div class="thank-you-message text-center" style="color:#000">
                    <img
                        src="https://360smsapp.com/wp-content/uploads/2025/12/Thanks-You-Popup-1.webp"
                        style="width:80%; display:block;"
                    />
                </div>
            `);
        });
		return;
    } 
    // ✅ CASE 2: URL does NOT have query → redirect
    else {
        window.location.replace(redirectUrl);
        return;
    }
                            } else if (res.url && res.url !== "" && res.url !== "undefined") {
                                // ✅ For all other pages — redirect as before
                                location.href = res.url;
                            }
                        } else if (res.st === parseInt(2)) {
                            jQuery("#vercode_error").html(res.msg);
                            return false;
                        } else if (res.st === parseInt(3)) {
                            jQuery("#last_name_error").html(res.msg);
                            return false;
                        } else if (res.st === parseInt(4)) {
                            jQuery("#email_error").html(res.msg);
                            return false;
                        } else if (res.st === parseInt(5)) {
                            jQuery("#company_error").html(res.msg);
                            return false;
                        } else if (res.st === parseInt(6)) {
                            jQuery("#phone_error").html(res.msg);
                            return false;
                        } else if (res.st === parseInt(8)) {
                            jQuery("#all_error").html(res.msg);
                            return false;
                        }
                        else if (res.st === parseInt(0)) {
                            jQuery("#all_error").html(res.msg);
                            return false;
                        }
                        else {
                            jQuery("#all_error").html("Something Went Wrong Please Try Again Later");
                            return false;

                        }


                    }
                });
            }


        });

    });

    function removeValidations(ids) {
        jQuery(ids).each(function (index, key) {
            jQuery("#" + key).keyup(function () {
                jQuery("#" + key + "_error").html('');
            });
        });
    }
    //  function  verify_emailad1(email){   
    //     if(email != ''){
    //        if(email.indexOf("@", 0) < 0){     
    //      jQuery('#email_error1').html('Invalid Email');      

    //      }
    //      else if(email.indexOf(".", 0) < 0){
    //       jQuery('#email_error1').html('Invalid Email');


    //     }else if (email.toLowerCase().slice(email.length - 9) == 'gmail.com') {
    //                 jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from gmail.com.');
    //             } else if (email.toLowerCase().slice(email.length - 9) == 'yahoo.com') {
    //                 jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from yahoo.com.');
    //             } else if (email.toLowerCase().slice(email.length - 10) == 'rediff.com') {
    //                 jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from rediff.com.');
    //             } else if (email.toLowerCase().slice(email.length - 11) == 'outlook.com') {
    //                 jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from outlook.com.');
    //             } else if (email.toLowerCase().slice(email.length - 11) == 'hotmail.com') {
    //                 jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from hotmail.com.');
    //             }else {
    //       jQuery('#email_error1').html(' ');
    //       jQuery('span.ldremailchk').show();
    //       var email_check = email.trim();

    //       var baseURL =  '<?php echo site_url(); ?>/wp-content/themes/thegem-child/new-checkdata-footer.php';
    //       jQuery.ajax({
    //         crossDomain: true,
    //         url: baseURL,
    //         method: 'POST',
    //         data: "email="+email_check,
    //         success: function(response) {
    //          jQuery('span.ldremailchk').hide();
    //          res = JSON.parse(response);
    //          if(res.status == false){

    //           jQuery('#email_error1').html('Invalid Email');
    //                     //   jQuery('#emailfirst').val('');
    //                       //jQuery('#ever').val('0');
    //                     }
    //                     else if(res.status == true){
    //                      jQuery('#email_error1').html('<span style="color:green">Valid Email</span>');

    //                        // jQuery('#ever').val('1'); 
    //                      }
    //                    }
    //                  });
    //     }


    //      }else{
    //         jQuery('#email_error1').html(' ');  
    //        jQuery('#email_error1').html('Email Required');  
    //      }

    //   }

    // New verify email homenewsletter

    function verify_emailad1(email) {
        if (email != '') {
            if (email.indexOf("@", 0) < 0) {
                jQuery('#email_error1').html('Invalid Email');


            }
            else if (email.indexOf(".", 0) < 0) {
                jQuery('#email_error1').html('Invalid Email');


            } else if (email.toLowerCase().slice(email.length - 9) == 'gmail.com') {
                jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from gmail.com.');

            } else if (email.toLowerCase().slice(email.length - 9) == 'yahoo.com') {
                jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from yahoo.com.');
            } else if (email.toLowerCase().slice(email.length - 8) == 'yahoo.in') {
                jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from yahoo.in.');
                return false;
            } else if (email.toLowerCase().slice(email.length - 10) == 'rediff.com') {
                jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from rediff.com.');
            } else if (email.toLowerCase().slice(email.length - 11) == 'outlook.com') {
                jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from outlook.com.');
            } else if (email.toLowerCase().slice(email.length - 11) == 'hotmail.com') {
                jQuery('#email_error1').html('Please enter your business email address. This form does not accept addresses from hotmail.com.');
            } else {
                jQuery('#email_error1').html(' ');
            }
        } else {
            jQuery('#email_error1').html(' ');
            jQuery('#email_error1').html('Email Required');
        }
    }

    function verify_emailad2(email) {
        if (email != '') {
            if (email.indexOf("@", 0) < 0) {
                jQuery('#email_error3').html('Invalid Email');

            }
            else if (email.indexOf(".", 0) < 0) {
                jQuery('#email_error3').html('Invalid Email');


            } else {
                jQuery('#email_error3').html(' ');
                jQuery('span.ldremailchk').show();
                var email_check = email.trim();

                var baseURL = '<?php echo site_url(); ?>/wp-content/themes/thegem-child/verifyfooteremail.php';
                jQuery.ajax({
                    crossDomain: true,
                    url: baseURL,
                    method: 'POST',
                    data: "email=" + email_check,
                    success: function (response) {
                        jQuery('span.ldremailchk').hide();
                        res = JSON.parse(response);
                        if (res.status == false) {

                            jQuery('#email_error3').html('Invalid Email');
                            //   jQuery('#emailfirst').val('');
                            //jQuery('#ever').val('0');
                        }
                        else if (res.status == true) {
                            jQuery('#email_error3').html('<span style="color:green">Valid Email</span>');

                            // jQuery('#ever').val('1'); 
                        }
                    }
                });
            }


        } else {
            jQuery('#email_error3').html(' ');
            jQuery('#email_error3').html('Email Required');
        }

    }
    jQuery(document).ready(function () {
        console.log("ready!");

        jQuery("#input-subs1").click(function (e) {
            e.preventDefault();
            var ids = ['emailfirst'];
            var email = jQuery('#emailfirst').val();
            removeValidations(ids);
            if (email == "") {
                jQuery("#email_error2").html('Required Field');
                return false;
            } else {
                jQuery(this).attr('disabled', true);
                jQuery('.post_outer').addClass('show');
                // var baseURL =  '<?php echo site_url(); ?>/wp-content/themes/thegem-child/vwebtolead.php';
                var baseURL = '<?php echo site_url(); ?>/wp-content/themes/thegem-child/new-checkdata-footer.php';
                var form = jQuery('#formFirstLeadfooter');
                jQuery.ajax({
                    url: baseURL,
                    method: 'post',
                    data: form.serialize(),
                    success: function (response) {
                        jQuery('.post_outer').removeClass('show');
                        var res = JSON.parse(response);
                        if (res.st === parseInt(1)) {
                            location.href = res.url;

                        } else if (res.st === parseInt(11)) {

                            jQuery("#email_error2").html(res.msg);
                            return false;
                        }

                        else {
                            jQuery("#all_error").html("Something Went Wrong Please Try Again Later");
                            return false;

                        }


                    }
                });
            }


        });

        jQuery("#input-subs2").click(function (e) {

            e.preventDefault();
            var ids = ['emailfirst1'];


            var email = jQuery('#emailfirst1').val();

            removeValidations(ids);
            if (email == "") {

                jQuery("#email_error3").html('Required Field');
                return false;
            } else if (jQuery('span#email_error3').text() != '') {
                return false;
            } else {
                jQuery(this).attr('disabled', true);
                // var baseURL =  '<?php echo site_url(); ?>/wp-content/themes/thegem-child/vwebtolead.php';
                var baseURL = '<?php echo site_url(); ?>/wp-content/themes/thegem-child/checkdatafooter.php';
                var form = jQuery('#formFirstLeadfooter');
                jQuery.ajax({
                    url: baseURL,
                    method: 'post',
                    data: form.serialize(),
                    success: function (response) {
                        var res = JSON.parse(response);
                        if (res.st === parseInt(1)) {
                            location.href = res.url;

                        } else if (res.st === parseInt(11)) {
                            jQuery("#email_error3").html(res.msg);
                            return false;
                        }

                        else {
                            jQuery("#all_error").html("Something Went Wrong Please Try Again Later");
                            return false;

                        }


                    }
                });
            }


        });

    });
    function verify_emaila2(email) {

        if (email != '') {
            if (email.indexOf("@", 0) < 0) {
                jQuery('#email_error2').html('Invalid Email');


            }
            else if (email.indexOf(".", 0) < 0) {
                jQuery('#email_error2').html('Invalid Email');


            } else if (email.toLowerCase().slice(email.length - 9) == 'gmail.com') {
                jQuery('#email_error2').html('Please enter your business email address. This form does not accept addresses from gmail.com.');

            } else if (email.toLowerCase().slice(email.length - 9) == 'yahoo.com') {
                jQuery('#email_error2').html('Please enter your business email address. This form does not accept addresses from yahoo.com.');
            } else if (email.toLowerCase().slice(email.length - 8) == 'yahoo.in') {
                jQuery('#email_error2').html('Please enter your business email address. This form does not accept addresses from yahoo.in.');
                return false;
            } else if (email.toLowerCase().slice(email.length - 10) == 'rediff.com') {
                jQuery('#email_error2').html('Please enter your business email address. This form does not accept addresses from rediff.com.');
            } else if (email.toLowerCase().slice(email.length - 11) == 'outlook.com') {
                jQuery('#email_error2').html('Please enter your business email address. This form does not accept addresses from outlook.com.');
            } else if (email.toLowerCase().slice(email.length - 11) == 'hotmail.com') {
                jQuery('#email_error2').html('Please enter your business email address. This form does not accept addresses from hotmail.com.');
            } else {
                jQuery('#email_error2').html(' ');
            }
        } else {
            jQuery('#email_error2').html(' ');
            jQuery('#email_error2').html('Email Required');
        }
    }

</script>

<style>
    span.loaderclasss.text-center h4 {
        font-size: 12px;
        margin-top: -15px;
    }
</style>

<link href="<?php echo site_url(); ?>/wp-content/themes/thegem-child/css/flag-tel.css" rel="stylesheet" media="screen">
<script src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/intlTelInput.min.js"></script>
<script src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/utils.js"></script>
<!-- Start cookieyes banner -->
<!-- <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/e68af974c305953531a8b642/script.js"></script> 
 -->
<!-- End cookieyes banner -->

<script>
    $(document).ready(function () {
        $('#phone_code').val('');
    });
</script>
<!--<div id="custom-popup" style="display:none;">
    <div class="popup-overlay"></div>
    <div class="popup-content">
        <span class="popup-close">&times;</span>
        <a href="https://360degreecloud.com/mission-ai-possible/?utm_source=SMS&utm_medium=Popup&utm_campaign=Mission_AI" target="_blank"><img src="https://360smsapp.com/wp-content/uploads/2025/10/Mission-AI-Pop-Up-DC-8.png" alt="Popup Image">
    </div>
</div>-->
<style>
    /* Overlay to blur background with 80% opacity */
    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* background: rgba(0,0,0,0.8); 
    backdrop-filter: blur(5px); */
        z-index: 9998;
    }

    /* Popup box */
    .popup-content {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: transparent;
        /* no background to keep image alone */
        padding: 0;
        border-radius: 0;
        z-index: 9999;
        text-align: center;
    }

    /* Close button */
    .popup-close {
        position: absolute;
        top: 10px;
        right: 20px;
        font-size: 32px;
        color: #fff;
        cursor: pointer;
        z-index: 10000;
    }

    /* Image styling */
    .popup-content img {
        width: 500px;
        /* set image width for desktop */
        height: auto;
        border: none;
        /* no border */
        display: block;
    }

    /* Media query for mobile devices */
    @media only screen and (max-width: 768px) {
        .popup-content {
            position: fixed;
            /* keeps it positioned relative to the viewport */
            top: 50%;
            /* move 50% from top */
            left: 50%;
            /* move 50% from left */
            transform: translate(-50%, -50%);
            /* perfectly center */
            width: 90vw;
            /* take up 90% of screen width */
            max-width: 90%;
            margin: 0 !important;
            /* remove top margin override */
            z-index: 9999;
            /* ensure it's above other elements */
        }

        .popup-content img {
            width: 100%;
            /* image scales to container width */
            height: auto;
        }
    }
</style>
<script>
    jQuery(document).ready(function ($) {
        const popupKey = 'customPopupTime';
        const popupDelay = 15 * 60 * 1000; // 15 minutes

        function showPopup() {
            jQuery('#custom-popup').fadeIn();
        }

        function hidePopup() {
            jQuery('#custom-popup').fadeOut();
            localStorage.setItem(popupKey, Date.now());
        }

        setTimeout(function () {
            const lastShown = localStorage.getItem(popupKey);
            if (!lastShown || (Date.now() - lastShown > popupDelay)) {
                showPopup();
            }

            jQuery('.popup-close, .popup-overlay').on('click', function () {
                hidePopup();
            });

            jQuery('.popup-content a').on('click', function () {
                hidePopup();
            });
        }, 10000); // 10 seconds delay
    });
</script>


 <!--Blog popup contact form code-->
  <style>
     .open-popup-form-on-click{
          cursor: pointer;
     }
      /*.modal { z-index: 9999999 !important; }*/
      
      #contactFormPopup{
    z-index: 1060 ;
    display:none;
}
 </style>
    
<!-- Bootstrap Modal -->
<div class="modal fade" id="contactFormPopup" tabindex="-1" aria-labelledby="contactFormPopupLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">

            <!-- Close Button -->
            <div class="modal-header">
                 <h2 class="modal-title ps-4" style="font-weight: 800; font-size: 24px; font-family: 'Plus Jakarta Sans', sans-serif;" id="contactFormPopupLabel">Contact Our Expert</h2> 
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <?php echo do_shortcode('[contact_page_multi_shortcode]'); ?>
            </div>

        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {

    const triggers = document.querySelectorAll(".open-popup-form-on-click");

    triggers.forEach(function(trigger) {
        trigger.addEventListener("click", function () {
            
            const popup = new bootstrap.Modal(
                document.getElementById("contactFormPopup")
            );

            popup.show();
        });
    });

});

</script>