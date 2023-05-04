@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row text-center">
        <h1>
            EDIT
        </h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <h1>
            Modifica: {{ $project->title }}
        </h1>

        <form action="{{ route('projects.update', $project) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $project->title) }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="client" class="form-label">Cliente</label>
                <input type="text" class="form-control @error('client') is-invalid @enderror" id="client" name="client" value="{{ old('client', $project->client) }}">
                @error('client')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="url" class="form-label">url</label>
                <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url" value="{{ old('url', $project->url) }}">
                @error('url')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10">{{ old('description', $project->description) }}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                Salva
            </button>                            
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
</div>

@endsection