<?php
/**
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * -------------------------------------------------------------------------
 */
class JConfig {
	/* Site Settings */
	public $offline = '0';
	public $offline_message = 'This site is down for maintenance.<br /> Please check back again soon.';
	public $display_offline_message = '1';
	public $offline_image = '';
	public $sitename = 'joomla';            // Name of Joomla site
	public $editor = 'tinymce';
	public $captcha = '0';
	public $list_limit = '20';
	public $access = '1';

	/* Database Settings */
	public $dbtype = 'mysqli';               // Normally mysqli
	public $host = 'localhost';              // This is normally set to localhost
	public $user = 'joomla';                       // DB username
    public $password = 'turnkey';                   // DB password
	public $db = 'joomla';                         // DB database name
	public $dbprefix = 'jos_';               // Do not change unless you need to!

	/* Server Settings */
	public $secret = 'qaXvRPdneVJnHyRv';     // Change this to something more secure
	public $gzip = '0';
	public $error_reporting = 'default';
	public $helpurl = 'https://help.joomla.org/proxy/index.php?option=com_help&amp;keyref=Help{major}{minor}:{keyref}';
	public $ftp_host = '';
	public $ftp_port = '';
	public $ftp_user = '';
	public $ftp_pass = '';
	public $ftp_root = '';
	public $ftp_enable = '0';
	public $tmp_path = '/var/www/joomla/tmp';                // Please check with your host that this is the correct path to the temp directory. This path needs to be writable by Joomla!
	public $log_path = '/var/www/joomla/logs';           // Please check with your host that this is the correct path to the logs directory. This path needs to be writable by Joomla!
	public $live_site = '';                   // Optional, full url to Joomla install.
	public $force_ssl = 0;                    // Force areas of the site to be SSL ONLY.  0 = None, 1 = Administrator, 2 = Both Site and Administrator

	/* Locale Settings */
	public $offset = 'UTC';

	/* Session settings */
	public $lifetime = '600';                  // Session time
	public $session_handler = 'database';

	/* Mail Settings */
	public $mailer = 'mail';
	public $mailfrom = 'admin@example.com';
	public $fromname = 'TurnKey Joomla';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = '0';
	public $smtpuser = '';
	public $smtppass = '';
	public $smtphost = 'localhost';

	/* Cache Settings */
	public $caching = '0';
	public $cachetime = '15';
	public $cache_handler = 'file';

	/* Debug Settings */
	public $debug = '0';
	public $debug_lang = '0';

	/* Meta Settings */
	public $MetaDesc = '';
	public $MetaKeys = 'turnkey, TurnKey, joomla, Joomla';
	public $MetaTitle = '1';
	public $MetaAuthor = '1';
	public $MetaVersion = '0';
	public $robots = '';

	/* SEO Settings */
	public $sef = '1';
	public $sef_rewrite = '1';
	public $sef_suffix = '0';
	public $unicodeslugs = '1';

	/* Feed Settings */
	public $feed_limit = 10;
	public $feed_email = 'author';
	public $smtpsecure = 'none';
	public $smtpport = '25';
}
