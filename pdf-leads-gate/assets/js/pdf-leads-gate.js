(function () {
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
            setError('nombre', PLG_PDF_LEADS.messages.required);
            return false;
        }
        setError('nombre', '');
        return true;
    }

    function validateTelefono() {
        var value = telefonoInput.value.trim();
        if (!value) {
            setError('telefono', PLG_PDF_LEADS.messages.required);
            return false;
        }
        if (!phoneRegex.test(value)) {
            setError('telefono', PLG_PDF_LEADS.messages.phone);
            return false;
        }
        setError('telefono', '');
        return true;
    }

    function validateCorreo() {
        var value = correoInput.value.trim();
        if (!value) {
            setError('correo', PLG_PDF_LEADS.messages.required);
            return false;
        }
        if (!emailRegex.test(value)) {
            setError('correo', PLG_PDF_LEADS.messages.email);
            return false;
        }
        setError('correo', '');
        return true;
    }

    function isFormValid() {
        var nombreOk = validateNombre();
        var telefonoOk = validateTelefono();
        var correoOk = validateCorreo();
        return nombreOk && telefonoOk && correoOk;
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

        submitBtn.disabled = true;
        statusEl.textContent = 'Guardando...';

        var formData = new FormData();
        formData.append('action', 'plg_save_lead');
        formData.append('nonce', PLG_PDF_LEADS.nonce);
        formData.append('nombre', nombreInput.value.trim());
        formData.append('telefono', telefonoInput.value.trim());
        formData.append('correo', correoInput.value.trim());
        formData.append('pdf_url', pdfUrlInput.value.trim());

        fetch(PLG_PDF_LEADS.ajax_url, {
            method: 'POST',
            credentials: 'same-origin',
            body: formData,
        })
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                if (!data || !data.success) {
                    var message = (data && data.data && data.data.message) ? data.data.message : PLG_PDF_LEADS.messages.submitError;
                    throw new Error(message);
                }

                statusEl.textContent = 'Listo. Tu descarga comenzara en un momento...';
                triggerDownload(data.data.pdf_url || activePdfUrl);
                closeModal();
                form.reset();
                updateSubmitState();
            })
            .catch(function (error) {
                statusEl.textContent = error.message || PLG_PDF_LEADS.messages.submitError;
            })
            .finally(function () {
                updateSubmitState();
            });
    });
})();
