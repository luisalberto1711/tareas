<div class='form'>
<form action="/musica/post" method='post' name="miform" >
    {{csrf_field()}}
    mostrar token
    {{csrf_token()}}
            @foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach

    <div class="form">
        <label for="">titulo</label>
        <input class="form-control" type="email" required  name="titulo" ng-model="musica.titulo">
        <div ng-show="miform.titulo.$invalid"   class="alert alert-danger">
            <ul>
                <li ng-show="miform.titulo.$error.required" > campo obligatorio</li>
                <li ng-show="miform.titulo.$error.email" >no es un correo</li>
            </ul>
        </div>
        <li>{{ $errors->first('titulo') }}</li>
    </div>
    <div class="form">
        <label for="" >artista</label>
        <input class="form-control"  type="text" max="10" name="artista" ng-model="musica.artista">
        <div ng-show="miform.artista.$invalid"   class="alert alert-danger">
            <ul>
                <li ng-show="miform.artista.$error.required" > campo obligatorio</li>
                <li ng-show="miform.artista.$error.max" >solo hasta el 10</li>
            </ul>
        </div>
    </div>
    <input type="button" ng-disabled="miform.$invalid" ng-click="onclickEnviar()" value="Enviar" class="btn success">
</form>
</div>