@extends('layouts.app')

@section('title')
プロフィール編集
@endsection

@section('content')
<div id="profile-edit-form" class="container">

  <div class="row">
    <div class="col-8 offset-2">
      @if (session('status'))
      <div class="alert alert-success text-center" role="alert">
        {{ session('status') }}
      </div>
      @endif
    </div>
  </div>

  <div class="col-8 offset-2 bg-white">
    <div class="font-weight-bold text-center border-bottom pb-3 pt-3" style="font-size: 24px">プロフィール編集</div>
    <form method="POST" action="{{ route('mypage.edit-profile') }}" class="p-5" enctype="multipart/form-data">
      @csrf

      {{-- アバター画像 --}}
      <span class="avatar-form image-picker">
        <input type="file" name="avatar" class="d-none" accept="image/png,image/jpeg,image/gif" id="avatar" />
        <label for="avatar" class="d-inline-block">
          @if (!empty($user->avatar_file_name))

          <img src="{{ Storage::disk('s3')->url('avatars/' . $user->avatar_file_name) }}" class="rounded-circle" style="object-fit: cover; width: 200px; height: 200px;">
          @else
          <img src="/images/avatar-default.svg" class="rounded-circle" style="object-fit: cover; width: 200px; height: 200px;">
          @endif
        </label>
      </span>

      {{-- 名前 --}}
      <div class="form-group mt-3">
        <label for="name">名前</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <div class="form-group mt-3">
        <label for="introduction">自己紹介</label>
        <input id="introduction" type="text" class="form-control @error('introduction') is-invalid @enderror" name="introduction" value="{{ old('introduction', $user->introduction) }}" required autocomplete="自己紹介" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <div class="form-group mt-3">
        <label for="URL">企業URL（企業のURLをみんなに共有しよう）</label>
        <input id="URL" type="text" class="form-control @error('URL') is-invalid @enderror" name="URL" value="{{ old('URL', $user->URL) }}" required autocomplete="企業URL" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <div class="form-group mb-0 mt-3">
        <button type="submit" class="btn btn-block btn-secondary">
          保存
        </button>
      </div>
    </form>
  </div>
</div>
@endsection