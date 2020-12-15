document.addEventListener('DOMContentLoaded', function(){

    // On cible le bouton
    let button = $('#my-button');
    // On écoute si quelqu'un clique sur le bouton
    button.on('click', function () {

        // On cherche un champ 'first_name'
        let input = $('#comment');
        // On récupère la valeur du champ
        let firstName = input.val();

        // On affiche la valeur dans la balise p 'text'
        $('#text').text(comment);
    });

});