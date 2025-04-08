#!/bin/bash

echo "OMNEST Website - Fix Jekyll and Run Server"
echo "========================================"
echo

# Check if Ruby is installed
if ! command -v ruby &> /dev/null; then
    echo "Ruby is not installed. Please install Ruby first."
    exit 1
fi

echo "Ruby is installed: $(ruby -v)"

# Check if Bundler is installed
if ! command -v bundle &> /dev/null; then
    echo "Bundler is not installed. Installing Bundler..."
    gem install bundler
    if [ $? -ne 0 ]; then
        echo "Failed to install Bundler. Please try: sudo gem install bundler"
        exit 1
    fi
fi

echo "Bundler is installed: $(bundle -v)"

# Clean any existing gems
echo "Cleaning existing gems..."
bundle clean --force

# Install gems with the correct architecture
echo "Installing gems with the correct architecture..."
bundle install

# Check if installation was successful
if [ $? -ne 0 ]; then
    echo "Failed to install gems. Trying with sudo..."
    sudo bundle install
    if [ $? -ne 0 ]; then
        echo "Failed to install gems with sudo as well."
        echo "Please try manually: sudo bundle install"
        exit 1
    fi
fi

# Start the Jekyll server
echo
echo "Starting Jekyll server..."
echo "The website will be available at http://localhost:4000"
echo "Press Ctrl+C to stop the server"
echo

# Run Jekyll with bundle exec
bundle exec jekyll serve --livereload