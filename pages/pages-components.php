<?php
function renderHead() {?>
  <head>
    
  <meta name="description" content="Use our free PDF to images converter online to quickly turn PDF pages into JPG, PNG, or other image formats. No installation or registration required.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="PDF to Images Converter Online - Free & Fast Tool">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://ourpdfconverter.com/">
  <meta property="og:image" content="https://ourpdfconverter.com/assets/images/how-to-convert-image-to-pdf.png">
  <meta property="og:site_name" content="Our PDF Converter">
  <meta property="og:description" content="Convert PDF to images online for free. Fast and easy tool to transform PDF pages into JPG, PNG, and more — no software or signup needed.">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@ourpdfconverter">
  <meta name="twitter:creator" content="@ourpdfconverter">
  <meta name="twitter:title" content="PDF to Images Converter Online - Free, Fast, No Signup">
  <meta name="twitter:description" content="Easily convert PDF to images online. Free, secure, and no installation required. Supports JPG, PNG, and more.">
  <meta name="twitter:image" content="https://ourpdfconverter.com/assets/images/how-to-convert-image-to-pdf.png">
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />

    <script src="assets/js/pdf.min.js"></script>
    <script src="assets/js/pdf.worker.min.js"></script>
    <script src="assets/js/jszip.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="assets/css/post.css" />
   

  </head>
<?php
}

function renderNavbar() {?>
  <!-- Navbar -->
  <!-- Responsive Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand text-primary fw-bold d-flex align-items-center" href="https://ourpdfconverter.com/">
        <img src="assets/images/our-pdf-converter-logo.png" alt="<?php echo _("PDF Converter Logo"); ?>" class="me-2" style="height: 60px;width: 250px;" />
       
      </a>

      <!-- Toggler for mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="#"><?php echo _("Home"); ?></a></li>
            <li class="nav-item"><a class="nav-link" href="#upload"><?php echo _("Upload PDF"); ?></a></li>
            <li class="nav-item"><a class="nav-link" href="#features"><?php echo _("Features"); ?></a></li>
            <li class="nav-item"><a class="nav-link" href="#how-to-use"><?php echo _("How to Use"); ?></a></li>
            <li class="nav-item"><a class="nav-link" href="#faq"><?php echo _("FAQ"); ?></a></li>
          
        </ul>
      </div>
    </div>
  </nav>
  <?php
}

function renderFooter() {?>
  <!-- Footer -->
  <footer class="text-center py-4 text-muted bg-light">
    &copy; <?php echo date("Y"); ?> <?php echo _("Our PDF Converter"); ?>. <?php echo _("All rights reserved."); ?>
  </footer>
  <?php
}

function renderBody() {?>
   


  <!-- Hero -->
  <section class="text-center py-5 text-white upload-pdf-hero-section">
    <div class="container">
      <h2 class="display-5 fw-bold mb-3"><?php echo _("Convert PDF to Images in Seconds | Fast, Free & Easy Online Tool"); ?></h2>
      <p class="lead mb-4"><?php echo _("Need to turn your  into images quickly? You’re in the right place. Our tool lets you convert your PDF files into high-quality images like JPG or PNG — all online, for free, and without signing up."); ?></p>
      <a href="#upload" class="btn btn-light btn-lg text-primary"><?php echo _("Try Free Now"); ?></a>
    </div>
  </section>


  <!-- Upload Section with Drag & Drop -->
<section id="upload" class="bg-white py-16 px-4 upload-pdf-section">
  <div class="max-w-3xl mx-auto text-center">
    <h4 class="text-2xl fw-semibold mb-4"><?php echo _("Upload Your PDF"); ?></h4>
    <p class="text-muted mb-3"><?php echo _("Drag and drop your PDF file here or click to upload."); ?></p>

    <div id="drop-zone" 
         class="border border-primary border-dashed rounded py-5 px-4 mb-3"
         style="cursor:pointer; transition: background-color 0.3s ease;">
      <i class="bi bi-file-earmark-pdf-fill text-primary fs-1 mb-2"></i>
      <p class="mb-0 text-primary fw-semibold"><?php echo _("Drop your PDF here or click to select"); ?></p>
      <input type="file" id="pdf-upload" accept="application/pdf" class="d-none" />
    </div>
    <p id="loading" class="text-secondary"></p>
  </div>

  <div id="preview-area" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 mt-4"></div>

  <div class="text-center">
    <button id="download-all" class="btn btn-danger mt-4 d-none"><?php echo _("Download All as ZIP"); ?></button>
  </div>
</section>


<section class="pdf-converter-info-section">
  <div class="image-container">
    <img src="assets/images/What-is-PDF-to-Image-Converter.jpg" alt="What is PDF to Image Converter" />
  </div>
  <div class="text-container">
    <h2><?php echo _("What is PDF to Image Converter?"); ?></h2>
    <p><?php echo _("PDF files are versatile document formats that preserve your text, images, and layouts exactly as intended, regardless of device or platform. However,  are documents—not image files—which means you can’t upload them directly to platforms that only accept images, like Instagram or many social networks."); ?></p>
    <p><?php echo _("By conversting  to images (such as JPG, PNG, or TIFF), you gain the flexibility to share, edit, and use your content more widely."); ?></p>
  </div>
</section>
  


<section class="pdf-converter-info-section">

<div class="image-container">
    <img src="assets/images/why-should-youconvert-pdf.jpg" alt="Why Should You Convert" />
  </div>
  <div class="text-container">
    <h2><?php echo _("Why Should You Convert PDF to JPG or PNG?"); ?></h2>
    <ul>
      <li><strong><?php echo _("Share on Social Media:"); ?></strong> <?php echo _("Got a flyer or brochure in PDF? Convert it to JPG and post it on Instagram, Facebook, Twitter, or anywhere else."); ?></li>
      <li><strong><?php echo _("Edit Easily:"); ?></strong> <?php echo _("Want to tweak your PDF pages using photo editors like Photoshop or Lightroom? Images make it possible."); ?></li>
      <li><strong><?php echo _("Save Space:"); ?></strong> <?php echo _("Images often take up less room than ."); ?></li>
      <li><strong><?php echo _("Print Without Hassle:"); ?></strong> <?php echo _("Image files print consistently, page by page."); ?></li>
    </ul>
  </div>

</section>

  <!-- Features -->
  <section id="features" class="bg-light container py-5 pdf-features-section">
    <h3 class="text-center fw-semibold mb-4"><?php echo _("Supported Conversions"); ?></h3>
    <p class="text-center"><?php echo _("Our PDF converter supports a variety of formats, allowing you to convert your  into images or other document types. Whether you need high-quality images for sharing or editable documents for further editing, we’ve got you covered."); ?></p>
     
    <div class="row text-center g-3">
      <div class="col-6 col-md-4 col-lg-2">
      <a href="https://ourpdfconverter.com/pdf-to-png-converter" class="text-decoration-none" style="color: red;">
          <div class="p-3 bg-white rounded shadow-sm"><?php echo _("PDF to PNG"); ?></div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
      <a href="https://ourpdfconverter.com/" class="text-decoration-none" style="color: red;">
          <div class="p-3 bg-white rounded shadow-sm"><?php echo _("PDF to JPG"); ?></div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-white rounded shadow-sm"><?php echo _("PDF to Text"); ?></div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-white rounded shadow-sm"><?php echo _("PDF to Word"); ?></div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-white rounded shadow-sm"><?php echo _("PDF to Excel"); ?></div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-white rounded shadow-sm"><?php echo _("PDF to PNG"); ?></div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-white rounded shadow-sm"><?php echo _("PDF to JPG"); ?></div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-white rounded shadow-sm"><?php echo _("Merge PDF"); ?></div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-white rounded shadow-sm"><?php echo _("Split PDF"); ?></div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-white rounded shadow-sm"><?php echo _("Rotate PDF"); ?></div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-white rounded shadow-sm"><?php echo _("Delete PDF Pages"); ?></div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 bg-white rounded shadow-sm"><?php echo _("Extract PDF Pages"); ?></div>
      </div>
    </div>
  </section>

  <!-- Feature Details Section -->
<section id="feature-details" class="container py-5 pdf-features-details-section">
  <h3 class="text-center fw-semibold mb-4"><?php echo _("Feature Details"); ?></h3>
  <p class="text-center"><?php echo _("Explore the powerful features that make our converter stand out. Fast, secure, and hassle-free conversions at your fingertips. From batch processing to extracting images, our tool offers a range of features to make your PDF conversions simple and efficient. Plus, it's 100% free, no sign-up required!"); ?></p>
  <div class="row g-4">
    <div class="col-md-6 col-lg-4">
      <div class="border rounded p-4 h-100">
        <h5 class="mb-3"><?php echo _("PDF to PNG"); ?></h5>
        <p><?php echo _("Convert every page of your PDF into high-quality PNG images, perfect for sharing or embedding."); ?></p>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="border rounded p-4 h-100">
        <h5 class="mb-3"><?php echo _("PDF to JPG"); ?></h5>
        <p><?php echo _("Get compressed JPG versions of your PDF pages for smaller file sizes without much loss in quality."); ?></p>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="border rounded p-4 h-100">
        <h5 class="mb-3"><?php echo _("PDF to Text"); ?></h5>
        <p><?php echo _("Extract the text content from your PDF files quickly to edit, search, or reuse in other documents."); ?></p>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="border rounded p-4 h-100">
        <h5 class="mb-3"><?php echo _("PDF to Word"); ?></h5>
        <p><?php echo _("Convert your  to editable Word documents while preserving formatting and layout as much as possible."); ?></p>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="border rounded p-4 h-100">
        <h5 class="mb-3"><?php echo _("PDF to Excel"); ?></h5>
        <p><?php echo _("Extract tabular data from  into Excel spreadsheets, making data analysis easier."); ?></p>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="border rounded p-4 h-100">
        <h5 class="mb-3"><?php echo _("More Features"); ?></h5>
        <p><?php echo _("We are continuously adding more conversion options to support your document needs."); ?></p>
      </div>
    </div>
  </div>
</section>



<!-- How to Use Section -->
<section id="how-to-use" class="bg-light py-5 pdf-how-to-use-section">
  <div class="container">
    <h3 class="text-center fw-semibold mb-5"><?php echo _("How to Use PDF Converter"); ?></h3>
    <p class="text-center mb-4"><?php echo _("Follow these simple steps to convert your PDF files into images or other formats. Turning your  into images is simple and fast with our tool. Just upload your file, let us handle the conversion, and download your images in a few clicks — no tech skills needed!"); ?></p>
    <div class="row justify-content-center">
      <div class="col-md-8">
      <ol class="list-unstyled d-flex flex-column gap-4 fs-5">
        <li class="d-flex align-items-start">
        <div class="step-icon bg-primary text-white rounded-circle flex-shrink-0 me-3">
          <i class="bi bi-upload fs-3"></i>
        </div>
        <div>
          <strong><?php echo _("Upload your PDF:"); ?></strong> <?php echo _("Start by clicking the \"Upload Files\" button or simply drag and drop your PDF into the upload area. You can add one file or multiple files at once — up to 20 documents per session."); ?>
        </div>
        </li>
        <li class="d-flex align-items-start">
        <div class="step-icon bg-primary text-white rounded-circle flex-shrink-0 me-3">
          <i class="bi bi-hourglass-split fs-3"></i>
        </div>
        <div>
          <strong><?php echo _("Let the Magic Happen:"); ?></strong> <?php echo _("Our tool will automatically start converting each page of your PDF into a high-quality image. You'll see a live preview of the pages as they are processed, so you can keep track of the progress in real-time."); ?>
        </div>
        </li>
        <li class="d-flex align-items-start">
        <div class="step-icon bg-primary text-white rounded-circle flex-shrink-0 me-3">
          <i class="bi bi-image fs-3"></i>
        </div>
        <div>
          <strong><?php echo _("Download Images Individually:"); ?></strong> <?php echo _("Click \"Download Page\" links below each preview to save pages as images."); ?>
        </div>
        </li>
        <li class="d-flex align-items-start">
        <div class="step-icon bg-primary text-white rounded-circle flex-shrink-0 me-3">
          <i class="bi bi-file-zip fs-3"></i>
        </div>
        <div>
          <strong><?php echo _("Download All Images at Once:"); ?></strong> <?php echo _("Want the whole set? Save time by clicking the \"Download All as ZIP\" button. This will download all your converted images packed neatly into a single ZIP file."); ?>
        </div>
        </li>
        <li class="d-flex align-items-start">
        <div class="step-icon bg-primary text-white rounded-circle flex-shrink-0 me-3">
          <i class="bi bi-stars fs-3"></i>
        </div>
        <div>
          <strong><?php echo _("Explore PDF Converter Tools"); ?></strong> <?php echo _("Done converting? Don’t stop there! You can also explore other handy features like converting your  into editable Text, Word documents, or Excel spreadsheets — all available right here, free and easy to use."); ?>
        </div>
        </li>
      </ol>
      </div>
    </div>
  </div>
</section>

  <!-- FAQ Section -->
  <section id="faq" class="container py-5 pdf-faq-section">
  <h3 class="text-center fw-semibold mb-4"><?php echo _("Frequently Asked Questions About PDF to Image Converter"); ?></h3>
  <p class="text-center mb-4"><?php echo _("Have questions about converting  to images? Browse our FAQ to learn how our PDF to Image Converter works, supported file types, troubleshooting tips, and expert advice to optimize your conversions. Need more help? Our support team is ready to assist you!"); ?></p>
  <div class="accordion" id="faqAccordion">
    
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq-heading-1">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1">
          <?php echo _("What file formats are supported for upload to the PDF to Image Converter?"); ?>
        </button>
      </h2>
      <div id="faq-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-heading-1" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            <?php echo _("Currently, we support only PDF files for upload. Simply upload your PDF and convert it into high-quality image formats like PNG or JPG."); ?>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="faq-heading-2">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="false" aria-controls="faq-collapse-2">
            <?php echo _("How can I download all converted images from my PDF at once?"); ?>
        </button>
      </h2>
      <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-heading-2" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            <?php echo _("After your PDF is uploaded and processed, click the 'Download All as ZIP' button to save all pages as individual PNG images inside a single ZIP file."); ?>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="faq-heading-3">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="false" aria-controls="faq-collapse-3">
            <?php echo _("Can I convert my PDF to other formats besides images?"); ?>
        </button>
      </h2>
      <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-heading-3" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            <?php echo _("Yes! In addition to converting PDF to image (PNG, JPG), our tool also supports converting  into editable formats like Word, Excel, and Text. Visit our Features section for full details."); ?>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="faq-heading-4">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="false" aria-controls="faq-collapse-4">
            <?php echo _("Is there a limit to the PDF file size I can upload?"); ?>
        </button>
      </h2>
      <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-heading-4" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            <?php echo _("Our PDF to Image Converter currently supports PDF files up to 50MB in size. For larger documents, consider compressing your PDF before uploading."); ?>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="faq-heading-5">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="false" aria-controls="faq-collapse-5">
            <?php echo _("Are my uploaded  and converted images safe and private?"); ?>
        </button>
      </h2>
      <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-heading-5" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            <?php echo _("Yes, your privacy is our priority. All uploaded  and converted files are automatically deleted from our servers, ensuring your data remains secure and confidential."); ?>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="faq-heading-6">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="false" aria-controls="faq-collapse-6">
            <?php echo _("Do I need to install any software to use the PDF to Image Converter?"); ?>
        </button>
      </h2>
      <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-heading-6" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            <?php echo _("No software installation required! Our PDF to Image tool is 100% online. You can convert  to images directly in your browser with no downloads needed."); ?>
        </div>
      </div>
    </div>

  </div>
</section>


  <?php
}



?>
