@extends('layout.template')

@section('page-title', 'jumbotron')

@section('content')
	<?php
		// dump 拋出訊息
		// dump($data);

		// echo 輸出的內容會成為 html 結構的一部份
		// echo $a;

		// dd(Dump and Die) 中斷並拋出訊息
		// dd($a);
	?>
	<main>
		<div class="jumbotron">
			<div class="container">
				<h1 class="display-3">Hello, world!</h1>
				<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
				<p>
					<a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a>
				</p>
			</div>
		</div>
		<div class="container">
			<!-- row 裡面只能包 class 為 col 系列的元素 -->
			<div class="row">
				@foreach ($lists as $item)
					<div class="col-4">
						<h2>{{ $item->title }}</h2>
						<p>{{ $item->text }}</p>

							<button type="button" class="btn btn-secondary">View details »</button>
						</p>
					</div>
				@endforeach
			</div>
			<hr>
		</div>
	</main>
@endsection

@section('js')
	<script>
		console.log();
	</script>
@endsection