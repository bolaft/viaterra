// Attente du chargement de la page
window.onload=function() {
    // écoute du clic
    // Récupère la div parent de l'image qui nous intéresse
    // Récupère l'image qui nous intéresse
    // Écouteur du clic sur l'image
    document.getElementById("ajout_simple_digital").getElementsByTagName("img")[0].addEventListener("click", remplissage_digital, false);
}

function remplissage_digital() {
    // Radio bouton 
    // 
    // Modèle          ajout_simple_metatag_modele
    // Prix            ajout_simple_metatag_prix
    // Titre/Tagline   ajout_simple_metatag_titre
    // 
    // "Non" coché
    document.getElementById("ajout_simple_metatag_modele").getElementsByTagName('input')[1].checked = true;
    document.getElementById("ajout_simple_metatag_prix").getElementsByTagName('input')[1].checked = true;
    document.getElementById("ajout_simple_metatag_titre").getElementsByTagName('input')[1].checked = true;
    
    // Remplissage des metatags par langue
    // Anglais
    document.getElementById("metatags_title1").getElementsByTagName('input')[0].value = 'For sale licensed for commecrial or personal use.';
    document.getElementById("metatags_description1").getElementsByTagName('textarea')[0].value = 'order online this high resolution digital photo (JPEG) of a damselfly, licensed for commercial or personal use';
    // Français
    document.getElementById("metatags_title4").getElementsByTagName('input')[0].value = 'En vente avec licence commerciale ou personnelle.'; 
    document.getElementById("metatags_description4").getElementsByTagName('textarea')[0].value = 'photo digitale (JPEG) à haute résolution d\'une libellule, en vente sous licence commerciale ou personnelle';
    // Espagnol
    document.getElementById("metatags_title5").getElementsByTagName('input')[0].value = 'Para vender con comercial o personal licencia.';
    document.getElementById("metatags_description5").getElementsByTagName('textarea')[0].value = 'foto digital (JPEG) de alta resolucion de libelula, para vender con licencia comercial o personal';
    // Allemand
    document.getElementById("metatags_title6").getElementsByTagName('input')[0].value = 'Zu verkaufen mit kommerziel oder privat Lizenz.';
    document.getElementById("metatags_description6").getElementsByTagName('textarea')[0].value = 'Hoch Auflösung digitale Fotografie (JPEG) von einer Libelle, zu verkaufen mit kommerziel oder privat Lizenz';

    
    
	// Coloration ergonomique des champs vérifiés
	var tableau = document.getElementsByClassName("green_after_check");
	for(var i=0;i<tableau.length;i++)
	{
		tableau[i].style.backgroundColor = '#599659';
	}
	var tableau = document.getElementsByClassName("yellow_after_check");
	for(var i=0;i<tableau.length;i++)
	{
		tableau[i].style.backgroundColor = '#DBAB2E';
	}
    
    
     
}