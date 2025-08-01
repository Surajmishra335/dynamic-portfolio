<!DOCTYPE html>
<html lang="en">

<head>
	<title>Suraj</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Responsive Portfolio Template">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Font -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<!-- FontAwesome JS -->
	<script defer src="{{asset('user/assets/fontawesome/js/all.js')}}"></script>

	<!-- Plugins CSS -->
	<link rel="stylesheet" href="{{asset('user/assets/plugins/flickity/flickity.min.css')}}">


	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="{{asset('user/assets/css/theme-1.css')}}">


	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-24707561-43');
	</script>


</head>

<body>

	<header class="header">

		<div class="top-bar theme-bg-primary-darken">

			<div class="container-fluid">
			
				<nav class="navbar navbar-expand-lg navbar-dark position-relative">
					<ul class="social-list list-inline mb-0">
						
						@if(empty(!$social->angellist))
						<li class="list-inline-item"><a class="text-white" href="{{$social->angellist}}"><i class="fab fa-angellist fa-fw"></i></a></li>
						@endif

						@if(!empty($social->linkedin))
						<li class="list-inline-item"><a class="text-white" href="{{$social->linkedin}}"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
						@endif

						@if(!empty($social->github))
						<li class="list-inline-item"><a class="text-white" href="{{$social->github}}"><i class="fab fa-github-alt fa-fw"></i></a></li>
						@endif

						@if(!empty($social->stackoverflow))
						<li class="list-inline-item"><a class="text-white" href="{{$social->stackoverflow}}"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
						@endif

					</ul>
					<!--//social-list-->


					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse text-uppercase" id="navigation">
						<ul class="navbar-nav ml-lg-auto">
							<li class="nav-item active mr-lg-3">
								<a class="nav-link" href="{{route('about')}}">About <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item mr-lg-3">
								<a class="nav-link" href="{{route('front.project')}}">Projects</a>
							</li>
							<li class="nav-item mr-lg-3">
								<a class="nav-link" href="talks.html">Talks</a>
							</li>
							<li class="nav-item mr-lg-3">
								<a class="nav-link" href="blog.html">Blog</a>
							</li>
							<li class="nav-item mr-lg-3">
								<a class="nav-link" href="{{route('resume')}}">Resume</a>
							</li>
							<li class="nav-item mr-lg-3">
								<a class="nav-link" href="contact.html">Contact</a>
							</li>
							<li class="nav-item dropdown mr-0">
								<a class="nav-link dropdown-toggle" href="#" id="navigationLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Pages
								</a>
								<div class="dropdown-menu dropdown-menu-right text-capitalize shadow-lg" aria-labelledby="navigationLink">
									<a class="dropdown-item" href="project.html">Project Case Study (1 Column)</a>
									<a class="dropdown-item" href="project-alt.html">Project Case Study (2 Columns)</a>
									<a class="dropdown-item" href="blog-post.html">Blog Post</a>
								</div>
							</li>

						</ul>
						<span id="slide-line"></span>
					</div>



				</nav>

			</div>
			<!--//container-->

		</div>
		<!--//top-bar-->

		@yield('header-intro')
		<!--//header-intro-->

	</header>
	<!--//header-->

	@yield('content')

	<section class="section-cta py-5 bg-primary text-white">
		<div class="container">
			<div class="text-center">
				<img class="profile-small d-inline-block mx-auto rounded-circle mb-2" src="{{asset('user/assets/images/profile.jpg')}}" alt="">
			</div>
			<h3 class="section-title font-weight-bold text-center mb-2">Interested in hiring me for your project?</h3>
			<div class="section-intro mx-auto text-center mb-3">
				Looking for an experienced full-stack developer to build your web app or ship your software product? To start an initial chat, just drop me an email at <a class="link-on-bg" href="#">steve.doe@youremail.com</a> or use the <a class="link-on-bg" href="contact.html">form on the contact page</a>.
			</div>
			<div class="text-center">
				<a class="theme-btn-on-bg btn" href="contact.html">Let's Talk</a>
			</div>
		</div>
		<!--//container-->
	</section>
	<footer class="footer text-light text-center py-2">
		<small class="copyright">Template Copyright &copy; <a class="text-light" href="https://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a></small>
	</footer>



	<!-- Javascript -->
	<script type="text/javascript" src="{{asset('user/assets/plugins/jquery-3.4.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('user/assets/plugins/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('user/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('user/assets/plugins/back-to-top.js')}}"></script>

	<!-- Page Specific JS -->
	<script type="text/javascript" src="{{asset('user/assets/plugins/flickity/flickity.pkgd.min.js')}}"></script>
	@yield('script')
	<!-- Custom JS -->
	<script type="text/javascript" src="{{asset('user/assets/js/main.js')}}"></script>
	<script type="text/javascript" src="{{asset('user/assets/js/flickity-custom.js')}}"></script>

	<!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
	<script type="text/javascript" src="{{asset('user/assets/js/demo/style-switcher.js')}}"></script>


</body>

</html>