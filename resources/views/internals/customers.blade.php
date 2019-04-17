@extends('layout')
@section ('title', 'Customer List')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Customer List</h1>
            <form action="customers"class="pb-4" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{ old('name')}}" class="form-control">
                    {{$errors->first('name')}}
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" value="{{old('email')}}" class="form-control">
                    {{$errors->first('email')}}
                </div>
                 <button type="submit" class="btn btn-primary btn-block">Add Customer</button>

                 @csrf
             </form>
        </div>
    </div>
    <hr>
    <ul>
    @foreach($customers as $customer)
    <li>{{$customer->name}} <span class="text-muted">{{$customer->email}}</span></li>
    @endforeach
    </ul>

@endSection 