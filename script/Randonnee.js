
function f(ID,Direction,_dateDepart,_dateRetour,Prix,NBparticipants) {
    var legend = document.getElementById("legend1");
    legend.innerText = "Modifier Randonnee";
    var op = document.getElementById("op");
    op.value = "update";
    var id = document.getElementById("num");
    id.value = ID;
    var direction = document.getElementById("direction");
    direction.value = Direction;
    var dateDepart = document.getElementById("dateDepart");
    dateDepart.value = _dateDepart;
    var dateRetour  = document.getElementById("dateRetour");
    dateRetour .value = _dateRetour;
    var prix = document.getElementById("prix");
    prix.value =Prix;
    var nbParticipants  = document.getElementById("nbParticipants");
    nbParticipants.value = NBparticipants;
    
    var save = document.getElementById("save");
    save.value ="Modifier";
    
    console.log("Vous avez cliqué sur modifier");

}



