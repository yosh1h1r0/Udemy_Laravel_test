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
                        <form method="POST" action="{{ route('contact.update', ['id' => $contact->id]) }}">
                            @csrf
                            氏名
                        <input   placeholder="名前記入" name="name" type="name" value="{{ $contact->name }}">
                        <br>
                            メールアドレス
                        <input   placeholder="Eメール記入" name="email" type="email" value="{{ $contact->email}}">
                            <br>
                            ホームページ
                        <input   placeholder="HP" name="url" type="url" value="{{ $contact->url }}">
                            <br>
                            性別
                            男性
                        <input   placeholder="性別" name="sex"  type="checkbox" value="0" @if($contact->sex === 0) Checked @endif >
                            
                            女性
                        <input   placeholder="性別" name="sex"  type="checkbox" value="1" @if($contact->sex === 1) Checked @endif>
                            <br>
                            年齢
                        <input   name="age" type="text" inputmode="numeric" value="{{ $contact->age}}">
                            <br>
                            内容
                            <br>
                            <textarea name="contact"  cols="30" rows="5">{{$contact->contact}}</textarea>
                            <br>
                            <button type="submit" class="btn btn-primary">更新する</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
