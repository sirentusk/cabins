document.addEventListener('DOMContentLoaded', () => {
  // Handling multi-selection for inclusions
  const inclusionsSelect = document.querySelector('.inclusions');

  inclusionsSelect.addEventListener('mousedown', (event) => {
    event.preventDefault(); // Prevent default to enable custom behavior

    const option = event.target;
    if (option.tagName === 'OPTION') {
      option.selected = !option.selected; // Toggle the selected state

      // Dispatch a custom 'change' event to update the state
      const changeEvent = new Event('change', { bubbles: true });
      option.dispatchEvent(changeEvent);
    }
  });

  // Log selected options in Inclusions
  inclusionsSelect.addEventListener('change', () => {
    const selectedOptions = Array.from(inclusionsSelect.selectedOptions).map(option => option.value);
    console.log('Selected inclusions:', selectedOptions);
  });

  // Update custom file label with the selected file name
  const fileInput = document.querySelector('.imagebutton .image');
  fileInput.addEventListener('change', () => {
    const fileName = fileInput.files[0] ? fileInput.files[0].name : 'No file chosen';
    document.querySelector('.custom-file-label').textContent = fileName;
  });

    // Update custom file label with the selected file name
    const fileInput = document.querySelector('.imagebutton .image');
    const uploadButton = document.getElementById('uploadButton'); // Get the upload button
    fileInput.addEventListener('change', () => {
        const fileName = fileInput.files[0] ? fileInput.files[0].name : 'No file chosen';
        document.querySelector('.custom-file-label').textContent = fileName;

        // Change button color to green if a file is selected
        if (fileInput.files[0]) {
            uploadButton.style.backgroundColor = 'green';
            uploadButton.style.color = 'white';
        } else {
            // Reset to original color if no file is selected
            uploadButton.style.backgroundColor = '';
            uploadButton.style.color = '';
        }
    });
});
