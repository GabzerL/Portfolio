const curseur = document.getElementById('curseur');
const anneau  = document.getElementById('curseurAnneau');
let sourisX = 0, sourisY = 0, anneauX = 0, anneauY = 0;

document.addEventListener('mousemove', e => {
  sourisX = e.clientX;
  sourisY = e.clientY;
  curseur.style.left = sourisX + 'px';
  curseur.style.top  = sourisY + 'px';
});

function animerAnneau() {
  anneauX += (sourisX - anneauX) * 0.12;
  anneauY += (sourisY - anneauY) * 0.12;
  anneau.style.left = anneauX + 'px';
  anneau.style.top  = anneauY + 'px';
  requestAnimationFrame(animerAnneau);
}
animerAnneau();

const observateurReveal = new IntersectionObserver(entrees => {
  entrees.forEach((entree, index) => {
    if (entree.isIntersecting) {
      setTimeout(() => entree.target.classList.add('visible'), index * 60);
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('.a-reveler').forEach(el => observateurReveal.observe(el));

const observateurCompetences = new IntersectionObserver(entrees => {
  entrees.forEach(entree => {
    if (entree.isIntersecting) {
      entree.target.querySelectorAll('.competence').forEach((item, i) => {
        setTimeout(() => {
          const pct = item.style.getPropertyValue('--pourcentage');
          item.style.setProperty('--pourcentage', '0%');
          item.offsetHeight;
          item.style.transition = 'background 0.3s';
          item.style.setProperty('--pourcentage', pct);
        }, i * 150);
      });
    }
  });
}, { threshold: 0.3 });

const grilleCompetences = document.querySelector('.grille-competences');
if (grilleCompetences) observateurCompetences.observe(grilleCompetences);