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
                        edit
                                {{$contact->id}}
                                {{$contact->name}}
                                {{$contact->email}}
                                {{$contact->age}}
                                {{$sex}}
                                {{$contact->url}}
                                {{$contact->contact}}
                        <form method="POST" action="{{ route('contact.destroy', ['id' => $contact->id]) }}">
                            @csrf
                            氏名
                        <input   placeholder="名前記入" name="name" type="name" value="{{ $contact->name }}">
                            <button type="submit" class="btn btn-primary">削除する</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
