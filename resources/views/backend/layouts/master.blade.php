<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>@yield('title') - {{ config('app.name') }}</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />


		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('backend/assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />

		<!-- page specific plugin styles -->

		@yield('css')

		<!-- text fonts -->
		<link rel="stylesheet" href="{{ asset('backend/assets/css/fonts.googleapis.com.css') }}" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{ asset('backend/assets/css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />

		<link rel="stylesheet" href="{{ asset('backend/assets/css/ace-skins.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('backend/assets/css/ace-rtl.min.css') }}" />
		

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">	

		
		<script src="{{ asset('backend/assets/js/ace-extra.min.js') }}"></script>

	</head>

	<body class="no-skin">

		@include('backend.partial._header')

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			@include('backend.partial._sidebar')

			<div class="main-content">
				<div class="main-content-inner">
					
					@include('backend.partial._breadcrumb')

					<div class="page-content">
						

						@include('backend.partial._setting')
						@include('backend.partial._pageHeader')

						@yield('content')


					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			@include('backend.partial._footer')

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->


		<script src="{{ asset('backend/assets/js/jquery-2.1.4.min.js') }}"></script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='{{ asset('backend/assets/js/jquery.mobile.custom.min.js') }}'>"+"<"+"/script>");
		</script>
		<script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

		@yield('js')

		<script type="text/javascript">

			   swal.fire({
		            title: "Success!",
		            text: "Your Massage is show",
		            type: "success",
		            timer: 3000
		        });


			   // swal.fire({
		    //         title: "Error!",
		    //         text: "Your Error is show",
		    //         type: "error",
		    //         timer: 3000
		    //     });


		</script>

	</body>
</html>
