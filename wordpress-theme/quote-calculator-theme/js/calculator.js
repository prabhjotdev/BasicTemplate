/**
 * Quote Calculator Frontend JavaScript
 * Handles all calculator logic and interactions for WordPress theme
 */

(function() {
    'use strict';

    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initCalculator);
    } else {
        initCalculator();
    }

    function initCalculator() {
        // Find the calculator form
        const form = document.getElementById('quoteForm');
        if (!form) return; // Exit if form not found on page

        // Pricing configuration
        const PRICING = {
            basePrice: {
                house: 500,
                business: 800
            },
            cameraPrice: {
                wired: 150,
                wireless: 200
            },
            placementMultiplier: {
                indoor: 1.0,
                outdoor: 1.3
            },
            margin: 0.2 // 20% price range margin
        };

        // Sync camera number input with range slider
        const numCamerasInput = document.getElementById('numCameras');
        const cameraRangeInput = document.getElementById('cameraRange');

        if (numCamerasInput && cameraRangeInput) {
            numCamerasInput.addEventListener('input', function(e) {
                const value = Math.min(20, Math.max(1, e.target.value));
                cameraRangeInput.value = value;
            });

            cameraRangeInput.addEventListener('input', function(e) {
                numCamerasInput.value = e.target.value;
            });
        }

        // Form submission handler
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form values
            const propertyTypeInput = document.querySelector('input[name="propertyType"]:checked');
            const systemTypeInput = document.querySelector('input[name="systemType"]:checked');
            const placementInput = document.querySelector('input[name="placement"]:checked');

            // Validate all required fields
            if (!propertyTypeInput || !systemTypeInput || !placementInput) {
                alert('Please fill in all required fields.');
                return;
            }

            const formData = {
                propertyType: propertyTypeInput.value,
                numCameras: parseInt(numCamerasInput.value),
                systemType: systemTypeInput.value,
                placement: placementInput.value
            };

            // Calculate price
            const estimate = calculateEstimate(formData);

            // Display results
            displayResults(estimate, formData);
        });

        // Calculate estimate based on form data
        function calculateEstimate(data) {
            // Base price depending on property type
            let basePrice = PRICING.basePrice[data.propertyType];

            // Add camera costs
            let cameraCost = data.numCameras * PRICING.cameraPrice[data.systemType];

            // Apply placement multiplier
            let placementMultiplier = PRICING.placementMultiplier[data.placement];

            // Calculate total
            let totalPrice = (basePrice + cameraCost) * placementMultiplier;

            // Calculate range (±20%)
            let minPrice = Math.round(totalPrice * (1 - PRICING.margin));
            let maxPrice = Math.round(totalPrice * (1 + PRICING.margin));

            return {
                min: minPrice,
                max: maxPrice,
                breakdown: {
                    basePrice: basePrice,
                    cameraCost: cameraCost,
                    placementMultiplier: placementMultiplier
                }
            };
        }

        // Display results
        function displayResults(estimate, formData) {
            // Hide form, show results
            const calculatorForm = document.getElementById('calculatorForm');
            const resultsSection = document.getElementById('resultsSection');

            if (calculatorForm) calculatorForm.classList.add('hidden');
            if (resultsSection) resultsSection.classList.remove('hidden');

            // Update price range
            const priceRangeElement = document.getElementById('priceRange');
            if (priceRangeElement) {
                priceRangeElement.textContent = '$' + estimate.min.toLocaleString() + ' - $' + estimate.max.toLocaleString();
            }

            // Build details list
            const detailsList = document.getElementById('quoteDetails');
            if (detailsList) {
                detailsList.innerHTML = '';

                const details = [
                    {
                        label: 'Property Type',
                        value: capitalizeFirst(formData.propertyType)
                    },
                    {
                        label: 'Number of Cameras',
                        value: formData.numCameras
                    },
                    {
                        label: 'System Type',
                        value: capitalizeFirst(formData.systemType)
                    },
                    {
                        label: 'Camera Placement',
                        value: formData.placement === 'indoor' ? 'Indoor Only' : 'Outdoor/Mixed'
                    }
                ];

                details.forEach(function(detail) {
                    const li = document.createElement('li');
                    li.className = 'flex justify-between py-2 border-b border-gray-200';
                    li.innerHTML = '<span class="font-medium">' + detail.label + ':</span>' +
                                   '<span>' + detail.value + '</span>';
                    detailsList.appendChild(li);
                });
            }

            // Scroll to results
            if (resultsSection) {
                resultsSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }

        // Back button handler
        const backButton = document.getElementById('backButton');
        if (backButton) {
            backButton.addEventListener('click', function() {
                // Show form, hide results
                const calculatorForm = document.getElementById('calculatorForm');
                const resultsSection = document.getElementById('resultsSection');

                if (calculatorForm) calculatorForm.classList.remove('hidden');
                if (resultsSection) resultsSection.classList.add('hidden');

                // Scroll to top
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }

        // Helper function to capitalize first letter
        function capitalizeFirst(str) {
            return str.charAt(0).toUpperCase() + str.slice(1);
        }

        console.log('Quote Calculator initialized successfully');
    }
})();
