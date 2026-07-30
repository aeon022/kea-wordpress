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

function kea_core_render_reisematch(array $atts = []): void
{
    $instance_id = 'kea-match-' . wp_rand(1000, 9999);
    ?>
    <div class="kea-reisematch-container" id="<?php echo esc_attr($instance_id); ?>">
        <style>
            .kea-reisematch-container {
                background: #f4f0e8;
                border: 1px solid #ded4c3;
                border-radius: 16px;
                padding: clamp(1.5rem, 4vw, 3rem);
                color: #17201d;
                box-shadow: 0 10px 30px rgba(23, 32, 29, 0.05);
                margin: 2rem 0;
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
                color: #17201d;
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
                color: #fff;
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
            .kea-match-btn-primary {
                background: #183f35;
                color: #fffdf8;
                padding: 0.85rem 1.75rem;
                border-radius: 999px;
                text-decoration: none;
                font-weight: 700;
                font-size: 0.95rem;
                transition: all 0.2s ease;
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
            }
            .kea-match-btn-primary:hover {
                background: #123128;
                color: #fff;
                transform: translateY(-2px);
            }
            .kea-match-btn-reset {
                background: transparent;
                border: 1px solid #ded4c3;
                color: #55625e;
                padding: 0.85rem 1.5rem;
                border-radius: 999px;
                cursor: pointer;
                font-weight: 600;
                font-size: 0.9rem;
                transition: all 0.2s ease;
            }
            .kea-match-btn-reset:hover {
                background: #ded4c3;
                color: #17201d;
            }
        </style>

        <div class="kea-match-header">
            <span class="kea-match-kicker">KEA FASSION & GUIDE</span>
            <h3 class="kea-match-title">Der KEA Reise-Match</h3>
            <p class="kea-match-subtitle">Finde in 3 kurzen Klicks das ideale Sprachreiseziel für dich</p>
        </div>

        <div class="kea-match-progress">
            <div class="kea-match-dot active" data-step="1"></div>
            <div class="kea-match-dot" data-step="2"></div>
            <div class="kea-match-dot" data-step="3"></div>
        </div>

        <!-- STEP 1 -->
        <div class="kea-match-step active" data-step="1">
            <div class="kea-match-question">1. Für wen ist die Sprachreise gedacht?</div>
            <div class="kea-match-options">
                <div class="kea-match-option" data-key="audience" data-value="erwachsene">
                    <span class="kea-match-option-icon">☕</span>
                    <span class="kea-match-option-label">Erwachsene</span>
                    <span class="kea-match-option-desc">Kurse, Kultur & Auszeit für Erwachsene</span>
                </div>
                <div class="kea-match-option" data-key="audience" data-value="schueler">
                    <span class="kea-match-option-icon">🎓</span>
                    <span class="kea-match-option-label">Schüler & Jugend</span>
                    <span class="kea-match-option-desc">Betreute Camps & Ferienkurse</span>
                </div>
                <div class="kea-match-option" data-key="audience" data-value="lehrer">
                    <span class="kea-match-option-icon">📘</span>
                    <span class="kea-match-option-label">Lehrkräfte</span>
                    <span class="kea-match-option-desc">Methodik & Sprachfortbildung</span>
                </div>
                <div class="kea-match-option" data-key="audience" data-value="business">
                    <span class="kea-match-option-icon">💼</span>
                    <span class="kea-match-option-label">Business & Profis</span>
                    <span class="kea-match-option-desc">Intensivcoaching für Beruf & Karriere</span>
                </div>
            </div>
        </div>

        <!-- STEP 2 -->
        <div class="kea-match-step" data-step="2">
            <div class="kea-match-question">2. Welche Atmosphäre beflügelt dich vor Ort?</div>
            <div class="kea-match-options">
                <div class="kea-match-option" data-key="vibe" data-value="kultur">
                    <span class="kea-match-option-icon">🏰</span>
                    <span class="kea-match-option-label">Kultur & Pubs</span>
                    <span class="kea-match-option-desc">Historische Gassen & lebendige Cafés</span>
                </div>
                <div class="kea-match-option" data-key="vibe" data-value="meer">
                    <span class="kea-match-option-icon">🌊</span>
                    <span class="kea-match-option-label">Meer & Sonne</span>
                    <span class="kea-match-option-desc">Küstenflair, Strand & mediterranes Leben</span>
                </div>
                <div class="kea-match-option" data-key="vibe" data-value="metropole">
                    <span class="kea-match-option-icon">🏙️</span>
                    <span class="kea-match-option-label">Weltstadt-Flair</span>
                    <span class="kea-match-option-desc">Große Metropole, Theater & Shopping</span>
                </div>
            </div>
        </div>

        <!-- STEP 3 -->
        <div class="kea-match-step" data-step="3">
            <div class="kea-match-question">3. Was steht bei deiner Reise im Vordergrund?</div>
            <div class="kea-match-options">
                <div class="kea-match-option" data-key="goal" data-value="sprechen">
                    <span class="kea-match-option-icon">🗣️</span>
                    <span class="kea-match-option-label">Freies Sprechen</span>
                    <span class="kea-match-option-desc">Hemmungen abbauen & Land erleben</span>
                </div>
                <div class="kea-match-option" data-key="goal" data-value="zertifikat">
                    <span class="kea-match-option-icon">📜</span>
                    <span class="kea-match-option-label">Zertifikat & Prüfung</span>
                    <span class="kea-match-option-desc">IELTS, Cambridge, DELE oder DELF</span>
                </div>
                <div class="kea-match-option" data-key="goal" data-value="intensiv">
                    <span class="kea-match-option-icon">⚡</span>
                    <span class="kea-match-option-label">Intensivfortbildung</span>
                    <span class="kea-match-option-desc">Maximale Lernfortschritte in kurzer Zeit</span>
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
                    <span>Beratung zu Dublin starten</span>
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
                    btn.querySelector('span:first-child').textContent = 'Beratung zu ' + match.name.split(',')[0] + ' starten';

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
