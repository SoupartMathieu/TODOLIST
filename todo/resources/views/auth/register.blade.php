@extends('template')

@section('contenu')
<div class="container-fluid" style="margin-top: 150px;">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						{!! csrf_field() !!}

						<div class="form-group">

							<div class="col-md-6">
								<input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6">
								<input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6">
								<input type="password" class="form-control" placeholder="Password" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6">
								<input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4" style="margin-left: 0px;">
								<button type="submit" class="btn btn-primary" >
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
