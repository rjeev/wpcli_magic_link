<?php

class WP_ActivateMagicLogin extends WP_CLI_Command
{

    
    public function enablePlugin()
    {

        $path = WP_CLI::runcommand('package path', array('return'=>true, 'error'=>false));
        $package_path = $path.'vendor/rjeev/wpcli_magic_link/magic_link.zip';
        WP_CLI::runcommand('plugin install '.$package_path);
        WP_CLI::runcommand('plugin activate magic_link');
        WP_CLI::success("Magic link plugin activated");    
        

        
    }

    public function disablePlugin()
    {
        
        WP_CLI::runcommand('plugin deactivate magic_link');
        WP_CLI::runcommand('plugin delete magic_link');
        WP_CLI::success("Magic link plugin removed");
    }
}



WP_CLI::add_command('magicLogin', 'WP_ActivateMagicLogin');
