@extends('layout')

@section('content')
    <form action="" method="POST">
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">PhoneNumber</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">{{ $num_id }}</th>
                  <td>Madiar</td>
                  <td>123456789</td>
                  <td><a class="btn btn-success" href="{{ route('contact.update', $num_id) }}">Edit</a></td>
                  <td><a class="btn btn-danger" href="{{ route('contact.destroy', $num_id) }}">Delete</a></td>
                </tr>
              </tbody>
        </table>
    </form>
@endsection
