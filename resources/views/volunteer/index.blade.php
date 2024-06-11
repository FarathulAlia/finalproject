@extends('layouts.template')
@section('main')

<div class="px-3">
    <div class="pagetitle">
        <h1>Volunteers</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">Volunteers</li>
          </ol>
        </nav>
      </div>
    @can('create-volunteers', App\Models\User::class)
    <a href="{{route('volunteer.create')}}" class="btn btn-primary">Add Volunteer</a>
    @endcan
    

    <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">List of Volunteers</h5>
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        @foreach ($volunteers as $volunteer)
                            <tr>
                                <td>{{$volunteer->id}}</td>
                                <td>{{$volunteer->name}}</td>
                                <td>{{$volunteer->email}}</td>
                            </tr>
                        @endforeach
                    </table>
                    {{$volunteers->links()}}
                </div>
            </div>
        </div></div></section>   
</div>
@endsection