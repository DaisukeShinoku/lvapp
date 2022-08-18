@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ここに行け！') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d52044.73145463975!2d139.4405167395108!3d35.38552234920258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e3!4m5!1s0x60184fcad532942d%3A0x83bd847775c8252d!2z56We5aWI5bed55yM6Jek5rKi5biCIOiXpOayoumnhQ!3m2!1d35.3388984!2d139.4874695!4m5!1s0x601856bee39019eb%3A0xd238e36740f756f2!2z56We5aWI5bed55yM5aSn5ZKM5biC5riL6LC377yV5LiB55uu77yS77ySIOOBiuOBteOCjeOBrueOi-anmCDpq5jluqfmuIvosLfpp4XliY3lupc!3m2!1d35.432817!2d139.464201!5e0!3m2!1sja!2sjp!4v1660828324611!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <br>
                    <br>
                    <div class="w-auto">
                        <button type="button" class="btn btn-primary btn-lg w-100">ここに行ってくる！</button>
                    </div>
                    <br>
                    <br>
                    <div>
                        <button type="button" class="btn btn-success btn-lg w-100">とりあえずお気に入りに登録する！</button>
                    </div>
                    <br>
                    <br>
                    <div>
                    <button type="button" class="btn btn-warning btn-lg w-100">やっぱ検索条件を変える！</button>
                    </div>
                    <br>
                    <br>
                    <div></div>
                    <button type="button" class="btn btn-danger btn-lg w-100">別のところがいい！</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection