/**
 * Shared Tailwind CSS Configuration
 * Used across all site templates to maintain consistency
 */
tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary: {
                    50: '#f8fafc',
                    100: '#f1f5f9',
                    200: '#e2e8f0',
                    300: '#cbd5e1',
                    400: '#94a3b8',
                    500: '#64748b',
                    600: '#475569',
                    700: '#334155',
                    800: '#1e293b',
                    900: '#0f172a',
                },
                accent: {
                    50: '#f0fdfa',
                    100: '#ccfbf1',
                    200: '#99f6e4',
                    300: '#5eead4',
                    400: '#2dd4bf',
                    500: '#14b8a6',
                    600: '#0d9488',
                    700: '#0f766e',
                    800: '#115e59',
                    900: '#134e4a',
                },
                coral: {
                    500: '#EE6D71',
                }
            },
            fontFamily: {
                'serif': [
                    'Georgia',
                    'Times New Roman', 
                    'Times',
                    'Noto Serif',
                    'Droid Serif',
                    'serif'
                ],
                'sans': [
                    'DM Sans',
                    '-apple-system',
                    'BlinkMacSystemFont',
                    'Segoe UI',
                    'Roboto',
                    'Oxygen',
                    'Ubuntu',
                    'Cantarell',
                    'Helvetica Neue',
                    'Helvetica',
                    'Arial',
                    'sans-serif'
                ],
            }
        }
    }
}; 