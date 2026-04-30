@extends('layouts.app')

@section('title', 'Frequently Asked Questions - Kemnet Technologies Limited')

@section('head')
@include('partials.wp-page-head', [
    'title' => 'Frequently Asked Questions - Kemnet Technologies Limited',
    'postId' => '6228',
])
@endsection

@section('content')
@verbatim
<div class="mobile-header">
		<div class="mobile-header-inner">
			<div class="sticky-outer">
				<div class="sticky-head">
					<div class="container">
						<ul class="mobile-header-items nav pull-left">
							<li class="nav-item">
								<div class="nav-item-inner">
									<a class="mobile-bar-toggle" href="#"><i class="ti-menu"></i></a>
								</div>
							</li>
						</ul>
						<ul class="mobile-header-items nav pull-center">
							<li class="nav-item">
								<div class="nav-item-inner">
									<div class="mobile-logo"><a href="/"
											title="Kemnet Technologies Limited"><img class="img-responsive"
												src="/wp-content/uploads/2023/08/KEMNET-LOGO-TECHNOLOGIES.png"
												alt="Kemnet Technologies Limited"
												title="Kemnet Technologies Limited" /></a></div>
								</div>
							</li>
						</ul>
						<ul class="mobile-header-items nav pull-right">
							<li class="nav-item">
								<div class="nav-item-inner">
									<a class="full-search-toggle" href="#"><i class="ti-search"></i></a>
								</div>
							</li>
						</ul>
					</div><!-- container -->
				</div>
			</div>
		</div>
	</div>
	<div class="mobile-bar animate-from-left">
		<a class="mobile-bar-toggle close" href="#"></a>
		<div class="mobile-bar-inner">
			<div class="container">
				<ul class="mobile-bar-items nav flex-column mobile-bar-top">
					<li class="nav-item">
						<div class="nav-item-inner">
							<div class="mobile-logo"><a href="/" title="Kemnet Technologies Limited"><img
										class="img-responsive"
										src="/wp-content/uploads/2023/08/KEMNET-LOGO-TECHNOLOGIES.png"
										alt="Kemnet Technologies Limited" title="Kemnet Technologies Limited" /></a>
							</div>
						</div>
					</li>
				</ul>
				<ul class="mobile-bar-items nav flex-column mobile-bar-middle">
					<li class="nav-item">
						<div class="nav-item-inner">
							<div class="satenet-mobile-main-menu"></div>
						</div>
					</li>
				</ul>
				<ul class="mobile-bar-items nav flex-column mobile-bar-bottom">
					<li class="nav-item">
						<div class="nav-item-inner">

							<form method="get" class="search-form" action="/faq">
								<div class="input-group">
									<input type="text" class="form-control" name="s" value=""
										placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-secondary" type="submit"><i
												class="ti-arrow-right"></i></button>
									</span>
								</div>
							</form>
						</div>
					</li>
				</ul>
			</div><!-- container -->
		</div>
	</div>
	<div class="secondary-menu-area left-overlay" data-pos="left">
		<span class="close secondary-space-toggle" title="Close"></span>
		<div class="secondary-menu-area-inner">
			<section id="text-1" class="widget widget_text">
				<div class="textwidget">
					<p style="text-align: justify;">We empower individuals, businesses, and communities with reliable
						and innovative ICT solutions, driving digital transformation and enabling opportunities for
						growth and success.</p>
				</div>
			</section>
			<section id="satenet_mailchimp_widget-1" class="widget satenet_mailchimp_widget">
				<h3 class="widget-title">Subscribe Us</h3>
				<div class="mailchimp-wrapper">
					<form class="zozo-mc-form" id="zozo-mc-form" method="post">

						<p class="zozo-mc-subtitle">Sign up for our weekly newsletter to stay updated on all news and
							events at Satenet.</p>
						<input type="hidden" name="satenet_mc_listid" value="38e2b49613" />

						<div class="input-group">
							<input type="text" class="form-control zozo-mc-email" required="required" id="zozo-mc-email"
								placeholder="Email Address" name="zozo_mc_email">
							<button class="input-group-addon zozo-mc btn btn-default"><span
									class="ti-email"></span></button>
						</div>

					</form>
					<!--Mailchimp Custom Script-->

					<div class="mc-notice-group" data-success="Success." data-fail="Failure.">
						<span class="mc-notice-msg"></span>
					</div><!-- .mc-notice-group -->
				</div><!-- .mailchimp-wrapper -->

			</section>
		</div>
	</div>

	<div id="page" class="satenet-wrapper">
		<header class="satenet-header header-absolute full-width-container">

			<div class="header-inner" style="position:fixed;width:100%;z-index:999;">
				<div class="logobar clearfix">
					<div class="custom-container logobar-inner">
						<ul class="logobar-items nav pull-left">
							<li class="nav-item">
								<div class="nav-item-inner">

									<div class="main-logo">
										<a href="/" title="Kemnet Technologies Limited"><img
												class="custom-logo img-responsive"
												src="/wp-content/uploads/2023/08/KEMNET-LOGO-TECHNOLOGIES.png"
												alt="Kemnet Technologies Limited"
												title="Kemnet Technologies Limited" /></a>
									</div>
									<div class="sticky-logo"><a href="/"
											title="Kemnet Technologies Limited"><img class="img-responsive"
												src="/wp-content/uploads/2023/08/KEMNET-LOGO-TECHNOLOGIES.png"
												alt="Kemnet Technologies Limited"
												title="Kemnet Technologies Limited" /></a></div>
								</div>
							</li>
						</ul>
						<ul class="logobar-items nav pull-right">
							<li class="nav-item">
								<div class="nav-item-inner">

									<ul class="nav header-info satenet-header-multi-info">
										<li class="nav-item satenet-header-address">
											<div class="media">
												<i class="ti-map-alt"></i>
												<div class="media-body">
													<h6 class="mt-0">Address.</h6>
													<span> Allamano Center, Westlands.</span>
												</div>
											</div>
										</li>
										<li class="nav-item satenet-header-phone">
											<div class="media">
												<i class="ti-mobile"></i>
												<div class="media-body">
													<h6 class="mt-0">Contact</h6>
													<a href="tel:0700638585|0111039600">0700 638 585 | 0111 039 600</a>
												</div>
											</div>
										</li>
										<li class="nav-item satenet-header-email">
											<div class="media">
												<i class="ti-email"></i>
												<div class="media-body">
													<h6 class="mt-0 mb-1">Email</h6>
													<a href="mailto:hello@kemnet.co.ke">hello@kemnet.co.ke</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<nav class="navbar clearfix">
					<div class="custom-container navbar-inner">
						<ul class="navbar-items nav pull-left">
							<li class="nav-item">
								<div class="nav-item-inner">
									<ul id="satenet-main-menu" class="nav satenet-main-menu">
										<li id="menu-item-11692"
											class="cus-img-menu menu-item menu-item-type-post_type menu-item-object-page menu-item-home nav-item menu-item-11692">
											<a href="/" class="nav-link">Home</a></li>
										<li id="menu-item-11693"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-11693 dropdown">
											<a href="/about-us" class="nav-link dropdown-toggle">About
												Us</a>
											<ul role="menu" class=" dropdown-menu">
												<li id="menu-item-14535"
													class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-14535">
													<a href="/vision-and-mission" class="nav-link">Vision
														and Mission</a></li>
												<li id="menu-item-11703"
													class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-11703">
													<a href="/partners-memberships"
														class="nav-link">Partners &#038; Memberships</a></li>
												<li id="menu-item-11696"
													class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-11696">
													<a href="/careers" class="nav-link">Careers</a></li>

											</ul>
										</li>
										<li id="menu-item-14602"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-14602 dropdown">
											<a href="/services" class="nav-link dropdown-toggle">Our
												Services</a>
											<ul role="menu" class=" dropdown-menu">
												<li id="menu-item-15075"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-15075 dropdown">
													<a href="/services/infrastructure-networking"
														class="nav-link">Infrastructure &amp; Networking</a>
													<ul role="menu" class=" dropdown-menu">
														<li id="menu-item-14896"
															class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-14896">
															<a href="/services/infrastructure-networking/dark-fiber"
																class="nav-link">Dark Fiber</a></li>
														<li id="menu-item-15906"
															class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-15906">
															<a href="/services/fiber-optic-cabling"
																class="nav-link">Fiber Optic Cabling</a></li>

													</ul>
												</li>
												<li id="menu-item-15037"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-15037 dropdown">
													<a href="/services/software-hardware"
														class="nav-link">Software &#038; Hardware</a>
													<ul role="menu" class=" dropdown-menu">
														<li id="menu-item-14788"
															class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-14788">
															<a href="/services/software-hardware/custom-software-solutions"
																class="nav-link">Custom Software Solutions</a></li>
														<li id="menu-item-15036"
															class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-15036">
															<a href="/services/software-hardware/hardware-solutions"
																class="nav-link">Hardware Solutions</a></li>

													</ul>
												</li>
												<li id="menu-item-14974"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-14974 dropdown">
													<a href="/services/web-cloud-solutions"
														class="nav-link">Web &amp; Cloud Solutions</a>
													<ul role="menu" class=" dropdown-menu">
														<li id="menu-item-14794"
															class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-14794">
															<a href="/services/web-cloud-solutions/domains-web-hosting"
																class="nav-link">Domains &#038; Web Hosting</a></li>
														<li id="menu-item-14889"
															class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-14889">
															<a href="/services/web-cloud-solutions/cloud-hosting-solutions"
																class="nav-link">Cloud Hosting Solutions</a></li>
														<li id="menu-item-14995"
															class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-14995">
															<a href="/services/web-cloud-solutions/google-integrated-solutions"
																class="nav-link">Google Integrated Solutions</a></li>

													</ul>
												</li>
												<li id="menu-item-15065"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-15065 dropdown">
													<a href="/services/smart-home-security-solutions"
														class="nav-link">Smart Home &#038; Security Solutions</a>
													<ul role="menu" class=" dropdown-menu">
														<li id="menu-item-15066"
															class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-15066">
															<a href="/services/smart-home-security-solutions/cctv-installation"
																class="nav-link">CCTV Installation</a></li>
														<li id="menu-item-15094"
															class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-15094">
															<a href="/services/smart-home-security-solutions/access-control"
																class="nav-link">Access Control</a></li>
														<li id="menu-item-15119"
															class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-15119">
															<a href="/services/smart-home-security-solutions/home-automation"
																class="nav-link">Home Automation</a></li>

													</ul>
												</li>
												<li id="menu-item-15318"
													class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-15318">
													<a href="/services/ict-consultancy-training"
														class="nav-link">AI &#038; ICT Consultancy &#038; Training</a>
												</li>

											</ul>
										</li>
										<li id="menu-item-14707"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-14707 dropdown">
											<a href="/services/internet-services"
												class="nav-link dropdown-toggle">Internet Services</a>
											<ul role="menu" class=" dropdown-menu">
												<li id="menu-item-15742"
													class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-15742">
													<a href="/kemnet-home-wireless" class="nav-link">Home
														Wireless</a></li>
												<li id="menu-item-11707"
													class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-11707">
													<a href="/kemnet-home-fiber" class="nav-link">Home
														Fiber</a></li>
												<li id="menu-item-15874"
													class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-15874">
													<a href="/kemnet-business-internet"
														class="nav-link">Business Internet</a></li>

											</ul>
										</li>
										<li id="menu-item-16422"
											class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16422">
											<a href="/web-and-cloud-services" class="nav-link">Web &#038;
												Cloud Services</a></li>
										<li id="menu-item-14034"
											class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-6228 current_page_item nav-item menu-item-14034">
											<a href="/faq" class="nav-link">FAQs</a></li>
										<li id="menu-item-11695"
											class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-11695">
											<a href="/contact-us" class="nav-link">Contact Us</a></li>
									</ul>
								</div>
							</li>
						</ul>
						<ul class="navbar-items nav pull-right">
							<li class="nav-item">
								<div class="nav-item-inner">
									<div class="search-toggle-wrap"><a class="full-bar-search-toggle" href="#"><i
												class="ti-search"></i></a></div>
								</div>
							</li>
						</ul>
					</div>

					<div class="full-bar-search-wrap">
						<form method="get" class="search-form" action="/faq">
							<div class="input-group">
								<input name="s" type="text" class="form-control" value=""
									placeholder="Search and hit enter..">
							</div>
						</form>
						<a href="#" class="close full-bar-search-toggle"></a>
					</div>
				</nav>
			</div>

		</header>
		<div class="satenet-content-wrapper">
			<div class="satenet-content satenet-page">


				<div class="satenet-content-inner">
					<div class="container">

						<div class="row">

							<div class="col-md-12">



								<div id="primary" class="content-area clearfix">
									<div id="page-6228" class="post-6228 page type-page status-publish hentry">
										<div data-elementor-type="wp-page" data-elementor-id="6228"
											class="elementor elementor-6228">
											<section
												class="elementor-section elementor-top-section elementor-element elementor-element-88175dc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
												data-id="88175dc" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-abe505e"
														data-id="abe505e" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<section
																class="elementor-section elementor-inner-section elementor-element elementor-element-0c32a85 elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default"
																data-id="0c32a85" data-element_type="section">
																<div
																	class="elementor-container elementor-column-gap-default">
																	<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2e41451"
																		data-id="2e41451" data-element_type="column">
																		<div
																			class="elementor-widget-wrap elementor-element-populated">
																			<div class="elementor-element elementor-element-e65b118 elementor-widget elementor-widget-satenetsectiontitle"
																				data-id="e65b118"
																				data-element_type="widget"
																				data-widget_type="satenetsectiontitle.default">
																				<div class="elementor-widget-container">
																					<div
																						class="section-title-wrapper margin-bottom-0 sep-none">
																						<div class="title-wrap"><span
																								class="sub-title">Popular
																								Questions</span>
																							<h2 class="section-title">
																								Frequently Asked
																								Questions</h2>
																						</div><!-- .title-wrap -->
																						<div
																							class="section-description">
																						</div>
																						<!-- .section-description -->
																					</div>
																					<!-- .section-title-wrapper -->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>
															<section
																class="elementor-section elementor-inner-section elementor-element elementor-element-214fefd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
																data-id="214fefd" data-element_type="section">
																<div
																	class="elementor-container elementor-column-gap-default">
																	<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8f46a49"
																		data-id="8f46a49" data-element_type="column">
																		<div
																			class="elementor-widget-wrap elementor-element-populated">
																			<div class="elementor-element elementor-element-652cf79 satenet-faq elementor-invisible elementor-widget elementor-widget-toggle"
																				data-id="652cf79"
																				data-element_type="widget"
																				data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
																				data-widget_type="toggle.default">
																				<div class="elementor-widget-container">
																					<div class="elementor-toggle">
																						<div
																							class="elementor-toggle-item">
																							<h5 id="elementor-tab-title-1061"
																								class="elementor-tab-title"
																								data-tab="1"
																								role="button"
																								aria-controls="elementor-tab-content-1061"
																								aria-expanded="false">
																								<span
																									class="elementor-toggle-icon elementor-toggle-icon-right"
																									aria-hidden="true">
																									<span
																										class="elementor-toggle-icon-closed"><svg
																											class="e-font-icon-svg e-fas-arrow-right"
																											viewBox="0 0 448 512"
																											xmlns="http://www.w3.org/2000/svg">
																											<path
																												d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
																											</path>
																										</svg></span>
																									<span
																										class="elementor-toggle-icon-opened"><svg
																											class="elementor-toggle-icon-opened e-font-icon-svg e-fas-arrow-up"
																											viewBox="0 0 448 512"
																											xmlns="http://www.w3.org/2000/svg">
																											<path
																												d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
																											</path>
																										</svg></span>
																								</span>
																								<a class="elementor-toggle-title"
																									tabindex="0">1. What
																									internet plans do
																									you offer? </a>
																							</h5>

																							<div id="elementor-tab-content-1061"
																								class="elementor-tab-content elementor-clearfix"
																								data-tab="1"
																								role="region"
																								aria-labelledby="elementor-tab-title-1061">
																								We offer a range of
																								dedicated internet plans
																								with varying speeds and
																								data allowances. Our
																								plans include basic,
																								standard, and premium
																								options to suit your
																								requirements and budget.

																							</div>
																						</div>
																						<div
																							class="elementor-toggle-item">
																							<h5 id="elementor-tab-title-1062"
																								class="elementor-tab-title"
																								data-tab="2"
																								role="button"
																								aria-controls="elementor-tab-content-1062"
																								aria-expanded="false">
																								<span
																									class="elementor-toggle-icon elementor-toggle-icon-right"
																									aria-hidden="true">
																									<span
																										class="elementor-toggle-icon-closed"><svg
																											class="e-font-icon-svg e-fas-arrow-right"
																											viewBox="0 0 448 512"
																											xmlns="http://www.w3.org/2000/svg">
																											<path
																												d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
																											</path>
																										</svg></span>
																									<span
																										class="elementor-toggle-icon-opened"><svg
																											class="elementor-toggle-icon-opened e-font-icon-svg e-fas-arrow-up"
																											viewBox="0 0 448 512"
																											xmlns="http://www.w3.org/2000/svg">
																											<path
																												d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
																											</path>
																										</svg></span>
																								</span>
																								<a class="elementor-toggle-title"
																									tabindex="0">2. How
																									do I sign up for
																									your internet
																									service? </a>
																							</h5>

																							<div id="elementor-tab-content-1062"
																								class="elementor-tab-content elementor-clearfix"
																								data-tab="2"
																								role="region"
																								aria-labelledby="elementor-tab-title-1062">
																								You can sign up for our
																								internet service by
																								calling our customer
																								support <strong>0111 039
																									600</strong>. Our
																								team will guide you
																								through the registration
																								process.</div>
																						</div>
																						<div
																							class="elementor-toggle-item">
																							<h5 id="elementor-tab-title-1063"
																								class="elementor-tab-title"
																								data-tab="3"
																								role="button"
																								aria-controls="elementor-tab-content-1063"
																								aria-expanded="false">
																								<span
																									class="elementor-toggle-icon elementor-toggle-icon-right"
																									aria-hidden="true">
																									<span
																										class="elementor-toggle-icon-closed"><svg
																											class="e-font-icon-svg e-fas-arrow-right"
																											viewBox="0 0 448 512"
																											xmlns="http://www.w3.org/2000/svg">
																											<path
																												d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
																											</path>
																										</svg></span>
																									<span
																										class="elementor-toggle-icon-opened"><svg
																											class="elementor-toggle-icon-opened e-font-icon-svg e-fas-arrow-up"
																											viewBox="0 0 448 512"
																											xmlns="http://www.w3.org/2000/svg">
																											<path
																												d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
																											</path>
																										</svg></span>
																								</span>
																								<a class="elementor-toggle-title"
																									tabindex="0">3. What
																									equipment do I need
																									for the internet
																									connection? </a>
																							</h5>

																							<div id="elementor-tab-content-1063"
																								class="elementor-tab-content elementor-clearfix"
																								data-tab="3"
																								role="region"
																								aria-labelledby="elementor-tab-title-1063">
																								You can sign up for our
																								internet service by
																								calling our customer
																								support <strong>0111 039
																									600</strong>. Our
																								team will guide you
																								through the registration
																								process.</div>
																						</div>
																						<div
																							class="elementor-toggle-item">
																							<h5 id="elementor-tab-title-1064"
																								class="elementor-tab-title"
																								data-tab="4"
																								role="button"
																								aria-controls="elementor-tab-content-1064"
																								aria-expanded="false">
																								<span
																									class="elementor-toggle-icon elementor-toggle-icon-right"
																									aria-hidden="true">
																									<span
																										class="elementor-toggle-icon-closed"><svg
																											class="e-font-icon-svg e-fas-arrow-right"
																											viewBox="0 0 448 512"
																											xmlns="http://www.w3.org/2000/svg">
																											<path
																												d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
																											</path>
																										</svg></span>
																									<span
																										class="elementor-toggle-icon-opened"><svg
																											class="elementor-toggle-icon-opened e-font-icon-svg e-fas-arrow-up"
																											viewBox="0 0 448 512"
																											xmlns="http://www.w3.org/2000/svg">
																											<path
																												d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
																											</path>
																										</svg></span>
																								</span>
																								<a class="elementor-toggle-title"
																									tabindex="0">4. How
																									long does it take to
																									get my internet
																									connection set up?
																								</a>
																							</h5>

																							<div id="elementor-tab-content-1064"
																								class="elementor-tab-content elementor-clearfix"
																								data-tab="4"
																								role="region"
																								aria-labelledby="elementor-tab-title-1064">
																								The time for
																								installation depends on
																								various factors, such as
																								location and
																								availability. We offer
																								same-day-connection in
																								most of our locations.
																								Once you sign up for our
																								service, we will
																								schedule an installation
																								appointment at your
																								convenience. Our
																								technicians will then
																								come to your location to
																								set up the internet
																								connection and ensure
																								everything is working
																								correctly.

																							</div>
																						</div>
																						<div
																							class="elementor-toggle-item">
																							<h5 id="elementor-tab-title-1065"
																								class="elementor-tab-title"
																								data-tab="5"
																								role="button"
																								aria-controls="elementor-tab-content-1065"
																								aria-expanded="false">
																								<span
																									class="elementor-toggle-icon elementor-toggle-icon-right"
																									aria-hidden="true">
																									<span
																										class="elementor-toggle-icon-closed"><svg
																											class="e-font-icon-svg e-fas-arrow-right"
																											viewBox="0 0 448 512"
																											xmlns="http://www.w3.org/2000/svg">
																											<path
																												d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
																											</path>
																										</svg></span>
																									<span
																										class="elementor-toggle-icon-opened"><svg
																											class="elementor-toggle-icon-opened e-font-icon-svg e-fas-arrow-up"
																											viewBox="0 0 448 512"
																											xmlns="http://www.w3.org/2000/svg">
																											<path
																												d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
																											</path>
																										</svg></span>
																								</span>
																								<a class="elementor-toggle-title"
																									tabindex="0">5. What
																									are your customer
																									support hours? </a>
																							</h5>

																							<div id="elementor-tab-content-1065"
																								class="elementor-tab-content elementor-clearfix"
																								data-tab="5"
																								role="region"
																								aria-labelledby="elementor-tab-title-1065">
																								Our customer support is
																								available 24/7. You can
																								reach us through phone,
																								email, or WhatsApp chat
																								for any queries or
																								technical assistance.
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8d08a0c"
																		data-id="8d08a0c" data-element_type="column">
																		<div
																			class="elementor-widget-wrap elementor-element-populated">
																			<div class="elementor-element elementor-element-e03a801 satenet-faq elementor-invisible elementor-widget elementor-widget-toggle"
																				data-id="e03a801"
																				data-element_type="widget"
																				data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
																				data-widget_type="toggle.default">
																				<div class="elementor-widget-container">
																					<div class="elementor-toggle">
																						<div
																							class="elementor-toggle-item">
																							<h5 id="elementor-tab-title-2351"
																								class="elementor-tab-title"
																								data-tab="1"
																								role="button"
																								aria-controls="elementor-tab-content-2351"
																								aria-expanded="false">
																								<span
																									class="elementor-toggle-icon elementor-toggle-icon-right"
																									aria-hidden="true">
																									<span
																										class="elementor-toggle-icon-closed"><svg
																											class="e-font-icon-svg e-fas-arrow-right"
																											viewBox="0 0 448 512"
																											xmlns="http://www.w3.org/2000/svg">
																											<path
																												d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
																											</path>
																										</svg></span>
																									<span
																										class="elementor-toggle-icon-opened"><svg
																											class="elementor-toggle-icon-opened e-font-icon-svg e-fas-arrow-up"
																											viewBox="0 0 448 512"
																											xmlns="http://www.w3.org/2000/svg">
																											<path
																												d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
																											</path>
																										</svg></span>
																								</span>
																								<a class="elementor-toggle-title"
																									tabindex="0">6. Can
																									I upgrade or
																									downgrade my
																									internet plan?</a>
																							</h5>

																							<div id="elementor-tab-content-2351"
																								class="elementor-tab-content elementor-clearfix"
																								data-tab="1"
																								role="region"
																								aria-labelledby="elementor-tab-title-2351">
																								Yes, you can upgrade or
																								downgrade your internet
																								plan at any time. Get in
																								touch with our customer
																								support, and they will
																								assist you in making the
																								necessary changes.</div>
																						</div>
																						<div
																							class="elementor-toggle-item">
																							<h5 id="elementor-tab-title-2352"
																								class="elementor-tab-title"
																								data-tab="2"
																								role="button"
																								aria-controls="elementor-tab-content-2352"
																								aria-expanded="false">
																								<span
																									class="elementor-toggle-icon elementor-toggle-icon-right"
																									aria-hidden="true">
																									<span
																										class="elementor-toggle-icon-closed"><svg
																											class="e-font-icon-svg e-fas-arrow-right"
																											viewBox="0 0 448 512"
																											xmlns="http://www.w3.org/2000/svg">
																											<path
																												d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
																											</path>
																										</svg></span>
																									<span
																										class="elementor-toggle-icon-opened"><svg
																											class="elementor-toggle-icon-opened e-font-icon-svg e-fas-arrow-up"
																											viewBox="0 0 448 512"
																											xmlns="http://www.w3.org/2000/svg">
																											<path
																												d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
																											</path>
																										</svg></span>
																								</span>
																								<a class="elementor-toggle-title"
																									tabindex="0">7. Do
																									you have any data
																									caps on your
																									internet plans?</a>
																							</h5>

																							<div id="elementor-tab-content-2352"
																								class="elementor-tab-content elementor-clearfix"
																								data-tab="2"
																								role="region"
																								aria-labelledby="elementor-tab-title-2352">
																								We strive to provide our
																								customers with a
																								seamless internet
																								experience. All of our
																								plans come with
																								unlimited data usage.
																								However, please refer to
																								the specific details of
																								your chosen plan for
																								confirmation.

																							</div>
																						</div>
																						<div
																							class="elementor-toggle-item">
																							<h5 id="elementor-tab-title-2353"
																								class="elementor-tab-title"
																								data-tab="3"
																								role="button"
																								aria-controls="elementor-tab-content-2353"
																								aria-expanded="false">
																								<span
																									class="elementor-toggle-icon elementor-toggle-icon-right"
																									aria-hidden="true">
																									<span
																										class="elementor-toggle-icon-closed"><svg
																											class="e-font-icon-svg e-fas-arrow-right"
																											viewBox="0 0 448 512"
																											xmlns="http://www.w3.org/2000/svg">
																											<path
																												d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
																											</path>
																										</svg></span>
																									<span
																										class="elementor-toggle-icon-opened"><svg
																											class="elementor-toggle-icon-opened e-font-icon-svg e-fas-arrow-up"
																											viewBox="0 0 448 512"
																											xmlns="http://www.w3.org/2000/svg">
																											<path
																												d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
																											</path>
																										</svg></span>
																								</span>
																								<a class="elementor-toggle-title"
																									tabindex="0">8. How
																									do I pay my internet
																									bill? </a>
																							</h5>

																							<div id="elementor-tab-content-2353"
																								class="elementor-tab-content elementor-clearfix"
																								data-tab="3"
																								role="region"
																								aria-labelledby="elementor-tab-title-2353">
																								You can pay your
																								internet bill through
																								Mobile banking. We will
																								provide you with the
																								payment details once you
																								register with us. </div>
																						</div>
																						<div
																							class="elementor-toggle-item">
																							<h5 id="elementor-tab-title-2354"
																								class="elementor-tab-title"
																								data-tab="4"
																								role="button"
																								aria-controls="elementor-tab-content-2354"
																								aria-expanded="false">
																								<span
																									class="elementor-toggle-icon elementor-toggle-icon-right"
																									aria-hidden="true">
																									<span
																										class="elementor-toggle-icon-closed"><svg
																											class="e-font-icon-svg e-fas-arrow-right"
																											viewBox="0 0 448 512"
																											xmlns="http://www.w3.org/2000/svg">
																											<path
																												d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
																											</path>
																										</svg></span>
																									<span
																										class="elementor-toggle-icon-opened"><svg
																											class="elementor-toggle-icon-opened e-font-icon-svg e-fas-arrow-up"
																											viewBox="0 0 448 512"
																											xmlns="http://www.w3.org/2000/svg">
																											<path
																												d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
																											</path>
																										</svg></span>
																								</span>
																								<a class="elementor-toggle-title"
																									tabindex="0">9. What
																									happens if I move to
																									a new location
																									within your coverage
																									area? </a>
																							</h5>

																							<div id="elementor-tab-content-2354"
																								class="elementor-tab-content elementor-clearfix"
																								data-tab="4"
																								role="region"
																								aria-labelledby="elementor-tab-title-2354">
																								If you move to a
																								location where our
																								service is available, we
																								can transfer your
																								internet connection to
																								your new address.
																								Contact our customer
																								support as soon as
																								possible to arrange the
																								relocation.</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>
														</div>
													</div>
												</div>
											</section>
											<section
												class="elementor-section elementor-top-section elementor-element elementor-element-89ad72a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
												data-id="89ad72a" data-element_type="section"
												data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8cf7286"
														data-id="8cf7286" data-element_type="column"
														data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<section
																class="elementor-section elementor-inner-section elementor-element elementor-element-d71d2cb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
																data-id="d71d2cb" data-element_type="section"
																data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
																<div
																	class="elementor-container elementor-column-gap-default">
																	<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-879b478"
																		data-id="879b478" data-element_type="column">
																		<div
																			class="elementor-widget-wrap elementor-element-populated">
																			<div class="elementor-element elementor-element-de2c8de elementor-widget elementor-widget-satenetsectiontitle"
																				data-id="de2c8de"
																				data-element_type="widget"
																				data-widget_type="satenetsectiontitle.default">
																				<div class="elementor-widget-container">
																					<div
																						class="section-title-wrapper text-center">
																						<div class="title-wrap">
																							<h2 class="section-title">
																								Ask Your Question</h2>
																							<span
																								class="title-separator separator-border theme-color-bg"></span>
																						</div><!-- .title-wrap -->
																						<div
																							class="section-description">
																						</div>
																						<!-- .section-description -->
																					</div>
																					<!-- .section-title-wrapper -->
																				</div>
																			</div>
																			<div class="elementor-element elementor-element-4a4ca04 elementor-widget elementor-widget-contactform"
																				data-id="4a4ca04"
																				data-element_type="widget"
																				data-widget_type="contactform.default">
																				<div class="elementor-widget-container">
																					<div
																						class="contact-form-wrapper form-light cf-default">
																						<div class="contact-form">
																							<div class="wpcf7 no-js"
																								id="wpcf7-f6250-p6228-o1"
																								lang="en-US" dir="ltr"
																								data-wpcf7-id="6250">
																								<div
																									class="screen-reader-response">
																									<p role="status"
																										aria-live="polite"
																										aria-atomic="true">
																									</p>
																									<ul></ul>
																								</div>
																								<form
																									action="/faq#wpcf7-f6250-p6228-o1"
																									method="post"
																									class="wpcf7-form init"
																									aria-label="Contact form"
																									novalidate="novalidate"
																									data-status="init">
																									<div
																										style="display: none;">
																										<input
																											type="hidden"
																											name="_wpcf7"
																											value="6250" />
																										<input
																											type="hidden"
																											name="_wpcf7_version"
																											value="6.0.6" />
																										<input
																											type="hidden"
																											name="_wpcf7_locale"
																											value="en_US" />
																										<input
																											type="hidden"
																											name="_wpcf7_unit_tag"
																											value="wpcf7-f6250-p6228-o1" />
																										<input
																											type="hidden"
																											name="_wpcf7_container_post"
																											value="6228" />
																										<input
																											type="hidden"
																											name="_wpcf7_posted_data_hash"
																											value="" />
																										<input
																											type="hidden"
																											name="_wpcf7_recaptcha_response"
																											value="" />
																									</div>
																									<div class="row">
																										<div
																											class="col-md-3">
																											<p><span class="wpcf7-form-control-wrap"
																													data-name="your-name"><input
																														size="40"
																														maxlength="400"
																														class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																														aria-required="true"
																														aria-invalid="false"
																														placeholder="Your Name*"
																														value=""
																														type="text"
																														name="your-name" /></span>
																											</p>
																										</div>
																										<div
																											class="col-md-3">
																											<p><span class="wpcf7-form-control-wrap"
																													data-name="your-email"><input
																														size="40"
																														maxlength="400"
																														class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
																														aria-required="true"
																														aria-invalid="false"
																														placeholder="Your Email*"
																														value=""
																														type="email"
																														name="your-email" /></span>
																											</p>
																										</div>
																										<div
																											class="col-md-3">
																											<p><span class="wpcf7-form-control-wrap"
																													data-name="your-message"><textarea
																														cols="40"
																														rows="10"
																														maxlength="2000"
																														class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required area-md"
																														aria-required="true"
																														aria-invalid="false"
																														placeholder="Your Message*"
																														name="your-message"></textarea></span>
																											</p>
																										</div>
																										<div
																											class="col-md-3">
																											<p><input
																													class="wpcf7-form-control wpcf7-submit has-spinner"
																													type="submit"
																													value="Send" />
																											</p>
																										</div>
																									</div>
																									<div class="wpcf7-response-output"
																										aria-hidden="true">
																									</div>
																								</form>
																							</div>
																						</div><!-- .contact-form -->
																					</div><!-- .contact-form-wrapper -->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>
														</div>
													</div>
												</div>
											</section>
											<section
												class="elementor-section elementor-top-section elementor-element elementor-element-f85ad0f elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
												data-id="f85ad0f" data-element_type="section"
												data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
												<div class="elementor-background-overlay"></div>
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4987b36"
														data-id="4987b36" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<section
																class="elementor-section elementor-inner-section elementor-element elementor-element-8219dfb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
																data-id="8219dfb" data-element_type="section">
																<div
																	class="elementor-container elementor-column-gap-default">
																	<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-46bab47"
																		data-id="46bab47" data-element_type="column">
																		<div
																			class="elementor-widget-wrap elementor-element-populated">
																			<div class="elementor-element elementor-element-eae3d81 elementor-widget elementor-widget-satenetsectiontitle"
																				data-id="eae3d81"
																				data-element_type="widget"
																				data-widget_type="satenetsectiontitle.default">
																				<div class="elementor-widget-container">
																					<div
																						class="section-title-wrapper text-center">
																						<div class="title-wrap"><span
																								class="sub-title">Still
																								Need Help?</span>
																							<h2 class="section-title">
																								Call Us on 0111 039 600
																							</h2>
																						</div><!-- .title-wrap -->
																						<div
																							class="section-description">
																						</div>
																						<!-- .section-description -->
																					</div>
																					<!-- .section-title-wrapper -->
																				</div>
																			</div>
																			<div class="elementor-element elementor-element-a007f24 elementor-widget elementor-widget-satenetpopup-anything"
																				data-id="a007f24"
																				data-element_type="widget"
																				data-widget_type="satenetpopup-anything.default">

																				<div
																					class="elementor-widget-container popup-anything-wrapper anim text-left">

																					<a class="popup-video-post popup-trigger-icon icon-theme-color"
																						href="tel:+254111039600"><span
																							class="ti-mobile"></span></a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div><!-- #post-## -->
								</div><!-- #primary -->


							</div><!-- main col -->



						</div><!-- row -->

					</div><!-- .container -->
				</div><!-- .satenet-content-inner -->
			</div><!-- .satenet-content -->
		</div><!-- .satenet-content-wrapper -->
		<footer class="site-footer footer-template-6">

			<div class="footer-top-wrap">
				<div class="container">
					<div class="row">
					</div>
				</div>
			</div>
			<div class="footer-middle-wrap boxed-container">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<div class="footer-middle-sidebar">
								<section id="nav_menu-3" class="widget widget_nav_menu">
									<h3 class="widget-title">Useful Links</h3>
									<div class="menu-footer1-container">
										<ul id="menu-footer1" class="menu">
											<li id="menu-item-14086"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14086">
												<a href="/coverage">Coverage</a></li>
											<li id="menu-item-14087"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14087">
												<a href="/careers">Careers</a></li>
											<li id="menu-item-14104"
												class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-6228 current_page_item menu-item-14104">
												<a href="/faq" aria-current="page">FAQs</a></li>
											<li id="menu-item-14337"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14337">
												<a href="/shop">Shop</a></li>
											<li id="menu-item-14340"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14340">
												<a href="/contact-us">Contact Us</a></li>
											<li id="menu-item-14342"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14342">
												<a href="/blog">Blog</a></li>
										</ul>
									</div>
								</section>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="footer-middle-sidebar">
								<section id="nav_menu-1" class="widget widget_nav_menu">
									<h3 class="widget-title">Services</h3>
									<div class="menu-footer2-services-container">
										<ul id="menu-footer2-services" class="menu">
											<li id="menu-item-14898"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-14898">
												<a href="/services">Our Services</a>
												<ul class="sub-menu">
													<li id="menu-item-15320"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15320">
														<a href="/services/internet-services">Internet
															Services</a></li>
													<li id="menu-item-15324"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15324">
														<a href="/services/infrastructure-networking">Infrastructure
															&amp; Networking</a></li>
													<li id="menu-item-15321"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15321">
														<a href="/services/web-cloud-solutions">Web &amp;
															Cloud Solutions</a></li>
													<li id="menu-item-15325"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15325">
														<a href="/services/software-hardware">Software
															&#038; Hardware</a></li>
													<li id="menu-item-15322"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15322">
														<a href="/services/smart-home-security-solutions">Smart
															Home &#038; Security Solutions</a></li>
													<li id="menu-item-15323"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15323">
														<a href="/services/ict-consultancy-training">ICT
															Consultancy &amp; Training</a></li>
												</ul>
											</li>
										</ul>
									</div>
								</section>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="footer-middle-sidebar">
								<section id="nav_menu-4" class="widget widget_nav_menu">
									<h3 class="widget-title">Internet Packages</h3>
									<div class="menu-footer3-packages-container">
										<ul id="menu-footer3-packages" class="menu">
											<li id="menu-item-15741"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15741">
												<a href="/kemnet-home-wireless">Kemnet Home Wireless</a>
											</li>
											<li id="menu-item-14100"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14100">
												<a href="/kemnet-home-fiber">Kemnet Home Fiber</a></li>
											<li id="menu-item-15896"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15896">
												<a href="/kemnet-business-internet">Kemnet Business
													Internet</a></li>
										</ul>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom boxed-container">
				<div class="footer-bottom-inner container">
					<div class="row">
						<div class="col-md-12">
							<ul class="footer-bottom-items nav pull-left">
								<li class="nav-item">
									<div class="nav-item-inner">
										<ul
											class="nav social-icons footer-bottom-social social-circled social-white social-h-own social-bg-transparent social-hbg-transparent">
											<li class="nav-item">
												<a href="https://www.facebook.com/KemnetLtd" class="nav-link social-fb">
													<i class=" ti-facebook"></i>
												</a>
											</li>
											<li class="nav-item">
												<a href="https://www.instagram.com/kemnet_ltd/"
													class="nav-link social-instagram">
													<i class=" ti-instagram"></i>
												</a>
											</li>
											<li class="nav-item">
												<a href="https://www.linkedin.com/company/kemnetltd/"
													class="nav-link social-linkedin">
													<i class=" ti-linkedin"></i>
												</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
							<ul class="footer-bottom-items nav pull-right">
								<li class="nav-item">
									<div class="nav-item-inner">
										<div class="copyright-text-wrap">Copyrights ©
											<script>document.write(new Date().getFullYear());</script> <a
												href="/faq" class="theme-color" target="_blank">KEMNET
												TECHNOLOGIES</a>, driven by TECHNOLOGY, powered by SERVICE, All Rights
											Reserved.
										</div>
									</div>
								</li>
							</ul>

						</div>
					</div>
				</div>
			</div>

			<a href="#" class="back-to-top position-right" id="back-to-top"><i class="ti-angle-up"></i></a>
		</footer><!-- #colophon -->
	</div><!-- #page -->
	<div class="full-search-wrapper">
		<a class="full-search-toggle close" href="#"></a>

		<form method="get" class="search-form" action="/faq">
			<div class="input-group">
				<input type="text" class="form-control" name="s" value="" placeholder="Search for...">
				<span class="input-group-btn">
					<button class="btn btn-secondary" type="submit"><i class="ti-arrow-right"></i></button>
				</span>
			</div>
		</form>
	</div>



	<script>
		window.RS_MODULES = window.RS_MODULES || {};
		window.RS_MODULES.modules = window.RS_MODULES.modules || {};
		window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
		window.RS_MODULES.defered = true;
		window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
		window.RS_MODULES.type = 'compiled';
	</script>
	<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/*"},{"not":{"href_matches":["/wp-*.php","/wp-admin/*","/wp-content/uploads/*","/wp-content/*","/wp-content/plugins/*","/wp-content/themes/satenet-wp/satenet/*","/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
	<script>
		document.addEventListener('wpcf7mailsent', function (event) {
			// Get the form data
			var formData = {
				full_name: document.querySelector('[name="full-name"]').value,
				id_passport: document.querySelector('[name="id-passport"]').value,
				email_address: document.querySelector('[name="email-address"]').value,
				phone_number: document.querySelector('[name="phone-number"]').value,
				estate_apartment_court: document.querySelector('[name="estate-apartment-court"]').value,
				house_number: document.querySelector('[name="house-number"]').value,
				internet_package: document.querySelector('[name="internet-package"]').value,
				wifi_username: document.querySelector('[name="wifi-username"]').value,
				wifi_password: document.querySelector('[name="wifi-password"]').value,
				sales_agent_name: document.querySelector('[name="sales-agent-name"]').value,
			};

			// Send the data to the custom API endpoint
			fetch('/wp-json/splynx/v1/create-lead', {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json',
				},
				body: JSON.stringify(formData),
			})
				.then(response => response.json())
				.then(data => {
					console.log('Success:', data);
				})
				.catch((error) => {
					console.error('Error:', error);
				});
		}, false);
	</script>
	<script id="ckyBannerTemplate"
		type="text/template"><div class="cky-overlay cky-hide"></div><div class="cky-btn-revisit-wrapper cky-revisit-hide" data-cky-tag="revisit-consent" data-tooltip="Cookie Settings" style="background-color:#0056a7"> <button class="cky-btn-revisit" aria-label="Cookie Settings"> <img src="/wp-content/plugins/cookie-law-info/lite/frontend/images/revisit.svg" alt="Revisit consent button"> </button></div><div class="cky-consent-container cky-hide" tabindex="0"> <div class="cky-consent-bar" data-cky-tag="notice" style="background-color:#FFFFFF;border-color:#f4f4f4;color:#212121">  <div class="cky-notice"> <p class="cky-title" role="heading" aria-level="1" data-cky-tag="title" style="color:#212121">We value your privacy</p><div class="cky-notice-group"> <div class="cky-notice-des" data-cky-tag="description" style="color:#212121"> <p>We use cookies to enhance your browsing experience, serve personalized ads or content, and analyze our traffic. By clicking "Accept All", you consent to our use of cookies.</p> </div><div class="cky-notice-btn-wrapper" data-cky-tag="notice-buttons"> <button class="cky-btn cky-btn-customize" aria-label="Customize" data-cky-tag="settings-button" style="color:#1863dc;background-color:transparent;border-color:#1863dc">Customize</button> <button class="cky-btn cky-btn-reject" aria-label="Reject All" data-cky-tag="reject-button" style="color:#1863dc;background-color:transparent;border-color:#1863dc">Reject All</button> <button class="cky-btn cky-btn-accept" aria-label="Accept All" data-cky-tag="accept-button" style="color:#FFFFFF;background-color:#1863dc;border-color:#1863dc">Accept All</button>  </div></div></div></div></div><div class="cky-modal" tabindex="0"> <div class="cky-preference-center" data-cky-tag="detail" style="color:#212121;background-color:#FFFFFF;border-color:#F4F4F4"> <div class="cky-preference-header"> <span class="cky-preference-title" role="heading" aria-level="1" data-cky-tag="detail-title" style="color:#212121">Customize Consent Preferences</span> <button class="cky-btn-close" aria-label="[cky_preference_close_label]" data-cky-tag="detail-close"> <img src="/wp-content/plugins/cookie-law-info/lite/frontend/images/close.svg" alt="Close"> </button> </div><div class="cky-preference-body-wrapper"> <div class="cky-preference-content-wrapper" data-cky-tag="detail-description" style="color:#212121"> <p>We use cookies to help you navigate efficiently and perform certain functions. You will find detailed information about all cookies under each consent category below.</p><p>The cookies that are categorized as "Necessary" are stored on your browser as they are essential for enabling the basic functionalities of the site. </p><p>We also use third-party cookies that help us analyze how you use this website, store your preferences, and provide the content and advertisements that are relevant to you. These cookies will only be stored in your browser with your prior consent.</p><p>You can choose to enable or disable some or all of these cookies but disabling some of them may affect your browsing experience.</p> </div><div class="cky-accordion-wrapper" data-cky-tag="detail-categories"> <div class="cky-accordion" id="ckyDetailCategorynecessary"> <div class="cky-accordion-item"> <div class="cky-accordion-chevron"><i class="cky-chevron-right"></i></div> <div class="cky-accordion-header-wrapper"> <div class="cky-accordion-header"><button class="cky-accordion-btn" aria-label="Necessary" data-cky-tag="detail-category-title" style="color:#212121">Necessary</button><span class="cky-always-active">Always Active</span> <div class="cky-switch" data-cky-tag="detail-category-toggle"><input type="checkbox" id="ckySwitchnecessary"></div> </div> <div class="cky-accordion-header-des" data-cky-tag="detail-category-description" style="color:#212121"> <p>Necessary cookies are required to enable the basic features of this site, such as providing secure log-in or adjusting your consent preferences. These cookies do not store any personally identifiable data.</p></div> </div> </div> <div class="cky-accordion-body"> <div class="cky-audit-table" data-cky-tag="audit-table" style="color:#212121;background-color:#f4f4f4;border-color:#ebebeb"><p class="cky-empty-cookies-text">No cookies to display.</p></div> </div> </div><div class="cky-accordion" id="ckyDetailCategoryfunctional"> <div class="cky-accordion-item"> <div class="cky-accordion-chevron"><i class="cky-chevron-right"></i></div> <div class="cky-accordion-header-wrapper"> <div class="cky-accordion-header"><button class="cky-accordion-btn" aria-label="Functional" data-cky-tag="detail-category-title" style="color:#212121">Functional</button><span class="cky-always-active">Always Active</span> <div class="cky-switch" data-cky-tag="detail-category-toggle"><input type="checkbox" id="ckySwitchfunctional"></div> </div> <div class="cky-accordion-header-des" data-cky-tag="detail-category-description" style="color:#212121"> <p>Functional cookies help perform certain functionalities like sharing the content of the website on social media platforms, collecting feedback, and other third-party features.</p></div> </div> </div> <div class="cky-accordion-body"> <div class="cky-audit-table" data-cky-tag="audit-table" style="color:#212121;background-color:#f4f4f4;border-color:#ebebeb"><p class="cky-empty-cookies-text">No cookies to display.</p></div> </div> </div><div class="cky-accordion" id="ckyDetailCategoryanalytics"> <div class="cky-accordion-item"> <div class="cky-accordion-chevron"><i class="cky-chevron-right"></i></div> <div class="cky-accordion-header-wrapper"> <div class="cky-accordion-header"><button class="cky-accordion-btn" aria-label="Analytics" data-cky-tag="detail-category-title" style="color:#212121">Analytics</button><span class="cky-always-active">Always Active</span> <div class="cky-switch" data-cky-tag="detail-category-toggle"><input type="checkbox" id="ckySwitchanalytics"></div> </div> <div class="cky-accordion-header-des" data-cky-tag="detail-category-description" style="color:#212121"> <p>Analytical cookies are used to understand how visitors interact with the website. These cookies help provide information on metrics such as the number of visitors, bounce rate, traffic source, etc.</p></div> </div> </div> <div class="cky-accordion-body"> <div class="cky-audit-table" data-cky-tag="audit-table" style="color:#212121;background-color:#f4f4f4;border-color:#ebebeb"><p class="cky-empty-cookies-text">No cookies to display.</p></div> </div> </div><div class="cky-accordion" id="ckyDetailCategoryperformance"> <div class="cky-accordion-item"> <div class="cky-accordion-chevron"><i class="cky-chevron-right"></i></div> <div class="cky-accordion-header-wrapper"> <div class="cky-accordion-header"><button class="cky-accordion-btn" aria-label="Performance" data-cky-tag="detail-category-title" style="color:#212121">Performance</button><span class="cky-always-active">Always Active</span> <div class="cky-switch" data-cky-tag="detail-category-toggle"><input type="checkbox" id="ckySwitchperformance"></div> </div> <div class="cky-accordion-header-des" data-cky-tag="detail-category-description" style="color:#212121"> <p>Performance cookies are used to understand and analyze the key performance indexes of the website which helps in delivering a better user experience for the visitors.</p></div> </div> </div> <div class="cky-accordion-body"> <div class="cky-audit-table" data-cky-tag="audit-table" style="color:#212121;background-color:#f4f4f4;border-color:#ebebeb"><p class="cky-empty-cookies-text">No cookies to display.</p></div> </div> </div><div class="cky-accordion" id="ckyDetailCategoryadvertisement"> <div class="cky-accordion-item"> <div class="cky-accordion-chevron"><i class="cky-chevron-right"></i></div> <div class="cky-accordion-header-wrapper"> <div class="cky-accordion-header"><button class="cky-accordion-btn" aria-label="Advertisement" data-cky-tag="detail-category-title" style="color:#212121">Advertisement</button><span class="cky-always-active">Always Active</span> <div class="cky-switch" data-cky-tag="detail-category-toggle"><input type="checkbox" id="ckySwitchadvertisement"></div> </div> <div class="cky-accordion-header-des" data-cky-tag="detail-category-description" style="color:#212121"> <p>Advertisement cookies are used to provide visitors with customized advertisements based on the pages you visited previously and to analyze the effectiveness of the ad campaigns.</p></div> </div> </div> <div class="cky-accordion-body"> <div class="cky-audit-table" data-cky-tag="audit-table" style="color:#212121;background-color:#f4f4f4;border-color:#ebebeb"><p class="cky-empty-cookies-text">No cookies to display.</p></div> </div> </div> </div></div><div class="cky-footer-wrapper"> <span class="cky-footer-shadow"></span> <div class="cky-prefrence-btn-wrapper" data-cky-tag="detail-buttons"> <button class="cky-btn cky-btn-reject" aria-label="Reject All" data-cky-tag="detail-reject-button" style="color:#1863dc;background-color:transparent;border-color:#1863dc"> Reject All </button> <button class="cky-btn cky-btn-preferences" aria-label="Save My Preferences" data-cky-tag="detail-save-button" style="color:#1863dc;background-color:transparent;border-color:#1863dc"> Save My Preferences </button> <button class="cky-btn cky-btn-accept" aria-label="Accept All" data-cky-tag="detail-accept-button" style="color:#ffffff;background-color:#1863dc;border-color:#1863dc"> Accept All </button> </div></div></div></div></script>
	<!-- Click to Chat - https://holithemes.com/plugins/click-to-chat/  v4.20 -->
	<div class="ht-ctc ht-ctc-chat ctc-analytics ctc_wp_desktop style-2  " id="ht-ctc-chat"
		style="display: none;  position: fixed; bottom: 15%; right: 2.3%;">
		<div class="ht_ctc_style ht_ctc_chat_style">
			<div style="display: flex; justify-content: center; align-items: center;  " class="ctc-analytics ctc_s_2">
				<p class="ctc-analytics ctc_cta ctc_cta_stick ht-ctc-cta  ht-ctc-cta-hover "
					style="padding: 0px 16px; line-height: 1.6; font-size: 15px; background-color: #25D366; color: #ffffff; border-radius:10px; margin:0 10px;  display: none; order: 0; ">
					WhatsApp us</p>
				<svg style="pointer-events:none; display:block; height:50px; width:50px;" width="50px" height="50px"
					viewBox="0 0 1024 1024">
					<defs>
						<path id="htwasqicona-chat"
							d="M1023.941 765.153c0 5.606-.171 17.766-.508 27.159-.824 22.982-2.646 52.639-5.401 66.151-4.141 20.306-10.392 39.472-18.542 55.425-9.643 18.871-21.943 35.775-36.559 50.364-14.584 14.56-31.472 26.812-50.315 36.416-16.036 8.172-35.322 14.426-55.744 18.549-13.378 2.701-42.812 4.488-65.648 5.3-9.402.336-21.564.505-27.15.505l-504.226-.081c-5.607 0-17.765-.172-27.158-.509-22.983-.824-52.639-2.646-66.152-5.4-20.306-4.142-39.473-10.392-55.425-18.542-18.872-9.644-35.775-21.944-50.364-36.56-14.56-14.584-26.812-31.471-36.415-50.314-8.174-16.037-14.428-35.323-18.551-55.744-2.7-13.378-4.487-42.812-5.3-65.649-.334-9.401-.503-21.563-.503-27.148l.08-504.228c0-5.607.171-17.766.508-27.159.825-22.983 2.646-52.639 5.401-66.151 4.141-20.306 10.391-39.473 18.542-55.426C34.154 93.24 46.455 76.336 61.07 61.747c14.584-14.559 31.472-26.812 50.315-36.416 16.037-8.172 35.324-14.426 55.745-18.549 13.377-2.701 42.812-4.488 65.648-5.3 9.402-.335 21.565-.504 27.149-.504l504.227.081c5.608 0 17.766.171 27.159.508 22.983.825 52.638 2.646 66.152 5.401 20.305 4.141 39.472 10.391 55.425 18.542 18.871 9.643 35.774 21.944 50.363 36.559 14.559 14.584 26.812 31.471 36.415 50.315 8.174 16.037 14.428 35.323 18.551 55.744 2.7 13.378 4.486 42.812 5.3 65.649.335 9.402.504 21.564.504 27.15l-.082 504.226z" />
					</defs>
					<linearGradient id="htwasqiconb-chat" gradientUnits="userSpaceOnUse" x1="512.001" y1=".978"
						x2="512.001" y2="1025.023">
						<stop offset="0" stop-color="#61fd7d" />
						<stop offset="1" stop-color="#2bb826" />
					</linearGradient>
					<use xlink:href="#htwasqicona-chat" overflow="visible" style="fill: url(#htwasqiconb-chat)"
						fill="url(#htwasqiconb-chat)" />
					<g>
						<path style="fill: #FFFFFF;" fill="#FFF"
							d="M783.302 243.246c-69.329-69.387-161.529-107.619-259.763-107.658-202.402 0-367.133 164.668-367.214 367.072-.026 64.699 16.883 127.854 49.017 183.522l-52.096 190.229 194.665-51.047c53.636 29.244 114.022 44.656 175.482 44.682h.151c202.382 0 367.128-164.688 367.21-367.094.039-98.087-38.121-190.319-107.452-259.706zM523.544 808.047h-.125c-54.767-.021-108.483-14.729-155.344-42.529l-11.146-6.612-115.517 30.293 30.834-112.592-7.259-11.544c-30.552-48.579-46.688-104.729-46.664-162.379.066-168.229 136.985-305.096 305.339-305.096 81.521.031 158.154 31.811 215.779 89.482s89.342 134.332 89.312 215.859c-.066 168.243-136.984 305.118-305.209 305.118zm167.415-228.515c-9.177-4.591-54.286-26.782-62.697-29.843-8.41-3.062-14.526-4.592-20.645 4.592-6.115 9.182-23.699 29.843-29.053 35.964-5.352 6.122-10.704 6.888-19.879 2.296-9.176-4.591-38.74-14.277-73.786-45.526-27.275-24.319-45.691-54.359-51.043-63.543-5.352-9.183-.569-14.146 4.024-18.72 4.127-4.109 9.175-10.713 13.763-16.069 4.587-5.355 6.117-9.183 9.175-15.304 3.059-6.122 1.529-11.479-.765-16.07-2.293-4.591-20.644-49.739-28.29-68.104-7.447-17.886-15.013-15.466-20.645-15.747-5.346-.266-11.469-.322-17.585-.322s-16.057 2.295-24.467 11.478-32.113 31.374-32.113 76.521c0 45.147 32.877 88.764 37.465 94.885 4.588 6.122 64.699 98.771 156.741 138.502 21.892 9.45 38.982 15.094 52.308 19.322 21.98 6.979 41.982 5.995 57.793 3.634 17.628-2.633 54.284-22.189 61.932-43.615 7.646-21.427 7.646-39.791 5.352-43.617-2.294-3.826-8.41-6.122-17.585-10.714z" />
					</g>
				</svg>
			</div>
		</div>
	</div>
	<span class="ht_ctc_chat_data" data-no_number=""
		data-settings="{&quot;number&quot;:&quot;254700638585&quot;,&quot;pre_filled&quot;:&quot;Hello Kemnet,\r\n\r\nLike to know more information about your services at \/faq\/&quot;,&quot;dis_m&quot;:&quot;show&quot;,&quot;dis_d&quot;:&quot;show&quot;,&quot;css&quot;:&quot;display: none; cursor: pointer; z-index: 99999999;&quot;,&quot;pos_d&quot;:&quot;position: fixed; bottom: 15%; right: 2.3%;&quot;,&quot;pos_m&quot;:&quot;position: fixed; bottom: 15%; right: 2.3%;&quot;,&quot;schedule&quot;:&quot;no&quot;,&quot;se&quot;:150,&quot;ani&quot;:&quot;no-animation&quot;,&quot;url_target_d&quot;:&quot;_blank&quot;,&quot;ga&quot;:&quot;yes&quot;,&quot;fb&quot;:&quot;yes&quot;,&quot;g_init&quot;:&quot;default&quot;,&quot;g_an_event_name&quot;:&quot;chat: {number}&quot;,&quot;pixel_event_name&quot;:&quot;Click to Chat by HoliThemes&quot;}"></span>
	<script>
		const lazyloadRunObserver = () => {
			const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
			const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						let lazyloadBackground = entry.target;
						if (lazyloadBackground) {
							lazyloadBackground.classList.add('e-lazyloaded');
						}
						lazyloadBackgroundObserver.unobserve(entry.target);
					}
				});
			}, { rootMargin: '200px 0px 200px 0px' });
			lazyloadBackgrounds.forEach((lazyloadBackground) => {
				lazyloadBackgroundObserver.observe(lazyloadBackground);
			});
		};
		const events = [
			'DOMContentLoaded',
			'elementor/lazyload/observe',
		];
		events.forEach((event) => {
			document.addEventListener(event, lazyloadRunObserver);
		});
	</script>
	<script type='text/javascript'>
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<script type="text/javascript" id="woocommerce-google-analytics-integration-data-js-after">
		/* <![CDATA[ */
		window.ga4w = { data: { "cart": { "items": [], "coupons": [], "totals": { "currency_code": "KES", "total_price": 0, "currency_minor_unit": 2 } } }, settings: { "tracker_function_name": "gtag", "events": ["purchase", "add_to_cart", "remove_from_cart", "view_item_list", "select_content", "view_item", "begin_checkout"], "identifier": null } }; document.dispatchEvent(new Event("ga4w:ready"));
		//# sourceURL=woocommerce-google-analytics-integration-data-js-after
		/* ]]> */
	</script>
	<script type="text/javascript" id="wpo_min-footer-0-js-extra">
		/* <![CDATA[ */
		var ht_ctc_chat_var = { "number": "254700638585", "pre_filled": "Hello Kemnet,\r\n\r\nLike to know more information about your services at /faq/", "dis_m": "show", "dis_d": "show", "css": "display: none; cursor: pointer; z-index: 99999999;", "pos_d": "position: fixed; bottom: 15%; right: 2.3%;", "pos_m": "position: fixed; bottom: 15%; right: 2.3%;", "schedule": "no", "se": "150", "ani": "no-animation", "url_target_d": "_blank", "ga": "yes", "fb": "yes", "g_init": "default", "g_an_event_name": "chat: {number}", "pixel_event_name": "Click to Chat by HoliThemes" };
		var ht_ctc_variables = { "g_an_event_name": "chat: {number}", "pixel_event_type": "trackCustom", "pixel_event_name": "Click to Chat by HoliThemes", "g_an_params": ["g_an_param_1", "g_an_param_2", "g_an_param_3"], "g_an_param_1": { "key": "number", "value": "{number}" }, "g_an_param_2": { "key": "title", "value": "{title}" }, "g_an_param_3": { "key": "url", "value": "{url}" }, "pixel_params": ["pixel_param_1", "pixel_param_2", "pixel_param_3", "pixel_param_4"], "pixel_param_1": { "key": "Category", "value": "Click to Chat for WhatsApp" }, "pixel_param_2": { "key": "ID", "value": "{number}" }, "pixel_param_3": { "key": "Title", "value": "{title}" }, "pixel_param_4": { "key": "URL", "value": "{url}" } };
		//# sourceURL=wpo_min-footer-0-js-extra
		/* ]]> */
	</script>
	<script type="text/javascript"
		src="/wp-content/cache/wpo-minify/1764737221/assets/wpo-minify-footer-0c9a1ccf.min.js"
		id="wpo_min-footer-0-js"></script>
	<script type="text/javascript" src="/gtag/js?id=G-3R3FWM6ELV"
		id="google-tag-manager-js" data-wp-strategy="async"></script>
	<script type="text/javascript"
		src="/wp-content/cache/wpo-minify/1764737221/assets/wpo-minify-footer-034d157f.min.js"
		id="wpo_min-footer-2-js"></script>
	<script type="text/javascript" id="wpo_min-footer-3-js-extra">
		/* <![CDATA[ */
		var satenet_ajax_var = { "admin_ajax_url": "/wp-admin/admin-ajax.php", "like_nonce": "c0362a7da2", "fav_nonce": "5166e34209", "wishlist_remove": "e7d72c8df3", "product_view": "3167a6c9a6", "infinite_loader": { "id": "11741", "url": "/wp-content/uploads/2023/08/cropped-KEMNET-LOGO-PSD.png" }, "load_posts": "Loading next set of posts.", "no_posts": "No more posts to load.", "cmt_nonce": "38bc275b72", "mc_nounce": "368577ac9d", "wait": "Wait..", "must_fill": "Must Fill Required Details.", "valid_email": "Enter Valid Email ID.", "cart_update_pbm": "Cart Update Problem.", "gmap_stat": "1", "user_logged": "0", "add_to_cart": "eaaaf097dc", "remove_from_cart": "306fc4756a", "body_atts": { "scroll_time": "", "scroll_dist": "", "res_width": 1025, "core_stat": false, "menu_offset": 60, "mobile_menu_offset": 60 } };
		var wc_order_attribution = { "params": { "lifetime": 1.0e-5, "session": 30, "base64": false, "ajaxurl": "/wp-admin/admin-ajax.php", "prefix": "wc_order_attribution_", "allowTracking": true }, "fields": { "source_type": "current.typ", "referrer": "current_add.rf", "utm_campaign": "current.cmp", "utm_source": "current.src", "utm_medium": "current.mdm", "utm_content": "current.cnt", "utm_id": "current.id", "utm_term": "current.trm", "utm_source_platform": "current.plt", "utm_creative_format": "current.fmt", "utm_marketing_tactic": "current.tct", "session_entry": "current_add.ep", "session_start_time": "current_add.fd", "session_pages": "session.pgs", "session_count": "udata.vst", "user_agent": "udata.uag" } };
		//# sourceURL=wpo_min-footer-3-js-extra
		/* ]]> */
	</script>
	<script type="text/javascript"
		src="/wp-content/cache/wpo-minify/1764737221/assets/wpo-minify-footer-ae994d4f.min.js"
		id="wpo_min-footer-3-js"></script>
	<script type="text/javascript"
		src="../../www.google.com/recaptcha/api7f37.js?render=6Lfn4X0qAAAAAOvFqOP4V_3SLg_r9OKF6yhrRQnm&amp;ver=3.0"
		id="google-recaptcha-js"></script>
	<script type="text/javascript"
		src="/wp-content/cache/wpo-minify/1764737221/assets/wpo-minify-footer-52fa0690.min.js"
		id="wpo_min-footer-5-js"></script>
	<script type="text/javascript"
		src="/wp-content/cache/wpo-minify/1764737221/assets/wpo-minify-footer-45a93ccf.min.js"
		id="wpo_min-footer-6-js"></script>
	<script type="text/javascript"
		src="/wp-content/cache/wpo-minify/1764737221/assets/wpo-minify-footer-9a4b0961.min.js"
		id="wpo_min-footer-7-js"></script>
@endverbatim
@endsection

