# FI Technologies - WordPress Gutenberg Conversion

This folder contains **paste-ready code** for building the FI Technologies website on WordPress.com using the Gutenberg editor with Custom HTML blocks.

## Quick Start

### Step 1: Add the CSS (ONE TIME)

1. Go to **WordPress Admin > Appearance > Additional CSS**
2. Copy the ENTIRE contents of `ADDITIONAL-CSS.css`
3. Paste it and click **Publish**

### Step 2: Build Each Page

For each page (Home, Services, About, Reviews, Contact):

1. Create a new page in WordPress
2. Add multiple **Custom HTML blocks** in this order:
   - Header (from `components/HEADER.html`)
   - Page content sections (from `pages/[PAGE_NAME].html`)
   - Footer (from `components/FOOTER.html`)
   - Mobile Bottom Bar (from `components/MOBILE-BOTTOM-BAR.html`)
   - Quote Modal (from `components/QUOTE-MODAL.html`)
   - Global JavaScript (from `GLOBAL-JAVASCRIPT.html`)

---

## File Structure

```
wordpress-gutenberg/
├── ADDITIONAL-CSS.css          # Complete CSS → Appearance > Additional CSS
├── GLOBAL-JAVASCRIPT.html      # JavaScript → Custom HTML block (every page)
├── README.md                   # This file
│
├── components/                 # Reusable components for every page
│   ├── HEADER.html            # Site header with navigation
│   ├── FOOTER.html            # Site footer
│   ├── MOBILE-BOTTOM-BAR.html # Mobile action bar + back-to-top
│   └── QUOTE-MODAL.html       # Quote request popup form
│
└── pages/                     # Page-specific content
    ├── HOME.html              # Homepage sections
    ├── SERVICES.html          # Services page sections
    ├── ABOUT.html             # About page sections
    ├── REVIEWS.html           # Reviews/testimonials page sections
    └── CONTACT.html           # Contact page sections
```

---

## Detailed Setup Instructions

### CSS Setup (One Time)

1. In WordPress, go to **Appearance > Additional CSS**
2. Open `ADDITIONAL-CSS.css` in a text editor
3. Select all (Ctrl+A / Cmd+A) and copy (Ctrl+C / Cmd+C)
4. Paste into the Additional CSS editor
5. Click **Publish** to save

### Page Setup (For Each Page)

#### HOME PAGE

1. Create a new page titled "Home"
2. Set as your homepage in **Settings > Reading > A static page**
3. Add Custom HTML blocks in this order:

| Order | Block Content | Source File |
|-------|--------------|-------------|
| 1 | Header | `components/HEADER.html` |
| 2 | Hero Section | `pages/HOME.html` (Hero Section) |
| 3 | Trust Row | `pages/HOME.html` (Trust Row) |
| 4 | Services Section | `pages/HOME.html` (Services Section) |
| 5 | Packages Section | `pages/HOME.html` (Packages Section) |
| 6 | How It Works | `pages/HOME.html` (How It Works) |
| 7 | Testimonials | `pages/HOME.html` (Testimonials) |
| 8 | Service Area | `pages/HOME.html` (Service Area) |
| 9 | Final CTA | `pages/HOME.html` (Final CTA) |
| 10 | Footer | `components/FOOTER.html` |
| 11 | Mobile Bottom Bar | `components/MOBILE-BOTTOM-BAR.html` |
| 12 | Quote Modal | `components/QUOTE-MODAL.html` |
| 13 | JavaScript | `GLOBAL-JAVASCRIPT.html` |

#### SERVICES PAGE

1. Create a new page titled "Services"
2. Add Custom HTML blocks:

| Order | Block Content | Source File |
|-------|--------------|-------------|
| 1 | Header | `components/HEADER.html` |
| 2 | Hero Section | `pages/SERVICES.html` (Hero) |
| 3 | Services Detail | `pages/SERVICES.html` (Services Section) |
| 4 | FAQ Section | `pages/SERVICES.html` (FAQ Section) |
| 5 | CTA Section | `pages/SERVICES.html` (CTA) |
| 6 | Footer | `components/FOOTER.html` |
| 7 | Mobile Bottom Bar | `components/MOBILE-BOTTOM-BAR.html` |
| 8 | Quote Modal | `components/QUOTE-MODAL.html` |
| 9 | JavaScript | `GLOBAL-JAVASCRIPT.html` |

#### ABOUT PAGE

1. Create a new page titled "About"
2. Add Custom HTML blocks following the structure in `pages/ABOUT.html`

#### REVIEWS PAGE

1. Create a new page titled "Reviews"
2. Add Custom HTML blocks following the structure in `pages/REVIEWS.html`

#### CONTACT PAGE

1. Create a new page titled "Contact"
2. Add Custom HTML blocks following the structure in `pages/CONTACT.html`

---

## Navigation Links

Update the navigation links in `HEADER.html` and `FOOTER.html` to match your WordPress URLs:

**Default structure:**
- `/` - Home
- `/services/` - Services
- `/about/` - About
- `/reviews/` - Reviews
- `/contact/` - Contact

**If your URLs are different**, search and replace in the header/footer HTML before pasting.

---

## Form Submissions

The forms currently **simulate** submission (show success message, log data to console).

**To make forms work with real submissions**, you have these options:

### Option 1: WordPress.com Contact Form Block
Replace the form HTML with WordPress.com's native Contact Form block.

### Option 2: Third-Party Form Service
Replace form `action` and add service integration:
- [Formspree](https://formspree.io) - Free tier available
- [Basin](https://usebasin.com) - Free tier available
- [Getform](https://getform.io) - Free tier available

Example Formspree integration:
```html
<form action="https://formspree.io/f/YOUR_FORM_ID" method="POST">
```

### Option 3: Business Plan Features
If you have WordPress.com Business plan:
- Install Contact Form 7 or WPForms plugin
- Replace form HTML with shortcodes

---

## Features Included

### Interactive Components
- **Mobile Menu** - Hamburger menu for mobile navigation
- **Quote Modal** - Popup form triggered by "Get a Free Quote" buttons
- **Testimonial Slider** - Swipe/keyboard navigation for reviews
- **FAQ Accordion** - Expandable questions and answers
- **Stat Counters** - Animated number counters on scroll
- **Back to Top** - Floating button to return to top
- **Mobile Bottom Bar** - Fixed action buttons on mobile

### Accessibility
- ARIA labels and roles
- Keyboard navigation support
- Screen reader friendly
- Reduced motion support
- Focus management

### Responsive Design
- Mobile-first approach
- Breakpoints: 640px, 768px, 1024px
- Touch/swipe support
- Mobile-specific UI elements

---

## Customization

### Colors
Edit these CSS variables in `ADDITIONAL-CSS.css`:

```css
:root {
    --fi-color-primary: #0A1F44;    /* Navy - main brand color */
    --fi-color-secondary: #00A8E8;  /* Cyan - accent color */
    --fi-color-accent: #00D4FF;     /* Light cyan - hover states */
}
```

### Contact Information
Search and replace in all files:
- Phone: `+1 647-799-9973` / `+16477999973`
- Alt Phone: `1-647-701-2132` / `16477012132`
- Email: `info@fitechnologies.ca`
- Hours: `9:00 AM - 9:00 PM`

### Company Name
Search and replace:
- `FI Technologies`

---

## Troubleshooting

### Styles Not Applying
1. Make sure CSS is in **Appearance > Additional CSS** (not a Custom HTML block)
2. Check that CSS was copied completely (starts with `/* ===` comments)
3. Clear any caching plugins/CDN

### JavaScript Not Working
1. Ensure `GLOBAL-JAVASCRIPT.html` is at the **end** of every page
2. Check browser console for errors (F12 > Console)
3. Verify all element class names match (start with `fi-`)

### Mobile Menu Not Working
1. Check that header HTML is exactly as provided
2. Verify JavaScript block is present
3. Test in browser mobile view (F12 > toggle device toolbar)

### Forms Not Submitting
1. Forms simulate submission by default (success message, console log)
2. Connect to a form service (see Form Submissions section above)

---

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome for Android)

---

## Credits

FI Technologies - Security Solutions For Your Home & Business
- Website: Coming soon on WordPress.com
- Phone: +1 647-799-9973
- Email: info@fitechnologies.ca

---

## Need Help?

For questions about:
- **WordPress setup**: Check WordPress.com support documentation
- **Code customization**: Review comments in source files
- **Business inquiries**: Contact info@fitechnologies.ca
