# OMNEST Website Redesign

This repository contains the redesigned OMNEST website with a modern, responsive design that works well on all devices.

## Features

- **Responsive Design**: The website now adapts to all screen sizes, from mobile phones to desktop computers.
- **Modern Visual Design**: Updated with a contemporary high-tech look while maintaining the original brand identity.
- **Improved User Experience**: Enhanced navigation, readability, and content organization.
- **GitHub Pages Compatible**: The site can still be hosted on GitHub Pages without any additional dependencies.

## Technology Stack

- **Jekyll**: Static site generator
- **HTML5/CSS3**: Modern web standards
- **Vanilla JavaScript**: No heavy frameworks
- **CSS Custom Properties**: For theming and consistency
- **Flexbox/Grid**: For responsive layouts

## CSS Framework

The redesign includes a custom CSS framework organized into the following files:

- `common/modern/variables.css`: CSS variables for theming
- `common/modern/base.css`: Reset and base styles
- `common/modern/grid.css`: Responsive grid system
- `common/modern/components.css`: UI components
- `common/modern/utilities.css`: Utility classes
- `common/modern/responsive.css`: Media queries
- `common/modern/main.css`: Main CSS file that imports all others

## Running Locally

### Option 1: Smart Server Launcher (Recommended)

This script will try to use Jekyll first and fall back to the Python server if Jekyll fails:

```bash
./run_server.sh
```

### Option 2: Fix Jekyll Issues

If you're experiencing Jekyll issues (especially on Apple Silicon Macs), try:

```bash
./fix_jekyll.sh
```

This script will:
- Clean existing gems
- Install the correct versions of gems for your architecture
- Start the Jekyll server

### Option 3: Setup with rbenv

For a clean Ruby environment:

```bash
./setup_with_rbenv.sh
```

This script will:
- Install rbenv if not already installed
- Install Ruby 3.0.0 using rbenv
- Install Jekyll and dependencies
- Start the Jekyll server

### Option 4: Python Server

If you prefer to use Python instead of Jekyll:

```bash
./python_server.py
```

### Option 5: Quick Preview

For a quick preview of just the homepage:

```bash
# Open the preview.html file in your browser
open preview.html
```

## Troubleshooting Jekyll

If you encounter issues with Jekyll:

1. **Architecture Mismatch**: If you see errors about incompatible architecture (e.g., x86_64 vs arm64), try:
   ```bash
   ./fix_jekyll.sh
   ```

2. **Ruby Version Issues**: If you have issues with Ruby versions, try:
   ```bash
   ./setup_with_rbenv.sh
   ```

3. **Missing Dependencies**: If you see errors about missing gems, try:
   ```bash
   bundle install
   ```

4. **Permission Issues**: If you see permission errors, try:
   ```bash
   sudo bundle install
   ```

5. **Last Resort**: If all else fails, use the Python server:
   ```bash
   ./python_server.py
   ```

## Content Updates

- Added a new page for Time-Sensitive Networking (TSN)
- Updated the homepage to highlight key features
- Replaced "Trusted by Industry Leaders" with "From Ideas to Solutions With Confidence"
- Made all pages responsive for mobile devices

## Browser Compatibility

The redesigned website is compatible with:

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Android Chrome)

## Accessibility

The redesign includes several accessibility improvements:

- Proper heading hierarchy
- Sufficient color contrast
- Keyboard navigation
- Screen reader support
- Skip to content link

## Deployment

The website can be deployed to GitHub Pages by pushing to the main branch. GitHub Pages will automatically build and deploy the site.