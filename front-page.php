<?php get_header(); ?>

	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="<?= get_template_directory_uri(); ?>/img/bg.svg">
		<div class="container h-100">
			<div class="hero-content text-white">
				<div class="row w-100">
					<div class="col-lg-6 pr-0">
						<h1>Sennik Online</h1>
						<p class="mb-2">Wyszukaj znaczenie swoich snów w naszej internetowej księdze snów.</p>
						<!-- <a href="#" class="site-btn dark">Znajdź swój sen</a> -->
						<div class="domain-form-warp">
							<form class="domain-search-form">
								<input type="text" placeholder="Co Ci się śniło?" class="d-block w-100">
								<button class="site-btn d-block mt-3">Znajdź sen</button>
							</form>
						</div>
					</div>
					<!-- <div class="col-lg-5"></div> -->
				</div>
				<div class="hero-rocket">
					<img src="<?= get_template_directory_uri(); ?>/img/birds.svg" alt="<?= __('Księżyc'); ?>">
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Features section -->
	<section class="features-section spad">
		<div class="container">
			<div class="section-title">
				<img src="<?= get_template_directory_uri(); ?>/img/section-title-icon.png" alt="#">
				<p>The best out there</p>
				<h2>See our features</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 feature-item">
					<div class="ft-icon">
						<i class="flaticon-domain-registration"></i>
					</div>
					<h4>Buy your Domain</h4>
					<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis.</p>
				</div>
				<div class="col-lg-4 col-md-6 feature-item fi-center-top">
					<div class="ft-icon">
						<i class="flaticon-server"></i>
					</div>
					<h4>Cloud Database</h4>
					<p>Ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. </p>
				</div>
				<div class="col-lg-4 col-md-6 feature-item">
					<div class="ft-icon">
						<i class="flaticon-devices"></i>
					</div>
					<h4>SSD-Only</h4>
					<p>Suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. </p>
				</div>
				<div class="col-lg-4 col-md-6 feature-item">
					<div class="ft-icon">
						<i class="flaticon-smartphone"></i>
					</div>
					<h4>Smart Contacts</h4>
					<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis.</p>
				</div>
				<div class="col-lg-4 col-md-6 feature-item">
					<div class="ft-icon">
						<i class="flaticon-folder"></i>
					</div>
					<h4>Free Support</h4>
					<p>Ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. </p>
				</div>
				<div class="col-lg-4 col-md-6 feature-item">
					<div class="ft-icon">
						<i class="flaticon-viral-marketing"></i>
					</div>
					<h4>Viral Marketing</h4>
					<p>Suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. </p>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->



	<!-- Domain search section -->
	<section class="domain-search-section spad set-bg" data-setbg="<?= get_template_directory_uri(); ?>/img/domain-bg.jpg">
		<div class="container">
			<div class="section-title st-white">
				<img src="<?= get_template_directory_uri(); ?>/img/section-title-icon.png" alt="#">
				<p>The best out there</p>
				<h2>See our features</h2>
			</div>
			<div class="domain-form-warp">
				<form class="domain-search-form">
					<input type="text" placeholder="Enter your website’s name">
					<button class="site-btn">Search</button>
				</form>
				<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis</p>
			</div>
		</div>
	</section>
	<!-- Domain search section end -->


	<!-- Skills & testimonials section -->
	<section class="skills-and-testimonials-section spad">
		<div class="container">
			<div class="row">
				<!-- Skills -->
				<div class="col-lg-6">
					<div class="single-progress-item">
						<p>Illustrator</p>
						<div class="progress-bar-style" data-progress="80"  data-bgcolor="#eb2b63"></div>
					</div>
					<div class="single-progress-item">
						<p>Photoshop</p>
						<div class="progress-bar-style" data-progress="90"  data-bgcolor="#eb2bae"></div>
					</div>
					<div class="single-progress-item">
						<p>SEO</p>
						<div class="progress-bar-style" data-progress="80"  data-bgcolor="#d22beb"></div>
					</div>
					<div class="single-progress-item">
						<p>E-commerce</p>
						<div class="progress-bar-style" data-progress="60"  data-bgcolor="#972beb"></div>
					</div>
					<div class="single-progress-item">
						<p>HTML</p>
						<div class="progress-bar-style" data-progress="70"  data-bgcolor="#732beb"></div>
					</div>
				</div>
				<!-- Testimonials -->
				<div class="col-lg-6">
					<div class="testimonials-slider owl-carousel">
						<div class="testimonial-item">
							<div class="ti-content">
								<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iacu-lis.Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. iaculis.</p>
							</div>
							<div class="ti-author-pic set-bg" data-setbg="<?= get_template_directory_uri(); ?>/img/review/1.jpg"></div>
							<div class="ti-author">
								<h6>Michael Smith</h6>
								<span>Client</span>
							</div>
						</div>
						<div class="testimonial-item">
							<div class="ti-content">
								<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iacu-lis.Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. iaculis.</p>
							</div>
							<div class="ti-author-pic set-bg" data-setbg="<?= get_template_directory_uri(); ?>/img/review/1.jpg"></div>
							<div class="ti-author">
								<h6>Michael Smith</h6>
								<span>Client</span>
							</div>
						</div>
						<div class="testimonial-item">
							<div class="ti-content">
								<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iacu-lis.Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. iaculis.</p>
							</div>
							<div class="ti-author-pic set-bg" data-setbg="<?= get_template_directory_uri(); ?>/img/review/1.jpg"></div>
							<div class="ti-author">
								<h6>Michael Smith</h6>
								<span>Client</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Skills & testimonials section end -->


	<!-- Pricing section -->
	<section class="pricing-section spad pt-0">
		<div class="container">
			<div class="section-title">
				<img src="<?= get_template_directory_uri(); ?>/img/section-title-icon.png" alt="#">
				<p>The best out there</p>
				<h2>See our features</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-8 offset-md-2 offset-lg-0">
					<div class="pricing-plan">
						<div class="pricing-title">
							<h4>Basic Plan</h4>
						</div>
						<div class="pricing-body">
							<h2>$9<span>/Month</span></h2>
							<ul>
								<li>1GB storage</li>
								<li>3GB bandwidth</li>
								<li>Free Email Addresses</li>
								<li>24/7 security monitoring</li>
								<li>24/7 technical support</li>
							</ul>
							<a href="" class="site-btn">Get Plan</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-8 offset-md-2 offset-lg-0">
					<div class="pricing-plan gold-plan">
						<div class="pricing-title">
							<h4>STAR Plan</h4>
						</div>
						<div class="pricing-body">
							<h2>$9<span>/Month</span></h2>
							<ul>
								<li>1GB storage</li>
								<li>3GB bandwidth</li>
								<li>Free Email Addresses</li>
								<li>24/7 security monitoring</li>
								<li>24/7 technical support</li>
							</ul>
							<a href="" class="site-btn">Get Plan</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-8 offset-md-2 offset-lg-0">
					<div class="pricing-plan">
						<div class="pricing-title">
							<h4>VIP Plan</h4>
						</div>
						<div class="pricing-body">
							<h2>$9<span>/Month</span></h2>
							<ul>
								<li>1GB storage</li>
								<li>3GB bandwidth</li>
								<li>Free Email Addresses</li>
								<li>24/7 security monitoring</li>
								<li>24/7 technical support</li>
							</ul>
							<a href="" class="site-btn">Get Plan</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Pricing section end -->



<?php get_footer();