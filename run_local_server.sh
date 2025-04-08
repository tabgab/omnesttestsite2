#!/bin/bash

echo "Installing dependencies..."
bundle install

echo "Starting local Jekyll server..."
echo "The website will be available at http://localhost:4000"
echo "Press Ctrl+C to stop the server"

# Run the Jekyll server
bundle exec jekyll serve --livereload