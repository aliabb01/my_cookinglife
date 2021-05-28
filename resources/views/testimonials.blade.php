<style>
	.testimonialSection {
		background-image: url('images/svg/testimonial_section_bg.svg');
		background-repeat: no-repeat;
		background-size: cover;
	}

	.testimonialContainer {}

	@media only screen and (max-width: 800px) {
		.testimonialSection {
			background-image: none;
		}
	}

	.testimonialCol {
		margin-bottom: 30px;
	}

	.testimonialCard {
		background-color: rgb(255, 255, 255);
		border: none;
		border-radius: 9px;
		margin-top: 14px;
		font-family: 'Space Grotesk', sans-serif;
	}

	.testimonialCard:hover .testimonialAuthor {
		color: #aaa1f3;
		transition: 0.3s;
	}

	.rotatedLeft {
		transform: rotate(-2deg);
	}

	.rotatedRight {
		transform: rotate(2deg);
	}

	.testimonialAuthor {
		font-size: 2em;
		transition: 0.3s;
	}

	.testimonialText {
		font-size: 1.2em;
	}

	.testimonialRating {
		color: #aaa1f3;
	}

	.star {
		font-size: 3em !important;
	}

	.defaultProfileImg {}

	/* Slider */
	.glide__slide {
		transform: scale(0.9);
		transition: 0.3s;
	}

	.glide__slide--active {
		transform: scale(1);
		transition: 0.3s;
	}

	.glide__bullet {
		box-shadow: none;
		border: none;
		border-radius: 35px;
		height: 9px;
		width: 50px;
		background-color: gray;
		outline: none;
		transition: 0.3s;
	}

	.glide__bullet--active {
		background-color: #aaa1f3;
		transition: 0.3s;
	}
</style>

<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

<!-- Required Core Stylesheet -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css'
	integrity='sha512-wYsVD8ho6rJOAo1Xf92gguhOGQ+aWgxuyKydjyEax4bnuEmHUt6VGwgpUqN8VlB4w50d0nt+ZL+3pgaFMAmdNQ=='
	crossorigin='anonymous' />

<section class="py-5 testimonialSection">
	<div class="container text-center testimonials my-5">
		<h2 class="testimonials__label text-center py-5" style="color: #867AE9;">Rəylər</h2>
		<div class="d-flex justify-content-center">
			<div class="" style="border-bottom: 3px solid #867AE9; width:35px;"></div>
		</div>
	</div>

	<div class="container testimonialContainer" style="background-color: transparent;">

		<div class="row">

			<div class="glide">



				<div class="glide__track" data-glide-el="track">

					<ul class="glide__slides">

						<li class="glide__slide d-flex justify-content-center">



							<div class="col-md-8 testimonialCol">
								<div class="card testimonialCard rotatedLeft shadow-sm">

									<div class="d-flex justify-content-center my-3" style="height: 100px;">
										<i class="material-icons"
											style="font-size:8em; color: rgb(92, 87, 87);">account_circle</i>
									</div>

									<h4 class="text-center my-3 testimonialAuthor">Someone</h4>

									<div class="testimonialText p-3">
										<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum doloribus
											ea corrupti ipsum
											voluptas modi animi, repellat excepturi fuga laborum!</p>
									</div>

									<div class="testimonialRating mb-3 text-center">
										<i class="material-icons star">star</i>
										<i class="material-icons star">star</i>
										<i class="material-icons star">star</i>
										<i class="material-icons star">star</i>
										<i class="material-icons star">star</i>
									</div>
								</div>
							</div>

						</li>
						<li class="glide__slide d-flex justify-content-center">

							<div class="col-md-8 testimonialCol">
								<div class="card testimonialCard rotatedRight shadow-sm">

									<div class="d-flex justify-content-center my-3" style="height: 100px;">
										<i class="material-icons"
											style="font-size:8em; color: rgb(92, 87, 87);">account_circle</i>
									</div>

									<h4 class="text-center my-3 testimonialAuthor">Someone</h4>

									<div class="testimonialText p-3">
										<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum doloribus
											ea corrupti ipsum
											voluptas modi animi, repellat excepturi fuga laborum!</p>
									</div>

									<div class="testimonialRating mb-3 text-center">
										<i class="material-icons star">star</i>
										<i class="material-icons star">star</i>
										<i class="material-icons star">star</i>
										<i class="material-icons star">star</i>
										<i class="material-icons star">star</i>
									</div>
								</div>
							</div>

						</li>
						<li class="glide__slide d-flex justify-content-center">

							<div class="col-md-8 testimonialCol">
								<div class="card testimonialCard rotatedLeft shadow-sm">

									<div class="d-flex justify-content-center my-3" style="height: 100px;">
										<i class="material-icons"
											style="font-size:8em; color: rgb(92, 87, 87);">account_circle</i>
									</div>

									<h4 class="text-center my-3 testimonialAuthor">Someone</h4>

									<div class="testimonialText p-3">
										<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum doloribus
											ea corrupti ipsum
											voluptas modi animi, repellat excepturi fuga laborum!</p>
									</div>

									<div class="testimonialRating mb-3 text-center">
										<i class="material-icons star">star</i>
										<i class="material-icons star">star</i>
										<i class="material-icons star">star</i>
										<i class="material-icons star">star</i>
										<i class="material-icons star">star</i>
									</div>
								</div>
							</div>

						</li>
					</ul>
				</div>

				<div class="glide__bullets d-flex justify-content-around" data-glide-el="controls[nav]">
					<button class="glide__bullet" data-glide-dir="=0"></button>
					<button class="glide__bullet" data-glide-dir="=1"></button>
					<button class="glide__bullet" data-glide-dir="=2"></button>
				</div>

			</div>

		</div>


	</div>

</section>

<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>

<script>
	const config = {
		type: 'carousel',
		perView: 2,
		breakpoints: {
			1500: {
				perView: 1
			},
		},
		autoplay: 10000,
		hoverpause: true,
		keyboard: true,
		animationDuration: 700,
		focusAt: "center",
		// afterTransition : function(event) {
        //     console.log(event.index); // the current slide number
        // }
	};	

	var glide = new Glide('.glide', config).mount();

</script>