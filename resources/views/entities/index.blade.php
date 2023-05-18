{{-- This is the blade template for the index page of entites.It extends the layouts.app' template --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lemberg Solutions </h1>
    <h4>Technical Task  - Arul ,Lviv</h4>

    <div class="mb-3">
        <a href="{{route('entities.create')}}" class="btn btn-primary">Add Data</a>
    </div>

    {{-- Checks if there are entities to display --}}
    @if ($entities->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

     {{-- Iterates over each entity and display its information            --}}
                @foreach ($entities as $entity)
                <tr>
                    <td>{{$entity->title}}</td>
                    <td>{{strlen($entity->description) > 200 ? substr($entity->description, 0, 200).'' : $entity->description}}</td>
                    <td>{{$entity->date}}</td>
                    <td>


                        <div class="d-flex">

                             {{-- Link to edit the entity --}}
                            <a href="{{route('entities.edit',$entity)}}" class="btn btn-primary me-2">Edit</a>

                            {{-- Form to delete the entity --}}
                            <form action="{{route('entities.destroy',$entity)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete the entity?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Renders pagination links --}}
        {{$entities->links()}}

    @else

        <p>No Data found Please Add some data</p>

    @endif
</div>
@endsection
