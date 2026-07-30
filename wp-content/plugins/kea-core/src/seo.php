<?php
// Dateipfad: src/seo.php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Gibt schlanke Meta-Description, Open-Graph und Twitter-Card Tags im Head aus.
 */
function kea_core_render_seo_head_tags(): void
{
    if (is_admin() || is_feed() || is_robots()) {
        return;
    }

    $title = wp_get_document_title();
    $description = kea_core_get_seo_description();
    $url = is_singular() ? get_permalink() : home_url(add_query_arg([], $GLOBALS['wp']->request ?? ''));
    $site_name = get_bloginfo('name');
    $image_url = kea_core_get_seo_image_url();
    $og_type = is_singular('post') ? 'article' : 'website';

    echo "\n<!-- KEA Core Lightweight SEO -->\n";
    if (!empty($description)) {
        echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
    }

    // Open Graph Tags
    echo '<meta property="og:site_name" content="' . esc_attr($site_name) . '">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
    if (!empty($description)) {
        echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
    }
    echo '<meta property="og:url" content="' . esc_url($url) . '">' . "\n";
    echo '<meta property="og:type" content="' . esc_attr($og_type) . '">' . "\n";
    if (!empty($image_url)) {
        echo '<meta property="og:image" content="' . esc_url($image_url) . '">' . "\n";
    }

    // Twitter Cards
    echo '<meta name="twitter:card" content="' . esc_attr(!empty($image_url) ? 'summary_large_image' : 'summary') . '">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($title) . '">' . "\n";
    if (!empty($description)) {
        echo '<meta name="twitter:description" content="' . esc_attr($description) . '">' . "\n";
    }
    if (!empty($image_url)) {
        echo '<meta name="twitter:image" content="' . esc_url($image_url) . '">' . "\n";
    }
    echo "<!-- /KEA Core Lightweight SEO -->\n\n";
}

/**
 * Ermittelt eine präzise Meta-Description je nach Seitentyp.
 */
function kea_core_get_seo_description(): string
{
    if (is_front_page() || is_home()) {
        return 'Persönlich ausgewählte Sprachreisen für Erwachsene, Schüler, Lehrer und Unternehmen. Beratung & Organisation ohne Agenturaufschlag.';
    }

    if (is_singular()) {
        $post_id = get_the_ID();
        if (!$post_id) {
            return '';
        }

        // 1. Spezifische ACF-Intro-Felder prüfen
        $post_type = get_post_type($post_id);
        $acf_field_map = [
            'kea_destination' => 'kea_destination_intro',
            'kea_school'      => 'kea_school_intro',
            'kea_program'     => 'kea_program_intro',
        ];

        if (isset($acf_field_map[$post_type]) && function_exists('get_field')) {
            $intro = get_field($acf_field_map[$post_type], $post_id);
            if (is_string($intro) && !empty(trim($intro))) {
                return kea_core_clean_seo_text($intro);
            }
        }

        // 2. Beitrags-Auszug (Excerpt)
        if (has_excerpt($post_id)) {
            $excerpt = get_the_excerpt($post_id);
            if (!empty(trim($excerpt))) {
                return kea_core_clean_seo_text($excerpt);
            }
        }

        // 3. Fließtext-Fallback
        $post = get_post($post_id);
        if ($post && !empty($post->post_content)) {
            return kea_core_clean_seo_text($post->post_content);
        }
    }

    if (is_archive()) {
        $term = get_queried_object();
        if ($term instanceof WP_Term && !empty($term->description)) {
            return kea_core_clean_seo_text($term->description);
        }
        
        if (is_post_type_archive('kea_destination')) {
            return 'Entdecke handverlesene Reiseziele für deine Sprachreise – von Dublin über London bis Málaga.';
        }
        if (is_post_type_archive('kea_program')) {
            return 'Übersicht aller Sprachkurse und Programme von KEA Sprachreisen für jedes Sprachniveau und jede Zielgruppe.';
        }
        if (is_post_type_archive('kea_school')) {
            return 'Handverlesene Partnerschulen von KEA Sprachreisen mit geprüfter Qualität und hervorragender Ausstattung.';
        }
    }

    return '';
}

/**
 * Ermittelt das passende Vorschaubild für Open Graph / Social Media.
 */
function kea_core_get_seo_image_url(): string
{
    if (is_singular()) {
        $post_id = get_the_ID();
        if (!$post_id) {
            return '';
        }

        // Beitragsbild
        if (has_post_thumbnail($post_id)) {
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'large');
            if (is_array($image) && !empty($image[0])) {
                return $image[0];
            }
        }

        // CPT-spezifisches Hero-Bild via ACF
        if (function_exists('get_field')) {
            $hero = get_field('kea_destination_hero_image', $post_id);
            if (is_array($hero) && !empty($hero['url'])) {
                return $hero['url'];
            }
            if (is_numeric($hero)) {
                $src = wp_get_attachment_image_src((int) $hero, 'large');
                if (is_array($src) && !empty($src[0])) {
                    return $src[0];
                }
            }
        }
    }

    return '';
}

/**
 * Bereinigt Text von HTML-Tags, Shortcodes und überflüssigen Leerzeichen (max. 155 Zeichen).
 */
function kea_core_clean_seo_text(string $text, int $max_length = 155): string
{
    $text = strip_shortcodes($text);
    $text = wp_strip_all_tags($text);
    $text = preg_replace('/\s+/', ' ', $text);
    $text = trim($text ?? '');

    if (mb_strlen($text) > $max_length) {
        $text = mb_substr($text, 0, $max_length - 3) . '...';
    }

    return $text;
}
