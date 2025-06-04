# a-b-tests

## Template Customization Guide

This repository uses `homepage-coupons/index.php` as a base template for creating company-specific landing pages. Before reusing the file, replace the following items with content for the target company:

1. **Global Tokens**
   - `confirmation_page` – path to the thank you or confirmation page.
   - `service_dropdown` – options shown in the contact form's service selector.
2. **Customer Reviews**
   - Edit the quotes, author names, and locations in the `[contact_reviews]` section.
3. **Brand Colors**
   - CSS variables `--brand-default`, `--brand-accent`, and `--brand-dark` define the site's color palette.
4. **Hero Imagery and Text**
   - Update the main hero background image and headline images.
   - Replace the headshot photo (`john-headshot.png`) and its `alt` text.
   - Adjust offer details like “5% Off” and the form title.
5. **Service Links**
   - The service list under the hero image links to specific service pages. Update URLs and text as needed.
6. **Company Placeholders**
   - Replace `[company]` in the hero image’s `alt` text with the company name.
   - Review any remaining company-specific wording such as “John’s Waterproofing” inside testimonials or elsewhere.

After making these changes, run `php -l <file>` to ensure the resulting PHP file has no syntax errors.
