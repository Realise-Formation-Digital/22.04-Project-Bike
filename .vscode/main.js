function Produit(id, designation, prix) {
    this.id= id;
    this.prix= prix;
    this.designation= designation;
    this.toString= function() {
      return this.designation + " "+ prix;
    }
}

var Produit= new Array();
Produit.push(new Produit(1, "casque", 200));
Produit.push(new Produit(2, "pompe velo", 20));
Produit.push(new Produit(3, "Reflecteur de rayon", 620));
Produit.push(new Produit(3, "porte telephone", 2000));
Produit.push(new Produit(3, "selle", 800));
Produit.push(new Produit(1, "sacoche velo", 200));
Produit.push(new Produit(2, "Chaise enfant", 20));
Produit.push(new Produit(3, "sonnette", 620));
Produit.push(new Produit(3, "velo electrique", 2000));
Produit.push(new Produit(3, "velo pliable", 800));
Produit.push(new Produit(1, "trousse à outil", 200));
Produit.push(new Produit(3, "velo de ville", 620));
Produit.push(new Produit(3, "velo electrique", 2000));
Produit.push(new Produit(3, "velo enfant", 800));
Produit.push(new Produit(3, "velo vintage", 800));
var panier= new Array();



function remplirProduit() {
      var cat= document.getElementById('cat');
    for (var i in Produit) {
        var e= document.createElement("option");
        e.value=i;
          var txt= document.createTextNode(Produit[i].designation);
          e.appendChild(txt);
        cat.appendChild(e);
    }
}

function ajouterCase(parent, txt) {
var e= document.createElement("td");
e.appendChild(document.createTextNode(txt));
parent.appendChild(e);
}

function calculerTotal() {
var tot= 0;
for (var p in panier) {
    tot+= panier[p].prix;
}
return tot;
}

function ajouter() {
      var cat= document.getElementById('cat');
    var sel= cat.options[cat.selectedIndex].value;
    var prod= Produit[sel];
    panier.push(prod);
    var ligne= document.createElement("tr");
      ajouterCase(ligne,prod.designation);
      ajouterCase(ligne,prod.prix);
    document.getElementById("pan").appendChild(ligne);
    document.getElementById("tot").innerHTML= calculerTotal();
}
select id="cat" multiple>
</select>
document.addEventListener(click, buy);
  remplirCatalogue();