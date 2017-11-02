<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>        
    <title>@yield('title') - {{ config('app.name') }}</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
	<!-- Admin Panel Main Style -->
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">

</head>
<body>
    
	<div class="admin-panel-wrapper">
		
	</div>

	<!-- Admin Panel Default Scripts -->
    <script type="text/javascript" src="{{ asset('js/admin/default-scripts.js') }}"></script>
	
</body>
</html>