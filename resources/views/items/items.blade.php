@extends('template')
@section('title', 'Items')

@section('isAdmin')
	<div class="container">
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>Item Name</th>
						<th>Description</th>
						<th>Price</th>
						<th>Category</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($items as $i)
					<tr>
						<td>{{ $i->item_name }}</td>
						<td>{{ $i->description }}</td>
						<td>{{ $i->price }}</td>
						<td>{{ $i->category_id }}</td>
						<td><img src={{ $i->image_path }}></td>
						<td>
							<form action="/deleteitem/{{$i->id}}" method="POST">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
								<button class="btn btn-outline-danger" type='submit'>Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>	
		</div>
	</div>

@endsection