<?php

function prefix_path(string $path): string
{
    if (!str_starts_with($path, '/')) {
        $path = "/{$path}";
    }

    return $path;
}

function public_path(string $path): string
{
    $path = prefix_path($path);

    return __DIR__ . '/../public' . $path;
}

function asset_url(string $path, string $manifestDirectory = 'dist'): string
{
    $path = prefix_path($path);

    if (is_file(public_path($manifestDirectory . '/hot'))) {
        //todo read the url from hot file
        $url = '//localhost:8080';

        return "{$url}{$path}";
    }

    $manifestPath = public_path($manifestDirectory . '/mix-manifest.json');

    if (!is_file($manifestPath)) {
        throw new Exception('The manifest does not exist.');
    }

    $manifest = json_decode(file_get_contents($manifestPath), true);

    if (!isset($manifest[$path])) {
        throw new Exception("Unable to locate asset file: {$path}.");
    }

    return "{$manifestDirectory}{$manifest[$path]}";
}