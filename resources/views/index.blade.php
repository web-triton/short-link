<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Short Link by Web-Triton</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="">

	<main class="form-signin w-100 m-auto">
		<form class="text-center" action="{{ route('create') }}" method="POST">

			@csrf

			<img class="mb-4" src="https://laravel.com/img/logomark.min.svg" alt="laravel" width="50" height="52">

			<img class="mb-4" src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo.svg" alt="bootstrap" width="72" height="57">

			<img class="mb-4" src="" alt="" width="" height="">

			<h1 class="h3 mb-3 fw-normal">Enter Long URL</h1>

			<div class="form-floating">
				<input type="url" name="link" class="form-control @error('link') is-invalid @enderror" id="long_url" placeholder="">
				<label for="long_url">Long URL</label>
			</div>

			<button class="btn btn-lg btn-primary mt-3" type="submit">Short</button>
		</form>

		<table class="table mt-5">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Short Url</th>
					<th scope="col">Number Of Transitions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($links as $link)
					<tr>
						<th scope="row">{{ $link->id }}</th>
						<td><a href="{{ route('code', $link->code) }}" target="_blank">{{ route('code', $link->code) }}</a></td>
						<td>{{ $link->count }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</main>



	<!-- https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js -->

</body>
</html>
