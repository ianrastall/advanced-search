document.addEventListener('DOMContentLoaded', () => {
    function toggleDirection() {
        const inputs = document.querySelectorAll('input[type="text"]');
        const isRTL = document.getElementById('rtl_checkbox').checked;
        inputs.forEach(input => {
            input.style.direction = isRTL ? 'rtl' : 'ltr';
        });
    }

    document.getElementById('rtl_checkbox').addEventListener('change', toggleDirection);

    function makeSearchable(selectId) {
        const select = document.getElementById(selectId);
        if (!select) {
            console.error(`Element with ID ${selectId} not found.`);
            return;
        }
        const parent = select.parentNode;
        const searchableSelect = document.createElement('div');
        searchableSelect.classList.add('searchable-select');
        searchableSelect.setAttribute('role', 'combobox');
        const input = document.createElement('input');
        input.setAttribute('aria-autocomplete', 'list');
        input.setAttribute('aria-expanded', 'false');
        const ul = document.createElement('ul');
        ul.setAttribute('role', 'listbox');

        Array.from(select.options).forEach(option => {
            const li = document.createElement('li');
            li.textContent = option.textContent;
            li.setAttribute('role', 'option');
            li.addEventListener('click', () => {
                select.value = option.value;
                input.value = option.textContent;
                ul.style.display = 'none';
                input.setAttribute('aria-expanded', 'false');
            });
            ul.appendChild(li);
        });

        input.addEventListener('input', () => {
            const filter = input.value.toLowerCase();
            Array.from(ul.children).forEach(li => {
                li.style.display = li.textContent.toLowerCase().includes(filter) ? '' : 'none';
            });
            ul.style.display = 'block';
            input.setAttribute('aria-expanded', 'true');
        });

        input.addEventListener('focus', () => {
            ul.style.display = 'block';
            input.setAttribute('aria-expanded', 'true');
        });

        input.addEventListener('blur', (event) => {
            if (!searchableSelect.contains(event.relatedTarget)) {
                setTimeout(() => {
                    ul.style.display = 'none';
                    input.setAttribute('aria-expanded', 'false');
                }, 200);
            }
        });

        input.addEventListener('keydown', (event) => {
            const items = Array.from(ul.children).filter(li => li.style.display !== 'none');
            let index = items.findIndex(item => item === document.activeElement);
            if (event.key === 'ArrowDown') {
                index = (index + 1) % items.length;
                items[index].focus();
            } else if (event.key === 'ArrowUp') {
                index = (index - 1 + items.length) % items.length;
                items[index].focus();
            } else if (event.key === 'Enter' && index !== -1) {
                items[index].click();
            }
        });

        searchableSelect.appendChild(input);
        searchableSelect.appendChild(ul);
        parent.insertBefore(searchableSelect, select);
        select.style.display = 'none';
    }

    makeSearchable('lr');
    makeSearchable('cr');
    makeSearchable('lr_nws');
    makeSearchable('cr_nws');
});
