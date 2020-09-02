# README

## 箕面製餡所HP
<img width="1303" alt="スクリーンショット 2020-08-30 22 16 29" src="https://user-images.githubusercontent.com/62829792/91980197-da66c400-ed61-11ea-9aa5-9af6f16e26ec.png">

このサイトは大阪の老舗あんこ屋さん、箕面製餡所(架空)のために作ったHPです。<br>
お問い合わせをメールでできたり、教室をweb予約できたりと、<br>
ユーザーとお店が気軽にコミュニケーションを持てる場として作成いたしました。<br>

## Description
<img width="510" alt="スクリーンショット 2020-09-02 21 20 10" src="https://user-images.githubusercontent.com/62829792/91987284-d5f1d980-ed68-11ea-90ae-8a796008f0ee.png">

ユーザーはログインせずに、商品の紹介(一覧表示・詳細表示)ページの閲覧、<br>
お問い合わせフォームでのメール送信、カレンダーから教室を予約することができます。<br>
スタッフは、ログインすることで商品の投稿をすることができます。<br>
また、新しいスタッフのアカウントを追加したり、教室予約の一覧を見ることができます。<br>

## Usage
$ git clone https://github.com/atsukofu/minohseian.git<br>
上記コマンドでダウンロードし、ローカルサーバーで起動してください。

If you access on internet Web site, please access later URL.<br>
You can use this tool when you create an account.(Please sign up.)<br>
Web上でアクセスされる場合は下記URLにアクセスしてください。<br>
アカウントを作成していただくと、アプリを使うことができます。<br>
👉 https://minohseian.herokuapp.index.php

## Test account
スタッフ名：あつこふ<br>
パスワード：aaa<br>
スタッフログインページはフッターの「STAFF」リンクからご覧ください。<br>

## Commitment
このサイトを作る上でのこだわりは、ただ閲覧するだけではなく、情報のやり取りができるサイトを目指しました。<br>
そのためPHPを使用し予約データをテーブルに保存したり、お客様がメールフォームから気軽に連絡ができるように設計しました。<br>
また、プログラミング技術がなくてもフォームからサイトのメンテナンスができるよう、<br>
スタッフが定番商品を追加できるフォームを作成しました。

## Technology Used
- php
- HTML
- CSS
- JavaScript
- My SQL
- SendGrid

## Future Plans
- 予約データの制限機能
  1日あたりの予約数を制限できる機能を搭載し、<br>
  予約の管理・サイトを訪問されたお客様の利便性を向上したいです。
- データの編集・削除機能
  お店のスタッフが商品の情報を編集・削除できるように、<br>
  編集フォームと削除ボタンを搭載し、サイト上でメンテナンスできる機能を追加したいです。
