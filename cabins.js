document.addEventListener('DOMContentLoaded', () => {
  const inclusionsSelect = document.getElementById('inclusions');
  
  inclusionsSelect.addEventListener('mousedown', (event) => {
    // Prevent default behavior to allow for multi-selection without holding CTRL
    event.preventDefault();
    
    let option = event.target;
    
    if (option.tagName === 'OPTION') {
      const value = option.value;
      option.selected = !option.selected;
      
      // Trigger a change event since we are preventing the default behavior
      let changeEvent = new Event('change');
      inclusionsSelect.dispatchEvent(changeEvent);
    }
  }, false);
  
  inclusionsSelect.addEventListener('change', (event) => {
    let selectedOptions = Array.from(event.target.selectedOptions).map(option => option.value);
    console.log('Selected inclusions:', selectedOptions);
  });
});
