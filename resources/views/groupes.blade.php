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
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body .container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 40px 0;
}

body .container .card {
  background-color: #2d3748;
  position: relative;
  min-width: 320px;
  height: 440px;
  box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
    inset -5px -5px 15px rgba(255, 255, 255, 0.1),
    5px 5px 15px rgba(0, 0, 0, 0.3), -5px -5px 15px rgba(255, 255, 255, 0.1);
  border-radius: 15px;
  margin: 30px;
  transition: 0.5s;
}

body .container .card:nth-child(1) .box .content a {
  background: #2196f3;
}

body .container .card:nth-child(2) .box .content a {
  background: #e91e63;
}

body .container .card:nth-child(3) .box .content a {
  background: #23c186;
}

body .container .card .box {
  position: absolute;
  top: 20px;
  left: 20px;
  right: 20px;
  bottom: 20px;
  background: #2a2b2f;
  border-radius: 15px;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  transition: 0.5s;
}

body .container .card .box:hover {
  transform: translateY(-50px);
}

body .container .card .box:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: rgba(255, 255, 255, 0.03);
}

body .container .card .box .content {
  padding: 20px;
  text-align: center;
}

body .container .card .box .content h2 {
  position: absolute;
  top: -10px;
  right: 30px;
  font-size: 8rem;
  color: rgba(255, 255, 255, 0.1);
}

body .container .card .box .content h3 {
  font-size: 1.8rem;
  color: #fff;
  z-index: 1;
  transition: 0.5s;
  margin-bottom: 15px;
}

body .container .card .box .content p {
  font-size: 1rem;
  font-weight: 300;
  color: rgba(255, 255, 255, 0.9);
  z-index: 1;
  transition: 0.5s;
}

body .container .card .box .content a {
  position: relative;
  display: inline-block;
  padding: 8px 20px;
  background: black;
  border-radius: 5px;
  text-decoration: none;
  color: white;
  margin-top: 20px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  transition: 0.5s;
}
body .container .card .box .content a:hover {
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
  background: #fff;
  color: #000;
}

 </style>
 <h1 style="text-align:center; color:white"> Mes groupes </h1>
<!-- On parcourt la liste des associations et on ne récupère que celles qui ont le même user_ID que l'Auth -->
<div class="container">
@foreach($assocs as $assoc)
@if(Auth::id() == $assoc['user_id'])
<!-- On parcourt la liste des groupes et on regarde tous ceux dont l'ID correspondent au group_id de l'association -->
@foreach($groupes as $groupe)
@if($assoc['group_id'] == $groupe['id'])


  <div class="card">
    <div class="box">
      <div class="content">
        <h2>{{$groupe['id']}}</h2>
        <h3>{{$groupe['nom']}}</h3>
        <p>Mon score : {{$assoc['score']}}</p>
        <a href="#">Détail</a>
      </div>
    </div>
  </div>


@endif
@endforeach
@endif
@endforeach
</div>




@endsection