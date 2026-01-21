# Quote Calculator Block - WordPress Plugin

A Gutenberg block plugin that adds an interactive quote calculator for security system installations to your WordPress site.

## Features

- **Gutenberg Block**: Drag and drop the calculator block into any page or post
- **Interactive Form**: Users can select property type, number of cameras, system type, and placement
- **Real-time Calculations**: Instant price estimates based on user selections
- **Responsive Design**: Works on all devices using Tailwind CSS
- **Easy to Customize**: Simple pricing configuration in JavaScript
- **Professional UI**: Clean, modern interface with smooth animations

## Installation

### Method 1: Manual Installation (Recommended)

1. **Download the plugin folder**
   - Copy the entire `quote-calculator-block` folder

2. **Upload to WordPress**
   - Connect to your WordPress site via FTP or file manager
   - Navigate to `/wp-content/plugins/`
   - Upload the entire `quote-calculator-block` folder

3. **Activate the plugin**
   - Log in to your WordPress admin dashboard
   - Go to **Plugins** → **Installed Plugins**
   - Find "Quote Calculator Block" and click **Activate**

### Method 2: ZIP Installation

1. **Create a ZIP file**
   ```bash
   cd wordpress-plugin
   zip -r quote-calculator-block.zip quote-calculator-block/
   ```

2. **Upload via WordPress**
   - Log in to WordPress admin
   - Go to **Plugins** → **Add New** → **Upload Plugin**
   - Choose the ZIP file and click **Install Now**
   - Click **Activate Plugin**

## Usage

### Adding the Block

1. **Edit a Page or Post**
   - Go to **Pages** → **Add New** (or edit an existing page)
   - Or go to **Posts** → **Add New**

2. **Add the Quote Calculator Block**
   - Click the **+** button to add a new block
   - Search for "Quote Calculator"
   - Click to insert the block

3. **Publish**
   - The block will show a placeholder in the editor
   - Click **Publish** or **Update**
   - View the page to see the live calculator

### Block Preview

In the WordPress editor, you'll see a placeholder that says:
```
Quote Calculator Block
This block will display the interactive quote calculator on the frontend.
Preview is not available in the editor.
```

On the frontend, users will see the full interactive calculator.

## Customization

### Changing Prices

Edit the pricing in `/build/calculator.js` (lines 16-28):

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

### Styling

The plugin uses Tailwind CSS (loaded via CDN). To customize styles:

1. **Modify Tailwind Classes**: Edit `/build/index.js` and change the className attributes
2. **Add Custom CSS**: Edit `/build/style.css` to add your own styles
3. **Use Your Theme**: The block inherits some styling from your WordPress theme

### Changing the "Request Final Quote" Button

To make the button functional, edit `/build/calculator.js` around line 193:

```javascript
// Find this section and add your functionality
<button
    className="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-4 px-6 rounded-lg transition-colors text-lg shadow-md mb-4"
    onClick={handleQuoteRequest}>  // Add your handler
    Request Final Quote
</button>
```

You can:
- Link to a contact form
- Open a modal
- Send data to your CRM
- Redirect to a custom page

## File Structure

```
quote-calculator-block/
├── quote-calculator.php    # Main plugin file
├── build/
│   ├── block.json         # Block metadata
│   ├── index.js           # Block editor code (Gutenberg)
│   ├── calculator.js      # Frontend JavaScript (calculator logic)
│   └── style.css          # Block styles
├── src/                   # Source files (if you want to build from source)
└── README.md             # This file
```

## Requirements

- **WordPress**: 5.8 or higher
- **PHP**: 7.2 or higher
- **Gutenberg**: Block editor enabled (default in WP 5.0+)

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Troubleshooting

### Block doesn't appear in the editor

1. Make sure the plugin is activated
2. Refresh the page editor
3. Clear your browser cache
4. Check that you're using WordPress 5.8 or higher

### Calculator doesn't work on frontend

1. Check browser console for JavaScript errors
2. Ensure Tailwind CSS is loading (check Network tab)
3. Verify no theme/plugin conflicts
4. Try switching to a default WordPress theme temporarily

### Styling looks broken

1. Check if Tailwind CSS CDN is loading
2. Clear WordPress cache (if using a caching plugin)
3. Clear browser cache
4. Check for CSS conflicts with your theme

## Integration with Contact Forms

To capture quote requests, you can integrate with popular form plugins:

### Contact Form 7
Add a Contact Form 7 shortcode inside the "Request Final Quote" button handler

### Gravity Forms
Redirect to a Gravity Form with pre-filled values

### WPForms
Use WPForms API to submit the quote data

### Custom Solution
Store quotes in WordPress database using `wp_insert_post()` with a custom post type

## Development

If you want to modify the block:

1. **Edit Source Files**
   - Modify `/build/index.js` for editor display
   - Modify `/build/calculator.js` for frontend functionality
   - Modify `/build/style.css` for styling

2. **No Build Process Needed**
   - This plugin doesn't require a build step
   - Changes to files in `/build/` are immediately reflected

3. **Testing**
   - Test in the Gutenberg editor
   - Test on the frontend
   - Test on mobile devices

## Support

For issues, questions, or contributions:
- Check the documentation above
- Review the code comments
- Test with a default WordPress theme
- Disable other plugins to check for conflicts

## License

GPL-2.0-or-later

## Credits

Built with:
- WordPress Block Editor (Gutenberg)
- Tailwind CSS
- Vanilla JavaScript
