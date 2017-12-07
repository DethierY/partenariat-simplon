<?php
/*
Plugin Name: Simplon

Plugin URI: http://zero-plugin.com

Description: Un plugin permettant d'identifier Simplon comme partenaire de Eïleen McIntosh

Version: 0.1

Author: Asgeir

Author URI: http://Asgeir.com

License: GPL2

*/

function MentionSimplon() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire <a href="https://simplon.co/">simplon.co</a> - une entreprise de
l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
des formations GRATUITES pour devenir développeur web.</p>';
}
add_shortcode('Simplon', 'MentionSimplon');
