
const form  = document.getElementById("lang-form");
const select = document.getElementById("language");
const selecttheme = document.getElementById("theme");
const title = document.getElementById("paramtitle");
const desclanguage   = document.getElementById("desc");
const desctheme   = document.getElementById("desctheme");

const textslanguage = {
    fr: {
      title: "Paramètres de profil",
      desc:  "Langue par défaut : Français."
    },
    en: {
      title: "Profile settings",
      desc:  "Default language: English."
    },
    de: {
      title: "Profileinstellungen",
      desc:  "Standardsprache: Deutsch."
    },
    es: {
      title: "Ajustes del perfil",
      desc:  "Idioma predeterminado: Español."
    }
  };
const textstheme={
    
    light:    "Thème actuel : Clair.",
    dark:     "Thème actuel : Sombre.",
    contrast: "Thème actuel : Contraste élevé."

  }


  form.addEventListener("submit", function(event) {
    event.preventDefault(); 
    const lang = select.value;
    const theme=selecttheme.value;
    title.textContent  = textslanguage[lang].title;
    desclanguage.textContent  = textslanguage[lang].desc;
    desctheme.textContent=textstheme[theme];
  });
