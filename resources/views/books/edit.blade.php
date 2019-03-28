@extends('layout')

@section('content')
<style>
	.uper {
		margin-top: 40px;
	}
</style>
<div class="card uper">
	<div class="card-header">
		Edit Book
	</div>
	<div class="card-body">
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div><br>
		@endif
		<form method="post" action="{{ route('books.update', $book->id) }}">
			<div class="form-group">
				@csrf
				@method('PATCH')
				<label for="name">Name:</label>
				<input type="text" class="form-control" name="name" value="{{$book->name}}">
			</div>
			<div class="form-group">
				<label for="isbn">ISBN:</label>
				<input type="text" class="form-control" name="isbn" value="{{$book->isbn}}">
			</div>
			<div class="form-group">
				<label for="price">Price:</label>
				<input type="text" class="form-control" name="price" value="{{$book->price}}">
			</div>
			<button type="submit" class="btn btn-primary">Update Book</button>
		</form>
	</div>
</div>
@endsection