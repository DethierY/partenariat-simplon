<?php

/*

Plugin Name: Simplon

Plugin URI: http://zero-plugin.com

Description: Un plugin permettant d'identifier Simplon comme partenaire de E�leen McIntosh

Version: 0.1

Author: Asgeir

Author URI: http://Asgeir.com

License: GPL2

*/

function MentionSimplon() {
	return '<p>La publication de cet article est possible gr�ce � mon super partenaire <a href="https://simplon.co/">simplon.co</a> - une entreprise de
l��conomie sociale et solidaire et un r�seau de � fabriques � (�coles) qui propose
des formations GRATUITES pour devenir d�veloppeur web.</p>';
}
add_shortcode('Simplon', 'MentionSimplon');
