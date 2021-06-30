/**
 * SASS
 */
import '../sass/frontend.scss';

/**
 * JavaScript
 */
import '../js/particles.js';
/**
 * Add here your JavasScript code
 */

/*Toggle dropdown list*/
/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

document.addEventListener('DOMContentLoaded', function (event) {
	//do work

	const navMenuDiv = document.getElementById('nav-content');
	const navMenu = document.getElementById('nav-toggle');

	document.onclick = check;

	function check(e) {
		const target = (e && e.target) || (event && event.srcElement);

		//Nav Menu
		if (!checkParent(target, navMenuDiv)) {
			// click NOT on the menu
			if (checkParent(target, navMenu)) {
				// click on the link
				if (navMenuDiv.classList.contains('hidden')) {
					navMenuDiv.classList.remove('hidden');
				} else {
					navMenuDiv.classList.add('hidden');
				}
			} else {
				// click both outside link and outside menu, hide menu
				navMenuDiv.classList.add('hidden');
			}
		}
	}

	function checkParent(t, elm) {
		while (t.parentNode) {
			if (t === elm) {
				return true;
			}
			t = t.parentNode;
		}
		return false;
	}
});

document.addEventListener('DOMContentLoaded', function(event) {



particlesJS("particles-js", {
	"particles": {
		"number": {
			"value": 355,
			"density": {
				"enable": true,
				"value_area": 789.1476416322727
			}
		},
		"color": {
			"value": "#ffffff"
		},
		"shape": {
			"type": "circle",
			"stroke": {
				"width": 0,
				"color": "#000000"
			},
			"polygon": {
				"nb_sides": 5
			},
			"image": {
				"src": "img/github.svg",
				"width": 100,
				"height": 100
			}
		},
		"opacity": {
			"value": 0.48927153781200905,
			"random": false,
			"anim": {
				"enable": true,
				"speed": 0.2,
				"opacity_min": 0,
				"sync": false
			}
		},
		"size": {
			"value": 2,
			"random": true,
			"anim": {
				"enable": true,
				"speed": 2,
				"size_min": 0,
				"sync": false
			}
		},
		"line_linked": {
			"enable": false,
			"distance": 150,
			"color": "#ffffff",
			"opacity": 0.4,
			"width": 1
		},
		"move": {
			"enable": true,
			"speed": 0.2,
			"direction": "none",
			"random": true,
			"straight": false,
			"out_mode": "out",
			"bounce": false,
			"attract": {
				"enable": false,
				"rotateX": 600,
				"rotateY": 1200
			}
		}
	},
	"interactivity": {
		"detect_on": "canvas",
		"events": {
			"onhover": {
				"enable": true,
				"mode": "bubble"
			},
			"onclick": {
				"enable": true,
				"mode": "push"
			},
			"resize": true
		},
		"modes": {
			"grab": {
				"distance": 400,
				"line_linked": {
					"opacity": 1
				}
			},
			"bubble": {
				"distance": 83.91608391608392,
				"size": 1,
				"duration": 3,
				"opacity": 1,
				"speed": 3
			},
			"repulse": {
				"distance": 200,
				"duration": 0.4
			},
			"push": {
				"particles_nb": 4
			},
			"remove": {
				"particles_nb": 2
			}
		}
	},
	"retina_detect": true
});
});