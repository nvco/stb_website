<?php
declare(strict_types=1);

/**
 * Error Handling and Validation System
 * Centralized error handling and input validation for the site
 */

/**
 * Custom error handler function
 * 
 * @param int $severity - Error severity level
 * @param string $message - Error message
 * @param string $file - File where error occurred
 * @param int $line - Line number where error occurred
 * @return bool - Whether the error was handled
 */
function custom_error_handler(int $severity, string $message, string $file, int $line): bool {
    // Don't handle errors if error reporting is turned off
    if (!(error_reporting() & $severity)) {
        return false;
    }

    $error_type = match($severity) {
        E_ERROR, E_CORE_ERROR, E_COMPILE_ERROR, E_USER_ERROR => 'ERROR',
        E_WARNING, E_CORE_WARNING, E_COMPILE_WARNING, E_USER_WARNING => 'WARNING',
        E_NOTICE, E_USER_NOTICE => 'NOTICE',
        E_STRICT => 'STRICT',
        E_DEPRECATED, E_USER_DEPRECATED => 'DEPRECATED',
        default => 'UNKNOWN'
    };

    $error_log = sprintf(
        "[%s] %s: %s in %s on line %d",
        date('Y-m-d H:i:s'),
        $error_type,
        $message,
        $file,
        $line
    );

    // Log to file (in production) or display (in development)
    if (defined('APP_ENV') && APP_ENV === 'production') {
        error_log($error_log);
    } else {
        error_log($error_log, 4); // Send to SAPI logging handler
    }

    return true;
}

/**
 * Custom exception handler
 * 
 * @param Throwable $exception - The uncaught exception
 * @return void
 */
function custom_exception_handler(Throwable $exception): void {
    $error_message = sprintf(
        "[%s] Uncaught %s: %s in %s:%d\nStack trace:\n%s",
        date('Y-m-d H:i:s'),
        get_class($exception),
        $exception->getMessage(),
        $exception->getFile(),
        $exception->getLine(),
        $exception->getTraceAsString()
    );

    // Log the error
    error_log($error_message);

    // Display user-friendly error in production
    if (defined('APP_ENV') && APP_ENV === 'production') {
        http_response_code(500);
        include __DIR__ . '/error-pages/500.php';
    } else {
        // Show detailed error in development
        echo "<pre>" . htmlspecialchars($error_message) . "</pre>";
    }
}

/**
 * Validate email address
 * 
 * @param string $email - Email to validate
 * @return bool - Whether email is valid
 */
function validate_email(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Validate phone number (US format)
 * 
 * @param string $phone - Phone number to validate
 * @return bool - Whether phone is valid
 */
function validate_phone(string $phone): bool {
    $cleaned = preg_replace('/[^0-9]/', '', $phone);
    return strlen($cleaned) === 10 || strlen($cleaned) === 11;
}

/**
 * Sanitize string input
 * 
 * @param string $input - Input to sanitize
 * @param int $max_length - Maximum allowed length (default: 255)
 * @return string - Sanitized string
 */
function sanitize_string(string $input, int $max_length = 255): string {
    $sanitized = trim($input);
    $sanitized = strip_tags($sanitized);
    $sanitized = htmlspecialchars($sanitized, ENT_QUOTES, 'UTF-8');
    return substr($sanitized, 0, $max_length);
}

/**
 * Validate and sanitize URL
 * 
 * @param string $url - URL to validate
 * @return string|false - Sanitized URL or false if invalid
 */
function validate_url(string $url): string|false {
    $url = filter_var($url, FILTER_VALIDATE_URL);
    return $url !== false ? $url : false;
}

/**
 * Safe include with error handling
 * 
 * @param string $file_path - Path to file to include
 * @param bool $required - Whether file is required (default: true)
 * @return bool - Whether include was successful
 */
function safe_include(string $file_path, bool $required = true): bool {
    if (!file_exists($file_path)) {
        $error_msg = "File not found: {$file_path}";
        
        if ($required) {
            throw new RuntimeException($error_msg);
        } else {
            error_log("Warning: {$error_msg}");
            return false;
        }
    }

    if (!is_readable($file_path)) {
        $error_msg = "File not readable: {$file_path}";
        
        if ($required) {
            throw new RuntimeException($error_msg);
        } else {
            error_log("Warning: {$error_msg}");
            return false;
        }
    }

    try {
        if ($required) {
            require_once $file_path;
        } else {
            include_once $file_path;
        }
        return true;
    } catch (Throwable $e) {
        error_log("Error including file {$file_path}: " . $e->getMessage());
        
        if ($required) {
            throw $e;
        }
        return false;
    }
}

/**
 * Validate component function parameters
 * 
 * @param array $params - Parameters to validate
 * @param array $rules - Validation rules
 * @return array - Validation errors (empty if valid)
 */
function validate_component_params(array $params, array $rules): array {
    $errors = [];

    foreach ($rules as $field => $rule) {
        $value = $params[$field] ?? null;

        // Required field validation
        if ($rule['required'] ?? false) {
            if (empty($value)) {
                $errors[$field] = "Field '{$field}' is required";
                continue;
            }
        }

        // Skip other validations if field is empty and not required
        if (empty($value)) {
            continue;
        }

        // Type validation
        if (isset($rule['type'])) {
            $expected_type = $rule['type'];
            $actual_type = gettype($value);
            
            if ($actual_type !== $expected_type) {
                $errors[$field] = "Field '{$field}' must be of type {$expected_type}, {$actual_type} given";
                continue;
            }
        }

        // Length validation
        if (isset($rule['max_length']) && is_string($value)) {
            if (strlen($value) > $rule['max_length']) {
                $errors[$field] = "Field '{$field}' exceeds maximum length of {$rule['max_length']} characters";
            }
        }

        // Allowed values validation
        if (isset($rule['allowed']) && is_array($rule['allowed'])) {
            if (!in_array($value, $rule['allowed'], true)) {
                $allowed_str = implode(', ', $rule['allowed']);
                $errors[$field] = "Field '{$field}' must be one of: {$allowed_str}";
            }
        }
    }

    return $errors;
}

// Set up error handlers
set_error_handler('custom_error_handler');
set_exception_handler('custom_exception_handler');

// Define environment if not already set
if (!defined('APP_ENV')) {
    define('APP_ENV', $_ENV['APP_ENV'] ?? 'development');
}
?> 