@extends("layouts.app")

@section("content")
  <div style="height:100px"></div>
<div class="container">
	@include('categoria.form',['categorias' => $categorias, 'url' => '/categoria','method' => 'POST'])
</div>
@endsection