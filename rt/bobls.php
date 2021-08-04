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
    return GetRuntimePath() . "/*." . $ext;
}

function GetSubGlob($subfolder, $ext)
{
    return GetRuntimePath() . "/" . $subfolder . "/*." . $ext;
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
    #print ("[" . $glob . "]\n");
    print ("[" . GetOwnerFromGlob($glob) . "]\n");
    $files = glob($glob);
    foreach ($files as $file) {
        $file = basename($file);
        print ($file) . "\n";
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
        $a = $_SERVER['argv'];
        if (sizeof($a) > 1)
        {
            return $a[1];
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
