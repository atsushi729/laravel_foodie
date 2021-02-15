@extends('layouts.app')

@section('title')
プロフィール
@endsection

@section('content')

<div class="container">

  <div class="row">
    <div class="col-8 offset-2 bg-white">

      <div class="font-weight-bold text-center border-bottom pb-3 pt-3" style="font-size: 24px">プロフィール</div>


      {{-- アバター画像 --}}
      <span class="avatar-form image-picker">
        <input type="file" name="avatar" class="d-none" accept="image/png,image/jpeg,image/gif" id="avatar" />
        <label for="avatar" class="d-inline-block">
          @if (!empty($user->avatar_file_name))
          <img src="/storage/avatars/{{$user->avatar_file_name}}" class="rounded-circle" style="object-fit: cover; width: 200px; height: 200px;">
          @else
          <img src="/images/avatar-default.svg" class="rounded-circle" style="object-fit: cover; width: 200px; height: 200px;">
          @endif
        </label>
      </span>

      {{-- 名前 --}}
      <div class="form-group mt-3">
        <label for="name" class="font-weight-bold">名前</label>
        <p class="mt-3"> {{ $user->name }} </p>
      </div>
      {{-- 自己紹介 --}}
      <div class="form-group mt-3">
        <label for="introduction" class="font-weight-bold">自己紹介</label>
        <p class="mt-3"> {{ $user->introduction }} </p>
      </div>
      {{-- URL --}}
      <div class="form-group mt-3" type="hidden">
        <label for="URL" class="font-weight-bold">URL</label>
        <p class="mt-3"> {{ $user->URL }} </p>
      </div>

      @if ($user->id == Auth::user()->id)
      <div class="form-group mb-0 mt-3">
        <a href="{{ route('mypage.edit-profile') }}">
          <button class="btn btn-block btn-secondary">
            編集する
          </button>
        </a>
      </div>
      @endif
    </div>
  </div>
</div>


@endsection