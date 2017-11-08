@extends('admin.layouts.master')

@section('title', 'Admin Home')

@section('content')

	<div class="page-headings">
		<div class="page-heading-block">
	        <h1 class="page-heading-title">Dashboard</h1>
	        <h3 class="page-heading-subtitle">Exclusive responsive dashboard</h3>
	    </div>
    </div>

	<div class="page-main-content">
		<div class="admin-home-top">
			<admin-home-top></admin-home-top>
		</div> <!-- /.admin-home-top -->
		
		<div class="admin-home-bottom">
			<admin-home-bottom></admin-home-bottom>
		</div> <!-- /.admin-home-bottom -->
		
	</div> <!-- /.page-main-content -->

@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/admin/home.js') }}"></script>
@endpush