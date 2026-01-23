/**
 * FI Technologies - Form Handling
 * Handles form validation, submission, and modal interactions
 */

document.addEventListener('DOMContentLoaded', function() {
    // ============================================
    // Quote Modal Management
    // ============================================
    const quoteModal = document.getElementById('quoteModal');
    const quoteForm = document.getElementById('quoteForm');
    const openModalButtons = document.querySelectorAll('[data-action="open-quote"]');
    const closeModalButton = document.querySelector('.modal-close');
    const modalBackdrop = document.querySelector('.modal-backdrop');

    // Open modal
    function openQuoteModal() {
        if (quoteModal) {
            quoteModal.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling

            // Focus on first input for accessibility
            const firstInput = quoteModal.querySelector('input, select, textarea');
            if (firstInput) {
                setTimeout(() => firstInput.focus(), 100);
            }
        }
    }

    // Close modal
    function closeQuoteModal() {
        if (quoteModal) {
            quoteModal.classList.remove('active');
            document.body.style.overflow = '';

            // Reset form and hide success message
            if (quoteForm) {
                quoteForm.reset();
                clearFormErrors(quoteForm);
                const successMessage = quoteForm.querySelector('.form-success');
                if (successMessage) {
                    successMessage.classList.remove('active');
                }
            }
        }
    }

    // Attach event listeners to all "Get a Free Quote" buttons
    openModalButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            openQuoteModal();
        });
    });

    // Close modal on close button click
    if (closeModalButton) {
        closeModalButton.addEventListener('click', closeQuoteModal);
    }

    // Close modal on backdrop click
    if (modalBackdrop) {
        modalBackdrop.addEventListener('click', closeQuoteModal);
    }

    // Close modal on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && quoteModal && quoteModal.classList.contains('active')) {
            closeQuoteModal();
        }
    });

    // ============================================
    // Form Validation
    // ============================================
    function validateField(field) {
        const fieldName = field.getAttribute('name');
        const fieldValue = field.value.trim();
        const fieldType = field.getAttribute('type');
        let isValid = true;
        let errorMessage = '';

        // Required field validation
        if (field.hasAttribute('required')) {
            if (fieldType === 'radio') {
                const radioGroup = document.querySelectorAll(`input[name="${fieldName}"]`);
                const isChecked = Array.from(radioGroup).some(radio => radio.checked);
                if (!isChecked) {
                    isValid = false;
                    errorMessage = 'Please select an option.';
                }
            } else if (fieldType === 'checkbox') {
                if (!field.checked) {
                    isValid = false;
                    errorMessage = 'This field is required.';
                }
            } else if (fieldValue === '') {
                isValid = false;
                errorMessage = 'This field is required.';
            }
        }

        // Email validation
        if (fieldType === 'email' && fieldValue !== '') {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(fieldValue)) {
                isValid = false;
                errorMessage = 'Please enter a valid email address.';
            }
        }

        // Phone validation (basic)
        if (fieldType === 'tel' && fieldValue !== '') {
            const phoneRegex = /^[\d\s\-\+\(\)]{10,}$/;
            if (!phoneRegex.test(fieldValue)) {
                isValid = false;
                errorMessage = 'Please enter a valid phone number.';
            }
        }

        // Display error
        displayFieldError(field, isValid, errorMessage);

        return isValid;
    }

    function displayFieldError(field, isValid, errorMessage) {
        const formGroup = field.closest('.form-group');
        if (!formGroup) return;

        const errorElement = formGroup.querySelector('.form-error');

        if (isValid) {
            field.classList.remove('error');
            if (errorElement) {
                errorElement.classList.remove('active');
            }
        } else {
            field.classList.add('error');
            if (errorElement) {
                errorElement.textContent = errorMessage;
                errorElement.classList.add('active');
            }
        }
    }

    function clearFormErrors(form) {
        const errorFields = form.querySelectorAll('.error');
        const errorMessages = form.querySelectorAll('.form-error.active');

        errorFields.forEach(field => field.classList.remove('error'));
        errorMessages.forEach(msg => msg.classList.remove('active'));
    }

    function validateForm(form) {
        let isFormValid = true;

        // Validate all required inputs and selects
        const fields = form.querySelectorAll('input[required], select[required], textarea[required]');

        fields.forEach(field => {
            if (!validateField(field)) {
                isFormValid = false;
            }
        });

        // Check radio button groups
        const radioGroups = {};
        form.querySelectorAll('input[type="radio"][required]').forEach(radio => {
            const name = radio.getAttribute('name');
            if (!radioGroups[name]) {
                radioGroups[name] = radio;
            }
        });

        Object.values(radioGroups).forEach(radio => {
            if (!validateField(radio)) {
                isFormValid = false;
            }
        });

        return isFormValid;
    }

    // Add real-time validation
    const allForms = document.querySelectorAll('form');

    allForms.forEach(form => {
        const fields = form.querySelectorAll('input, select, textarea');

        fields.forEach(field => {
            // Validate on blur
            field.addEventListener('blur', function() {
                if (this.value.trim() !== '' || this.hasAttribute('required')) {
                    validateField(this);
                }
            });

            // Clear error on input
            field.addEventListener('input', function() {
                if (this.classList.contains('error')) {
                    validateField(this);
                }
            });
        });
    });

    // ============================================
    // Form Submission
    // ============================================
    function handleFormSubmit(form, e) {
        e.preventDefault();

        // Validate form
        if (!validateForm(form)) {
            // Scroll to first error
            const firstError = form.querySelector('.error');
            if (firstError) {
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                firstError.focus();
            }
            return;
        }

        // Gather form data
        const formData = new FormData(form);
        const data = {};

        formData.forEach((value, key) => {
            data[key] = value;
        });

        // Get submit button
        const submitButton = form.querySelector('button[type="submit"]');
        const originalButtonText = submitButton ? submitButton.textContent : '';

        // Disable submit button
        if (submitButton) {
            submitButton.disabled = true;
            submitButton.textContent = 'Sending...';
        }

        // Simulate sending (would be replaced with actual backend call)
        console.log('Sending form to info@fitechnologies.ca', data);

        // Simulate network delay
        setTimeout(function() {
            // Re-enable button
            if (submitButton) {
                submitButton.disabled = false;
                submitButton.textContent = originalButtonText;
            }

            // Show success message
            const successMessage = form.querySelector('.form-success');
            if (successMessage) {
                successMessage.classList.add('active');

                // Scroll to success message
                successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }

            // Reset form
            form.reset();
            clearFormErrors(form);

            // If this is a modal form, close after 2 seconds
            if (form.id === 'quoteForm' && quoteModal) {
                setTimeout(function() {
                    closeQuoteModal();
                }, 2000);
            }

            // If this is the contact page form, scroll to top after 3 seconds
            if (form.id === 'contactForm') {
                setTimeout(function() {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }, 3000);
            }
        }, 1500);
    }

    // Attach submit handlers to all forms
    if (quoteForm) {
        quoteForm.addEventListener('submit', function(e) {
            handleFormSubmit(this, e);
        });
    }

    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            handleFormSubmit(this, e);
        });
    }

    // ============================================
    // Service Selection from Cards
    // ============================================
    const serviceCardButtons = document.querySelectorAll('[data-service]');

    serviceCardButtons.forEach(button => {
        button.addEventListener('click', function() {
            const serviceName = this.getAttribute('data-service');

            // Open modal
            openQuoteModal();

            // Pre-select the service in dropdown
            if (quoteForm) {
                const serviceSelect = quoteForm.querySelector('select[name="service"]');
                if (serviceSelect && serviceName) {
                    setTimeout(function() {
                        serviceSelect.value = serviceName;
                    }, 100);
                }
            }
        });
    });
});
