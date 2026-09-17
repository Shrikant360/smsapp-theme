
    jQuery(document).ready(function(){
  
      jQuery(".myBtnsPopup").click(function(){
        jQuery("#myModalPopup").show();
      });
      jQuery(".close").click(function(){
         jQuery("#myModalPopup").hide();
      });

      //-----------------2ndpopup----------
      jQuery(".myBtnspt").click(function(){
        jQuery("#myModalpt").show();
      });
      jQuery(".close").click(function(){
         jQuery("#myModalpt").hide();
      });

      //-----------------3rdpopup----------
      jQuery(".myBtnsptt").click(function(){
        jQuery("#myModalptt").show();
      });
      jQuery(".close").click(function(){
         jQuery("#myModalptt").hide();
      });
      //-----------------4th-popup----------
      jQuery(".myBtnsforth").click(function(){
        jQuery("#myModalforth").show();
      });
      jQuery(".close").click(function(){
         jQuery("#myModalforth").hide();
      });



    });
  
    let modalPopup = document.getElementById("myModalPopup");
    let btnPopup   = document.getElementsByClassName("myBtnsPopup")[0];
    let spanPopup = document.getElementsByClassName("close")[0];
  
    a.onclick = function() {
      modalPopup.style.display = "block";
    }
    
    spanPopup.onclick = function() 
    {
      modalPopup.style.display = "none";
    }
  
    window.onclick = function(event) {
      if (event.target == modalPopup) {
        modalPopup.style.display = "none"; 
      }
    }

    //---------------------------2nd----------------------
    let modalpt = document.getElementById("myModalpt");
    let btnpt   = document.getElementsByClassName("myBtnspt")[0];
    let spanpt = document.getElementsByClassName("close")[0];
    a.onclick = function() {
      modalpt.style.display = "block";
    }
    
    spanpt.onclick = function() 
    {
      modalpt.style.display = "none";
    }
  
    window.onclick = function(event) {
      if (event.target == modalpt) {
        modalpt.style.display = "none"; 
      }
    }

    //---------------------------3rd----------------------
    let modalptt = document.getElementById("myModalptt");
    let btnptt   = document.getElementsByClassName("myBtnsptt")[0];
    let spanptt = document.getElementsByClassName("close")[0];
    a.onclick = function() {
      modalptt.style.display = "block";
    }
    spanptt.onclick = function() 
    {
      modalptt.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modalptt) {
        modalptt.style.display = "none"; 
      }
    }
    //---------------------------4th----------------------
    let modalforth = document.getElementById("myModalforth");
    let btnforth   = document.getElementsByClassName("myBtnsforth")[0];
    let spanforth = document.getElementsByClassName("close")[0];
    a.onclick = function() {
      modalforth.style.display = "block";
    }
    spanforth.onclick = function() 
    {
      modalforth.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modalforth) {
        modalforth.style.display = "none"; 
      }
    }
   
       