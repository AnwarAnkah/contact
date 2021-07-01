@extends('layout.app')
@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2 m-auto">
		<div class="contact-form">
			<h3>Contact List</h1>
			<a hrfe="http://"> add new contact</a>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">First Name</th>
							<th scope="col">Last Name</th>
							<th scope="col">Email Address</th>
							<th scope="col">&nbsp</th>
							<th scope="col">&nbsp</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($contacts as $contact)
						<tr>
							<th scope="row">{{$contact_id}}</th>
							<td>{{$contact->fName}}/td>
							<td>{{$contact->lName}}</td>
							<td>{{$contact->email}}</td>
							<td>
							<form action="{{url('destory/'.$contact->id)}}"method="post">
@csrf
@method('delete')
							<td><button type="submit" class="btn btn-danger">Delete</button></td>
							</form>
							<td>
							<form action="{{url('edit/'.$contact->id)}}"method="post">
@csrf
@method('PUT')
							<td><button type="submit" class="btn btn-primary">Edit</button></td>
							</form>
						</tr>
						@endforeach

					</tbody>
				</table>
		</div>
	</div>
</div>
@endsection