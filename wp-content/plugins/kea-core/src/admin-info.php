<?php
// Dateipfad: src/admin-info.php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

add_action('admin_menu', 'kea_core_register_admin_info_page');

function kea_core_register_admin_info_page(): void
{
    add_management_page(
        'KEA Core – System Status',
        'KEA Core Status',
        'manage_options',
        'kea-core-status',
        'kea_core_render_admin_info_page'
    );
}

function kea_core_render_admin_info_page(): void
{
    if (!current_user_can('manage_options')) {
        return;
    }

    $cpts = [
        'kea_destination' => ['label' => 'Reiseziele', 'icon' => 'dashicons-location-alt'],
        'kea_school'      => ['label' => 'Partnerschulen', 'icon' => 'dashicons-welcome-learn-more'],
        'kea_program'     => ['label' => 'Programme', 'icon' => 'dashicons-welcome-write-blog'],
        'kea_testimonial' => ['label' => 'Erfahrungen', 'icon' => 'dashicons-format-quote'],
        'kea_team_member' => ['label' => 'Team-Mitglieder', 'icon' => 'dashicons-businessperson'],
    ];

    $taxonomies = [
        'kea_language'           => 'Sprachen',
        'kea_country'            => 'Länder',
        'kea_target_group'       => 'Zielgruppen',
        'kea_course_type'        => 'Kursarten',
        'kea_age_group'           => 'Altersgruppen',
        'kea_interest'           => 'Interessen',
        'kea_accommodation_type' => 'Unterkunftstypen',
    ];

    ?>
    <div class="wrap kea-cyberpunk-dashboard">
        <style>
            .kea-cyberpunk-dashboard {
                background: #090a10;
                color: #e2e8f0;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
                margin: 20px 20px 20px 0;
                padding: 2.5rem;
                border-radius: 16px;
                border: 1px solid rgba(0, 240, 255, 0.25);
                box-shadow: 0 0 35px rgba(0, 240, 255, 0.08), inset 0 0 15px rgba(0, 0, 0, 0.5);
                position: relative;
                overflow: hidden;
            }
            .kea-cyberpunk-dashboard::before {
                content: "";
                position: absolute;
                top: 0; left: 0; right: 0; height: 3px;
                background: linear-gradient(90deg, #00f0ff, #ff0055, #00ff88);
            }
            .kea-cyber-header {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: space-between;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                padding-bottom: 1.5rem;
                margin-bottom: 2rem;
                gap: 1rem;
            }
            .kea-cyber-title {
                display: flex;
                align-items: center;
                gap: 1rem;
                margin: 0;
            }
            .kea-cyber-title h1 {
                font-family: ui-monospace, SFMono-Regular, "Fira Code", monospace;
                font-size: 1.75rem;
                font-weight: 800;
                letter-spacing: -0.02em;
                color: #ffffff;
                text-shadow: 0 0 12px rgba(0, 240, 255, 0.4);
                margin: 0;
            }
            .kea-cyber-badge {
                font-family: ui-monospace, monospace;
                background: rgba(0, 240, 255, 0.12);
                color: #00f0ff;
                border: 1px solid #00f0ff;
                padding: 0.35rem 0.75rem;
                border-radius: 6px;
                font-size: 0.8rem;
                text-transform: uppercase;
                letter-spacing: 0.1em;
                box-shadow: 0 0 10px rgba(0, 240, 255, 0.2);
            }
            .kea-cyber-author-tag {
                display: inline-flex;
                align-items: center;
                gap: 0.6rem;
                background: rgba(255, 0, 85, 0.1);
                border: 1px solid rgba(ff, 0, 85, 0.4);
                padding: 0.5rem 1rem;
                border-radius: 8px;
                text-decoration: none;
                color: #ff0055;
                font-family: ui-monospace, monospace;
                font-size: 0.85rem;
                font-weight: 700;
                transition: all 0.25s ease;
                box-shadow: 0 0 12px rgba(255, 0, 85, 0.15);
            }
            .kea-cyber-author-tag:hover {
                background: #ff0055;
                color: #ffffff;
                box-shadow: 0 0 20px rgba(255, 0, 85, 0.6);
                transform: translateY(-2px);
            }
            .kea-cyber-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
                gap: 1.75rem;
            }
            .kea-cyber-card {
                background: rgba(18, 22, 34, 0.75);
                border: 1px solid rgba(255, 255, 255, 0.08);
                border-radius: 12px;
                padding: 1.5rem;
                backdrop-filter: blur(10px);
                transition: border-color 0.3s ease, box-shadow 0.3s ease;
                position: relative;
            }
            .kea-cyber-card:hover {
                border-color: rgba(0, 240, 255, 0.4);
                box-shadow: 0 0 20px rgba(0, 240, 255, 0.1);
            }
            .kea-cyber-card-title {
                font-family: ui-monospace, monospace;
                font-size: 1rem;
                font-weight: 700;
                color: #00f0ff;
                text-transform: uppercase;
                letter-spacing: 0.08em;
                margin-top: 0;
                margin-bottom: 1.25rem;
                display: flex;
                align-items: center;
                justify-content: space-between;
                border-bottom: 1px solid rgba(255, 255, 255, 0.06);
                padding-bottom: 0.75rem;
            }
            .kea-status-list {
                list-style: none;
                padding: 0;
                margin: 0;
            }
            .kea-status-item {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 0.6rem 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.04);
                font-size: 0.9rem;
            }
            .kea-status-item:last-child {
                border-bottom: none;
            }
            .kea-pill-online {
                font-family: ui-monospace, monospace;
                font-size: 0.72rem;
                background: rgba(0, 255, 136, 0.15);
                color: #00ff88;
                border: 1px solid #00ff88;
                padding: 0.15rem 0.5rem;
                border-radius: 4px;
                text-shadow: 0 0 6px rgba(0, 255, 136, 0.4);
            }
            .kea-cyber-btn {
                display: flex;
                align-items: center;
                gap: 0.6rem;
                background: rgba(0, 240, 255, 0.06);
                color: #00f0ff;
                border: 1px solid rgba(0, 240, 255, 0.3);
                padding: 0.75rem 1.2rem;
                border-radius: 8px;
                text-decoration: none;
                font-family: ui-monospace, monospace;
                font-size: 0.85rem;
                font-weight: 600;
                transition: all 0.2s ease;
            }
            .kea-cyber-btn:hover {
                background: #00f0ff;
                color: #090a10;
                box-shadow: 0 0 16px rgba(0, 240, 255, 0.5);
                border-color: #00f0ff;
                transform: translateY(-2px);
            }
            .kea-cyber-footer {
                margin-top: 2.5rem;
                padding-top: 1.5rem;
                border-top: 1px solid rgba(255, 255, 255, 0.08);
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: space-between;
                font-family: ui-monospace, monospace;
                font-size: 0.82rem;
                color: #64748b;
                gap: 1rem;
            }
            .kea-cyber-footer a {
                color: #ff0055;
                text-decoration: none;
                font-weight: 700;
            }
            .kea-cyber-footer a:hover {
                text-decoration: underline;
                text-shadow: 0 0 8px rgba(255, 0, 85, 0.6);
            }
        </style>

        <!-- HEADER -->
        <div class="kea-cyber-header">
            <div class="kea-cyber-title">
                <h1>ABTEILUNG83 // KEA CORE</h1>
                <span class="kea-cyber-badge">v<?php echo esc_html(KEA_CORE_VERSION); ?></span>
            </div>
            <a href="https://abteilung83.com" target="_blank" rel="noopener noreferrer" class="kea-cyber-author-tag">
                <span>⚡ DEVEL BY ABTEILUNG83</span>
                <span>↗</span>
            </a>
        </div>

        <p style="font-family: ui-monospace, monospace; color: #94a3b8; font-size: 0.95rem; margin-bottom: 2rem;">
            <code>> SYSTEM_STATUS: OPERATIONAL // LESS NOISE. NICE DATA. NO BLOAT.</code>
        </p>

        <!-- GRID CARDS -->
        <div class="kea-cyber-grid">

            <!-- CARD 1: MODULES -->
            <div class="kea-cyber-card">
                <div class="kea-cyber-card-title">
                    <span>⚡ CORE MODULES</span>
                    <span class="kea-pill-online">SYSTEM READY</span>
                </div>
                <ul class="kea-status-list">
                    <li class="kea-status-item">
                        <span>KEA SEO & Social Graph</span>
                        <span class="kea-pill-online">[ ONLINE ]</span>
                    </li>
                    <li class="kea-status-item">
                        <span>Anfrage-Context Routing</span>
                        <span class="kea-pill-online">[ ONLINE ]</span>
                    </li>
                    <li class="kea-status-item">
                        <span>ACF Local JSON Versioning</span>
                        <span class="kea-pill-online">[ ACTIVE ]</span>
                    </li>
                    <li class="kea-status-item">
                        <span>Breakdance UI Accessibility</span>
                        <span class="kea-pill-online">[ ACTIVE ]</span>
                    </li>
                    <li class="kea-status-item">
                        <span>Magazin-Archiv Handler</span>
                        <span class="kea-pill-online">[ ACTIVE ]</span>
                    </li>
                </ul>
            </div>

            <!-- CARD 2: DATA METRICS -->
            <div class="kea-cyber-card">
                <div class="kea-cyber-card-title">
                    <span>📊 CONTENT TYPES & METRICS</span>
                    <span style="color:#64748b; font-size:0.8rem;">COUNT</span>
                </div>
                <ul class="kea-status-list">
                    <?php foreach ($cpts as $slug => $data) : ?>
                        <?php $count = wp_count_posts($slug)->publish ?? 0; ?>
                        <li class="kea-status-item">
                            <span>
                                <span class="dashicons <?php echo esc_attr($data['icon']); ?>" style="vertical-align:middle; font-size:1.1rem; color:#00f0ff;"></span>
                                <strong><?php echo esc_html($data['label']); ?></strong>
                            </span>
                            <span style="font-family:ui-monospace, monospace; color:#ffffff; font-weight:700; background:rgba(255,255,255,0.06); padding:0.15rem 0.6rem; border-radius:6px;">
                                <?php echo (int)$count; ?>
                            </span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- CARD 3: CONTROLS & LAUNCHPAD -->
            <div class="kea-cyber-card">
                <div class="kea-cyber-card-title">
                    <span>🚀 QUICK CONTROLS</span>
                    <span style="color:#ff0055; font-size:0.8rem;">ADMIN</span>
                </div>
                <p style="font-size:0.85rem; color:#94a3b8; margin-top:0; margin-bottom:1rem;">
                    Direkter Zugriff auf Redaktionsinhalte & Breakdance Templates:
                </p>
                <div style="display:flex; flex-direction:column; gap:0.6rem;">
                    <a href="<?php echo esc_url(admin_url('edit.php?post_type=kea_destination')); ?>" class="kea-cyber-btn">
                        <span>📍</span> <span>Reiseziele verwalten</span>
                    </a>
                    <a href="<?php echo esc_url(admin_url('edit.php?post_type=kea_school')); ?>" class="kea-cyber-btn">
                        <span>🏫</span> <span>Partnerschulen verwalten</span>
                    </a>
                    <a href="<?php echo esc_url(admin_url('edit.php?post_type=kea_program')); ?>" class="kea-cyber-btn">
                        <span>📚</span> <span>Programme verwalten</span>
                    </a>
                    <a href="<?php echo esc_url(admin_url('edit.php?post_type=breakdance_header')); ?>" class="kea-cyber-btn" style="border-color:rgba(255,0,85,0.4); color:#ff0055;">
                        <span>🎨</span> <span>Breakdance Templates</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- FOOTER BRANDING -->
        <div class="kea-cyber-footer">
            <div>
                KEA Core Architecture & Plugin Engine by <a href="https://abteilung83.com" target="_blank" rel="noopener noreferrer">Abteilung83</a>
            </div>
            <div>
                <span>Official Web: </span>
                <a href="https://abteilung83.com" target="_blank" rel="noopener noreferrer">https://abteilung83.com</a>
            </div>
        </div>
    </div>
    <?php
}
