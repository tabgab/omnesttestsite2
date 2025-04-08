#!/bin/bash

echo "OMNEST Website - Setup and Run Server"
echo "===================================="
echo

# Check if Ruby is installed
if ! command -v ruby &> /dev/null; then
    echo "Ruby is not installed. Please install Ruby first."
    echo "Visit https://www.ruby-lang.org/en/documentation/installation/ for instructions."
    exit 1
fi

echo "Ruby is installed: $(ruby -v)"

# Check if Bundler is installed
if ! command -v bundle &> /dev/null; then
    echo "Bundler is not installed. Installing Bundler..."
    gem install bundler
    if [ $? -ne 0 ]; then
        echo "Failed to install Bundler. Please install it manually with: gem install bundler"
        exit 1
    fi
fi

echo "Bundler is installed: $(bundle -v)"

# Install Jekyll and dependencies
echo "Installing Jekyll and dependencies..."
bundle install
if [ $? -ne 0 ]; then
    echo "Failed to install dependencies. Please try running 'bundle install' manually."
    exit 1
fi

# Check if Jekyll is installed
if ! command -v jekyll &> /dev/null; then
    echo "Jekyll is not installed correctly. Please install it manually with: gem install jekyll"
    exit 1
fi

echo "Jekyll is installed: $(jekyll -v)"

# Start the server
echo
echo "Starting the Jekyll server..."
echo "The website will be available at http://localhost:4000"
echo "Press Ctrl+C to stop the server"
echo

# Run the Jekyll server
bundle exec jekyll serve --livereload

# If Jekyll fails, try using the system Jekyll
if [ $? -ne 0 ]; then
    echo "Failed to start the server with bundled Jekyll. Trying system Jekyll..."
    jekyll serve --livereload
fi