// Fonction principale de tri
function trierTableau() {
  // Récupérer les valeurs de tous les selects
  const statusValue = document.getElementById('status_trie').value;
  const priorityValue = document.getElementById('priority_trie').value;
  const typeValue = document.getElementById('type_trie').value;
  const projetValue = document.getElementById('projet_trie').value;
  
  // Récupérer toutes les lignes du tableau (sauf l'en-tête)
  const tableau = document.querySelector('table tbody'); // Adapter le sélecteur selon votre HTML
  const lignes = Array.from(tableau.querySelectorAll('tr'));
  
  // Filtrer les lignes selon tous les critères
  lignes.forEach(ligne => {
    const cellules = ligne.querySelectorAll('td');
    
    // Adapter les index selon votre structure de tableau
    const statusCellule = cellules[0] ? cellules[0].textContent.trim().toLowerCase() : '';
    const priorityCellule = cellules[1] ? cellules[1].textContent.trim().toLowerCase() : '';
    const typeCellule = cellules[2] ? cellules[2].textContent.trim().toLowerCase() : '';
    const projetCellule = cellules[3] ? cellules[3].textContent.trim() : '';
    
    // Vérifier chaque critère
    const statusMatch = statusValue === 'tout' || statusCellule === statusValue.toLowerCase();
    const priorityMatch = priorityValue === 'tout' || priorityCellule === priorityValue.toLowerCase();
    const typeMatch = typeValue === 'tout' || typeCellule === typeValue.toLowerCase();
    
    // Pour le projet, vérifier si le texte de la cellule correspond au texte de l'option
    let projetMatch = projetValue === 'tout';
    if (!projetMatch) {
      // Récupérer le texte de l'option sélectionnée
      const selectProjet = document.getElementById('projet_trie');
      const optionSelectionnee = selectProjet.options[selectProjet.selectedIndex].text;
      projetMatch = projetCellule === optionSelectionnee || 
                    projetCellule.toLowerCase() === optionSelectionnee.toLowerCase();
    }
    
    // Afficher la ligne seulement si tous les critères correspondent
    if (statusMatch && priorityMatch && typeMatch && projetMatch) {
      ligne.style.display = '';
    } else {
      ligne.style.display = 'none';
    }
  });
}

// Ajouter les écouteurs d'événements sur tous les selects
document.getElementById('status_trie').addEventListener('change', trierTableau);
document.getElementById('priority_trie').addEventListener('change', trierTableau);
document.getElementById('type_trie').addEventListener('change', trierTableau);
document.getElementById('projet_trie').addEventListener('change', trierTableau);

// Tri initial au chargement de la page
document.addEventListener('DOMContentLoaded', trierTableau);