@extends('layouts.app')

@section('content')
<div class="container py-5">

    <h1 class="mb-5">
        NUOVO Project
    </h1>

    <form class="row g-3" action="{{ route('projects.store') }}" method="POST">
        @csrf

        <div class="col-12">
            <label for="client" class="form-label">title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <div class="col-12">
            <label for="client" class="form-label">client</label>
            <input type="text" class="form-control" id="client" name="client" value="{{ old('client') }}">
        </div>
        @error('client')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <div class="col-12">
            <label for="url" class="form-label">url</label>
            <input type="text" class="form-control" id="url" name="url" value="{{ old('url') }}">
        </div>
        @error('url')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description">{{ old('description') }}</textarea>
            @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="col-12">
            <button type="submit" class="btn btn-primary">Save new Project</button>
        </div>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
            
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>

@endsection