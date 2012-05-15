<?php
/**
* Initializes the CyberChimps Response Core Framework
*
* Author: Tyler Cunningham
* Copyright: © 2012
* {@link http://cyberchimps.com/ CyberChimps LLC}
*
* Released under the terms of the GNU General Public License.
* You should have received a copy of the GNU General Public License,
* along with this software. In the main directory, see: /licensing/
* If not, see: {@link http://www.gnu.org/licenses/}.
*
* @package Response
* @since 1.0
*/

//Define custom core functions
require_once ( get_template_directory() . '/core/core-functions.php' );

//Define the core hooks
require_once ( get_template_directory() . '/core/core-hooks.php' );

//Call the action files


require_once ( get_template_directory() . '/core/actions/404-actions.php' );
require_once ( get_template_directory() . '/core/actions/archive-actions.php' ); 
require_once ( get_template_directory() . '/core/actions/box-actions.php' );
require_once ( get_template_directory() . '/core/actions/comments-actions.php' );
require_once ( get_template_directory() . '/core/actions/post-actions.php' );
require_once ( get_template_directory() . '/core/actions/global-actions.php' );
require_once ( get_template_directory() . '/core/actions/header-actions.php' );
require_once ( get_template_directory() . '/core/actions/footer-actions.php' );
require_once ( get_template_directory() . '/core/actions/pagination-actions.php' );
require_once ( get_template_directory() . '/core/actions/twitterbar-actions.php' );
require_once ( get_template_directory() . '/core/actions/page-actions.php' );
require_once ( get_template_directory() . '/core/actions/recent-posts-actions.php' );
require_once ( get_template_directory() . '/core/actions/search-actions.php' );
require_once ( get_template_directory() . '/core/actions/portfolio-actions.php' );
require_once ( get_template_directory() . '/core/actions/sidebar-actions.php' );


//Call metabox class file
require_once ( get_template_directory() . '/core/metabox/meta-box-class.php' );

//CyberChimps Themes Page
require_once ( get_template_directory() . '/core/classy-options/options-themes.php' );

/**
* End
*/

?>
