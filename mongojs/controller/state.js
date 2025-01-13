
const  {State}  = require("../model/state");
//const State = require("../model/state");
const client = require("../bdd/connect");
//const Status = require("../model/status");


const ajouterState = async (req, res) => {
    try {
        let state = new State(
            req.body.name,
             req.body.vue
            );

       let result = await client.bd()
       .collection("statiqtique")
       .insertOne(state);

        res.status(200).json(result);
        
    } catch (error) {

        console.error(error);
        res.status(500).json(error);
    }
}

  
module.exports = { ajouterState };