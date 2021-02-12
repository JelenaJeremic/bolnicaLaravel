@extends('master')

@section('title','Odeljenje')

<style>
    *,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}

html {
  box-sizing: border-box;
  font-size: 62.5%;
}

body {
  display: flex;
  justify-content: center;
  align-content: center;
  padding: 6rem;
  background-color: #f5f5f5;
  font-family: "Inter", sans-serif;
}
@media (max-width: 60em) {
  body {
    padding: 3rem;
  }
}

.grid {
  display: grid;
  width: 114rem;
  grid-gap: 6rem;
  grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
  align-items: start;
}
@media (max-width: 60em) {
  .grid {
    grid-gap: 3rem;
  }
}
.grid__item {
  background-color: #fff;
  border-radius: 0.4rem;
  overflow: hidden;
  box-shadow: 0 3rem 6rem rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: 0.2s;
}
.grid__item:hover {
  transform: translateY(-0.5%);
  box-shadow: 0 4rem 8rem rgba(0, 0, 0, 0.2);
}

.card__img {
  display: block;
  width: 100%;
  height: 35rem;
  object-fit: cover;
}
.card__content {
  padding: 2rem 2rem;
}
.card__header {
  font-size: 2rem;
  font-weight: 500;
  color: #0d0d0d;
  margin-bottom: 1.2rem;
}
.card__text {
  font-size: 1.5rem;
  letter-spacing: 0.1rem;
  line-height: 1.7;
  color: #3d3d3d;
  margin-bottom: 1rem;
  font-weight: 200;
}
.card__btn {
  display: block;
  width: 100%;
  padding: 1.5rem;
  font-size: 2rem;
  text-align: center;
  color: #3363ff;
  background-color: #e6ecff;
  border: none;
  border-radius: 0.4rem;
  transition: 0.2s;
  cursor: pointer;
}
.card__btn span {
  margin-left: 1rem;
  transition: 0.2s;
}
.card__btn:hover, .card__btn:active {
  background-color: #dce4ff;
}
.card__btn:hover span, .card__btn:active span {
  margin-left: 1.5rem;
}
</style>

@section('content')


<div class="grid">
<div class="grid__item">
    <div class="card"><img style="display: none;" class="card__img" src="" alt="Desert">
      <div class="card__content">
        <h3 class="card__header">Naziv odeljenja: {{$odeljenje->naziv}}</h3>
        <h3 class="card__header">Oblast: {{$odeljenje->oblast}}</h3>
        <p class="card__text">{{$odeljenje->opis}}</p>

      </div>
    </div>
  </div>
@foreach($odeljenje->lekari as $lekar)
  <div class="grid__item">
    <div class="card"><a href="/{{$odeljenje->id}}/{{$lekar->id}}"><img class="card__img" src="{{$lekar->slika}}" alt="neka slika"></a>
      <div class="card__content">
        <h1 class="card__header">{{$lekar->ime}} {{$lekar->prezime}}</h1>
        <p class="card__text"><strong>Zvanje: </strong>{{$lekar->zvanje}} </p>
        <p class="card__text"><strong>Obrazovanje:</strong>  {{$lekar->obrazovanje}} </p>
        <p class="card__text"><strong>Iskustvo:</strong>  {{$lekar->iskustvo}} </p>
        <p class="card__text"><strong>Biografija:</strong> {{$lekar->biografija}} </p>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
