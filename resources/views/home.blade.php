@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active">検索</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">タブ2</a>
                    </li>
                </ul>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>出発地を選択</h1>
                    <h5>30分以内のスポットをオススメするよ！</h5>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1" selected>新宿駅</option>
                        <option value="2">横浜駅</option>
                        <option value="3">藤沢駅</option>
                        <option value="4">秩父駅</option>
                        <option value="5">千葉駅</option>
                    </select>
                    <br>
                    <h1>屋外 or 屋内</h1>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1" selected>どっちでもいい</option>
                        <option value="2">屋外</option>
                        <option value="3">屋内</option>
                    </select>
                    <br>
                    <h1>クルマ使う？</h1>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1" selected>どっちでもいい</option>
                        <option value="2">使う</option>
                        <option value="3">使わない</option>
                    </select>
                    <br>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary btn-lg">さあ出かけよう！</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
