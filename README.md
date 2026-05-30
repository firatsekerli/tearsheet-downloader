# Tearsheet Downloader

A WordPress / WooCommerce plugin that generates a branded PDF tearsheet when a visitor clicks the Download button on a product page.

## What it does

- Clicking the **Download** button on any WooCommerce product page streams a PDF tearsheet
- PDF layout: brand name at top, product specs on the left, featured image on the right, contact info in the footer
- All spec data is pulled from existing ACF custom fields — no duplication

## ACF fields used

| Field name | Label in PDF |
|---|---|
| `dim_width` | Width |
| `dim_depth` | Depth |
| `dim_height` | Height |
| `dim_seat_height` | Seat Height |
| `material` | Material |
| `finish_shown` | Finish Shown |
| `construction_notes` | Details |

Brand name is read from the **WooCommerce Brands** (`product_brand`) taxonomy.

## Installation

1. Download this repository as a ZIP
2. Rename the folder to `tearsheet-downloader`
3. Upload to `wp-content/plugins/`
4. Activate in **WP Admin → Plugins**

No Composer setup needed — mPDF is bundled in `vendor/`.

## Requirements

- WordPress 6.0+
- WooCommerce 7.0+
- PHP 8.0+
- ACF (Advanced Custom Fields)
- WooCommerce Brands

## Wiring up the Download button

Add `class="tearsheet-download"` to your download button so the plugin finds it reliably:

```html
<a href="#" class="tearsheet-download" title="Download tearsheet">
  DOWNLOAD
</a>
```

The plugin also auto-detects buttons/links whose text, title, or aria-label contains "download" as a fallback.

## Credits

Developed by [MKS Web Design](https://mkswebdesign.com)
