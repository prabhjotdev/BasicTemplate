# FICCTV - WordPress Gutenberg Single Page Website

**Version 3.0** - Complete single-page CCTV business website

## Overview

A modern, conversion-focused single-page website for FICCTV built with:
- **Tailwind CSS** (via CDN)
- **Dark premium theme** (Navy + Orange accents)
- **Sticky contact buttons** (always visible)
- **Mobile-optimized** bottom bar
- **Stock images included** (from Unsplash)

## Quick Start

### Step 1: Add CSS

1. Go to **WordPress Admin > Appearance > Additional CSS**
2. Copy contents of `ADDITIONAL-CSS.css`
3. Paste and **Publish**

### Step 2: Create Page

1. Create a new page called "Home" (or your preferred name)
2. Set as homepage in **Settings > Reading**

### Step 3: Add Content Blocks

Open `FULL-PAGE.html` and add each section as a **Custom HTML** block.

**IMPORTANT: Order matters!**

| # | Section | Description |
|---|---------|-------------|
| 1 | HEAD | Tailwind CDN + fonts (REQUIRED FIRST) |
| 2 | HEADER | Top bar + navigation |
| 3 | HERO | Main hero with background image |
| 4 | TRUST BAR | Stats (years, cameras, etc.) |
| 5 | SERVICES | 6 service cards |
| 6 | HOW IT WORKS | 3-step process |
| 7 | WHY CHOOSE US | 4 feature icons |
| 8 | GALLERY | Image grid |
| 9 | TESTIMONIALS | 3 review cards |
| 10 | FAQ | 5 accordion questions |
| 11 | CONTACT | CTA section with contact info |
| 12 | FOOTER | Links and contact |
| 13 | FLOATING BUTTONS | Sticky call/quote (desktop) |
| 14 | MOBILE BAR | Bottom action bar (mobile) |
| 15 | QUOTE MODAL | Popup form |
| 16 | JAVASCRIPT | All functionality (REQUIRED LAST) |

## Features

### Contact Access (Always Visible)

**Desktop:**
- Green floating "Call" button (bottom right)
- Orange pulsing "Quote" button (bottom right)
- Phone number in header

**Mobile:**
- Fixed bottom bar with 3 buttons: Call | Quote | Email
- Full-width, thumb-friendly

### Interactive Elements

- **Quote Modal** - Simple form, pre-selects service when clicked from cards
- **FAQ Accordion** - One open at a time
- **Smooth Scrolling** - Navigation links scroll smoothly
- **Stat Counters** - Animate when visible
- **Mobile Menu** - Hamburger menu for small screens

## Customization

### Change Contact Info

Search and replace:
- Phone: `647-799-9973` and `+16477999973`
- Email: `info@ficctv.ca`

### Change Images

Replace Unsplash URLs with your own images:

**Hero:**
```
https://images.unsplash.com/photo-1558002038-1055907df827
```

**Gallery (4 images):**
```
https://images.unsplash.com/photo-1557597774-9d273605dfa9
https://images.unsplash.com/photo-1617469767053-d3b523a0b982
https://images.unsplash.com/photo-1558618666-fcd25c85cd64
https://images.unsplash.com/photo-1555355643-e94c3b47c157
```

### Change Colors

In `ADDITIONAL-CSS.css`, modify the CSS variables:
```css
:root {
    --fc-navy: #0f172a;      /* Background */
    --fc-orange: #f97316;    /* Accent/CTAs */
    --fc-blue: #3b82f6;      /* Links */
    --fc-green: #22c55e;     /* Call button */
}
```

Or in Tailwind classes, replace:
- `orange-500` / `orange-600` with your accent color
- `navy` / `charcoal` with your background colors

## Form Submission

Currently, the form simulates submission (shows success, logs to console).

**To connect to a real service:**

### Option 1: Formspree (Free)
1. Sign up at [formspree.io](https://formspree.io)
2. Create a form, get your endpoint
3. Add `action` to the form:
```html
<form id="fcQuoteForm" action="https://formspree.io/f/YOUR_ID" method="POST">
```

### Option 2: WordPress.com Contact Form
Replace the form HTML with WordPress's native contact form block.

## File Structure

```
v3/
├── ADDITIONAL-CSS.css   # Custom styles (paste in Additional CSS)
├── FULL-PAGE.html       # Complete page (16 sections to paste as blocks)
└── README.md            # This file
```

## Browser Support

- Chrome, Firefox, Safari, Edge (latest)
- iOS Safari, Chrome for Android
- Responsive: Mobile, Tablet, Desktop

## Troubleshooting

### Styles not working?
1. Make sure CSS is in **Appearance > Additional CSS**
2. Ensure Tailwind CDN (block #1) is pasted first

### Modal not opening?
1. Check JavaScript block (#16) is pasted last
2. Check browser console for errors (F12)

### Big gap at bottom?
1. Make sure blocks are in correct order
2. Don't add extra spacing between blocks

### Mobile bar not showing?
- Only visible on screens < 768px wide
- Test in browser mobile view (F12 > toggle device)

## Credits

- **Images**: [Unsplash](https://unsplash.com) (free to use)
- **Icons**: Inline SVG (no external dependencies)
- **Fonts**: [Inter](https://fonts.google.com/specimen/Inter) via Google Fonts
- **CSS Framework**: [Tailwind CSS](https://tailwindcss.com) via CDN

---

**FICCTV** - Professional CCTV Installation
- Phone: 647-799-9973
- Email: info@ficctv.ca
- Service Area: GTA & Ontario
