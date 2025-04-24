const input = document.getElementById('pdf-upload');
    const previewArea = document.getElementById('preview-area');
    const downloadAllBtn = document.getElementById('download-all');
    const loadingText = document.getElementById('loading');
    let imageDataList = [];

    input.addEventListener('change', async (e) => {
      const file = e.target.files[0];
      if (!file || file.type !== 'application/pdf') return;

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
          col.className = 'col-12 col-sm-6 col-md-4';
          col.innerHTML = `
            <div class="bg-white p-3 rounded shadow-sm text-center">
            <img src="${imgData}" alt="Page ${i}" class="img-fluid rounded mb-2"/>
            <a href="${imgData}" download="page-${i}.png" class="btn btn-outline-success btn-sm mt-2">Download Page ${i}</a>
            </div>
          `;
          previewArea.appendChild(col);
        }

        downloadAllBtn.classList.remove('d-none');
        loadingText.textContent = '';
      };
      reader.readAsArrayBuffer(file);
    });

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