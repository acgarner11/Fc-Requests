module.exports = {
	theme: {
		colors: {
			transparent: 'transparent',
			current: 'currentColor',
			/* How to Add custom Colors
			 * Copy - Paste a color section.
			 * Change the name to be whatever your color is
			 * Default is the normal color
			 * Light / Dark are variants within the same palette
			 * Classes are named text-CLASSNAME
			 * */
			blue: {
				light: '#6495ED', //text-blue-light
				DEFAULT: '#0047AB', //text-blue
				dark: '#00008B', //text-blue-dark
				100: '#ff0000',
			},
			pink: {
				light: '#ff7ce5',
				DEFAULT: '#ff49db',
				dark: '#ff16d1',
			},
			gray: {
				darkest: '#1f2d3d',
				dark: '#3c4858',
				DEFAULT: '#c0ccda',
				light: '#e0e6ed',
				lightest: '#f9fafc',
			},
			white: {
				DEFAULT: '#ffffff',
			},
			black: {
				DEFAULT: '#000000',
			},
		},
	},
};
