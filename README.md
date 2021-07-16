# day-number2label
曜日に対応した数字を、曜日の文字列に変換する

## Install

### 通常
Packagist には登録してないので、 `N2L.php` をDLなりコピペして好きなところに置く。

### composer で追加する
利用するプロジェクトの `composer.json` に以下を追加する。
```composer.json
"repositories": {
    "day-number2label": {
        "type": "vcs",
        "url": "https://github.com/shimoning/day-number2label.git"
    }
},

"require": {
    "shimoning/day-number2label": "^0.0.2"
},
```

その後以下でインストールする。

```bash
composer update shimoning/day-number2label
```

## Usage
### 基本
```php
N2L::convert(0); // -> Sunday
```

### 漢字にする
第2引数が言語指定
0: 英語
1: 漢字 (日本語)
```php
N2L::convert(1, N2L::LANGUAGE_TYPE_KANJI); // -> 月曜日
```

### 短くする
第3引数が文字長指定
0: 最長 (Sunday, 日曜日)
1: 短め (Sun, 日曜)
2: 最短 (Su, 日)
```php
N2L::convert(2, N2L::LANGUAGE_TYPE_KANJI, N2L::LENGTH_TYPE_MIDDLE); // -> 火曜
```

## License
[MIT](https://opensource.org/licenses/MIT)
