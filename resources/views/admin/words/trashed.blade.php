@extends('layouts.app')

@section('content')
    
   @include('admin.includes.error')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
                                    Restore
                                </th>
                                <th>
                                    Delete
                                </th>
                            </thead>
                            <tbody>
                            @if($words->count() > 0)
                                @foreach($words as $word)
                                    <tr>
                                        <td>{{ $word->title }}</td>
                                        <td>{{ $word->hiragana }}</td>
                                        <td>{{ $word->kanji }}</td>
                                        <td><a href="{{ route('word.restore', ['id' => $word->id ]) }}" class="btn btn-xs btn-success">Restore</a></td>
                                        <td><a href="{{route('word.delete', ['id' => $word->id] ) }}" class="btn btn-xs btn-danger">Delete</a></td> 
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <th colspan = 6 class="text-center">No Words</th>
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