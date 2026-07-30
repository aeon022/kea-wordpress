<?php
// Dateipfad: wp-content/plugins/kea-core/tests/search-collections.php
declare(strict_types=1);

require dirname(__DIR__, 4) . '/wp-load.php';

$cases = [
    'Reiseziele' => 'kea_destination',
    'partnerschule' => 'kea_school',
    'Programme' => 'kea_program',
    'Erfahrungen' => 'kea_testimonial',
    'Dublin' => '',
];

foreach ($cases as $term => $expected) {
    $actual = kea_core_get_search_collection_post_type($term);
    if ($actual !== $expected) {
        throw new RuntimeException(sprintf('%s: %s statt %s', $term, $actual, $expected));
    }
}

echo "KEA-Sammelsuche erfolgreich geprüft.\n";
