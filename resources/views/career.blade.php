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
					Career
				</h1>
				<p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="career.php"> Career</a></p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->
<!-- Start info Area -->
<section class="info-area pb-120" style="margin: 30px 0px;">
	<div class="container">
		<div class="row ">
			<div class="col-lg-12 mb-4">
				<h3 style="color: #04091E">Work with us</h3>
			</div>
			<div class="col-lg-12 mb-4">
				<p>From time to time, job openings and vacancies available will be posted here, and you are welcome to submit applications that suit your career profile.</p>
			</div>
			<div class="col-lg-12 mb-4">
				<h5>What to do when jobs are posted here:</h5>
				<ul class=" pl-5" style="list-style-type: circle;">
					<li>Review advertised job descriptions and details specified for eligibility of positions listed.</li>
					<li>Send in your CV (with applicants detailed information) and cover letter using the form provided on this page.</li>
				</ul>
			</div>
			<div class="col-lg-12 mb-4">
				<h5>What happens next?</h5>
				<ul class=" pl-5" style="list-style-type: circle;">
					<li>CVs would be reviewed and qualified applicants invited to write an aptitude test.</li>
					<li>Successful candidates would be invited to begin the interview process.</li>
					<li>The last phase of the interview process is a meeting with the Chairman of the School.</li>
				</ul>
			</div>
			<div class="col-lg-12 mb-4">
				<h5>Current Vacancies</h5>
				<ol class="pl-5">
					<li>Goverment Teacher</li>
					<li>Englsih Teacher</li>
					<li>Biology Teacher</li>
				</ol>
			</div>
			<div class="col-lg-12 mb-4">
				<h5 class="text-center">Fillthe Form Below to submit your CV </h5>
				<form>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="fname">First Name</label>
							<input type="text" class="form-control" id="" placeholder="Enter your first name">
						</div>
						<div class="form-group col-md-6">
							<label for="lname">Email</label>
							<input type="email" class="form-control" id="" placeholder="Enter your email">
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">Last Name</label>
							<input type="text" class="form-control" id="" placeholder="Enter your last name">
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">Phone Number</label>
							<input type="tel" class="form-control" id="" placeholder="Enter your phone number">
						</div>
					</div>
					<div class="form-group">
						<label for="">Position Applied For(e.g Biology Teacher)</label>
						<input type="text" class="form-control" id="" placeholder="Enter the position you applying for ">
					</div>
					<div class="form-group">
						<label for="inputAddress2">Cover Letter</label>
						<textarea class="form-control " id="" placeholder="" required rows="8"></textarea>
					</div>
					<div class="custom-file">
						
						<input type="file" class="custom-file-input" id="validatedCustomFile" required>
						<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
					</div>
					<p><b>Submit your CV in doc, docx or pdf format and must not be more than 1MB in size</b></p>
					<button type="submit" class="btn btn-primary">Submit Details</button>
				</form>
			</div>
		</div>
	</div>
	</div>
</section>
<!-- End info Area -->


@endsection