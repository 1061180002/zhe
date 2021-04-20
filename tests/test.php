<?php
/**
 * FileName:test.php
 * Author:ZhangZhe
 * Email:1061180002@qq.com
 * Date:2021/4/20 0020
 * Time:15:36
 */
declare(strict_types=1);

require "../vendor/autoload.php";

use ZheTree\Main;

$array = [
    ["id" => 1, "name" => "衣服", "fid" => 0],
    ["id" => 2, "name" => "鞋", "fid" => 0],
    ["id" => 3, "name" => "男装", "fid" => 1],
    ["id" => 4, "name" => "运动鞋", "fid" => 2]
];
$res = Main::listToTreeMultiNotNull($array, 0, "id", "fid", "children");
exit(json_encode($res));
