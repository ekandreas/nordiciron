<?php

task( 'pull:dump', function () {

    writeln( 'Creating a new database dump (approx. 60s)' );
    run( 'mysqldump nordiciron > /tmp/nordiciron.sql' );

} );

task( 'pull:fetch_dump', function () {

    writeln( 'Getting database dump (approx. 60s)' );
    runLocally( 'scp root@andreasek.se:/tmp/nordiciron.sql nordiciron.sql', 999 );

} );

task( 'pull:resolve_dump', function () {

    writeln( 'Restore database inside vagrant (approx. 60s)' );
    runLocally( 'vagrant ssh -c "mysql -u root -proot nordiciron < /home/vagrant/www/nordiciron/nordiciron.sql"', 999 );

} );

task( 'pull:set_vagrant_wp', function () {

    writeln( 'Restore wp after pull (approx. 60s)' );
    runLocally( 'vagrant ssh -c "cd /home/vagrant/www/nordiciron/web && wp search-replace "nordiciron.com" "nordiciron.dev" && wp rewrite flush"',
        999 );
    runLocally( 'vagrant ssh -c "cd /home/vagrant/www/nordiciron/web && wp search-replace "www.nordiciron.com" "nordiciron.dev" && wp rewrite flush"',
        999 );

} );

task( 'pull:uploads', function () {

    writeln( 'Getting uploads, long duration first time! (approx. 60-999s)' );
    runLocally( 'rsync -re ssh root@andreasek.se:/mnt/persist/www/nordiciron.com/shared/web/app/uploads web/app',
        999 );

} );

task( 'pull:cleanup', function () {

    writeln( 'Cleaning up locally...' );
    runLocally( 'rm nordiciron.sql' );

} );

task( 'pull', [
    'pull:dump',
    'pull:fetch_dump',
    'pull:resolve_dump',
    'pull:set_vagrant_wp',
    'pull:uploads',
    'pull:cleanup',
] );

