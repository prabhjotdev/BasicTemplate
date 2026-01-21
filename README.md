# Instant Quote Calculator

A simple, responsive web application for generating instant security system installation quotes.

## Features

- Interactive form with multiple questions
- Real-time price calculation
- Responsive design using Tailwind CSS
- Smooth animations and transitions
- Easy to convert to WordPress

## Demo

The calculator asks the following questions:
1. **Property Type**: House or Business
2. **Number of Cameras**: 1-20 cameras (adjustable with slider)
3. **System Type**: Wired or Wireless
4. **Camera Placement**: Indoor Only or Outdoor/Mixed

Based on the answers, it calculates an estimated price range and displays:
- Price range (with 20% margin)
- Summary of selections
- "Request Final Quote" CTA button

## Tech Stack

- **HTML5**: Semantic structure
- **Tailwind CSS**: Utility-first CSS framework (via CDN)
- **JavaScript**: Vanilla JS for calculations and interactivity

## Usage

### Local Development

Simply open `index.html` in your web browser:

```bash
open index.html
```

Or use a local server:

```bash
# Python 3
python -m http.server 8000

# Node.js
npx serve
```

Then navigate to `http://localhost:8000`

## File Structure

```
.
├── index.html      # Main HTML file with form structure
├── script.js       # JavaScript for calculations and interactions
└── README.md       # This file
```

## Pricing Logic

The calculator uses the following pricing structure:

- **Base Price**:
  - House: $500
  - Business: $800

- **Camera Cost** (per camera):
  - Wired: $150
  - Wireless: $200

- **Placement Multiplier**:
  - Indoor: 1.0x
  - Outdoor/Mixed: 1.3x

**Formula**: `((BasePrice + (NumCameras × CameraPrice)) × PlacementMultiplier) ± 20%`

## Customization

### Changing Prices

Edit the `PRICING` object in `script.js`:

```javascript
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
```

### Adding More Questions

1. Add the HTML form field in `index.html`
2. Capture the value in the form submission handler in `script.js`
3. Update the `calculateEstimate()` function to include the new field in calculations
4. Add the field to the details display in `displayResults()`

### Styling

The app uses Tailwind CSS via CDN. To customize:
- Modify Tailwind classes in `index.html`
- Add custom CSS in the `<style>` tag in the HTML head

## Converting to WordPress

### Option 1: Page Template
1. Create a new page template in your theme
2. Copy the HTML body content into the template
3. Enqueue the script.js file in your theme's functions.php

### Option 2: Custom Plugin
1. Create a WordPress plugin
2. Add a shortcode that outputs the calculator HTML
3. Enqueue the JavaScript file with the plugin

### Option 3: Page Builder
1. Use a custom HTML block in Elementor/WPBakery
2. Paste the entire HTML content
3. Ensure the script.js file is loaded

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## License

MIT License