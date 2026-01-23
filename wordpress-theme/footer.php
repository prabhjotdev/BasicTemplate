    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Company Info -->
                <div class="footer-section">
                    <h3><?php bloginfo('name'); ?></h3>
                    <p class="footer-text"><?php bloginfo('description'); ?></p>
                    <button class="btn btn-primary" data-action="open-quote">Get a Free Quote</button>
                </div>

                <!-- Quick Links -->
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-link">Home</a>
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="footer-link">Services</a>
                    <a href="<?php echo esc_url(home_url('/about')); ?>" class="footer-link">About Us</a>
                    <a href="<?php echo esc_url(home_url('/reviews')); ?>" class="footer-link">Reviews</a>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="footer-link">Contact</a>
                </div>

                <!-- Services -->
                <div class="footer-section">
                    <h3>Services</h3>
                    <a href="<?php echo esc_url(home_url('/services#cameras')); ?>" class="footer-link">Security Cameras</a>
                    <a href="<?php echo esc_url(home_url('/services#automation')); ?>" class="footer-link">Smart Home Automation</a>
                    <a href="<?php echo esc_url(home_url('/services#doorbells')); ?>" class="footer-link">Video Door Bells</a>
                    <a href="<?php echo esc_url(home_url('/services#wifi')); ?>" class="footer-link">WIFI Solutions</a>
                    <a href="<?php echo esc_url(home_url('/services#networking')); ?>" class="footer-link">Networking</a>
                    <a href="<?php echo esc_url(home_url('/services#theater')); ?>" class="footer-link">Home Theater</a>
                </div>

                <!-- Contact Info -->
                <div class="footer-section">
                    <h3>Contact Us</h3>
                    <div class="footer-contact-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
                        </svg>
                        <div>
                            <div>+1 647-799-9973</div>
                            <div>1-647-701-2132</div>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                        <div>info@fitechnologies.ca</div>
                    </div>
                    <div class="footer-contact-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                        <div>7 days a week<br>9:00 AM - 9:00 PM</div>
                    </div>
                    <div class="footer-contact-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        <div>Serving Ontario & GTA</div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved. Security Solutions For Your Home & Business.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Bottom Bar -->
    <div class="mobile-bottom-bar">
        <button class="mobile-bottom-btn" data-action="call" data-phone="+16477999973" aria-label="Call us">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
            </svg>
            Call
        </button>
        <button class="mobile-bottom-btn primary" data-action="open-quote" aria-label="Get a free quote">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path d="M9 11l3 3L22 4"/>
                <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>
            </svg>
            Quote
        </button>
        <button class="mobile-bottom-btn" data-action="email" data-email="info@fitechnologies.ca" aria-label="Email us">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                <polyline points="22,6 12,13 2,6"/>
            </svg>
            Email
        </button>
    </div>

    <!-- Back to Top Button -->
    <button class="back-to-top" aria-label="Back to top">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <polyline points="18 15 12 9 6 15"/>
        </svg>
    </button>

    <!-- Quote Modal -->
    <div class="modal" id="quoteModal" role="dialog" aria-labelledby="modalTitle" aria-modal="true">
        <div class="modal-backdrop"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="modalTitle">Get a Free Quote</h2>
                <button class="modal-close" aria-label="Close modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="quoteForm" novalidate>
                    <div class="form-success">
                        <strong>Thank you!</strong> Your request has been sent. We'll contact you shortly.
                    </div>

                    <div class="form-group">
                        <label for="first_name" class="form-label required">First Name</label>
                        <input type="text" id="first_name" name="first_name" class="form-input" required>
                        <div class="form-error"></div>
                    </div>

                    <div class="form-group">
                        <label for="last_name" class="form-label required">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="form-input" required>
                        <div class="form-error"></div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="form-label required">Telephone</label>
                        <input type="tel" id="phone" name="phone" class="form-input" required>
                        <div class="form-error"></div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-input">
                        <div class="form-error"></div>
                    </div>

                    <div class="form-group">
                        <label for="service" class="form-label required">Service Needed</label>
                        <select id="service" name="service" class="form-select" required>
                            <option value="">-- Select a Service --</option>
                            <option value="Security Cameras">Security Cameras</option>
                            <option value="Smart Home Automation">Smart Home Automation</option>
                            <option value="Video Door Bells">Video Door Bells</option>
                            <option value="WIFI Solutions">WIFI Solutions</option>
                            <option value="Networking">Networking</option>
                            <option value="Home Theater Installation">Home Theater Installation</option>
                        </select>
                        <div class="form-error"></div>
                    </div>

                    <div class="form-group">
                        <label for="location" class="form-label required">City/Postal Code</label>
                        <input type="text" id="location" name="location" class="form-input" required>
                        <div class="form-error"></div>
                    </div>

                    <div class="form-group">
                        <label class="form-label required">Preferred Contact Method</label>
                        <div class="form-radio-group">
                            <div class="form-radio">
                                <input type="radio" id="contact_call" name="preferred_contact" value="Call" required>
                                <label for="contact_call">Call</label>
                            </div>
                            <div class="form-radio">
                                <input type="radio" id="contact_email" name="preferred_contact" value="Email" required>
                                <label for="contact_email">Email</label>
                            </div>
                        </div>
                        <div class="form-error"></div>
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">Message/Details</label>
                        <textarea id="message" name="message" class="form-textarea"></textarea>
                        <div class="form-error"></div>
                    </div>

                    <div class="form-group">
                        <div class="form-checkbox">
                            <input type="checkbox" id="consent" name="consent" required>
                            <label for="consent" class="form-label required">I agree to be contacted by FI Technologies.</label>
                        </div>
                        <div class="form-error"></div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block btn-lg">Submit Request</button>
                </form>
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>
</body>
</html>
