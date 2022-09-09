const divContainer = document.getElementById('popup-container');
const invalidTrailer = document.querySelectorAll('.invalid-trailer-btn');

invalidTrailer.forEach(e => {
    e.addEventListener('click', () => {
        createPopup('Não há trailer para este filme. Acesse o site da Cinemark para mais informações a cerca dos filmes em cartaz.');
    });
});

divContainer.addEventListener('click', () => removePopup());

function createPopup(message) {
    const paragraph = document.createElement('p');
    paragraph.classList.add('popup-message');
    
    const textNode = document.createTextNode(message);
    paragraph.appendChild(textNode);
    
    divContainer.classList.remove('hidden');
    divContainer.classList.add('flex');
    divContainer.appendChild(paragraph);

    window.disableScroll();
}

function removePopup() {
    divContainer.removeChild(divContainer.children[0]);
    divContainer.classList.remove('flex');
    divContainer.classList.add('hidden');

    window.enableScroll();
}


const scrollKeys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
  e.preventDefault();
}

function preventDefaultKeys(e) {
  if (keys[e.keyCode]) {
    preventDefault(e);
    return false;
  }
}

const wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

function disableScroll() {
  window.addEventListener('DOMMouseScroll', preventDefault, false);
  window.addEventListener(wheelEvent, preventDefault, { passive: false });
  window.addEventListener('touchmove', preventDefault, { passive: false });
  window.addEventListener('keydown', preventDefaultKeys, false);
}

function enableScroll() {
  window.removeEventListener('DOMMouseScroll', preventDefault, false);
  window.removeEventListener(wheelEvent, preventDefault, { passive: false }); 
  window.removeEventListener('touchmove', preventDefault, { passive: false });
  window.removeEventListener('keydown', preventDefaultKeys, false);
}