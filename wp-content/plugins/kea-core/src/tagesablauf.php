<?php
// Dateipfad: src/tagesablauf.php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

add_shortcode('kea_tagesablauf', 'kea_core_tagesablauf_shortcode');

function kea_core_tagesablauf_shortcode(array $atts = []): string
{
    ob_start();
    kea_core_render_tagesablauf($atts);
    return (string) ob_get_clean();
}

function kea_core_render_tagesablauf(array $atts = []): void
{
    $post_id = get_the_ID();
    $items = [];

    // 1. ACF Repeater-Daten prüfen (falls vorhanden)
    if ($post_id && function_exists('get_field')) {
        $acf_items = get_field('kea_destination_schedule', $post_id) ?: get_field('kea_program_schedule', $post_id);
        if (is_array($acf_items) && !empty($acf_items)) {
            foreach ($acf_items as $item) {
                if (!empty($item['title'])) {
                    $items[] = [
                        'time'        => (string) ($item['time'] ?? ''),
                        'title'       => (string) ($item['title'] ?? ''),
                        'description' => (string) ($item['description'] ?? ''),
                        'tag'         => (string) ($item['tag'] ?? 'Ablauf'),
                    ];
                }
            }
        }
    }

    // 2. Editorial-Fallback, falls noch keine individuellen Daten gepflegt wurden
    if (empty($items)) {
        $items = [
            [
                'time'        => '08:30 – 09:00',
                'title'       => 'Frühstück & Guten Morgen',
                'description' => 'Gemeinsames Frühstück in der Gastfamilie oder Residenz & Vorbereitung auf den Tag.',
                'tag'         => 'Verpflegung',
            ],
            [
                'time'        => '09:00 – 12:30',
                'title'       => 'Interaktiver Sprachunterricht',
                'description' => 'Fokus auf freies Sprechen, Grammatik im Kontext und Landeskunde in Kleingruppen.',
                'tag'         => 'Unterricht',
            ],
            [
                'time'        => '12:30 – 14:00',
                'title'       => 'Mittagspause & Campus-Treff',
                'description' => 'Gemeinsames Mittagessen, Entspannen und Austausch mit internationalen Mitschülern.',
                'tag'         => 'Pause',
            ],
            [
                'time'        => '14:00 – 17:00',
                'title'       => 'Kultur- & Freizeitprogramm',
                'description' => 'Geführte Stadtentdeckungen, Museumsbesuche, Sport oder lokale Ausflüge.',
                'tag'         => 'Kultur & Freizeit',
            ],
            [
                'time'        => '18:30 – 21:00',
                'title'       => 'Abendessen & Abendausklang',
                'description' => 'Gemeinsames Abendessen, Pub-Abende oder Freizeit vor Ort.',
                'tag'         => 'Abend',
            ],
        ];
    }

    $instance_id = 'kea-schedule-' . wp_rand(1000, 9999);
    ?>
    <div class="kea-timeline-wrapper" id="<?php echo esc_attr($instance_id); ?>">
        <style>
            .kea-timeline-wrapper {
                background: #fffdf8;
                border: 1px solid #ded4c3;
                border-radius: 16px;
                padding: clamp(1.5rem, 4vw, 2.5rem);
                margin: 2rem 0;
            }
            .kea-timeline-header {
                margin-bottom: 2rem;
            }
            .kea-timeline-kicker {
                font-family: var(--hff-heading, serif);
                font-size: 0.85rem;
                text-transform: uppercase;
                letter-spacing: 0.12em;
                color: #e56f55;
                font-weight: 700;
                display: block;
                margin-bottom: 0.35rem;
            }
            .kea-timeline-title {
                font-family: var(--hff-heading, serif);
                font-size: clamp(1.4rem, 2.5vw, 1.85rem);
                font-weight: 600;
                color: #17201d;
                margin: 0;
            }
            .kea-timeline {
                position: relative;
                padding-left: 2rem;
                margin-top: 1.5rem;
            }
            .kea-timeline::before {
                content: "";
                position: absolute;
                left: 7px;
                top: 8px;
                bottom: 8px;
                width: 2px;
                background: #ded4c3;
            }
            .kea-timeline-node {
                position: relative;
                margin-bottom: 1.75rem;
            }
            .kea-timeline-node:last-child {
                margin-bottom: 0;
            }
            .kea-timeline-dot {
                position: absolute;
                left: -2rem;
                top: 4px;
                width: 16px;
                height: 16px;
                border-radius: 50%;
                background: #183f35;
                border: 3px solid #fffdf8;
                box-shadow: 0 0 0 2px #183f35;
            }
            .kea-timeline-meta {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                gap: 0.6rem;
                margin-bottom: 0.35rem;
            }
            .kea-timeline-time {
                font-family: ui-monospace, monospace;
                font-weight: 700;
                font-size: 0.9rem;
                color: #183f35;
                background: rgba(24, 63, 53, 0.08);
                padding: 0.2rem 0.6rem;
                border-radius: 6px;
            }
            .kea-timeline-tag {
                font-size: 0.75rem;
                text-transform: uppercase;
                letter-spacing: 0.08em;
                color: #75806a;
                font-weight: 600;
            }
            .kea-timeline-item-title {
                font-family: var(--hff-heading, serif);
                font-size: 1.15rem;
                font-weight: 600;
                color: #17201d;
                margin: 0 0 0.35rem 0;
            }
            .kea-timeline-item-desc {
                font-size: 0.95rem;
                line-height: 1.5;
                color: #55625e;
                margin: 0;
            }
        </style>

        <div class="kea-timeline-header">
            <span class="kea-timeline-kicker">ALLTAG VOR ORT</span>
            <h4 class="kea-timeline-title">Beispielwoche & Tagesablauf</h4>
        </div>

        <div class="kea-timeline">
            <?php foreach ($items as $item) : ?>
                <div class="kea-timeline-node">
                    <div class="kea-timeline-dot"></div>
                    <div class="kea-timeline-meta">
                        <?php if (!empty($item['time'])) : ?>
                            <span class="kea-timeline-time"><?php echo esc_html($item['time']); ?></span>
                        <?php endif; ?>
                        <?php if (!empty($item['tag'])) : ?>
                            <span class="kea-timeline-tag"><?php echo esc_html($item['tag']); ?></span>
                        <?php endif; ?>
                    </div>
                    <h5 class="kea-timeline-item-title"><?php echo esc_html($item['title']); ?></h5>
                    <?php if (!empty($item['description'])) : ?>
                        <p class="kea-timeline-item-desc"><?php echo esc_html($item['description']); ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php
}
