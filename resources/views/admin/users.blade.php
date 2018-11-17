@extends('adminlte::page')
@section('content')
<div class="box-body">
	<table class="table table-striped table-hover" id="siswa-table">
		<thead>
			<th>#</th>
			<th>Name</th>
			<th>Email</th>
		</thead>
			
		<tbody>
			<?php $no=1;?>
			@foreach($user as $user)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>

			</tr>
			@endforeach
         </tbody>
		

	</table>
	

</div>
@endsection
@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection