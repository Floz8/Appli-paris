@extends('layouts.vueliste')

@section('content')
 
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3" style="color:white" >Créer un nouveau groupe</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('groupes.store') }}">
          @csrf
          <div class="form-group">    
              <label style="color:white"  for="groupe_nom">Nom:</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
          <label style="color:white" for="tache_importance">Importance:</label>
          <select class="form-select" aria-label="Default select example" name="importance">

</select>
</div>

 
          <button type="submit" class="btn btn-primary" style="margin-top:1rem;" href="/dashboard">Créer le groupe</button>
      </form>
  </div>
</div>
</div>
  @endsection