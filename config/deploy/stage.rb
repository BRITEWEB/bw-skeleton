# Extended Server Syntax
server 'SERVER_IP', user: 'USERNAME', roles: %w{web}

# Deploy path
set :deploy_to, "/var/www/PROJECT_NAME"

# Git repository branch
set :branch, "master"

# Number of releases to keep on stage
set :keep_releases, 4

