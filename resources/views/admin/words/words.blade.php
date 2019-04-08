@extends('layouts.app')

@section('content')
    @include('admin.includes.error')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                <div class="card-header">
                    You can edit and delete yours words in this section.
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <th>
                                Vocab
                            </th>
                            <th>
                                Hiragana
                            </th>
                            <th>
                                kanji
                            </th>
                            <th>
                                Edit
                            </th>
                            <th>
                                trash
                            </th>
                        </thead>
                        <tbody>
                            @if($words->count() > 0)
                                @foreach($words as $word)
                                    <tr>
                                        <td>{{ $word->title }}</td>
                                        <td>{{ $word->hiragana }}</td>
                                        <td>{{ $word->kanji }}</td>
                                        <td><a href="{{ route('word.edit', ['id' => $word->id])}}" class="btn btn-xs btn-info">Edit</a></td>
                                        <td><a href="#" class="btn btn-xs btn-danger">Trash</a></td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <th colspan = 5 class="text-center">No Words</th>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                </div>    
            </div>
        </div>
    </div>
@stop