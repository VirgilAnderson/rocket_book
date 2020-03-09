@extends('layouts.app')

@section('content')
<section class="text-white">
	<h1><i class="fas fa-book-reader"></i> Rocket Books</h1>
	<h2>Create lists of books you want to read</h2>
	<div class="btn-group mt-5">
		<a href="{{ route('register') }} "type="button" class="btn btn-secondary"><i class="fas fa-user-plus"></i> Register</a>
		<a href="{{ route('login') }}" type="button" class="btn btn-secondary"><i class="fas fa-sign-in-alt"></i> Login</a>
	</div>
</section>
@endsection
