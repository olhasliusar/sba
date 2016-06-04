<?php
/**
 * Created by PhpStorm.
 * User: vlad_
 * Date: 11.04.2016
 * Time: 12:32
 */

namespace common\components\upload;


use yii\base\Object;
use yii\helpers\FileHelper;

class UploadFile extends Object
{
    public static $_files = [];
    public static $aliases = [];

    /**
     * TODO: fix bag add Exception no alias!
     *
     * @param string $alias
     * @param array $paths
     * @return bool
     *
     * @throws \yii\base\Exception
     */
    public static function checkPaths($alias, array $paths)
    {
        if (is_string($alias) && $paths) {
            foreach ($paths as $name => $path) {
                $fullPath = $alias . $path;
                if (FileHelper::createDirectory($fullPath)) {
                    self::$aliases[$name] = [
                        'fullPath' => $alias . $path,
                        'folder' => $path
                    ];
                }
                $name = null;
            }
            return self::$aliases;
        }
        return false;
    }

    /**
     * @return array
     */
    public static function loadFiles()
    {
        self::$_files = [];
        if (isset($_FILES) && is_array($_FILES)) {
            foreach ($_FILES as $class => $info) {
                self::loadFilesRecursive($class, $info['name'], $info['tmp_name'], $info['type'], $info['size'], $info['error']);
            }
        }
        return self::$_files;
    }

    /**
     * @param string $key
     * @param array|string $names
     * @param array|string $tempNames
     * @param array|string $types
     * @param array|string $sizes
     * @param array|string $errors
     */
    private static function loadFilesRecursive($key, $names, $tempNames, $types, $sizes, $errors)
    {
        if (is_array($names)) {
            foreach ($names as $i => $name) {
                self::loadFilesRecursive($key . '[' . $i . ']', $name, $tempNames[$i], $types[$i], $sizes[$i], $errors[$i]);
            }
        } elseif ($errors !== UPLOAD_ERR_NO_FILE) {
            self::$_files[$key] = new File([
                'name' => $names,
                'tempName' => $tempNames,
                'type' => $types,
                'size' => $sizes,
                'error' => $errors,
            ]);
        }
    }
}