@extends('layouts.app')

@section('myLayoutTitle', 'Create New List')

@section('cssFileListing')
    <link href="{{ asset('css/create.css') }}" rel="stylesheet">
@endsection

@section('content')

    <h1 id="createElem" class="title">Create New List</h1>

    <form id="createElem" method="POST" action="/albums">

        {{ csrf_field() }}

        <div class="form-group">
            <label class="label" for="list_name">List Title</label>
            <div class="control">
                <input type="text" class="input {{ $errors->has('list_name') ? 'is-danger' : '' }}" name="list_name" required value="{{ old('list_name') }}">
            </div>
        </div>
        <div id="selectBox" class="form-group">
            <label class="label" for="public">List Privacy</label>
            <select class="form-control" name="public">
                <option value=1>Public</option>
                <option value=0>Private</option>
            </select>
        </div>

        <div class="form-group">
            <div class="control">
                <button class="btn btn-outline-secondary"  type="submit" class="button is-link">Create List</button>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button class="btn btn-outline-secondary" type="button" onclick="location.href='/home'">Return To Home</button>
            </div>
        </div>
    
    </form>

@endsection