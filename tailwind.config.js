/** @type {import('tailwindcss').Config} */
module.exports = {

    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/js/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
       fontFamily:{
        display: "'switzer', sans-serif",
       },
        extend: {
            backgroundImage:{
                "chevron-down": "url('/public/frontend/assets/images/chevron-down.png')"
            },
            colors: {
                'gray-white': '#FFF',
                gray:{
                   '50':'#F3F4F5',
                   '100':'#E3E4E6',
                   '200':'#C6C8CB',
                   '300':'#AAADB1',
                   '400':'#909398',
                   '500':'#74787D',
                   '600':'#5B5E63',
                   '700':'#434549',
                   '800':'#2F3133',
                   '850':'#202124',
                   '900':'#16171A',
                },
                primary: {
                    '50': '#E6F2FF',
                    '100': '#CCE5FF',
                    '200': '#99CAFF',
                    '300': '#66B0FF',
                    '400': '#3395FF',
                    '500': '#007BFF',
                    '600': '#0062CC',
                    '700': '#0062CC',
                    '800':  '#003166',
                    '850': '#00254C',
                    '900':'#001933'
                },
                secondary:{
                    '50':'#FFF0E6',
                    '100':'#FFE2CC',
                    '200':'#FFC499',
                    '300':'#FFA766',
                    '400':'#FF8933',
                    '500': '#FF6C00',
                    '600':'#CC5600',
                    '700':'#994100',
                    '800':'#662B00',
                    '850':'#4C2000',
                    '900':'#331600'
                },
                green:{
                    '50':'#E6F5EB',
                    '100':'#CCEBD6',
                    '200':'#99D6AD',
                    '300':'#66C285',
                    '400':'#33AD5C',
                    '500': '#009933',
                    '600':'#007A29',
                    '700':'#005C1F',
                    '800':'#003D14',
                    '850':'#002E0F',
                    '900':'#001F0A'
                },
                orange:{
                    '50':'#FCF2E6',
                    '100':'#FAE4CC',
                    '200':'#F5CA99',
                    '300':'#EFAF66',
                    '400':'#EA9533',
                    '500': '#E57A00',
                    '600':'#B76200',
                    '700':'#894900',
                    '800':'#5C3100',
                    '850':'#452500',
                    '900':'#2E1800'
                },
                red:{
                    '50':'#FAEBEB',
                    '100':'#F5D6D6',
                    '200':'#EAAEAE',
                    '300':'#E08585',
                    '400':'#D55D5D',
                    '500': '#C73333',
                    '600':'#A22A2A',
                    '700':'#7A1F1F',
                    '800':'#511515',
                    '850':'#3D1010',
                    '900':'#290A0A'
                }
            },

            boxShadow:{
                'gray-base-1': '0px 1px 4px 0px rgba(112, 122, 125, 0.12)',
                'gray-base-2': '0px 2px 6px 0px rgba(112, 122, 125, 0.12)',
                'gray-base-3': '0px 4px 8px 0px rgba(112, 122, 125, 0.12)',
                'gray-base-4': '0px 8px 24px 0px rgba(112, 122, 125, 0.18)',
                'gray-base-5': '0px 12px 24px 0px rgba(112, 122, 125, 0.18)',
                'gray-base-6': '0px 16px 48px 0px rgba(112, 122, 125, 0.20)',
                'primary-base-1' : '0px 1px 4px 0px rgba(0, 123, 255, 0.12)',
                'primary-base-2': '0px 2px 6px 0px rgba(0, 123, 255, 0.12)',
                'primary-base-3': '0px 4px 8px 0px rgba(0, 123, 255, 0.12)',
                'primary-base-4': '0px 8px 24px 0px rgba(0, 123, 255, 0.12)',
                'primary-base-5': '0px 12px 24px 0px rgba(0, 123, 255, 0.12)',
                'primary-base-6': '0px 16px 48px 0px rgba(0, 123, 255, 0.16)',
                'secondary-base-1': '0px 1px 4px 0px rgba(255, 108, 0, 0.12)',
                'secondary-base-2': '0px 2px 6px 0px rgba(255, 108, 0, 0.12)',
                'secondary-base-3': '0px 4px 8px 0px rgba(255, 108, 0, 0.12)',
                'secondary-base-4': '0px 8px 24px 0px rgba(255, 108, 0, 0.12)',
                'secondary-base-5': '0px 12px 24px 0px rgba(255, 108, 0, 0.12)',
                'secondary-base-6': '0px 16px 48px 0px rgba(255, 108, 0, 0.16)',
                'green-base-1': '0px 1px 4px 0px rgba(0, 153, 51, 0.12)',
                'green-base-2': '0px 2px 6px 0px rgba(0, 153, 51, 0.12)',
                'green-base-3': '0px 4px 8px 0px rgba(0, 153, 51, 0.12)',
                'green-base-4': '0px 8px 24px 0px rgba(0, 153, 51, 0.12)',
                'green-base-5': '0px 12px 24px 0px rgba(0, 153, 51, 0.12)',
                'green-base-6': '0px 16px 48px 0px rgba(0, 153, 51, 0.16)',
                'orange-base-1': '0px 1px 4px 0px rgba(229, 122, 0, 0.12)',
                'orange-base-2': '0px 2px 6px 0px rgba(229, 122, 0, 0.12)',
                'orange-base-3': '0px 4px 8px 0px rgba(229, 122, 0, 0.12)',
                'orange-base-4': '0px 8px 24px 0px rgba(229, 122, 0, 0.12)',
                'orange-base-5': '0px 12px 24px 0px rgba(229, 122, 0, 0.12)',
                'orange-base-6': '0px 16px 48px 0px rgba(229, 122, 0, 0.16)',
                'red-base-1': '0px 1px 4px 0px rgba(199, 51, 51, 0.12)',
                'red-base-2': '0px 2px 6px 0px rgba(199, 51, 51, 0.12)',
                'red-base-3': '0px 4px 8px 0px rgba(199, 51, 51, 0.12)',
                'red-base-4': '0px 8px 24px 0px rgba(199, 51, 51, 0.12)',
                'red-base-5': '0px 12px 24px 0px rgba(199, 51, 51, 0.12)',
                'red-base-6': '0px 16px 48px 0px rgba(199, 51, 51, 0.16)'
            }
        },
        container:{
            center: true,
            padding: {
                DEFAULT: '0.5rem',
                sm: '0.7rem',
                md: '0.9rem',
                lg: '1rem'
            },
            screens: {
                '2xl': '1320px'
            }
        }
    },
    plugins: [
        require('flowbite/plugin')({
            charts: true,
        }),

    ],
};
