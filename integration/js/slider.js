// const => une constante
const slider = {
    init: function() {
        // générer un bouton par commentaire
            // récupérer les commentaires
        let commentList = document.querySelectorAll('.slider__comments li');
        console.log(commentList);
            // pour chaque commentaire, générer un bouton
        const controlsContainer = document.querySelector('.slider__controls');
        for (const comment of commentList) {
            // créer le bouton
            const newButton = document.createElement('div');
            newButton.classList.add('slider__nav-button');
            newButton.dataset.commentId = comment.dataset.commentId;
            controlsContainer.appendChild(newButton);
            // nouveaux écouteurs => au clic sur un bouton, on scrolle vers le commentaire correspondant
            newButton.addEventListener('click', slider.handleButtonClick)
        }

        // toutes les 10 secondes, on passe au commentaire suivant
    },
    handleButtonClick: function(event) {
        // on récupère le dataset comment-id sur le bouton cliqué
        const commentId = event.currentTarget.dataset.commentId;
        // on déclenche le scroll
        slider.scrollToComment(commentId);
    },
    scrollToComment: function(commentId) {
        // récupérer la liste des commentaires dans le DOM (ul)
        const commentListContainer = document.querySelector('.slider__comments');
        // faire scroller la liste des commentaire
            // définir la coordonée en X à atteindre
                // définir le commentaire cible => à partir de l'événement
        const targetComment = document.querySelector('.slider__comments li[data-comment-id="'+ commentId +'"');
                // récupérer la position en X de la cible
        const targetXPosition = targetComment.offsetLeft;
                // faire le scroll
        commentListContainer.scroll(targetXPosition, 0);
    }
}


document.addEventListener('DOMContentLoaded', slider.init);