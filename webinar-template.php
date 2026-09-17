<?php
/*Template Name:Webinar*/
get_header(); ?>
<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
<div id="main-content" class="main-content">

<?php
//echo 'jku';
	while ( have_posts() ) : the_post();
		//get_template_part( 'content', 'page' );
 /* The template used for displaying page content on home page */
 
	echo '<div class="block-content main-box">';
	?>
	<section class="background-image"> 
		<div class="mobile-background-8">
			
<!-- 			<div class="wrapper-inner-title">
 				<div class="project-title">
					<h1>
						<?php echo get_the_title();?>
					</h1> 
				</div> 
			</div> -->
		</div>
		</section>
	
	<h1 class="webinarc">Our Webinars</h1>
		<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
<!--  If necessary, please modify the charset parameter to specify the        -->
<!--  character set of your HTML page.                                        -->
<!--  ----------------------------------------------------------------------  -->



<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <FORM> element to your page.             -->
<!--  ----------------------------------------------------------------------  -->
<style>
    @media (max-width: 1199px){
        .row > * {
            margin-top: 0;
            margin-bottom: 6px;
        }
        .row{
            margin-top: 0;
            margin-bottom:0;
        }
    }
    form label {
        display: inline-block;
        width: 100px;
    }

    form div {
        margin-bottom: 10px;
    }

    .error {
        color: red !important;
        margin-left: 5px;
    }

    label.error {
        display: inline;
    }
    @media(max-width:767px){
        #webnar>div {
            flex-wrap: wrap;
        }
    }
</style>
	<?php
 $args = array(  
        'post_type' => 'webniar',
        'post_status' => 'publish',
        'posts_per_page' => 6, 
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1
        
       
    );
    $loop = new WP_Query( $args ); 
     echo '<div class="container"><div class="row" id="webnar">';   
    while ( $loop->have_posts() ) : $loop->the_post(); 
      // the_title(); 
      $pid = get_the_ID();
       $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
  echo '<div class="vc_col-sm-12 d-flex col-sm-12-main"><div class="vc_col-sm-6 webnarpost" id="myBtn" data-id="myModal'.$pid.'">';
        /* link thumbnail to full size image for use with lightbox*/
        //echo '<a href="'.esc_url($featured_img_url).'" rel="lightbox">'; 
        //
	echo '<div class="img-container">';
        $plivk = get_the_permalink(); 
	//echo '<a href="'.$plivk.'">';
            the_post_thumbnail('full');
	echo '<div class="hover_title">Watch Video</div>';
	echo '</div>';
	echo '</div>';
	echo '<div class="vc_col-sm-6 content-container"><div><h3>';the_title();
        echo '</h3><p class="web-content">'.get_the_excerpt().'</p></div></div></div><br/>';?>
	<!--div class="block-2 border-top">
            <?php // Display the thumbnail of the previous post ?>
            <div class="float-left"> <?php
              /*  $prevPost = get_previous_post();
                $prevthumbnail = get_the_post_thumbnail($prevPost->ID,'thumbnail'); ?>
                <h2><?php previous_post_link('%link', 'Previous'); ?></h2>
                <?php previous_post_link('%link', $prevthumbnail); ?>
            </div>

        <?php // Display the thumbnail of the next post ?>
            <div class="float-right"> <?php
                $nextPost = get_next_post();
                $nextthumbnail = get_the_post_thumbnail($nextPost->ID); ?>
                <h2><?php next_post_link('%link', 'Next'); ?></h2>
                <?php next_post_link('%link', $nextthumbnail); */?>
            </div>
        </div -->
	
		<div id="myModal<?php echo get_the_ID();?>" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Please fill out your information below</p>
	  <?php echo do_shortcode('[formshortcodeval]');?>
  </div>

</div><?php
    endwhile;
	 echo '<div class="navigation">';
    $big = 999999999; // need an unlikely integer
 echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $loop->max_num_pages
) );
   // echo do_shortcode('[ajax-loadmore-button]');
echo '</div>';
	?>


	<?php
echo '</div></div></div>';
	
    wp_reset_postdata(); 

	endwhile;
?>
	<style>
		
.page-template .sub-menu.styled.dl-submenu-disabled.vertical-invert{
	max-height: 350px;
	overflow-y: auto;
	overflow-x: hidden;
}

#primary-menu.no-responsive>li>ul {
    top: 100% !important;
    left: 0;
}
		
		
	.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 100000 !important; /* Sit on top */
  padding-top: 5%; /* Location of the box */
  left: 0;
  top: 0;
		bottom: 0px;
		right: 0px;
/*   height: 100%; Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
/* 		section{
margin-bottom:20px;
} */
		.main-box .row {
			margin-left: 0px;
			margin-right: 0px;
		}
		.background-image{
			height: 320px;
			margin-bottom:10px;
		}
.mobile-background-8{
/* 	padding-top: 50px; */
 	background-image: url('https://360smsapp.com/wp-content/uploads/2023/01/imgpsh_fullsize_anim-1536x440-1.jpg'); 
	background-position: center center;
	background-size: cover;
	background-repeat: no-repeat;
/* 	background: #2B7EBF; */
/* 	padding-bottom: 100px; */
	background-blend-mode: multiply;
	margin-bottom:20px;
	height: 100%;
}
.wrapper-inner-title{
max-width: 900px;
margin: auto;
}
.project-title{
width: 100%;
margin: 0 auto;
text-align: center;
}
.project-title h1{
text-shadow: 1px 1px 2px #343434, 2px 2px 10px #000;
text-transform: none!important;
font-size: 57px!important;
font-weight: 700!important;
color: #fbfdfd!important;
/* font-family: "freight-text-pro",Georgia,serif!important; */
	font-family: sans-serif!important;
height: auto;
line-height: 1.1!important;
padding: 20px 0 20px;
margin: 0;
margin-top: 30px;
}
@media(max-width:768px){
.project-title h1{
font-size: 40px!important;
}

	.modal-content{
		width: 90% !important;
	}
	
}

		
		.modal-content .test select{
			padding: 7px 10px !important;
		}
		
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
	margin-bottom: 30px;
    margin-top: 20px;
}
		.d-flex{
			display: flex !important;
		}
		.webnarpost{
			position:relative;
/* 			margin-bottom: 20px; */
		}
		.content-container{
			display: flex;
			align-items: center;
/* 			box-shadow: 0 0 40px 0 rgba(0,0,0,.38);
    		padding: 30px; */
		}
		.col-sm-12-main{
			border-radius: 10px;
				box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);
				background-color: #eef0f1;
			    padding: 38px 25px;
		}
		.content-container>div{
/* 			box-shadow: 0 0 10px 0 rgba(0,0,0,.38); */
    			padding: 30px;
		}
		.main-box .content-container h3{
			font-weight: bold;
			font-size: 25px;
			line-height: 36px;
			margin: 6px 0px;
			
		}
		.content-container p{
				margin: 6px 0px;
/* 				font-family: 'Source Sans Pro'; */
				
				color: #5f727f;
				line-height: 30px;
				font-weight: normal;
				font-size: 20px;
		}
		.webnarpost img{
			max-width: 100%;
    		height: auto;
		}
		
/* 		.page-template #main{
			    z-index: 9999 !important;
		} */
		.block-content{
			padding-top: 0px !important;
		}
		.block-content .webnarpost img{
			    width: 100%;
				height: 100%;
				object-fit: fill;
				border-radius: 10px;
		}
		.block-content .img-container{
				height: 330px;
    			border-radius: 10px;
		}
		.img-container{
				width: 100%;
			    display: inline-block;
    			position: relative;
				height: 386px;
		}
		.main-box:last-of-type{
			padding-bottom: 20px;
		}
		.hover_title{
			position:absolute;
			top:0;
			left: 0px;
			justify-content:center;
			align-items:center;
			opacity: 0;
			background:rgba(0,0,0,0.8);
			font-size:22px;
			color:#fff;
			font-weight:700;
			text-align:center;
			transition: all 0.3s linear;
			bottom: 0px;
			    display: flex;
			right: 0px;
			    border-radius: 10px;
		}
		.webnarpost .img-container:hover .hover_title{
			cursor: pointer;
			opacity: 1;
/* 			right: 0px; */
/* 			left: 0px; */
		}
/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
		.modal-content>p{
			 width: 100%;
            margin: 0px auto;
            padding: 20px;
			font-size: 30px;
		}
	  .test{
            width: 90%;
            margin: 0 auto;
            padding: 20px;
        }
        .test input, .test textarea, .test select{
            background-color: #f5f5f5;;
            padding: 4px 10px;
            width: 100%;
            border: 1px solid #ccc;
            outline: none;
        }
        .test label{
            font-size: 16px;
            font-family: Arial;
            display: block;
            margin-bottom: 7px;
        }
        .test form .flex>div, .flex-sub{
            margin-bottom: 20px;
			    width: 45%;
        }
        .test button{
            padding: 12px 35px;
            background-color:#00BCD4;
            font-size: 18px;
/*             border-radius: 10px; */
            outline: none;
            border: none;
            margin-top: 6px;
            color: white;
            box-shadow: 2px 3px 9px 0px rgba(0,0,0,0.5)
        }
        .test button:hover{
            background-color: #3c3950;
            color: white;
        }
        .test .btn{
            text-align: center;
        }
        .test .flex{
            display: flex;
			justify-content: space-between;
            
        }
		@media(max-width:480px){
			.test form .flex>div, .flex-sub{
			    width: 100%;
        }
			 .test .flex{
            display: flex;
			justify-content: space-between;
				 flex-wrap:wrap;
            
        }
			.test{
            width: 100%;
            padding: 20px;
        }
		}
		@media(max-width:768px){
				.test{
            width: 100%;
            padding: 20px;
        }
			.page-template-webinar-template .top-area-menu{
       		 margin-top: 20px;
    			margin-left: 119px;
    }
		}
		@media(max-width:1199px){
			.main-box .content-container h3 {
				font-size: 20px;
				line-height: 30px;
			}
			.content-container p{
				font-size: 18px;
    			line-height: 27px;
			}
			.block-content .img-container {
				height: 310px;
			}
		}
		@media(max-width:991px){
			.background-image {
				height: 280px;
			}
			.block-content .img-container {
				height: 300px;
			}
			.content-container p {
				font-size: 18px;
				line-height: 26px;
			}
			..main-box .vc_col-sm-6 {
				padding: 0;
			}
			.block-content .content-container>div {
				padding: 10px;
			}
		}
		@media(max-width:767px){
			.background-image {
				height: 210px;
			}
			.block-content .img-container {
				height: 280px;
				margin-bottom: 15px;
			}
			.main-box .vc_col-sm-12 br{
				display: none;
			}
			.main-box .vc_col-sm-12{
				padding: 0px;
			}
			.main-box .col-sm-12-main{
				padding-top: 20px;
			}
			.webnarpost {
				width: 100%;
			}
			.block-content .content-container>div {
				padding: 20px 0;
			}
		}
		@media(max-width:560px){
			.mobile-background-8 {
				 background-position: 25% 100%;
			}
			.block-content .content-container>div {
				padding: 10px 0 20px;
			}
			.main-box .content-container h3 {
					font-size: 18px;
					line-height: 28px;
				}
				.main-box .content-container p {
					font-size: 17px;
					line-height: 26px;
				}
			
 			.main-box .mobile-background-8 {
    			padding-top: 50px;
			}
			.modal-content>p {
				padding: 15px 0px;
			}
			.test {
				padding: 20px 0;
			} 
		}
			@media(max-width:414px){
				.background-image {
					height: 225px;
				}
				.mobile-background-8 {
					background-position: 18% 100%;
				}
				.main-box .content-container p {
					font-size: 16px;
					line-height: 24px;
				}
				.vc_col-sm-12 {
				padding: 0px;
					box-shadow: none;
					background-color: #fff;
			}
				.main-box .vc_col-sm-6{
					padding: 0;
				}
				.main-box .col-sm-12-main {
					padding-top: 0;
				}
				.block-content .content-container>div {
					padding: 10px 0 10px;
				}
				.main-box .content-container h3 {
					line-height: 26px;
				}
				.modal-content>p {
					line-height: 32px;
				}
			
		}
		@media(max-width:1024px){
			.page-template-webinar-template #footer-menu li{
				margin-top: 11px;
				left: -5px;
		}
</style>
	<script>// Get the modal
/* var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} */
		jQuery(".webnarpost").click(function(){
			var dataid = jQuery(this).attr('data-id');
  jQuery('#'+dataid).show();
			jQuery("#main").css("z-index", "9999");
});
		jQuery(".close").click(function(){
  jQuery('.modal').hide();
			 jQuery('.error').hide();
			error
			jQuery("#main").css("z-index", "5");
});	
		jQuery( document ).ready(function() {
	jQuery(".webnarpost").click(function(){
//var dataid = jQuery(this).attr('data-id');
		
});
			});
		
</script>

</div><!-- #main-content -->

<?php
get_footer();
