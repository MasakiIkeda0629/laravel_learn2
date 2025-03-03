@section('content')

<section>
    <form action="{{ route('index2') }}" method="POST">
        @csrf
        <div>
            <label for="name">お名前</label>
            <p>{{ old('name') }}</p>
            <input  type="hidden" name="name" value="{{ old('name') }}">
        </div>

        <div>
            <label for="email">メールアドレス</label>
            <p>{{ old('email') }}</p>
            <input  type="hidden" name="email" value="{{ old('email') }}">
        </div>

        <div>
            <label for="phone">電話番号</label>
            <p>{{ old('phone') }}</p>
            <input  type="hidden" name="phone" value="{{ old('phone') }}">
        </div>

        <div>
            <label for="body">お問い合わせ内容</label>
            <p>{{ old('body') }}</p>
            <input  type="hidden" name="body" value="{{ old('body') }}">
        </div>

        <div>
            <button type="submit" name="submitBtnVal" value="back"><a href="http://localhost/index.php/">戻る</a></button>
            <button type="submit" name="submitBtnVal" value="complete">送信</button>
        </div>
    </form>
</section>
