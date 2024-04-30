@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register-form__content">
  <div class="contact-form__heading">
    <h2>Register</h2>
  </div>
  <form class="form" action="/register" method="post"> 
    @csrf
    <div class="form__group">
      <p class="form-item-label">
        お名前
      </p>
      <input type="text" name="name" class="form-item-input" placeholder="例:山田　太郎" value="{{ old('name') }}"/>
      <div class="form__error">
        @error('name')
        {{ $message }}
        @enderror
      </div>      
    </div>
    <div class="form__group">
      <p class="form-item-label">
        メールアドレス
      </p>
      <input type="email" name="email" class="form-item-input" placeholder="例）test@example.com" value="{{ old('email') }}"/>
      <div class="form__error">
        @error('email')
        {{ $message }}
        @enderror
      </div>      
    </div>
    <div class="form__group">
      <p class="form-item-label">
        パスワード
      </p>
      <input type="password" name="password" class="form-item-input" placeholder="例:coachtech1106" value="{{ old('password') }}"/>
      <div class="form__error">
        @error('password')
        {{ $message }}
        @enderror
      </div>      
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">確認用パスワード</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="password" name="password_confirmation" />
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">登録</button>
    </div>
  </form>
</div>
@endsection

