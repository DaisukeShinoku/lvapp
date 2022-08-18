@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('お気に入りリスト') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <h1>お気に入りリスト</h1>
                <br>
                <a href="#" class="link-primary h2">藤沢駅→お風呂の王様講座渋谷店</a>
                <br>
                <br>
                <a href="#" class="link-primary h2">藤沢駅→お風呂の王様講座渋谷店</a>
                <br>
                <br>
                <a href="#" class="link-primary h2">藤沢駅→お風呂の王様講座渋谷店</a>
                <br>
                <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection