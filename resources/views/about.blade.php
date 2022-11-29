@dd($films)
@extends('layouts.main')
 @section('container')

 @foreach ($films as $film)
 <h2>{{ $film["gambar"] }} </h2>
 <h5>{{ $film["judul"]}}</h5>
 <h5>{{ $film["tahun"]}}</h5>
 <h5>{{ $film["deskripsion"]}}</h5>
 @endforeach
   
@endsection
  