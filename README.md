# 淘宝API for laravel5.5

## laravel
### 安装
`composer require oyleanu/taobao-top-client`
### 配置
* 在config/app.php中的providers数组中添加`Oyleanu\TopClient\TopClientServiceProvider::class,`
* 在config/app.php中的aliases数组中添加`'TopClient' => Oyleanu\TopClient\Facades\TopClient::class,`
* 执行 `php artisan vendor:publish --provider="Oyleanu\TopClient\TopClientServiceProvider"` 生成配置文件
* 编辑.env文件，设置appid,appsecret
### 示例代码
```php
use Oyleanu\TopClient\Facades\TopClient;
use Top\Request\TbkItemGetRequest;

$topclient = TopClient::connection();
$req = new TbkItemGetRequest;
$req->setFields("num_iid,title,pict_url,reserve_price,zk_final_price,user_type,provcity,item_url");
$req->setQ('手机');
$req->setSort("tk_total_sales");
$req->setPageNo('1'); //可能需要字符串数组才能正常分页
$req->setPageSize('40');
$resp = $topclient->execute($req);
dd($resp);
```
