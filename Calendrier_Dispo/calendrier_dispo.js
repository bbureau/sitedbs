class Calendar
            {   
                constructor(domTarget,location, dispo)
                {   
                    // On récupère l'élément DOM passé en paramètre
                    domTarget = domTarget || '.calendar';
                    this.domElement = document.querySelector(domTarget);
                    this.location = location;
                    this.dispo = dispo;
                    // Renvoit une erreur si l'élément n'éxiste pas
                    if(!this.domElement) throw "Calendar - L'élément spécifié est introuvable";

                    // Liste des mois
                    this.monthList = new Array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aôut', 'septembre', 'octobre', 'novembre', 'décembre');

                    // Liste des jours de la semaine
                    this.dayList = new Array('dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi');

                    // Date actuelle
                    this.today = new Date();
                    this.today.setHours(0,0,0,0);

                    // Mois actuel
                    this.currentMonth = new Date(this.today.getFullYear(), this.today.getMonth(), 1);

                    // On créé le div qui contiendra l'entête de notre calendrier
                    let header = document.createElement('div');
                    header.classList.add('header');
                    this.domElement.appendChild(header);

                    // On créé le div qui contiendra les jours de notre calendrier
                    this.content = document.createElement('div');
                    this.domElement.appendChild(this.content);

                    // Bouton "précédent"
                    let previousButton = document.createElement('button');
                    previousButton.setAttribute('data-action', '-1');
                    previousButton.textContent = '\u003c';
                    header.appendChild(previousButton);

                    // Div qui contiendra le mois/année affiché
                    this.monthDiv = document.createElement('div');
                    this.monthDiv.classList.add('month');
                    header.appendChild(this.monthDiv);

                    // Bouton "suivant"
                    let nextButton = document.createElement('button');
                    nextButton.setAttribute('data-action', '1');
                    nextButton.textContent = '\u003e';
                    header.appendChild(nextButton);

                    // Action des boutons "précédent" et "suivant"
                    this.domElement.querySelectorAll('button').forEach(element =>
                    {
                        element.addEventListener('click', () =>
                        {
                            this.currentMonth.setMonth(this.currentMonth.getMonth() * 1 + element.getAttribute('data-action') * 1);
                            this.loadMonth(this.currentMonth);
                        });
                    });

                    // On charge le mois actuel
                    this.loadMonth(this.currentMonth);
                }

                loadMonth(date)
                {   
                    // On vide notre calendrier
                    this.content.textContent = '';

                    // On ajoute le mois/année affiché
                    this.monthDiv.textContent = this.monthList[date.getMonth()].toUpperCase() + ' ' + date.getFullYear();

                    // Création des cellules contenant le jour de la semaine
                    for(let i=0; i<this.dayList.length; i++)
                    {
                        let cell = document.createElement('span');
                        cell.classList.add('cell');
                        cell.classList.add('day');
                        cell.textContent = this.dayList[i].substring(0, 3).toUpperCase();
                        this.content.appendChild(cell);
                    }

                    // Création des cellules vides si nécessaire
                    for(let i=0; i<date.getDay(); i++)
                    {
                        let cell = document.createElement('span');
                        cell.classList.add('cell');
                        cell.classList.add('empty');
                        this.content.appendChild(cell);
                    }

                    // Nombre de jour dans le mois affiché
                    let monthLength = new Date(date.getFullYear(), date.getMonth()+1, 0).getDate();
                    
                    
                   
                    // Création des cellules contenant les jours du mois affiché
                    for(let i=1; i<=monthLength; i++)
                    {
                        let cell = document.createElement('span');
                        cell.classList.add('cell');
                        cell.textContent = i;
                        this.content.appendChild(cell);
                        var compteur_loc = 0
                        // Timestamp de la cellule
                        let timestamp = new Date(date.getFullYear(), date.getMonth(), i).getTime();
                        
                        for(var j=0; j< this.location.length; j++)
                        {   
                            var date1 = this.location[j], date1t = date1.split('-');
                            var Annee1 = parseInt(date1t[2], 10);
                            var Mois1 = parseInt(date1t[1],10);
                            var Jour1 =parseInt(date1t[0],10);
                           var date_loca1 = new Date(Annee1,Mois1-1,Jour1).getTime();

                           var date2 = this.location[j+1], date2t = date2.split('-');
                            var Annee2 = parseInt(date2t[2], 10);
                            var Mois2 = parseInt(date2t[1],10);
                            var Jour2 =parseInt(date2t[0],10);

                            
                            
                            var date_loca2 = new Date(Annee2,Mois2-1,Jour2).getTime();


                            if(timestamp<=date_loca2 && date_loca1<=timestamp)
                            {
                              compteur_loc = compteur_loc+1;  
                            }
                            j=j+1;

                        }
                        if(compteur_loc>=this.dispo)
                        {
                            cell.classList.add('indispo');
                        }
                        // Ajoute une classe spéciale pour aujourd'hui
                        if(timestamp == this.today.getTime())
                        {
                            cell.classList.add('today');
                        }
                    }
                }
            }

            // Création de notre objet



