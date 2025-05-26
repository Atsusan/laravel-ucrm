<?php

return [
    'accepted'             => ':attribute を承認してください。',
    'active_url'           => ':attribute は有効なURLではありません。',
    'after'                => ':attribute には :date より後の日付を指定してください。',
    'alpha'                => ':attribute には英字のみ使用できます。',
    'required'             => ':attribute は必須項目です。',
    'email'                => ':attribute には有効なメールアドレスを指定してください。',
    'unique'               => ':attribute はすでに存在しています。',
    'date'                 => ':attribute は正しい日付形式で指定してください。',
    'regex'                => ':attribute の形式が正しくありません。',
    // 追加のメッセージも必要に応じて書き足してください

    // 属性名のカスタマイズ
    'attributes' => [
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'title' => 'タイトル',
        'content' => '本文',
        'name' => '名',
        'memo' => 'メモ',
        'price' => '商品価格',
        'kana' => 'カナ',
        'tel' => '電話番号',
        'email' => 'メールアドレス',
        'postcode' => '郵便番号',
        'address' => '住所',
        'birthday' => '誕生日',
        'gender' => '性別'
    ],

    'max' => [
        'numeric' => ':attribute は :max 以下でなければなりません。',
        'file'    => ':attribute は :max キロバイト以下のファイルでなければなりません。',
        'string'  => ':attribute は :max 文字以内で入力してください。',
        'array'   => ':attribute は :max 個以下でなければなりません。',
    ],
];
