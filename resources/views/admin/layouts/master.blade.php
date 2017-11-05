<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>        
    <title>@yield('title') - {{ config('app.name') }}</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Open Sans Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> 

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Admin Panel Main Style -->
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">

</head>
<body>
    
	<div id="admin-app">
		<div class="admin-panel-wrapper" v-bind:class="{ 'left-menu-close': isLeftMenuClose }">
			
			<!-- Left menu -->
			<admin-left-menu></admin-left-menu>

			<div class="admin-panel-body-wrapper">

				<!-- Top menu -->
				<admin-top-menu></admin-top-menu>

				<!-- Page content -->
				<div class="admin-panel-page-content">
					
				</div>
			</div>
		</div>
	</div>

	<!-- Admin Panel Scripts -->
	@stack('scripts')
    	
</body>
</html>