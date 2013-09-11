// Attente du chargement de la page
window.onload=function() {
    // écoute du clic
    
    // Récupère la div parent de l'image qui nous intéresse
    var ajout_simple_digital = document.getElementById("ajout_simple_digital");
    
    // Récupère l'image qui nous intéresse
    var btn_digital = ajout_simple_digital.getElementsByTagName("img")[0];
    
    // Écouteur du clic sur la div
    // ajout_simple_digital.addEventListener("click", remplissage_digital, false);
    
    // Écouteur du clic sur l'image
    btn_digital.addEventListener("click", remplissage_digital, false);
       
    //  console.log(ajout_simple_prix_ht);
    // .style.display = "none";
    
    document.getElementById("ajout_simple_posters").getElementsByTagName("img")[0].addEventListener("click", function(){remplissage_digital("posters");}, false);
  
}

function remplissage_digital(param) {
    // Récupère la balise td parent de la balise input qui nous intéresse
    var ajout_simple_prix_ht = document.getElementById("ajout_simple_prix_ht");
    // Récupère la balise input HT
    var input_prix_ht = ajout_simple_prix_ht.getElementsByTagName('input')[0];
    // Remplissage de l'input HT
    input_prix_ht.value = '30';

    // Récupère la balise input TTC
    var ajout_simple_prix_ttc = document.getElementById("ajout_simple_prix_ttc");
    var input_prix_ttc = ajout_simple_prix_ttc.getElementsByTagName('input')[0];
    // Remplissage de l'input TTC
    input_prix_ttc.value = '30';
    
    // Récupère la balise parent de produits virtuels
    var ajout_simple_virtual = document.getElementById("ajout_simple_virtual");
    // Radio bouton Oui coché
    if(param=='posters'){
        ajout_simple_virtual.getElementsByTagName('input')[1].checked = true;
    }else{
        var input_products_virtual_oui = ajout_simple_virtual.getElementsByTagName('input')[0].checked = true;
    }
    // Radio bouton Non vide
    // var input_products_virtual_non = ajout_simple_virtual.getElementsByTagName('input')[1].checked = false;
    
    
    // Récupère la balise parent de livraison gratuite
    var ajout_simple_livraison_gratuite = document.getElementById("ajout_simple_livraison_gratuite");
    // Radio bouton Oui coché
    if(param=='posters'){
        ajout_simple_livraison_gratuite.getElementsByTagName('input')[1].checked = true;
    }else{
        var input_livraison_gratuite_oui = ajout_simple_livraison_gratuite.getElementsByTagName('input')[0].checked = true;
    }
    // Radio bouton Non vide
    // var input_livraison_gratuite_non = ajout_simple_livraison_gratuite.getElementsByTagName('input')[1].checked = false;
    // Radio bouton Spécial vide
    // var input_livraison_gratuite_special = ajout_simple_livraison_gratuite.getElementsByTagName('input')[2].checked = false;
    
    // Radio bouton  affichage quantite "Non" coché
    if(param=='posters'){
        document.getElementById("ajout_simple_quantite").getElementsByTagName('input')[0].checked = true;
    }else{
        document.getElementById("ajout_simple_quantite").getElementsByTagName('input')[1].checked = true;
    }
    
    // Input quantite de produit
    document.getElementById("ajout_simple_quantite_produit").getElementsByTagName('input')[0].value = '999';
       
    // Input référence produit
    if(param=='posters'){
        document.getElementById("ajout_simple_reference").getElementsByTagName('input')[0].value = document.getElementById("ajout_simple_poster_max_reference").value;
    }else{
        document.getElementById("ajout_simple_reference").getElementsByTagName('input')[0].value = document.getElementById("ajout_simple_photo_digital_max_reference").value;
    }
    
    // Pré-remplissage langage
    document.getElementById("ajout_simple_langages0").getElementsByTagName('textarea')[0].value = '<div style="text-align: center;">Butterflies, France<br />3180 x 2180 pixels - 1/500s - f5.1 - ISO n/a <br /><br /><br /></div>';
    document.getElementById("ajout_simple_langages1").getElementsByTagName('textarea')[0].value = '<div style="text-align: center;">Papillons, France<br />3180 x 2180 pixels - 1/500s - f5.1 - ISO n/a <br /><br /><br /></div>';
    document.getElementById("ajout_simple_langages2").getElementsByTagName('textarea')[0].value = '<div style="text-align: center;">Mariposas, Francia<br />3180 x 2180 pixels - 1/500s - f5.1 - ISO n/a <br /><br /><br /></div>';
    document.getElementById("ajout_simple_langages3").getElementsByTagName('textarea')[0].value = '<div style="text-align: center;">Schmetterlinge, Frankreich<br />3180 x 2180 pixels - 1/500s - f5.1 - ISO n/a <br /><br /><br /></div>';
    
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
