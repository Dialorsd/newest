@extends('layouts.layout')

@section('content')
<a href="/" class="back"><- Back</a>
<div class="flex-center position-ref full-height">
   
  <div class="content">
      
        <div class="title m-b-md">
            Pizza List
        </div>

        @foreach($pizzas as $pizza)
          <div>
            {{ $pizza['name'] }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}
            <a href="pizzas/{{$pizza['id']}}"> -> click to redirect</a>
          </div>
        @endforeach

    </div>
</div>
@endsection