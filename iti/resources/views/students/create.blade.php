@extends('layout.layout')


@section('danger')
    Add Student
@endsection


@section('list')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Student</div>
                <div class="card-body">
                    <form method="post"  action="{{route('newstudent.store')}}">
                        <div class="form-group">
                            @csrf
                            <label class="label">name </label>
                            <input type="text" name="name" class="form-control" required/>
                        </div>
                       <div class="form-group">
                            <label class="label">email </label>
                            <input type="text" name="email" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">phone </label>
                            <input type="text" name="phone" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">age </label>
                            <input type="text" name="age" class="form-control" required/>

                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection