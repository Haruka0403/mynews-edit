<!-- phpテキスト11-->
{{-- layouts/progile.blade.phpを読み込む --}}
@extends('layouts.profile')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'プロフィールの編集')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
  <div class="col-md-8 mx-auto">
    <h2>プロフィール編集</h2>
    <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
      @if (count($errors) > 0)
        <ul>
          @foreach($errors->all() as $e)
            <li>{{ $e }}</li>
          @endforeach
        </ul>
      @endif
        <div class="form-group row">
          <label class="col-md-2" for="title">氏名</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-md-2" for="body">性別</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="gender" value="{{ $profile_form->gender }}">
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-md-2" for="body">趣味</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="hobby" value="{{ $profile_form->hobby }}">
          </div>
        </div>
        
        <div class="form-group row">
            <label class="col-md-2">自己紹介</label>
            <div class="col-md-10">
              <textarea class="form-control" name="introduction" rows="10">{{ $profile_form->hobby }}</textarea>
            </div>
          </div>
        
      <div class="form-group row">
      <div class="col-md-10">
        <input type="hidden" name="id" value="{{ $profile_form->id }}">
        {{ csrf_field() }}
        <input type="submit" class="btn btn-primary" value="更新">
      </div>
        </div>
    </form>
    
    <div class="row mt-5">
      <div class="col-md-4 mx-auto">
        <h2>編集履歴</h2>
        <ul class="list-group">
          @if ($profile_form->phistories != NULL)
            @foreach ($profile_form->phistories as $phistory)
              <li class="list-group-item">{{ $phistory->edited_at }}</li>
            @endforeach
          @endif
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection