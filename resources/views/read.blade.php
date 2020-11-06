@extends('layout')

@section('content')
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">PhoneNumber</th>
                  <th scope="col">Back</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">{{ $num_id }}</th>
                  <td>Madiar</td>
                  <td>123456789</td>
                  <td><a class="btn btn-secondary" href="{{ route('contact.home') }}">Back</a></td>
                </tr>
              </tbody>
        </table>
@endsection
