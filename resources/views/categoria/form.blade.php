<div class="container">
<div class="row" style="height:90px"><h5 class="left">Agregar categoria</h5></div>
    <div class="row" style="right:80px;width:800px;position:relative;">
        <div class="col col l12 m1 s12 offset-l1">
        <div class="row">
          
            {!! Form::open(['url' => $url,'method' => $method,'class'=> 'col s12 center card-body','style'=>'','files' => true]) !!}
<div class="input-field col l6 m3 s12">
     {{ Form::text('categoria','',['class' => 'form-control',
     'placeholder' => 'Categoria...'])}}
     <label for="titulo">Categoria</label>
  </div>
	<div class="input-field col l6 m3 s12">
	   {{ Form::text('direccion','',['class' => 'form-control',
     'placeholder' => 'Dirección...'])}}
	    <label for="numero">Dirección</label>
	</div>
  <div class="input-field col l6 m3 s12 ">
    {{ Form::text('correo','',['class' => 'form-control',
     'placeholder' => 'E-mail...'])}}
     <label for="numero">Correo electronico</label>
  </div>
  <div class="input-field col l6 m3 s12 ">
    {{ Form::text('web','',['class' => 'form-control',
     'placeholder' => 'Contacto...'])}}
     <label for="numero">Pagina de contacto</label>
  </div>
  <div class="input-field col l6 m3 s12 ">
    {{ Form::number('telefono','',['class' => 'form-control',
     'placeholder' => 'Telefono...'])}}
     <label for="numero">Telefono</label>
  </div>
  <div class="input-field col l12 m6 s12">
    {{ Form::textarea('descripcion','',['class' => 'materialize-textarea form-control','id'=>'descripcion','data-lenth'=>'10','required autofocus','placeholder'=>'Descripcion del are...'])}}
     <label for="descripcion">Descripción</label>
  </div>
	<div class="input-field col l12 m3 s12 right">
		<a href="{{url('/products')}}" style="background-color: #616161 " class="btn">Regresar</a>
		<input type="submit" name="" style="background-color: #424242 " value="Agregar" class="btn">
	</div>
<!--   <div id="app">
     <nuevaimg></nuevaimg>
  </div> --> 
{!! Form::close() !!}
    
        </div>
    </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $(".agregar").click(function(event){
      
    });
  });
</script>

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


