module.exports = {
    theme: {
        screens: {
            sm: '480px',
            md: '768px',
            lg: '1024px',
            xl: '1340px',
        },
        colors: {
          transparent: 'transparent',

          black: '#000',
          white: '#fff',

          gray: {
            100: '#FFFFFA',

            300: '#B5B5AB',

            500: '#5B605F',

            700: '#464646',

            900: '#323232',
          },
          teal: {
            100: '#90C8D4',
            300: '#7FB0BA',
            500: '#6F9AA3',
            700: '#587B82',
            900: '#425C61',
          },
          brown: {
            100: '#FCE586',
            300: '#E3CE78',
            500: '#BDAB64',
            700: '#7D7142',
            900: '#3D3720',
          },

          red: {
            100: '#fff5f5',
            200: '#fed7d7',
            300: '#feb2b2',
            400: '#fc8181',
            500: '#f56565',
            600: '#e53e3e',
            700: '#c53030',
            800: '#9b2c2c',
            900: '#742a2a',
          },
          orange: {
            500: '#FF6600',
          },
          yellow: {
            100: '#fffff0',
            200: '#fefcbf',
            300: '#faf089',
            400: '#f6e05e',
            500: '#ecc94b',
            600: '#d69e2e',
            700: '#b7791f',
            800: '#975a16',
            900: '#744210',
          },
          green: {
            100: '#f0fff4',
            200: '#c6f6d5',
            300: '#9ae6b4',
            400: '#68d391',
            500: '#48bb78',
            600: '#38a169',
            700: '#2f855a',
            800: '#276749',
            900: '#22543d',
          },
          blue: {
            100: '#ebf8ff',
            200: '#bee3f8',
            300: '#90cdf4',
            400: '#63b3ed',
            500: '#4299e1',
            600: '#3182ce',
            700: '#2b6cb0',
            800: '#2c5282',
            900: '#2a4365',
          },
        },

        fontFamily: {
            sans: [
                '"Open Sans"',
                'Roboto',
                'Ubuntu',
                'sans-serif'
            ],
            titles: [
                'Jura',
                '"Roboto Condensed"',
                '"Lucida Grande"',
                '"Lucida Sans Unicode"',
                '"Lucida Sans"',
                '"DejaVu Sans"',
                '"Bitstream Vera Sans"',
                '"Liberation Sans"',
                'Verdana',
                '"Verdana Ref"',
                'sans-serif'
            ]
        },

        container: {
            center: true,
        },
        lineHeight: {
          none: '1',
          tight: '1.25',
          snug: '1.375',
          normal: '1.5',
          relaxed: '1.625',
          loose: '2',
          '3': '.75rem',
          '4': '1rem',
          '5': '1.25rem',
          '6': '1.5rem',
          '7': '1.75rem',
          '8': '2rem',
          '9': '2.25rem',
          '10': '2.5rem',
          '12': '3rem',
          '16': '4rem',
        },
        spacing: {
            px: '1px',
            '0': '0',
            '1': '0.25rem',
            '2': '0.5rem',
            '3': '0.75rem',
            '4': '1rem',
            '5': '1.25rem',
            '6': '1.5rem',
            '8': '2rem',
            '10': '2.5rem',
            '12': '3rem',
            '16': '4rem',
            '20': '5rem',
            '24': '6rem',
            '32': '8rem',
            '40': '10rem',
            '48': '12rem',
            '56': '14rem',
            '64': '16rem',
            '72': '18rem',
            '80': '20rem',
            '96': '24rem',
        },


    },
    variants: {
        boxShadow: ['responsive', 'hover', 'focus', 'active'],
    },
    plugins: [],
}
