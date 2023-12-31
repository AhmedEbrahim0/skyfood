<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Skyfood Dashorad</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="{{asset('layouts/vendors/images/apple-touch-icon.png')}}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="{{asset('layouts/vendors/images/favicon-32x32.png')}}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="{{asset('layouts/vendors/images/favicon-16x16.png')}}"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('layouts/vendors/styles/core.css')}}" />
		<link
			rel="stylesheet"
			type="text/css"
			href="{{asset('layouts/vendors/styles/icon-font.min.css')}}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{asset('layouts/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{asset('layouts/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}"
		/>
		<link rel="stylesheet" type="text/css" href="{{asset('layouts/vendors/styles/style.css')}}" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->

		<style>
			.textarea{
				width: 100%;
				height: 100px;
			}
		</style>


	</head>
	<body>


		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				<div
					class="search-toggle-icon bi bi-search"
					data-toggle="header_search"
				></div>
				<div class="header-search">
					<form>
						<div class="form-group mb-0">
	
							<div class="dropdown">

								<div class="dropdown-menu dropdown-menu-right">
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>From</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">To</label>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>Subject</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="text-right">
										<button class="btn btn-primary">Search</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="header-right">
				<div class="dashboard-setting user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							
							data-toggle="right-sidebar"
						>
							<i class="dw dw-settings2"></i>
						</a>
					</div>
				</div>

				<div class="user-info-dropdown">
					<div class="dropdown">
						<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<span class="user-icon">
								<img src="/layouts/vendors/images/photo1.jpg" alt="" />
							</span>
							<span class="user-name">{{Auth::user()->name}}</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
	
							<a class="dropdown-item" href="/"
								><i class="dw dw-logout"></i> Log Out</a
							>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Layout Settings
					<span class="btn-block font-weight-400 font-12"
						>User Interface Settings</span
					>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Header Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-white active"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-light"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
					<div class="sidebar-radio-group pb-10 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-1"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebaricon-1"
								><i class="fa fa-angle-down"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-2"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-2"
							/>
							<label class="custom-control-label" for="sidebaricon-2"
								><i class="ion-plus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-3"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-3"
							/>
							<label class="custom-control-label" for="sidebaricon-3"
								><i class="fa fa-angle-double-right"></i
							></label>
						</div>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
					<div class="sidebar-radio-group pb-30 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-1"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-1"
								><i class="ion-minus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-2"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-2"
							/>
							<label class="custom-control-label" for="sidebariconlist-2"
								><i class="fa fa-circle-o" aria-hidden="true"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-3"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-3"
							/>
							<label class="custom-control-label" for="sidebariconlist-3"
								><i class="dw dw-check"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-4"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-4"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-4"
								><i class="icon-copy dw dw-next-2"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-5"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-5"
							/>
							<label class="custom-control-label" for="sidebariconlist-5"
								><i class="dw dw-fast-forward-1"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-6"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-6"
							/>
							<label class="custom-control-label" for="sidebariconlist-6"
								><i class="dw dw-next"></i
							></label>
						</div>
					</div>

					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Reset Settings
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="left-side-bar">
			<div class="brand-logo">
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
<!-- 
						<li class="dropdown">
							<a  class="dropdown-toggle">
								<span class="micon bi bi-house"></span
								><span class="mtext">  Page</span>
							</a>
							<ul class="submenu">
								<li><a href="/admin/page">one</a></li>
								<li><a href="/admin/all">all</a></li>
								<li><a href="/admin/create-page">add</a></li>
							</ul>
						</li> -->



						<li class="dropdown">
							<a  class="dropdown-toggle">
								<span class="micon bi bi-house"></span
								><span class="mtext"> Home</span>
							</a>
							<ul class="submenu">
								<li><a href="/admin/home">background</a></li>
								<li><a href="/admin/home-eachbrand">Meet Our Brand</a></li>
							</ul>
						</li>


						<li class="dropdown">
							<a  class="dropdown-toggle">
								<span class="micon bi bi-house"></span
								><span class="mtext"> Our Comapny</span>
							</a>
							<ul class="submenu">
								<li><a href="/admin/company">background</a></li>
								<li><a href="/admin/company-firstSection">First Section</a></li>
								<li><a href="/admin/company-sections">Sections</a></li>
								<li><a href="/admin/create-company">add section</a></li>
								<li><a href="/admin/company-carousel">Sliders</a></li>
								<li><a href="/admin/create-carousel-company">add slider</a></li>
							</ul>
						</li>

	
						<li class="dropdown">
							<a  class="dropdown-toggle">
								<span class="micon bi bi-house"></span
								><span class="mtext"> brands </span>
							</a>
							<ul class="submenu">
								<li><a href="/admin/brands">background</a></li>
								<li><a href="/admin/brands-sections">brands</a></li>
								<li><a href="/admin/create-brands">add new brand</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a  class="dropdown-toggle">
								<span class="micon bi bi-house"></span
								><span class="mtext"> News </span>
							</a>
							<ul class="submenu">
								<li><a href="/admin/news">background</a></li>
								<li><a href="/admin/news-sections">news</a></li>
								<li><a href="/admin/create-news">add new</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a  class="dropdown-toggle">
								<span class="micon bi bi-house"></span
								><span class="mtext"> Food-Safety </span>
							</a>
							<ul class="submenu">
								<li><a href="/admin/foot-background"> Background  </a></li>
								<li><a href="/admin/food-section1">Stringent Quality Control</a></li>
								<li><a href="/admin/food-section2">Hygiene and Sanitation</a></li>
								<li><a href="/admin/food-section3">Traceability and Transparency</a></li>
								<li><a href="/admin/food-section4">  Continuous Improvement</a></li>
								<li><a href="/admin/food-section5">  Food Safety Protocols </a></li>
								<li><a href="/admin/food-section6">  last Section</a></li>

							</ul>
						</li>
						<li class="dropdown">
							<a  class="dropdown-toggle">
								<span class="micon bi bi-house"></span
								><span class="mtext"> Innvations </span>
							</a>
							<ul class="submenu">
								<li><a href="/admin/innvation">background</a></li>
								<li><a href="/admin/innvation-sections">Innvation</a></li>
								<li><a href="/admin/create-innvation">add Innvation </a> </li>
								<li><a href="/admin/innvation-lastSection">Last Section</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a  class="dropdown-toggle">
								<span class="micon bi bi-house"></span
								><span class="mtext"> Contact Us </span>
							</a>
							<ul class="submenu">
								<li><a href="/admin/contact">background</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a  class="dropdown-toggle">
								<span class="micon bi bi-house"></span
								><span class="mtext"> Users  </span>
							</a>
							<ul class="submenu">
								<li><a href="/admin/users">users</a></li>
								<li><a href="/admin/create-user">Add New User</a></li>
							</ul>
						</li>

<!-- 
						<li class="dropdown">
							<a  class="dropdown-toggle">
								<span class="micon bi bi-house"></span
								><span class="mtext"> Page</span>
							</a>
							<ul class="submenu">
								<li><a href="">Link</a></li>
							</ul>
						</li> -->

					</ul>
				</div>
			</div>
		</div>
