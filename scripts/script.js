// Code voor openklappen hamburger menu in nav

const menuButton = document.querySelector("#menuButton");
const hetMenu = document.querySelector("#menu");

menuButton.addEventListener("click", toggleMenu);

function toggleMenu() {
    hetMenu.classList.toggle("open");
}

// Selecteer de details elementen
const detailsElements = document.querySelectorAll('details');

// Voeg een event listener toe aan elk details element
detailsElements.forEach(details => {
    details.addEventListener('toggle', () => {
        // Selecteer de summary van het details element
        const summary = details.querySelector('summary');
        
        // Update de aria-expanded waarde op basis van de open/gesloten staat van details
        summary.setAttribute('aria-expanded', details.open);
    });
});

detailsElements.forEach(details => {
    details.addEventListener('toggle', () => {
        const summary = details.querySelector('summary');
        summary.setAttribute('aria-expanded', details.open);

        // Verplaats de focus naar het details element als het geopend is
        if (details.open) {
            details.focus();
        }
    });
});











// window.addEventListener(
//   "scroll",
//   () => {
//     document.body.style.setProperty(
//       "--scroll",
//       window.pageYOffset / (document.body.offsetHeight - window.innerHeight)
//     );
//   },
//   false
// );