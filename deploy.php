<?php
date_default_timezone_set('Europe/Stockholm');
include_once 'vendor/ekandreas/docker-bedrock/recipe.php';
include_once 'vendor/ekandreas/dipwpe/pull.php';

server('nordiciron.dev', 'default')
    ->env('container', 'bedrock')
    ->stage('development');

server( 'production', 'andreasek.se', 22 )
    ->env('deploy_path','/mnt/persist/www/nordiciron.com')
    ->user( 'root' )
    ->env('branch', 'master')
    ->env('remote.name','nordiciron')
    ->env('remote.database','nordiciron')
    ->env('remote.ssh','root@aekab.se')
    ->env('remote.domain','www.nordiciron.com')
    ->env('local.domain','nordiciron.dev')
    ->env('remote.path','/mnt/persist/www/nordiciron.com')
    ->env('local.is_elastic',false)
    ->stage('production')
    ->identityFile();

set('repository', 'git@github.com:ekandreas/nordiciron.git');

// Symlink the .env file for Bedrock
set('env', 'prod');
set('keep_releases', 10);
set('shared_dirs', ['web/app/uploads']);
set('shared_files', ['.env', 'web/.htaccess', 'web/robots.txt']);
set('env_vars', '/usr/bin/env');

task('deploy:restart', function () {
    writeln('Purge cache...');
    //run("curl -s http://www.skolporten.se/wp/wp-admin/admin-ajax.php?action=purge");
})->desc('Restarting apache2 and varnish');

task( 'deploy', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:vendors',
    'deploy:shared',
    'deploy:symlink',
    'cleanup',
    'deploy:restart',
    'success'
] )->desc( 'Deploy your Bedrock project, eg dep deploy production' );
