document.addEventListener('DOMContentLoaded', () => {
    const toggleDirection = () => {
        const inputs = document.querySelectorAll('input[type="text"]');
        const isRTL = document.getElementById('rtl_checkbox').checked;
        inputs.forEach(input => {
            input.style.direction = isRTL ? 'rtl' : 'ltr';
        });
    };

    document.getElementById('rtl_checkbox').addEventListener('change', toggleDirection);

    // Switch forms based on radio button selection
    const switchForms = () => {
        const selectedType = document.querySelector('input[name="search_type"]:checked').value;
        const formsContainer = document.getElementById('forms-container');
        const iconLinks = document.getElementById('icon-links');

        if (selectedType === 'google') {
            fetch('google_forms.php')
                .then(response => response.text())
                .then(html => {
                    formsContainer.innerHTML = html;
                    iconLinks.innerHTML = `
                        <div class="icon-link">
                            <a href="https://mail.google.com" target="_blank">
                                <img src="images/icon-gmail.png" alt="Gmail">
                            </a>
                        </div>
                        <div class="icon-link">
                            <a href="https://drive.google.com" target="_blank">
                                <img src="images/icon-drive.png" alt="Google Drive">
                            </a>
                        </div>
                        <div class="icon-link">
                            <a href="https://gemini.google.com" target="_blank">
                                <img src="images/icon-gemini.png" alt="Google Gemini">
                            </a>
                        </div>
                    `;
                });
        } else if (selectedType === 'wikimedia') {
            fetch('wikimedia_forms.php')
                .then(response => response.text())
                .then(html => {
                    formsContainer.innerHTML = html;
                    iconLinks.innerHTML = `
                        <div class="icon-link">
                            <a href="https://en.wikipedia.org" target="_blank">
                                <img src="images/icon-wikipedia.png" alt="Wikipedia">
                            </a>
                        </div>
                        <div class="icon-link">
                            <a href="https://en.wiktionary.org" target="_blank">
                                <img src="images/icon-wiktionary.png" alt="Wiktionary">
                            </a>
                        </div>
                        <div class="icon-link">
                            <a href="https://en.wikisource.org" target="_blank">
                                <img src="images/icon-wikisource.png" alt="Wikisource">
                            </a>
                        </div>
                    `;
                });
        }
    };

    document.querySelectorAll('input[name="search_type"]').forEach(radio => {
        radio.addEventListener('change', switchForms);
    });

    // Set default form and icons
    switchForms();
});
