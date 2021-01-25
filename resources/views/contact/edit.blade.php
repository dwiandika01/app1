@extends('template._master')

@section('konten')
<div class="row">
    <div class="col-md-8">
        <h1 class="display-6">Edit Contact</h1>
    </div>

</div>

<div class="row">
    <div class="col-md-5">
        <form action="{{ url('/contact/{$contact->id}') }}" method="post">
            @method('PATCH')
            @csrf
                <div class="form-group">
                    <label for="full_name">Full Name :</label>
                    <input value="{{ $contact->nama }}" class="form-control" type="text" name="full_name">
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input value="{{ $contact->email }}" class="form-control" type="text" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone :</label>
                    <input value="{{ $contact->phone }}" class="form-control" type="text" name="phone">
                </div>
                <div class="form-group">
                    <label for="address">Address :</label>
                    <textarea name="address" class="form-control">{{ $contact->address }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary text-right">Save</button>
                <a href="{{ url('contact') }}" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>
@endsection