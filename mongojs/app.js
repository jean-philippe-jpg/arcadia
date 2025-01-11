const express = require("express");
const { connect } = require("./bdd/connect");
const routeState = require("./route/state");
//const router = require("./route/state");
const app = express();

app.use(express.urlencoded({ extended: true }));
app.use(express.json());
app.use("/api/v1/state", routeState);

 connect("mongodb://127.0.0.1:27017/", (erreur) => {

    if (erreur) {
        console.error("Erreur de connexion à la base de données :", erreur);
       process.exit(-1);
    } else {
        console.log("Connexion à la base de données réussie !");
        app.listen(33006);
    console.log("Server started on port tu est sur la bonne voie");
    }
    });

app.listen(33006);
   


