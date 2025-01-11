
class State {
    constructor(name, vue) {
        this.name = name;
        this.vue = vue;
    }
}   

module.exports ={ State};


/*const mongoose = require("mongoose");

// definition de la structure de la collection state
const state1Schema = mongoose.Schema({

    name : String,
    vue : Number
});

const state2Schema = mongoose.Schema({

    name : String,
    vue : Number
});

// creation du model pour l'interaction avec la collection state
const Model = mongoose.model("State", state1Schema);


// exportation du model
module.exports = Model;*/
