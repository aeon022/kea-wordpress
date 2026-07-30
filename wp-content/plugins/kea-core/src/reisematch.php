<?php
// Dateipfad: src/reisematch.php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

add_shortcode('kea_reisematch', 'kea_core_reisematch_shortcode');

function kea_core_reisematch_shortcode(array $atts = []): string
{
    ob_start();
    kea_core_render_reisematch($atts);
    return (string) ob_get_clean();
}

/**
 * Rendert den KEA Reise-Match Wizard mit KEA-spezifischen Kursarten, Font Awesome SVGs & KEA CTA Button Styling.
 */
function kea_core_render_reisematch(array $atts = []): void
{
    $default_atts = [
        'kicker'         => 'KEA INSPIRATION & GUIDE',
        'title'          => 'Der KEA Reise-Match',
        'subtitle'       => 'Finde in 3 kurzen Klicks das ideale Sprachreiseziel für dich',
        'step1_question' => '1. Für wen ist die Sprachreise gedacht?',
        'step2_question' => '2. Welche Atmosphäre beflügelt dich vor Ort?',
        'step3_question' => '3. Welche Kursart passt zu deinen Zielen?',
        'button_text'    => 'Beratung starten',
        'bg_color'       => '',
        'border_color'   => '',
        'text_color'     => '',
        'accent_color'   => '',
    ];

    $config = shortcode_atts($default_atts, $atts, 'kea_reisematch');
    $instance_id = 'kea-match-' . wp_rand(1000, 9999);

    $inline_styles = [];
    if (!empty($config['bg_color'])) {
        $inline_styles[] = 'background-color: ' . esc_attr($config['bg_color']);
    }
    if (!empty($config['border_color'])) {
        $inline_styles[] = 'border-color: ' . esc_attr($config['border_color']);
    }
    if (!empty($config['text_color'])) {
        $inline_styles[] = 'color: ' . esc_attr($config['text_color']);
    }
    $style_attr = !empty($inline_styles) ? ' style="' . implode('; ', $inline_styles) . '"' : '';

    $accent_style = !empty($config['accent_color']) ? ' style="background-color: ' . esc_attr($config['accent_color']) . '"' : '';

    $svg_coffee = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M192 384h192c53 0 96-43 96-96h32c70.6 0 128-57.4 128-128S582.6 32 512 32H192c-17.7 0-32 14.3-32 32v288c0 17.7 14.3 32 32 32zm320-288c35.3 0 64 28.7 64 64s-28.7 64-64 64h-32V96h32zM48 448h544c17.7 0 32 14.3 32 32s-14.3 32-32 32H48c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg>';
    $svg_graduate = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M624 208h-64v-64c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v64h-64c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h64v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-64h64c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM320 32L0 192l320 160 256-128v128h64V192L320 32z"/></svg>';
    $svg_book = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M542.22 32.05c-54.8 3.11-163.72 14.43-230.96 55.59-4.64 2.84-7.26 7.85-7.26 13.17v365.17c0 10.73 11.23 17.58 20.73 12.39 67.24-41.16 176.16-52.48 230.96-55.59 11.08-.63 19.31-9.98 19.31-21.08V53.13c0-11.78-9.84-21.14-21.78-21.08zM33.78 32.05c-11.94-.06-21.78 9.3-21.78 21.08v348.57c0 11.1 8.23 20.45 19.31 21.08 54.8 3.11 163.72 14.43 230.96 55.59 9.5 5.19 20.73-1.66 20.73-12.39V100.81c0-5.32-2.62-10.33-7.26-13.17C208.5 46.48 99.58 35.16 43.78 32.05z"/></svg>';
    $svg_briefcase = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M128 48c0-8.8 7.2-16 16-16h224c8.8 0 16 7.2 16 16v48H128V48zm-48 48V48c0-26.5 21.5-48 48-48h224c26.5 0 48 21.5 48 48v48h48c26.5 0 48 21.5 48 48v128H0V144c0-26.5 21.5-48 48-48h32zm432 176v192c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272h192v16c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16v-16h192z"/></svg>';
    $svg_landmark = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M501.62 92.11L267.24 2.04a31.958 31.958 0 0 0-22.47 0L10.38 92.11A16.001 16.001 0 0 0 0 107.09V144c0 8.84 7.16 16 16 16h480c8.84 0 16-7.16 16-16v-36.91c0-6.67-4.14-12.63-10.38-14.98zM64 192v224H32c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h448c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16h-32V192H64zm80 0h64v224h-64V192zm144 0h64v224h-64V192z"/></svg>';
    $svg_umbrella = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M629.8 195.4C609.5 78.5 500 0 384 0c-99.3 0-195 62.4-221 161.4-1.9 7.2 1.3 14.8 7.8 18.4l117.8 65.5-23.7 201.2c-1 8.8 5.4 16.7 14.2 17.7 8.8 1 16.7-5.4 17.7-14.2l23.7-201.2 108.9 60.5c6.3 3.5 14.2 2.1 18.8-3.4L627 210.8c5.4-6.4 6.7-15.3 2.8-22.9zM224 480c0 17.7 14.3 32 32 32s32-14.3 32-32-14.3-32-32-32-32 14.3 32z"/></svg>';
    $svg_city = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M608 128h-64v-32c0-17.7-14.3-32-32-32h-64c-17.7 0-32 14.3-32 32v32h-64V32c0-17.7-14.3-32-32-32H192c-17.7 0-32 14.3-32 32v96H96c-17.7 0-32 14.3-32 32v320h512V160c0-17.7-14.3-32-32-32zM128 448H96v-32h32v32zm0-64H96v-32h32v32zm0-64H96v-32h32v32zm0-64H96v-32h32v32zm128 192h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32V64h32v32zm128 320h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm128 256h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32z"/></svg>';
    $svg_comments = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7 1.3 3 4.1 5 7.3 5 44.1 0 83.9-19.5 109.8-37.1 27 9.8 57.5 14.9 89.2 14.9 114.9 0 208-71.6 208-160zm160 160c0-67.4-56.8-124.4-136.2-148.9 3.9 12.3 6.2 25.3 6.2 38.9 0 114.9-114.9 208-256 208-13.6 0-26.9-1-39.8-2.7C184 480 238 512 304 512c26.4 0 51.8-4.3 74.3-12.4 21.6 14.7 54.8 31 91.5 31 2.7 0 5-1.7 6.1-4.2 1.1-2.5.6-5.3-1.3-7.2-.3-.3-18.7-20-29.9-45.2 19.9-21.8 31.7-48.1 31.7-76.8z"/></svg>';
    $svg_award = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M288 304v160l-96-48-96 48V304c-22.6-24.7-36-57.5-36-96 0-79.5 64.5-144 144-144s144 64.5 144 144c0 38.5-13.4 71.3-36 96zM192 96c-61.9 0-112 50.1-112 112s50.1 112 112 112 112-50.1 112-112S253.9 96 192 96z"/></svg>';
    $svg_rocket = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M505.12 19.1c-1.92-3.84-5.28-6.72-9.6-7.68C460.8 2.88 320-16.32 192 111.68c-44.16 44.16-72.32 96-85.76 150.72-10.56-4.16-22.08-6.4-34.24-6.4-44.16 0-80 35.84-80 80 0 11.52 2.56 22.4 7.04 32.32L0 448l64 64 80.32-80.32c9.92 4.48 20.8 7.04 32.32 7.04 44.16 0 80-35.84 80-80 0-12.16-2.24-23.68-6.4-34.24C305.6 311.04 357.44 282.88 401.6 238.72 528 110.72 509.12-30.08 505.12 19.1zM368 176c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48z"/></svg>';
    ?>
    <div class="kea-reisematch-container" id="<?php echo esc_attr($instance_id); ?>"<?php echo $style_attr; ?>>
        <style>
            .kea-reisematch-container {
                width: min(100% - 2rem, 78rem);
                margin: clamp(2rem, 5vw, 4rem) auto;
                background: #f4f0e8;
                border: 1px solid #ded4c3;
                border-radius: 16px;
                padding: clamp(1.5rem, 4vw, 3rem);
                color: #17201d;
                box-shadow: 0 10px 30px rgba(23, 32, 29, 0.05);
            }
            .kea-match-header {
                text-align: center;
                margin-bottom: 2rem;
            }
            .kea-match-kicker {
                display: inline-block;
                font-family: var(--hff-heading, serif);
                font-size: 0.85rem;
                text-transform: uppercase;
                letter-spacing: 0.12em;
                color: #183f35;
                font-weight: 700;
                margin-bottom: 0.5rem;
            }
            .kea-match-title {
                font-family: var(--hff-heading, serif);
                font-size: clamp(1.5rem, 3vw, 2.2rem);
                font-weight: 600;
                line-height: 1.2;
                margin: 0 0 0.5rem 0;
                color: inherit;
            }
            .kea-match-subtitle {
                font-size: 1rem;
                color: #55625e;
                margin: 0;
            }
            .kea-match-progress {
                display: flex;
                justify-content: center;
                gap: 0.5rem;
                margin-bottom: 2rem;
            }
            .kea-match-dot {
                width: 10px;
                height: 10px;
                border-radius: 50%;
                background: #ded4c3;
                transition: all 0.3s ease;
            }
            .kea-match-dot.active {
                background: #183f35;
                transform: scale(1.3);
            }
            .kea-match-step {
                display: none;
                animation: keaFadeIn 0.3s ease-in-out forwards;
            }
            .kea-match-step.active {
                display: block;
            }
            @keyframes keaFadeIn {
                from { opacity: 0; transform: translateY(8px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .kea-match-question {
                font-family: var(--hff-heading, serif);
                font-size: 1.25rem;
                font-weight: 600;
                text-align: center;
                margin-bottom: 1.5rem;
            }
            .kea-match-options {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
                gap: 1rem;
            }
            .kea-match-option {
                background: #fffdf8;
                border: 2px solid #ded4c3;
                border-radius: 12px;
                padding: 1.25rem 1rem;
                text-align: center;
                cursor: pointer;
                transition: all 0.25s ease;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 0.5rem;
            }
            .kea-match-option:hover {
                border-color: #183f35;
                background: #ffffff;
                transform: translateY(-3px);
                box-shadow: 0 8px 20px rgba(24, 63, 53, 0.1);
            }
            .kea-match-option-icon {
                font-size: 1.75rem;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 2.5rem;
                height: 2.5rem;
                color: #183f35;
            }
            .kea-match-option-icon svg {
                width: 1.75rem;
                height: 1.75rem;
                fill: currentColor;
            }
            .kea-match-option-label {
                font-weight: 700;
                font-size: 1rem;
                color: #17201d;
            }
            .kea-match-option-desc {
                font-size: 0.85rem;
                color: #667470;
            }
            .kea-match-result {
                display: none;
                text-align: center;
                background: #fffdf8;
                border: 2px solid #183f35;
                border-radius: 16px;
                padding: 2rem;
                animation: keaFadeIn 0.4s ease-in-out forwards;
            }
            .kea-match-result-badge {
                display: inline-block;
                background: #e56f55;
                color: #ffffff;
                font-size: 0.8rem;
                font-weight: 700;
                padding: 0.3rem 0.8rem;
                border-radius: 20px;
                text-transform: uppercase;
                margin-bottom: 1rem;
            }
            .kea-match-result-name {
                font-family: var(--hff-heading, serif);
                font-size: 2rem;
                font-weight: 600;
                margin: 0 0 0.5rem 0;
                color: #17201d;
            }
            .kea-match-result-reason {
                font-size: 1.05rem;
                line-height: 1.5;
                color: #33403b;
                max-width: 600px;
                margin: 0 auto 1.5rem auto;
            }
            .kea-match-actions {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 1rem;
            }
            .kea-match-btn-primary,
            a.kea-match-btn-primary,
            a.kea-match-btn-primary:visited {
                background-color: #183f35 !important;
                color: #ffffff !important;
                border: 2px solid #183f35 !important;
                padding: 0.85rem 1.75rem !important;
                border-radius: 999px !important;
                text-decoration: none !important;
                font-weight: 700 !important;
                font-size: 0.95rem !important;
                line-height: 1.4 !important;
                transition: all 0.2s ease !important;
                display: inline-flex !important;
                align-items: center !important;
                justify-content: center !important;
                gap: 0.5rem !important;
                box-shadow: 0 4px 14px rgba(24, 63, 53, 0.25) !important;
                cursor: pointer !important;
            }
            .kea-match-btn-primary *,
            .kea-match-btn-primary span,
            a.kea-match-btn-primary span {
                color: #ffffff !important;
                background: transparent !important;
            }
            .kea-match-btn-primary:hover,
            .kea-match-btn-primary:focus-visible,
            a.kea-match-btn-primary:hover,
            a.kea-match-btn-primary:focus-visible {
                background-color: #0e261f !important;
                color: #ffffff !important;
                border-color: #0e261f !important;
                transform: translateY(-2px) !important;
                box-shadow: 0 6px 20px rgba(24, 63, 53, 0.35) !important;
            }
            .kea-match-btn-primary:hover *,
            .kea-match-btn-primary:hover span {
                color: #ffffff !important;
            }
            .kea-match-btn-reset,
            button.kea-match-btn-reset {
                background-color: transparent !important;
                border: 2px solid #ded4c3 !important;
                color: #17201d !important;
                padding: 0.85rem 1.5rem !important;
                border-radius: 999px !important;
                cursor: pointer !important;
                font-weight: 600 !important;
                font-size: 0.9rem !important;
                transition: all 0.2s ease !important;
                display: inline-flex !important;
                align-items: center !important;
                justify-content: center !important;
            }
            .kea-match-btn-reset:hover,
            button.kea-match-btn-reset:hover {
                background-color: #ded4c3 !important;
                color: #17201d !important;
                border-color: #ded4c3 !important;
            }
        </style>

        <div class="kea-match-header">
            <?php if (!empty($config['kicker'])) : ?>
                <span class="kea-match-kicker"><?php echo esc_html($config['kicker']); ?></span>
            <?php endif; ?>
            <?php if (!empty($config['title'])) : ?>
                <h3 class="kea-match-title"><?php echo esc_html($config['title']); ?></h3>
            <?php endif; ?>
            <?php if (!empty($config['subtitle'])) : ?>
                <p class="kea-match-subtitle"><?php echo esc_html($config['subtitle']); ?></p>
            <?php endif; ?>
        </div>

        <div class="kea-match-progress">
            <div class="kea-match-dot active" data-step="1"></div>
            <div class="kea-match-dot" data-step="2"></div>
            <div class="kea-match-dot" data-step="3"></div>
        </div>

        <!-- STEP 1 -->
        <div class="kea-match-step active" data-step="1">
            <div class="kea-match-question"><?php echo esc_html($config['step1_question']); ?></div>
            <div class="kea-match-options">
                <div class="kea-match-option" data-key="audience" data-value="erwachsene">
                    <span class="kea-match-option-icon"><?php echo $svg_coffee; ?></span>
                    <span class="kea-match-option-label">Erwachsene</span>
                    <span class="kea-match-option-desc">Kurse, Kultur & Auszeit für Erwachsene</span>
                </div>
                <div class="kea-match-option" data-key="audience" data-value="schueler">
                    <span class="kea-match-option-icon"><?php echo $svg_graduate; ?></span>
                    <span class="kea-match-option-label">Schüler & Jugendliche</span>
                    <span class="kea-match-option-desc">Betreute Schülerkurse & Jugendsprachreisen</span>
                </div>
                <div class="kea-match-option" data-key="audience" data-value="lehrer">
                    <span class="kea-match-option-icon"><?php echo $svg_book; ?></span>
                    <span class="kea-match-option-label">Lehrkräfte</span>
                    <span class="kea-match-option-desc">Methodik & Sprachfortbildung (Erasmus+)</span>
                </div>
                <div class="kea-match-option" data-key="audience" data-value="business">
                    <span class="kea-match-option-icon"><?php echo $svg_briefcase; ?></span>
                    <span class="kea-match-option-label">Business & Profis</span>
                    <span class="kea-match-option-desc">Intensivcoaching für Beruf & Karriere</span>
                </div>
            </div>
        </div>

        <!-- STEP 2 -->
        <div class="kea-match-step" data-step="2">
            <div class="kea-match-question"><?php echo esc_html($config['step2_question']); ?></div>
            <div class="kea-match-options">
                <div class="kea-match-option" data-key="vibe" data-value="kultur">
                    <span class="kea-match-option-icon"><?php echo $svg_landmark; ?></span>
                    <span class="kea-match-option-label">Kultur & Pubs</span>
                    <span class="kea-match-option-desc">Historische Gassen & lebendige Cafés</span>
                </div>
                <div class="kea-match-option" data-key="vibe" data-value="meer">
                    <span class="kea-match-option-icon"><?php echo $svg_umbrella; ?></span>
                    <span class="kea-match-option-label">Meer & Sonne</span>
                    <span class="kea-match-option-desc">Küstenflair, Strand & mediterranes Leben</span>
                </div>
                <div class="kea-match-option" data-key="vibe" data-value="metropole">
                    <span class="kea-match-option-icon"><?php echo $svg_city; ?></span>
                    <span class="kea-match-option-label">Weltstadt-Flair</span>
                    <span class="kea-match-option-desc">Große Metropole, Theater & Shopping</span>
                </div>
            </div>
        </div>

        <!-- STEP 3 -->
        <div class="kea-match-step" data-step="3">
            <div class="kea-match-question"><?php echo esc_html($config['step3_question']); ?></div>
            <div class="kea-match-options">
                <div class="kea-match-option" data-key="goal" data-value="sprechen">
                    <span class="kea-match-option-icon"><?php echo $svg_comments; ?></span>
                    <span class="kea-match-option-label">Allgemeiner Sprachkurs</span>
                    <span class="kea-match-option-desc">Freies Sprechen, Hemmungen abbauen & Kultur erleben</span>
                </div>
                <div class="kea-match-option" data-key="goal" data-value="zertifikat">
                    <span class="kea-match-option-icon"><?php echo $svg_award; ?></span>
                    <span class="kea-match-option-label">Prüfungsvorbereitung</span>
                    <span class="kea-match-option-desc">Gezielte Vorbereitung auf IELTS, Cambridge, DELE oder DELF</span>
                </div>
                <div class="kea-match-option" data-key="goal" data-value="intensiv">
                    <span class="kea-match-option-icon"><?php echo $svg_rocket; ?></span>
                    <span class="kea-match-option-label">Intensivkurs</span>
                    <span class="kea-match-option-desc">Maximale Lernfortschritte in kompakter Kurszeit</span>
                </div>
            </div>
        </div>

        <!-- RESULT -->
        <div class="kea-match-result">
            <span class="kea-match-result-badge"<?php echo $accent_style; ?>>Dein KEA Match</span>
            <h4 class="kea-match-result-name">Dublin, Irland</h4>
            <p class="kea-match-result-reason">Literarisch, gastfreundlich und lebendig. Perfekt geeignet für freies Sprechen in inspirierender Kulturatmosphäre mit persönlicher KEA-Begleitung.</p>
            <div class="kea-match-actions">
                <a href="/anfrage/?destination=dublin" class="kea-match-btn-primary">
                    <span><?php echo esc_html($config['button_text']); ?></span>
                    <span>→</span>
                </a>
                <button type="button" class="kea-match-btn-reset">Neu starten ↺</button>
            </div>
        </div>

        <script>
            (function() {
                var root = document.getElementById('<?php echo esc_js($instance_id); ?>');
                if (!root) return;

                var answers = {};
                var steps = root.querySelectorAll('.kea-match-step');
                var dots = root.querySelectorAll('.kea-match-dot');
                var resultBox = root.querySelector('.kea-match-result');
                var resetBtn = root.querySelector('.kea-match-btn-reset');
                var buttonTextTemplate = <?php echo json_encode($config['button_text']); ?>;

                var destinationDB = {
                    'erwachsene_kultur': { slug: 'dublin', name: 'Dublin, Irland', reason: 'Literarisch, gastfreundlich und lebendig. Ideal für Sprachfreunde, die Kultur, gemütliche Pubs und offene Menschen schätzen.' },
                    'erwachsene_meer': { slug: 'malaga', name: 'Málaga, Spanien', reason: 'Mediterranes Lebensgefühl, Sonne und Tradition. Perfekt für Spanischlerner mit Freude am Meer und Kultur.' },
                    'erwachsene_metropole': { slug: 'london', name: 'London, England', reason: 'Die Weltstadt der Möglichkeiten. Erstklassige Schulen, Museen und pulsierender Lifestyle.' },
                    'schueler_meer': { slug: 'malta', name: 'Malta', reason: 'Sonne, hervorragende Betreuung und internationales Sprachschul-Flair. Ideal für Jugendliche und Schüler.' },
                    'schueler_kultur': { slug: 'brighton', name: 'Brighton, England', reason: 'Das beliebte Seebad mit schickem Flair, toller Betreuung und kurzen Wegen für Jugendliche.' },
                    'lehrer_kultur': { slug: 'dublin', name: 'Dublin, Irland', reason: 'Ausgezeichnete Methodik- und Sprachauffrischungskurse in inspirierendem Umfeld für Lehrkräfte.' },
                    'business_metropole': { slug: 'london', name: 'London, England', reason: 'Hervorragende Business-Zentren und maßgeschneiderter Einzelunterricht für Führungskräfte.' },
                    'default': { slug: 'dublin', name: 'Dublin, Irland', reason: 'Der zeitlose KEA-Klassiker: hervorragende Partner-Sprachschulen, freundliche Menschen und unvergleichliche Kultur.' }
                };

                function setStep(stepNum) {
                    steps.forEach(function(s) { s.classList.remove('active'); });
                    dots.forEach(function(d) {
                        var dStep = parseInt(d.getAttribute('data-step'), 10);
                        if (dStep === stepNum) d.classList.add('active');
                        else d.classList.remove('active');
                    });

                    if (stepNum <= 3) {
                        var target = root.querySelector('.kea-match-step[data-step="' + stepNum + '"]');
                        if (target) target.classList.add('active');
                        resultBox.style.display = 'none';
                    } else {
                        showResult();
                    }
                }

                function showResult() {
                    steps.forEach(function(s) { s.classList.remove('active'); });
                    var key = (answers.audience || '') + '_' + (answers.vibe || '');
                    var match = destinationDB[key] || destinationDB.default;

                    resultBox.querySelector('.kea-match-result-name').textContent = match.name;
                    resultBox.querySelector('.kea-match-result-reason').textContent = match.reason;

                    var btn = resultBox.querySelector('.kea-match-btn-primary');
                    btn.setAttribute('href', '/anfrage/?destination=' + match.slug);
                    var label = buttonTextTemplate ? buttonTextTemplate : ('Beratung zu ' + match.name.split(',')[0] + ' starten');
                    btn.querySelector('span:first-child').textContent = label;

                    resultBox.style.display = 'block';
                }

                root.addEventListener('click', function(e) {
                    var option = e.target.closest('.kea-match-option');
                    if (!option) return;

                    var key = option.getAttribute('data-key');
                    var val = option.getAttribute('data-value');
                    var step = parseInt(option.closest('.kea-match-step').getAttribute('data-step'), 10);

                    answers[key] = val;

                    if (step < 3) {
                        setStep(step + 1);
                    } else {
                        setStep(4);
                    }
                });

                if (resetBtn) {
                    resetBtn.addEventListener('click', function() {
                        answers = {};
                        setStep(1);
                    });
                }
            })();
        </script>
    </div>
    <?php
}
