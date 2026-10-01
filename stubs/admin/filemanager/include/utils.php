<?php

function deleteDir($dir)
{
}
function duplicate_file($old_path, $name)
{
}
function rename_file($old_path, $name, $transliteration)
{
}
function rename_folder($old_path, $name, $transliteration)
{
}
/**
 * Gets file extension from filepath
 * test.example.jpg returns jpg
 * test.example returns example
 *
 * @param $path
 * @return array|string|string[]|null
 */
function getFileExtension($path)
{
}
function create_img_gd($imgfile, $imgthumb, $newwidth, $newheight = "")
{
}
function create_img($imgfile, $imgthumb, $newwidth, $newheight = "")
{
}
function makeSize($size)
{
}
function foldersize($path)
{
}
function create_folder($path = \false, $path_thumbs = \false)
{
}
function check_files_extensions_on_path($path, $ext)
{
}
function check_files_extensions_on_phar($phar, &$files, $basepath, $ext)
{
}
function fix_filename($str, $transliteration)
{
}
function fix_dirname($str)
{
}
function fix_path($path, $transliteration)
{
}
function base_url()
{
}
function config_loading($current_path, $fld)
{
}
/**
 * Check if memory is enough to process image
 *
 * @param string $img
 * @param int $max_breedte
 * @param int $max_hoogte
 *
 * @return bool
 */
function image_check_memory_usage($img, $max_breedte, $max_hoogte)
{
}
function endsWith($haystack, $needle)
{
}
function new_thumbnails_creation($targetPath, $targetFile, $name, $current_path, $relative_image_creation, $relative_path_from_current_pos, $relative_image_creation_name_to_prepend, $relative_image_creation_name_to_append, $relative_image_creation_width, $relative_image_creation_height, $fixed_image_creation, $fixed_path_from_filemanager, $fixed_image_creation_name_to_prepend, $fixed_image_creation_to_append, $fixed_image_creation_width, $fixed_image_creation_height)
{
}
/**
 * Get a file from a URL using whichever mechanism is enabled
 * @param string $url the url to get the file from
 * @return bool|string false or the file's string content
 */
function get_file_by_url($url)
{
}
/**
 * @param string $sourcePath
 * @param array $paths List of paths to compare
 */
function stopIfSameDir($sourcePath, array $paths)
{
}
