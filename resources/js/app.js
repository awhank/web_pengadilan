// Pengadilan Agama Modern Accessibility & UI Suite

document.addEventListener('DOMContentLoaded', () => {
    // 1. Accessibility State Management
    const html = document.documentElement;
    let currentContrast = localStorage.getItem('pa_contrast') || 'normal';
    let currentFontSize = localStorage.getItem('pa_fontsize') || 'normal';

    // Apply saved accessibility preferences
    applyContrast(currentContrast);
    applyFontSize(currentFontSize);

    // 2. High Contrast Handler
    window.toggleContrast = function(mode) {
        if (mode === 'cycle') {
            if (currentContrast === 'normal') currentContrast = 'high-contrast';
            else if (currentContrast === 'high-contrast') currentContrast = 'inverted';
            else currentContrast = 'normal';
        } else {
            currentContrast = mode;
        }
        localStorage.setItem('pa_contrast', currentContrast);
        applyContrast(currentContrast);
    };

    function applyContrast(contrast) {
        html.classList.remove('theme-high-contrast', 'theme-inverted');
        if (contrast === 'high-contrast') {
            html.classList.add('theme-high-contrast');
        } else if (contrast === 'inverted') {
            html.classList.add('theme-inverted');
        }
    }

    // 3. Font Size Scaling Handler
    window.changeFontSize = function(size) {
        currentFontSize = size;
        localStorage.setItem('pa_fontsize', currentFontSize);
        applyFontSize(currentFontSize);
    };

    function applyFontSize(size) {
        html.classList.remove('font-lg', 'font-xl');
        if (size === 'lg') {
            html.classList.add('font-lg');
        } else if (size === 'xl') {
            html.classList.add('font-xl');
        }
    }

    // 4. Screen Reader (Audio Text-to-Speech)
    let synth = window.speechSynthesis;
    let isSpeaking = false;

    window.toggleScreenReader = function() {
        if (!synth) {
            alert('Browser Anda tidak mendukung fitur Text-to-Speech.');
            return;
        }

        if (isSpeaking) {
            synth.cancel();
            isSpeaking = false;
            updateSpeechBtn(false);
            return;
        }

        // Get selected text or read the main article/page header
        let textToRead = window.getSelection().toString().trim();
        if (!textToRead) {
            const mainContent = document.querySelector('main') || document.body;
            textToRead = mainContent.innerText.substring(0, 500); // Read first section
        }

        if (!textToRead) {
            textToRead = "Selamat datang di Website Resmi Pengadilan Agama.";
        }

        const utterance = new SpeechSynthesisUtterance(textToRead);
        utterance.lang = 'id-ID';
        utterance.rate = 0.95;

        utterance.onstart = () => {
            isSpeaking = true;
            updateSpeechBtn(true);
        };

        utterance.onend = () => {
            isSpeaking = false;
            updateSpeechBtn(false);
        };

        utterance.onerror = () => {
            isSpeaking = false;
            updateSpeechBtn(false);
        };

        synth.speak(utterance);
    };

    function updateSpeechBtn(speaking) {
        const btn = document.getElementById('screen-reader-btn');
        if (btn) {
            btn.innerHTML = speaking 
                ? '<span class="animate-pulse">🛑 Stop Audio</span>' 
                : '<span>🔊 Baca Halaman</span>';
            btn.classList.toggle('bg-red-600', speaking);
            btn.classList.toggle('bg-primary', !speaking);
        }
    }

    // 5. Mobile Navigation Menu Toggle
    window.toggleMobileMenu = function() {
        const menu = document.getElementById('mobile-menu');
        if (menu) {
            menu.classList.toggle('hidden');
        }
    };

    // 6. Accessibility Toolbar Modal / Expand Toggle
    window.toggleAccessPanel = function() {
        const panel = document.getElementById('accessibility-panel');
        if (panel) {
            panel.classList.toggle('hidden');
        }
    };
});
