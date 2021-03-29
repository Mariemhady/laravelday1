@extends('layout.layout')
@section('danger')
   Tracks page
@endsection

@section('list')
        
        <?php 
            // echo $data[0];
            // print_r($data);
            // foreach ($data as $item) {
            //     echo $item.;
            // }

        ?>

            <h1> Blade syntax </h1>

            {{-- {{strtolower($data)}} --}}

    {{-- <ol>
        @foreach ($data as $item)
          <li> new {{$item}} </li>
        @endforeach
    </ol> --}}

    {{-- {{count($data)}} --}}

    {{-- @if (count($data) == 5)
        the count not equal 3
    @elseif(count($data) == 3)
        the count  equal 3
    @else 
        the count greater than 3
    @endif --}}


    {{-- @unless (count($data) == 3)
        hello world
    @endunless --}}


    {{-- @foreach ($data as $item)
        @if($item == ".net")
            @continue
        @endif
        {{$item}}
    @endforeach --}}

{{-- 
    @forelse ($data as $item)
        {{$item}}
    @empty
        the array is empty 
    @endforelse --}}


    {{-- @php
        $x = 0;   
    @endphp

    @while ($x < 3)
        {{$x}}
        @php
            $x++    
        @endphp
    @endwhile --}}

{{-- <ul>
    @foreach ($data as $item)
        @if ($loop->first )
            the begain 
        @endif 
    
     <li>   {{$loop->count}} </li>
    

        @if ($loop->last )
            the end 
        @endif

    @endforeach
</ul> --}}

@endsection