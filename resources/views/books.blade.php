<x-layout>
  <h1>本一覧</h1>
  @foreach ($books as $book)
    {{ $book->title }}
  @endforeach
  <p>
    <a href="{{ url('/') }}">メニューへ戻る</a>
  </p>
  <p>
    <a href="{{ url('/book_new') }}">新規登録</a>
  </p>
</x-layout>
