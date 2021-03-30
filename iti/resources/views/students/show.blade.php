@extends('layout.layout')


@section('danger')
    Student
@endsection


@section('list')
<div class="card uper">
  <div class="card-header">
    View Student
      {{-- <a class="btn btn-primary" href="{{ route('datas.index') }}"> Back</a>     --}}
  </div>
  <div class="card-body">
     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>name:</strong>

                {{ $data->name }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>email:</strong>

                {{ $data->email }}

            </div>

        </div>
       
       

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>age:</strong>

                {{ $data->age }}
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>phone:</strong>

                {{ $data->phone }}
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

          <div class="form-group">

              <strong>created at:</strong>

              {{ $data->created_at }}
          </div>

      </div>
    

    </div>
    
  </div>
</div>
@endsection