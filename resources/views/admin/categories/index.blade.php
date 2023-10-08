@extends('layouts.admin')

@section('content')

	<div class="d-flex justify-content-between align-items-center my-4">
		<h4>Producten</h4>
		<div>
			<a href="{{ route('admin.categories.create') }}">Nieuw Categorie toevoegen</a>
		</div>
	</div>

	<table class="table table-striped table-hover">
		<tr>
			<th>Naam</th>
			<th colspan="4">&nbsp;</th>
		</tr>
		@foreach($categories as $category)
			<tr>
				<td>{{ $category->name }}</td>

				<td>
					<a href="{{ route('admin.categories.edit', $category->id) }}">Aanpassen</a>
				</td>

			</tr>
		@endforeach
	</table>
@endsection


