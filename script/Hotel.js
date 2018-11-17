function Hotel(_id,_client,_numC,_nbrJ,_prix,) {
    var legend = document.getElementById("legend1");
    legend.innerText = "Modifier en Hotel";
    var op = document.getElementById("op");
    op.value = "update";
    var id = document.getElementById("num");
    id.value = _id;
    var Client = document.getElementById("client");
    Client.value = _client;
    var numC = document.getElementById("numC");
    numC.value = _numC;
    var nbrJ = document.getElementById("nbrJ");
    nbrJ.value = _nbrJ;
    var prix = document.getElementById("prix");
    prix.value = _prix;
    
    var save = document.getElementById("save");
    save.value ="Modifier";
    
    console.log("Vous avez cliqué sur modifier");

}

