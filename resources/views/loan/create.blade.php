@extends('layouts.template')
@section('main')
<div class="pagetitle">
    <h1>Add Loan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('loan.index')}}">Loans</a></li>
        <li class="breadcrumb-item active">Add Loan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Loan Form</h5>

<div class="px-3">

    <form action="{{route('loan.store')}}" method="POST">
        @csrf
        <div class="row mb-3">
            <label for="book_id" class="col-sm-3 col-form-label">Book ID</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="book_id">
            </div>
          </div>
          <div class="row mb-3">
            <label for="member_id" class="col-sm-3 col-form-label">Member ID</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="member_id">
            </div>
          </div>
          <div class="row mb-3">
            <label for="borrowingDate" class="col-sm-3 col-form-label">Borrowing Date</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" name="borrowingDate">
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