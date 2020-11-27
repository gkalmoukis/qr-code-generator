@extends('layouts.app')

@section('title', __('New Source'))

@section('content')
<form action="{{route('qr.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="input-slug">{{__('Slug')}}</label>
        <input class="form-control" type="text" name="slug" placeholder="{{__('Add Slug')}}" id="input-slug">
    </div>

    <div class="form-group">
        <label for="input-data">{{__('QR Data')}}</label>
        <input class="form-control" type="text" name="data" placeholder="{{__('Add data')}}" id="input-data">
    </div>

    <button type="submit" class="btn btn-primary">{{__('Store')}}</button>
    <a href="{{route('qr.index')}}" class="btn btn-secondary">{{__('Back')}}</a>
</form>
@endsection
