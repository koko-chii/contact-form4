@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="contact-container">
        <div class="page-title">
            <h2>お問い合わせ</h2>
        </div>

        <form action="{{ route('confirm') }}" method="POST">
            @csrf
            <table class="form-table">
                <tr>
                    <th>
                        お名前 <span class="required-label">必須</span>
                    </th>
                    <td>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="テスト太郎">
                        @error('name')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </td>
                </tr>

                <tr>
                    <th>
                        メールアドレス <span class="required-label">必須</span>
                    </th>
                    <td>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="test@example.com">
                        @error('email')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </td>
                </tr>

                <tr>
                    <th>
                        電話番号 <span class="required-label">必須</span>
                    </th>
                    <td>
                        <input type="tel" name="tel" id="tel" value="{{ old('tel') }}" placeholder="09012345678">
                        @error('tel')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </td>
                </tr>

                <tr>
                    <th>お問合せ内容</th>
                    <td>
                        <textarea name="content" id="content" rows="8" placeholder="資料をいただきたいです">{{ old('content') }}</textarea>
                    </td>
                </tr>
            </table>

            <div class="btn-container">
                <button type="submit" class="submit-btn">送信</button>
            </div>
        </form>
    </div>
@endsection