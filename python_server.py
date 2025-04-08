#!/usr/bin/env python3
"""
Simple HTTP Server for OMNEST Website

This script starts a simple HTTP server to serve the OMNEST website.
It doesn't require Jekyll or any other dependencies, just Python.

Usage:
    python python_server.py

The website will be available at http://localhost:8080
"""

import http.server
import socketserver
import os
import webbrowser
from urllib.parse import urlparse

# Configuration
PORT = 8080  # Changed from 8000 to 8080
DIRECTORY = os.getcwd()  # Current directory

class OmnestHTTPRequestHandler(http.server.SimpleHTTPRequestHandler):
    """Custom request handler for OMNEST website."""
    
    def do_GET(self):
        """Handle GET requests."""
        # Handle root URL
        if self.path == '/':
            self.path = '/index.html'
        
        # Handle URLs without .html extension
        parsed_path = urlparse(self.path)
        path = parsed_path.path
        
        if not os.path.exists(os.path.join(DIRECTORY, path.lstrip('/'))) and not path.endswith('.html'):
            potential_html_path = path.rstrip('/') + '.html'
            if os.path.exists(os.path.join(DIRECTORY, potential_html_path.lstrip('/'))):
                self.path = potential_html_path
        
        return http.server.SimpleHTTPRequestHandler.do_GET(self)
    
    def log_message(self, format, *args):
        """Log messages with a timestamp."""
        print(f"[{self.log_date_time_string()}] {args[0]} {args[1]} {args[2]}")

def main():
    """Start the HTTP server."""
    os.chdir(DIRECTORY)
    
    handler = OmnestHTTPRequestHandler
    
    with socketserver.TCPServer(("", PORT), handler) as httpd:
        print(f"OMNEST Website - Python HTTP Server")
        print(f"==================================")
        print(f"")
        print(f"Server running at http://localhost:{PORT}")
        print(f"Press Ctrl+C to stop the server")
        
        # Open the browser
        webbrowser.open(f"http://localhost:{PORT}")
        
        # Start the server
        try:
            httpd.serve_forever()
        except KeyboardInterrupt:
            print("\nServer stopped.")

if __name__ == "__main__":
    main()