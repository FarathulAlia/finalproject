@extends('layouts.template')
@section('main')
<div class="px-3">
    <div class="pagetitle">
        <h1>Loan</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">Loan</li>
          </ol>
        </nav>
      </div>

    <a href="{{route('loan.create')}}" class="btn btn-primary">Add Loan Record</a>
    
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">List of Active Loans</h5>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Book Title</th>
                    <th>Member Name</th>
                    <th>Borrowing Date</th>
                    <th>Return Date</th>
                    <th colspan="2">Update</th>
                </tr>
                @foreach ($loans as $loan)
                    <tr>
                        <td>{{$loan->id}}</td>
                        <td>{{$loan->book->title}}</td>
                        <td>{{$loan->member->name}}</td>
                        <td>{{$loan->borrowingDate}}</td>
                        <td>{{$loan->returnDate}}</td>
                        <form action="{{route('loan.update', $loan)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <td>
                                <input type="date" name="returnDate" class="form-control" required>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-success">Return</button>
                            </td>
                        </form>
                    </tr>
                @endforeach
            </table>
            {{$loans->links()}}
        </div>
    </div>
    

    
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">List of Loan Records</h5>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Book Title</th>
                    <th>Member Name</th>
                    <th>Borrowing Date</th>
                    <th>Return Date</th>
                    
                </tr>
                @foreach ($records as $loan)
                    <tr>
                        <td>{{$loan->id}}</td>
                        <td>{{$loan->book->title}}</td>
                        <td>{{$loan->member->name}}</td>
                        <td>{{$loan->borrowingDate}}</td>
                        <td>{{$loan->returnDate}}</td>
                        
                    </tr>
                @endforeach
            </table>
            {{$records->links()}}
        </div>
    </div>
</div>
@endsection