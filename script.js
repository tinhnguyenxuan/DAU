// This is optional, but it will prevent the user from uploading non-allowed files
const fileInput = document.querySelector('input[type="file"]');
fileInput.addEventListener('change', () => {
  const fileName = fileInput.value.split('\\').pop();
  const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

  if (!allowedExtensions.exec(fileName)) {
    alert('Please upload a file with a .jpg, .jpeg, .png, or .gif extension.');
    fileInput.value = '';
  }
});
