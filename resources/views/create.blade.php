@extends('layout')

    @section('content')
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div style="margin-left: 40%">
                <div class="form-group mt-4" style="width: 40%">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="form-group mt-4 " style="width: 40%">
                    <label for="title">Phone Number</label>
                    <input type="number" class="form-control" name="number" placeholder="+7 xxx xx xx">
                </div>
                <button class="btn btn-success">Add Contact</button>
            </div>
        </form>
    @endsection
