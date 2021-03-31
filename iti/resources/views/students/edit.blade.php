@extends('layout.layout')


@section('danger')
    Edit Student
@endsection


@section('list')
<div class="card uper">
  <div class="card-header">
    Edit Student
  </div>
  <div class="card-body">
  
      <form method="POST" action="{{ route('students.update', $data->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="name">name:</label>
          <input type="text" class="form-control" name="name" id="post_name" value="{{ old('name', $data->name) }}" />
          <label class="text-danger">{{$errors->first("name")}}</label>
        </div>
        <div class="form-group">
          <label for="price">email:</label>
          <textarea name="email" id="data_email" class="form-control">{{ $data->email }}</textarea>
          <label class="text-danger">{{$errors->first("email")}}</label>
        </div>
        <div class="form-group">
            <label for="price">phone:</label>
            <textarea name="phone" id="data_phone" class="form-control">{{ $data->phone }}</textarea>
            <label class="text-danger">{{$errors->first("phone")}}</label>
          </div>
          <div class="form-group">
            <label for="price">age:</label>
            <textarea name="age" id="data_age" class="form-control">{{ $data->age }}</textarea>
            <label class="text-danger">{{$errors->first("age")}}</label>
          </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection