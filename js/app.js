class Aliment {
    constructor(nom, charge) {
        this.nom = nom;
        this.charge = charge;
    }
}


fetch('../data.json')
    .then(response => response.json())
    .then(data => {
        console.log(data);
        var i;
        let nbSelection = 0;
        let premierAliment = 0;
        let deuxiemeAliment = 0;
        let troisiemeAliment = 0;
        let total = 0;
        for( let i = 0; i < data.length; i++) {
            // Création liste des aliments
            var iDiv = document.createElement('div');
            iDiv.id = ('id' + i);
            iDiv.className = ('aliment');
            document.getElementById('aliments').appendChild(iDiv);
            document.getElementById('id' + i).innerHTML = 'Aliment:' + data[i].aliment
            + '<br>Charge Glycémique:' + data[i].charge;

            // Création bouton sélection aliments
            var iButton = document.createElement('button');
            iButton.id = ('idButton' + i);
            iButton.className = ('boutonAliment');
            var textButton = document.createTextNode('Sélectionner');
            iButton.appendChild(textButton);
            document.getElementById('aliments').appendChild(iButton);

            sauvegarde = () => {
                let nom = data[i].aliment;
                let charge = data[i].charge;
                let aliment = new Aliment(nom, charge)
                console.log(aliment)
            }
            
            // fonction selection d'aliments
            selectionner = () => {
                console.log(nbSelection)
                if( nbSelection === 0) {
                    document.getElementById('selec1').innerHTML = 'Aliment:' + data[i].aliment
                    + '<br>Charge Glycémique:' + data[i].charge
                    nbSelection++;
                    premierAliment = data[i].charge;
                    console.log(premierAliment);
                }
                else if( nbSelection === 1) {
                    document.getElementById('selec2').innerHTML = 'Aliment:' + data[i].aliment
                    + '<br>Charge Glycémique:' + data[i].charge
                    nbSelection++;
                    deuxiemeAliment = data[i].charge;
                    console.log(deuxiemeAliment);

                }
                else if( nbSelection === 2) {
                    document.getElementById('selec3').innerHTML = 'Aliment:' + data[i].aliment
                    + '<br>Charge Glycémique:' + data[i].charge
                    nbSelection++;
                    troisiemeAliment = data[i].charge;
                    console.log(troisiemeAliment);
                }
                else(
                    premierAliment = '',
                    deuxiemeAliment = '',
                    troisiemeAliment = '',
                    alert(`Trop d'éléments sélectionnés`)
                )
            };
            // fonction suppr elements sélectionnés
            btnDelete = () => {
                document.getElementById('selec1').innerHTML = '';
                document.getElementById('selec2').innerHTML = '';
                document.getElementById('selec3').innerHTML = '';
                nbSelection = 0;
            }

            

            calcul = () => {
                let total = +premierAliment + +deuxiemeAliment + +troisiemeAliment;
                console.log(total);
                document.getElementById('total').innerHTML = 'La Charge Glycémique du repas est de:' + ' ' + total; 
            }

            var boutonAjouter = document.getElementById('idButton' + i).addEventListener('click', selectionner);
            var boutonSauvegarder = document.getElementById('idButton' + i).addEventListener('click', sauvegarde);

            var boutonRemove = document.getElementById('remove').addEventListener('click', btnDelete);
            var calcul = document.getElementById('calcul').addEventListener('click', calcul)
        }
    })