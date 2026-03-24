@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm-container">
    <div class="page-title">
        <h2>お問い合わせ内容確認</h2>
    </div>

    <form action="{{ route('store') }}" method="POST">
        @csrf
        <table class="form-table">
            <tr>
                <th>お名前</th>
                <td>
                    {{ $contact['name'] }}
                    <input type="hidden" name="name" value="{{ $contact['name'] }}">
                </td>
            </tr>

            <tr>
                <th>メールアドレス</th>
                <td>
                    {{ $contact['email'] }}
                    <input type="hidden" name="email" value="{{ $contact['email'] }}">
                </td>
            </tr>

            <tr>
                <th>電話番号</th>
                <td>
                    {{ $contact['tel'] }}
                    <input type="hidden" name="tel" value="{{ $contact['tel'] }}">
                </td>
            </tr>

            <tr>
                <th>お問合せ内容</th>
                <td>
                    {{ $contact['content'] }}
                    <input type="hidden" name="content" value="{{ $contact['content'] }}">
                </td>
            </tr>
        </table>

        <div class="btn-container">
            <button type="submit" class="submit-btn">送信</button>
        </div>
    </form>
</div>
@endsection