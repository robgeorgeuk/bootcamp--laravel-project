server "http://ec2-3-10-212-58.eu-west-2.compute.amazonaws.com", user: "ubuntu", roles: %w{app}

set :branch, "master"
set :deploy_to, "/var/www/bootcamp--laravel-project"
