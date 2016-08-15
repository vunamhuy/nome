<html lang="en">
<head>
	<title>Import</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
</head>
<body>
	<nav class="navbar navbar-default">
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
			<button class="btn btn-primary">Import File</button>
			{!! csrf_field() !!}
		</form>
		
	</div>
</body>
</html>