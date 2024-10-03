@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Aggiungi post</h2>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.posts.store') }}" method="post">
                    @csrf
                   <div class="row">
                        <div class="col-12">
                            <label for="title" class="control-label">Titolo</label>
                            <input type="text" name="title" id="title" class="form-control form-control-sm" placeholder="Inserisci il titolo" value="{{ old('title') }}">
                        </div> 
                        <div class="col-12">
                            <label for="content" class="control-label">Contenuto</label>
                            <textarea name="content" id="content-post" class="form-control form-control-sm" rows="10" cols="30">{{ old('content') }}</textarea>
                        </div>  
                        <div class="col-12">
                            <button class="btn btn-sm btn-success" type="submit">Salva</button>
                        </div>
                   </div>
                </form>
            </div>
        </div>
    </div>
@endsection