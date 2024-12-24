document.getElementById('change-pic-button').addEventListener('click', function() {
    document.getElementById('upload-pic').click();
});

document.getElementById('upload-pic').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('profile-pic').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});

document.querySelector('.profile-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    alert(`Username: ${username}\nEmail: ${email}\nPassword: ${password}`);
});
