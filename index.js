// Menambahkan efek animasi ke hero section saat scroll
const hero = document.querySelector('.hero');

window.addEventListener('scroll', function() {
  const scrollPosition = window.scrollY;
  hero.style.opacity = 1 - scrollPosition / 200;
});

// Membuat efek hover untuk menu navigasi
const navLinks = document.querySelectorAll('nav ul li a');

navLinks.forEach(link => {
  link.addEventListener('mouseover', function() {
    this.style.backgroundColor = '#f0f0f0';
  });

  link.addEventListener('mouseout', function() {
    this.style.backgroundColor = '';
  });
});

// Menambahkan efek animasi pop-up ke tombol "Baca Selengkapnya"
const readMoreBtn = document.querySelector('.about .read-more');

readMoreBtn.addEventListener('click', function() {
  const aboutSection = document.querySelector('.about');
  aboutSection.classList.add('open');

  setTimeout(function() {
    aboutSection.classList.remove('open');
  }, 3000);
});
