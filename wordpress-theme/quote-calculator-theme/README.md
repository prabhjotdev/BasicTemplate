# Quote Calculator WordPress Theme

A clean, modern WordPress theme with an integrated security system quote calculator. Features Tailwind CSS styling, responsive design, and easy-to-use calculator functionality.

## Features

- **Built-in Quote Calculator** - Interactive security system quote calculator
- **3 Ways to Use Calculator**:
  1. Shortcode `[quote_calculator]` - Add to any page/post
  2. Page Template - Select "Quote Calculator" template when creating a page
  3. Template Part - Use in your custom templates
- **Tailwind CSS** - Modern, responsive design with no CSS coding required
- **Clean Code** - Well-documented and easy to customize
- **Responsive** - Works perfectly on all devices
- **SEO Friendly** - Proper HTML5 structure
- **Menu Support** - Primary navigation menu
- **Widget Areas** - Sidebar and footer widget areas
- **Custom Logo** - Upload your own logo

## Installation

### Method 1: Manual Installation (Recommended)

1. **Download the theme folder**
   - Copy the entire `quote-calculator-theme` folder

2. **Upload to WordPress**
   - Connect to your WordPress site via FTP or file manager
   - Navigate to `/wp-content/themes/`
   - Upload the entire `quote-calculator-theme` folder

3. **Activate the theme**
   - Log in to your WordPress admin dashboard
   - Go to **Appearance** → **Themes**
   - Find "Quote Calculator Theme" and click **Activate**

### Method 2: ZIP Installation

1. **Create a ZIP file**
   ```bash
   cd wordpress-theme
   zip -r quote-calculator-theme.zip quote-calculator-theme/
   ```

2. **Upload via WordPress**
   - Log in to WordPress admin
   - Go to **Appearance** → **Themes** → **Add New** → **Upload Theme**
   - Choose the ZIP file and click **Install Now**
   - Click **Activate**

## Usage

### Method 1: Using Shortcode (Easiest)

Add the calculator to **any page or post**:

1. Create or edit a page/post
2. Add this shortcode anywhere in the content:
   ```
   [quote_calculator]
   ```
3. Publish and view the page

**Example:**
```
Welcome to our quote calculator!

[quote_calculator]

Contact us if you have questions.
```

### Method 2: Using Page Template

Create a **dedicated calculator page**:

1. Go to **Pages** → **Add New**
2. Enter a title (e.g., "Get a Quote")
3. On the right sidebar, under **Page Attributes**, select **Template: Quote Calculator**
4. You can optionally add content above the calculator
5. Click **Publish**

### Method 3: Using in Custom Templates

Add to your own template files:

```php
<?php get_template_part( 'templates/calculator' ); ?>
```

## Customization

### Changing Prices

Edit `/js/calculator.js` (lines 16-28):

```javascript
const PRICING = {
    basePrice: {
        house: 500,      // Base price for houses
        business: 800    // Base price for businesses
    },
    cameraPrice: {
        wired: 150,      // Price per wired camera
        wireless: 200    // Price per wireless camera
    },
    placementMultiplier: {
        indoor: 1.0,     // No extra cost for indoor
        outdoor: 1.3     // 30% extra for outdoor cameras
    },
    margin: 0.2          // 20% price range margin (±20%)
};
```

### Adding a Logo

1. Go to **Appearance** → **Customize**
2. Click **Site Identity**
3. Click **Select Logo**
4. Upload your logo image
5. Click **Publish**

### Creating a Menu

1. Go to **Appearance** → **Menus**
2. Create a new menu
3. Add pages/links to the menu
4. Under **Menu Settings**, check **Primary Menu**
5. Click **Save Menu**

### Adding Widgets

1. Go to **Appearance** → **Widgets**
2. Add widgets to:
   - **Sidebar** - Appears on blog posts
   - **Footer** - Appears at the bottom of all pages

### Customizing Colors

The theme uses Tailwind CSS. To customize colors, edit the class names in:
- `header.php` - Header styling
- `footer.php` - Footer styling
- `templates/calculator.php` - Calculator styling

**Example:** Change blue buttons to green:
```html
<!-- Before -->
<button class="bg-blue-600 hover:bg-blue-700">

<!-- After -->
<button class="bg-green-600 hover:bg-green-700">
```

### Tailwind CSS Classes Reference

Common colors:
- `bg-blue-600` - Blue background
- `bg-green-600` - Green background
- `bg-red-600` - Red background
- `bg-gray-600` - Gray background
- `text-blue-600` - Blue text

Hover effects:
- `hover:bg-blue-700` - Darker on hover
- `hover:text-blue-600` - Change text color on hover

Spacing:
- `p-4` - Padding
- `m-4` - Margin
- `mb-4` - Margin bottom
- `mt-8` - Margin top

Full reference: [Tailwind CSS Documentation](https://tailwindcss.com/docs)

## File Structure

```
quote-calculator-theme/
├── style.css                    # Theme metadata and custom styles
├── functions.php                # Theme functions and features
├── header.php                   # Header template
├── footer.php                   # Footer template
├── index.php                    # Main blog template
├── page.php                     # Default page template
├── page-calculator.php          # Calculator page template
├── js/
│   └── calculator.js            # Calculator JavaScript
├── templates/
│   └── calculator.php           # Calculator template part
└── README.md                    # This file
```

## Calculator Pricing Logic

The calculator uses this formula:

```
Total = (Base Price + (Number of Cameras × Camera Price)) × Placement Multiplier
Price Range = Total ± 20%
```

**Example Calculation:**
- Property: Business ($800 base)
- Cameras: 4 wireless cameras (4 × $200 = $800)
- Placement: Outdoor (1.3× multiplier)
- Total: ($800 + $800) × 1.3 = $2,080
- Range: $1,664 - $2,496 (±20%)

## Connecting the "Request Final Quote" Button

To make the button functional, edit `templates/calculator.php` around line 180:

### Option 1: Link to Contact Page

```html
<a href="/contact" class="block w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-4 px-6 rounded-lg transition-colors text-lg shadow-md mb-4 text-center">
    Request Final Quote
</a>
```

### Option 2: Link with Quote Data

Edit `js/calculator.js` to pass data:

```javascript
// Add after displaying results
const requestButton = document.querySelector('.request-quote-button');
requestButton.addEventListener('click', function() {
    const quoteData = encodeURIComponent(JSON.stringify(formData));
    window.location.href = '/contact?quote=' + quoteData;
});
```

### Option 3: Contact Form 7 Integration

Replace the button with a Contact Form 7 shortcode:

```php
<?php echo do_shortcode('[contact_form_7 id="123"]'); ?>
```

## Requirements

- **WordPress**: 5.0 or higher
- **PHP**: 7.2 or higher
- **Browser**: Modern browsers (Chrome, Firefox, Safari, Edge)

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Troubleshooting

### Calculator doesn't appear

1. Make sure you're using the shortcode correctly: `[quote_calculator]`
2. Clear your browser cache
3. Clear WordPress cache (if using a caching plugin)
4. Check browser console for JavaScript errors

### Styling looks broken

1. Check if Tailwind CSS CDN is loading (check Network tab in browser dev tools)
2. Clear browser cache
3. Try disabling other plugins temporarily
4. Check for JavaScript errors in console

### Mobile menu doesn't work

1. Clear browser cache
2. Check browser console for JavaScript errors
3. Ensure `/js/calculator.js` is loading

### Prices aren't calculating correctly

1. Check `/js/calculator.js` for correct PRICING values
2. Open browser console and look for errors
3. Verify all form fields are filled out

## Support

For issues or questions:
1. Check this README first
2. Review the code comments in the files
3. Check browser console for errors
4. Verify WordPress and PHP requirements

## Changelog

### Version 1.0.0
- Initial release
- Quote calculator with shortcode support
- Page template for calculator
- Responsive design with Tailwind CSS
- Menu and widget support
- Custom logo support

## License

GPL-2.0-or-later

## Credits

- Built with WordPress
- Styled with Tailwind CSS
- Icons from Heroicons
