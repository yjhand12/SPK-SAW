@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
<main>
		<div class="container" style="height: 550px; background-color:white;"><br>
			<div class="row" style="margin-left:10px; margin-bottom:20px">
			<div class="card text-bg-primary col-lg-3 col-3" style="margin-right:10px;">
				<div class="card-header">Calon Mahasiswa</div>
					<div class="card-body">
						<h5 class="card-title">{{ $mahasiswa_total }}</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
			</div>
			<div class="row" style="margin-left:10px;">
			<div class="card text-bg-primary col-lg-3 col-3" style="margin-right:10px;">
				<div class="card-header">Rekayasa Keamanan Siber</div>
					<div class="card-body">
						<h5 class="card-title">{{ $mahasiswa_rks }}</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
			<div class="card text-bg-primary col-lg-3 col-3" style="margin-right:10px;">
				<div class="card-header">Rekayasa Multimedia</div>
					<div class="card-body">
						<h5 class="card-title">{{ $mahasiswa_mm }}</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
			<div class="card text-bg-primary col-lg-3 col-3">
				<div class="card-header">Bisnis Digital</div>
					<div class="card-body">
						<h5 class="card-title">{{ $mahasiswa_bd }}</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
			</div><br>
		</div>
	</main>
@endsection