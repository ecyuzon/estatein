<?php
/**
 * Estatein Theme Functions
 */

// Theme Setup
function estatein_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'estatein'),
        'footer' => __('Footer Menu', 'estatein'),
    ));

    // Add image sizes
    add_image_size('property-thumbnail', 800, 600, true);
    add_image_size('hero-image', 1200, 800, true);
}
add_action('after_setup_theme', 'estatein_theme_setup');

// Enqueue styles and scripts
function estatein_enqueue_assets() {
    // Tailwind CSS (compiled)
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/assets/css/tailwind.css', array(), '1.0.0');

    // Font Awesome icons
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), '6.5.2');

    // Theme stylesheet
    wp_enqueue_style('estatein-style', get_stylesheet_uri(), array(), '1.0.0');

    // Lucide Icons (using CDN alternative)
    wp_enqueue_script('lucide-icons', 'https://unpkg.com/lucide@latest/dist/umd/lucide.min.js', array(), null, true);

    // Theme JavaScript
    wp_enqueue_script('estatein-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'estatein_enqueue_assets');


// Register Custom Post Type - Properties
function estatein_register_property_post_type() {
    $labels = array(
        'name' => 'Properties',
        'singular_name' => 'Property',
        'add_new' => 'Add New Property',
        'add_new_item' => 'Add New Property',
        'edit_item' => 'Edit Property',
        'new_item' => 'New Property',
        'view_item' => 'View Property',
        'search_items' => 'Search Properties',
        'not_found' => 'No properties found',
        'not_found_in_trash' => 'No properties found in trash',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-building',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'properties'),
    );

    register_post_type('property', $args);
}
add_action('init', 'estatein_register_property_post_type');

// Register Custom Post Type - Testimonials
function estatein_register_testimonial_post_type() {
    $labels = array(
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
        'add_new' => 'Add New Testimonial',
        'add_new_item' => 'Add New Testimonial',
        'edit_item' => 'Edit Testimonial',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-star-filled',
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('testimonial', $args);
}
add_action('init', 'estatein_register_testimonial_post_type');

// Add custom meta boxes for properties
function estatein_add_property_meta_boxes() {
    add_meta_box(
        'property_details',
        'Property Details',
        'estatein_property_details_callback',
        'property',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'estatein_add_property_meta_boxes');

// Property details meta box callback
function estatein_property_details_callback($post) {
    wp_nonce_field('estatein_save_property_details', 'estatein_property_nonce');

    $price = get_post_meta($post->ID, '_property_price', true);
    $location = get_post_meta($post->ID, '_property_location', true);
    $bedrooms = get_post_meta($post->ID, '_property_bedrooms', true);
    $bathrooms = get_post_meta($post->ID, '_property_bathrooms', true);
    $area = get_post_meta($post->ID, '_property_area', true);
    ?>
    <p>
        <label for="property_price">Price:</label><br>
        <input type="text" id="property_price" name="property_price" value="<?php echo esc_attr($price); ?>" style="width: 100%;">
    </p>
    <p>
        <label for="property_location">Location:</label><br>
        <input type="text" id="property_location" name="property_location" value="<?php echo esc_attr($location); ?>" style="width: 100%;">
    </p>
    <p>
        <label for="property_bedrooms">Bedrooms:</label><br>
        <input type="number" id="property_bedrooms" name="property_bedrooms" value="<?php echo esc_attr($bedrooms); ?>" style="width: 100%;">
    </p>
    <p>
        <label for="property_bathrooms">Bathrooms:</label><br>
        <input type="number" id="property_bathrooms" name="property_bathrooms" value="<?php echo esc_attr($bathrooms); ?>" style="width: 100%;">
    </p>
    <p>
        <label for="property_area">Area (sqft):</label><br>
        <input type="text" id="property_area" name="property_area" value="<?php echo esc_attr($area); ?>" style="width: 100%;">
    </p>
    <?php
}

// Save property meta data
function estatein_save_property_details($post_id) {
    if (!isset($_POST['estatein_property_nonce']) || !wp_verify_nonce($_POST['estatein_property_nonce'], 'estatein_save_property_details')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['property_price'])) {
        update_post_meta($post_id, '_property_price', sanitize_text_field($_POST['property_price']));
    }

    if (isset($_POST['property_location'])) {
        update_post_meta($post_id, '_property_location', sanitize_text_field($_POST['property_location']));
    }

    if (isset($_POST['property_bedrooms'])) {
        update_post_meta($post_id, '_property_bedrooms', intval($_POST['property_bedrooms']));
    }

    if (isset($_POST['property_bathrooms'])) {
        update_post_meta($post_id, '_property_bathrooms', intval($_POST['property_bathrooms']));
    }

    if (isset($_POST['property_area'])) {
        update_post_meta($post_id, '_property_area', sanitize_text_field($_POST['property_area']));
    }
}
add_action('save_post_property', 'estatein_save_property_details');

// Add custom meta boxes for testimonials
function estatein_add_testimonial_meta_boxes() {
    add_meta_box(
        'testimonial_details',
        'Testimonial Details',
        'estatein_testimonial_details_callback',
        'testimonial',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'estatein_add_testimonial_meta_boxes');

// Testimonial details meta box callback
function estatein_testimonial_details_callback($post) {
    wp_nonce_field('estatein_save_testimonial_details', 'estatein_testimonial_nonce');

    $rating = get_post_meta($post->ID, '_testimonial_rating', true);
    $location = get_post_meta($post->ID, '_testimonial_location', true);
    ?>
    <p>
        <label for="testimonial_rating">Rating (1-5):</label><br>
        <input type="number" id="testimonial_rating" name="testimonial_rating" value="<?php echo esc_attr($rating); ?>" min="1" max="5" style="width: 100%;">
    </p>
    <p>
        <label for="testimonial_location">Location:</label><br>
        <input type="text" id="testimonial_location" name="testimonial_location" value="<?php echo esc_attr($location); ?>" style="width: 100%;">
    </p>
    <?php
}

// Save testimonial meta data
function estatein_save_testimonial_details($post_id) {
    if (!isset($_POST['estatein_testimonial_nonce']) || !wp_verify_nonce($_POST['estatein_testimonial_nonce'], 'estatein_save_testimonial_details')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['testimonial_rating'])) {
        update_post_meta($post_id, '_testimonial_rating', intval($_POST['testimonial_rating']));
    }

    if (isset($_POST['testimonial_location'])) {
        update_post_meta($post_id, '_testimonial_location', sanitize_text_field($_POST['testimonial_location']));
    }
}
add_action('save_post_testimonial', 'estatein_save_testimonial_details');

// Customizer Settings
function estatein_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('estatein_hero', array(
        'title' => __('Hero Section', 'estatein'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('hero_title', array(
        'default' => 'Discover Your Dream Property with Estatein',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title', 'estatein'),
        'section' => 'estatein_hero',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_description', array(
        'default' => 'Your journey to finding the perfect property begins here. Explore our listings to find the home that matches your dreams.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('hero_description', array(
        'label' => __('Hero Description', 'estatein'),
        'section' => 'estatein_hero',
        'type' => 'textarea',
    ));

    // Stats Section
    $wp_customize->add_setting('stat_customers', array(
        'default' => '200+',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('stat_customers', array(
        'label' => __('Happy Customers', 'estatein'),
        'section' => 'estatein_hero',
        'type' => 'text',
    ));

    $wp_customize->add_setting('stat_properties', array(
        'default' => '10k+',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('stat_properties', array(
        'label' => __('Properties For Clients', 'estatein'),
        'section' => 'estatein_hero',
        'type' => 'text',
    ));

    $wp_customize->add_setting('stat_experience', array(
        'default' => '16+',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('stat_experience', array(
        'label' => __('Years of Experience', 'estatein'),
        'section' => 'estatein_hero',
        'type' => 'text',
    ));
}
add_action('customize_register', 'estatein_customize_register');
