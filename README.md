# Laravel + Vue でガチャ実装してみる
今回は同一オリジンのSPAで開発してみる。

|項目|バージョン|説明|
|--|--|--|
|PHP|7.2||
|Laravel|6.2|APIサーバー|
|Vue.js|2.5|クライアント側|
|Vuex|3.6|ステート管理|
|Nginx|1.15.6|Webサーバー|
|MySQL|5.7|データベース|
|Redis|6.2.6|セッション管理|


## 環境構築

ket generate忘れず

### envファイル
```
$ copy .env.example .env
```

### mysqlの環境変数変えるときは
```
$ docker-compose down --volume
$ docker-compose up -d --build
```

### npm install
```
# npm install
# npm install --save vue-router
# npm install bootstrap-vue bootstrap
# npm audit fix
# npm run dev (or # npm run watch) //build
```

## 参考URL
https://www.membersedge.co.jp/blog/laravel-development-environment-with-docker-compose/
