@extends('admin.layouts.master')

@section('title', 'Admin Home')

@section('content')

	<div class="page-headings">
		<div class="page-heading-block">
	        <h1 class="page-heading-title">Dashboard</h1>
	        <h3 class="page-heading-subtitle">Exclusive responsive dashboard</h3>
	    </div>
	    <ul class="breadcrumb-block">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Default</li>
        </ul>
    </div>

	<div class="page-main-content form-page-content">

		<admin-form-fields></admin-form-fields>
		
	</div> <!-- /.page-main-content -->

@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/admin/form.js') }}"></script>
@endpush