<?php
// Still Time Beauty - Configuration Variables
// Single source of truth for all business information

// Environment Detection
$is_local = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false || strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false);
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';

// Domain Configuration
$domain = $is_local ? $_SERVER['HTTP_HOST'] : 'stilltimebeauty.com';
$base_url = $protocol . $domain;

// Business Information
$business_name = 'Still Time Beauty';
$business_tagline = 'Where time stands still, and your natural beauty takes center stage.';

// Contact Information
$phone = '(720) 731-8222';
$phone_number = $phone; // Alias for compatibility
$phone_display = $phone; // Alias for compatibility
$phone_link = 'tel:' . str_replace(['(', ')', ' ', '-'], '', $phone); // tel:7207318222
$email = 'info@stilltimebeauty.com';
$contact_name = 'Still Time Beauty';

// Address Information
$address_street = '741 Pearl St';
$address_city = 'Boulder';
$address_state = 'CO';
$address_zip = '80302';
$address_full = $address_street . ', ' . $address_city . ', ' . $address_state . ' ' . $address_zip;

// Aliases for compatibility with PHP files
$city = $address_city;
$state = $address_state;
$zip_code = $address_zip;

// Business Hours
$hours = 'By appointment only';

// SEO Meta Information
$site_description = 'Still Time Beauty - Medical aesthetics practice in Boulder, Colorado specializing in Botox, dermal fillers, and facial rejuvenation. Expert Nurse Practitioner-driven treatments.';
$site_keywords = 'Botox Boulder, dermal fillers Boulder, medical aesthetics Boulder, facial rejuvenation Colorado, Nurse Practitioner injections';

// Social/Business Links
$google_maps_embed = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.1234567890!2d-105.2816!3d40.0150!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDAwJzU0LjAiTiAxMDXCsDE2JzUzLjgiVw!5e0!3m2!1sen!2sus!4v1234567890123';

// Call-to-Action Text
$cta_phone = 'Call to Book: ' . $phone;

// Professional Credentials
$credentials = 'Licensed Nurse Practitioner';
$credentials_description = 'Expert medical aesthetics with surgical precision background';

// Legal/Compliance
$hipaa_compliant = true;
$fda_approved_treatments = true;


?> 