@extends('master')

@section('title','Paket')

<style>

body {
  background-color: #fdf1ec;
}

.wrapper {
  height: 420px;
  width: 654px;
  margin: 50px auto;
  border-radius: 7px 7px 7px 7px;
  -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
}

body {
    background-color: #F5F5F5;
}

.product-img {
  float: left;
  height: 420px;
  width: 327px;
}

.product-img img {
  border-radius: 7px 0 0 7px;
}

.product-info {
  float: left;
  height: 420px;
  width: 327px;
  border-radius: 0 7px 10px 7px;
  background-color: #ffffff;
}

.product-text {
    margin-bottom: 30px;
}

.product-text h1 {
  margin: 0 0 0 38px;
  padding-top: 52px;
  font-size: 34px;
  color: #474747;
}

.product-text h1,
.product-price-btn p {
  font-family: 'Bentham', serif;
}

.product-text h2 {
  margin: 0 0 15px 38px;
  font-size: 13px;
  font-family: 'Raleway', sans-serif;
  font-weight: 400;
  text-transform: uppercase;
  color: #d2d2d2;
  letter-spacing: 0.2em;
}

.product-text p {

  margin: 0 0 0 38px;
  font-family: 'Playfair Display', serif;
  color: #8d8d8d;
  line-height: 1.7em;
  font-size: 15px;
  font-weight: lighter;
  overflow: hidden;
}



span {
  display: inline-block;
  height: 50px;
  font-family: 'Suranna', serif;
  font-size: 34px;
}

.product-price-btn button {
  float: right;
  display: inline-block;
  height: 50px;
  width: 176px;
  margin: 0 40px 0 16px;
  box-sizing: border-box;
  border: transparent;
  border-radius: 60px;
  font-family: 'Raleway', sans-serif;
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.2em;
  color: #ffffff;
  background-color: #9cebd5;
  cursor: pointer;
  outline: none;
}

.product-price-btn button:hover {
  background-color: #79b0a1;
}
</style>


@section('content')


    <div class="wrapper">
    <div class="product-img">
      <img src="{{$lekar->slika}}" height="420" width="327">
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1>{{$lekar->ime}} {{$lekar->prezime}}</h1>
        <h2>{{$lekar->zvanje}}</h2>
        <p>{{$lekar->obrazovanje}}</p>
      </div>
      <form action="/zakazi" method="post">
            {{ csrf_field() }}
            <input style="padding: 5px 7px; margin-left: 35px; margin-bottom: 10px;" type="text" name="ime" placeholder="ime">
            <input style="padding: 5px 7px; margin-left: 35px; margin-bottom: 10px;" type="text" name="prezime" placeholder="prezime">
            <input style="padding: 5px 7px; margin-left: 35px; margin-bottom: 10px;" type="text" name="opis_problema" placeholder="opis problema">
            <input style="padding: 5px 7px; margin-left: 35px; margin-bottom: 10px;" type="date" name="datum">
            <input style="display:none;" type="text" name="lekar_id" value="{{$lekar->id}}">
            <button style="background-color: #0275d8; color: white; border: none; border-radius: 5px; width: 200px; height: 35px; display: block; margin-left: 35px; margin-top: 10px;" type="submit">Zakazi</button>
        </form>
    </div>
  </div>
@endsection
