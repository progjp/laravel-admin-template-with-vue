<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>        
    <title>@yield('title') - {{ config('app.name') }}</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Open Sans Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> 

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Admin Panel Main Style -->
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">

</head>
<body>
    
	<div class="admin-panel-wrapper">
		<div class="admin-panel-left-menu">
			<div class="admin-panel-name">
		        <a href="/admin" class="logo">Blog Admin</a>
		    </div>
		</div>
		<div class="admin-panel-body-wrapper">
			<nav class="admin-panel-top-menu navbar">
				<ul class="top-menu-left-list navbar-start">
			        <li><a href="#" class="page-navigation-toggle"><span class="fa fa-bars"></span></a></li>
			        <li class="adminhead-visitsite"><a href="/">Visit site</a></li>
			    </ul>

			    <div class="top-menu-profile-info navbar-end">
			    	<div class="mini-profile level-right">
			    		<div class="level-item">
			    			<img src="/images/admin/user-small.jpg" alt="User" class="user-small-img">
			    		</div>
			    		<div class="mini-profile-text level-item">
			    			<div>
				    			<a href="#">Howdy, John Doe</a>
				    			<span>Administrator</span>
			    			</div>
			    		</div>
			    		<div class="mini-profile-menu level-item">
			    			<a href="#" class="dropdown-menu-trigger"><i class="fa fa-cog"></i></a>
			    			<ul class="dropdown-menu">
	                            <li class="dropdown-header">Profile Menu</li>
	                            <li><a href="#">Messages</a></li>                                    
	                            <li><a href="#">Statistics</a></li>
	                            <li><a href="#">Changelog</a></li>
	                            <li><a href="#">Settings</a></li>
	                            <li class="divider"></li>
	                            <li><a href="#">Logout</a></li>
	                        </ul>
			    		</div>
			    	</div>
			    </div>
			</nav>

			<div class="admin-panel-page-content">
				
			</div>
		</div>
	</div>

	<!-- Admin Panel Default Scripts -->
    <script type="text/javascript" src="{{ asset('js/admin/default-scripts.js') }}"></script>
	
</body>
</html>