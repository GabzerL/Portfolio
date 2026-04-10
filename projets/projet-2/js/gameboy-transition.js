function initGameBoyTransition() {
    console.log('Initialisation de la transition');
    
    // Créer l'élément de transition s'il n'existe pas
    if (!document.querySelector('.gameboy-transition')) {
        const transition = document.createElement('div');
        transition.className = 'gameboy-transition opening';
        transition.style.opacity = '1';
        
        // Créer les 4 volets FERMÉS
        for (let i = 0; i < 4; i++) {
            const shutter = document.createElement('div');
            shutter.className = 'shutter';
            shutter.style.height = '100%';
            transition.appendChild(shutter);
        }
        
        document.body.appendChild(transition);
        console.log('Transition créée avec volets fermés');
        
        // Lancer l'animation d'ouverture après un petit délai
        setTimeout(() => {
            console.log('Début animation ouverture');
            // L'animation est déjà déclenchée par la classe 'opening'
            
            setTimeout(() => {
                console.log('Fin animation ouverture');
                transition.classList.remove('opening');
                transition.style.opacity = '0';
                transition.style.pointerEvents = 'none';
            }, 750);
        }, 50);
    }

    // Intercepter les clics sur les liens de navigation
    const links = document.querySelectorAll('a[href$=".php"]');
    console.log('Liens trouvés:', links.length);
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Ne pas appliquer la transition pour les liens externes
            if (href && !href.startsWith('http') && href.endsWith('.php')) {
                e.preventDefault();
                console.log('Clic sur lien:', href);
                
                const transition = document.querySelector('.gameboy-transition');
                const shutters = transition.querySelectorAll('.shutter');
                
                // Réinitialiser les volets à 0 et supprimer l'animation d'ouverture
                transition.classList.remove('opening');
                transition.style.pointerEvents = 'all';
                shutters.forEach(shutter => {
                    shutter.style.height = '0';
                });
                
                // Forcer le reflow
                void transition.offsetWidth;
                
                transition.style.opacity = '1';
                console.log('Début animation fermeture');
                transition.classList.add('active');
                
                // Attendre la fin de l'animation avant de changer de page
                setTimeout(() => {
                    console.log('Changement de page');
                    window.location.href = href;
                }, 550);
            }
        });
    });
}

document.addEventListener('DOMContentLoaded', initGameBoyTransition);