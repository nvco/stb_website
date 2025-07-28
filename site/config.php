<?php
declare(strict_types=1);

// Load error handling system first
require_once __DIR__ . '/includes/error-handler.php';

// Business information
$business_name = 'Still Time Beauty';
$contact_name = 'Still Time Beauty';
$phone = '(720) 731-8222';
$phone_link = 'tel:(720) 731-8222';
$email = 'info@stilltimebeauty.com';
$address_street = '741 Pearl St';
$address_city = 'Boulder';
$address_state = 'CO';
$address_zip = '80302';
$address_full = $address_street . ', ' . $address_city . ', ' . $address_state . ' ' . $address_zip;

// SEO defaults
$site_description = 'Expert medical aesthetics treatments including Botox and dermal fillers by a qualified Nurse Practitioner in downtown Boulder.';
$site_keywords = 'Botox Boulder, dermal fillers Boulder, medical aesthetics, facial rejuvenation, cosmetic injections, Nurse Practitioner, Boulder CO';

// CTA and credentials
$cta_phone = 'Call ' . $phone;
$credentials = 'Licensed Nurse Practitioner';
$credentials_description = 'Expert medical aesthetics with surgical precision background';

// Blog configuration
$blog_title = 'Botox & Dermal Fillers Blog';

// Base URL configuration - dynamic for localhost and production
$is_localhost = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false || strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false);
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443 ? 'https://' : 'http://';
$base_url = $is_localhost ? $protocol . $_SERVER['HTTP_HOST'] : 'https://stilltimebeauty.com';

// Google Business Profile
$google_maps_embed = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.4537!2d-105.2794!3d40.0194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876bf5ba4c8b4c8b%3A0x1234567890!2s741%20Pearl%20St%2C%20Boulder%2C%20CO%2080302!5e0!3m2!1sen!2sus!4v1234567890!5m2!1sen!2sus';

// Hours and availability
$business_hours = [
    'Monday' => '9:00 AM - 5:00 PM',
    'Tuesday' => '9:00 AM - 5:00 PM', 
    'Wednesday' => '9:00 AM - 5:00 PM',
    'Thursday' => '9:00 AM - 5:00 PM',
    'Friday' => '9:00 AM - 5:00 PM',
    'Saturday' => 'By Appointment',
    'Sunday' => 'Closed'
];

// Services offered
$services = [
    'Botox' => [
        'name' => 'Botox Treatments',
        'description' => 'Expert neuromodulator injections for facial rejuvenation',
        'icon' => 'syringe'
    ],
    'Fillers' => [
        'name' => 'Dermal Fillers',
        'description' => 'Volume restoration and facial contouring',
        'icon' => 'droplet'
    ],
    'Consultation' => [
        'name' => 'Expert Consultation',
        'description' => 'Personalized treatment planning',
        'icon' => 'user-check'
    ]
];

// Legal and compliance
$hipaa_compliance = true;
$professional_liability_insured = true;
$state_licensed = 'Colorado';
$fda_approved_treatments = true;

// Load reusable UI components
require_once __DIR__ . '/includes/components.php';
?> 