@extends('layouts.page')

@section('header')

<h2>Hello</h2>

@endsection


@section('content')

    <form action="/send " method="POST">
    @csrf

        <select name="from">
            <option value="0">Dollar</option>
            <option value="1">Peso</option>
        </select>

        <select name="to">
            <option value="0">Dollar</option>
            <option value="1">Peso</option>
        </select>

        <input type="text" name="valueFrom" placeholder="From">

        <input type="submit" vallue="submit">
    </form>

@endsection



@section('footer')

<h2>Footer</h2>

@endsection






