<?php
function renderHead($title = "PDF Converter", $metaDescription = "Convert PDFs to Images in Seconds") {?>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php echo $metaDescription; ?>" />
    <title><?php echo $title; ?></title>
    
    
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/pdf.min.js"></script>
    <script src="assets/js/pdf.worker.min.js"></script>
    <script src="assets/js/jszip.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.icons.css" />
   

  </head>
<?php
}

function renderNavbar() {?>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand text-primary fw-bold" href="#">PDF Converter</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
          <li class="nav-item"><a class="nav-link" href="#upload">Upload</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
}

function renderFooter() {?>
  <!-- Footer -->
  <footer class="text-center py-4 text-muted bg-light">
    &copy; 2025 PDF Converter. All rights reserved.
  </footer>
  <?php
}

function renderBody() {?>
   


  <!-- Hero -->
  <section class="text-center py-5 bg-primary bg-gradient text-white">
    <div class="container">
      <h2 class="display-5 fw-bold mb-3">Convert PDFs to Images in Seconds</h2>
      <p class="lead mb-4">Upload a PDF and download all pages as PNGs, JPGs, Text, Word, and more.</p>
      <a href="#upload" class="btn btn-light btn-lg text-primary">Try Now</a>
    </div>
  </section>
  
  <!-- Upload Section -->
  <section id="upload" class="bg-white py-5">
    <div class="container text-center">
      <h4 class="fw-semibold mb-3">Upload Your PDF</h4>
      <p class="text-muted mb-4">Drag and drop your PDF file here or click to upload.</p>
      <label class="d-block p-5 bg-light text-primary border border-2 border-dashed rounded-3 cursor-pointer" style="cursor:pointer;">
      <i class="bi bi-upload animated-upload"></i>
        <span class="d-block mb-2">Click to Upload PDF</span>
        <input type="file" id="pdf-upload" accept="application/pdf" class="d-none" />
      </label>
      <p id="loading" class="mt-3 text-secondary"></p>
    </div>

    <div id="preview-area" class="row g-4 mt-5 container mx-auto"></div>

    <div class="text-center">
      <button id="download-all" class="btn btn-success mt-4 d-none">Download All as ZIP</button>
    </div>
  </section>

  <!-- Features -->
  <section id="features" class="container py-5">
    <h3 class="text-center fw-semibold mb-4">Supported Conversions</h3>
    <div class="row text-center g-3">
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-white rounded shadow-sm">PDF to PNG</div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-white rounded shadow-sm">PDF to JPG</div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-white rounded shadow-sm">PDF to Text</div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-white rounded shadow-sm">PDF to Word</div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-white rounded shadow-sm">PDF to Excel</div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-white rounded shadow-sm">More...</div>
      </div>
    </div>
  </section>
    
  <?php
}



?>
