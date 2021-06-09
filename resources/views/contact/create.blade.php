@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <form method="POST" action="{{route('contact.store')}}">
                            @csrf
                            氏名
                        <input   placeholder="名前記入" name="name" type="name">
                        <br>
                            メールアドレス
                        <input   placeholder="Eメール記入" name="email" type="email">
                            <br>
                            ホームページ
                        <input   placeholder="HP" name="url" type="url">
                            <br>
                            性別
                            男性
                        <input   placeholder="性別" name="sex" value="0" type="checkbox">
                            女性
                        <input   placeholder="性別" name="sex" value="1" type="checkbox">
                            <br>
                            年齢
                        <input   name="age" type="text" inputmode="numeric">
                            <br>
                            内容
                            <br>
                            <textarea name="contact"  cols="30" rows="5"></textarea>
                              <button type="submit" class="btn btn-primary">登録する</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
