

@extends('template._master')

@section('judul_halaman', 'Beranda')

@section('konten')
<a href="{{ url('contact/create') }}" class="btn btn-success mb-2">Tambah Data</a>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Alamat</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($contacs as $contact)
                    
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->nama }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->address }}</td>
                        <td><a href="{{ url("contact/{$contact->id}/edit") }}" class="btn btn-primary">EDIT</a></td>
                        <td><button disabled="disabled">DELETE</button></td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection