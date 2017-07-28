@if(!$errors->isEmpty())
<div class='alert alert-danger'>
    @foreach($errors->all() as $er)
        <li>{{$er}}</li>
    @endforeach
</div>
@endif
