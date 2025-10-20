@extends('layouts.app')

@section('judulpage','Welcome Page')

@section('konten')
<div class="container">
    <h3>Daftar Teman</h3>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Kota</th>
          <th>Nomor WA</th>
        </tr>
      </thead>
      <tbody>
        @foreach($dta as $tm )
        <tr>
          <td>{{ $tm["namateman"] }}</td>
          <td>{{ $tm["alamat"] }}</td>
          <td>{{ $tm["kota"] }}</td>
          <td>{{ $tm["wa"] }}</td>
        </tr>
        @endforeach
        
      </tbody>
    </table>

</div>
@endsection