@extends('layouts.template')
@section('main')

<div class="px-3">
    <div class="pagetitle">
        <h1>Add Book</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('book.index')}}">Books</a></li>
            <li class="breadcrumb-item active">Add Book</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
    
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
    
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Book Form</h5>
    
    <div class="px-3">

    <form action="{{route('book.store')}}" method="post">
        @csrf

        <div class="row mb-3">
            <label for="title" class="col-sm-3 col-form-label">Title</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="title">
            </div>
          </div>
          <div class="row mb-3">
            <label for="author" class="col-sm-3 col-form-label">Author Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="author">
            </div>
          </div>
          <div class="row mb-3">
            <label for="publisher" class="col-sm-3 col-form-label">Publisher</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="publisher">
            </div>
          </div>
          <div class="row mb-3">
            <label for="year" class="col-sm-3 col-form-label">Published Year</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="year">
            </div>
          </div>
        <div class="row mb-3">
            <label for="category" class="col-sm-3 col-form-label">Category</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="category">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary">Submit Form</button>
            </div>
          </div>
    </form>
</div>
@endsection