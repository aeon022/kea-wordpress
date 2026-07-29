<?php
// Dateipfad: tools/export-breakdance.php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

$postIds = [139, 140, 141, 143, 3920, 4031, 4032, 4033, 4034, 4035, 4037];
$documents = [];

foreach ($postIds as $postId) {
    $post = get_post($postId);

    if (!$post instanceof WP_Post) {
        throw new RuntimeException(sprintf('Breakdance-Dokument %d fehlt.', $postId));
    }

    $documents[] = [
        'id' => $post->ID,
        'post_type' => $post->post_type,
        'post_status' => $post->post_status,
        'post_title' => $post->post_title,
        'post_name' => $post->post_name,
        'breakdance_data' => \Breakdance\Data\get_meta($postId, '_breakdance_data'),
        'template_settings' => \Breakdance\Data\get_meta($postId, '_breakdance_template_settings'),
    ];
}

$backup = [
    'schema' => 'kea-breakdance-backup/v1',
    'source_home' => home_url('/'),
    'documents' => $documents,
];
$directory = dirname(__DIR__) . '/data/breakdance';
$filename = $directory . '/templates.json';

if (!is_dir($directory) && !mkdir($directory, 0775, true) && !is_dir($directory)) {
    throw new RuntimeException('Das Exportverzeichnis konnte nicht erstellt werden.');
}

$json = wp_json_encode(
    $backup,
    JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
);

if (!is_string($json) || file_put_contents($filename, $json . PHP_EOL) === false) {
    throw new RuntimeException('Der Breakdance-Export konnte nicht geschrieben werden.');
}

echo sprintf('%d Breakdance-Dokumente exportiert.', count($documents)) . PHP_EOL;
