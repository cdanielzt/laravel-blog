@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Articulo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Titulo *</label>
                            <input type="text" name="title" class="form-control"
                            required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input class="form-control-file" type="file" name="file">
                        </div>
                        <div class="form-group">
                            <label>Contenido *</label>
                            <textarea class="form-control" rows="6" name="body" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Contenido embebido</label>
                            <textarea class="form-control" name="iframe"></textarea>
                        </div>
                        <div class="form-group">
                            @csrf
                            <input type="submit" value="Enviar" class="btn btn-sm btn-primary float-right">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
