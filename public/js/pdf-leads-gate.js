(function () {
    if (window.__PLG_PDF_GATE_INITIALIZED__) {
        return;
    }
    window.__PLG_PDF_GATE_INITIALIZED__ = true;

    var config = window.PLG_PDF_LEADS || {
        ajax_url: '/wp-admin/admin-ajax.php',
        nonce: '',
        debug: false,
        messages: {
            required: 'Este campo es obligatorio.',
            phone: 'El telefono debe contener exactamente 10 digitos numericos.',
            email: 'Ingresa un correo valido.',
            submitError: 'No se pudo guardar tu informacion. Intenta nuevamente.'
        }
    };

    function dbg(step, payload) {
        if (!config.debug) {
            return;
        }
        if (typeof payload === 'undefined') {
            console.log('[PLG PDF DEBUG]', step);
        } else {
            console.log('[PLG PDF DEBUG]', step, payload);
        }
    }

    function ensureModalExists() {
        if (document.getElementById('plg-pdf-modal')) {
            return;
        }

        var wrapper = document.createElement('div');
        wrapper.innerHTML = '' +
            '<div id="plg-pdf-modal" class="plg-pdf-modal" aria-hidden="true">' +
                '<div class="plg-pdf-modal__overlay" data-close="true"></div>' +
                '<div class="plg-pdf-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="plg-pdf-modal-title">' +
                    '<button type="button" class="plg-pdf-modal__close" id="plg-pdf-close" aria-label="Cerrar modal">&times;</button>' +
                    '<h3 id="plg-pdf-modal-title">Descargar PDF</h3>' +
                    '<p class="plg-pdf-modal__subtitle">Completa tus datos para continuar con la descarga.</p>' +
                    '<form id="plg-pdf-form" novalidate>' +
                        '<div class="plg-pdf-field">' +
                            '<label for="plg_nombre">Nombre</label>' +
                            '<input type="text" id="plg_nombre" name="nombre" autocomplete="name" required>' +
                            '<small class="plg-pdf-error" data-error-for="nombre"></small>' +
                        '</div>' +
                        '<div class="plg-pdf-field">' +
                            '<label for="plg_telefono">Telefono</label>' +
                            '<input type="tel" id="plg_telefono" name="telefono" inputmode="numeric" maxlength="10" autocomplete="tel" required>' +
                            '<small class="plg-pdf-error" data-error-for="telefono"></small>' +
                        '</div>' +
                        '<div class="plg-pdf-field">' +
                            '<label for="plg_correo">Email</label>' +
                            '<input type="email" id="plg_correo" name="correo" autocomplete="email" required>' +
                            '<small class="plg-pdf-error" data-error-for="correo"></small>' +
                        '</div>' +
                        '<input type="hidden" name="pdf_url" id="plg_pdf_url" value="">' +
                        '<button type="submit" id="plg-submit" class="plg-pdf-submit" disabled>Descargar PDF</button>' +
                        '<p id="plg-form-status" class="plg-form-status" role="status" aria-live="polite"></p>' +
                    '</form>' +
                '</div>' +
            '</div>';
        document.body.appendChild(wrapper.firstChild);
    }

    ensureModalExists();

    var modal = document.getElementById('plg-pdf-modal');
    var closeBtn = document.getElementById('plg-pdf-close');
    var form = document.getElementById('plg-pdf-form');
    var submitBtn = document.getElementById('plg-submit');
    var statusEl = document.getElementById('plg-form-status');

    if (!modal || !form || !submitBtn) {
        return;
    }

    var nombreInput = document.getElementById('plg_nombre');
    var telefonoInput = document.getElementById('plg_telefono');
    var correoInput = document.getElementById('plg_correo');
    var pdfUrlInput = document.getElementById('plg_pdf_url');

    var phoneRegex = /^\d{10}$/;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var activePdfUrl = '';

    function getErrorEl(name) {
        return form.querySelector('[data-error-for="' + name + '"]');
    }

    function setError(name, message) {
        var errorEl = getErrorEl(name);
        if (errorEl) {
            errorEl.textContent = message || '';
        }
    }

    function validateNombre() {
        var value = nombreInput.value.trim();
        if (!value) {
            setError('nombre', config.messages.required);
            return false;
        }
        setError('nombre', '');
        return true;
    }

    function validateTelefono() {
        var value = telefonoInput.value.trim();
        if (!value) {
            setError('telefono', config.messages.required);
            return false;
        }
        if (!phoneRegex.test(value)) {
            setError('telefono', config.messages.phone);
            return false;
        }
        setError('telefono', '');
        return true;
    }

    function validateCorreo() {
        var value = correoInput.value.trim();
        if (!value) {
            setError('correo', config.messages.required);
            return false;
        }
        if (!emailRegex.test(value)) {
            setError('correo', config.messages.email);
            return false;
        }
        setError('correo', '');
        return true;
    }

    function isFormValid() {
        return validateNombre() && validateTelefono() && validateCorreo();
    }

    function updateSubmitState() {
        submitBtn.disabled = !isFormValid();
    }

    function openModal(pdfUrl) {
        activePdfUrl = pdfUrl || '';
        pdfUrlInput.value = activePdfUrl;
        statusEl.textContent = '';
        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('plg-modal-open');
        nombreInput.focus();
        updateSubmitState();
        dbg('modal_open', { url: activePdfUrl });
    }

    function closeModal() {
        modal.classList.remove('is-open');
        modal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('plg-modal-open');
    }

    function triggerDownload(url) {
        if (!url) {
            return;
        }
        var link = document.createElement('a');
        link.href = url;
        link.setAttribute('download', '');
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }

    document.addEventListener('click', function (event) {
        var trigger = event.target.closest('.btn-descargar-pdf');
        if (!trigger) {
            return;
        }

        event.preventDefault();
        var pdfUrl = trigger.getAttribute('data-pdf-url') || trigger.getAttribute('href') || '';

        if (!pdfUrl) {
            statusEl.textContent = 'No se encontro la URL del PDF.';
            return;
        }

        openModal(pdfUrl);
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }

    modal.addEventListener('click', function (event) {
        if (event.target && event.target.getAttribute('data-close') === 'true') {
            closeModal();
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && modal.classList.contains('is-open')) {
            closeModal();
        }
    });

    [nombreInput, telefonoInput, correoInput].forEach(function (input) {
        input.addEventListener('input', updateSubmitState);
        input.addEventListener('blur', updateSubmitState);
    });

    telefonoInput.addEventListener('input', function () {
        this.value = this.value.replace(/\D/g, '').slice(0, 10);
    });

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        if (!isFormValid()) {
            updateSubmitState();
            return;
        }

        if (!config.nonce) {
            statusEl.textContent = 'No se pudo inicializar la seguridad del formulario.';
            return;
        }

        submitBtn.disabled = true;
        statusEl.textContent = 'Guardando...';

        var formData = new FormData();
        formData.append('action', 'plg_save_lead');
        formData.append('nonce', config.nonce);
        formData.append('nombre', nombreInput.value.trim());
        formData.append('telefono', telefonoInput.value.trim());
        formData.append('correo', correoInput.value.trim());
        formData.append('pdf_url', pdfUrlInput.value.trim());

        fetch(config.ajax_url, {
            method: 'POST',
            credentials: 'same-origin',
            body: formData
        })
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                if (!data || !data.success) {
                    var message = (data && data.data && data.data.message) ? data.data.message : config.messages.submitError;
                    throw new Error(message);
                }

                statusEl.textContent = 'Listo. Tu descarga comenzara en un momento...';
                triggerDownload(data.data.pdf_url || activePdfUrl);
                closeModal();
                form.reset();
                updateSubmitState();
            })
            .catch(function (error) {
                statusEl.textContent = error.message || config.messages.submitError;
            })
            .finally(function () {
                updateSubmitState();
            });
    });
})();
