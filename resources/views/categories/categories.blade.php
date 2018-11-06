@extends('template')
@section('title', 'Categories')

@section('content')
	<div class="container">
		<div class="row">
			<table>
				<thead>
					<tr>
						<td>Category</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $c)
						<tr>
							<td> {{ $c->category_name }} </td>
							<td>
								<form method="POST" action="/deletecategory/{{ $c->id }}">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-outline-danger">Delete</button>
								</form>
							</td>
						</tr>

					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection