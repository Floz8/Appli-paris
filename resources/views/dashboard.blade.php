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

@foreach($evenements as $evenement)

<div class="card bg-glass" style="width: 18rem; display: inline-block; margin-left: 0.6rem; background-color:dark-gray">

        
  <div class="card-body">
    <h5 class="card-title" style=" display: inline-block"> {{$evenement['Etat']}}</h5>
  
    <p class="card-text">Challenger 1: {{$evenement['challenger1_id']}}</p>
    <p class="card-text">Challenger 2: {{$evenement['challenger2_id']}}</p> 
   
            @csrf
    
    <button type="submit" class="btn btn-primary" style="margin-top:2rem;">test</button>
        </form>
  </div>
</div>
  
@endforeach
@endsection