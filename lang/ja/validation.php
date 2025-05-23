<?php

return [
    'accepted'             => ':attribute を承認してください。',
    'active_url'           => ':attribute は有効なURLではありません。',
    'after'                => ':attribute には :date より後の日付を指定してください。',
    'alpha'                => ':attribute には英字のみ使用できます。',
    'required'             => ':attribute は必須項目です。',
    'email'                => ':attribute には有効なメールアドレスを指定してください。',
    'unique'               => ':attribute はすでに存在しています。',
    // 追加のメッセージも必要に応じて書き足してください

    // 属性名のカスタマイズ
    'attributes' => [
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'name' => '名前',
        'title' => 'タイトル',
        'content' => '本文',
    ],

    'max' => [
        'numeric' => ':attribute は :max 以下でなければなりません。',
        'file'    => ':attribute は :max キロバイト以下のファイルでなければなりません。',
        'string'  => ':attribute は :max 文字以内で入力してください。',
        'array'   => ':attribute は :max 個以下でなければなりません。',
    ],
];
