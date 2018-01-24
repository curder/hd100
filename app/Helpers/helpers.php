<?php

/**
 * 无限极分类树 getTree($categories)
 * @param array $data
 * @param int $parent_id
 * @param int $level
 * @return array
 */
function getTree($data = [], $parent_id = 0, $level = 0)
{

    $tree = [];
    if ($data && is_array($data)) {
        foreach ($data as $v) {
            if ($v['parent_id'] == $parent_id) {
                $tree[] = [
                    'id' => $v['id'],
                    'level' => $level,
                    'title' => $v['title'],
                    'url' => $v['url'],
                    'order' => $v['order'],
                    'parent_id' => $v['parent_id'],
                    'children' => getTree($data, $v['id'], $level + 1),
                ];
            }
        }
    }
    return $tree;
}


/**
 * 循环获取子孙树 getSubTree($categories)
 *
 * @param array $data
 * @param int $id
 * @param int $level
 * @return array
 */
function getSubTree($data = [], $id = 0, $level = 0)
{
    static $tree = [];

    foreach ($data as $key => $value) {
        if ($value['parent_id'] == $id) {
            $value['laravel'] = $level;
            $tree[] = $value;
            getSubTree($data, $value['id'], $level + 1);
        }
    }
    return $tree;
}

/**
 * 递归获取子孙树 getSubTree2($categories, 1)
 *
 * @param array $data
 * @param int $parent_id
 * @param int $level
 * @return array
 */
function getSubTree2($data = [], $parent_id = 0, $level = 0)
{
    $tree = [];
    if ($data && is_array($data)) {
        foreach ($data as $key => $value) {
            if ($value['parent_id'] == $parent_id) {
                $value['laravel'] = $level;
                $tree[] = $value;
                $tree = array_merge($tree, getSubTree2($data, $value['id'], $level + 1));
            }
        }
    }
    return $tree;
}

/**
 * 通过pid获取所有上级分类 常用于面包屑导航 getParentsByParentId2($categories, 9)
 *
 *
 * @param array $data
 * @param $parent_id
 * @return array
 */
function getParentsByParentId($data = [], $parent_id)
{
    static $categories = [];

    if ($data && is_array($data)) {
        foreach ($data as $item) {
            if ($item['id'] == $parent_id) {
                $categories[] = $item;
                getParentsByParentId($data, $item['parent_id']);
            }
        }
    }
    return $categories;
}

function getParentsByParentId2($data = [], $parent_id)
{
    $categories = [];

    if ($data && is_array($data)) {
        foreach ($data as $item) {
            if ($item['id'] == $parent_id) {
                $categories[] = $item;
                $categories = array_merge($categories, getParentsByParentId2($data, $item['parent_id']));
            }
        }
    }
    return $categories;
}
