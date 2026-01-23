# 🎨 Elementor Page Builder Setup Guide

**Perfect for:** Client-editable websites where non-technical users need to update content.

---

## 🚀 Quick Setup (30 Minutes)

### Step 1: Install WordPress & Plugins

1. **Install WordPress** on your hosting or locally

2. **Install Required Plugins:**
   ```
   Dashboard → Plugins → Add New
   ```

   **Essential:**
   - ✅ **Elementor** (free version is fine)
   - ✅ **Hello Elementor Theme** (lightweight base theme)
   - ✅ **Contact Form 7** or **WPForms Lite** (for forms)

   **Optional but Recommended:**
   - **Elementor Header & Footer Builder** (free - for sticky header)
   - **Custom CSS Pro** (for adding your CSS)

3. **Activate Hello Elementor Theme:**
   ```
   Appearance → Themes → Activate "Hello Elementor"
   ```

---

## 📄 Step 2: Add Your CSS & JavaScript

### Option A: Using Elementor Custom CSS

1. Go to **Elementor → Custom CSS** (if you have Elementor Pro)
2. Paste the entire contents of `assets/css/styles.css`

### Option B: Using a Plugin (FREE)

1. **Install "Simple Custom CSS and JS"** plugin
2. **Add CSS:**
   - Custom CSS and JS → Add Custom CSS
   - Title: "FI Technologies Styles"
   - Paste contents of `assets/css/styles.css`
   - Where: In Frontend
   - Save

3. **Add JavaScript:**
   - Custom CSS and JS → Add Custom JS
   - Title: "Main JS"
   - Paste contents of `assets/js/main.js`
   - Where: Footer
   - Save

   Repeat for `form.js` and `ui.js`

### Option C: Child Theme (BEST for Production)

1. Create `hello-elementor-child/` folder:
   ```
   wp-content/themes/hello-elementor-child/
   ├── style.css
   ├── functions.php
   └── assets/
       ├── css/styles.css
       └── js/
           ├── main.js
           ├── form.js
           └── ui.js
   ```

2. **Create `style.css`:**
   ```css
   /*
   Theme Name: Hello Elementor Child
   Template: hello-elementor
   */
   ```

3. **Create `functions.php`:**
   ```php
   <?php
   function hello_elementor_child_enqueue_styles() {
       wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
       wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/assets/css/styles.css', array('parent-style'));

       wp_enqueue_script('fi-main', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
       wp_enqueue_script('fi-form', get_stylesheet_directory_uri() . '/assets/js/form.js', array('jquery'), '1.0.0', true);
       wp_enqueue_script('fi-ui', get_stylesheet_directory_uri() . '/assets/js/ui.js', array('jquery'), '1.0.0', true);
   }
   add_action('wp_enqueue_scripts', 'hello_elementor_child_enqueue_styles');
   ```

4. Copy your `assets/` folder into the child theme folder
5. Activate child theme

---

## 🏗️ Step 3: Create Pages with Elementor

### Create Each Page:

1. **Pages → Add New**
2. **Title:** Home (or Services, About, etc.)
3. **Click:** "Edit with Elementor"

---

## 📋 Step 4: Build Pages with Sections

For each page, you'll create **sections** that are **fully editable by your client**.

### Example: Home Page Structure

I'll break down each section with copy/paste instructions:

#### **1. Hero Section**

1. Add **Section** → Choose 1 Column
2. **Section Settings:**
   - Layout → Content Width: Full Width
   - Style → Background: Gradient (#0A1F44 to #060D1A)
   - Advanced → Padding: 80px top, 80px bottom

3. Add **Heading Widget:**
   - Title: "Security Solutions For Your Home & Business"
   - HTML Tag: H1
   - Style → Color: White
   - Typography → Size: 56px (desktop), 36px (mobile)

4. Add **Text Editor Widget:**
   - Content: "The Future Of Home Experience Is Here"
   - Style → Color: White
   - Typography → Size: 24px

5. Add **Button Widget #1:**
   - Text: "Get a Free Quote"
   - Link: #quoteModal (will open modal)
   - Style: Custom → Background: #00A8E8
   - Add CSS Class: `btn btn-primary btn-lg`

6. Add **Button Widget #2:**
   - Text: "Call Now"
   - Link: tel:+16477999973
   - Style: Custom → Background: Transparent, Border
   - Add CSS Class: `btn btn-outline-white btn-lg`

#### **2. Trust Stats Section**

1. Add **Section** → Choose 4 Columns
2. **Section Settings:**
   - Background: #F5F7FA
   - Padding: 60px top/bottom

3. **In Each Column, Add Counter Widget:**

   **Column 1:**
   - Starting Number: 0
   - Ending Number: 15
   - Suffix: +
   - Title: "Years of Experience"
   - Number Color: #00A8E8
   - Number Size: 48px

   **Column 2:**
   - Ending Number: 1000
   - Suffix: +
   - Title: "Canadians Served"

   **Column 3:**
   - Ending Number: 7
   - Suffix: +
   - Title: "Years Professional Installation"

   **Column 4:**
   - Ending Number: 7
   - Title: "Days a Week Support"

#### **3. Services Grid Section**

1. Add **Section** → Choose 3 Columns
2. **In Each Column, Add:**

   a. **Icon Box Widget:**
   - Icon: Choose relevant icon (camera, home, etc.)
   - Title: "Security Cameras"
   - Description: "Advanced surveillance systems with color night vision, AI detection, and mobile access."
   - Icon Color: #00A8E8
   - Icon Size: 60px

   b. **Button Widget:**
   - Text: "Get Quote"
   - Add CSS Class: `btn btn-outline`
   - Link: #quoteModal

Repeat for all 6 services.

#### **4. Packages Section**

1. Add **Section** → Choose 2 Columns
2. **Section Background:** #F5F7FA

**Column 1 - Package Card:**

1. Add **Heading Widget:**
   - Title: "4 Color Night Vision Cameras DVR Package"
   - Style: H3

2. Add **Heading Widget (for price):**
   - Title: "$1,100"
   - Color: #00A8E8
   - Size: 48px

3. Add **Text Editor Widget:**
   ```html
   <ul class="package-features">
       <li>1x color night vision camera</li>
       <li>3x infrared night vision cameras</li>
       <li>1TB hard drive</li>
       <li>Canadian weatherproof</li>
       <li>Free lifetime mobile App access</li>
   </ul>
   ```

4. Add **Button Widget:**
   - Text: "Get This Package"
   - CSS Class: `btn btn-primary btn-block`

Repeat for Package 2.

---

## 📱 Step 5: Create Global Header & Footer

### Option A: Using Elementor Pro (Paid)

1. **Theme Builder → Header:**
   - Design your header with logo, menu, and buttons
   - Set display conditions: Entire Site

2. **Theme Builder → Footer:**
   - Design footer with all sections
   - Set display conditions: Entire Site

### Option B: Using Free Plugin "Elementor Header & Footer Builder"

1. Install **"Elementor Header & Footer Builder"**
2. **Appearance → Header Footer Builder → Add New**
3. **Type:** Select "Header"
4. **Build Header:**
   - Add container
   - Add logo (Image widget)
   - Add menu (Nav Menu widget)
   - Add buttons

5. Repeat for Footer

### Option C: Use Default Theme Header/Footer

Keep the Hello Elementor header/footer and just customize via:
- **Appearance → Customize**
- Or use **Appearance → Menus** for navigation

---

## 🎨 Step 6: Create Reusable Template Parts

Make sections **reusable** across pages:

### Create CTA Section Template:

1. **Templates → Saved Templates → Add New**
2. **Type:** Section
3. **Name:** "CTA Section - Get Quote"
4. Build the CTA section once
5. **Save**

### Use Template on Multiple Pages:

1. Edit any page with Elementor
2. **Add Section → My Templates**
3. Select "CTA Section - Get Quote"
4. Insert

Now when client updates the template, it updates everywhere!

---

## 📝 Step 7: Set Up Forms

### Using Contact Form 7:

1. **Install Contact Form 7**
2. **Contact → Add New**
3. **Form Name:** "Quote Form"
4. **Form Code:**
   ```html
   <label>First Name*
       [text* first_name]
   </label>

   <label>Last Name*
       [text* last_name]
   </label>

   <label>Telephone*
       [tel* phone]
   </label>

   <label>Email
       [email email]
   </label>

   <label>Service Needed*
       [select* service "Security Cameras" "Smart Home Automation" "Video Door Bells" "WIFI Solutions" "Networking" "Home Theater Installation"]
   </label>

   <label>City/Postal Code*
       [text* location]
   </label>

   <label>Preferred Contact Method*
       [radio preferred_contact "Call" "Email"]
   </label>

   <label>Message/Details
       [textarea message]
   </label>

   <label>[acceptance consent]I agree to be contacted by FI Technologies.[/acceptance]</label>

   [submit "Submit Request"]
   ```

5. **Save** and copy shortcode: `[contact-form-7 id="123"]`

6. **Add to Elementor:**
   - Add **Shortcode Widget**
   - Paste: `[contact-form-7 id="123"]`

### Using WPForms:

1. **Install WPForms Lite**
2. **WPForms → Add New**
3. **Drag fields** to match your form
4. Copy shortcode
5. Add **Shortcode Widget** in Elementor

---

## 🎯 Step 8: Create Quote Modal

### Method 1: Using Popup Builder Plugin

1. **Install "Popup Maker"** (free)
2. **Popup Maker → Add New**
3. **Title:** "Quote Modal"
4. **Content:** Add your Contact Form 7 shortcode
5. **Settings:**
   - Display Settings → Click Open
   - Trigger: Click Open
   - Click Selector: `[data-action="open-quote"]`
6. **Publish**

### Method 2: Using Elementor Pro Popups

1. **Templates → Popups → Add New**
2. Build your form popup
3. **Settings → Conditions:**
   - Where: Entire Site
   - Trigger: On Click
   - CSS Selector: `[data-action="open-quote"]`
4. **Publish**

### Method 3: Keep HTML/JS Modal (Easiest)

Your existing JavaScript already handles the modal. Just ensure:
- Footer contains the modal HTML
- JavaScript files are loaded
- Buttons have `data-action="open-quote"` attribute

Add this to Elementor buttons:
- **Advanced → CSS ID:** `data-action="open-quote"`

---

## 👨‍💼 Step 9: Client Training

### Create a Simple Guide for Your Client:

**"How to Edit Your Website"**

1. **Log in:** yoursite.com/wp-admin
2. **Go to:** Pages → All Pages
3. **Click:** "Edit with Elementor" on any page
4. **Click on text** to edit it
5. **Click on images** to replace them
6. **Click blue "Update"** button when done

### Common Edits:

**Change Phone Number:**
1. Edit page
2. Click on phone number
3. Type new number
4. Update

**Change Service Description:**
1. Edit Services page
2. Click on service text
3. Edit description
3. Update

**Add New Testimonial:**
1. Edit Reviews page
2. Right-click on testimonial card → Duplicate
3. Click on duplicated card
4. Edit name, text, location
5. Update

---

## ✅ Testing Checklist

After building in Elementor:

- [ ] All pages created (Home, Services, About, Reviews, Contact)
- [ ] Navigation menu works
- [ ] Mobile menu works
- [ ] Forms submit properly
- [ ] Buttons link correctly (Call, Email, Quote)
- [ ] Responsive on mobile (use Elementor's responsive mode)
- [ ] CSS styles apply correctly
- [ ] JavaScript functions work (modal, accordion, slider)
- [ ] Stats counters animate
- [ ] Client can edit text easily

---

## 🎨 Design Tips for Client-Friendly Editing

### Make Everything Obvious:

1. **Use Clear Section Labels:**
   - Right-click section → Navigator → Rename to "Hero Section"

2. **Add Instructions:**
   - Add hidden text editor widget with instructions
   - Style → Advanced → Hide on all devices

3. **Lock Layout:**
   - Right-click section → Lock → Content
   - Client can edit text but not delete sections

4. **Use Global Colors:**
   - Elementor → Site Settings → Global Colors
   - Add your brand colors
   - Client can use color picker easily

### Prevent Breaking Things:

1. **Limit Widget Permissions:**
   - Install "PublishPress Capabilities"
   - Create "Editor" role for client
   - Limit to text/image editing only

2. **Use Page Templates:**
   - Create templates for common layouts
   - Client duplicates template for new pages

---

## 🚀 Performance Optimization

After building pages:

1. **Elementor → Settings:**
   - Features → Disable unused widgets
   - Experiments → Optimized DOM Output: Active

2. **Install Caching:**
   - WP Super Cache (free)
   - or WP Rocket (paid, best)

3. **Optimize Images:**
   - Smush or ShortPixel
   - Use WebP format

---

## 📦 Recommended Plugins for Page Builder Approach

### Essential:
- ✅ **Elementor** (page builder)
- ✅ **Hello Elementor** (theme)
- ✅ **Contact Form 7** or **WPForms** (forms)
- ✅ **Simple Custom CSS and JS** (for your code)

### Highly Recommended:
- **Elementor Header & Footer Builder** (free - for header/footer)
- **Popup Maker** (free - for quote modal)
- **UpdraftPlus** (backups)
- **Wordfence Security** (security)

### Nice to Have:
- **WP Mail SMTP** (reliable emails)
- **Yoast SEO** (SEO)
- **Smush** (image optimization)

---

## 💰 Elementor Free vs Pro

**Free Version Includes:**
- ✅ All widgets you need
- ✅ Responsive editing
- ✅ Template library
- ✅ CSS editing

**Pro Version Adds ($59/year):**
- ⭐ Theme Builder (header/footer)
- ⭐ Popup Builder
- ⭐ WooCommerce builder
- ⭐ More widgets
- ⭐ Premium support

**My Recommendation:** Start with free, upgrade to Pro if you need popups or theme builder.

---

## 🎯 Summary

**Time Required:** 30-60 minutes per page

**Pros:**
- ✅ Client can edit everything visually
- ✅ No coding required for updates
- ✅ Easy to add new sections
- ✅ Visual preview while editing
- ✅ Mobile responsive automatically

**Cons:**
- ❌ Slightly slower than custom theme
- ❌ Dependency on Elementor plugin
- ❌ More database overhead

**Perfect For:**
- Clients who need to update content frequently
- Non-technical users
- Businesses wanting control

---

## 🆘 Need Help?

**Common Issues:**

**Styles not working?**
- Check CSS is added via plugin/child theme
- Clear cache

**JavaScript not working?**
- Check JS files are enqueued
- Look for console errors (F12)

**Forms not sending?**
- Test with WP Mail SMTP
- Check spam folder

---

Ready to build? Follow the steps and you'll have a beautiful, client-editable site in no time! 🚀
