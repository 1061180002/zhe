<?php
/**
 * FileName:Main.php
 * Author:ZhangZhe
 * Email:1061180002@qq.com
 * Date:2021/4/20 0020
 * Time:15:00
 */
declare(strict_types=1);

namespace ZheTree;
/**
 * @method static getParents($list, $id, $pk = 'id', $pid = 'parentId')
 * @method static getParentsId($list, $id, $pk = 'id', $pid = 'parentId')
 * @method static listToTreeOne($list, $root = 0, $prefix = '', $pk = 'id', $pid = 'parentId', $html = 'html')
 * @method static listToTreeMulti($list, $root = 0, $pk = 'id', $pid = 'parentId', $child = 'child')
 * @method static listToTreeMultiNotNull($list, $root = 0, $pk = 'id', $pid = 'parentId', $child = 'child')
 * @method static list_to_tree($list, $root = 0, $pk = 'id', $pid = 'parentId', $child = 'child')
 */
final class Main {

    public static function __callStatic($name, $arguments) {
        return call_user_func_array([Tree::class, $name], $arguments);
    }
}
