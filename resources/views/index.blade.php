@extends('layout')
    @section('content')
        <div class="d-flex justify-content-center mt-3">
            @if (session('create'))
                <div class="alert alert-success ">
                    <strong>{{ session('create') }}</strong>
                </div>
            @endif

            @if (session('delete'))
                <div class="alert alert-danger text-center">
                    <strong>{{ session('delete') }}</strong>
                </div>
            @endif
            @if (session('edit'))
                <div class="alert alert-primary text-center">
                    <strong>{{ session('edit') }}</strong>
                </div>
            @endif
    </div>
    <div class="text-center">
        <a class="btn btn-success m-3" href="{{ route('contact.create') }}">Create</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Detail</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Madiar</td>
            <td>123456789</td>
            <td><a class="btn btn-primary" href="{{ route('contact.show', 1) }}">Detail</a></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Serik</td>
            <td>987654321</td>
            <td><a class="btn btn-primary" href="{{ route('contact.show', 2) }}">Detail</a></td>
          </tr>
          <tr>
            <tr>
                <th scope="row">3</th>
                <td>qweqwe</td>
                <td>456789123</td>
                <td><a class="btn btn-primary" href="{{ route('contact.show', 3) }}">Detail</a></td>
              </tr>
        </tbody>
      </table>
    @endsection
