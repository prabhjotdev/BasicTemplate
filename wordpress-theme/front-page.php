<?php
/**
 * Template Name: Home Page
 * The front page template file
 */

get_header();
?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Security Solutions For Your Home & Business</h1>
                <p class="hero-subtitle">The Future Of Home Experience Is Here</p>
                <div class="hero-actions">
                    <button class="btn btn-primary btn-lg" data-action="open-quote">Get a Free Quote</button>
                    <button class="btn btn-outline-white btn-lg" data-action="call" data-phone="+16477999973">Call Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Row -->
    <section class="trust-row">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number" data-count="15">15+</div>
                    <div class="stat-label">Years of Experience</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number" data-count="1000">1000+</div>
                    <div class="stat-label">Canadians Served</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number" data-count="7">7+</div>
                    <div class="stat-label">Years Professional Installation</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number" data-count="7">7</div>
                    <div class="stat-label">Days a Week Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2>Our Services</h2>
                <p class="section-subtitle">Professional installation and support for all your home and business security needs</p>
            </div>

            <div class="grid grid-3">
                <!-- Security Cameras -->
                <div class="card">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path d="M23 19a2 2 0 01-2 2H3a2 2 0 01-2-2V8a2 2 0 012-2h4l2-3h6l2 3h4a2 2 0 012 2z"/>
                        <circle cx="12" cy="13" r="4"/>
                    </svg>
                    <h3 class="card-title">Security Cameras</h3>
                    <div class="card-text">
                        <p>Advanced surveillance systems with color night vision, AI detection, and mobile access.</p>
                    </div>
                    <button class="btn btn-outline" data-action="open-quote" data-service="Security Cameras">Get Quote</button>
                </div>

                <!-- Smart Home Automation -->
                <div class="card">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                    <h3 class="card-title">Smart Home Automation</h3>
                    <div class="card-text">
                        <p>Transform your home with intelligent automation for lighting, climate, and more.</p>
                    </div>
                    <button class="btn btn-outline" data-action="open-quote" data-service="Smart Home Automation">Get Quote</button>
                </div>

                <!-- Video Door Bells -->
                <div class="card">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
                        <circle cx="12" cy="14" r="4"/>
                    </svg>
                    <h3 class="card-title">Video Door Bells</h3>
                    <div class="card-text">
                        <p>See who's at your door from anywhere with smart video doorbell solutions.</p>
                    </div>
                    <button class="btn btn-outline" data-action="open-quote" data-service="Video Door Bells">Get Quote</button>
                </div>

                <!-- WIFI Solutions -->
                <div class="card">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path d="M5 12.55a11 11 0 0114.08 0"/>
                        <path d="M1.42 9a16 16 0 0121.16 0"/>
                        <path d="M8.53 16.11a6 6 0 016.95 0"/>
                        <line x1="12" y1="20" x2="12.01" y2="20"/>
                    </svg>
                    <h3 class="card-title">WIFI Solutions</h3>
                    <div class="card-text">
                        <p>High-speed, reliable WiFi coverage throughout your entire property.</p>
                    </div>
                    <button class="btn btn-outline" data-action="open-quote" data-service="WIFI Solutions">Get Quote</button>
                </div>

                <!-- Networking -->
                <div class="card">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                        <path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/>
                    </svg>
                    <h3 class="card-title">Networking</h3>
                    <div class="card-text">
                        <p>Professional network setup and configuration for optimal connectivity.</p>
                    </div>
                    <button class="btn btn-outline" data-action="open-quote" data-service="Networking">Get Quote</button>
                </div>

                <!-- Home Theater Installation -->
                <div class="card">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <rect x="2" y="7" width="20" height="15" rx="2" ry="2"/>
                        <polyline points="17 2 12 7 7 2"/>
                    </svg>
                    <h3 class="card-title">Home Theater Installation</h3>
                    <div class="card-text">
                        <p>Premium home theater systems for the ultimate entertainment experience.</p>
                    </div>
                    <button class="btn btn-outline" data-action="open-quote" data-service="Home Theater Installation">Get Quote</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section class="section bg-light">
        <div class="container">
            <div class="section-header">
                <h2>Featured Packages</h2>
                <p class="section-subtitle">Complete security solutions with professional installation included</p>
            </div>

            <div class="grid grid-2">
                <!-- Package 1 -->
                <div class="package-card">
                    <h3 class="package-name">4 Color Night Vision Cameras DVR Package</h3>
                    <div class="package-price">$1,100</div>
                    <ul class="package-features">
                        <li>1x color night vision camera</li>
                        <li>3x infrared night vision cameras</li>
                        <li>1TB hard drive</li>
                        <li>Canadian weatherproof</li>
                        <li>Free lifetime mobile App access</li>
                    </ul>
                    <button class="btn btn-primary btn-block" data-action="open-quote" data-service="Security Cameras">Get This Package</button>
                </div>

                <!-- Package 2 -->
                <div class="package-card">
                    <h3 class="package-name">4 AI Color Night Vision Cameras NVR Package</h3>
                    <div class="package-price">$1,450</div>
                    <ul class="package-features">
                        <li>4x color night vision IP cameras</li>
                        <li>Artificial Intelligence feature (Human, vehicle, face, license plate detection)</li>
                        <li>Canadian weatherproof</li>
                        <li>Network video recorder with 1TB hard drive</li>
                        <li>Audio recording on all cameras</li>
                        <li>Free lifetime mobile App access</li>
                    </ul>
                    <button class="btn btn-primary btn-block" data-action="open-quote" data-service="Security Cameras">Get This Package</button>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2>How It Works</h2>
                <p class="section-subtitle">Getting started is easy with our simple 3-step process</p>
            </div>

            <div class="steps-grid">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h3 class="step-title">Request a Quote</h3>
                    <p class="step-text">Fill out our simple form or give us a call. We'll discuss your needs and provide a free, no-obligation quote.</p>
                </div>

                <div class="step-card">
                    <div class="step-number">2</div>
                    <h3 class="step-title">Custom Installation Plan</h3>
                    <p class="step-text">Our experts will create a tailored installation plan that fits your property and budget perfectly.</p>
                </div>

                <div class="step-card">
                    <div class="step-number">3</div>
                    <h3 class="step-title">Professional Installation & Support</h3>
                    <p class="step-text">Our certified technicians install your system with precision, followed by training and ongoing support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Preview -->
    <section class="section bg-light">
        <div class="container">
            <div class="section-header">
                <h2>What Our Clients Say</h2>
                <p class="section-subtitle">Real experiences from satisfied customers across Ontario</p>
            </div>

            <div class="grid grid-2">
                <!-- Real Testimonial 1 -->
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">"FI Technologies installed a complete security camera system at our home. The team was professional, punctual, and the quality of work was outstanding. We can now monitor our property from anywhere with crystal clear video quality."</p>
                    <div class="testimonial-author">Michael R.</div>
                    <div class="testimonial-location">Toronto, ON</div>
                </div>

                <!-- Real Testimonial 2 -->
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">"Excellent service from start to finish! They helped us upgrade our home WiFi and install smart home automation. Everything works seamlessly and their support team is always available when we need help."</p>
                    <div class="testimonial-author">Sarah K.</div>
                    <div class="testimonial-location">Mississauga, ON</div>
                </div>

                <!-- Placeholder Testimonial 3 -->
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">"Professional installation of our business security system. The AI detection features are incredible and have given us peace of mind. Highly recommend FI Technologies for any security needs."</p>
                    <div class="testimonial-author">[Placeholder - John D.]</div>
                    <div class="testimonial-location">Brampton, ON</div>
                </div>

                <!-- Placeholder Testimonial 4 -->
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">"Great experience with the home theater installation. The team was knowledgeable, efficient, and cleaned up perfectly after the job. Our entertainment system looks and sounds amazing!"</p>
                    <div class="testimonial-author">[Placeholder - Lisa M.]</div>
                    <div class="testimonial-location">Markham, ON</div>
                </div>
            </div>

            <div class="text-center mt-xl">
                <a href="<?php echo esc_url(home_url('/reviews')); ?>" class="btn btn-outline">View All Reviews</a>
            </div>
        </div>
    </section>

    <!-- Service Area -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2>Proudly Serving Ontario & GTA</h2>
                <p class="section-subtitle">Professional installation and support throughout the Greater Toronto Area and across Ontario</p>
            </div>

            <div class="text-center">
                <p style="font-size: 1.125rem; max-width: 600px; margin: 0 auto;">We provide expert security and smart home solutions to residential and commercial clients across Ontario, with a focus on the Greater Toronto Area.</p>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="cta-section">
        <div class="container">
            <h2>Ready to Secure Your Property?</h2>
            <p>Get a free, no-obligation quote today and discover how FI Technologies can protect what matters most to you.</p>
            <div class="hero-actions">
                <button class="btn btn-outline-white btn-lg" data-action="open-quote">Get a Free Quote</button>
                <button class="btn btn-outline-white btn-lg" data-action="call" data-phone="+16477999973">Call: +1 647-799-9973</button>
            </div>
        </div>
    </section>

<?php
get_footer();
?>
