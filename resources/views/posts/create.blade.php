@extends('layouts')

@section('content')

      <div class="container mt-4">
          <div>
              <h1>投稿する</h1>
              <form method="POST" action="{{ route('posts.store') }}">
                  {{ csrf_field() }}
        
                  <field mb-4>
                    <div class="form-group">
                      <label for="title">タイトル</label>
                      <input id="title" class="form-control" name="title" type="text">
                    </div>
                    <div>
                      <label for="body">本文</label>
                      <textarea id="body" class="form-control" name="body" type="text"></textarea>
                    </div>
                    <div class="mt-4">
                    <a class="btn btn-secondary" href="{{ route('top') }}">キャンセル</a>
                    <button class="btn btn-primary" type="submit">投稿する</button>
                    </div>
                  </field>
              </form>
          </div>
      </div>


@endsection('content')