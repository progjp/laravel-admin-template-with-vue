@extends('admin.layouts.master')

@section('title', 'All Posts')

@section('content')

	<div class="page-headings">
		<div class="page-heading-block">
	        <h1 class="page-heading-title">Posts</h1>
	        <h3 class="page-heading-subtitle">Exclusive responsive dashboard</h3>
	    </div>
	    <ul class="breadcrumb-block">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Default</li>
        </ul>
    </div>

	<div class="page-main-content">
		
		<posts-table></posts-table>

	</div> <!-- /.page-main-content -->

@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/admin/table.js') }}"></script>
@endpush