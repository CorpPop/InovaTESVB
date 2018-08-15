@extends("layouts.app")

@section("content")
<div class="container">
	<div class="row">
		@foreach ($categorias as $categorias )
<div class="card">
	<input type="file" name="" class="cover" onchange="imgload(event)">
		<!-- <a class="" href="" target="_blank"  data-image-full=""> -->
			<img src="" class="card image ver"/>
		<!-- </a> -->
		<a class="card-description ver" href="" target="_blank">
			<h5>{{$categorias->categoria}}</h5>
			<p>{{$categorias->web}}</p>
		</a>
		<label for="Imagen"></label>
</div>	
		@endforeach
	</div>
</div>
<script type="text/javascript">
	var image = '';
function imgload(evt) {
  var reader = new FileReader();
  reader.readAsDataURL(evt.target.files[0]);
  reader.onload = (evt) => {
    var img = new Image();
    img.src = evt.target.result;
    var cv = document.createElement('canvas');
    var ctx = cv.getContext('2d');
    img.onload = () => {
      var ratio = img.naturalHeight / img.naturalWidth;
      cv.width = 300;
      cv.height = 300 * ratio;
      ctx.drawImage(img, 0, 0, 300, 300 * ratio);
      
      image = cv.toDataURL("image/jpeg"); 
      document.querySelector('img.ver').src = image;
    };
  }
}
</script>
@endsection