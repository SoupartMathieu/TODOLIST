@extends('template')

@section('contenu')
<div class="container-fluid" style="margin-top: 150px;">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
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

					<form class="form-inline" role="form" method="POST" action="{{ url('/auth/login') }}">
						{!! csrf_field() !!}

						<div class="divFormulaireLogin">
							<div class="entreeLogin">
								<input type="email" class="form-control" name="email" placeholder="Email Adress" value="{{ old('email') }}">
							</div>
						</div>

						<div class="divFormulaireLogin">
							<div class="entreeLogin">
								<input type="password" class="form-control" name="password" placeholder="Password">
							</div>
						</div>


						<div class="">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Login</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
