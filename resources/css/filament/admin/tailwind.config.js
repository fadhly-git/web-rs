import preset from '../../../../vendor/filament/filament/tailwind.config.preset';

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#3B82F6', // Warna biru default
                    dark: '#2563EB',
                },
            },
            fontFamily: {
                sans: ['Inter', 'sans-serif'], // Ganti font
            },
        },
    },
};
