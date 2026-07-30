<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Reise_Match/ssr.php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('kea_render_bd_icon')) {
    function kea_render_bd_icon($iconProp, string $fallbackEmoji = '⭐'): string
    {
        if (is_array($iconProp)) {
            if (!empty($iconProp['svgCode'])) {
                return (string) $iconProp['svgCode'];
            }
            if (!empty($iconProp['svg'])) {
                return (string) $iconProp['svg'];
            }
        }
        if (is_string($iconProp) && trim($iconProp) !== '') {
            return esc_html($iconProp);
        }
        return $fallbackEmoji;
    }
}

$header = is_array($propertiesData['content']['header'] ?? null)
    ? $propertiesData['content']['header']
    : (is_array($propertiesData['content'] ?? null) ? $propertiesData['content'] : []);

$step1 = is_array($propertiesData['content']['step1'] ?? null) ? $propertiesData['content']['step1'] : [];
$step2 = is_array($propertiesData['content']['step2'] ?? null) ? $propertiesData['content']['step2'] : [];
$step3 = is_array($propertiesData['content']['step3'] ?? null) ? $propertiesData['content']['step3'] : [];

$kicker = trim((string) ($header['kicker'] ?? 'KEA INSPIRATION & GUIDE'));
$title = trim((string) ($header['title'] ?? 'Der KEA Reise-Match'));
$subtitle = trim((string) ($header['subtitle'] ?? 'Finde in 3 kurzen Klicks das ideale Sprachreiseziel für dich'));
$buttonText = trim((string) ($header['button_text'] ?? 'Beratung starten'));

// Step 1 Defaults
$s1Question = trim((string) ($step1['question'] ?? '1. Für wen ist die Sprachreise gedacht?'));
$defaultFa1_1 = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M192 384h192c53 0 96-43 96-96h32c70.6 0 128-57.4 128-128S582.6 32 512 32H192c-17.7 0-32 14.3-32 32v288c0 17.7 14.3 32 32 32zm320-288c35.3 0 64 28.7 64 64s-28.7 64-64 64h-32V96h32zM48 448h544c17.7 0 32 14.3 32 32s-14.3 32-32 32H48c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg>';
$defaultFa1_2 = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M624 208h-64v-64c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v64h-64c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h64v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-64h64c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM320 32L0 192l320 160 256-128v128h64V192L320 32z"/></svg>';
$defaultFa1_3 = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M542.22 32.05c-54.8 3.11-163.72 14.43-230.96 55.59-4.64 2.84-7.26 7.85-7.26 13.17v365.17c0 10.73 11.23 17.58 20.73 12.39 67.24-41.16 176.16-52.48 230.96-55.59 11.08-.63 19.31-9.98 19.31-21.08V53.13c0-11.78-9.84-21.14-21.78-21.08zM33.78 32.05c-11.94-.06-21.78 9.3-21.78 21.08v348.57c0 11.1 8.23 20.45 19.31 21.08 54.8 3.11 163.72 14.43 230.96 55.59 9.5 5.19 20.73-1.66 20.73-12.39V100.81c0-5.32-2.62-10.33-7.26-13.17C208.5 46.48 99.58 35.16 43.78 32.05z"/></svg>';
$defaultFa1_4 = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M128 48c0-8.8 7.2-16 16-16h224c8.8 0 16 7.2 16 16v48H128V48zm-48 48V48c0-26.5 21.5-48 48-48h224c26.5 0 48 21.5 48 48v48h48c26.5 0 48 21.5 48 48v128H0V144c0-26.5 21.5-48 48-48h32zm432 176v192c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272h192v16c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16v-16h192z"/></svg>';

$s1Icon1 = kea_render_bd_icon($step1['icon1'] ?? null, $defaultFa1_1);
$s1Label1 = trim((string) ($step1['label1'] ?? 'Erwachsene'));
$s1Desc1 = trim((string) ($step1['desc1'] ?? 'Kurse, Kultur & Auszeit für Erwachsene'));

$s1Icon2 = kea_render_bd_icon($step1['icon2'] ?? null, $defaultFa1_2);
$s1Label2 = trim((string) ($step1['label2'] ?? 'Schüler & Jugendliche'));
$s1Desc2 = trim((string) ($step1['desc2'] ?? 'Betreute Schülerkurse & Jugendsprachreisen'));

$s1Icon3 = kea_render_bd_icon($step1['icon3'] ?? null, $defaultFa1_3);
$s1Label3 = trim((string) ($step1['label3'] ?? 'Lehrkräfte'));
$s1Desc3 = trim((string) ($step1['desc3'] ?? 'Methodik & Sprachfortbildung (Erasmus+)'));

$s1Icon4 = kea_render_bd_icon($step1['icon4'] ?? null, $defaultFa1_4);
$s1Label4 = trim((string) ($step1['label4'] ?? 'Business & Profis'));
$s1Desc4 = trim((string) ($step1['desc4'] ?? 'Intensivcoaching für Beruf & Karriere'));

// Step 2 Defaults
$s2Question = trim((string) ($step2['question'] ?? '2. Welche Atmosphäre beflügelt dich vor Ort?'));
$defaultFa2_1 = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M501.62 92.11L267.24 2.04a31.958 31.958 0 0 0-22.47 0L10.38 92.11A16.001 16.001 0 0 0 0 107.09V144c0 8.84 7.16 16 16 16h480c8.84 0 16-7.16 16-16v-36.91c0-6.67-4.14-12.63-10.38-14.98zM64 192v224H32c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h448c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16h-32V192H64zm80 0h64v224h-64V192zm144 0h64v224h-64V192z"/></svg>';
$defaultFa2_2 = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M629.8 195.4C609.5 78.5 500 0 384 0c-99.3 0-195 62.4-221 161.4-1.9 7.2 1.3 14.8 7.8 18.4l117.8 65.5-23.7 201.2c-1 8.8 5.4 16.7 14.2 17.7 8.8 1 16.7-5.4 17.7-14.2l23.7-201.2 108.9 60.5c6.3 3.5 14.2 2.1 18.8-3.4L627 210.8c5.4-6.4 6.7-15.3 2.8-22.9zM224 480c0 17.7 14.3 32 32 32s32-14.3 32-32-14.3-32-32-32-32 14.3 32z"/></svg>';
$defaultFa2_3 = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M608 128h-64v-32c0-17.7-14.3-32-32-32h-64c-17.7 0-32 14.3-32 32v32h-64V32c0-17.7-14.3-32-32-32H192c-17.7 0-32 14.3-32 32v96H96c-17.7 0-32 14.3-32 32v320h512V160c0-17.7-14.3-32-32-32zM128 448H96v-32h32v32zm0-64H96v-32h32v32zm0-64H96v-32h32v32zm0-64H96v-32h32v32zm128 192h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32V64h32v32zm128 320h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm128 256h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32z"/></svg>';

$s2Icon1 = kea_render_bd_icon($step2['icon1'] ?? null, $defaultFa2_1);
$s2Label1 = trim((string) ($step2['label1'] ?? 'Kultur & Pubs'));
$s2Desc1 = trim((string) ($step2['desc1'] ?? 'Historische Gassen & lebendige Cafés'));

$s2Icon2 = kea_render_bd_icon($step2['icon2'] ?? null, $defaultFa2_2);
$s2Label2 = trim((string) ($step2['label2'] ?? 'Meer & Sonne'));
$s2Desc2 = trim((string) ($step2['desc2'] ?? 'Küstenflair, Strand & mediterranes Leben'));

$s2Icon3 = kea_render_bd_icon($step2['icon3'] ?? null, $defaultFa2_3);
$s2Label3 = trim((string) ($step2['label3'] ?? 'Weltstadt-Flair'));
$s2Desc3 = trim((string) ($step2['desc3'] ?? 'Große Metropole, Theater & Shopping'));

// Step 3 Defaults
$s3Question = trim((string) ($step3['question'] ?? '3. Welche Kursart passt zu deinen Zielen?'));
$defaultFa3_1 = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7 1.3 3 4.1 5 7.3 5 44.1 0 83.9-19.5 109.8-37.1 27 9.8 57.5 14.9 89.2 14.9 114.9 0 208-71.6 208-160zm160 160c0-67.4-56.8-124.4-136.2-148.9 3.9 12.3 6.2 25.3 6.2 38.9 0 114.9-114.9 208-256 208-13.6 0-26.9-1-39.8-2.7C184 480 238 512 304 512c26.4 0 51.8-4.3 74.3-12.4 21.6 14.7 54.8 31 91.5 31 2.7 0 5-1.7 6.1-4.2 1.1-2.5.6-5.3-1.3-7.2-.3-.3-18.7-20-29.9-45.2 19.9-21.8 31.7-48.1 31.7-76.8z"/></svg>';
$defaultFa3_2 = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M288 304v160l-96-48-96 48V304c-22.6-24.7-36-57.5-36-96 0-79.5 64.5-144 144-144s144 64.5 144 144c0 38.5-13.4 71.3-36 96zM192 96c-61.9 0-112 50.1-112 112s50.1 112 112 112 112-50.1 112-112S253.9 96 192 96z"/></svg>';
$defaultFa3_3 = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M505.12 19.1c-1.92-3.84-5.28-6.72-9.6-7.68C460.8 2.88 320-16.32 192 111.68c-44.16 44.16-72.32 96-85.76 150.72-10.56-4.16-22.08-6.4-34.24-6.4-44.16 0-80 35.84-80 80 0 11.52 2.56 22.4 7.04 32.32L0 448l64 64 80.32-80.32c9.92 4.48 20.8 7.04 32.32 7.04 44.16 0 80-35.84 80-80 0-12.16-2.24-23.68-6.4-34.24C305.6 311.04 357.44 282.88 401.6 238.72 528 110.72 509.12-30.08 505.12 19.1zM368 176c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48z"/></svg>';

$s3Icon1 = kea_render_bd_icon($step3['icon1'] ?? null, $defaultFa3_1);
$s3Label1 = trim((string) ($step3['label1'] ?? 'Allgemeiner Sprachkurs'));
$s3Desc1 = trim((string) ($step3['desc1'] ?? 'Freies Sprechen, Hemmungen abbauen & Kultur erleben'));

$s3Icon2 = kea_render_bd_icon($step3['icon2'] ?? null, $defaultFa3_2);
$s3Label2 = trim((string) ($step3['label2'] ?? 'Prüfungsvorbereitung'));
$s3Desc2 = trim((string) ($step3['desc2'] ?? 'Gezielte Vorbereitung auf IELTS, Cambridge, DELE oder DELF'));

$s3Icon3 = kea_render_bd_icon($step3['icon3'] ?? null, $defaultFa3_3);
$s3Label3 = trim((string) ($step3['label3'] ?? 'Intensivkurs'));
$s3Desc3 = trim((string) ($step3['desc3'] ?? 'Maximale Lernfortschritte in kompakter Kurszeit'));

$instanceId = 'kea-match-' . wp_rand(1000, 9999);
?>
<div class="kea-reisematch-container" id="<?php echo esc_attr($instanceId); ?>">
    <div class="kea-match-header">
        <?php if ($kicker !== '') : ?>
            <span class="kea-match-kicker"><?php echo esc_html($kicker); ?></span>
        <?php endif; ?>
        <?php if ($title !== '') : ?>
            <h3 class="kea-match-title"><?php echo esc_html($title); ?></h3>
        <?php endif; ?>
        <?php if ($subtitle !== '') : ?>
            <p class="kea-match-subtitle"><?php echo esc_html($subtitle); ?></p>
        <?php endif; ?>
    </div>

    <div class="kea-match-progress">
        <div class="kea-match-dot active" data-step="1"></div>
        <div class="kea-match-dot" data-step="2"></div>
        <div class="kea-match-dot" data-step="3"></div>
    </div>

    <!-- STEP 1 -->
    <div class="kea-match-step active" data-step="1">
        <div class="kea-match-question"><?php echo esc_html($s1Question); ?></div>
        <div class="kea-match-options">
            <div class="kea-match-option" data-key="audience" data-value="erwachsene">
                <span class="kea-match-option-icon"><?php echo $s1Icon1; ?></span>
                <span class="kea-match-option-label"><?php echo esc_html($s1Label1); ?></span>
                <span class="kea-match-option-desc"><?php echo esc_html($s1Desc1); ?></span>
            </div>
            <div class="kea-match-option" data-key="audience" data-value="schueler">
                <span class="kea-match-option-icon"><?php echo $s1Icon2; ?></span>
                <span class="kea-match-option-label"><?php echo esc_html($s1Label2); ?></span>
                <span class="kea-match-option-desc"><?php echo esc_html($s1Desc2); ?></span>
            </div>
            <div class="kea-match-option" data-key="audience" data-value="lehrer">
                <span class="kea-match-option-icon"><?php echo $s1Icon3; ?></span>
                <span class="kea-match-option-label"><?php echo esc_html($s1Label3); ?></span>
                <span class="kea-match-option-desc"><?php echo esc_html($s1Desc3); ?></span>
            </div>
            <div class="kea-match-option" data-key="audience" data-value="business">
                <span class="kea-match-option-icon"><?php echo $s1Icon4; ?></span>
                <span class="kea-match-option-label"><?php echo esc_html($s1Label4); ?></span>
                <span class="kea-match-option-desc"><?php echo esc_html($s1Desc4); ?></span>
            </div>
        </div>
    </div>

    <!-- STEP 2 -->
    <div class="kea-match-step" data-step="2">
        <div class="kea-match-question"><?php echo esc_html($s2Question); ?></div>
        <div class="kea-match-options">
            <div class="kea-match-option" data-key="vibe" data-value="kultur">
                <span class="kea-match-option-icon"><?php echo $s2Icon1; ?></span>
                <span class="kea-match-option-label"><?php echo esc_html($s2Label1); ?></span>
                <span class="kea-match-option-desc"><?php echo esc_html($s2Desc1); ?></span>
            </div>
            <div class="kea-match-option" data-key="vibe" data-value="meer">
                <span class="kea-match-option-icon"><?php echo $s2Icon2; ?></span>
                <span class="kea-match-option-label"><?php echo esc_html($s2Label2); ?></span>
                <span class="kea-match-option-desc"><?php echo esc_html($s2Desc2); ?></span>
            </div>
            <div class="kea-match-option" data-key="vibe" data-value="metropole">
                <span class="kea-match-option-icon"><?php echo $s2Icon3; ?></span>
                <span class="kea-match-option-label"><?php echo esc_html($s2Label3); ?></span>
                <span class="kea-match-option-desc"><?php echo esc_html($s2Desc3); ?></span>
            </div>
        </div>
    </div>

    <!-- STEP 3 -->
    <div class="kea-match-step" data-step="3">
        <div class="kea-match-question"><?php echo esc_html($s3Question); ?></div>
        <div class="kea-match-options">
            <div class="kea-match-option" data-key="goal" data-value="sprechen">
                <span class="kea-match-option-icon"><?php echo $s3Icon1; ?></span>
                <span class="kea-match-option-label"><?php echo esc_html($s3Label1); ?></span>
                <span class="kea-match-option-desc"><?php echo esc_html($s3Desc1); ?></span>
            </div>
            <div class="kea-match-option" data-key="goal" data-value="zertifikat">
                <span class="kea-match-option-icon"><?php echo $s3Icon2; ?></span>
                <span class="kea-match-option-label"><?php echo esc_html($s3Label2); ?></span>
                <span class="kea-match-option-desc"><?php echo esc_html($s3Desc2); ?></span>
            </div>
            <div class="kea-match-option" data-key="goal" data-value="intensiv">
                <span class="kea-match-option-icon"><?php echo $s3Icon3; ?></span>
                <span class="kea-match-option-label"><?php echo esc_html($s3Label3); ?></span>
                <span class="kea-match-option-desc"><?php echo esc_html($s3Desc3); ?></span>
            </div>
        </div>
    </div>

    <!-- RESULT -->
    <div class="kea-match-result">
        <span class="kea-match-result-badge">Dein KEA Match</span>
        <h4 class="kea-match-result-name">Dublin, Irland</h4>
        <p class="kea-match-result-reason">Literarisch, gastfreundlich und lebendig. Perfekt geeignet für freies Sprechen in inspirierender Kulturatmosphäre mit persönlicher KEA-Begleitung.</p>
        <div class="kea-match-actions">
            <a href="/anfrage/?destination=dublin" class="kea-match-btn-primary">
                <span><?php echo esc_html($buttonText); ?></span>
                <span>→</span>
            </a>
            <button type="button" class="kea-match-btn-reset">Neu starten ↺</button>
        </div>
    </div>

    <script>
        (function() {
            var root = document.getElementById('<?php echo esc_js($instanceId); ?>');
            if (!root) return;

            var answers = {};
            var steps = root.querySelectorAll('.kea-match-step');
            var dots = root.querySelectorAll('.kea-match-dot');
            var resultBox = root.querySelector('.kea-match-result');
            var resetBtn = root.querySelector('.kea-match-btn-reset');
            var buttonTextTemplate = <?php echo json_encode($buttonText); ?>;

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
