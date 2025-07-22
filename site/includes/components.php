<?php
declare(strict_types=1);

/**
 * Reusable UI Components
 * Common HTML patterns used throughout the site
 */

/**
 * Primary CTA Button - Main call-to-action button (accent color)
 * 
 * @param string $href - Link URL
 * @param string $text - Button text content
 * @param string $size - Button size: 'sm', 'md', 'lg' (default: 'lg')
 * @param bool $hasIcon - Whether to include arrow icon (default: true)
 * @return string - Complete button HTML
 * @throws InvalidArgumentException - If parameters are invalid
 */
function cta_button_primary(string $href, string $text, string $size = 'lg', bool $hasIcon = true): string {
    // Validate parameters
    $params = compact('href', 'text', 'size');
    $rules = [
        'href' => ['required' => true, 'type' => 'string', 'max_length' => 500],
        'text' => ['required' => true, 'type' => 'string', 'max_length' => 100],
        'size' => ['required' => true, 'type' => 'string', 'allowed' => ['sm', 'md', 'lg']]
    ];
    
    $errors = validate_component_params($params, $rules);
    if (!empty($errors)) {
        throw new InvalidArgumentException('Invalid parameters: ' . implode(', ', $errors));
    }

    // Additional URL validation for href
    if (!filter_var($href, FILTER_VALIDATE_URL) && !str_starts_with($href, 'tel:') && !str_starts_with($href, '/')) {
        throw new InvalidArgumentException("Invalid URL format: {$href}");
    }

    $sizeClasses = [
        'sm' => 'px-6 py-3 text-base',
        'md' => 'px-7 py-3.5 text-lg', 
        'lg' => 'px-8 py-4 text-lg'
    ];
    
    $classes = "inline-flex items-center justify-center 
                " . $sizeClasses[$size] . " 
                font-semibold text-white 
                bg-accent-600 
                rounded-full 
                hover:bg-accent-700 transition-colors";
    
    $icon = $hasIcon ? '<i data-lucide="arrow-right" class="w-5 h-5 ml-2" aria-hidden="true"></i>' : '';
    
    // Sanitize output
    $safe_href = esc_html($href);
    $safe_text = esc_html($text);
    
    return "<a href=\"{$safe_href}\" class=\"{$classes}\">{$safe_text}{$icon}</a>";
}

/**
 * Secondary Button - Outline style button
 * 
 * @param string $href - Link URL
 * @param string $text - Button text content
 * @param string $size - Button size: 'sm', 'md', 'lg' (default: 'lg')
 * @param string $color - Color theme: 'primary', 'accent' (default: 'primary')
 * @return string - Complete button HTML
 * @throws InvalidArgumentException - If parameters are invalid
 */
function cta_button_secondary(string $href, string $text, string $size = 'lg', string $color = 'primary'): string {
    // Validate parameters
    $params = compact('href', 'text', 'size', 'color');
    $rules = [
        'href' => ['required' => true, 'type' => 'string', 'max_length' => 500],
        'text' => ['required' => true, 'type' => 'string', 'max_length' => 100],
        'size' => ['required' => true, 'type' => 'string', 'allowed' => ['sm', 'md', 'lg']],
        'color' => ['required' => true, 'type' => 'string', 'allowed' => ['primary', 'accent']]
    ];
    
    $errors = validate_component_params($params, $rules);
    if (!empty($errors)) {
        throw new InvalidArgumentException('Invalid parameters: ' . implode(', ', $errors));
    }

    $sizeClasses = [
        'sm' => 'px-6 py-3 text-base',
        'md' => 'px-7 py-3.5 text-lg',
        'lg' => 'px-8 py-4 text-lg'
    ];
    
    $colorClasses = [
        'primary' => 'text-primary-600 border-primary-600 hover:bg-primary-50',
        'accent' => 'text-accent-600 border-accent-600 hover:bg-accent-50'
    ];
    
    $classes = "inline-flex items-center justify-center 
                " . $sizeClasses[$size] . " 
                font-semibold 
                border-2 " . $colorClasses[$color] . " 
                rounded-full 
                transition-colors";
    
    // Sanitize output
    $safe_href = esc_html($href);
    $safe_text = esc_html($text);
    
    return "<a href=\"{$safe_href}\" class=\"{$classes}\">{$safe_text}</a>";
}

/**
 * Icon with Text - Reusable icon + text pattern
 * 
 * @param string $icon - Lucide icon name
 * @param string $text - Text content
 * @param string $subtext - Optional subtext (default: '')
 * @param string $iconColor - Icon color class (default: 'text-accent-600')
 * @return string - Complete icon/text HTML
 */
function icon_with_text(string $icon, string $text, string $subtext = '', string $iconColor = 'text-accent-600'): string {
    $subtextHtml = $subtext ? "<div class=\"text-xs text-primary-600\">{$subtext}</div>" : '';
    
    return "<div class=\"flex items-center justify-center lg:justify-start space-x-2\">
                <i data-lucide=\"{$icon}\" class=\"w-4 h-4 {$iconColor}\" aria-hidden=\"true\"></i>
                <div>
                    <div class=\"text-xs font-semibold text-primary-800\">{$text}</div>
                    {$subtextHtml}
                </div>
            </div>";
}

/**
 * Service Card Icon - Large icon for service highlights
 * 
 * @param string $icon - Lucide icon name
 * @param string $title - Service title
 * @param string $description - Service description
 * @return string - Complete service card HTML
 */
function service_card_icon(string $icon, string $title, string $description): string {
    return "<div class=\"text-center p-6\">
                <div class=\"flex justify-center mb-4\">
                    <i data-lucide=\"{$icon}\" class=\"w-8 h-8 text-accent-600\" aria-hidden=\"true\"></i>
                </div>
                <h3 class=\"text-2xl font-semibold text-primary-800 mb-4\">{$title}</h3>
                <p class=\"text-primary-600 leading-relaxed\">{$description}</p>
            </div>";
}

/**
 * Info Card - Glassmorphism info card (used in hero sections)
 * 
 * @param string $icon - Lucide icon name
 * @param string $title - Card title
 * @param string $subtitle - Card subtitle
 * @return string - Complete info card HTML
 */
function info_card(string $icon, string $title, string $subtitle): string {
    return "<div class=\"flex items-center justify-center lg:justify-start space-x-2
                        px-4 py-3 
                        text-center lg:text-left 
                        bg-white/80 backdrop-blur-sm 
                        border border-primary-200 rounded-xl\">
                " . icon_with_text($icon, $title, $subtitle) . "
            </div>";
}

/**
 * Escape HTML output for security
 * 
 * @param string $string - String to escape
 * @return string - Escaped string
 */
function esc_html(string $string): string {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/**
 * Format phone number for display
 * 
 * @param string $phone - Phone number
 * @return string - Formatted phone number
 */
function format_phone(string $phone): string {
    return preg_replace('/[^0-9]/', '', $phone);
}
?> 