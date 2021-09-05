# tokyoworker_crawler

東京ウォーカーのイベント情報を取得するPHP製の簡易Webクローラです。

# 使い方

* 下記の順番でコンソールより実行することを想定しております。
  * crawler_tokyoworker.php
  * scraping_tokyoworker2.php

※配列情報として取得した最新のイベント情報を標準出力表示します。

# 雑感・解説

現在(2020年時点)の東京WalkerというWebサイトの最新のイベント情報が、
トップページのheadタグ内にjsonデータとして埋め込まれていました。
HTMLコードからではなく、そのjsonデータをそのまま連想配列として展開しています。

※クローリング/スクレイピングをするよりもhead内にあるrawデータを利用する方向で
努力したほうがよいと思い、それを試してみたソースコードとなります。

# 免罪

ソースコードのご利用は自己責任で活用ください。
このような取得方法で東京Waler社からデータ取得していいかどうか等の確認をとっていません。
あくまで実験的にスクレイピングの学習の一途として行ったものです。

※Webサーバに負荷を掛ける行為を行えば罰せられる可能性もございますのでお気おつけください。

以上。
