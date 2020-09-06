<?php

// url
$url = "https://www.walkerplus.com/event_list/today/ar0313110/meguro/";

// ファイル取得
$html = file_get_contents($url);

// ファイルへ出力
file_put_contents("./output.txt", $html);


