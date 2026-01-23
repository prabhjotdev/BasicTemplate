/**
 * FI Technologies - UI Components
 * Handles testimonial sliders, FAQ accordions, and other interactive UI elements
 */

document.addEventListener('DOMContentLoaded', function() {
    // ============================================
    // Testimonial Slider
    // ============================================
    const sliders = document.querySelectorAll('.testimonial-slider');

    sliders.forEach(slider => {
        const track = slider.querySelector('.testimonial-track');
        const slides = slider.querySelectorAll('.testimonial-slide');
        const prevBtn = slider.querySelector('.slider-btn-prev');
        const nextBtn = slider.querySelector('.slider-btn-next');

        if (!track || slides.length === 0) return;

        let currentIndex = 0;
        const totalSlides = slides.length;

        function updateSlider() {
            const offset = -currentIndex * 100;
            track.style.transform = `translateX(${offset}%)`;

            // Update button states
            if (prevBtn) {
                prevBtn.disabled = currentIndex === 0;
            }
            if (nextBtn) {
                nextBtn.disabled = currentIndex === totalSlides - 1;
            }
        }

        function goToSlide(index) {
            if (index < 0 || index >= totalSlides) return;
            currentIndex = index;
            updateSlider();
        }

        function nextSlide() {
            if (currentIndex < totalSlides - 1) {
                currentIndex++;
                updateSlider();
            }
        }

        function prevSlide() {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        }

        // Event listeners
        if (nextBtn) {
            nextBtn.addEventListener('click', nextSlide);
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', prevSlide);
        }

        // Keyboard navigation
        slider.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') {
                prevSlide();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
            }
        });

        // Touch/swipe support
        let touchStartX = 0;
        let touchEndX = 0;

        slider.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        });

        slider.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });

        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;

            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    // Swipe left - next slide
                    nextSlide();
                } else {
                    // Swipe right - prev slide
                    prevSlide();
                }
            }
        }

        // Auto-play (optional, disabled by default for accessibility)
        // Uncomment to enable auto-play
        /*
        let autoplayInterval;
        const autoplayDelay = 5000;

        function startAutoplay() {
            autoplayInterval = setInterval(function() {
                if (currentIndex < totalSlides - 1) {
                    nextSlide();
                } else {
                    goToSlide(0);
                }
            }, autoplayDelay);
        }

        function stopAutoplay() {
            clearInterval(autoplayInterval);
        }

        // Start autoplay
        startAutoplay();

        // Pause on hover/focus
        slider.addEventListener('mouseenter', stopAutoplay);
        slider.addEventListener('mouseleave', startAutoplay);
        slider.addEventListener('focusin', stopAutoplay);
        slider.addEventListener('focusout', startAutoplay);
        */

        // Initialize
        updateSlider();
    });

    // ============================================
    // FAQ Accordion
    // ============================================
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');

        if (!question || !answer) return;

        question.addEventListener('click', function() {
            const isActive = item.classList.contains('active');

            // Close all other FAQ items (optional - comment out for allow multiple open)
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                    const otherQuestion = otherItem.querySelector('.faq-question');
                    if (otherQuestion) {
                        otherQuestion.setAttribute('aria-expanded', 'false');
                    }
                }
            });

            // Toggle current item
            item.classList.toggle('active');
            question.setAttribute('aria-expanded', !isActive);

            // Smooth scroll to item if opening
            if (!isActive) {
                setTimeout(function() {
                    item.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 300);
            }
        });

        // Keyboard support
        question.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                question.click();
            }
        });

        // Set initial aria-expanded
        question.setAttribute('aria-expanded', 'false');
    });

    // ============================================
    // Lazy Load Images (if any)
    // ============================================
    if ('IntersectionObserver' in window) {
        const lazyImages = document.querySelectorAll('img[data-src]');

        const imageObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.getAttribute('data-src');
                    img.removeAttribute('data-src');
                    imageObserver.unobserve(img);
                }
            });
        });

        lazyImages.forEach(img => imageObserver.observe(img));
    }

    // ============================================
    // Card Hover Effects Enhancement
    // ============================================
    const cards = document.querySelectorAll('.card, .service-card, .package-card');

    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.setProperty('--hover-scale', '1.02');
        });

        card.addEventListener('mouseleave', function() {
            this.style.setProperty('--hover-scale', '1');
        });
    });

    // ============================================
    // Service Area Highlight (if present)
    // ============================================
    const serviceAreaItems = document.querySelectorAll('.service-area-item');

    serviceAreaItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.backgroundColor = 'var(--color-secondary)';
            this.style.color = 'var(--color-white)';
        });

        item.addEventListener('mouseleave', function() {
            this.style.backgroundColor = '';
            this.style.color = '';
        });
    });

    // ============================================
    // Scroll Reveal Animation (Simple)
    // ============================================
    if ('IntersectionObserver' in window) {
        const revealElements = document.querySelectorAll('.reveal-on-scroll');

        const revealObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15
        });

        revealElements.forEach(el => revealObserver.observe(el));
    }

    // ============================================
    // Print Detection
    // ============================================
    window.addEventListener('beforeprint', function() {
        console.log('Preparing to print page...');
        // Hide elements that shouldn't be printed
        const noPrintElements = document.querySelectorAll('.mobile-bottom-bar, .back-to-top');
        noPrintElements.forEach(el => el.style.display = 'none');
    });

    window.addEventListener('afterprint', function() {
        console.log('Print complete');
        // Restore hidden elements
        const noPrintElements = document.querySelectorAll('.mobile-bottom-bar, .back-to-top');
        noPrintElements.forEach(el => el.style.display = '');
    });

    // ============================================
    // Copy to Clipboard (for phone numbers, email)
    // ============================================
    const copyButtons = document.querySelectorAll('[data-copy]');

    copyButtons.forEach(button => {
        button.addEventListener('click', function() {
            const textToCopy = this.getAttribute('data-copy');

            if (navigator.clipboard && textToCopy) {
                navigator.clipboard.writeText(textToCopy).then(function() {
                    // Show feedback
                    const originalText = button.textContent;
                    button.textContent = 'Copied!';

                    setTimeout(function() {
                        button.textContent = originalText;
                    }, 2000);
                }).catch(function(err) {
                    console.error('Failed to copy:', err);
                });
            }
        });
    });

    // ============================================
    // Timezone Display (show business hours in user's timezone)
    // ============================================
    const hoursElements = document.querySelectorAll('[data-hours]');

    hoursElements.forEach(element => {
        // Display timezone info
        const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
        const hoursNote = element.querySelector('.hours-note');

        if (hoursNote) {
            hoursNote.textContent = `All times displayed in EST (Eastern Time)`;
        }
    });
});
