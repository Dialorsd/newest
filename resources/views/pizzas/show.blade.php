@extends('layouts.layout')

@section('content')
<a href="/pizzas" class="back"><- Back</a>
<div class="wrapper pizza-details">
    <h1>Order for {{$pizza->name}}</h1>
    <p class="type">Type - {{   $pizza->type    }}</p>
    <p class="base">Base - {{   $pizza->base    }}</p>
    <p class="toppings">Extra toppings:</p>
    <ul>
        @foreach($pizza->toppings as $topping)
        <li>{{$topping}}</li>
        @endforeach
    </ul>
    <form action="{{route('pizzas.destroy',$pizza->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button>Complete Order</button>
</form>
</div>

@endsection