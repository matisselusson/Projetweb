function check(titre, longeur, error_text) {

  if (titre.value.length < longeur) {
    error_text.classList.remove('titanic');
    return 1;
  } else {
    error_text.classList.add('titanic');
    return 0;
  }
}

const f = document.querySelector('#projectForm');

f.addEventListener("submit", function(event) {
  event.preventDefault();

  const description = document.querySelector('#description');
  const description_error = document.querySelector('#description_error');
  const title = document.querySelector('#title');
  const title_error = document.querySelector('#title_error');
  const assignes = document.querySelector('#assignes');
  const assignes_error = document.querySelector('#assignes_error');

  let nb_errors = 0;
  nb_errors += check(description, 10, description_error);
  nb_errors += check(title, 3, title_error);
  nb_errors += check(assignes, 1, assignes_error);

  console.log("nb_errors : ", nb_errors);

  if (nb_errors === 0) {
    const status = document.querySelector('#status');
    const priority = document.querySelector('#priority');

    const tableBody = document.querySelector(".matable tbody");

    const row = `
      <tr>
        <td>${title.value}</td>
        <td class="priority">${priority.value}</td>
        <td class="status">${status.value}</td>
        <td>${assignes.value}</td>
        <td><a href="Ticket0001.html">Edit</a></td>
      </tr>
    `;
    tableBody.insertAdjacentHTML('beforeend', row);
    f.reset();
  }
});

function trierTableau() {
  const filtreStatus = document.getElementById('status_trie');
  const filtrePriority = document.getElementById('priority_trie');

  // Si les selects de filtre n'existent pas sur cette page, on sort
  if (!filtreStatus) return;

  const valStatus = filtreStatus.value.toLowerCase();
  const valPriority = filtrePriority.value.toLowerCase();
  const lignes = document.querySelectorAll('.matable tbody tr');

  lignes.forEach(function(ligne) {

    const cellules = ligne.querySelectorAll('td');
    const priorityLigne = cellules[1].textContent.trim().toLowerCase();
    const statusLigne = cellules[2].textContent.trim().toLowerCase();

    const statusOK = valStatus === 'tout' || statusLigne.includes(valStatus);
    const priorityOK = valPriority === 'tout' || priorityLigne.includes(valPriority);

    if (statusOK & priorityOK) {
      ligne.classList.remove('titanic');
    } else {
      ligne.classList.add('titanic');
    }
  });
}

document.getElementById('status_trie').addEventListener('change', trierTableau);
document.getElementById('priority_trie').addEventListener('change', trierTableau);
