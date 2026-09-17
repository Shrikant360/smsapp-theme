<?php
/* Template Name: Booking  video Template */
?>
<!DOCTYPE html>
<html>
<head>

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<style>
		body{
			overflow:hidden;
			background:#000;
		}
		    .container {
            max-width: 100% !important;
    width: 100%;
    padding: 0;
    }
	#myVideo {
    height: 100vh;
}
	p {
    margin: 0;
    padding: 0;
    overflow: hidden;
}
		</style>
</head>
<body>

<?php echo the_content(); ?>

	
<!--     <script>
        window.onload = function() {
    var video = document.getElementById('myVideo');
    var promise = video.play();

    if (promise !== undefined) {
        promise.then(_ => {
            // Autoplay started
        }).catch(error => {
            // Autoplay was prevented
            // Show play button or alternative UI for user to start video
            video.controls = true;
        });
    }
}
    </script> -->

</body>
</html>
