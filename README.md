<p align="center"><img width="499" alt="foodie:readme" src="https://user-images.githubusercontent.com/75428655/108668690-f122f200-751e-11eb-8c3f-01fce18dc0fb.png"></p>


<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## "foodie"とは
"foodie"はフードロスを解決するための、C2Cオンラインマーケットプレイスです。

賞味期限が近くなってしまった観光地のお土産、コロナ禍で売れ残った生鮮食品、規格外の野菜など、定価よりも低い価格で販売できるプラットフォームを作成することにより、欲しい人に届ける、生産者を助けたいという思いで、このアプリケーションを作成しました。

## アプリケーションの機能・技術一覧

"foodie"内で使用した主な技術・機能は以下の通りです

<p>【主な技術】</p>

- AWS：EC2（本番環境）
- AWS：S3（画像保存）
- docker（開発環境）
- PHP 7.3
- Laravel 7.25
- PHPUnit（テスト実施）
- N+1問題対応

<p>【主な機能】</p>

- 商品一覧表示機能
- 商品詳細表示機能
- 商品投稿機能
- キーワード検索機能
- カテゴリ別検索機能
- 決済機能
- 管理ユーザ登録機能
- 管理ユーザ編集機能
- 管理ユーザ遷移機能
- 管理ユーザログイン機能
- 管理ユーザログアウト機能
- パスワードリセット機能
- 画像ファイルのアップロード機能
- 画像ファイルの保存機能
- DBテーブルのリレーション管理
- DBトランザクションの制御機能
- 投稿保存機能
- コメント機能
- テストユーザー機能
- テスト機能


## Description

"foodie" is C2C online marketplace with laravel. The purpose of this application is to stop food wasting in paticular places and these food shoud be delivered to needy people. In this application, you can sell your vegetables, fish, meat and sweets. Of course, you can buy these one with low price. 


## Demo

<p>This is a foodie's top page. Even if you did't login, you can check what items you can buy or sell. When you what to buy or sell something you produce, you need to login this site. However, you can register easily.</p>
<p>I set up test user account, so you can test selling procedure and buying procedure as a test user.</p>
 
<img width="915" alt="スクリーンショット 2021-02-24 14 23 44" src="https://user-images.githubusercontent.com/75428655/108952287-915a5180-76ac-11eb-8102-18bab047a86b.png">

<p>Once you click items, you will move to item detail page. In this page, you can leave comments to convey you gratitude for item producer. Moreover, if you click the link item producer, you can move to store page.</p>

<img width="760" alt="スクリーンショット 2021-02-24 11 30 33" src="https://user-images.githubusercontent.com/75428655/108952800-818f3d00-76ad-11eb-9d00-8079f152c6a4.png">






## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## Author

[Atsushi Hatakeyama](https://github.com/atsushi729).
