# GitHub Pages Deployment Fix Plan

## Problem

The site at https://tabgab.github.io/omnesttestsite/ is not loading CSS or media files correctly. This is a common issue when deploying Jekyll sites to GitHub Pages, especially for project sites (username.github.io/repository).

## Root Causes

After analyzing the codebase, I've identified two main issues:

### 1. Base URL Configuration Issue

In the `_config.yml` file, the `baseurl` is empty:
```yaml
baseurl: "" # the subpath of your site, e.g. /blog
url: "" # the base hostname & protocol for your site, e.g. http://example.com
```

For GitHub Pages project sites, the `baseurl` should be set to the repository name with a leading slash.

### 2. Absolute Path References

In the `_includes/head.html` file, there are several issues:

1. The `<base href="/" />` tag sets the base URL to the root of the domain, which is incorrect for a GitHub Pages project site.

2. CSS and favicon links use absolute paths starting with `/`:
   ```html
   <link rel="stylesheet" type="text/css" href="/common/modern/main.css">
   <link rel="stylesheet" type="text/css" href="/common/modern/animations.css">
   <link rel="stylesheet" type="text/css" href="/common/omnest.css">
   <link rel="icon" href="/favicon.ico" type="image/x-icon">
   ```

When these absolute paths are used with GitHub Pages project sites, the browser looks for files at `https://tabgab.github.io/common/...` instead of `https://tabgab.github.io/omnesttestsite/common/...`.

## Solution Plan

Here are the specific changes needed to fix these issues:

### 1. Update the `_config.yml` file:
```yaml
baseurl: "/omnesttestsite" # the subpath of your site
url: "https://tabgab.github.io" # the base hostname & protocol
```

### 2. Update the `_includes/head.html` file:
- Remove the `<base href="/" />` tag
- Change all absolute paths to use the Jekyll site.baseurl variable:
  ```html
  <link rel="stylesheet" type="text/css" href="{{ site.baseurl }}/common/modern/main.css">
  <link rel="stylesheet" type="text/css" href="{{ site.baseurl }}/common/modern/animations.css">
  <link rel="stylesheet" type="text/css" href="{{ site.baseurl }}/common/omnest.css">
  <link rel="icon" href="{{ site.baseurl }}/favicon.ico" type="image/x-icon">
  ```

### 3. Check other templates and includes for absolute paths:
- Look for image sources, JavaScript files, and other assets with absolute paths
- Update them to use the site.baseurl variable

## Implementation Steps

1. Switch to Code mode to implement these changes
2. Update _config.yml with the correct baseurl and url
3. Modify _includes/head.html to use relative paths with site.baseurl
4. Check and update any other files that might use absolute paths
5. Commit and push the changes to GitHub
6. Wait for GitHub Pages to rebuild the site (usually takes a few minutes)
7. Verify that CSS and media files are now loading correctly

## Additional Considerations

- If you're testing locally, you may need to adjust your local Jekyll configuration to match the GitHub Pages environment
- Consider using the `jekyll-github-metadata` plugin to automatically set the correct URL and baseurl based on the GitHub repository
- For future development, always use relative paths with the site.baseurl variable for assets