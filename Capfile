# Setup Bundler
require 'bundler'
require 'bundler/setup'
Bundler.require(:default, :development)

# Load DSL and Setup Up Stages
require 'capistrano/setup'

# Includes default deployment tasks
require 'capistrano/deploy'

# Includes tasks from other gems included in your Gemfile
require 'capistrano/composer'
# require 'capistrano/copy_files'
# require 'capistrano/rbenv'
# require 'capistrano/bundler'

# Loads custom tasks from `lib/capistrano/tasks' if you have any defined.
Dir.glob('lib/capistrano/tasks/*.cap').each { |r| import r }
