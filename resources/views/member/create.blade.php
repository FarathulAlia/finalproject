@extends('layouts.template')
@section('main')
<div class="pagetitle">
    <h1>Add Member</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('member.index')}}">Members</a></li>
        <li class="breadcrumb-item active">Create</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Member Form</h5>

<div class="px-3">

    <form action="{{route('member.store')}}" method="post">
        @csrf
        <div class="row mb-3">
            <label for="name" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="name">
            </div>
          </div>
          <div class="row mb-3">
            <label for="icNum" class="col-sm-3 col-form-label">IC Number</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="icNum">
            </div>
          </div>
          <div class="row mb-3">
            <label for="phone" class="col-sm-3 col-form-label">Phone Number</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="phone">
            </div>
          </div>
        <div class="row mb-3">
            <label for="address" class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-9">
                <textarea name="address" class="form-control" name="address"></textarea>
            </div>
          </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" name="email">
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