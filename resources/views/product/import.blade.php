@extends('layouts.admin')

@section('Admin shop', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
<div id="page-wrapper">
	<div class="top10">
		<nav class="navbar navbar-default" >
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Import - Export in Excel and CSV Laravel 5</a>
				</div>
			</div>
		</nav>
		<div class="container">
			<a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-success">Download Excel xls</button></a>
			<a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>
			<a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success">Download CSV</button></a>
			@if(session()->has('messageSuccess'))
			    <div class="alert alert-success">
			        {{ session()->get('messageSuccess') }}
			    </div>
			@endif
			@if(session()->has('messageError'))
	            <div class="alert alert-danger">
	                {{ session()->get('messageError') }}
	            </div>
	        @endif

			<form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ route('event.import') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
				<input type="file" name="import_file" />
				<button class="btn btn-primary top10">Import File</button>
				{!! csrf_field() !!}
			</form>

		</div>
	</div>
</div>
@endsection