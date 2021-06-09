@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form method="GET" action="{{ route('contact.create')}}">
                            @csrf
                            <button type="submit" class="btn btn-primary">新規登録</button>
                        </form>
                        <form method="GET" action="{{ route('contact.index')}}" class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索する</button>
                        </form>
                        <h5>メンバーリスト</h5>
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>age</th>
                                    <th>sex</th>
                                    <th>url</th>
                                    <th>contact</th>
                                    <th>詳細</th>
                                </tr>
                            <tbody>
                        @foreach ($contacts as $item)
                            <tr>
                                <th>{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->age }}</td>
                                <td>{{ $item->sex }}</td>
                                <td>{{ $item->url }}</td>
                                <td>{{ $item->contact }}</td>
                                <td><a href="{{ route('contact.show',['id' => $item->id] )}}">詳細確認</a></td>
                            </tr>
                        @endforeach
                            </thead>
                            </tbody>
                        </table>
                        {{ $contacts->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
