@extends('LandingPage.layout')

@section('content')

<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="assets/images/assets/about.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_subtitle page_subtitle">Kopi Sawah</div>
							<div class="home_title"><h1>About us</h1></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="intro_content">
						<div class="intro_subtitle page_subtitle">Something new</div>
						<div class="intro_title"><h2>An Extraordinery Experience</h2></div>
						<div class="intro_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio. Suspendisse potenti. Vivamus luctus diam eu neque rutrum, vitae aliquet dolor venenatis. Nulla consequat fringilla massa.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8">
							<div class="intro_image"><img src="assets/images/assets/about_intro.jpg" alt="https://unsplash.com/@quanle2819"></div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<!-- Chefs -->

	<div class="chefs">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_subtitle page_subtitle">Something new</div>
						<div class="section_title"><h1>Meet the Chefs</h1></div>
					</div>
				</div>
			</div>
			<div class="row chefs_text_row">
				<div class="col-lg-6">
					<div class="chefs_text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio. Suspendisse potenti. Vivamus luctus diam eu neque rutrum, vitae aliquet dolor venenatis. Nulla consequat fringilla.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="chefs_text">
						<p>Sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio. Suspendisse potenti. Vivamus luctus diam eu neque rutrum, vitae aliquet dolor venenatis. Nulla consequat fringilla.</p>
					</div>
				</div>
			</div>
			<div class="row chefs_row row-eq-height">
				
				<!-- Chef -->
				<div class="col-xl-3 col-md-6 chef_col d-flex flex-column align-items-center justify-content-end">
					<div class="chef">
						<div class="chef_image"><img src="assets/images/assets/chef_1.jpg" alt=""></div>
						<div class="chef_content text-center">
							<div class="chef_name">Maria Smith</div>
							<div class="chef_subtitle">Top Chef</div>
							<div class="chef_button ml-auto mr-auto trans_400"><a href="#">see more</a></div>
						</div>
					</div>
				</div>

				<!-- Chef -->
				<div class="col-xl-3 col-md-6 chef_col d-flex flex-column align-items-center justify-content-end">
					<div class="chef">
						<div class="chef_image"><img src="assets/images/assets/chef_2.jpg" alt=""></div>
						<div class="chef_content text-center">
							<div class="chef_name">William Jones</div>
							<div class="chef_subtitle">Sauce Chef</div>
							<div class="chef_button ml-auto mr-auto trans_400"><a href="#">see more</a></div>
						</div>
					</div>
				</div>

				<!-- Chef -->
				<div class="col-xl-3 col-md-6 chef_col d-flex flex-column align-items-center justify-content-end">
					<div class="chef">
						<div class="chef_image"><img src="assets/images/assets/chef_3.jpg" alt=""></div>
						<div class="chef_content text-center">
							<div class="chef_name">Julien Williams</div>
							<div class="chef_subtitle">Sushi Chef</div>
							<div class="chef_button ml-auto mr-auto trans_400"><a href="#">see more</a></div>
						</div>
					</div>
				</div>

				<!-- Chef -->
				<div class="col-xl-3 col-md-6 chef_col d-flex flex-column align-items-center justify-content-end">
					<div class="chef">
						<div class="chef_image"><img src="assets/images/assets/chef_4.jpg" alt=""></div>
						<div class="chef_content text-center">
							<div class="chef_name">Suzie James</div>
							<div class="chef_subtitle">Sauce Chef</div>
							<div class="chef_button ml-auto mr-auto trans_400"><a href="#">see more</a></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="assets/images/assets/testimonials.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title_container">
						<div class="section_subtitle page_subtitle">What they say</div>
						<div class="section_title"><h1>Testimonials</h1></div>
					</div>
				</div>
			</div>
			<div class="row testimonials_row">
				<div class="col-lg-10 offset-lg-1">
					
					<!-- Testimonials Slider -->
					<div class="test_slider_container">
						<div class="owl-carousel owl-theme test_slider">
							
							<!-- Slide -->
							<div class="owl-item text-center">
								<div class="quote ml-auto mr-auto"><img src="assets/images/assets/quote.png" alt=""></div>
								<div class="test_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio. Suspendisse potenti. Vivamus luctus diam eu neque rutrum, vitae aliquet dolor venenatis. Nulla consequat fringilla massa.</p>
								</div>
								<div class="test_info">James Smith, <span>Client</span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop