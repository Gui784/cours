// La const qui récupère la class .hamburger
const toggler = document.querySelector(".hamburger");

// Fonction const
const toggleButton = e => {
    // Animation du boutton
    toggler.classList.toggle("open");
};

// Au click lance la const toggleButton
toggler.addEventListener("click", toggleButton);
