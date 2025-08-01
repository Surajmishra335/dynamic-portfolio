<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="{{asset('user/assets/plugins/flickity/flickity.min.css')}}">

	<link id="theme-style" rel="stylesheet" href="{{asset('user/assets/css/theme-1.css')}}">
	<link id="theme-style" rel="stylesheet" href="{{asset('user/assets/css/theme-1.css')}}">
	<link id="theme-style" rel="stylesheet" href="{{asset('user/assets/css/pdfstyle.css')}}">
	
	<style>
		.head-img {
			width: 20%;
		}

		.head-intro {
			width: 50%;

		}

		.head-social-links {
			width: 10%;
			padding-right: -600px;

		}

		.head {
			background: #434E5E;
			color: rgba(255, 255, 255, 0.9);
			height: 250px;
			width: 100%;
		}

		img {
			height: 250px;
			width: auto;
		}
		a{
			color: rgba(255, 255, 255, 0.9);
			font-size: 18px !important;
		}
		hr {
			height: 1px;
			/* color: #434E5E; */
			background: #434E5E;
		}

		p {
			font-size: 22px;
		}

		.workskills {
			width: 100%;
		}

		.work-experience {
			width: 100%;

		}

		.skills {
			width: 100%;
			float: right;
			/* margin-top: -30px; */
			vertical-align: top;
		}

		.work-exp-single {
			width: 100%;
		}

		.position {
			width: 60%;
		}

		.company-name {
			width: 40%;
			text-align: right;
			padding-right: 20px;
		}

		.p1 {
			padding: 10px;
		}

		.pr1 {
			padding-right: 10px;
		}

		.font-20{
			font-size: 15px;
		}
		.font-30{
			font-size: 20px;
			font-weight: 600;
		}
		
		.join-date{
			padding-top: -60px;
		}

		.fw-bold {
			font-weight: 700;
			color: #434e5e;
		}
	</style>

</head>

<body style="background: #F7F8FA; margin: 0; padding: 0;">
	@yield('content')
	
</body>

</html>