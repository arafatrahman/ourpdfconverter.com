<?php
function renderHead($title = "PDF Converter", $metaDescription = "Convert PDFs to Images in Seconds") {?>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php echo $metaDescription; ?>" />
    <title><?php echo $title; ?></title>
    
    

    <script src="assets/js/pdf.min.js"></script>
    <script src="assets/js/pdf.worker.min.js"></script>
    <script src="assets/js/jszip.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/home.css" />
   

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
          <li class="nav-item"><a class="nav-link" href="https://ourpdfconverter.com">Home</a></li>
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
  <section class="text-center py-5 text-white upload-pdf-hero-section">
    <div class="container">
      <h2 class="display-5 fw-bold mb-3">Convert PDFs to Images in Seconds</h2>
      <p class="lead mb-4">Upload a PDF and download all pages as PNGs, JPGs, Text, Word, and more.</p>
      <a href="#upload" class="btn btn-light btn-lg text-primary">Try Free Now</a>
    </div>
  </section>
  
<!-- Upload Section with Drag & Drop -->
<section id="upload" class="bg-white py-16 px-4 upload-pdf-section">
  <div class="max-w-3xl mx-auto text-center">
    <h4 class="text-2xl fw-semibold mb-4">Upload Your PDF</h4>
    <p class="text-muted mb-3">Drag and drop your PDF file here or click to upload.</p>

    <div id="drop-zone" 
         class="border border-primary border-dashed rounded py-5 px-4 mb-3"
         style="cursor:pointer; transition: background-color 0.3s ease;">
      <i class="bi bi-file-earmark-pdf-fill text-primary fs-1 mb-2"></i>
      <p class="mb-0 text-primary fw-semibold">Drop your PDF here or click to select</p>
      <input type="file" id="pdf-upload" accept="application/pdf" class="d-none" />
    </div>
    <p id="loading" class="text-secondary"></p>
  </div>

  <div id="preview-area" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 mt-4"></div>

  <div class="text-center">
    <button id="download-all" class="btn btn-danger mt-4 d-none">Download All as ZIP</button>
  </div>
</section>

  <!-- Features -->
  <section id="features" class="container py-5 pdf-features-section">
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

  <!-- Feature Details Section -->
<section id="feature-details" class="container py-5 pdf-features-details-section">
  <h3 class="text-center fw-semibold mb-4">Feature Details</h3>
  <div class="row g-4">
    <div class="col-md-6 col-lg-4">
      <div class="border rounded p-4 h-100">
        <h5 class="mb-3">PDF to PNG</h5>
        <p>Convert every page of your PDF into high-quality PNG images, perfect for sharing or embedding.</p>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="border rounded p-4 h-100">
        <h5 class="mb-3">PDF to JPG</h5>
        <p>Get compressed JPG versions of your PDF pages for smaller file sizes without much loss in quality.</p>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="border rounded p-4 h-100">
        <h5 class="mb-3">PDF to Text</h5>
        <p>Extract the text content from your PDF files quickly to edit, search, or reuse in other documents.</p>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="border rounded p-4 h-100">
        <h5 class="mb-3">PDF to Word</h5>
        <p>Convert your PDFs to editable Word documents while preserving formatting and layout as much as possible.</p>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="border rounded p-4 h-100">
        <h5 class="mb-3">PDF to Excel</h5>
        <p>Extract tabular data from PDFs into Excel spreadsheets, making data analysis easier.</p>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="border rounded p-4 h-100">
        <h5 class="mb-3">More Features</h5>
        <p>We are continuously adding more conversion options to support your document needs.</p>
      </div>
    </div>
  </div>
</section>


<!-- How to Use Section -->
<section id="how-to-use" class="bg-light py-5 pdf-how-to-use-section">
  <div class="container">
    <h3 class="text-center fw-semibold mb-5">How to Use PDF Converter</h3>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <ol class="list-unstyled d-flex flex-column gap-4 fs-5">
          <li class="d-flex align-items-start">
            <div class="step-icon bg-primary text-white rounded-circle flex-shrink-0 me-3">
              <i class="bi bi-upload fs-3"></i>
            </div>
            <div>
              <strong>Upload your PDF:</strong> Click or drag and drop your PDF file into the upload area.
            </div>
          </li>
          <li class="d-flex align-items-start">
            <div class="step-icon bg-primary text-white rounded-circle flex-shrink-0 me-3">
              <i class="bi bi-hourglass-split fs-3"></i>
            </div>
            <div>
              <strong>Processing:</strong> Wait as the PDF pages are converted to images; a preview will appear.
            </div>
          </li>
          <li class="d-flex align-items-start">
            <div class="step-icon bg-primary text-white rounded-circle flex-shrink-0 me-3">
              <i class="bi bi-image fs-3"></i>
            </div>
            <div>
              <strong>Download individually:</strong> Click "Download Page" links below each preview to save pages as images.
            </div>
          </li>
          <li class="d-flex align-items-start">
            <div class="step-icon bg-primary text-white rounded-circle flex-shrink-0 me-3">
              <i class="bi bi-file-zip fs-3"></i>
            </div>
            <div>
              <strong>Download all at once:</strong> Use the "Download All as ZIP" button to get every page in a single ZIP file.
            </div>
          </li>
          <li class="d-flex align-items-start">
            <div class="step-icon bg-primary text-white rounded-circle flex-shrink-0 me-3">
              <i class="bi bi-stars fs-3"></i>
            </div>
            <div>
              <strong>Explore more:</strong> Try other conversion features like PDF to Text, Word, and Excel.
            </div>
          </li>
        </ol>
      </div>
    </div>
  </div>

  <!-- FAQ Section -->
<section id="faq" class="container py-5 pdf-faq-section">
  <h3 class="text-center fw-semibold mb-4">Frequently Asked Questions</h3>
  <p>Got questions? Find answers to common queries about PDF to Image conversion and our tool’s features.
  Learn how to use the converter, troubleshoot any issues, and get tips on making the most out of your PDF conversions. If you don’t find your answer, our support team is just a message away!</p>
    
  <div class="accordion" id="faqAccordion">
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq-heading-1">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1">
          What file formats are supported for upload?
        </button>
      </h2>
      <div id="faq-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-heading-1" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Currently, we only support PDF files for upload.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq-heading-2">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="false" aria-controls="faq-collapse-2">
          How do I download all pages at once?
        </button>
      </h2>
      <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-heading-2" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          After uploading, use the "Download All as ZIP" button to download every page as PNG images bundled in a ZIP file.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq-heading-3">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="false" aria-controls="faq-collapse-3">
          Can I convert PDFs to formats other than images?
        </button>
      </h2>
      <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-heading-3" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Yes! Our service supports conversions to JPG, Text, Word, Excel, and more. Check the Features section for all supported formats.
        </div>
      </div>
    </div>
  </div>
</section>
    
  <?php
}



?>
