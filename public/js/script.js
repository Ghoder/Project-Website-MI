document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("navbar");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) { // Jika scroll lebih dari 50px
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".slide-in-right, .slide-in-left, .fade-in");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show"); // Tambahkan animasi saat masuk layar
            } else {
                entry.target.classList.remove("show"); // Hapus animasi saat keluar dari layar
            }
        });
    }, { threshold: 0.2 });

    elements.forEach(el => observer.observe(el));
});