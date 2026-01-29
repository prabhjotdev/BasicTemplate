# FICCTV V4 - WordPress.com Ready (No External Dependencies)

This version works on WordPress.com without any external CSS frameworks. All styling is done through Additional CSS and custom classes.

## Why V4?

WordPress.com blocks external scripts like Tailwind CDN for security. V4 uses only:
- Additional CSS (custom styles)
- Inline HTML with `fc-*` class names
- Native JavaScript (no libraries)

## Setup Instructions

### Step 1: Add CSS
1. Go to **Appearance > Additional CSS**
2. Copy the entire contents of `ADDITIONAL-CSS.css`
3. Paste and click **Publish**

### Step 2: Create Page
1. Go to **Pages > Add New**
2. Title: "Home" (or leave blank - the title is hidden by CSS)
3. Switch to **Full Width** template if available

### Step 3: Add HTML Blocks
Copy each section from `FULL-PAGE.html` as a separate **Custom HTML** block.

**Important:** Paste in this exact order:

| Block # | Section | Description |
|---------|---------|-------------|
| 1 | SITE WRAPPER START | Opens the .fc-site container |
| 2 | HEADER | Fixed navigation bar |
| 3 | HERO | Main hero with CTA buttons |
| 4 | TRUST BAR | Trust indicators |
| 5 | SERVICES | 6 service cards |
| 6 | HOW IT WORKS | 3-step process |
| 7 | WHY CHOOSE US | Feature list |
| 8 | STATS | Numbers/stats |
| 9 | GALLERY | 4 image gallery |
| 10 | TESTIMONIALS | 3 review cards |
| 11 | FAQ | 5 accordion items |
| 12 | CONTACT | Contact info + form |
| 13 | FOOTER | Site footer |
| 14 | FLOATING BUTTONS | Desktop sticky buttons |
| 15 | MOBILE BAR | Mobile bottom bar |
| 16 | QUOTE MODAL | Popup quote form |
| 17 | SITE WRAPPER END | Closes the container |
| 18 | JAVASCRIPT | All functionality |

### Step 4: Publish
Click **Publish** and view your page!

## Features

- **No External Dependencies** - Works on WordPress.com
- **Dark Premium Theme** - Navy + Orange color scheme
- **Sticky Contact Buttons** - Desktop floating buttons
- **Mobile Bottom Bar** - Easy access on phones
- **Quote Modal** - Popup form
- **FAQ Accordion** - Expandable questions
- **Smooth Scrolling** - Navigation links
- **Stock Images** - Unsplash images included

## Customization

### Contact Info
Search and replace in FULL-PAGE.html:
- Phone: `647-799-9973` and `6477999973`
- Email: `info@ficctv.ca`

### Colors
Edit these CSS variables in ADDITIONAL-CSS.css:
```css
:root {
    --fc-navy: #0f172a;      /* Main background */
    --fc-charcoal: #1e293b;  /* Section backgrounds */
    --fc-orange: #f97316;    /* Accent color */
}
```

### Images
Replace Unsplash URLs with your own images:
- Hero: 1920x1080 recommended
- Gallery: 600x450 recommended

## Form Handling

Forms currently show an alert message. To receive actual submissions:

### Option 1: Formspree (Free)
1. Sign up at formspree.io
2. Create a form, get your endpoint
3. Replace `onsubmit="handleFormSubmit(event)"` with:
   ```html
   action="https://formspree.io/f/YOUR_ID" method="POST"
   ```
4. Remove the `onsubmit` handler

### Option 2: Email Link
Replace forms with mailto links:
```html
<a href="mailto:info@ficctv.ca?subject=Quote Request">
```

## Troubleshooting

### Styles not applying?
1. Make sure CSS is saved in Additional CSS
2. Clear browser cache (Ctrl+Shift+R)
3. Check for typos in class names

### Layout looks wrong?
1. Verify blocks are in correct order
2. Make sure SITE WRAPPER START is first
3. Make sure SITE WRAPPER END is before JAVASCRIPT

### Mobile bar not showing?
- It only appears on screens under 768px wide
- Test by resizing browser or using mobile device

### Modal not opening?
- Make sure JAVASCRIPT block is added last
- Check browser console for errors

## Brand Info

- **Company:** FICCTV
- **Phone:** 647-799-9973
- **Email:** info@ficctv.ca
- **Service Area:** Greater Toronto Area & Ontario
- **Hours:** Mon-Sat 8AM-8PM, Sun 10AM-6PM
