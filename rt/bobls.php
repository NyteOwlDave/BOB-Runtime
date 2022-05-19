<?php

function GetWorkingPath()
{
    return getcwd();
}

function GetRuntimePath()
{
    return GetWorkingPath();
}

function GetMainGlob($ext)
{
    $s = GetRuntimePath() . "/"; 
    if ($ext == "*")
    {
        return $s . $ext;
    }
    else
    {
        return $s . "*." . $ext;
    }
}

function GetSubGlob($subfolder, $ext)
{
    $s = GetRuntimePath() . "/" . $subfolder . "/"; 
    if ($ext == "*")
    {
        return $s . $ext;
    }
    else
    {
        return $s . "*." . $ext;
    }
}

function GetSubFolders()
{
    $path = GetRuntimePath() . "/bobpath";
    $count = 0;
    $file = fopen($path, "r");
    if (!$file) return [];
    while ($line = fgets($file))
    {
        $result[$count] = trim($line);
        $count += 1;
    }
    return $result;
}

function GetOwnerFromGlob($glob)
{
    return basename(dirname($glob));
}

function ListFiles($glob)
{
    print ("[" . GetOwnerFromGlob($glob) . "]\n");
    $files = glob($glob);
    foreach ($files as $file) {
        if (is_file($file) || 1)
        {
            $file = basename($file);
            print ($file) . "\n";
        }
    }
}

function GetExtension() 
{
    if (isset($_GET["ext"]))
    {
        return $_GET["ext"];
    }
    if (isset($_SERVER['argv']))
    {
        $_SERVER['argv'];
        if ($_SERVER['argc'] > 1)
        {
            $a = $_SERVER['argv'][1];
            if ($a != "--all") return $a;
        }    
    }
    return "*";
}

function Main()
{
    $ext = GetExtension();
    ListFiles(GetMainGlob($ext));
    $subs = GetSubFolders();
    foreach ($subs as $s) {
        ListFiles(GetSubGlob($s, $ext));
    }
}

Main();

?>
