@extends('layouts.master')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<br><br>
				<h1 class="text-white">
					News Details
				</h1>
				<p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="news_details.php"> History</a></p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->


<!-- Start event-details Area -->
<section class="event-details-area section-gap">
	<div class="container">
		<div class="row">
			<?php
			if (isset($_POST['view_news_details_link'])) {
				$news_id = $_POST['news_id'];
				$query = "SELECT * FROM info_news WHERE news_id = '$news_id' ";
				$result = mysqli_query($db, $query);
				foreach ($result as $row) {
			?>
					<div class="col-lg-8 event-details-left">
						<div class="main-img">
							<img class="img-fluid" src="img/event-details-img.jpg" alt="">
						</div>
						<div class="details-content">
							<br>
							<p class="meta">
							 <span style="font-size: 20px"><?php echo $row['news_title']; ?></span> posted on <?php echo $row['news_published_on']; ?>
							</p>
							<p>
								<?php echo $row['news_full_content'] ?>
							</p>
						</div>
					</div>
			<?php
				}
			} else {
			}
			?>
			<div class="col-lg-4 event-details-right">
				<div class="single-event-details">
					<h4>Details</h4>
					<ul class="mt-10">
						<li class="justify-content-between d-flex">
							<span>Start date</span>
							<span>15th April, 2018</span>
						</li>
						<li class="justify-content-between d-flex">
							<span>End date</span>
							<span>18th April, 2018</span>
						</li>
						<li class="justify-content-between d-flex">
							<span>Ticket Price</span>
							<span>Free of Cost</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End event-details Area -->
@endsection