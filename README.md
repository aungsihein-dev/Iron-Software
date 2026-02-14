# Iron-Software Accessment
# Project Overview

This project converts the provided Figma design into a fully responsive, production-ready webpage implemented using CodeIgniter.

The goal was to achieve pixel-perfect accuracy while following modern frontend standards and performance best practices.


# Technologies used in this project

PHP with CodeIgniter 4 framework 
Composer for PHP dependency management 
HTML
Bootstrap
CSS
JavaScript pure (vanilla)
SVG/asset pipeline for images and fonts 
Apache or compatible web server
Google Lighthouse(Performance validation)


# QA Checklist
1. Pixel Accuracy

Compared spacing, margins, paddings with Figma inspect panel

Verified layout alignment at every's device width from large screens to mobile devices

Checked consistency of grid usage

2. Typography

Font family matches design specification

Font sizes, weights, and line heights verified

Letter spacing checked

3. Responsiveness

Tested at:

1440px

1200px

992px

768px

576px

375px

Ensured: No overflow issues, No horizontal scroll ,Proper stacking behavior ,Image scaling correct
Note: The provided Figma design is best matched for laptop/desktop.
The PDF Illustration and some large images are harder to adjust perfectly for full-screen laptop widths beyond 1440px due to scaling constraints.
Minor adjustments were made to maintain alignment without breaking layout.

4. Cross-Browser Testing

Tested on: Chrome, Brave, Safari, Firefox, Microsoft Edge

Verified: Layout consistency,Font rendering,Hover states

5. SEO Validation

Single H1 tag used

Proper heading hierarchy (H1 → H2 → H3)

Meta title and description added

Alt attributes for all images

Semantic HTML used (section, nav, article, footer)

6. Accessibility

Keyboard navigation tested

Focus states visible

Color contrast verified

ARIA labels added where needed

7. Core Web Vitals

CLS minimized (fixed image dimensions)

LCP optimized (hero image optimized & compressed)

JS deferred where possible

CSS minimized

8. Lighthouse Results

Performance: 90+
Accessibility: 90+
Best Practices: 90+
SEO: 90+

Result Screen Shots