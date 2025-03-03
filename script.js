// Create star effect
function createStar() {
    const star = document.createElement('div');
    star.classList.add('star');
    star.style.left = Math.random() * 100 + 'vw';
    star.style.top = Math.random() * 100 + 'vh';
    star.style.setProperty('--duration', Math.random() * 3 + 2 + 's');
    document.body.insertBefore(star, document.body.firstChild);

    setTimeout(() => {
        star.remove();
    }, 5000);
}

// Generate effects at intervals
setInterval(createStar, 100);

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const statusMessage = document.getElementById('statusMessage');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(form);

        fetch('process_message.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if (data === 'success') {
                statusMessage.textContent = 'Pesan berhasil terkirim!';
                statusMessage.style.color = 'green';
                form.reset();
            } else {
                statusMessage.textContent = 'Gagal mengirim pesan. Silakan coba lagi.';
                statusMessage.style.color = 'red';
            }
        })
        .catch(error => {
            statusMessage.textContent = 'Terjadi kesalahan. Silakan coba lagi.';
            statusMessage.style.color = 'red';
        });
    });
}); 