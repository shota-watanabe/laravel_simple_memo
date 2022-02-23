## PHP・Laravelフレームワークを利用したシンプルメモアプリ
# [メモアプリ](http://simple-memo0919.com/)
## サービス概要
スマホとPCで使えるシンプルメモアプリです。  
メモにタグを付与することができ、タグごとに分類することができます。

会員登録ページから新規会員登録もできますが、ひとつこちらでアカウントを用意しました。  
ログイン画面でゲストログインボタンを押すと、メールアドレスとパスワードを打たなくても、簡単にテストユーザーとしてログインできます。  

ゲストログインで使用しているアカウントはこちらになります。  
メールアドレス：`test@test.com`  
パスワード：password1234

<img width="1082" alt="メモ" src="https://user-images.githubusercontent.com/34031637/133964696-a546adfa-b24b-4b36-96fa-bd8e2875913f.png">

## ER図

<img width="1024" alt="メモ3" src="https://user-images.githubusercontent.com/34031637/133967750-0dd53efb-55ca-4669-9f14-4ba0be27a500.png">

## 基本機能
- 会員登録（メールアドレスとパスワードで登録）
- ログイン、ログアウト
- リレーショナル・データベースの基本機能（作成、編集、削除、一覧、詳細）
- レスポンシブデザインによるスマートフォン対応　　
## 追加機能
- ゲストログイン
## 使用技術
- PHP 7.4
- Laravel8
- MySQL5.7
- html/css
- bootstrap
- JavaScript
- AWS
    - VPC
    - EC2
    - RDS
    - Route53
