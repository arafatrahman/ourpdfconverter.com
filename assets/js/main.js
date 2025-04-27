const dropZone = document.getElementById('drop-zone');
    const input = document.getElementById('pdf-upload');
    const previewArea = document.getElementById('preview-area');
    const downloadAllBtn = document.getElementById('download-all');
    const loadingText = document.getElementById('loading');
    let imageDataList = [];

    // Open file dialog on drop zone click
    dropZone.addEventListener('click', () => input.click());

    // Highlight drop zone on drag enter
    dropZone.addEventListener('dragenter', (e) => {
      e.preventDefault();
      dropZone.classList.add('bg-primary', 'bg-opacity-10');
    });

    // Remove highlight on drag leave or drop
    dropZone.addEventListener('dragleave', (e) => {
      e.preventDefault();
      dropZone.classList.remove('bg-primary', 'bg-opacity-10');
    });

    dropZone.addEventListener('dragover', (e) => {
      e.preventDefault(); // Necessary to allow drop
    });

    dropZone.addEventListener('drop', (e) => {
      e.preventDefault();
      dropZone.classList.remove('bg-primary', 'bg-opacity-10');
      const files = e.dataTransfer.files;
      if (files.length > 0) {
        handleFile(files[0]);
      }
    });

    input.addEventListener('change', (e) => {
      if (e.target.files.length > 0) {
        handleFile(e.target.files[0]);
      }
    });

    async function handleFile(file) {
      if (!file || file.type !== 'application/pdf') {
        alert('Please upload a valid PDF file.');
        return;
      }

      loadingText.textContent = 'Processing PDF...';
      imageDataList = [];
      previewArea.innerHTML = '';
      downloadAllBtn.classList.add('d-none');

      const reader = new FileReader();
      reader.onload = async function () {
        const typedarray = new Uint8Array(this.result);
        const pdf = await pdfjsLib.getDocument({ data: typedarray }).promise;

        for (let i = 1; i <= pdf.numPages; i++) {
          const page = await pdf.getPage(i);
          const viewport = page.getViewport({ scale: 2 });
          const canvas = document.createElement('canvas');
          const context = canvas.getContext('2d');
          canvas.height = viewport.height;
          canvas.width = viewport.width;

          await page.render({ canvasContext: context, viewport: viewport }).promise;
          const imgData = canvas.toDataURL('image/png');
          imageDataList.push(imgData);

          const col = document.createElement('div');
          col.className = 'col';
          col.innerHTML = `
            <div class="card h-100 shadow-sm">
              <img src="${imgData}" alt="Page ${i}" class="card-img-top rounded" />
              <div class="card-body text-center">
                <a href="${imgData}" download="page-${i}.png" class="btn btn-danger">Download Page ${i}</a>
              </div>
            </div>
          `;
          previewArea.appendChild(col);
        }

        downloadAllBtn.classList.remove('d-none');
        loadingText.textContent = '';
      };
      reader.readAsArrayBuffer(file);
    }

    downloadAllBtn.addEventListener('click', async () => {
      const zip = new JSZip();
      imageDataList.forEach((img, i) => {
        zip.file(`page-${i + 1}.png`, img.split(',')[1], { base64: true });
      });

      const blob = await zip.generateAsync({ type: 'blob' });
      const link = document.createElement('a');
      link.href = URL.createObjectURL(blob);
      link.download = 'pdf-images.zip';
      link.click();
    });