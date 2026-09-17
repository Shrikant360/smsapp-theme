function verify_emailad2(email) {
    if (email != '') {
        jQuery('#input-subs2').attr('disabled',true);
        if (email.indexOf("@", 0) < 0) {
            jQuery('#email_error3').html('Invalid Email');

        }
        else if (email.indexOf(".", 0) < 0) {
            jQuery('#email_error3').html('Invalid Email');


        } else if (email.toLowerCase().slice(email.length - 9) == 'gmail.com' || email.slice(email.length - 9) == 'Gmail.com') {
            jQuery('#email_error3').html('Please enter your business email address. This form does not accept addresses from gmail.com.');
        } else if (email.toLowerCase().slice(email.length - 9) == 'yahoo.com' || email.slice(email.length - 9) == 'Yahoo.com') {
            jQuery('#email_error3').html('Please enter your business email address. This form does not accept addresses from yahoo.com.');
        } else if (email.toLowerCase().slice(email.length - 10) == 'rediff.com' || email.slice(email.length - 9) == 'Rediff.com') {
            jQuery('#email_error3').html('Please enter your business email address. This form does not accept addresses from rediff.com.');
        } else if (email.toLowerCase().slice(email.length - 11) == 'outlook.com' || email.slice(email.length - 11) == 'Outlook.com') {
            jQuery('#email_error3').html('Please enter your business email address. This form does not accept addresses from outlook.com.');
        } else if (email.toLowerCase().slice(email.length - 11) == 'hotmail.com' || email.slice(email.length - 11) == 'Hotmail.com') {
            jQuery('#email_error3').html('Please enter your business email address. This form does not accept addresses from hotmail.com.');
        } else {
            jQuery('#email_error3').html(' ');
            jQuery('span.ldremailchk3').show();
            var email_check = email.trim();

            var baseURL = '/wp-content/themes/thegem-child/verifyfooteremail.php';
            jQuery.ajax({
                crossDomain: true,
                url: baseURL,
                method: 'POST',
                data: "email=" + email_check,
                success: function (response) {
                    jQuery('span.ldremailchk3').hide();
                    res = JSON.parse(response);
                    if (res.status == false) {

                        jQuery('#email_error3').html('Invalid Email');
                        //   jQuery('#emailfirst').val('');
                        //jQuery('#ever').val('0');
                    }
                    else if (res.status == true) {
                        jQuery('#input-subs2').attr('disabled',false);
                        jQuery('#email_error3').html('<span style="color:green">Valid Email</span>');

                        // jQuery('#ever').val('1'); 
                    }
                }
            });
        }


    } else {
        jQuery('#input-subs2').attr('disabled',true);
        jQuery('#email_error').html(' ');
        jQuery('#email_error').html('Email Required');
    }

}
    jQuery("#input-subs2").click(function(e){
    
     e.preventDefault();
    var ids = ['emailfirst1'];
    
  
    var email = jQuery('#emailfirst1').val();
   
     removeValidations(ids);
    if(email == "" ){
        
     jQuery("#email_error3").html('Required Field');
     
     return false;   
    }else if(jQuery('span#email_error3').text() != ''){
        return false;
    }
  
  
    else{
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
                  jQuery("#email_error3").html(res.msg);
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

(function () {
        "use strict";
        var jQueryPlugin = (window.jQueryPlugin = function (ident, func) {
            return function (arg) {
                if (this.length > 1) {
                    this.each(function () {
                        var $this = $(this);

                        if (!$this.data(ident)) {
                            $this.data(ident, func($this, arg));
                        }
                    });

                    return this;
                } else if (this.length === 1) {
                    if (!this.data(ident)) {
                        this.data(ident, func(this, arg));
                    }

                    return this.data(ident);
                }
            };
        });
    })();

    (function () {
        "use strict";
        function Accordion($roots) {
            var element = $roots;
            var accordion = $roots.first("[data-accordion]");
            var accordion_target = $roots.find("[data-accordion-item]");
            var accordion_content = $roots.find("[data-accordion-content]");
            $(accordion_target).click(function () {
                $(this).toggleClass("opened");
                $(this).find(accordion_content).slideToggle("slow");
                $(this).siblings().find(accordion_content).slideUp("slow");
                $(this).siblings().removeClass("opened");
            });
        }
        $.fn.Accordion = jQueryPlugin("Accordion", Accordion);
        $("[data-accordion]").Accordion();

        function Ripple_Button($root) {
            var elements = $root;
            var ripple_btn = $root.first("[data-ripple]");
            $(ripple_btn).on("click", function (event) {
                event.preventDefault();
                var $div = $("<div/>"),
                    btnOffset = ripple_btn.offset(),
                    xPos = event.pageX - btnOffset.left,
                    yPos = event.pageY - btnOffset.top;
                $div.addClass("ripple-effect");
                $div.css({
                    height: ripple_btn.height(),
                    width: ripple_btn.height(),
                    top: yPos - $div.height() / 2,
                    left: xPos - $div.width() / 2,
                    background: ripple_btn.data("ripple") || "#ffffff26"
                });
                ripple_btn.append($div);

                window.setTimeout(function () {
                    $div.remove();
                }, 2000);
            });
        }
        $.fn.Ripple_Button = jQueryPlugin("Ripple_Button", Ripple_Button);
        $("[data-ripple]").Ripple_Button();
    })();

    $(".hover").mouseleave(
        function () {
            $(this).removeClass("hover");
        }
    );
    const Menubar = document.getElementById("menu-bar");
    const MenuContent = document.getElementById("menu-content");
    

    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 50) {
            jQuery('#nav-main').addClass('nav-fixed');
        } else {
            jQuery('#nav-main').removeClass('nav-fixed');
        }
    });