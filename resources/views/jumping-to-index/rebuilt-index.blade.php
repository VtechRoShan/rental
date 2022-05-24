<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blogzine - Blog and Magazine Bootstrap 5 Theme</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Bootstrap based News, Magazine and Blog Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
  <link rel="stylesheet" type="text/css" href="assets/vendor/plyr/plyr.css">

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">
  
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-XZ4W34ZJ0L"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-XZ4W34ZJ0L');
	</script>
</head>

<body>
<!-- Offcanvas START -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu">
  <div class="offcanvas-header justify-content-end">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body d-flex flex-column pt-0">
		<div>
			<img class="light-mode-item my-3" src="assets/images/logo.svg" alt="logo">
			<img class="dark-mode-item my-3" src="assets/images/logo-light.svg" alt="logo">
			<p>The next-generation blog, news, and magazine theme for you to start sharing your stories today! </p>
			<!-- Nav START -->
			<ul class="nav d-block flex-column my-4">
				<li class="nav-item">
					<a href="index.html" class="nav-link h5">Home</a>
				<li class="nav-item">
					<a class="nav-link h5" href="about-us.html">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link h5" href="post-grid.html">Our Journal</a>
				</li>
				<li class="nav-item">
					<a class="nav-link h5" href="contact-us.html">Contact Us</a>
				</li>
			</ul>
			<!-- Nav END -->
			<div class="bg-primary-soft p-4 mb-4 text-center w-100 rounded">
				<span>The Blogzine</span>
				<h3>Save on Premium Membership</h3>
				<p>Get the insights report trusted by experts around the globe. Become a Member Today!</p>
				<a href="index.html#" class="btn btn-warning">View pricing plans</a>
			</div>
		</div>
		<div class="mt-auto pb-3">
			<!-- Address -->
			<p class="text-body mb-2 fw-bold">New York, USA (HQ)</p>
			<address class="mb-0">750 Sing Sing Rd, Horseheads, NY, 14845</address>
			<p class="mb-2">Call: <a href="index.html#" class="text-body"><u>469-537-2410</u> (Toll-free)</a> </p>
			<a href="index.html#" class="text-body d-block">hello@blogzine.com</a>
		</div>
  </div>
</div>
<!-- Offcanvas END -->

<!-- =======================
Header START -->
<header class="navbar-light navbar-sticky header-static">
	<div class="navbar-top d-none d-lg-block small">
		<div class="container">
			<div class="d-md-flex justify-content-between align-items-center my-2">
				<!-- Top bar left -->
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link ps-0" href="about-us.html">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.html#">Forum</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://themes.getbootstrap.com/store/webestica/">Buy now!</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="signin.html">Login / Join</a>
					</li>
				</ul>
				<!-- Top bar right -->
				<div class="d-flex align-items-center">
					<!-- Font size accessibility START -->
					<div class="btn-group me-2" role="group" aria-label="font size changer">
						<input type="radio" class="btn-check" name="fntradio" id="font-sm">
						<label class="btn btn-xs btn-outline-primary mb-0" for="font-sm">A-</label>

						<input type="radio" class="btn-check" name="fntradio" id="font-default" checked>
						<label class="btn btn-xs btn-outline-primary mb-0" for="font-default">A</label>

						<input type="radio" class="btn-check" name="fntradio" id="font-lg">
						<label class="btn btn-xs btn-outline-primary mb-0" for="font-lg">A+</label>
					</div>

					<!-- Dark mode switch -->
					<div class="modeswitch" id="darkModeSwitch">
						<div class="switch"></div>
					</div>

					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="index.html#"><i class="fab fa-facebook-square"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="index.html#"><i class="fab fa-twitter-square"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="index.html#"><i class="fab fa-linkedin"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="index.html#"><i class="fab fa-youtube-square"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link ps-2 pe-0 fs-5" href="index.html#"><i class="fab fa-vimeo"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<!-- Divider -->
			<div class="border-bottom border-2 border-primary opacity-1"></div>
		</div>
	</div>

	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.html">
				<img class="navbar-brand-item light-mode-item" src="assets/images/logo.svg" alt="logo">			
				<img class="navbar-brand-item dark-mode-item" src="assets/images/logo-light.svg" alt="logo">			
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="text-body h6 d-none d-sm-inline-block">Menu</span>
			  <span class="navbar-toggler-icon"></span>
		  </button>

			<!-- Main navbar START -->
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll mx-auto">

					<!-- Nav item 1 Demos -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle active" href="index.html#" id="homeMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
						<ul class="dropdown-menu" aria-labelledby="homeMenu">
							<li> <a class="dropdown-item active" href="index.html">Home default</a></li>
							<li> <a class="dropdown-item" href="index-lazy.html">Home lazy load</a></li>
							<li> <a class="dropdown-item" href="index-2.html">Magazine classic</a></li>
							<li> <a class="dropdown-item" href="index-3.html">Magazine</a></li>
							<li> <a class="dropdown-item" href="index-4.html">Home cards</a></li>
							<li> <a class="dropdown-item" href="index-5.html">Blog classic</a></li>
							<li> <a class="dropdown-item" href="index-6.html">Blog Personal <span class="badge bg-danger smaller me-1">New</span> </a></li>
							<li> <a class="dropdown-item" href="index-7.html">Blog Vintage <span class="badge bg-danger smaller me-1">New</span></a></li>
							<li> <a class="dropdown-item" href="index-8.html">Blog Tech <span class="badge bg-danger smaller me-1">New</span></a></li>
							<li> <a class="dropdown-item" href="index-9.html">Blog Fashion <span class="badge bg-danger smaller me-1">New</span></a></li>
							<li> <a class="dropdown-item" href="index-10.html">Blog Podcast <span class="badge bg-danger smaller me-1">New</span></a></li>
						</ul>
					</li>

					<!-- Nav item 2 Pages -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="index.html#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
						<ul class="dropdown-menu" aria-labelledby="pagesMenu">
							<li> <a class="dropdown-item" href="about-us.html">About</a></li>
							<li> <a class="dropdown-item" href="contact-us.html">Contact</a></li>
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend"> 
								<a class="dropdown-item dropdown-toggle" href="index.html#">Other Archives</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="author.html">Author Page</a> </li>
									<li> <a class="dropdown-item" href="categories.html">Category page 1</a> </li>
									<li> <a class="dropdown-item" href="categories-2.html">Category page 2</a> </li>
									<li> <a class="dropdown-item" href="tag.html"># tag</a> </li>
									<li> <a class="dropdown-item" href="search-result.html">Search result</a> </li>
								</ul>
							</li>
							<li> <a class="dropdown-item" href="404.html">Error 404</a></li>
							<li> <a class="dropdown-item" href="signin.html">signin</a></li>
							<li> <a class="dropdown-item" href="signup.html">signup</a></li>
							<li> <a class="dropdown-item" href="offline.html">offline</a></li>
							<!-- Dropdown submenu levels -->
							<li class="dropdown-divider"></li>
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="index.html#">Dropdown levels</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<!-- dropdown submenu open right -->
									<li class="dropdown-submenu dropend">
										<a class="dropdown-item dropdown-toggle" href="index.html#">Dropdown (end)</a>
										<ul class="dropdown-menu" data-bs-popper="none">
											<li> <a class="dropdown-item" href="index.html#">Dropdown item</a> </li>
											<li> <a class="dropdown-item" href="index.html#">Dropdown item</a> </li>
										</ul>
									</li>
									<li> <a class="dropdown-item" href="index.html#">Dropdown item</a> </li>
									<!-- dropdown submenu open left -->
									<li class="dropdown-submenu dropstart">
										<a class="dropdown-item dropdown-toggle" href="index.html#">Dropdown (start)</a>
										<ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
											<li> <a class="dropdown-item" href="index.html#">Dropdown item</a> </li>
											<li> <a class="dropdown-item" href="index.html#">Dropdown item</a> </li>
										</ul>
									</li>
									<li> <a class="dropdown-item" href="index.html#">Dropdown item</a> </li>
								</ul>
							</li>
							<li class="dropdown-divider"></li>
							<li> 
								<a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
									<i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support
								</a> 
							</li>
							<li> 
								<a class="dropdown-item" href="docs/index.html" target="_blank">
									<i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
								</a> 
							</li>
							<li class="dropdown-divider"></li>
							<li> 
								<a class="dropdown-item" href="rtl.html" target="_blank">
									<i class="text-info fa-fw bi bi-toggle-off me-2"></i>RTL demo
								</a> 
							</li>
							<li> 
								<a class="dropdown-item" href="https://themes.getbootstrap.com/store/webestica/" target="_blank">
									<i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy blogzine!
								</a> 
							</li>
						</ul>
					</li>

					<!-- Nav item 3 Post -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="index.html#" id="postMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Post</a>
						<ul class="dropdown-menu" aria-labelledby="postMenu">
							<!-- dropdown submenu -->
							<li class="dropdown-submenu dropend"> 
								<a class="dropdown-item dropdown-toggle" href="index.html#">Post grid</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="post-grid.html">Post grid</a> </li>
									<li> <a class="dropdown-item" href="post-grid-4-col.html">Post grid 4 col</a> </li>
									<li> <a class="dropdown-item" href="post-grid-masonry.html">Post grid masonry</a> </li>
									<li> <a class="dropdown-item" href="post-grid-masonry-filter.html">Post grid masonry filter</a> </li>
									<li> <a class="dropdown-item" href="post-large-and-grid.html">Post mixed large than grid</a> </li>
								</ul>
							</li>
							<li> <a class="dropdown-item" href="post-list.html">Post list</a> </li>
							<li> <a class="dropdown-item" href="post-list-2.html">Post list 2</a> </li>
							<li> <a class="dropdown-item" href="post-cards.html">Post card</a> </li>
							<li> <a class="dropdown-item" href="post-overlay.html">Post Overlay</a> </li>
							<li> <a class="dropdown-item" href="post-types.html">Post types <span class="badge bg-danger smaller me-1">New</span></a> </li>
							<li class="dropdown-divider"></li>
							<li> <a class="dropdown-item" href="post-single.html">Post single magazine</a> </li>
							<li> <a class="dropdown-item" href="post-single-2.html">Post single classic</a> </li>
							<li> <a class="dropdown-item" href="post-single-3.html">Post single minimal</a> </li>
							<li> <a class="dropdown-item" href="post-single-4.html">Post single card</a> </li>
							<li> <a class="dropdown-item" href="post-single-5.html">Post single review</a> </li>
							<li> <a class="dropdown-item" href="post-single-6.html">Post single video</a> </li>
							<li> <a class="dropdown-item" href="podcast-single.html">Podcast single <span class="badge bg-danger smaller me-1">New</span> </a> </li>
							<li class="dropdown-divider"></li>
							<li> <a class="dropdown-item" href="pagination-styles.html">Pagination styles</a> </li>
						</ul>
					</li>

					<!-- Nav item 4 Mega menu -->
					<li class="nav-item dropdown dropdown-fullwidth">
						<a class="nav-link dropdown-toggle" href="index.html#" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Lifestyle</a>
						<div class="dropdown-menu" aria-labelledby="megaMenu">
							<div class="container">
								<div class="row g-4 p-3 flex-fill">
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<!-- Card img -->
											<img class="card-img rounded" src="assets/images/blog/16by9/small/01.jpg" alt="Card image">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="index.html#" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h6>
												<!-- Card info -->
												<ul class="nav nav-divider align-items-center text-uppercase small mt-2">
													<li class="nav-item">
														<a href="index.html#" class="text-reset btn-link">Joan Wallace</a>
													</li>
													<li class="nav-item">Feb 18, 2022</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<!-- Card img -->
											<img class="card-img rounded" src="assets/images/blog/16by9/small/02.jpg" alt="Card image">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="index.html#" class="btn-link text-reset fw-bold">12 worst types of business accounts you follow on Twitter</a></h6>
												<!-- Card info -->
												<ul class="nav nav-divider align-items-center text-uppercase small mt-2">
													<li class="nav-item">
														<a href="index.html#" class="text-reset btn-link">Lori Stevens</a>
													</li>
													<li class="nav-item">Jun 03, 2022</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<!-- Card img -->
											<img class="card-img rounded" src="assets/images/blog/16by9/small/03.jpg" alt="Card image">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="index.html#" class="btn-link text-reset fw-bold">Skills that you can learn from business</a></h6>
												<!-- Card info -->
												<ul class="nav nav-divider align-items-center text-uppercase small mt-2">
													<li class="nav-item">
														<a href="index.html#" class="text-reset btn-link">Judy Nguyen</a>
													</li>
													<li class="nav-item">Sep 07, 2022</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="bg-primary-soft p-4 text-center h-100 w-100 rounded">
											<span>The Blogzine</span>
											<h3>Premium Membership</h3>
											<p>Become a Member Today!</p>
											<a href="index.html#" class="btn btn-warning">View pricing plans</a>
										</div>
									</div>
									<!-- Card item END -->
								</div> <!-- Row END -->
								<!-- Trending tags -->
								<div class="row px-3">
									<div class="col-12">
										<ul class="list-inline mt-3">
											<li class="list-inline-item">Trending tags:</li>
											<li class="list-inline-item"><a href="index.html#" class="btn btn-sm btn-primary-soft">Travel</a></li>
											<li class="list-inline-item"><a href="index.html#" class="btn btn-sm btn-warning-soft">Business</a></li>
											<li class="list-inline-item"><a href="index.html#" class="btn btn-sm btn-success-soft">Tech</a></li>
											<li class="list-inline-item"><a href="index.html#" class="btn btn-sm btn-danger-soft">Gadgets</a></li>
											<li class="list-inline-item"><a href="index.html#" class="btn btn-sm btn-info-soft">Lifestyle</a></li>
											<li class="list-inline-item"><a href="index.html#" class="btn btn-sm btn-primary-soft">Vaccine</a></li>
											<li class="list-inline-item"><a href="index.html#" class="btn btn-sm btn-success-soft">Sports</a></li>
											<li class="list-inline-item"><a href="index.html#" class="btn btn-sm btn-danger-soft">Covid-19</a></li>
											<li class="list-inline-item"><a href="index.html#" class="btn btn-sm btn-info-soft">Politics</a></li>
										</ul>
									</div>
								</div> <!-- Row END -->
							</div>
						</div>
					</li>

					<!-- Nav item 5 link-->
					<li class="nav-item"> <a class="nav-link" href="dashboard.html">Dashboard</a></li>
				</ul>
			</div>
			<!-- Main navbar END -->

			<!-- Nav right START -->
			<div class="nav flex-nowrap align-items-center">
				<!-- Nav Button -->
				<div class="nav-item d-none d-md-block">
					<a href="index.html#" class="btn btn-sm btn-danger mb-0 mx-2">Subscribe!</a>
				</div>
				<!-- Nav Search -->
				<div class="nav-item dropdown dropdown-toggle-icon-none nav-search">
					<a class="nav-link dropdown-toggle" role="button" href="index.html#" id="navSearch" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="bi bi-search fs-4"> </i>
					</a>
					<div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
					  <form class="input-group">
					    <input class="form-control border-success" type="search" placeholder="Search" aria-label="Search">
					    <button class="btn btn-success m-0" type="submit">Search</button>
					  </form>
					</div>
				</div>
				<!-- Offcanvas menu toggler -->
				<div class="nav-item">
					<a class="nav-link p-0" data-bs-toggle="offcanvas" href="index.html#offcanvasMenu" role="button" aria-controls="offcanvasMenu">
						<i class="bi bi-text-right rtl-flip fs-2" data-bs-target="#offcanvasMenu"> </i>
					</a>
				</div>
			</div>
			<!-- Nav right END -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Trending START -->
<section class="p-0">
	<div class="container-fluid">
    <div class="row g-0">
      <div class="col-xxl-10 mx-auto rounded-3 overflow-hidden">
        <div class="tiny-slider arrow-hover arrow-blur arrow-round position-relative">
          <div class="tiny-slider-inner"
          data-autoplay="false"
          data-hoverpause="true"
          data-gutter="2"
          data-arrow="false"
          data-dots="true"
          data-items="1">
            <!-- Slide item -->
            <div class="card bg-dark-overlay-3 rounded-0 h-400 h-lg-500 h-xl-700 position-relative overflow-hidden" style="background-image:url(assets/images/blog/16by9/big/02.jpg); background-position: center left; background-size: cover;">
              <!-- Card Image overlay -->
              <div class="card-img-overlay rounded-0 d-flex align-items-center"> 
                <div class="container px-3 my-auto">
                  <div class="row">
                  <div class="col-lg-7">
                    <!-- Card category -->
                    <a href="index-2.html#" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Lifestyle</a>
                    <!-- Card title -->
                    <h2 class="text-white display-5"><a href="post-single-4.html" class="btn-link text-reset fw-normal">10 tell-tale signs you need to get a new startup.</a></h2>
                    <p class="text-white">No visited raising gravity outward subject my cottage Mr be. Hold do at tore in park feet near my case. </p>
                    <!-- Card info -->
                    <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                      <li class="nav-item">
                        <div class="nav-link">
                          <div class="d-flex align-items-center text-white position-relative">
                            <div class="avatar avatar-sm">
                              <img class="avatar-img rounded-circle" src="assets/images/avatar/11.jpg" alt="avatar">
                            </div>
                            <span class="ms-3">by <a href="index-2.html#" class="stretched-link text-reset btn-link">Louis</a></span>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item">Jan 01, 2022</li>
                      <li class="nav-item">5 min read</li>
                    </ul>
                  </div>
                </div>
              </div>
              </div>
            </div>
            <!-- Slide item -->
            <div class="card bg-dark-overlay-3 rounded-0 h-400 h-lg-500 h-xl-700 position-relative overflow-hidden" style="background-image:url(assets/images/blog/16by9/big/01.jpg); background-position: center left; background-size: cover;">
              <!-- Card Image overlay -->
              <div class="card-img-overlay rounded-0 d-flex align-items-center"> 
                <div class="container px-3 my-auto">
                  <div class="row">
                  <div class="col-lg-7">
                    <!-- Card category -->
                    <a href="index-2.html#" class="badge bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Travel</a>
                    <!-- Card title -->
                    <h2 class="text-white display-5"><a href="post-single-6.html" class="btn-link text-reset fw-normal">7 common mistakes everyone makes while traveling</a></h2>
                    <p class="text-white">Particular way thoroughly unaffected projection favorable Mrs can be projecting own.</p>
                    <!-- Card info -->
                    <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                      <li class="nav-item">
                        <div class="nav-link">
                          <div class="d-flex align-items-center text-white position-relative">
                            <div class="avatar avatar-sm">
                              <img class="avatar-img rounded-circle" src="assets/images/avatar/11.jpg" alt="avatar">
                            </div>
                            <span class="ms-3">by <a href="index-2.html#" class="stretched-link text-reset btn-link">Larry</a></span>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item">Feb 22, 2022</li>
                      <li class="nav-item">2 min read</li>
                    </ul>
                  </div>
                </div>
              </div>
              </div>
            </div>
            <!-- Slide item -->
            <div class="card bg-dark-overlay-3 rounded-0 h-400 h-lg-500 h-xl-700 position-relative overflow-hidden" style="background-image:url(assets/images/blog/16by9/big/03.jpg); background-position: center left; background-size: cover;">
              <!-- Card Image overlay -->
              <div class="card-img-overlay rounded-0 d-flex align-items-center"> 
                <div class="container w-100 my-auto">
                  <div class="row">
	                  <div class="col-lg-7">
	                    <!-- Card category -->
	                    <a href="index-2.html#" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Covid-19</a>
	                    <!-- Card title -->
	                    <h2 class="text-white display-5"><a href="post-single-4.html" class="btn-link text-reset fw-normal">Initial problem of startups and their solution</a></h2>
	                    <p class="text-white"> Thirty it matter enable become admire in giving. See resolved goodness felicity shy civility domestic. </p>
	                    <!-- Card info -->
	                    <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
	                      <li class="nav-item">
	                        <div class="nav-link">
	                          <div class="d-flex align-items-center text-white position-relative">
	                            <div class="avatar avatar-sm">
	                              <img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg" alt="avatar">
	                            </div>
	                            <span class="ms-3">by <a href="index-2.html#" class="stretched-link text-reset btn-link">Dennis</a></span>
	                          </div>
	                        </div>
	                      </li>
	                      <li class="nav-item">Jun 17, 2022</li>
	                      <li class="nav-item">10 min read</li>
	                    </ul>
	                  </div>
                	</div>
              	</div>
              </div>
            </div>
          </div>

          <!-- Custom thumb START -->
          <div class="col-xl-4 custom-thumb pe-5 position-absolute top-50 end-0 translate-middle-y d-none d-xxl-block" id="custom-thumb">
            <!-- Thumb 1 -->
            <div class="row align-items-center g-3 mb-4">
              <div class="col-auto">
                <div class="avatar avatar-lg">
                  <img class="avatar-img rounded-circle" src="assets/images/blog/16by9/big/02.jpg" alt="avatar">
                </div>
              </div>
              <div class="col-8">
                <h4 class="fw-normal text-truncate mb-1">Tell-tale signs you need to get a new startup</h4>
                <p class="text-truncate d-block col-11 small mb-0">Departure defective arranging rapturous did believe</p>
              </div>
            </div>
            <!-- Thumb 2 -->
            <div class="row align-items-center g-3 mb-4">
              <div class="col-auto">
                <div class="avatar avatar-lg">
                  <img class="avatar-img rounded-circle" src="assets/images/blog/16by9/big/01.jpg" alt="avatar">
                </div>
              </div>
              <div class="col-8">
                <h4 class="fw-normal text-truncate mb-1">7 common mistakes everyone makes while traveling</h4>
                <p class="text-truncate d-block col-11 small mb-0">Particular way thoroughly unaffected projection favorable </p>
              </div>
            </div>
             <!-- Thumb 3 -->
             <div class="row align-items-center g-3">
              <div class="col-auto">
                <div class="avatar avatar-lg">
                  <img class="avatar-img rounded-circle" src="assets/images/blog/16by9/big/03.jpg" alt="avatar">
                </div>
              </div>
              <div class="col-8">
                <h4 class="fw-normal text-truncate mb-1">Initial problem of startups and their solution</h4>
                <p class="text-truncate d-block col-11 small mb-0">Drawings offended yet answered Jennings perceive</p>
              </div>
            </div>
          </div>
          <!-- Custom thumb END -->
        </div>
      </div>
  	</div>
	</div>
</section>
<!-- =======================
Main hero END -->

<!-- =======================
Highlights START -->
<section class="pt-4">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Title -->
				<div class="mb-4">
					<h2 class="m-0"><i class="bi bi-megaphone"></i> Recently Added News</h2>
					<p class="m-0">Latest breaking news, pictures, videos, and special reports</p>
				</div>
				<div class="tiny-slider arrow-hover arrow-blur arrow-dark arrow-round mt-3">
					<div class="tiny-slider-inner"
						data-autoplay="true"
						data-hoverpause="true"
						data-gutter="24"
						data-arrow="true"
						data-dots="false"
						data-items-xl="4"
						data-items-lg="3" 
						data-items-md="3" 
						data-items-sm="2" 
						data-items-xs="1">

						<!-- Card item START -->
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="assets/images/blog/4by3/07.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay Top -->
									<div class="w-100 mb-auto d-flex justify-content-end">
										<div class="text-end ms-auto">
											<!-- Card format icon -->
											<div class="icon-md bg-white-soft bg-blur text-white fw-bold rounded-circle" title="8.5 rating">8.5</div>
										</div>
									</div>
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<a href="index-2.html#" class="badge bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h5 class="card-title"><a href="post-single-6.html" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h5>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
												</div>
												<span class="ms-3">by <a href="index-2.html#" class="stretched-link text-reset btn-link">Lori</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">Mar 07, 2022</li>
								</ul>
							</div>
						</div>
						<!-- Card item END -->
						<!-- Card item START -->
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="assets/images/blog/4by3/08.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<a href="index-2.html#" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h5 class="card-title"><a href="post-single-6.html" class="btn-link text-reset fw-bold">Skills that you can learn from business</a></h5>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg" alt="avatar">
												</div>
												<span class="ms-3">by <a href="post-single-6.html" class="stretched-link text-reset btn-link">Joan</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">Aug 15, 2022</li>
								</ul>
							</div>
						</div>
						<!-- Card item END -->
						<!-- Card item START -->
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="assets/images/blog/4by3/09.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<a href="index-2.html#" class="badge bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h5 class="card-title"><a href="post-single-6.html" class="btn-link text-reset fw-bold">10 tell-tale signs you need to get a new business</a></h5>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
												</div>
												<span class="ms-3">by <a href="index-2.html#" class="stretched-link text-reset btn-link">Bryan</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">Jun 01, 2022</li>
								</ul>
							</div>
						</div>
						<!-- Card item END -->
						<!-- Card item START -->
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="assets/images/blog/4by3/10.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay Top -->
									<div class="w-100 mb-auto d-flex justify-content-end">
										<div class="text-end ms-auto">
											<!-- Card format icon -->
											<div class="icon-md bg-white-soft bg-blur text-white rounded-circle" title="This post has images"><i class="fas fa-image"></i></div>
										</div>
									</div>
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<a href="index-2.html#" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Photography</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h5 class="card-title"><a href="post-single-6.html" class="btn-link text-reset fw-bold">This is why this year will be the year of startups</a></h5>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg" alt="avatar">
												</div>
												<span class="ms-3">by <a href="index-2.html#" class="stretched-link text-reset btn-link">Samuel</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">Dec 07, 2022</li>
								</ul>
							</div>
						</div>
						<!-- Card item END -->
						<!-- Card item START -->
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="assets/images/blog/4by3/11.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<a href="index-2.html#" class="badge bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h5 class="card-title"><a href="post-single-6.html" class="btn-link text-reset fw-bold">Best Pinterest Boards for learning about business</a></h5>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt="avatar">
												</div>
												<span class="ms-3">by <a href="index-2.html#" class="stretched-link text-reset btn-link">Dennis</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">Sep 07, 2022</li>
								</ul>
							</div>
						</div>
						<!-- Card item END -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="pt-0 pt-lg-5">
	<div class="container">
    <div class="row">
      <div class="col-lg-8">
        <!-- Title -->
        <h2 class="mb-4">Based On Search Trends</h2>
        <!-- Episodes Item START -->
        <div class="card border rounded-3 p-3 mb-4">
					<div class="row g-4">
            <!-- Image -->
						<div class="col-md-5">
              <div class="position-relative">
                <img class="rounded-3" src="assets/images/blog/4by3/31.jpg" alt="Card image">
              </div>
            </div>
						<div class="col-md-7">
              <div class="d-flex justify-content-between mb-2">
                <!-- Episode -->
							  <a href="podcast-single.html" class="badge bg-danger mb-2">Episode 1</a>
                <span> <i class="bi bi-clock-fill"></i> 4hr 12min</span>
              </div>
							<!-- Title -->
							<h4 class="card-title">
								<a href="podcast-single.html" class="btn-link text-reset">Everything I Know (so Far) on UI/UX Ep.01</a>
							</h4>
							<!-- Author info -->
							<div class="d-flex align-items-center position-relative">
								<div class="avatar avatar-xs me-2">
									<img class="avatar-img  rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
								</div>
									<h6 class="mb-0"><a href="index-10.html#" class="stretched-link text-reset btn-link">Billy Vasquez</a></h6>
							</div>
              <!-- Play Episode -->
              <div class="d-xl-flex align-items-center justify-content-between mt-4">
                <a class="btn btn-sm btn-primary" href="podcast-single.html">Play Episode</a>
                <ul class="list-unstyled d-flex gap-2 align-items-center">
                  <li class="h6 mb-0">Listen on:</li>
                  <li><a href="index-10.html#"> <img class="h-20" src="assets/images/icon/apple-podcasts.svg" alt=""> </a></li>
                  <li><a href="index-10.html#"> <img class="h-20" src="assets/images/icon/divider-icon.svg" alt=""> </a></li>
                  <li><a href="index-10.html#"> <img class="h-20" src="assets/images/icon/spotify.svg" alt=""> </a></li>
                  <li><a href="index-10.html#"> <img class="h-20" src="assets/images/icon/pocket.svg" alt=""> </a></li>
                  <li><a href="index-10.html#"> <img class="h-20" src="assets/images/icon/sound-cloud.svg" alt=""> </a></li>
                </ul>
              </div>
						</div>
					</div>
				</div>
        <!-- Episodes Item END -->

        <!-- Episodes Item START -->
        <div class="card border rounded-3 p-3 mb-4">
					<div class="row g-4">
            		<!-- Image -->
						<div class="col-md-5">
              <div class="position-relative">
                <img class="rounded-3" src="assets/images/blog/4by3/32.jpg" alt="Card image">
              </div>
            </div>
						<div class="col-md-7">
              <div class="d-flex justify-content-between mb-2">
                <!-- Episode -->
							  <a href="podcast-single.html" class="badge bg-danger mb-2">Episode 2</a>
                <span> <i class="bi bi-clock-fill"></i> 5hr 05min</span>
              </div>
							<!-- Title -->
							<h4 class="card-title">
								<a href="podcast-single.html" class="btn-link text-reset">Design Problems Animation Can Answer Ep.02</a>
							</h4>
							<!-- Author info -->
							<div class="d-flex align-items-center position-relative">
								<div class="avatar avatar-xs me-2">
									<img class="avatar-img  rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
								</div>
									<h6 class="mb-0"><a href="index-10.html#" class="stretched-link text-reset btn-link">Bryan Knight</a></h6>
							</div>
              <!-- Play Episode -->
              <div class="d-xl-flex align-items-center justify-content-between mt-4">
                <a class="btn btn-sm btn-primary" href="podcast-single.html">Play Episode</a>
                <ul class="list-unstyled d-flex gap-2 align-items-center">
                  <li class="h6 mb-0">Listen on:</li>
                  <li><a href="index-10.html#"> <img class="h-20" src="assets/images/icon/apple-podcasts.svg" alt=""> </a></li>
                  <li><a href="index-10.html#"> <img class="h-20" src="assets/images/icon/spotify.svg" alt=""> </a></li>
                  <li><a href="index-10.html#"> <img class="h-20" src="assets/images/icon/sound-cloud.svg" alt=""> </a></li>
                </ul>
              </div>
						</div>
					</div>
				</div>
        <!-- Episodes Item END -->

        <!-- Episodes Item START -->
        <div class="card border rounded-3 p-3 mb-4">
					<div class="row g-4">
            <!-- Image -->
						<div class="col-md-5">
              <div class="position-relative">
                <img class="rounded-3" src="assets/images/blog/4by3/33.jpg" alt="Card image">
              </div>
            </div>
						<div class="col-md-7">
              <div class="d-flex justify-content-between mb-2">
                <!-- Episode -->
							  <a href="podcast-single.html" class="badge bg-danger mb-2">Episode 3</a>
                <span> <i class="bi bi-clock-fill"></i> 2hr 22min</span>
              </div>
							<!-- Title -->
							<h4 class="card-title">
								<a href="podcast-single.html" class="btn-link text-reset">Your Only Challenge Is to Focus Ep.03</a>
							</h4>
							<!-- Author info -->
							<div class="d-flex align-items-center position-relative">
								<div class="avatar avatar-xs me-2">
									<img class="avatar-img  rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
								</div>
									<h6 class="mb-0"><a href="index-10.html#" class="stretched-link text-reset btn-link">Amanda Reed</a></h6>
							</div>
              <!-- Play Episode -->
              <div class="d-xl-flex align-items-center justify-content-between mt-4">
                <a class="btn btn-sm btn-primary" href="podcast-single.html">Play Episode</a>
                <ul class="list-unstyled d-flex gap-2 align-items-center">
                  <li class="h6 mb-0">Listen on:</li>
                  <li><a href="index-10.html#"> <img class="h-20" src="assets/images/icon/apple-podcasts.svg" alt=""> </a></li>
                  <li><a href="index-10.html#"> <img class="h-20" src="assets/images/icon/divider-icon.svg" alt=""> </a></li>
                  <li><a href="index-10.html#"> <img class="h-20" src="assets/images/icon/spotify.svg" alt=""> </a></li>
                  <li><a href="index-10.html#"> <img class="h-20" src="assets/images/icon/google-podcasts.svg" alt=""> </a></li>
                  <li><a href="index-10.html#"> <img class="h-20" src="assets/images/icon/sound-cloud.svg" alt=""> </a></li>
                </ul>
              </div>
						</div>
					</div>
				</div>
      </div>
      <!-- Episodes Item END -->

      <!-- Sidebar START -->
      <div class="col-lg-4">
        <!-- Card START -->

				<div>
					<!-- Social links -->
					<div class="row g-2">
						<a href="index-3.html#" class="d-flex justify-content-between align-items-center bg-facebook text-white-force rounded p-2 position-relative">
							<i class="fab fa-facebook-square fs-3"></i>
							<div class="d-flex">
								<h6 class="me-1 mb-0">1.5K</h6>
								<small class="small">Fans</small>
							</div>
						</a>
						<a href="index-3.html#" class="d-flex justify-content-between align-items-center bg-instagram-gradient text-white-force rounded p-2 position-relative">
							<i class="fab fa-instagram fs-3"></i>
							<div class="d-flex">
								<h6 class="me-1 mb-0">1.8M</h6>
								<small class="small">Followers</small>
							</div>
						</a>
						<a href="index-3.html#" class="d-flex justify-content-between align-items-center bg-youtube text-white-force rounded p-2 position-relative">
							<i class="fab fa-youtube-square fs-3"></i>
							<div class="d-flex">
								<h6 class="me-1 mb-0">22K</h6>
								<small class="small">Subscribers</small>
							</div>
						</a>
					</div>
					<!-- Categories -->
					<div class="row g-2 mt-5">
						<h5>Categories</h5>
						<div class="d-flex justify-content-between align-items-center bg-warning-soft rounded p-2 position-relative">
							<h6 class="m-0 text-warning">Photography</h6>
							<a href="index-3.html#" class="badge bg-warning text-dark stretched-link">09</a>
						</div>
						<div class="d-flex justify-content-between align-items-center bg-info-soft rounded p-2 position-relative">
							<h6 class="m-0 text-info">Travel</h6>
							<a href="index-3.html#" class="badge bg-info stretched-link">25</a>
						</div>
						<div class="d-flex justify-content-between align-items-center bg-danger-soft rounded p-2 position-relative">
							<h6 class="m-0 text-danger">Photography</h6>
							<a href="index-3.html#" class="badge bg-danger stretched-link">75</a>
						</div>
						<div class="d-flex justify-content-between align-items-center bg-primary-soft rounded p-2 position-relative">
							<h6 class="m-0 text-primary">Covid-19</h6>
							<a href="index-3.html#" class="badge bg-primary stretched-link">19</a>
						</div>
						<div class="d-flex justify-content-between align-items-center bg-success-soft rounded p-2 position-relative">
							<h6 class="m-0 text-success">Business</h6>
							<a href="index-3.html#" class="badge bg-success stretched-link">35</a>
						</div>
					</div>
					<!-- Most read -->
					<div>
						<h5 class="mt-5 mb-3">Most read</h5>
						<div class="d-flex position-relative mb-3">
							<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">01</span>
							<h6><a href="index-3.html#" class="stretched-link text-reset btn-link">Bad habits that people in the business industry need to quit</a></h6>
						</div>
						<div class="d-flex position-relative mb-3">
							<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">02</span>
							<h6><a href="index-3.html#" class="stretched-link text-reset btn-link">How to worst business fails of all time could have been prevented</a></h6>
						</div>
						<div class="d-flex position-relative mb-3">
							<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">03</span>
							<h6><a href="index-3.html#" class="stretched-link text-reset btn-link">How 10 worst business fails of all time could have been prevented</a></h6>
						</div>
						<div class="d-flex position-relative mb-3">
							<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">04</span>
							<h6><a href="index-3.html#" class="stretched-link text-reset btn-link">10 facts about business that will instantly put you in a good mood</a></h6>
						</div>
						<div class="d-flex position-relative mb-3">
							<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">05</span>
							<h6><a href="index-3.html#" class="stretched-link text-reset btn-link">How did we get here? The history of the business told through tweets</a></h6>
						</div>
						<div class="d-flex position-relative mb-3">
							<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">06</span>
							<h6><a href="index-3.html#" class="stretched-link text-reset btn-link">Ten tips about startups that you can't learn from books</a></h6>
						</div>
					</div>

				</div>

        <!-- Card END -->
        <!-- Podcast social END -->
      </div>
      <!-- Sidebar END -->
    </div>
	</div>
</section>

<section class="pt-4">
	<div class="container">
		<div class="row">
			<!-- Title -->
			<div class="col-md-12">
				<div class="mb-4 d-md-flex justify-content-between align-items-center">
					<h2 class="m-0"><i class="bi bi-megaphone me-2"></i> Listed Property</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<!-- Card item START -->
				<div class="card mb-3 mb-sm-4">
					<div class="row g-3">
						<div class="col-4">
							<img class="rounded-3" src="assets/images/blog/4by3/01.jpg" alt="">
						</div>
						<div class="col-8">
							<a href="index-2.html#" class="badge bg-danger-soft text-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Lifestyle</a>
							<h4><a href="post-single-5.html" class="btn-link stretched-link text-reset fw-bold">The pros and cons of business agency</a></h4>
							<!-- Card info -->
							<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
								<li class="nav-item">
									<div class="nav-link">
										<div class="d-flex align-items-center position-relative">
											<div class="avatar avatar-xs">
												<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
											</div>
											<span class="ms-3">by <a href="index-2.html#" class="stretched-link text-reset btn-link">Samuel</a></span>
										</div>
									</div>
								</li>
								<li class="nav-item">Jan 22, 2022</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Card item END -->
				<!-- Card item START -->
				<div class="card mb-3 mb-sm-4">
					<div class="row g-3">
						<div class="col-4">
							<img class="rounded-3" src="assets/images/blog/4by3/02.jpg" alt="">
						</div>
						<div class="col-8">
							<a href="index-2.html#" class="badge bg-info-soft text-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
							<h4><a href="post-single-5.html" class="btn-link stretched-link text-reset fw-bold">5 reasons why you shouldn't startup</a></h4>
							<!-- Card info -->
							<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
								<li class="nav-item">
									<div class="nav-link">
										<div class="d-flex align-items-center position-relative">
											<div class="avatar avatar-xs">
												<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
											</div>
											<span class="ms-3">by <a href="index-2.html#" class="stretched-link text-reset btn-link">Dennis</a></span>
										</div>
									</div>
								</li>
								<li class="nav-item">Mar 07, 2022</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Card item END -->
				<!-- Card item START -->
				<div class="card mb-3 mb-sm-4">
					<div class="row g-3">
						<div class="col-4">
							<img class="rounded-3" src="assets/images/blog/4by3/03.jpg" alt="">
						</div>
						<div class="col-8">
							<a href="index-2.html#" class="badge bg-success-soft text-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Business</a>
							<h4><a href="post-single-5.html" class="btn-link stretched-link text-reset fw-bold">Five unbelievable facts about money.</a></h4>
							<!-- Card info -->
							<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
								<li class="nav-item">
									<div class="nav-link">
										<div class="d-flex align-items-center position-relative">
											<div class="avatar avatar-xs">
												<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
											</div>
											<span class="ms-3">by <a href="index-2.html#" class="stretched-link text-reset btn-link">Bryan</a></span>
										</div>
									</div>
								</li>
								<li class="nav-item">Jun 17, 2022</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Card item END -->
			</div>
			<div class="col-lg-6">
				<!-- Card item START -->
				<div class="card mb-3 mb-sm-4">
					<div class="row g-3">
						<div class="col-4">
							<img class="rounded-3" src="assets/images/blog/4by3/04.jpg" alt="">
						</div>
						<div class="col-8">
							<a href="index-2.html#" class="badge bg-warning-soft text-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
							<h4><a href="post-single-2.html" class="btn-link stretched-link text-reset fw-bold">Around the web: 20 fabulous infographics about business</a></h4>
							<!-- Card info -->
							<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
								<li class="nav-item">
									<div class="nav-link">
										<div class="d-flex align-items-center position-relative">
											<div class="avatar avatar-xs">
												<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
											</div>
											<span class="ms-3">by <a href="index-2.html#" class="stretched-link text-reset btn-link">Jacqueline</a></span>
										</div>
									</div>
								</li>
								<li class="nav-item">Oct 11, 2022</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Card item END -->
				<!-- Card item START -->
				<div class="card mb-3 mb-sm-4">
					<div class="row g-3">
						<div class="col-4">
							<img class="rounded-3" src="assets/images/blog/4by3/05.jpg" alt="">
						</div>
						<div class="col-8">
							<a href="index-2.html#" class="badge bg-primary-soft text-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
							<h4><a href="post-single-6.html" class="btn-link stretched-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h4>
							<!-- Card info -->
							<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
								<li class="nav-item">
									<div class="nav-link">
										<div class="d-flex align-items-center position-relative">
											<div class="avatar avatar-xs">
												<div class="avatar-img rounded-circle bg-danger">
													<span class="text-white position-absolute top-50 start-50 translate-middle fw-bold small">W</span>
												</div>
											</div>
											<span class="ms-3">by <a href="index-2.html#" class="stretched-link text-reset btn-link">Samuel</a></span>
										</div>
									</div>
								</li>
								<li class="nav-item">Jul 22, 2022</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Card item END -->
				<!-- Card item START -->
				<div class="card mb-3 mb-sm-4">
					<div class="row g-3">
						<div class="col-4">
							<img class="rounded-3" src="assets/images/blog/4by3/06.jpg" alt="">
						</div>
						<div class="col-8">
							<a href="index-2.html#" class="badge bg-danger-soft text-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Photography</a>
							<h4><a href="post-single-5.html" class="btn-link stretched-link text-reset fw-bold">5 investment doubts you should clarify</a></h4>
							<!-- Card info -->
							<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
								<li class="nav-item">
									<div class="nav-link">
										<div class="d-flex align-items-center position-relative">
											<div class="avatar avatar-xs">
												<img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
											</div>
											<span class="ms-3">by <a href="index-2.html#" class="stretched-link text-reset btn-link">Judy</a></span>
										</div>
									</div>
								</li>
								<li class="nav-item">Sep 30, 2022</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Card item END -->
				<div class="d-grid gap-2 d-md-flex justify-content-md-end">
					<button class="btn btn-primary me-md-2" type="button">View More</button>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- =======================
Trending END -->

<!-- =======================
Main hero START -->

<!-- =======================


<!-- Divider -->
<div class="container"><div class="border-bottom border-primary border-2 opacity-1"></div></div>
</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="bg-dark pt-5">
	<div class="container">
		<!-- About and Newsletter START -->
		<div class="row pt-3 pb-4">
			<div class="col-md-3">
				<img src="assets/images/logo-footer.svg" alt="footer logo">
			</div>
			<div class="col-md-5">
				<p class="text-muted">The next-generation blog, news, and magazine theme for you to start sharing your stories today! This Bootstrap 5 based theme is ideal for all types of sites that deliver the news.</p>
			</div>
			<div class="col-md-4">
				<!-- Form -->
				<form class="row row-cols-lg-auto g-2 align-items-center justify-content-end">
					<div class="col-12">
				    <input type="email" class="form-control" placeholder="Enter your email address">
				  </div>
				  <div class="col-12">
				    <button type="submit" class="btn btn-primary m-0">Subscribe</button>
				  </div>
				  <div class="form-text mt-2">By subscribing you agree to our 
				  	<a href="index.html#" class="text-decoration-underline text-reset">Privacy Policy</a>
				  </div>
				</form>
			</div>
		</div>
		<!-- About and Newsletter END -->

		<!-- Divider -->
		<hr>

		<!-- Widgets START -->
		<div class="row pt-5">
			<!-- Footer Widget -->
			<div class="col-md-6 col-lg-3 mb-4">
				<h5 class="mb-4 text-white">Recent post</h5>
				<!-- Item -->
				<div class="mb-4 position-relative">
					<div><a href="index.html#" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Business</a></div>
					<a href="post-single-3.html" class="btn-link text-white fw-normal">Up-coming business bloggers, you need to watch</a>
					<ul class="nav nav-divider align-items-center small mt-2 text-muted">
					  <li class="nav-item position-relative">
					    <div class="nav-link">by <a href="index.html#" class="stretched-link text-reset btn-link">Dennis</a>
							</div>
					  </li>
					  <li class="nav-item">Apr 06, 2022</li>
					</ul>
				</div>
				<!-- Item -->
				<div class="mb-4 position-relative">
					<div><a href="index.html#" class="badge bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Marketing</a></div>
					<a href="post-single-3.html" class="btn-link text-white fw-normal">How did we get here? The history of the business told through tweets</a>
					<ul class="nav nav-divider align-items-center small mt-2 text-muted">
					  <li class="nav-item position-relative">
					    <div class="nav-link">by <a href="index.html#" class="stretched-link text-reset btn-link">Larry</a>
							</div>
					  </li>
					  <li class="nav-item">May 29, 2022</li>
					</ul>
				</div>
			</div>

			<!-- Footer Widget -->
			<div class="col-md-6 col-lg-3 mb-4">
				<h5 class="mb-4 text-white">Navigation</h5>
				<div class="row">
					<div class="col-6">
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link pt-0" href="index.html#">Features</a></li>
							<li class="nav-item"><a class="nav-link" href="index.html#">Style Guide</a></li>
							<li class="nav-item"><a class="nav-link" href="index.html#">Contact us</a></li>
							<li class="nav-item"><a class="nav-link" href="index.html#">Get Theme</a></li>
							<li class="nav-item"><a class="nav-link" href="index.html#">Support</a></li>
							<li class="nav-item"><a class="nav-link" href="index.html#">Privacy Policy</a></li>
							<li class="nav-item"><a class="nav-link" href="index.html#">Newsletter</a></li>
						</ul>
					</div>
 					<div class="col-6">
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link pt-0" href="index.html#">News</a></li>
							<li class="nav-item"><a class="nav-link" href="index.html#">Career <span class="badge bg-danger ms-2">2 Job</span></a></li>
							<li class="nav-item"><a class="nav-link" href="index.html#">Technology</a></li>
							<li class="nav-item"><a class="nav-link" href="index.html#">Startups</a></li>
							<li class="nav-item"><a class="nav-link" href="index.html#">Gadgets</a></li>
							<li class="nav-item"><a class="nav-link" href="index.html#">Inspiration</a></li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Footer Widget -->
			<div class="col-sm-6 col-lg-3 mb-4">
				<h5 class="mb-4 text-white">Get Regular Updates</h5>
				<ul class="nav flex-column text-primary-hover">
					<li class="nav-item"><a class="nav-link pt-0" href="index.html#"><i class="fab fa-whatsapp fa-fw me-2"></i>WhatsApp</a></li>
					<li class="nav-item"><a class="nav-link" href="index.html#"><i class="fab fa-youtube fa-fw me-2"></i>YouTube</a></li>
					<li class="nav-item"><a class="nav-link" href="index.html#"><i class="far fa-bell fa-fw me-2"></i>Website Notifications</a></li>
					<li class="nav-item"><a class="nav-link" href="index.html#"><i class="far fa-envelope fa-fw me-2"></i>Newsletters</a></li>
					<li class="nav-item"><a class="nav-link" href="index.html#"><i class="fas fa-headphones-alt fa-fw me-2"></i>Podcasts</a></li>
				</ul>
			</div>

			<!-- Footer Widget -->
			<div class="col-sm-6 col-lg-3 mb-4">
				<h5 class="mb-4 text-white">Our mobile App</h5>
				<p class="text-muted">Download our App and get the latest Breaking News Alerts and latest headlines and daily articles near you.</p>
				<div class="row g-2">
					<div class="col">
						<a href="index.html#"><img class="w-100" src="assets/images/app-store.svg" alt="app-store"></a>
					</div>
					<div class="col">
						<a href="index.html#"><img class="w-100" src="assets/images/google-play.svg" alt="google-play"></a>
					</div>
				</div>
			</div>
		</div>
		<!-- Widgets END -->

		<!-- Hot topics START -->
		<div class="row">
			<h5 class="mb-2 text-white">Hot topics</h5>
			<ul class="list-inline text-primary-hover lh-lg">
				<li class="list-inline-item"><a href="index.html#">Covid-19</a></li>
				<li class="list-inline-item"><a href="index.html#">Politics</a></li>
				<li class="list-inline-item"><a href="index.html#">Entertainment</a></li>
				<li class="list-inline-item"><a href="index.html#">Media</a></li>
				<li class="list-inline-item"><a href="index.html#">Royalist</a></li>
				<li class="list-inline-item"><a href="index.html#">World</a></li>
				<li class="list-inline-item"><a href="index.html#">Half Full</a></li>
				<li class="list-inline-item"><a href="index.html#">Scouted</a></li>
				<li class="list-inline-item"><a href="index.html#">Travel</a></li>
				<li class="list-inline-item"><a href="index.html#">Beast Inside</a></li>
				<li class="list-inline-item"><a href="index.html#">Crossword</a></li>
				<li class="list-inline-item"><a href="index.html#">Newsletters</a></li>
				<li class="list-inline-item"><a href="index.html#">Podcasts</a></li>
				<li class="list-inline-item"><a href="index.html#">Auction 2022</a></li>
				<li class="list-inline-item"><a href="index.html#">Protests</a></li>
				<li class="list-inline-item"><a href="index.html#">NewsCyber</a></li>
				<li class="list-inline-item"><a href="index.html#">Education</a></li>
				<li class="list-inline-item"><a href="index.html#">Sports</a></li>
				<li class="list-inline-item"><a href="index.html#">Tech And Auto</a></li>
				<li class="list-inline-item"><a href="index.html#">Opinion</a></li>
				<li class="list-inline-item"><a href="index.html#">Share Market</a></li>
			</ul>
		</div>
		<!-- Hot topics END -->
	</div>

	<!-- Footer copyright START -->
	<div class="bg-dark-overlay-3 mt-5">
		<div class="container">
			<div class="row align-items-center justify-content-md-between py-4">
				<div class="col-md-6">
					<!-- Copyright -->
					<div class="text-center text-md-start text-primary-hover text-muted">©2022 <a href="https://www.webestica.com/" class="text-reset btn-link" target="_blank">Webestica</a>. All rights reserved
					</div>
				</div>
				<div class="col-md-6 d-sm-flex align-items-center justify-content-center justify-content-md-end">
					<!-- Language switcher -->
					<div class="dropup me-0 me-sm-3 mt-3 mt-md-0 text-center text-sm-end">
					  <a class="dropdown-toggle text-primary-hover" href="index.html#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
					    English Edition
					  </a>
					  <ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
					    <li><a class="dropdown-item" href="index.html#">English</a></li>
					    <li><a class="dropdown-item" href="index.html#">German </a></li>
					    <li><a class="dropdown-item" href="index.html#">French</a></li>
					  </ul>
					</div>
					<!-- Links -->
				  <ul class="nav text-primary-hover text-center text-sm-end justify-content-center justify-content-center mt-3 mt-md-0">
			      <li class="nav-item"><a class="nav-link" href="index.html#">Terms</a></li>
			      <li class="nav-item"><a class="nav-link" href="index.html#">Privacy</a></li>
			      <li class="nav-item"><a class="nav-link pe-0" href="index.html#">Cookies</a></li>
				  </ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer copyright END -->
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
<script src="assets/vendor/sticky-js/sticky.min.js"></script>
<script src="assets/vendor/plyr/plyr.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>
</body>
</html>