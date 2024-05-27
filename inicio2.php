<?php
include "header.php";
?>
<div class="spacer d-none d-sm-none d-md-block"></div>
<div class="spacer d-none d-sm-none d-md-block"></div>
<div class="spacer d-none d-sm-none d-md-block"></div>
<div class="spacer d-none d-sm-none d-md-block"></div>
<div class="spacer d-none d-sm-none d-md-block"></div>

<div id="lightgallery" class="contenido">
	<div class="im-der">
		<a class="hvr-grow" data-download-url="false" data-responsive="img/375-27.jpg 375, img/480-27.jpg 480, img/27.jpg 800" data-src="img/1600-27.jpg" href=""><img class="img-fluid " src="img/thumb-27.jpg"></a>
	</div>
	<div class="im-izq">
		<a class="hvr-grow" data-download-url="false" data-responsive="img/375-30.jpg 375, img/480-30.jpg 480, img/30.jpg 800" data-src="img/1600-30.jpg" href=""><img class="img-fluid " src="img/thumb-30.jpg"></a>
	</div>
	<div class="im-central">
		<div class="im1"><a class="hvr-grow" data-download-url="false" data-responsive="img/375-2.jpg 375, img/480-2.jpg 480, img/2.jpg 800" data-src="img/1600-2.jpg" href=""><img class="img-fluid " src="img/thumb-2.jpg"></a></div>
		<div class="im2"><a class="hvr-grow" data-download-url="false" data-responsive="img/375-3.jpg 375, img/480-3.jpg 480, img/3.jpg 800" data-src="img/1600-3.jpg" href=""><img class="img-fluid " src="img/thumb-3.jpg"></a></div>
		<div class="im3"><a class="hvr-grow" data-download-url="false" data-responsive="img/375-7.jpg 375, img/480-7.jpg 480, img/7.jpg 800" data-src="img/1600-7.jpg" href=""><img class="img-fluid " src="img/thumb-7.jpg"></a></div>
		<div class="im4"><a class="hvr-grow" data-download-url="false" data-responsive="img/375-14.jpg 375, img/480-14.jpg 480, img/14.jpg 800" data-src="img/1600-14.jpg" href=""><img class="img-fluid " src="img/thumb-14.jpg"></a></div>
		<div class="im5"><a class="hvr-grow" data-download-url="false" data-responsive="img/375-17.jpg 375, img/480-17.jpg 480, img/17.jpg 800" data-src="img/1600-17.jpg" href=""><img class="img-fluid " src="img/thumb-17.jpg"></a></div>
		<div class="im6"><a class="hvr-grow" data-download-url="false" data-responsive="img/375-20.jpg 375, img/480-20.jpg 480, img/20.jpg 800" data-src="img/1600-20.jpg" href=""><img class="img-fluid " src="img/thumb-20.jpg"></a></div>
		<div class="im7"><a class="hvr-grow" data-download-url="false" data-responsive="img/375-23.jpg 375, img/480-23.jpg 480, img/23.jpg 800" data-src="img/1600-23.jpg" href=""><img class="img-fluid " src="img/thumb-23.jpg"></a></div>
		<div class="im8"><a class="hvr-grow" data-download-url="false" data-responsive="img/375-24.jpg 375, img/480-24.jpg 480, img/24.jpg 800" data-src="img/1600-24.jpg" href=""><img class="img-fluid " src="img/thumb-24.jpg"></a></div>
		<div class="im9"><a class="hvr-grow" data-download-url="false" data-responsive="img/375-28.jpg 375, img/480-28.jpg 480, img/28.jpg 800" data-src="img/1600-28.jpg" href=""><img class="img-fluid " src="img/thumb-28.jpg"></a></div>
		<div class="im10"><a class="hvr-grow" data-download-url="false" data-responsive="img/375-37.jpg 375, img/480-37.jpg 480, img/37.jpg 800" data-src="img/1600-37.jpg" href=""><img class="img-fluid " src="img/thumb-37.jpg"></a></div>
	</div>
</div>

<!-- <div class="spacer d-none d-sm-none d-md-block"></div> -->
<!-- <div class="spacer d-none d-sm-none d-md-block"></div> -->

<!-- <div class="col-md-3 align-self-end d-none d-sm-none d-md-block"></div> -->

<div class="spacer d-none d-sm-none d-md-block"></div>
<div class="spacer d-none d-sm-none d-md-block"></div>

<script type="text/javascript">
	$(document).ready(function() {
		$("#lightgallery").lightGallery({
			thumbnail: true,
			selector: "a"
		});
	});
</script>

<?php
include "footer.php";
?>