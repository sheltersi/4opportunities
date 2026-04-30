import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'navy': 'hsl(224, 71%, 14%)',
                'royal': 'hsl(222, 89%, 55%)',
                'sky': 'hsl(204, 94%, 64%)',
                'cyan': 'hsl(190, 95%, 50%)',
                'ink': 'hsl(222, 47%, 11%)',
            },
            backgroundImage: {
                'gradient-primary': 'linear-gradient(135deg, hsl(222, 89%, 55%), hsl(190, 95%, 55%))',
                'gradient-hero': 'linear-gradient(135deg, hsl(222, 89%, 55%) 0%, hsl(204, 94%, 64%) 50%, hsl(190, 95%, 55%) 100%)',
                'gradient-soft': 'linear-gradient(180deg, hsl(210, 60%, 99%) 0%, hsl(204, 94%, 96%) 100%)',
                'gradient-text': 'linear-gradient(135deg, hsl(224, 71%, 14%), hsl(222, 89%, 55%) 60%, hsl(190, 95%, 50%))',
                'gradient-border': 'linear-gradient(135deg, hsl(222, 89%, 55%), hsl(190, 95%, 55%), hsl(204, 94%, 64%))',
            },
            boxShadow: {
                'sm': '0 1px 2px hsl(222, 50%, 20%, 0.06)',
                'md': '0 8px 24px -8px hsl(222, 89%, 55%, 0.18)',
                'glow': '0 20px 60px -20px hsl(222, 89%, 55%, 0.45)',
                'card': '0 10px 40px -12px hsl(222, 60%, 30%, 0.18)',
            },
            borderRadius: {
                '4xl': '2rem',
                '5xl': '2.5rem',
            },
            animation: {
                'float-slow': 'float 8s ease-in-out infinite',
                'float-med': 'float 6s ease-in-out infinite',
                'float-fast': 'float 5s ease-in-out infinite',
                'fade-in': 'fadeIn 0.3s ease-out',
                'pulse-ring': 'pulse-ring 2s ease-out infinite',
                'spin-slow': 'spin-slow 18s linear infinite',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0) translateX(0)' },
                    '50%': { transform: 'translateY(-22px) translateX(10px)' },
                },
                fadeIn: {
                    'from': { opacity: '0', transform: 'translateY(-8px)' },
                    'to': { opacity: '1', transform: 'translateY(0)' },
                },
                'pulse-ring': {
                    '0%': { boxShadow: '0 0 0 0 hsl(222, 89%, 55%, 0.45)' },
                    '100%': { boxShadow: '0 0 0 18px hsl(222, 89%, 55%, 0)' },
                },
                'spin-slow': {
                    'to': { transform: 'rotate(360deg)' },
                },
            },
        },
    },

    plugins: [forms, typography],
};
