#!/bin/bash

echo "OMNEST Website - Server Launcher"
echo "=============================="
echo

# Try to run Jekyll first
echo "Attempting to start Jekyll server..."
bundle exec jekyll serve --livereload &
JEKYLL_PID=$!

# Wait a bit to see if Jekyll starts successfully
sleep 5

# Check if Jekyll is still running
if ps -p $JEKYLL_PID > /dev/null; then
    echo "Jekyll server started successfully!"
    echo "The website is available at http://localhost:4000"
    echo "Press Ctrl+C to stop the server"
    
    # Wait for Jekyll to finish
    wait $JEKYLL_PID
else
    echo "Jekyll server failed to start."
    echo "Falling back to Python server..."
    
    # Check if Python is available
    if command -v python3 &> /dev/null; then
        echo "Starting Python server..."
        python3 python_server.py
    elif command -v python &> /dev/null; then
        echo "Starting Python server..."
        python python_server.py
    else
        echo "Python is not available. Please install Python or fix Jekyll."
        exit 1
    fi
fi