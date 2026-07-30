<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Reise_Match/ssr.php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
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

$s1Question = trim((string) ($step1['question'] ?? '1. Für wen ist die Sprachreise gedacht?'));
$s1Icon1 = trim((string) ($step1['icon1'] ?? '☕'));
$s1Label1 = trim((string) ($step1['label1'] ?? 'Erwachsene'));
$s1Desc1 = trim((string) ($step1['desc1'] ?? 'Kurse, Kultur & Auszeit für Erwachsene'));

$s1Icon2 = trim((string) ($step1['icon2'] ?? '🎓'));
$s1Label2 = trim((string) ($step1['label2'] ?? 'Schüler & Jugend'));
$s1Desc2 = trim((string) ($step1['desc2'] ?? 'Betreute Camps & Ferienkurse'));

$s1Icon3 = trim((string) ($step1['icon3'] ?? '📘'));
$s1Label3 = trim((string) ($step1['label3'] ?? 'Lehrkräfte'));
$s1Desc3 = trim((string) ($step1['desc3'] ?? 'Methodik & Sprachfortbildung'));

$s1Icon4 = trim((string) ($step1['icon4'] ?? '💼'));
$s1Label4 = trim((string) ($step1['label4'] ?? 'Business & Profis'));
$s1Desc4 = trim((string) ($step1['desc4'] ?? 'Intensivcoaching für Beruf & Karriere'));

$s2Question = trim((string) ($step2['question'] ?? '2. Welche Atmosphäre beflügelt dich vor Ort?'));
$s2Icon1 = trim((string) ($step2['icon1'] ?? '🏰'));
$s2Label1 = trim((string) ($step2['label1'] ?? 'Kultur & Pubs'));
$s2Desc1 = trim((string) ($step2['desc1'] ?? 'Historische Gassen & lebendige Cafés'));

$s2Icon2 = trim((string) ($step2['icon2'] ?? '🌊'));
$s2Label2 = trim((string) ($step2['label2'] ?? 'Meer & Sonne'));
$s2Desc2 = trim((string) ($step2['desc2'] ?? 'Küstenflair, Strand & mediterranes Leben'));

$s2Icon3 = trim((string) ($step2['icon3'] ?? '🏙️'));
$s2Label3 = trim((string) ($step2['label3'] ?? 'Weltstadt-Flair'));
$s2Desc3 = trim((string) ($step2['desc3'] ?? 'Große Metropole, Theater & Shopping'));

$s3Question = trim((string) ($step3['question'] ?? '3. Was steht bei deiner Reise im Vordergrund?'));
$s3Icon1 = trim((string) ($step3['icon1'] ?? '🗣️'));
$s3Label1 = trim((string) ($step3['label1'] ?? 'Freies Sprechen'));
$s3Desc1 = trim((string) ($step3['desc1'] ?? 'Hemmungen abbauen & Land erleben'));

$s3Icon2 = trim((string) ($step3['icon2'] ?? '📜'));
$s3Label2 = trim((string) ($step3['label2'] ?? 'Zertifikat & Prüfung'));
$s3Desc2 = trim((string) ($step3['desc2'] ?? 'IELTS, Cambridge, DELE oder DELF'));

$s3Icon3 = trim((string) ($step3['icon3'] ?? '⚡'));
$s3Label3 = trim((string) ($step3['label3'] ?? 'Intensivfortbildung'));
$s3Desc3 = trim((string) ($step3['desc3'] ?? 'Maximale Lernfortschritte in kurzer Zeit'));

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
                <span class="kea-match-option-icon"><?php echo esc_html($s1Icon1); ?></span>
                <span class="kea-match-option-label"><?php echo esc_html($s1Label1); ?></span>
                <span class="kea-match-option-desc"><?php echo esc_html($s1Desc1); ?></span>
            </div>
            <div class="kea-match-option" data-key="audience" data-value="schueler">
                <span class="kea-match-option-icon"><?php echo esc_html($s1Icon2); ?></span>
                <span class="kea-match-option-label"><?php echo esc_html($s1Label2); ?></span>
                <span class="kea-match-option-desc"><?php echo esc_html($s1Desc2); ?></span>
            </div>
            <div class="kea-match-option" data-key="audience" data-value="lehrer">
                <span class="kea-match-option-icon"><?php echo esc_html($s1Icon3); ?></span>
                <span class="kea-match-option-label"><?php echo esc_html($s1Label3); ?></span>
                <span class="kea-match-option-desc"><?php echo esc_html($s1Desc3); ?></span>
            </div>
            <div class="kea-match-option" data-key="audience" data-value="business">
                <span class="kea-match-option-icon"><?php echo esc_html($s1Icon4); ?></span>
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
                <span class="kea-match-option-icon"><?php echo esc_html($s2Icon1); ?></span>
                <span class="kea-match-option-label"><?php echo esc_html($s2Label1); ?></span>
                <span class="kea-match-option-desc"><?php echo esc_html($s2Desc1); ?></span>
            </div>
            <div class="kea-match-option" data-key="vibe" data-value="meer">
                <span class="kea-match-option-icon"><?php echo esc_html($s2Icon2); ?></span>
                <span class="kea-match-option-label"><?php echo esc_html($s2Label2); ?></span>
                <span class="kea-match-option-desc"><?php echo esc_html($s2Desc2); ?></span>
            </div>
            <div class="kea-match-option" data-key="vibe" data-value="metropole">
                <span class="kea-match-option-icon"><?php echo esc_html($s2Icon3); ?></span>
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
                <span class="kea-match-option-icon"><?php echo esc_html($s3Icon1); ?></span>
                <span class="kea-match-option-label"><?php echo esc_html($s3Label1); ?></span>
                <span class="kea-match-option-desc"><?php echo esc_html($s3Desc1); ?></span>
            </div>
            <div class="kea-match-option" data-key="goal" data-value="zertifikat">
                <span class="kea-match-option-icon"><?php echo esc_html($s3Icon2); ?></span>
                <span class="kea-match-option-label"><?php echo esc_html($s3Label2); ?></span>
                <span class="kea-match-option-desc"><?php echo esc_html($s3Desc2); ?></span>
            </div>
            <div class="kea-match-option" data-key="goal" data-value="intensiv">
                <span class="kea-match-option-icon"><?php echo esc_html($s3Icon3); ?></span>
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
                'schueler_meer': { slug: 'malta', name: 'Malta', reason: 'Sonne, hervorragende Betreuung und internationales Camp-Flair. Ideal für Jugendliche und Schüler.' },
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
