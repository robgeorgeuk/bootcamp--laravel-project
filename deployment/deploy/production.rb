server "ec2-3-8-199-58.eu-west-2.compute.amazonaws.com", user: "ubuntu", roles: %w{app}

set :branch, "develop"
set :deploy_to, "/var/www/html"
