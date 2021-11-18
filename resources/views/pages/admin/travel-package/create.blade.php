@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>
      </div>

      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
      @endif

      <div class="card shadow">
          <div class="card-body">
              <form action="{{route('travel-package.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Fill the title of vacation" value="
                    {{old ('title')}}">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="location" placeholder="Fill the location of vacation" value="
                    {{ old ('location')}}">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" rows="10" class="d-block w-100 form-control">{{ old('about') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="featured_event">Featured Event</label>
                    <input type="text"class="form-control" name="featured_event" placeholder="Fill the Featured Event of vacation" value="
                    {{ old('featured_event') }}">
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                    <input type="text" class="form-control" name="language" placeholder="Fill the language of vacation" value="
                    {{ old('language') }}">
                </div>
                <div class="form-group">
                    <label for="foods">Foods</label>
                    <input type="text" class="form-control" name="foods" placeholder="Fill the foods of vacation" value="
                    {{ old('foods') }}">
                </div>
                <div class="form-group">
                    <label for="departure_date">Departure Date</label>
                    <input type="date" class="form-control" name="departure_date" placeholder="Fill the departure date of vacation" value="
                    {{ old('departure_date') }}">
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control" name="duration" placeholder="Fill the duration of vacation" value="
                    {{ old('duration') }}">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" placeholder="Fill the type of vacation" value="
                    {{ old('type') }}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Fill the price of vacation" value="
                    {{ old('price') }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Save
                </button>
                <button type="reset" class="btn btn-warning btn-block" value="reset">
                    Cancel
                </button>
            </form>
          </div>
      </div>
    </div>
    <!-- /.container-fluid -->
@endsection
