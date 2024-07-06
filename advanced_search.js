document.addEventListener('DOMContentLoaded', () => {
    const toggleDirection = () => {
        const inputs = document.querySelectorAll('input[type="text"]');
        const isRTL = document.getElementById('rtl_checkbox').checked;
        inputs.forEach(input => {
            input.style.direction = isRTL ? 'rtl' : 'ltr';
        });
    };

    document.getElementById('rtl_checkbox').addEventListener('change', toggleDirection);
});
