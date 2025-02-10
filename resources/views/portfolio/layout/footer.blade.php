<footer class="bg-info text-center text-dark py-3">
    <p>&copy; 2024 Bipana Chapain. All rights reserved.</p>
</footer>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" defer></script>
<script>
const roles = ['UI/UX Designer', 'Laravel Developer'];
let currentIndex = 0;

function rotateText() {
    const roleElement = document.getElementById('role');
    roleElement.textContent = roles[currentIndex];
    currentIndex = (currentIndex + 1) % roles.length; 
}


setInterval(rotateText, 2000);

rotateText();

</script>
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

