# OMNEST Website Redesign Implementation Plan

## Overview

This plan outlines the steps to modernize the OMNEST website while:
- Maintaining the current content structure
- Keeping the original color scheme
- Preserving all existing screenshots and logos
- Ensuring GitHub Pages compatibility
- Adding responsive design for mobile devices

## Design Principles

1. **Preserve Brand Identity**
   - Keep the original blue (#005CAC, #377595) and orange/red (#E54426, #cc3300) color scheme
   - Maintain the existing logo and imagery
   - Preserve the overall brand feel while modernizing the presentation

2. **Responsive Design**
   - Implement a mobile-first approach
   - Create flexible layouts that adapt to different screen sizes
   - Ensure all content is accessible on mobile devices

3. **Modern UI Elements**
   - Update typography for better readability
   - Implement card-based design for content sections
   - Add subtle animations and transitions
   - Improve spacing and visual hierarchy

4. **GitHub Pages Compatibility**
   - Maintain Jekyll as the static site generator
   - Use only client-side technologies (HTML, CSS, JavaScript)
   - Keep the build process simple

## Implementation Phases

### Phase 1: CSS Framework Development

1. **Create a modern CSS structure**
   - Develop a responsive grid system
   - Implement CSS variables for theming
   - Create utility classes for common styling needs
   - Set up responsive breakpoints

2. **Maintain original color scheme**
   - Define CSS variables for the existing colors
   - Create a consistent color system throughout the site
   - Ensure sufficient contrast for accessibility

3. **Typography updates**
   - Select web-safe fonts or Google Fonts for better cross-platform support
   - Implement responsive font sizing
   - Improve typography hierarchy

### Phase 2: Template Modernization

1. **Update Jekyll layouts**
   - Modify `_layouts/page.html` to use the new CSS framework
   - Update `_layouts/titlepage.html` for the homepage
   - Create responsive versions of all layout templates

2. **Modernize includes**
   - Update `_includes/head.html` to include new CSS and meta tags
   - Modify `_includes/leadin.html` and `_includes/leadout.html` for responsive design
   - Create a responsive version of `_includes/top_menu.html`
   - Update `_includes/footer_links.html` for better mobile display

3. **Preserve content structure**
   - Maintain the same content organization
   - Keep all existing sections and navigation
   - Ensure all links continue to work as expected

### Phase 3: Responsive Components

1. **Header and navigation**
   - Create a responsive header that collapses on mobile
   - Implement a mobile-friendly navigation menu
   - Ensure the logo and search functionality work on all devices

2. **Content sections**
   - Convert fixed-width layouts to responsive grids
   - Implement card-based design for content blocks
   - Ensure images scale appropriately on different devices

3. **Footer**
   - Create a responsive footer that stacks on mobile
   - Maintain all existing links and sections
   - Improve organization for better usability

### Phase 4: Page-Specific Updates

1. **Homepage**
   - Update the banner and slideshow for responsive behavior
   - Implement responsive grid for content sections
   - Ensure all images and logos display correctly

2. **Content pages**
   - Update the layout for better readability on mobile
   - Ensure sidebar navigation works on all devices
   - Maintain consistent styling across all pages

3. **Special pages**
   - Update case studies and product tour pages
   - Ensure forms and interactive elements work on mobile
   - Maintain compatibility with existing functionality

### Phase 5: Testing and Refinement

1. **Cross-browser testing**
   - Test on major browsers (Chrome, Firefox, Safari, Edge)
   - Ensure consistent appearance and functionality

2. **Responsive testing**
   - Test on various device sizes (desktop, tablet, mobile)
   - Verify that all content is accessible on small screens

3. **Performance optimization**
   - Optimize images for faster loading
   - Minimize CSS and JavaScript
   - Improve page load times

## Technical Implementation Details

### CSS Framework Structure

```
common/
├── modern/
│   ├── base.css        (Reset and base styles)
│   ├── variables.css   (CSS variables for theming)
│   ├── grid.css        (Responsive grid system)
│   ├── typography.css  (Typography styles)
│   ├── components.css  (UI components)
│   ├── utilities.css   (Utility classes)
│   └── responsive.css  (Media queries)
└── omnest.css          (Original CSS file - maintained for reference)
```

### Key CSS Variables (Using Original Colors)

```css
:root {
  /* Primary brand colors - keeping original */
  --color-primary: #005CAC;
  --color-primary-dark: #004a8a;
  --color-primary-light: #3a7db5;
  
  /* Secondary accent colors - keeping original */
  --color-accent: #E54426;
  --color-accent-dark: #cc3300;
  --color-accent-light: #e9664d;
  
  /* Neutral colors */
  --color-text: #333333;
  --color-text-light: #666666;
  --color-background: #ffffff;
  --color-background-alt: #f5f7fa;
  
  /* Spacing */
  --spacing-xs: 0.25rem;
  --spacing-sm: 0.5rem;
  --spacing-md: 1rem;
  --spacing-lg: 2rem;
  --spacing-xl: 3rem;
  
  /* Container widths */
  --container-width: 1200px;
  --container-padding: 1rem;
}
```

### Responsive Breakpoints

```css
/* Mobile first approach */
/* Small devices (phones) */
/* Base styles apply to all devices */

/* Medium devices (tablets) */
@media (min-width: 768px) {
  /* Tablet-specific styles */
}

/* Large devices (desktops) */
@media (min-width: 992px) {
  /* Desktop-specific styles */
}

/* Extra large devices */
@media (min-width: 1200px) {
  /* Large desktop-specific styles */
}
```

### Mobile Navigation Implementation

```javascript
// Simple vanilla JavaScript for mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
  const navToggle = document.getElementById('navToggle');
  const navMenu = document.getElementById('navMenu');
  
  navToggle.addEventListener('click', function() {
    navMenu.classList.toggle('active');
  });
});
```

## Jekyll Integration

### Updated Head Include

```html
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ page.title }}</title>
<meta name="robots" content="INDEX,FOLLOW" />
<meta name="revisit-after" content="30" />
<meta name="description" content="OMNEST Network Simulation Framework - High-Performance Simulation for All Kinds of Networks" />
<meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
<base href="/" />
<link rel="stylesheet" type="text/css" href="common/modern/base.css">
<link rel="stylesheet" type="text/css" href="common/modern/variables.css">
<link rel="stylesheet" type="text/css" href="common/modern/grid.css">
<link rel="stylesheet" type="text/css" href="common/modern/typography.css">
<link rel="stylesheet" type="text/css" href="common/modern/components.css">
<link rel="stylesheet" type="text/css" href="common/modern/utilities.css">
<link rel="stylesheet" type="text/css" href="common/modern/responsive.css">
<link rel="stylesheet" type="text/css" href="common/omnest.css">
<!-- Original CSS maintained for backward compatibility -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2J2F9G90F2"></script>
<script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());
   gtag('config', 'G-2J2F9G90F2');
</script>
{{ page.head_contribution }}
```

## Migration Strategy

To ensure a smooth transition while maintaining the existing content:

1. **Parallel Development**
   - Create the new CSS framework alongside the existing styles
   - Develop and test the responsive templates in a separate branch
   - Maintain backward compatibility during development

2. **Incremental Implementation**
   - Start with the core templates and includes
   - Update one section at a time
   - Test thoroughly after each update

3. **Content Preservation**
   - Keep all existing content, screenshots, and logos
   - Ensure all links continue to work
   - Maintain the same content organization

4. **GitHub Pages Deployment**
   - Test the site locally using the Jekyll development server
   - Verify GitHub Pages compatibility
   - Deploy incrementally to minimize disruption

## Responsive Design Examples

### Desktop Layout
```
┌─────────────────────────────────────────────────────────────┐
│ LOGO                                       NAVIGATION MENU   │
├─────────────────────────────────────────────────────────────┤
│                                                             │
│  ┌─────────────────────────────────────────────────────┐   │
│  │                                                     │   │
│  │  HERO BANNER WITH ORIGINAL IMAGERY                  │   │
│  │                                                     │   │
│  │  High-Performance Simulation                        │   │
│  │  for All Kinds of Networks                          │   │
│  │                                                     │   │
│  │  [LEARN MORE]    [DOWNLOAD]                         │   │
│  │                                                     │   │
│  └─────────────────────────────────────────────────────┘   │
│                                                             │
│  ┌───────────────────────┐   ┌───────────────────────────┐ │
│  │                       │   │                           │ │
│  │  SIMULATION MODELS    │   │  ADD SIMULATION TO YOUR   │ │
│  │                       │   │  SOFTWARE PRODUCTS        │ │
│  │  Content with         │   │                           │ │
│  │  original text and    │   │  Content with original    │ │
│  │  images               │   │  text and images          │ │
│  │                       │   │                           │ │
│  └───────────────────────┘   └───────────────────────────┘ │
│                                                             │
└─────────────────────────────────────────────────────────────┘
```

### Tablet Layout
```
┌─────────────────────────────────────────────┐
│ LOGO                       NAVIGATION MENU   │
├─────────────────────────────────────────────┤
│                                             │
│  ┌─────────────────────────────────────┐   │
│  │                                     │   │
│  │  HERO BANNER WITH ORIGINAL IMAGERY  │   │
│  │                                     │   │
│  │  High-Performance Simulation        │   │
│  │  for All Kinds of Networks          │   │
│  │                                     │   │
│  │  [LEARN MORE]    [DOWNLOAD]         │   │
│  │                                     │   │
│  └─────────────────────────────────────┘   │
│                                             │
│  ┌─────────────────────────────────────┐   │
│  │                                     │   │
│  │  SIMULATION MODELS                  │   │
│  │                                     │   │
│  │  Content with original text and     │   │
│  │  images                             │   │
│  │                                     │   │
│  └─────────────────────────────────────┘   │
│                                             │
│  ┌─────────────────────────────────────┐   │
│  │                                     │   │
│  │  ADD SIMULATION TO YOUR SOFTWARE    │   │
│  │  PRODUCTS                           │   │
│  │                                     │   │
│  │  Content with original text and     │   │
│  │  images                             │   │
│  │                                     │   │
│  └─────────────────────────────────────┘   │
│                                             │
└─────────────────────────────────────────────┘
```

### Mobile Layout
```
┌───────────────────────────┐
│ LOGO            ☰ MENU    │
├───────────────────────────┤
│                           │
│  ┌───────────────────┐   │
│  │                   │   │
│  │  HERO BANNER      │   │
│  │                   │   │
│  │  High-Performance │   │
│  │  Simulation for   │   │
│  │  All Kinds of     │   │
│  │  Networks         │   │
│  │                   │   │
│  │  [LEARN MORE]     │   │
│  │  [DOWNLOAD]       │   │
│  │                   │   │
│  └───────────────────┘   │
│                           │
│  ┌───────────────────┐   │
│  │                   │   │
│  │  SIMULATION       │   │
│  │  MODELS           │   │
│  │                   │   │
│  │  Content with     │   │
│  │  original text    │   │
│  │  and images       │   │
│  │                   │   │
│  └───────────────────┘   │
│                           │
│  ┌───────────────────┐   │
│  │                   │   │
│  │  ADD SIMULATION   │   │
│  │  TO YOUR SOFTWARE │   │
│  │  PRODUCTS         │   │
│  │                   │   │
│  │  Content with     │   │
│  │  original text    │   │
│  │  and images       │   │
│  │                   │   │
│  └───────────────────┘   │
│                           │
└───────────────────────────┘
```

## Next Steps

1. **Approval and Refinement**
   - Review and approve this implementation plan
   - Refine specific design elements based on feedback
   - Prioritize pages for implementation

2. **Development Setup**
   - Set up the development environment
   - Create the CSS framework structure
   - Implement the responsive grid system

3. **Template Updates**
   - Update the Jekyll templates with responsive design
   - Implement the mobile navigation
   - Test on various devices

4. **Content Migration**
   - Apply the new design to all content pages
   - Ensure all images and logos display correctly
   - Verify links and functionality

5. **Testing and Deployment**
   - Comprehensive testing across devices and browsers
   - Performance optimization
   - Deployment to GitHub Pages