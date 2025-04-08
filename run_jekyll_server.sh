#!/bin/bash

echo "OMNEST Website - Jekyll Server"
echo "============================="
echo

# Use the system Jekyll directly
echo "Starting Jekyll server using system Jekyll..."
echo "The website will be available at http://localhost:4000"
echo "Press Ctrl+C to stop the server"
echo

# Run Jekyll directly (not through Bundler)
jekyll serve --livereload