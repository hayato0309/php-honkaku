<?php
require_once dirname(__FILE__) . '/../../vendor/autoload.php';
$goutteClient = new Goutte\Client();
$crawler = $goutteClient->request('GET', 'http://localhost/php-honkaku/goutte/blog-entries.html');

/**
 * 1番目のイベントタイトルである「12/1(土)開催！フィールドアスレチック公演で遊ぼう」を出力する例
 */
echo '<h2>●1番目のイベントタイトルに様々なルートでアクセスする例</h2>';

echo $crawler->filter('.posts > h1')->first()->text(), PHP_EOL;

echo $crawler->filter('.posts')->eq(0)->filter('h1')->text(), PHP_EOL;
