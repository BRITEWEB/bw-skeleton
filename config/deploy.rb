##################
# Capistrano settings
##################
# config valid only for Capistrano 3.1
lock '3.2.1'


##################
# app settings
##################
# app name
set :application, 'bw-skeleton'

# git repository
set :repo_url, 'https://github.combriteweb/bw-skeleton.git'

# Files that need to be linked from the 'shared' folder
set :linked_files, %w{.htaccess wp-config.php}

# folders that need to be linked from the 'shared' folder
set :linked_dirs, %w{content/uploads}

# folders that need to be copied from the previous release
# to speed up deployment
set :copy_files, %w{node_modules bower_components vendor bundle wp content/plugins content/themes}


##################
# cleanup old releases after deploy
##################
namespace :deploy do
	after :finishing, 'deploy:cleanup'
end


##################
# Composer setup
##################
# composer configurations
set :composer_install_flags, '--optimize-autoloader'

# composer tasks
namespace :deploy do

	# delay setting composer path until the shared path is defined
	before :starting, :set_composer_path do
		on roles(:web) do
			SSHKit.config.command_map[:composer] = "#{shared_path.join("composer.phar")}"
		end
	end

	# Installing composer as part of a deployment
	before :starting, 'composer:install_executable'

end


# ##################
# # RBENV
# ##################
# set :rbenv_type, :user # or :system, depends on your rbenv setup
# set :rbenv_ruby, '2.1.2'
# set :rbenv_prefix, "RBENV_ROOT=#{fetch(:rbenv_path)} RBENV_VERSION=#{fetch(:rbenv_ruby)} #{fetch(:rbenv_path)}/bin/rbenv exec"
# set :rbenv_map_bins, %w{rake gem bundle ruby rails}
# set :rbenv_roles, :all # default value


# ##################
# # Bundler
# ##################
# set :bundle_roles, :all
# set :bundle_servers, -> { release_roles(fetch(:bundle_roles)) }
# set :bundle_binstubs, -> { release_path.join('bin') }
# set :bundle_gemfile, -> { release_path.join('Gemfile') }
# set :bundle_path, -> { release_path.join('bundle') }
# set :bundle_without, %w{development test}.join(' ')
# set :bundle_flags, '--deployment --quiet'
# set :bundle_env_variables, {}
