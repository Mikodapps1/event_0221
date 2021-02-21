@extends('layouts.app')
@section('content')

<title>content</title>
<br><br><br><br>
<div class="form_comment">
    <h1>お問い合わせフォーム</h1>
    <p>お問い合わせ頂きますと、<strong><span style="color :red">24時間以内</span></strong> に幹事からご返答致します。お急ぎの場合は、ページトップの連絡先までTELお願い致します。</p>
  </div>

  <form action="" name="" method="post">
    <table class="contact" cellspacing="0" cellpadding="0">
      <!-- テーブルのデフォルトの余白をなくす -->
      <tr>
        <th><span>必須</span><label for="username">お名前</label></th>
        <td><input type="text" name="username" id="username" placeholder="盛本 純平"></td>
      </tr>

      <tr>
        <th><span>必須</span><label for="email">アドレス</label></th>
        <td><input type="email" mail="email" id="email" placeholder="mikodapps@gmail.com"></td>
      </tr>

      <tr>
        <th><span>必須</span><label for="confirm">確認用アドレス</label></th>
        <td><input type="text" name="confirm" id="confirm" placeholder="mikodapps@gmail.com"></td>
      </tr>

      <!-- ラジオボタンで男か女かどちらかを選ばせるために、name属性を揃えている。 -->
      <tr>
        <th><span>必須</span><label>性別</label></th>
        <td><label for="men"></label> <input type="radio" name="sex" id="men">男性
          <label for="women"></label><input type="radio" name="sex" id="women">女性</td>
      </tr>

      <tr>
        <th><span>必須</span><label for="age">年齢</label></th>
        <td><input type="text" name="age" id="age"> 歳</td>
      </tr>

      <tr>
        <th><span>必須</span><label for="content">お問い合わせ内容</label></th>
        <td><textarea name="content" id="content" cols="45" rows="5" value="お問い合わせ内容を記入してください"></textarea></td>
      </tr>
    </table>
    <div class="submit_button">
      <input type="submit" class="submit" value="送信">
    </div>
  </form>


@endsection