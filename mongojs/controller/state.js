
const  {State}  = require("../model/state");
//const State = require("../model/state");
const client = require("../bdd/connect");
//const Status = require("../model/status");


const ajouterState = async (req, res) => {

    res.send("tu est sur la bonne voie");
    try {
        let state = new State(
            req.body.name,
             req.body.vue
            );

       let result = await client.bd()
       .collection("statistique")
       .insertOne(ajouterState);

        res.status(200).json(result);
        
    } catch (error) {

        console.error(error);
        res.status(500).json(error);
    }
}

  
module.exports = { ajouterState };