@extends('layouts.admin')

@section('content')
    @if (Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info"> {{ Session::get('info') }} </p>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.create') }}" class="btn btn-success">Nuevo Post</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <p><strong>Aprendiendo Laravel</strong> <a href=" {{ route('admin.edit', ['id' => 1]) }} ">Editar</a></p>
            <p><strong>Aprendiendo Laravel</strong> <a href=" {{ route('admin.edit', ['id' => 2]) }} ">Editar</a></p>
            <p><strong>Aprendiendo Laravel</strong> <a href=" {{ route('admin.edit', ['id' => 3]) }} ">Editar</a></p>
        </div>
    </div>
@endsection
