@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        show
                                {{$contact->id}}
                                {{$contact->name}}
                                {{$contact->age}}
                                {{$sex}}
                                {{$contact->url}}
                                {{$contact->contact}}
                                <div class="flex">
                        <form method="GET" action="{{ route('contact.edit',['id' => $contact->id]) }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">変更する</button>
                        </form>
                        <form method="POST" action="{{ route('contact.destroy',['id' => $contact->id]) }}" id="delete_{{ $contact->id }}">
                            @csrf
                            <a href="#" class="btn btn-danger" data-id="{{ $contact->id }}" onclick="deletePost(this);">削除する</a>
                        </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function deletePost(e) {
        'use strict';
        if(confirm('本当に削除していいですか？')) {
            document.getElementById('delete_' + e.dataset.id).submit();
        }
    }
</script>


@endsection
