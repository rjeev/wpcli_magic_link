<?php


// if (!defined('WPODB_PLUGIN_MAIN_PATH')) define('WPODB_PLUGIN_MAIN_PATH', __DIR__);
// if (!defined('WPODB_VERSION')) define('WPODB_VERSION', '1.0.0');

class WP_ActivateMagicLogin extends WP_CLI_Command
{

    public function __construct()
    {
        $this->enablePlugin();
    }

    public function enablePlugin()
    {

        WP_CLI::runcommand('plugin install ./magic_link.zip');
        // WP_CLI::success("Magic link plugin activated");
    }
}


class WP_DeActivateMagicLogin extends WP_CLI_Command
{

    public function __construct()
    {
        $this->disablePlugin();
    }

    public function disablePlugin()
    {
        $dir_path = plugin_dir_path(__FILE__);

        mkdir($dir_path . '/magic_link/');
        copy('magic_link.php', $dir_path . '/magiclink/magic_link.php');

        WP_CLI::runcommand('plugin deactivate Magic Link Login');
        mkdir($dir_path . '/magic_link/');
        WP_CLI::success("Magic link plugin removed");
    }
}

WP_CLI::add_command('activateMagicLogin', 'WP_ActivateMagicLogin');
WP_CLI::add_command('deactivateMagicLogin', 'WP_DeActivateMagicLogin');
