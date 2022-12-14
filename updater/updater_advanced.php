<?php
// version of updater user on otclient.ovh
// CONFIG
$files_dir = "./Tibia-client";
$files_url = "http://localhost/updater/Tibia/";
$files_and_dirs = array("data", "modules", "layouts", "init.lua");
$checksum_file = "checksums.txt";
$checksum_update_interval = 30; // seconds
$binaries = array(
    "WIN32-WGL" => "otclient_dx.exe",
    "WIN32-EGL" => "otclient_gl.exe",
    "WIN32-WGL-GCC" => "otclient_gcc_dx.exe",
    "WIN32-EGL-GCC" => "otclient_gcc_gl.exe",
    "X11-GLX" => "otclient_linux",
    "X11-EGL" => "otclient_linux",
    "ANDROID-EGL" => "" // we can't update android binary
);
// CONFIG END

function sendError($error) {
    echo(json_encode(array("error" => $error)));
    die();    
}

$data = json_decode(file_get_contents("php://input"));
if(!$data) {
   sendError("Invalid input data");
}

$version = isset($data->version) ?  $data->version : 0; // APP_VERSION from init.lua
$build = isset($data->build) ?  $data->build : ""; // 2.4, 2.4.1, 2.5, etc
$os = isset($data->os) ?  $data->os : "unknown"; // android, windows, mac, linux, unknown
$platform = isset($data->platform) ?  $data->platform : ""; // WIN32-WGL, X11-GLX, ANDROID-EGL, etc
$args = isset($data->args) ? $data->args : []; // custom args when calling Updater.check()
$binary = isset($binaries[$platform]) ? $binaries[$platform] : "";

if($build != "3.1" && strpos($platform, "ANDROID") !== false) {
    sendError("Outdated client ($build).\nUinstall current client and then download new from:\nhttp://otclient.ovh/otclientv8.apk");
}

$forVersion = "";
if($args && isset($args->version)&& $args->version) {
    $forVersion = strval($args->version);
}

$cache = null;
$cache_file = sys_get_temp_dir() . DIRECTORY_SEPARATOR . $checksum_file;
if (file_exists($cache_file) && (filemtime($cache_file) + $checksum_update_interval > time())) {
    $cache = json_decode(file_get_contents($cache_file), true);
}
if(!$cache) { // update cache
    $dir = realpath($files_dir);
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS));
    $cache = array(); 
    foreach ($rii as $file) {
        if (!$file->isFile())
            continue;
        $path = str_replace($dir, '', $file->getPathname());
        $path = str_replace(DIRECTORY_SEPARATOR, '/', $path);
        $cache[$path] = hash_file("crc32b", $file->getPathname()); 
    }
    file_put_contents($cache_file . ".tmp", json_encode($cache));
    rename($cache_file . ".tmp", $cache_file);
}
$ret = array("url" => $files_url, "files" => array(), "keepFiles" => empty($forVersion) ? false : true);
foreach($cache as $file => $checksum) {
    $base = trim(explode("/", ltrim($file, "/"))[0]); 
    if(strpos($file, "data/things") !== false && (empty($forVersion) || strpos($file, $forVersion) === false)) {
        continue;
    }
    if(in_array($base, $files_and_dirs)) {
        $ret["files"][$file] = $checksum;
    }
    if($base == $binary && !empty($binary)) {
        $ret["binary"] = array("file" => $file, "checksum" => $checksum);
    }
}

echo(json_encode($ret, JSON_PRETTY_PRINT));

?>
