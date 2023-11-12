document.addEventListener('DOMContentLoaded', () => {
  const inclusionsSelect = document.getElementById('inclusions');
  
  inclusionsSelect.addEventListener('mousedown', (event) => {
    // Prevent default behavior to allow for multi-selection in Inclusions
    event.preventDefault();
    
    let option = event.target;
    
    if (option.tagName === 'OPTION') {
      const value = option.value;
      option.selected = !option.selected;
      
      // Allow the new multi-select event
      let changeEvent = new Event('change');
      inclusionsSelect.dispatchEvent(changeEvent);
    }
  }, false);

  // Save the multi-select options in Inclusions
  inclusionsSelect.addEventListener('change', (event) => {
    let selectedOptions = Array.from(event.target.selectedOptions).map(option => option.value);
    console.log('Selected inclusions:', selectedOptions);
  });

  // Remove "No file chosen" default message by allowing customizing of file inputs
  document.getElementById('fileInput').addEventListener('change', function() {
    var fileName = this.files[0].name;
    document.querySelector('.custom-file-label').textContent = fileName;
  });
});
