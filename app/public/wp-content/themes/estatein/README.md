# Estatein WordPress Theme

A modern real estate WordPress theme with a dark design aesthetic, perfect for property listings and real estate agencies.

## Features

- **Custom Post Types**: Properties and Testimonials
- **Property Management**: Custom meta boxes for property details (price, location, bedrooms, bathrooms, area)
- **Testimonial System**: Manage client reviews with ratings
- **Responsive Design**: Mobile-friendly layout using Tailwind CSS
- **WordPress Customizer**: Easy customization of hero section and statistics
- **Navigation Menus**: Primary and footer menu locations
- **Template Parts**: Modular sections for easy customization

## Installation

1. **Upload the Theme**
   - Download or copy the `estatein` folder
   - Upload it to `/wp-content/themes/` in your WordPress installation
   - Or zip the folder and upload via WordPress admin (Appearance > Themes > Add New)

2. **Activate the Theme**
   - Go to Appearance > Themes in your WordPress admin
   - Find "Estatein" and click "Activate"

3. **Set Up Menus**
   - Go to Appearance > Menus
   - Create a new menu and assign it to "Primary Menu" location
   - Optionally create a footer menu and assign it to "Footer Menu"

4. **Configure Settings**
   - Go to Appearance > Customize
   - Navigate to "Hero Section" to customize:
     - Hero title
     - Hero description
     - Statistics (customers, properties, years of experience)

## Adding Content

### Adding Properties

1. Go to Properties > Add New Property
2. Enter the property title
3. Add property description in the content editor
4. Set a featured image
5. Fill in Property Details:
   - Price (e.g., $550,000)
   - Location (e.g., Malibu, California)
   - Bedrooms (number)
   - Bathrooms (number)
   - Area (e.g., 2,500)
6. Click "Publish"

### Adding Testimonials

1. Go to Testimonials > Add New Testimonial
2. Enter the client's name as the title
3. Add the testimonial text in the content editor
4. Optionally add a client photo as featured image
5. Fill in Testimonial Details:
   - Rating (1-5 stars)
   - Location (e.g., USA, California)
6. Click "Publish"

## Theme Structure

```
estatein/
├── style.css                 # Theme metadata and custom styles
├── functions.php             # Theme functions and custom post types
├── index.php                 # Main homepage template
├── header.php                # Header template
├── footer.php                # Footer template
├── single-property.php       # Single property detail page
├── archive-property.php      # Properties archive page
├── template-parts/           # Modular template sections
│   ├── section-properties.php
│   ├── section-testimonials.php
│   └── section-faq.php
├── assets/
│   ├── css/                  # Additional stylesheets
│   └── js/                   # JavaScript files
└── inc/                      # Additional PHP includes
```

## Customization

### Tailwind CSS

The theme uses Tailwind CSS via CDN for styling. The configuration is loaded automatically in `functions.php`.

### Custom Colors

The theme uses a dark color scheme with purple accents:
- Primary: Purple (#9333EA / purple-600)
- Background: Dark (#0A0A0A)
- Surface: Gray (#1F1F1F / gray-900)

### Customizer Options

Available in Appearance > Customize > Hero Section:
- Hero Title
- Hero Description
- Happy Customers stat
- Properties For Clients stat
- Years of Experience stat

## Developer Notes

### Custom Post Types

**Properties** (`property`)
- Meta fields: `_property_price`, `_property_location`, `_property_bedrooms`, `_property_bathrooms`, `_property_area`
- Archive: `archive-property.php`
- Single: `single-property.php`

**Testimonials** (`testimonial`)
- Meta fields: `_testimonial_rating`, `_testimonial_location`
- Displayed on homepage via `section-testimonials.php`

### Template Hierarchy

- Homepage: `index.php`
- Property Archive: `archive-property.php`
- Single Property: `single-property.php`
- Default: WordPress fallbacks

## Browser Support

- Modern browsers (Chrome, Firefox, Safari, Edge)
- Mobile responsive
- Requires JavaScript enabled for icons and interactive features

## Credits

- Tailwind CSS for styling
- Lucide Icons for iconography
- Unsplash for placeholder images

## Support

For issues, questions, or feature requests, please contact the theme developer.

## License

GPL v2 or later
http://www.gnu.org/licenses/gpl-2.0.html

---

**Version**: 1.0.0  
**Author**: Your Name  
**Last Updated**: 2024
