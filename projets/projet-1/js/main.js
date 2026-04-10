const nav = document.getElementById('nav');
window.addEventListener('scroll', () => {
  nav.style.background = window.scrollY > 60
    ? 'rgba(0,0,0,.85)'
    : 'rgba(0,0,0,.5)';
});

document.querySelectorAll('.hero .rv').forEach(el => {
  setTimeout(() => el.classList.add('on'), 100);
});

const obs = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      const delay = parseInt(e.target.dataset.d || 0);
      setTimeout(() => e.target.classList.add('on'), delay);
      obs.unobserve(e.target);
    }
  });
}, { threshold: 0.1, rootMargin: '0px 0px -30px 0px' });

document.querySelectorAll('.rv:not(.hero .rv)').forEach(el => obs.observe(el));

const cta = document.querySelector('.cta');
if (cta) {
  cta.addEventListener('mousemove', e => {
    const r = cta.getBoundingClientRect();
    const x = e.clientX - r.left - r.width / 2;
    const y = e.clientY - r.top - r.height / 2;
    cta.style.transform = `translate(${x * .15}px, ${y * .15}px) translateY(-2px)`;
  });
  cta.addEventListener('mouseleave', () => {
    cta.style.transform = '';
  });
}

document.querySelectorAll('.acard').forEach(card => {
  card.addEventListener('mousemove', e => {
    const r = card.getBoundingClientRect();
    const x = (e.clientX - r.left) / r.width - .5;
    const y = (e.clientY - r.top) / r.height - .5;
    card.style.transform = `scale(1.025) perspective(700px) rotateY(${x * 6}deg) rotateX(${-y * 4}deg)`;
  });
  card.addEventListener('mouseleave', () => {
    card.style.transform = '';
  });
});

document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const target = document.querySelector(a.getAttribute('href'));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth' });
    }
  });
});