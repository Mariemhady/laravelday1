@extends('layout.layout')


@section('danger')
    Students List
@endsection


@section('list')


        <table class="table">
            <th>
                    name
            </th>
            <th>
                    email
            </th>

            @foreach ($data as $item)
                    <tr>
                        <td>
                            @php
                               dump($item) 
                            @endphp
                            {{$item["name"]}}
                            {{-- {{$item->name}} --}}
                        </td>
                        <td>
                            {{$item["email"]}}
                        </td>
                        
                    </tr>
            
            @endforeach
        </table>
       
@endsection