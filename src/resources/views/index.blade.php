@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Contact</h2>
  </div>
  <form class="form" action="/confirm" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input class="last_name" type="text" name="last_name" placeholder="例：山田" value="{{ old('last_name') }}" />
          <input class="first_name" type="text" name="first_name" placeholder="例：太郎" value="{{ old('first_name') }}" />
        </div>
        <div class="form__error">
          @error('last_name')
          {{ $message }}
          @enderror
          @error('first_name')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">性別</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__input--radio">
        <input type="radio" id="male" name="gender" value="male" checked>
        <label for="gender">
        男性
        </label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="gender">
        女性
        </label>
        <input type="radio" id="other" name="gender" value="other" />
        <label for="gender">
        その他
        </label>
      </div>
      <div class="form__error">
          @error('gender')
          {{ $message }}
          @enderror
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" size="60" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="tel" name="tel1" placeholder="080" value="{{ old('tel1') }}" />ー
          <input type="tel" name="tel2" placeholder="1234" value="{{ old('tel2') }}" />ー
          <input type="tel" name="tel3" placeholder="5678" value="{{ old('tel3') }}" />
        </div>
        <div class="form__error">
          @error('tel1')
          {{ $message }}
          @enderror
          @error('tel2')
          {{ $message }}
          @enderror
          @error('tel3')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷１−２−３" value="{{ old('address') }}" />
        </div>
        <div class="form__error">
          @error('address')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="building" placeholder="例:千駄ヶ谷101" value="{{ old('building') }}" />
        </div>
        <div class="form__error">
          @error('building')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせの種類</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <select class="form-control" id="category_id" name="category_content">
            <option value="" selected>
              選択してください
            </option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @if(old('category_id') == $category->id) selected @endif>{{ $category->content }}</option>
            @endforeach
          </select>
        <div class="form__error">
          @error('category_id')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせ内容</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
        </div>
        <div class="form__error">
          @error('detail')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">送信</button>
    </div>
  </form>
</div>
    @endsection

