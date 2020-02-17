<?php
declare(strict_types=1);

/**
 * @param string $dir
 * @param array $buffer
 * @return array
 */
function findPhpFilesInDir(string $dir, array &$buffer): array
{
    if (!is_dir($dir)) {
        $buffer[] = $dir . ' - is not a directory!';
        return [];
    }

    if (!$dh = opendir($dir)) {
        $buffer[] = 'Can not open a directory: ' . $dir . '';
        return [];
    }

    static $phpFiles = [];
    while ($file = readdir($dh)) {
        if ($file === '.' || $file === '..') {
            continue;
        }
        if (is_dir($subDir = $dir . DIRECTORY_SEPARATOR . $file)) {
            findPhpFilesInDir($subDir);
            continue;
        }
        if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
            $phpFiles[] = $file;
        }
    }
    closedir($dh);

    return $phpFiles;
}

$buffer = [];
$phpFiles = findPhpFilesInDir('dir', $buffer);

echo '<pre>';
print_r([
    'files' => $phpFiles,
    'info' => $buffer,
]);
echo '</pre>';
