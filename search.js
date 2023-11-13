// Chargement de la bibliothèque PDF.js
import PDFJS from 'pdfjs-dist/build/pdf.min.js';

// Création du lecteur PDF
var pdf = new PDFJS.PDFDocument({
    url: 'COURS SUITES.pdf'
});

var pdf = new PDFJS.PDFDocument({
    url: 'fonctionContinue.pdf'
});
// Chargement du document PDF
pdf.onLoad = function() {
    // Affichage du document PDF
    pdf.getPage(1).then(function(page) {
        var viewport = page.getViewport({scale: 1});

        // Création de l'élément canvas
        var canvas = document.createElement('canvas');
        canvas.width = viewport.width;
        canvas.height = viewport.height;

        // Création du contexte graphique
        var context = canvas.getContext('2d');

        // Dessin du document PDF sur le canvas
        context.drawImage(page.getImage(), 0, 0, viewport.width, viewport.height);

        // Ajout du canvas à la page
        document.body.appendChild(canvas);
    });
};
