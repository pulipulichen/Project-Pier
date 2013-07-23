<?php
//載入from檔案
$lang_from_dirname = "lang-from";
$lang_from_filenames = scandir(dirname(__FILE__).DIRECTORY_SEPARATOR.$lang_from_dirname);
$lang_from_filename = end($lang_from_filenames);
$lang_from = include $lang_from_dirname.DIRECTORY_SEPARATOR.$lang_from_filename;

//載入to檔案
$lang_to_dirname = "lang-to";
$lang_to_filenames = scandir(dirname(__FILE__).DIRECTORY_SEPARATOR.$lang_to_dirname);
$lang_to_filename = end($lang_to_filenames);
$lang_to = include $lang_to_dirname.DIRECTORY_SEPARATOR.$lang_to_filename;

$output = "";
foreach ($lang_from as $from_key => $from_value) {
    //先確認有沒有這個key
    if (key_exists($from_key, $lang_to) === FALSE) {
        //沒有這個key的話
        $output .= "  '".$from_key."' => "."'".addslashes($from_value)."'".",\n";
    }
}

if ($output != "") {
    $output = "
  // ".$lang_to_filename." Merge Result
".$output."
";
}

echo $output;