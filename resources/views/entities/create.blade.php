{{-- This is the blade template for the create form of entities . It extends the 'layouts.app' template --}}

@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Add Data</h1>


    {{-- Display validation errors, if any --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif


    {{-- Form for adding a new entity --}}
    <form action="{{route('entities.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" id="description" name="description" required>{{old('description')}}</textarea>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{old('date')}}" required>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>

    </form>
</div>

@endsection
