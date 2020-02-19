set :application, "my-amazing-laravel-app"
set :repo_url, "git@github.com:develop-me/bootcamp--laravel-project"

# Default value for :linked_files is []
set :linked_files, fetch(:linked_files, []).push(".env")

# Default value for linked_dirs is []
set :linked_dirs, fetch(:linked_dirs, []).push("storage")

namespace :deploy do
    # optimize
    task :optimize do
        on roles(:app) do
            info "Clearing cached views"
            execute "php #{current_path}/artisan view:clear"

            # info "Caching routes"
            # only works if *all* routes point to a controller
            execute "php #{current_path}/artisan route:cache"

            info "Caching config"
            execute "php #{current_path}/artisan config:cache"
        end
    end

    # migrate the database
    task :migrate_db do
        on roles(:app) do
            info "Migrating DB"
            execute "php #{current_path}/artisan migrate"
        end
    end

    # reload PHP-FPM
    task :php_reload do
        on roles(:app) do
            info "Restarting PHP-FPM"
            execute "sudo service php7.2-fpm reload"
        end
    end

    after :published, "optimize"
    after :published, "migrate_db"
    after :published, "php_reload"
end
