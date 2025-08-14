// Username verification client logic
// - Validates input is not empty
// - Sends AJAX POST to server for verification
// - Displays server response as success (green) or error (red)

const submitButton = document.getElementById('submitbtn'); 
const usernameInput = document.getElementById('username');
const messageElement = document.getElementById('message');

/**
 * Update feedback message area.
 * @param {string} text
 * @param {string} color
 */
function showMessage(text, color) {
  messageElement.textContent = text;
  messageElement.style.color = color;
}

submitButton.addEventListener('click', function () {
  const username = usernameInput.value.trim();

  // Guard: empty username input
  if (!username) {
    showMessage('Error: Username cannot be empty', 'red');
    return;
  }

  // Prepare and send AJAX request
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'info.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        const responseText = xhr.responseText;
        const isVerified = responseText === 'Verified';
        showMessage(responseText, isVerified ? 'green' : 'red');
      } else {
        showMessage('Server error', 'red');
      }
    }
  };

  xhr.send('username=' + encodeURIComponent(username));
});
