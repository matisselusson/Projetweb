
function check(titre,longeur,error_text) {
    // On veut vérifier les champs du formulaire
    //const titre = document.querySelector('#titre');
    // .value récupère la valeur d'un input

    if(titre.value.length <longeur) {

        error_text.classList.remove('titanic');
        return 1;
    } else {
        error_text.classList.add('titanic');
        return 0;
    }
}

const f = document.querySelector('#projectForm');


function trierTableau() {
  const filtreStatus   = document.getElementById('status_trie');
  const filtreClient = document.getElementById('client_trie');

  // Si les selects de filtre n'existent pas sur cette page, on sort
  if (!filtreStatus) return;

  const valStatus   = filtreStatus.value.toLowerCase();
  const valClient = filtreClient.value.toLowerCase();
  const lignes = document.querySelectorAll('.matable tbody tr');

  lignes.forEach(function (ligne) {
  // rappel cellules [0]=titre
    const cellules    = ligne.querySelectorAll('td');
    const statusLigne   = cellules[1].textContent.trim().toLowerCase();
    const clientLigne = cellules[2].textContent.trim().toLowerCase();

    const statusOK   = valStatus   === 'tout' || statusLigne.includes(valStatus);
    const clientOK = valClient === 'tout' || clientLigne.includes(valClient);

    if (statusOK && clientOK) {

        ligne.classList.remove('titanic');
    } else {
        ligne.classList.add('titanic');
    }

    
  });
}

document.getElementById('status_trie').addEventListener('change', trierTableau);
document.getElementById('client_trie').addEventListener('change', trierTableau);


