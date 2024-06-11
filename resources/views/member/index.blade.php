@extends('layouts.template')
@section('main')
<div class="px-3">
    <div class="pagetitle">
        <h1>Members</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">Members</li>
          </ol>
        </nav>
      </div>

    <a href="{{route('member.create')}}" class="btn btn-primary">Register Member</a>
    
    <div class="card mt-3">
        <div class="card-body">
    <h5 class="card-title">List of Members</h5>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>IC Number</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Email</th>
                </tr>
                @foreach ($members as $member)
                    <tr>
                        <td>{{$member->id}}</td>
                        <td>{{$member->name}}</td>
                        <td>{{$member->icNum}}</td>
                        <td>{{$member->phone}}</td>
                        <td>{{$member->address}}</td>
                        <td>{{$member->email}}</td>
                    </tr>
                @endforeach
            </table>
            {{$members->links()}}
        </div>
    </div>
</div>
@endsection