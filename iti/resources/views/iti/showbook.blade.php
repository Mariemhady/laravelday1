@extends('layout.layout')
@section('danger')
  Single Book page
@endsection

@section('list')

<table class="table"> 
    <th> 
        Title
    </th>
    <th>
        Body
    </th>

        <tr> 
            <td>
                {{$data["title"]}}
            </td> 
            <td>
                {{$data["body"]}}
            </td> 

        <tr> 

</table>
@endsection
