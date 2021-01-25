@extends('template._master')

@section('judul_halaman', 'Add Contact')

@section('konten')
    
    <div class="row">
        <div class="col-md-8">
            <h1 class="display-6">Add Contact</h1>
        </div>

    </div>

    <div class="row">
        <div class="col-md-5">
            <form action="{{ url('contact/store') }}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="full_name">Full Name :</label>
                        <input class="form-control" type="text" name="full_name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input class="form-control" type="text" name="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone :</label>
                        <input class="form-control" type="text" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="address">Address :</label>
                        <textarea name="address" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary text-right">Save</button>
                    <a href="{{ url('contact') }}" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
@endsection