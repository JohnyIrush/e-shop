<?php
namespace Deployer;
desc('Symlink Laravel public To public_html');
task('app:symlink_public_html', function () {
run('ln -s /home/sofwijsf/eshop.softwarescares.com/e-shop/public /home/sofwijsf/eshop.softwarescares.com');
});