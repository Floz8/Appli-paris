@extends('layouts.vueliste')

@section('content')

<style>
         body {
          font-family: 'Nunito', sans-serif;
          background-image: url("background.jpg");
          background-color: #2d3748;
          background-repeat: no-repeat;
          background-size: cover;
      }
 </style>
 <h1 style="text-align:center; color:white"> Mes groupes </h1>
<!-- On parcourt la liste des associations et on ne récupère que celles qui ont le même user_ID que l'Auth -->
@foreach($assocs as $assoc)
@if(Auth::id() == $assoc['user_id'])
<!-- On parcourt la liste des groupes et on regarde tous ceux dont l'ID correspondent au group_id de l'association -->
@foreach($groupes as $groupe)
@if($assoc['group_id'] == $groupe['id'])
      
<div class="card bg-glass" style="width: 18rem; display: inline-block; margin-left: 0.6rem; background-color:dark-gray">

        
<div class="card-body">
  <h5 class="card-title" style=" display: inline-block"> {{$groupe['nom']}} </h5>
  <button type="submit" class="btn btn-primary" style="margin-top:2rem;">Detail</button>
      </form>
</div>
</div>

@endif
@endforeach
@endif
@endforeach




@endsection