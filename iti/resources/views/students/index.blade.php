@extends('layout.layout')


@section('danger')
    Students List
@endsection


@section('list')

<a href="{{ route('newstudent.create') }}" class="btn btn-info"> Add </a>

        <table class="table">
            <th>
                    name
            </th>
            <th>
                    email
            </th>
            <th>
                Show
            </th>
            <th>
                Edit
            </th>

            @foreach ($data as $item)
                    <tr>
                        <td>
                           
                            {{$item["name"]}}
                            {{-- {{$item->name}} --}}
                        </td>
                        <td>
                            {{$item["email"]}}
                        </td>

                        <td>
                            
                            <a href="{{ route('students.show',$item->id) }}" class="btn btn-info"> Show</a>
                        </td>
                        <td>
                            <a href="{{ route('students.edit',$item) }}" class="btn btn-warning"> Edit</a>
                        </td>
                        <td>
                            <a href="{{ route('students.destroy',$item->id) }}" class="btn btn-danger"> Delete</a>
                        </td>
                    </tr>
            
            @endforeach
        </table>
       
@endsection