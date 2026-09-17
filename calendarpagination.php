<?php
//session_start();
$path = preg_replace('/wp-content.*$/', '', __DIR__);
$path = preg_replace('/wp-content(?!.*wp-content).*/', '', __DIR__);
include ($path . 'wp-load.php');
?>
<style>
	
        button.tagbutton11{
            display: block;
            background-color: transparent;
            padding: 5px 8px;
            color: #fff;
            border: 1px solid;
            margin-bottom: 12%;
            font-size: 14px;
        }

        .card211{ margin: 0px;
            box-shadow: 0 0 15px rgb(0 0 0 / 20%);
            width: 300px;
            height: 230px;
            padding: 15px;
            color: #fff;
            background-color: #52b6ff;
            background-image: linear-gradient(to right, #1b4371 , #3572b8);
            padding: 8% 5% 8% 5%;
        }

        p.date11{
            font-size: 12px;
            margin-top: 5%;
            font-weight: 400;
        }
</style>
<?php
global $wpdb, $post;
$html = "";
 $keyword = $_GET['keywords']; // echo 'dddddddddd';
//  echo $keyword; 
//die;
 $calencats = $_GET['calencats'];
if($calencats == 'all'){
    $calencats = '';
}else{
    $calencats = $_GET['calencats'];
}
 if($calencats == ''){
 	$the_query_total = new WP_Query( array('posts_per_page'=>15,
 		'post_type'=>'calen',
 		'orderby'   => 'publish_date',
 		'order' => 'DESC',	
 		
 		'meta_query'  => array(
 			array(
 				'key'       => 'display_posts_data',
 				'compare'   => '==',
 				'value'     => 'Yes',
 				'type'      => 'string'
 			)
 		),
 		'post_status' => 'publish',
 		's' => esc_attr( $keyword  ),
 		'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
 ); 
 } else{ 
 	$the_query_total = new WP_Query( array('posts_per_page'=>15,
 		'post_type'=>'calen',
 		'orderby'   => 'publish_date','order' => 'DESC','post_status' => 'publish', 
 		's' => esc_attr( $keyword  ),'tax_query' => array(
 			array (
 				'taxonomy' => 'cal_category',
 				'field' => 'slug',
 				'terms' => $calencats,
 			)
 		), 
 		'meta_query'  => array(
 			array(
 				'key'       => 'display_posts_data',
 				'compare'   => '==',
 				'value'     => 'Yes',
 				'type'      => 'string'
 			)
 		),
 		'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
 ); 
 }

 
    // echo "<pre>"; print_r($the_query_total); die;
 

 $total_post = $the_query_total->found_posts;
//  echo "zjdfhkjshdfkjhsdkjf".$total_post; die;
 $numofrecords = $_GET['numofrecords'];

 $page = $_GET['page'];
 $keyword = $_GET['keywords'];
 $Limitpage      = $page-1;
 $start          = $Limitpage * $numofrecords;
 $num_rows = $total_post;


// echo "comingggggg"; die;



 function Pagination($numofrecords, $count, $page)
 {	
 	?>
 	<style>
        ul.paginationstyle{
            display: flex !important;
            flex-wrap: wrap !important;
            position: relative !important;
            left: 33% !important;
            top: 15px !important;
        }
        ul.list-inline li {
            list-style: none;
            padding:1% 2%;
        }
        li.current-page {
            color: #fff !important;
            border: 1px solid #2980b9 !important;
            background: #2980b9 !important;
        }
        li.active
        {
            cursor: pointer;
        }
        li.active ,li.inactive {
            color: #2980b9;
            border: 1px solid #dee2e6 ;
            background: #FFF;
        }
        li.inactive {
            display:none;
        }		
        @media(max-width:767px){
            ul.paginationstyle {
               left: 18% !important;
               top: 0px !important;
           }
           ul.list-inline li{
               padding: 1% 3%;
           }
       }
   </style>	
   <?php
   $per_page = $numofrecords; 
   $previous_btn = true;
   $next_btn = true;
   $first_btn = true;
   $last_btn = true;
   $start = $page * $per_page;
   $cur_page = $page;
   $msg = "";
//$keywords = $keyword;
   $no_of_paginations = ceil($count / $per_page);

   if($count>0){
     if ($cur_page >= 13) {
        $start_loop = $cur_page - 15;
        if ($no_of_paginations > $cur_page + 15)
           $end_loop = $cur_page + 15;
       else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 12) {
           $start_loop = $no_of_paginations - 12;
           $end_loop = $no_of_paginations;
       } else {
           $end_loop = $no_of_paginations;
       }
   } else {
    $start_loop = 1;
    if ($no_of_paginations > 13)
       $end_loop = 13;
   else
       $end_loop = $no_of_paginations;
}
if( $no_of_paginations == 1){
				//condition for not showing pagination if we have less than 10 posts.
}else{
    $msg .= "<div><ul class='paginationstyle list-inline'>";

    if ($first_btn && $cur_page > 1) {
       $msg .= "<li p='1' class='active hidebtn' onclick='Pagination(1)' style='border-top-left-radius: 5px;
       border-bottom-left-radius: 5px;'><<</li>";
   } else if ($first_btn) {
       $msg .= "<li p='1' class='inactive hidebtn' style='border-top-left-radius: 5px;
       border-bottom-left-radius: 5px;' ><<</li>";
   }
   if ($previous_btn && $cur_page > 1) {
       $pre = $cur_page - 1;
				//$msg .= "<li p='$pre' style='background-color:transparent;position: absolute; left: 1%;list-style:none;'><button class='pag1 active prevme1 pink-btn pinkNext yellowNext btn-hover float-left' onclick='Pagination($pre)' style='background-color: #da5e46 !important; border: none; padding: 5px 12px 5px 12px !important;color: #fff; border-radius: 5px !important;justify-content:flex-end;'>Previous</button></li>";
   } else if ($previous_btn) {
				//$msg .= "<li class='inactive' ><button class='inactive prevme1 pinkNext pink-btn yellowNext btn-hover float-left'  >Previous</button></li>";
   }
   for ($i = $start_loop; $i <= $end_loop; $i++) {
       if ($cur_page == $i)
          $msg .= "<li p='$i' class='active hidebtn current-page' >{$i}</li>";
      else
          $msg .= "<li p='$i' class='active hidebtn' onclick='Pagination($i)' >{$i}</li>";
  }
  if ($next_btn && $cur_page < $no_of_paginations) {
   $nex = $cur_page + 1;
			        //$msg .= "<li  p='$nex' style='background-color:transparent;position: absolute; right: 2%;list-style: none;'><button class='pag1 active nextme1 pink-btn pinkNext yellowNext btn-hover float-right' onclick='Pagination($nex)' style='background-color: #da5e46 !important;color: #fff;border: none;padding: 5px 12px 5px 12px !important;color: #fff;border-radius: 5px !important;'>Next</button></li>";
} else if ($next_btn) {
			        //$msg .= "<li ><button class=' inactive nextme1 pink-btn pinkNext yellowNext btn-hover float-right' >Next</button></li>";
}

if ($last_btn && $cur_page < $no_of_paginations) {
   $msg .= "<li p='$no_of_paginations' class='active hidebtn' style='border-top-right-radius: 5px;
   border-bottom-right-radius: 5px;' onclick='Pagination($no_of_paginations)' > >> </li>";
} else if ($last_btn) {
   $msg .= "<li p='$no_of_paginations' class='inactive hidebtn'  style='border-top-right-radius: 5px;
   border-bottom-right-radius: 5px;' > >> </li>";
}

}
return $msg;
}
else{
 return '<div class="col-md-12 text-center" style="color:#fff !important;"><strong><h4>No Record Found</h4></strong></div>';
}
}



$html.='<div class="row"><div id="parent" class="col-md-12">';

if($calencats == ''){
  $the_query = new WP_Query( array('posts_per_page'=>$numofrecords,'offset'=> $start,
     'post_type'=>'calen',
     'orderby'   => 'publish_date','order' => 'DESC','post_status' => 'publish',
     'meta_query'  => array(
        array(
           'key'       => 'display_posts_data',
           'compare'   => '==',
           'value'     => 'Yes',
           'type'      => 'string'
       )
    ), 's' => esc_attr( $keyword  ),
     'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
); 
} else{
  $the_query = new WP_Query( array('posts_per_page'=>$numofrecords,'offset'=> $start,
     'post_type'=>'calen',
     'orderby'   => 'publish_date','order' => 'DESC', 
     'meta_query'  => array(
        array(
           'key'       => 'display_posts_data',
           'compare'   => '==',
           'value'     => 'Yes',
           'type'      => 'string'
       )
    ),'post_status' => 'publish', 's' => esc_attr( $keyword  ),'tax_query' => array(
        array (
           'taxonomy' => 'cal_category',
           'field' => 'slug',
           'terms' => $calencats,
       )
    ),
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
); 
}
$i = 1;   
$cou = $the_query->found_posts;   
if($cou > 0){
  $html.='';
   } //echo "<pre>"; print_r($the_query); //die;
   while ($the_query -> have_posts()) : $the_query -> the_post();   
   	$pid = get_the_ID();  
   	$terms = get_the_terms( $pid, 'cal_category' );
   	if ( !empty( $terms ) ){
    // get the first term
    $term = array_shift( $terms ); //print_r($term);
    $slug = $term->slug; 
	$names = $term->name; //$link = get_term_link($term->slug);
}
     //$smeta = get_post_meta($pid ,'_EventStartDate');



  		$post_id = get_the_ID(); // or use the post id if you already have it
  		$displaymonthtext = get_post_meta( $post->ID, 'display_month_data' , true );  
  		$displayear_text = get_post_meta( $post->ID, 'display_year_data' , true ); 

  		if( $i == 1){
  			$class="askquestion activeQuestiosn col-sm-12";  
  		} else{
  			$class="askquestion col-sm-12";
  		}
  	//	$content = get_the_content(); $desc = strip_tags(do_shortcode($content));
//echo "kjdhfjk";
//echo get_field("add_short_description");
//die; 
//$data = get_post_meta($post_id , 'display_posts_data' , true);
  		$data_code = ($displaymonthtext) ? ", " : "";
  		$html.='    	<div class="box col-sm-6 col-md-4 '.$slug.'">
  		<a href="'.get_the_permalink().'" target="_blank">
  		<div class="main211">
  		<div class="card211">
  		<button class="tagbutton11">'.$names.'</button>
  		<div class="card-content-user-contact11 user-contact11">
  		<span style="color: #fff;display: block;">'.get_the_title().'
  		</span>
  		<p class="date11" style="color: #fff;">'.ucfirst($displaymonthtext).''.$data_code.''.$displayear_text.'</p>
  		</div>
  		</div>
  		</div>
  		</a>

  		</div>
  		
  		'; $i++;
                   //    echo '<pre>'; print_r($meta);
  	endwhile;

  	wp_reset_postdata();
  	$html.="</div></div>";
  	$page = $_GET['page'];
  	if($cou > 1){
  		$html.='<div class="row pagi-new">'.Pagination($numofrecords, $num_rows, $page).'</div>';} else{
  			
  		}
  		if($cou < 1){
  			$html.='<h5 class="mt-4 mb-4" id="noresult" style="    text-align: center;
    margin-top: 40px;
    margin-bottom: 40px;">No Result Found</h5> ';
  		}
  		echo $html;
  		?>
  		
  		<script> jQuery('div#parent').each(function(){  
      
      // Cache the highest
      var highestBox = 0;
      
      // Select and loop the elements you want to equalise
      jQuery('.user-contact11 span', this).each(function(){
        
        // If this box is higher than the cached highest then store it
        if(jQuery(this).height() > highestBox) {
          highestBox = jQuery(this).height(); 
        }
      
      });  
            
      // Set the height of all those children to whichever was highest 
     jQuery('.user-contact11 span',this).height(highestBox);
                    
    }); </script>