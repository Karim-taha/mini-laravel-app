@extends('layout.layout')

@section('danger')
    Ttacks Page
    @endsection

    @section('list')
    <?php
        //echo $data[0];
    ?>

    {{-- @foreach ($data as $track)
        {{$track}}
    @endforeach

    @if(count($data) == 3)
        The count equals 3
    @else
        Not equal 3
    @endif

    @unless (count($data) == 5)
    Not equal 3
    @endunless --}}

    {{-- @foreach ($data as $track)
        @if($track == ".NET")
            @continue;
        @endif
        {{$track}}
    @endforeach --}}

    {{-- @forelse ($data as $track)
        {{$track}}
    @empty
        The array is empty
    @endforelse --}}


{{-- @php
 $x = 1;
@endphp
@while ($x <= 5)
 {{$x++}}
@endwhile --}}

<ul>
@foreach ($data as $track)
@if($loop->first)
The begin of array
@endif

<li>{{$loop->index}}{{$track}}</li>
<li>{{$loop->iteration}}{{$track}}</li>

@if($loop->last)
The end of array
@endif

@endforeach
</ul>











    @endsection
