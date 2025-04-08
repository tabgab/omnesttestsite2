#!/bin/bash

echo "OMNEST Website - Setup with rbenv"
echo "==============================="
echo

# Check if rbenv is installed
if ! command -v rbenv &> /dev/null; then
    echo "rbenv is not installed. Would you like to install it? (y/n)"
    read -r answer
    if [[ "$answer" =~ ^[Yy]$ ]]; then
        echo "Installing rbenv..."
        if [[ "$OSTYPE" == "darwin"* ]]; then
            # macOS
            brew install rbenv ruby-build
        else
            # Linux
            git clone https://github.com/rbenv/rbenv.git ~/.rbenv
            echo 'export PATH="$HOME/.rbenv/bin:$PATH"' >> ~/.bashrc
            echo 'eval "$(rbenv init -)"' >> ~/.bashrc
            source ~/.bashrc
            git clone https://github.com/rbenv/ruby-build.git ~/.rbenv/plugins/ruby-build
        fi
    else
        echo "Please install rbenv manually and run this script again."
        exit 1
    fi
fi

# Install Ruby 3.0.0 (or another version that works well with Jekyll)
echo "Installing Ruby 3.0.0 with rbenv..."
rbenv install 3.0.0
rbenv local 3.0.0

# Install Bundler
echo "Installing Bundler..."
gem install bundler

# Install Jekyll and dependencies
echo "Installing Jekyll and dependencies..."
bundle install

# Start the Jekyll server
echo
echo "Starting Jekyll server..."
echo "The website will be available at http://localhost:4000"
echo "Press Ctrl+C to stop the server"
echo

# Run Jekyll
bundle exec jekyll serve --livereload