@extends('layouts.basic_form_builder', ['formUri' => $formAction, 'title' => $formTitle ])

@section('fields')
    <div class="form-group pb-3">
        <label class="label" for="name">Name</label>
        <input class="form-control" name="name" placeholder="Name" value="{{ $sport->name ?? '' }}" />
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    @if (isset($sport))
        @method('PUT')
    @endif
@stop