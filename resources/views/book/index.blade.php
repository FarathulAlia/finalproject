@extends('layouts.template')
@section('main')
<div class="px-3">
    <div class="pagetitle">
        <h1>Books</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">Books</li>
          </ol>
        </nav>
      </div>

    <a href="{{route('book.create')}}" class="btn btn-primary">Add Book</a>
 
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">List of Available Books</h5>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Year</th>
                    <th>Available</th>
                </tr>
                @foreach ($availableBooks as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->title}}</td>
                        <td>{{$book->category}}</td>
                        <td>{{$book->author}}</td>
                        <td>{{$book->publisher}}</td>
                        <td>{{$book->year}}</td>
                        <td>{{$book->available}}</td>
                    </tr>
                @endforeach
            </table>
            {{$availableBooks->links()}}
        </div>
    </div>    
    
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">List of Borrowed Books</h5>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Year</th>
                    <th>Available</th>
                </tr>
                @foreach ($borrowedBooks as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->title}}</td>
                        <td>{{$book->category}}</td>
                        <td>{{$book->author}}</td>
                        <td>{{$book->publisher}}</td>
                        <td>{{$book->year}}</td>
                        <td>{{$book->available}}</td>
                    </tr>
                @endforeach
            </table>
             {{$borrowedBooks->links()}}
        </div>
    </div>    
    
</div>
@endsection