# 🚀 Complete Start-to-Finish Setup Guide
## FI Technologies Website - Elementor Page Builder Method

**Total Time:** 2-3 hours
**Skill Level:** Beginner-friendly
**Result:** Fully functional, client-editable website

---

## 📋 What You'll Need

- [ ] WordPress hosting account OR local development environment
- [ ] Domain name (optional for testing)
- [ ] Your static HTML files (already created ✓)
- [ ] 2-3 hours of focused time

---

## PHASE 1: WordPress Installation (15 minutes)

### Option A: Install on Hosting (Recommended for Live Site)

**For cPanel hosting (most common):**

1. **Log into cPanel**
2. **Find "Softaculous Apps Installer"** or "WordPress"
3. **Click "Install Now"**
4. **Fill in:**
   - Choose Protocol: https:// (if you have SSL)
   - Choose Domain: yourdomain.com
   - Directory: (leave blank for root)
   - Site Name: FI Technologies
   - Site Description: Security Solutions For Your Home & Business
   - Admin Username: (your choice - remember it!)
   - Admin Password: (strong password)
   - Admin Email: info@fitechnologies.ca
5. **Click "Install"**
6. **Wait 2-3 minutes**
7. **Note your admin URL:** yourdomain.com/wp-admin

### Option B: Install Locally (Recommended for Testing)

**Using Local by Flywheel (Easiest):**

1. **Download:** https://localwp.com/
2. **Install and open Local**
3. **Click:** "Create a new site"
4. **Site Name:** fitechnologies
5. **Choose:** Preferred (default settings)
6. **WordPress Username:** admin
7. **WordPress Password:** (your choice)
8. **Email:** info@fitechnologies.ca
9. **Click:** "Add Site"
10. **Wait for installation**
11. **Click:** "WP Admin" to access dashboard

**Alternative: XAMPP/MAMP:**
1. Download XAMPP (Windows) or MAMP (Mac)
2. Install and start Apache + MySQL
3. Download WordPress from wordpress.org
4. Extract to htdocs/fitechnologies/
5. Create database via phpMyAdmin
6. Visit localhost/fitechnologies
7. Follow WordPress installation wizard

---

## PHASE 2: Install Essential Plugins (10 minutes)

1. **Log into WordPress Admin:**
   - URL: yourdomain.com/wp-admin
   - Enter username/password

2. **Go to:** Plugins → Add New

3. **Install These Plugins** (search and click "Install Now" then "Activate"):

   **Required:**
   - ✅ **Elementor** (by Elementor.com)
   - ✅ **Contact Form 7** (by Takayuki Miyoshi)
   - ✅ **Simple Custom CSS and JS** (by SilkyPress.com)

   **Recommended:**
   - ✅ **Elementor Header & Footer Builder** (by Brainstorm Force)
   - ✅ **Popup Maker** (by Popup Maker)

   **Optional but Useful:**
   - **WP Mail SMTP** (by WPForms) - for reliable email delivery
   - **UpdraftPlus** (by UpdraftPlus) - for backups
   - **Smush** (by WPMU DEV) - for image optimization

4. **Activate all installed plugins**

---

## PHASE 3: Install & Activate Theme (5 minutes)

1. **Go to:** Appearance → Themes

2. **Click:** "Add New"

3. **Search:** "Hello Elementor"

4. **Install and Activate** "Hello Elementor" theme
   - This is Elementor's official lightweight theme

5. **Go to:** Appearance → Customize
   - Logo: Upload your logo (or skip for now)
   - Site Identity → Site Title: FI Technologies
   - Site Identity → Tagline: Security Solutions For Your Home & Business
   - Click "Publish"

---

## PHASE 4: Add Your CSS & JavaScript (15 minutes)

### Step 1: Add CSS

1. **Go to:** Custom CSS and JS → Add Custom CSS

2. **Title:** FI Technologies Styles

3. **Open your:** `assets/css/styles.css` file

4. **Copy the ENTIRE contents** (it's a big file)

5. **Paste into the CSS editor**

6. **Settings on right side:**
   - Linking type: Internal
   - Where on page: Header
   - Where in site: In Frontend

7. **Click:** "Publish"

### Step 2: Add JavaScript (3 files)

**File 1: main.js**

1. **Go to:** Custom CSS and JS → Add Custom JS

2. **Title:** FI Technologies - Main JS

3. **Open:** `assets/js/main.js`

4. **Copy and paste** entire contents

5. **Settings:**
   - Linking type: Internal
   - Where on page: Footer
   - Where in site: In Frontend

6. **Click:** "Publish"

**File 2: form.js**

1. **Custom CSS and JS → Add Custom JS**

2. **Title:** FI Technologies - Form JS

3. **Paste contents from:** `assets/js/form.js`

4. **Settings:** Footer, In Frontend

5. **Publish**

**File 3: ui.js**

1. **Custom CSS and JS → Add Custom JS**

2. **Title:** FI Technologies - UI JS

3. **Paste contents from:** `assets/js/ui.js`

4. **Settings:** Footer, In Frontend

5. **Publish**

---

## PHASE 5: Set Up Contact Forms (15 minutes)

### Create Quote Form

1. **Go to:** Contact → Contact Forms → Add New

2. **Title:** Quote Form

3. **Replace the default form code with this:**

```html
<div class="form-group">
  <label>First Name*</label>
  [text* first_name class:form-input]
</div>

<div class="form-group">
  <label>Last Name*</label>
  [text* last_name class:form-input]
</div>

<div class="form-group">
  <label>Telephone*</label>
  [tel* phone class:form-input]
</div>

<div class="form-group">
  <label>Email</label>
  [email email class:form-input]
</div>

<div class="form-group">
  <label>Service Needed*</label>
  [select* service class:form-select include_blank "Security Cameras" "Smart Home Automation" "Video Door Bells" "WIFI Solutions" "Networking" "Home Theater Installation"]
</div>

<div class="form-group">
  <label>City/Postal Code*</label>
  [text* location class:form-input]
</div>

<div class="form-group">
  <label>Preferred Contact Method*</label>
  [radio preferred_contact use_label_element default:1 "Call" "Email"]
</div>

<div class="form-group">
  <label>Message/Details</label>
  [textarea message class:form-textarea]
</div>

<div class="form-group">
  [acceptance consent class:acceptance]I agree to be contacted by FI Technologies.[/acceptance]
</div>

[submit class:btn class:btn-primary class:btn-block class:btn-lg "Submit Request"]
```

4. **Click** the "Mail" tab

5. **Set these fields:**
   - To: info@fitechnologies.ca
   - From: [your-email] <wordpress@yourdomain.com>
   - Subject: New Quote Request from [first_name] [last_name]
   - Message body:
   ```
   First Name: [first_name]
   Last Name: [last_name]
   Phone: [phone]
   Email: [email]
   Service: [service]
   Location: [location]
   Preferred Contact: [preferred_contact]
   Message: [message]
   ```

6. **Click "Save"**

7. **Copy the shortcode** that appears at the top (looks like `[contact-form-7 id="123" title="Quote Form"]`)

### Create Contact Page Form

1. **Repeat above** but title it "Contact Form"
2. Use same fields
3. Copy this shortcode too

---

## PHASE 6: Create Pages (60 minutes)

### Create All Pages First

1. **Go to:** Pages → Add New

2. **Create 5 pages with these exact titles:**
   - Home
   - Services
   - About
   - Reviews
   - Contact

3. **For each page:**
   - Just add the title
   - Click "Publish"
   - Don't add content yet

### Build Home Page with Elementor

1. **Go to:** Pages → All Pages

2. **Hover over "Home"** → Click "Edit with Elementor"

3. **Elementor will open** - you'll see a blank canvas

---

#### HOME PAGE - Section by Section

**SECTION 1: HERO**

1. **Click the (+) icon** at the top
2. **Choose structure:** 1 column
3. **Click the 6-dot icon** on the left edge of section → "Edit Section"
4. **Style Tab:**
   - Background Type: Gradient
   - Color 1: #0A1F44
   - Color 2: #060D1A
   - Location 1: 0%
   - Location 2: 100%
   - Angle: 135deg
5. **Advanced Tab:**
   - Padding: 80px (top and bottom)
6. **Click** inside the column

**Add Hero Content:**

7. **Search widget:** "Heading"
8. **Drag "Heading" widget** into the column
9. **Content:**
   - Title: Security Solutions For Your Home & Business
   - HTML Tag: H1
10. **Style Tab:**
    - Text Color: #FFFFFF
    - Typography → Size: 56px (desktop)
11. **Advanced → Responsive:**
    - Click mobile icon
    - Typography → Size: 36px

12. **Add another widget:** "Text Editor"
13. **Content:** The Future Of Home Experience Is Here
14. **Style:** Color white, Size 24px, Align center

15. **Add widget:** "Button"
16. **Content:**
    - Text: Get a Free Quote
    - Link: #
17. **Style:**
    - Background: #00A8E8
    - Text Color: White
    - Border Radius: 8px
    - Padding: 18px 40px
18. **Advanced → CSS Classes:** btn btn-primary btn-lg
19. **Advanced → Attributes:**
    - Add Item: data-action | open-quote

20. **Add another Button widget**
21. **Text:** Call Now
22. **Link:** tel:+16477999973
23. **Style:**
    - Background Type: None
    - Border: 2px solid white
    - Text Color: White
24. **CSS Classes:** btn btn-outline-white btn-lg

---

**SECTION 2: TRUST STATS**

1. **Click (+) to add new section**
2. **Choose:** 4 columns
3. **Section Background:** #F5F7FA
4. **Section Padding:** 60px top and bottom

**In Column 1:**
5. **Add widget:** "Counter"
6. **Starting Number:** 0
7. **Ending Number:** 15
8. **Duration:** 2000
9. **Suffix:** +
10. **Title:** Years of Experience
11. **Style:**
    - Number Color: #00A8E8
    - Number Size: 48px
    - Title Color: #4A5568

**Repeat for columns 2, 3, 4:**
- Column 2: 1000+ | Canadians Served
- Column 3: 7+ | Years Professional Installation
- Column 4: 7 (no +) | Days a Week Support

---

**SECTION 3: SERVICES GRID**

1. **Add section:** 3 columns
2. **Section padding:** 60px top/bottom

**In Column 1:**
3. **Add "Icon Box" widget**
4. **Content:**
   - Icon: Select Camera icon (or fas fa-camera)
   - Title: Security Cameras
   - Description: Advanced surveillance systems with color night vision, AI detection, and mobile access.
5. **Style:**
   - Icon Color: #00A8E8
   - Icon Size: 60px
   - Title Color: #0A1F44
6. **Add "Button" widget below:**
   - Text: Get Quote
   - Link: #
   - CSS Classes: btn btn-outline
   - Attributes: data-action | open-quote

**Repeat for other 5 services:**
- Smart Home Automation (home icon)
- Video Door Bells (doorbell icon)
- WIFI Solutions (wifi icon)
- Networking (network icon)
- Home Theater Installation (tv icon)

**Note:** You'll need to add more columns - click (+) at top, select 3 columns again

---

**SECTION 4: PACKAGES**

1. **Add section:** 2 columns
2. **Section background:** #F5F7FA
3. **Padding:** 60px top/bottom

**Column 1 - Package Card:**

4. **Add white background box:**
   - Add widget: "Inner Section" (if available) OR just style the column:
   - Column Style → Background: White
   - Column Style → Border: 2px solid #E5E7EB
   - Column Style → Border Radius: 12px
   - Column Advanced → Padding: 32px

5. **Add "Heading" widget:**
   - Text: 4 Color Night Vision Cameras DVR Package
   - Tag: H3

6. **Add "Heading" widget:**
   - Text: $1,100
   - Color: #00A8E8
   - Size: 48px
   - Weight: Bold

7. **Add "Text Editor" widget:**
   ```html
   <ul class="package-features">
       <li>1x color night vision camera</li>
       <li>3x infrared night vision cameras</li>
       <li>1TB hard drive</li>
       <li>Canadian weatherproof</li>
       <li>Free lifetime mobile App access</li>
   </ul>
   ```

8. **Add "Button" widget:**
   - Text: Get This Package
   - CSS Classes: btn btn-primary btn-block
   - Attributes: data-action | open-quote

**Column 2:**
Repeat with Package 2 details:
- Title: 4 AI Color Night Vision Cameras NVR Package
- Price: $1,450
- Features: (use the list from your HTML)

---

**SECTION 5: HOW IT WORKS**

1. **Add section:** 3 columns
2. **Heading above** (in own section):
   - Add 1-column section
   - Add heading: "How It Works"
   - Align center
   - Add text below: "Getting started is easy with our simple 3-step process"

**In each of the 3 columns:**

**Column 1:**
3. **Add "Icon Box":**
   - Icon: Number 1 (or use fas fa-1)
   - Icon View: Stacked
   - Shape: Circle
   - Primary Color: #00A8E8
   - Icon Size: 40px
4. **Add "Heading":** Request a Quote
5. **Add "Text Editor":** Fill out our simple form or give us a call. We'll discuss your needs and provide a free, no-obligation quote.

**Repeat for columns 2 & 3** with steps 2 and 3

---

**SECTION 6: TESTIMONIALS**

1. **Add section:** 2 columns
2. **Background:** #F5F7FA

**Each column gets a testimonial card:**

**Column 1:**
3. **Style column:**
   - Background: White
   - Border Radius: 12px
   - Padding: 32px
   - Box Shadow: 0 4px 6px rgba(0,0,0,0.1)

4. **Add "Text Editor":**
   ```html
   <div class="testimonial-stars">★★★★★</div>
   ```

5. **Add "Text Editor":**
   - Paste testimonial text
   - Style: Italic, #4A5568

6. **Add "Heading":**
   - Text: Michael R.
   - Tag: H4
   - Color: #0A1F44

7. **Add "Text":**
   - Text: Toronto, ON
   - Size: 14px
   - Color: #8B95A5

**Repeat for 3 more testimonial columns**

---

**SECTION 7: SERVICE AREA**

Simple centered text section

---

**SECTION 8: FINAL CTA**

1. **Add section:** 1 column
2. **Background:** Gradient (#00A8E8 to #00D4FF)
3. **Padding:** 80px top/bottom
4. **Add centered heading** (white): "Ready to Secure Your Property?"
5. **Add text** (white)
6. **Add 2 buttons:** Get Quote + Call button

---

### Save Home Page

1. **Click green "Update" button** at bottom left
2. **Click** the hamburger menu (☰) → "View Page"
3. **Check if it looks good!**

---

### Build Remaining Pages

Repeat the Elementor process for:

**Services Page:**
- Hero section
- Services grid (more detailed with bullet lists)
- FAQ section (use Accordion widget)
- CTA section

**About Page:**
- Hero
- Mission text
- Values grid (4 cards)
- Stats row
- Why Choose Us grid
- CTA

**Reviews Page:**
- Hero
- Testimonial slider (use Testimonials widget if available, or grid)
- More testimonials
- CTA

**Contact Page:**
- Hero
- Contact info cards (4 columns with icon boxes)
- Contact form (use Shortcode widget, paste your Contact Form 7 shortcode)
- Map (use Google Maps widget)
- CTA

---

## PHASE 7: Create Navigation Menu (10 minutes)

1. **Go to:** Appearance → Menus

2. **Click:** "Create a new menu"

3. **Menu Name:** Primary Menu

4. **Add pages:**
   - Check: Home, Services, About, Reviews, Contact
   - Click "Add to Menu"

5. **Drag to reorder** if needed

6. **Menu Settings:**
   - Check "Primary Menu"
   - Check "Desktop Primary Menu" (if option exists)

7. **Click:** "Save Menu"

---

## PHASE 8: Set Homepage (2 minutes)

1. **Go to:** Settings → Reading

2. **"Your homepage displays":** Select "A static page"

3. **Homepage:** Select "Home"

4. **Posts page:** Leave as "— Select —"

5. **Click:** "Save Changes"

---

## PHASE 9: Create Quote Modal Popup (15 minutes)

### Using Popup Maker Plugin:

1. **Go to:** Popup Maker → Add Popup

2. **Title:** Quote Modal

3. **Content area:**
   - Click "Add Shortcode"
   - Paste your Quote Form shortcode: `[contact-form-7 id="123"]`

4. **Popup Settings** (right sidebar):
   - **Display Settings:**
     - Theme: Default
     - Close: Yes (X button)
     - Overlay: Yes

   - **Triggers:**
     - Click: "Click Open"
     - Extra Selectors: `[data-action="open-quote"]`
     - Cookie: none

5. **Click:** "Publish"

6. **Test:**
   - Visit your site
   - Click "Get a Free Quote"
   - Modal should open!

---

## PHASE 10: Create Header & Footer (20 minutes)

### Using Elementor Header & Footer Builder:

**Create Header:**

1. **Go to:** Appearance → Header Footer Builder → Add New

2. **Type:** Header

3. **Click:** "Edit with Elementor"

4. **Build header:**
   - Add 1-column section
   - Add "Logo" widget (left)
   - Add "Nav Menu" widget (center)
   - Add "Button" widgets (right) - Call, Email, Get Quote

5. **Make sticky:**
   - Select header section
   - Advanced → Motion Effects → Sticky: Top

6. **Publish**

7. **Set display rules:**
   - Where: Entire Site

**Create Footer:**

1. **Appearance → Header Footer Builder → Add New**

2. **Type:** Footer

3. **Build 4-column footer** matching your HTML footer

4. **Publish** and set to "Entire Site"

---

## PHASE 11: Add Mobile Bottom Bar (15 minutes)

The mobile bottom bar uses your custom CSS/JS, so it should work automatically. To ensure it displays:

1. **Go to:** Custom CSS and JS → Add Custom HTML

2. **Title:** Mobile Bottom Bar

3. **Paste this HTML:**
```html
<div class="mobile-bottom-bar">
    <button class="mobile-bottom-btn" data-action="call" data-phone="+16477999973">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
        </svg>
        Call
    </button>
    <button class="mobile-bottom-btn primary" data-action="open-quote">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M9 11l3 3L22 4"/>
            <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>
        </svg>
        Quote
    </button>
    <button class="mobile-bottom-btn" data-action="email" data-email="info@fitechnologies.ca">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
            <polyline points="22,6 12,13 2,6"/>
        </svg>
        Email
    </button>
</div>
```

4. **Settings:**
   - Where: Footer
   - Where in site: In Frontend

5. **Publish**

---

## PHASE 12: Final Testing (15 minutes)

### Desktop Testing:

Visit your site and check:

- [ ] All pages load correctly
- [ ] Navigation menu works
- [ ] Header is sticky
- [ ] All images display
- [ ] All links work
- [ ] Click "Get a Free Quote" - modal opens
- [ ] Submit quote form - receive email
- [ ] Click "Call Now" - phone app opens
- [ ] Click email - email app opens
- [ ] FAQ accordion expands/collapses
- [ ] Testimonial slider works
- [ ] Stats counter animates
- [ ] Back to top button appears when scrolling

### Mobile Testing:

1. **Open site on mobile device** OR
2. **Use responsive mode:**
   - Right-click → Inspect (F12)
   - Click device icon (toggle device toolbar)
   - Select iPhone or Android device

Check:
- [ ] Mobile bottom bar appears at bottom
- [ ] Bottom bar has Call, Quote, Email buttons
- [ ] All buttons work
- [ ] Mobile menu hamburger works
- [ ] Forms work on mobile
- [ ] Touch targets are large enough
- [ ] Everything is readable

---

## PHASE 13: Performance Optimization (10 minutes)

1. **Install caching plugin:**
   - Plugins → Add New → "WP Super Cache"
   - Install and activate
   - Settings → turn on caching

2. **Optimize images:**
   - Install "Smush"
   - Go through each page
   - Compress images

3. **Elementor settings:**
   - Elementor → Settings → Features
   - Disable unused widgets
   - Save

---

## PHASE 14: Set Up Email Delivery (Optional, 10 minutes)

To ensure form emails are delivered:

1. **Install "WP Mail SMTP"**

2. **Go to:** WP Mail SMTP → Settings

3. **Choose mailer:**
   - Gmail (free, but requires setup)
   - SendGrid (free tier available)
   - Or use your hosting SMTP

4. **Configure settings** based on your choice

5. **Send test email**

---

## PHASE 15: Create Client Admin Account (5 minutes)

1. **Go to:** Users → Add New

2. **Fill in:**
   - Username: (client's choice)
   - Email: (client's email)
   - Role: **Editor** (NOT Administrator)
   - Send notification: Yes

3. **Click:** "Add New User"

4. **Give client:**
   - Login URL: yoursite.com/wp-admin
   - Username
   - Password (they'll get via email)

---

## ✅ FINAL CHECKLIST

Before handing off to client:

- [ ] All 5 pages created and published
- [ ] All pages built with Elementor
- [ ] Navigation menu works
- [ ] Forms submit and send emails
- [ ] Quote modal works
- [ ] Mobile bottom bar appears on mobile
- [ ] Header and footer appear on all pages
- [ ] Site looks good on mobile
- [ ] Contact information is correct
- [ ] All links work
- [ ] Client account created
- [ ] Backup created (via UpdraftPlus)

---

## 📱 Quick Client Training Guide

**Send this to your client:**

### How to Edit Your Website

1. **Log in:** yoursite.com/wp-admin

2. **Edit a page:**
   - Go to: Pages → All Pages
   - Click: "Edit with Elementor" on any page

3. **Edit text:**
   - Click on any text
   - Type new content
   - Click "Update" button (bottom left)

4. **Edit images:**
   - Click on image
   - Click "Choose Image"
   - Upload or select new image
   - Click "Update"

5. **Change phone number:**
   - Edit page
   - Click on phone number
   - Change in sidebar
   - Update

6. **Add new testimonial:**
   - Edit Reviews page
   - Right-click testimonial card → Duplicate
   - Edit duplicated card
   - Update

**Important:**
- Always click "Update" when done
- Test on mobile after changes
- Don't delete sections - just hide them if needed

---

## 🎉 YOU'RE DONE!

**Congratulations!** You now have a fully functional, client-editable website.

### What to do next:

1. **Test everything thoroughly**
2. **Make a backup** (UpdraftPlus)
3. **Train your client**
4. **Go live!**

### If something doesn't work:

1. Clear cache (WP Super Cache settings)
2. Check browser console for errors (F12)
3. Re-save permalinks (Settings → Permalinks → Save)
4. Check if all plugins are activated

---

## 🆘 Common Issues & Fixes

**Problem: Styles not applying**
- Solution: Check Custom CSS and JS plugin → Make sure CSS is published
- Clear cache and hard refresh (Ctrl+Shift+R)

**Problem: JavaScript not working**
- Solution: Check browser console (F12) for errors
- Make sure all 3 JS files are added and published

**Problem: Forms not sending**
- Solution: Install WP Mail SMTP and configure
- Check spam folder

**Problem: Modal not opening**
- Solution: Make sure Popup Maker is activated
- Check button has attribute: data-action="open-quote"

**Problem: Mobile bar not showing**
- Solution: Check it's in mobile view (under 768px width)
- Make sure HTML is added via Custom HTML plugin

**Problem: Menu not showing**
- Solution: Appearance → Menus → Make sure menu is assigned to location

---

## 📞 Need More Help?

- WordPress Forums: wordpress.org/support
- Elementor Community: elementor.com/community
- Contact Form 7 Docs: contactform7.com/docs

---

**Time to celebrate! 🎉 You built a professional website!**
