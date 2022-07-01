
@extends('layouts.app')

@section('title')
    Create Contact
@endsection 

@section('content')
<!-- <form class="container w-75"> -->

{!! Form::open(['route' => 'contacts.store']) !!}
  <div class="mb-3">
    <label for="phone" class="form-label">phone</label>
    {!! Form::tel ('phone_num' , null , ['class' => 'form-control']) !!}
    <!-- <input type="text" class="form-control" id="phone"> -->
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
{!! Form::close() !!}

<!-- </form> -->
@endsection