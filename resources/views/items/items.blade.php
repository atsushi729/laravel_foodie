@extends('layouts.app')

@section('title')
商品一覧
@endsection

@section('content')
<div class="container">
    <!-- <div class="jumbotron jumbotron-extend" style="background:url('images/farm.png'); height:400px; width: 300px;"> -->
    <div class="position-relative overflow-hidden align-items-center justify-content-center">
        <img class="img-fluid" src="{{ asset('images/farm.png')}}" alt="" style="height: 400px; width: 100%">
        <div class="position-absolute py-2 px-3 text-center rounded" style="left: 10%; bottom: 40%; color: white; background-color: rgba(0, 0, 0, 0.70); width: 80%;">
            <span class="ml-1 mx-auto d-block">
            <img src="/images/logo-2.png" style="height: 110px; width: 200px;" class="rounded mt-3"/>
            <div class="mt-3"><span class="font-weight-bold">foodie</span>はフードロスを解決するためのC to C プラットフォームです</div>
            <div class="mt-3">美味しく食べて欲しい、生産者さんのために食べて応援しよう！</div>
            </span>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-8 offset-2 bg-white">
        @foreach ($items as $item)
        <div class="d-flex mt-5 border position-relative container-mk">
            <div class="position-relative overflow-hidden">
                <img class="img-fluid" style="height: 140px; width: 140px;" src="/storage/item-images/{{$item->image_file_name}}">
                <div class="position-absolute py-2 px-3" style="left: 0; bottom: 20px; color: white; background-color: rgba(0, 0, 0, 0.70)">
                    <i class="fas fa-yen-sign"></i>
                    <span class="ml-1">{{number_format($item->price)}}</span>
                </div>
                <!--商品が購入済みの場合-->
                @if ($item->isStateBought)
                <div class="position-absolute py-1 font-weight-bold d-flex justify-content-center align-items-center" style="left: 0; top: 0; color: white; background-color: rgba(0, 0, 0, 0.70);  width: 140px; height: 140px; font-size: 20px;">
                    <span>完売</span>
                </div>
                @endif
            </div>
            <div class="flex-fill p-3">
                <small class="text-muted">{{$item->secondaryCategory->primaryCategory->name}} / {{$item->secondaryCategory->name}}</small>
                <h5 class="card-title mt-2 font-weight-bold" style="font-size: 20px">{{$item->name}}</h5>
            </div>
            <a href="{{ route('item', [$item->id]) }}" class="stretched-link"></a>
        </div>
        @endforeach
    </div>
</div>

<div class="d-flex justify-content-center">
    {{ $items->withQueryString()->links() }}
</div>
</div>

<!-- 出品するための処理-->

<a href="{{route('sell')}}" class="bg-success text-white d-inline-block d-flex justify-content-center align-items-center flex-column" role="button" style="position: fixed; bottom: 30px; right: 30px; width: 150px; height: 150px; border-radius: 25px;">
    <div style="font-size: 24px;">出荷</div>
    <div>
        <i class="fas fa-camera" style="font-size: 30px;"></i>
    </div>
</a>
@endsection