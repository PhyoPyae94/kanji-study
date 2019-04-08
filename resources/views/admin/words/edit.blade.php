@extends('layouts.app')

@section('content')
    
   @include('admin.includes.error')
    
    <div class="card">
        <div class="card-header">
            Edit Word: {{ ($word->title) }}
        </div>
        <div class="card-body">
            <form action="{{ route('word.update', ['id' => $word->id]) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Vocabulary</label>
                    <input type="text" name="title" class="form-control" value="{{ $word->title }}">
                </div>
                <div class="form-group">
                    <label for="title">Kanji</label>
                    <input type="text" name="kanji" class="form-control" value="{{ $word->kanji }}">
                </div>
                <div class="form-group">
                    <label for="title">Hiragana</label>
                    <input type="text" name="hiragana" class="form-control" value="{{ $word->hiragana}}">
                </div>
                <div class="form-group">
                    <label for="title">Note</label>
                    <textarea name="note" id="note" cols="5" rows="5" class="form-control">{{ $word->note }}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Update Vocab
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop