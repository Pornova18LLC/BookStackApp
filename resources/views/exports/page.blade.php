@extends('exports.layout')

@section('title', $entity->name)

@section('content')
    @include('pages.page-display', ['page' => $entity])

    <hr>

    <div class="text-muted text-small">
        @include('exports.entity-meta', ['entity' => $entity])
    </div>
@endsection
