@extends('layouts.template')
@section('main')
<div class="px-3">
    <div class="pagetitle">
        <h1>Supervisors</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">Supervisors</li>
          </ol>
        </nav>
      </div>

      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">List of Supervisors</h5>
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        @foreach ($supervisors as $supervisor)
                            <tr>
                                <td>{{$supervisor->id}}</td>
                                <td>{{$supervisor->name}}</td>
                                <td>{{$supervisor->email}}</td>
                            </tr>        
                        @endforeach
                    </table>
                    {{$supervisors->links()}}
                </div>
            </div>
        </div></div></section>
</div>
@endsection
