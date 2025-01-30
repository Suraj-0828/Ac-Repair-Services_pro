<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="description" content="Unfortunately, we couldn’t process your submission. Please try again or contact us directly for assistance. We’re here to help resolve any issues promptly.">
	<link href="assets/images/home/feb-icon.png" rel="icon">
	<title>Oops! Something Went Wrong</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&amp;family=Roboto:wght@400;700&amp;display=swap">
	<link rel="stylesheet" href="use.fontawesome.com/releases/v5.15.3/css/all.css">
	<link rel="stylesheet" href="assets/css/libraries.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="../unpkg.com/aos%403.0.0-beta.6/dist/aos.css" />

	<style>
		.success {
			text-align: center;
			margin: auto;
			background-color: gray;
			color: black;
		}

		.successful {
			text-align: center;
			margin: auto;
			padding: 60px 50px 20px 50px;
			font-size: 50px !important;
			color: black;
		}

		.color-failed {
			color: red;
		}

		.imgg {
			max-width: 100%;
		}

		.img-size {
			width: 100px;
			height: 100px;
			margin: auto;
			margin-top: 25px;
			margin-bottom: -20px;
		}

		.text-black {
			padding-bottom: 30px;
		}

		.pp {
			text-align: center;
		}

		@media (max-width: 576px) {

			/* Extra small devices (phones) */
			.successful {
				font-size: 20px !important;
			}
		}
	</style>
</head>

<body>
	<div class="wrapper">

		<!-- Header Pages -->
		<?php include 'header.php'; ?>
		<!-- Header Pages -->

		

		<section class="page-title page-title-layout5" style="background-color: #28A3DF">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="pagetitle__heading text-background">Failed</h1>
                    </div>
                </div>
            </div>
        </section>


		<div class="container pt-5 pb-4">
			<div class="img-size">
				<img class="imgg" src="assets/images/home/failed.png" />
			</div>
			<div class="successful text-black">
				Your Email Has Not Send!
			</div>
			<div class="pp text-black">Something went <span class="color-failed">wrong</span> please try again after sometime.</div>

		</div>


		<!-- Footer Pages -->
		<?php include 'footer.php'; ?>
		<!-- Footer Pages -->