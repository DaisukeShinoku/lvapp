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
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
