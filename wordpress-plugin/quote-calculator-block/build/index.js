/**
 * WordPress dependencies
 */
const { registerBlockType } = wp.blocks;
const { useBlockProps } = wp.blockEditor;

/**
 * Register the Quote Calculator block
 */
registerBlockType('quote-calculator/calculator-block', {
    edit: function Edit() {
        const blockProps = useBlockProps();

        return (
            <div {...blockProps}>
                <div style={{
                    border: '2px dashed #ccc',
                    padding: '40px',
                    textAlign: 'center',
                    backgroundColor: '#f9f9f9',
                    borderRadius: '8px'
                }}>
                    <svg
                        style={{
                            width: '48px',
                            height: '48px',
                            margin: '0 auto 16px',
                            opacity: 0.5
                        }}
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            strokeWidth="2"
                            d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"
                        />
                    </svg>
                    <h3 style={{ margin: '0 0 8px', fontSize: '18px', fontWeight: '600' }}>
                        Quote Calculator Block
                    </h3>
                    <p style={{ margin: 0, color: '#666', fontSize: '14px' }}>
                        This block will display the interactive quote calculator on the frontend.
                    </p>
                    <p style={{ margin: '8px 0 0', color: '#999', fontSize: '12px' }}>
                        Preview is not available in the editor.
                    </p>
                </div>
            </div>
        );
    },

    save: function Save() {
        const blockProps = useBlockProps.save();

        return (
            <div {...blockProps}>
                <div className="quote-calculator-wrapper">
                    {/* Header */}
                    <div className="text-center mb-8">
                        <h2 className="text-4xl font-bold text-gray-900 mb-2">Security System Quote</h2>
                        <p className="text-gray-600">Get an instant estimate for your security installation</p>
                    </div>

                    {/* Calculator Form */}
                    <div className="bg-white rounded-lg shadow-lg p-8" id="calculatorForm">
                        <form id="quoteForm" className="space-y-6">

                            {/* Question 1: Property Type */}
                            <div className="form-group">
                                <label className="block text-lg font-semibold text-gray-900 mb-3">
                                    Property Type
                                </label>
                                <div className="grid grid-cols-2 gap-4">
                                    <label className="relative flex items-center justify-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-blue-500 transition-all">
                                        <input type="radio" name="propertyType" value="house" className="sr-only peer" required />
                                        <div className="text-center peer-checked:text-blue-600">
                                            <svg className="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                            </svg>
                                            <span className="font-medium">House</span>
                                        </div>
                                        <div className="absolute inset-0 border-2 border-blue-600 rounded-lg hidden peer-checked:block"></div>
                                    </label>

                                    <label className="relative flex items-center justify-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-blue-500 transition-all">
                                        <input type="radio" name="propertyType" value="business" className="sr-only peer" />
                                        <div className="text-center peer-checked:text-blue-600">
                                            <svg className="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                            </svg>
                                            <span className="font-medium">Business</span>
                                        </div>
                                        <div className="absolute inset-0 border-2 border-blue-600 rounded-lg hidden peer-checked:block"></div>
                                    </label>
                                </div>
                            </div>

                            {/* Question 2: Number of Cameras */}
                            <div className="form-group">
                                <label htmlFor="numCameras" className="block text-lg font-semibold text-gray-900 mb-3">
                                    Number of Cameras
                                </label>
                                <input
                                    type="number"
                                    id="numCameras"
                                    name="numCameras"
                                    min="1"
                                    max="50"
                                    defaultValue="4"
                                    required
                                    className="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none text-lg"
                                />
                                <input
                                    type="range"
                                    id="cameraRange"
                                    min="1"
                                    max="20"
                                    defaultValue="4"
                                    className="w-full mt-2 h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-blue-600"
                                />
                            </div>

                            {/* Question 3: Wired or Wireless */}
                            <div className="form-group">
                                <label className="block text-lg font-semibold text-gray-900 mb-3">
                                    System Type
                                </label>
                                <div className="grid grid-cols-2 gap-4">
                                    <label className="relative flex items-center justify-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-blue-500 transition-all">
                                        <input type="radio" name="systemType" value="wired" className="sr-only peer" required />
                                        <div className="text-center peer-checked:text-blue-600">
                                            <svg className="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                            </svg>
                                            <span className="font-medium">Wired</span>
                                        </div>
                                        <div className="absolute inset-0 border-2 border-blue-600 rounded-lg hidden peer-checked:block"></div>
                                    </label>

                                    <label className="relative flex items-center justify-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-blue-500 transition-all">
                                        <input type="radio" name="systemType" value="wireless" className="sr-only peer" />
                                        <div className="text-center peer-checked:text-blue-600">
                                            <svg className="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                                            </svg>
                                            <span className="font-medium">Wireless</span>
                                        </div>
                                        <div className="absolute inset-0 border-2 border-blue-600 rounded-lg hidden peer-checked:block"></div>
                                    </label>
                                </div>
                            </div>

                            {/* Question 4: Indoor/Outdoor */}
                            <div className="form-group">
                                <label className="block text-lg font-semibold text-gray-900 mb-3">
                                    Camera Placement
                                </label>
                                <div className="grid grid-cols-2 gap-4">
                                    <label className="relative flex items-center justify-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-blue-500 transition-all">
                                        <input type="radio" name="placement" value="indoor" className="sr-only peer" required />
                                        <div className="text-center peer-checked:text-blue-600">
                                            <svg className="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                            </svg>
                                            <span className="font-medium">Indoor Only</span>
                                        </div>
                                        <div className="absolute inset-0 border-2 border-blue-600 rounded-lg hidden peer-checked:block"></div>
                                    </label>

                                    <label className="relative flex items-center justify-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-blue-500 transition-all">
                                        <input type="radio" name="placement" value="outdoor" className="sr-only peer" />
                                        <div className="text-center peer-checked:text-blue-600">
                                            <svg className="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <span className="font-medium">Outdoor/Mixed</span>
                                        </div>
                                        <div className="absolute inset-0 border-2 border-blue-600 rounded-lg hidden peer-checked:block"></div>
                                    </label>
                                </div>
                            </div>

                            {/* Calculate Button */}
                            <button
                                type="submit"
                                className="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 px-6 rounded-lg transition-colors text-lg shadow-md">
                                Calculate Estimate
                            </button>
                        </form>
                    </div>

                    {/* Results Section (Hidden by default) */}
                    <div className="bg-white rounded-lg shadow-lg p-8 mt-8 hidden" id="resultsSection">
                        <div className="text-center">
                            <h2 className="text-3xl font-bold text-gray-900 mb-4">Your Estimated Quote</h2>

                            {/* Price Range Display */}
                            <div className="bg-blue-50 border-2 border-blue-200 rounded-lg p-6 mb-6">
                                <p className="text-gray-600 mb-2">Estimated Price Range</p>
                                <p className="text-5xl font-bold text-blue-600" id="priceRange">
                                    $0 - $0
                                </p>
                            </div>

                            {/* Details */}
                            <div className="text-left bg-gray-50 rounded-lg p-6 mb-6">
                                <h3 className="font-semibold text-lg mb-3 text-gray-900">Quote Details:</h3>
                                <ul className="space-y-2 text-gray-700" id="quoteDetails">
                                    {/* Details will be inserted here by JavaScript */}
                                </ul>
                            </div>

                            {/* CTA Button */}
                            <button
                                className="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-4 px-6 rounded-lg transition-colors text-lg shadow-md mb-4">
                                Request Final Quote
                            </button>

                            {/* Back Button */}
                            <button
                                id="backButton"
                                className="w-full bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-3 px-6 rounded-lg transition-colors">
                                Start Over
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        );
    },
});
