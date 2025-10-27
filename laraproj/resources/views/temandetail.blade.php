@extends('layouts.app')

@section('judulpage','Data Detail Teman')

@section('konten')

<div class="container">
    <div class="card" style="width: 20rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $t["namateman"] }}</h5>
            <p class="card-text">
                
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $t["alamat"] }}</li>
                    <li class="list-group-item">{{ $t["kota"] }}</li>
                    <li class="list-group-item">{{ $t["wa"] }}</li>
                </ul>
            </div>
            
            </p>
            <a href="{{route('datateman')}}" class="btn btn-primary">kembali</a>
        </div>
    </div>
</div>


@endsection