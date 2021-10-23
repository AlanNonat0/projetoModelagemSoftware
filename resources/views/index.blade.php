@extends('layouts.layout_base')
@section('title', 'Home')

@section('content')

<div class="container-fluid">
    
    <!-- Carousel -->
    <div id="carouselReceitas" class="carousel slide" data-bs-ride="carousel">
	  <div class="carousel-indicators">
	    <button type="button" data-bs-target="#carouselReceitas" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	    <button type="button" data-bs-target="#carouselReceitas" data-bs-slide-to="1" aria-label="Slide 2"></button>
	    <button type="button" data-bs-target="#carouselReceitas" data-bs-slide-to="2" aria-label="Slide 3"></button>
	  </div>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <div style="min-width: 100%; height: 400px; background-image: url({{ asset('img/slider/bolo.jpg') }}); background-size: cover; background-position:left"> </div>
	    	 <div class="carousel-caption d-none d-md-block">
		        <h2 class="text-end font-weight-bold">Bem-vindo ao Sabores</h2>
		        <p class="text-end">As melhores receitas. A melhor experiência </p>
		      </div>
	    </div>
	    <div class="carousel-item">
	      <div style="min-width: 100%; height: 400px; background-image: url({{ asset('img/slider/receita.jpg') }}); background-size: cover; background-position:left"> </div>
	    	<div class="carousel-caption ">
		        <h2 class="text-start font-weight-bold">Guarde suas receitas</h2>
		        <p class="text-start">Acesse suas receitas favoritas a qualquer momento</p>
		      </div>
	    </div>
	    
	    <div class="carousel-item">
	      <div style="min-width: 100%; height: 400px; background-image: url({{ asset('img/slider/macarrao.jpg') }}); background-size: cover; background-position:left"> </div>
	    	<div class="carousel-caption ">
		        <h2 class="text-end font-weight-bold">Compartilhe experiências</h2>
		        <p class="text-end">Publique e compartilhe suas receitas favoritas</p>
		      </div>
	    </div>
	    
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselReceitas" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Anterior</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselReceitas" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Próximo</span>
	  </button>
	</div>
	
	<!-- Search -->
	<div class="row d-flex justify-content-center mt-4">
		<div class=" col-lg-6 col-12 col-sm-12 col-xl-6">
			<h4 class="text-white text-center">Encontre aqui as receitas mais saborosas</h4>
			<form>
				<input type="text" class="form-control mx-auto" placeholder="Digite aqui sua busca" />
			</form>
		</div>
	</div>
	
    <!-- Recipes -->
	<div class="row mt-4">
		<div class="col-lg-3 col-sm-6 pb-2">
			<div class="card border border-dark" style="height: 367.84px !important;">
			  <img src="{{ asset('img/slider/bolo.jpg') }}" class="card-img-top" alt="Bolo trufado" style="min-height: 206.84px !important">
			  <div class="card-body">
			    <h5 class="card-title">Bolo Trufado</h5>
			    <p class="card-text">Bolo delicioso de chocolate trufado decorado com cerejas.</p>
			    <div class="d-flex justify-content-end">
			    	<a href="{{ route('preparo.index') }}" class="btn-block btn btn-outline-dark btn-sm">Confira aqui</a>
			    </div>
			    
			  </div>
			</div>			
		</div>
	</div>
	
	 <div class="mt-4" style="min-width: 100%; height: 200px; background-image: url({{ asset('img/slider/tempero-2.jpg') }}); background-size: cover; background-position:left"> 
	 </div>

			<h3 class="text-white text-center mt-3">Guia geral de como usar e combinar os mais variados temperos</h3>
			<div class="d-flex justify-content-center">
				<button type="button" class="btn btn-light mb-3 btn-block d-flex justify-content-center">Confira</button>
				
			</div>
			
</div>
    
@endsection