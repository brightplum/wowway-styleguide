<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
  <title>Style Guide Boilerplate</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">

  <!-- Style Guide Boilerplate Styles -->
  <link rel="stylesheet" href="css/sg-style.css">
  <!--[if lt IE 9]><link rel="stylesheet" href="css/sg-style-old-ie.css"><![endif]-->

  <!-- https://github.com/sindresorhus/github-markdown-css -->
  <link rel="stylesheet" href="css/github-markdown.css">

  <!-- Replace below stylesheet with your own stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <!-- prism Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prism/prism.css">
</head>
<body>
  <a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>

  <div id="top" class="sg-header" role="banner">
    <div class="sg-container">
      <h1 class="sg-logo">
        <span class="sg-logo-initials">SG</span>
        <span class="sg-logo-full">STYLE GUIDE</span> <em>BOILERPLATE</em>
      </h1>
      <button type="button" class="sg-nav-toggle">Menu</button>
    </div>
  </div><!--/.sg-header-->

  <div class="sg-wrapper sg-clearfix">
    <div id="nav" class="sg-sidebar" role="navigation">
      <h2 class="sg-h2 sg-subnav-title">About</h2>
      <ul class="sg-nav-group">
        <li>
          <a href="#sg-about">Getting Started</a>
        </li>
        <li>
          <a href="#sg-colors">Colors</a>
        </li>
        <li>
          <a href="#sg-fontStacks">Fonts</a>
        </li>
      </ul>

      <?php listFilesInFolder('markup'); ?>
    </div><!--/.sg-sidebar-->

    <div id="main" class="sg-main" role="main">
      <div class="sg-container">
        <div class="sg-info">
          <div class="sg-about sg-section">
            <h2 id="sg-about" class="sg-h2">Getting Started</h2>
            <p>A living style guide is a great tool to promote visual consistency, unify UX designers and front-end developers, as well as speed up development times. Add some documentation here on how to get started with your new style guide and start customizing this boilerplate to your liking.</p>
            <p>If you are looking for resources on style guides, check out <a href="http://styleguides.io">styleguides.io</a>. There are a ton of great articles, books, podcasts, talks, and other style guide tools!</p>
          </div><!--/.sg-about-->

          <!-- Manually add your UI colors here. -->
          <div class="sg-colors sg-section">
            <h2 id="sg-colors" class="sg-h2">Colors</h2>
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #c62328;"></div>
                <div class="sg-color-name">Red</div>
                <div class="sg-color-value">#c62328</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #f26529;"></div>
                <div class="sg-color-name">Orange</div>
                <div class="sg-color-value">#f26529</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #fff215;"></div>
                <div class="sg-color-name">Yellow</div>
                <div class="sg-color-value">#fff215</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #10ace3;"></div>
                <div class="sg-color-name">Baby Blue</div>
                <div class="sg-color-value">#10ace3</div>
              </div>
            </div><!--/.sg-color-grid-->
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #0065e3;"></div>
                <div class="sg-color-name">Blue</div>
                <div class="sg-color-value">#0065e3</div>
              </div>
            </div><!--/.sg-color-grid-->
          </div><!--/.sg-colors-->

          <!-- Manually add your fonts here. -->
          <div class="sg-font-stacks sg-section">
            <h2 id="sg-fontStacks" class="sg-h2">Font Stacks</h2>
            <dl class="sg-font-list">
              <dt>Primary Font:</dt>
              <dd style='font-family: ars-maquette-web, sans-serif;'>Ars Maquette Web</dd>

              <dt>Primary Font Bold:</dt>
              <dd style='font-family: ars-maquette-web, sans-serif; font-weight: 400;'>Ars Maquette Web, sans-serif;</dd>

              <dt>Secondary Font:</dt>
              <dd style='font-family: conduit light, sans-serif;'>Conduit Light, sans-serif;</dd>

              <dt>Secondary Font Bold:</dt>
              <dd style='font-family: conduit light, sans-serif; font-weight: 700;'>Conduit Light, sans-serif;</dd>
            </dl>
            <div class="sg-markup-controls"><a class="sg-btn--top" href="#top">Back to Top</a></div>
          </div><!--/.sg-font-stacks-->
        </div><!--/.sg-info-->
          <!-- Headings -->
          <h2>Headings Style: Hero #SinglePriceTwoButtons</h2>
          <div>
              <h1 style="font-family: ars-maquette-web, sans-serif;font-weight: 400;font-size: 45px;">Heading 1 with <small>small text</small> and a <a>link</a></h1>
              <h2 style="font-family: ars-maquette-web, sans-serif;font-size: 32px;">Heading 2 with <small>small text</small> and a <a>link</a></h2>
              <h3 style="font-family: ars-maquette-web, sans-serif;font-weight:400; text-transform:uppercase;font-size: 20px;">Heading 3 with <small>small text</small> and a <a>link</a></h3>
              <h4 style="font-family: ars-maquette-web, sans-serif;">Heading 4 with <small>small text</small> and a <a>link</a></h4>
              <h5 style="font-family: ars-maquette-web, sans-serif;">Heading 5 with <small>small text</small> and a <a>link</a></h5>
              <h6 style="font-family: ars-maquette-web, sans-serif;">Heading 6 with <small>small text</small> and a <a>link</a></h6>
              <p style="font-family:unset;font-weight:200;font-size:11px;">Paragraph with numbers 123 and a price $39.99. </p>
          </div>
          <!-- Headings -->
          <h2>Headings Style: c-offer-title span</h2>
          <div>
              <h1 style="font-family: ars-maquette-web, sans-serif;font-weight: 400;font-size: 52px;">Heading 1 with <small>small text</small> and a <a>link</a></h1>
              <h2 style="font-family: ars-maquette-web, sans-serif;font-weight:200; font-size: 20px;">Heading 2 with <small>small text</small> and a <a>link</a></h2>
              <h3 style="font-family: ars-maquette-web, sans-serif;font-weight:200; font-size: 16px;">Heading 3 with <small>small text</small> and a <a>link</a></h3>
              <p style="font-family:unset;font-weight:200;font-size:14px;">Paragraph with numbers 123 and a price $39.99. </p>
          </div>
          <!-- Headings -->
          <h2>Headings Style: offer card</h2>
          <div>
              <h1 style="font-family: conduit light, sans-serif;font-weight: 500;font-size: 60px;">Heading 1 with <small>small text</small> and a <a>link</a></h1>
              <h2 style="font-family: ars-maquette-web, sans-serif;font-weight:700; font-size: 16px;">Heading 2 with <small>small text</small> and a <a>link</a></h2>
              <h3 style="font-family: ars-maquette-web, sans-serif;font-weight:200; font-size: 14px;">Heading 2 with <small>small text</small> and a <a>link</a></h3>
              <h5 style="font-family: ars-maquette-web, sans-serif;font-weight:700; font-size: 13px;">Heading 2 with <small>small text</small> and a <a>link</a></h5>
              <p style="font-family:ars-maquette-web, sans-serif;font-weight:100;font-size:10px;">Paragraph with numbers 123 and a price $39.99. </p>
          </div>
          <!-- Headings -->
          <h2>Headings Style: Simple Paragraph with Title</h2>
          <div>
              <h2 style="font-size: 48px; font-weight:300;font-family: ars-maquette-web, sans-serif;">About WOW</h2>
              <p style="font-size:14px; font-weight: 200;font-family: ars-maquette-web, sans-serif;">Some paragraph text</p>
          </div>
          <!-- Headings -->
          <h2>Headings Style: Hero More Content</h2>
          <div>
              <h2 style="font-size: 32px; font-family: ars-maquette-web, sans-serif;">About WOW</h2>
              <p style="font-size:14px; font-weight: 200;font-family: ars-maquette-web, sans-serif;">Some paragraph text with <strong>strong text</strong></p>
          </div>
          <!-- Headings -->
          <h2>Headings Style: Internet Bundles</h2>
          <div>
              <h3 style="font-size: 18.72px; font-weight:300;font-family: ars-maquette-web, sans-serif;">About WOW</h3>
              <p style="font-size:.9em; font-weight: 200;font-family: ars-maquette-web, sans-serif;">Some paragraph text with <label style="font-weight: 600; font-size: .7em; text-transform: uppercase;">a label</label> and <span style="font-size: 8px; font-weight: 500;"></span></p>
          </div>

        <?php renderFilesInFolder('markup'); ?>
      </div><!--/.sg-container-->
    </div><!--/.sg-main-->
  </div><!--/.sg-wrapper-->

  <!--[if gt IE 8]><!--><script src="vendor/prism/prism.js"></script><!--<![endif]-->
  <script src="js/sg-scripts.js"></script>
</body>
</html>

