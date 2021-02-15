@extends('layouts.app')

@section('title')
{{$item->name}} | 商品詳細
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10 offset-1 bg-white">
            <div class="row mt-3">
                <div class="col-8 offset-2">
                    @if (session('message'))
                    <div class="alert alert-{{ session('type', 'success') }}" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif
                </div>
            </div>

            @include('items.item_detail_panel', [
            'item' => $item
            ])

            <div class="row">
                <div class="col-8 offset-2">
                    @if ($item->isStateSelling)
                    <a href="{{route('item.buy', [$item->id])}}" class="btn btn-secondary btn-block">購入</a>
                    @else
                    <button class="btn btn-dark btn-block" disabled>売却済み</button>
                    @endif
                </div>
            </div>
            <div class="font-weight-bold mt-3">商品の説明</div>
            <div class="my-3">{!! nl2br(e($item->description)) !!}</div>

            <!--コメントを追加する -->
            <section>
            <div class="font-weight-bold mt-5">みんなのコメント</div>

                @forelse($item->comments as $comment)
                <div class="border-top p-4">
                    <time class="text-secondary">
                        {{ $comment->name }} /
                        {{ $comment->created_at->format('Y.m.d H:i') }} /
                        {{ $comment->id }}
                    </time>
                    <p class="mt-2">
                        {!! nl2br(e($comment->comment)) !!}
                    </p>
                </div>
                @empty
                <p class="text-muted mt-2">コメントはまだありません。</p>
                @endforelse
            </section>


            <form class="mb-4" method="POST" action="{{ route('comment.store') }}">
                @csrf

                <input name="item_id" type="hidden" value="{{ $item->id }}">

                <div class="form-group">
                    <label for="subject">
                        名前
                    </label>

                    <input id="name" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') }}" type="text">
                    @if ($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="body">
                        本文
                    </label>

                    <textarea id="comment" name="comment" class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}" rows="4">{{ old('comment') }}</textarea>
                    @if ($errors->has('comment'))
                    <div class="invalid-feedback">
                        {{ $errors->first('comment') }}
                    </div>
                    @endif
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        コメントする
                    </button>
                </div>
            </form>

            @if (session('commentstatus'))
            <div class="alert alert-success mt-4 mb-4">
                {{ session('commentstatus') }}
            </div>
            @endif
        </div>




    </div>
</div>
@endsection