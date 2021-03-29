@extends('layout.layout')
@section('danger')
  Books page
@endsection

@section('list')

<table class="table"> 
    <th> 
        Title
    </th>
    <th>
        Body
    </th>
    @foreach ($data as $item)
        <tr> 
            <td>
                {{$item["title"]}}
            </td> 
            <td>
                {{$item["body"]}}
            </td> 

        <tr> 
    @endforeach

</table>

@endsection