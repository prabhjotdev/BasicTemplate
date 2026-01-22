<?php
/**
 * Calculator Template Part
 * This can be used via shortcode [quote_calculator] or the page template
 *
 * @package Quote_Calculator_Theme
 */
?>

<div class="quote-calculator-container">

    <!-- Header -->
    <div class="text-center mb-8">
        <h2 class="text-4xl font-bold text-gray-900 mb-2">Security System Quote</h2>
        <p class="text-gray-600">Get an instant estimate for your security installation</p>
    </div>

    <!-- Calculator Form -->
    <div class="bg-white rounded-lg shadow-lg p-8" id="calculatorForm">
        <form id="quoteForm" class="space-y-6">

            <!-- Question 1: Property Type -->
            <div class="form-group">
                <label class="block text-lg font-semibold text-gray-900 mb-3">
                    Property Type
                </label>
                <div class="grid grid-cols-2 gap-4">
                    <label class="relative flex items-center justify-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-blue-500 transition-all">
                        <input type="radio" name="propertyType" value="house" class="sr-only peer" required>
                        <div class="text-center peer-checked:text-blue-600">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span class="font-medium">House</span>
                        </div>
                        <div class="absolute inset-0 border-2 border-blue-600 rounded-lg hidden peer-checked:block"></div>
                    </label>

                    <label class="relative flex items-center justify-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-blue-500 transition-all">
                        <input type="radio" name="propertyType" value="business" class="sr-only peer">
                        <div class="text-center peer-checked:text-blue-600">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            <span class="font-medium">Business</span>
                        </div>
                        <div class="absolute inset-0 border-2 border-blue-600 rounded-lg hidden peer-checked:block"></div>
                    </label>
                </div>
            </div>

            <!-- Question 2: Number of Cameras -->
            <div class="form-group">
                <label for="numCameras" class="block text-lg font-semibold text-gray-900 mb-3">
                    Number of Cameras
                </label>
                <input
                    type="number"
                    id="numCameras"
                    name="numCameras"
                    min="1"
                    max="50"
                    value="4"
                    required
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none text-lg"
                >
                <input
                    type="range"
                    id="cameraRange"
                    min="1"
                    max="20"
                    value="4"
                    class="w-full mt-2 h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-blue-600"
                >
            </div>

            <!-- Question 3: Wired or Wireless -->
            <div class="form-group">
                <label class="block text-lg font-semibold text-gray-900 mb-3">
                    System Type
                </label>
                <div class="grid grid-cols-2 gap-4">
                    <label class="relative flex items-center justify-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-blue-500 transition-all">
                        <input type="radio" name="systemType" value="wired" class="sr-only peer" required>
                        <div class="text-center peer-checked:text-blue-600">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                            <span class="font-medium">Wired</span>
                        </div>
                        <div class="absolute inset-0 border-2 border-blue-600 rounded-lg hidden peer-checked:block"></div>
                    </label>

                    <label class="relative flex items-center justify-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-blue-500 transition-all">
                        <input type="radio" name="systemType" value="wireless" class="sr-only peer">
                        <div class="text-center peer-checked:text-blue-600">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-15.857 21.213 0"></path>
                            </svg>
                            <span class="font-medium">Wireless</span>
                        </div>
                        <div class="absolute inset-0 border-2 border-blue-600 rounded-lg hidden peer-checked:block"></div>
                    </label>
                </div>
            </div>

            <!-- Question 4: Indoor/Outdoor -->
            <div class="form-group">
                <label class="block text-lg font-semibold text-gray-900 mb-3">
                    Camera Placement
                </label>
                <div class="grid grid-cols-2 gap-4">
                    <label class="relative flex items-center justify-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-blue-500 transition-all">
                        <input type="radio" name="placement" value="indoor" class="sr-only peer" required>
                        <div class="text-center peer-checked:text-blue-600">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span class="font-medium">Indoor Only</span>
                        </div>
                        <div class="absolute inset-0 border-2 border-blue-600 rounded-lg hidden peer-checked:block"></div>
                    </label>

                    <label class="relative flex items-center justify-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-blue-500 transition-all">
                        <input type="radio" name="placement" value="outdoor" class="sr-only peer">
                        <div class="text-center peer-checked:text-blue-600">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="font-medium">Outdoor/Mixed</span>
                        </div>
                        <div class="absolute inset-0 border-2 border-blue-600 rounded-lg hidden peer-checked:block"></div>
                    </label>
                </div>
            </div>

            <!-- Calculate Button -->
            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 px-6 rounded-lg transition-colors text-lg shadow-md">
                Calculate Estimate
            </button>
        </form>
    </div>

    <!-- Results Section (Hidden by default) -->
    <div class="bg-white rounded-lg shadow-lg p-8 mt-8 hidden" id="resultsSection">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Your Estimated Quote</h2>

            <!-- Price Range Display -->
            <div class="bg-blue-50 border-2 border-blue-200 rounded-lg p-6 mb-6">
                <p class="text-gray-600 mb-2">Estimated Price Range</p>
                <p class="text-5xl font-bold text-blue-600" id="priceRange">
                    $0 - $0
                </p>
            </div>

            <!-- Details -->
            <div class="text-left bg-gray-50 rounded-lg p-6 mb-6">
                <h3 class="font-semibold text-lg mb-3 text-gray-900">Quote Details:</h3>
                <ul class="space-y-2 text-gray-700" id="quoteDetails">
                    <!-- Details will be inserted here by JavaScript -->
                </ul>
            </div>

            <!-- CTA Button -->
            <button
                class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-4 px-6 rounded-lg transition-colors text-lg shadow-md mb-4">
                Request Final Quote
            </button>

            <!-- Back Button -->
            <button
                id="backButton"
                class="w-full bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-3 px-6 rounded-lg transition-colors">
                Start Over
            </button>
        </div>
    </div>

</div>
