
const { MongoClient, Db } = require('mongodb');
var client = null;

function connect(url,callback) {
  if (client = null) {

    client = new MongoClient(url)

    client.connect((erreur) => {
      if (erreur) {
       client=null;
         callback(erreur);
      }
      
      callback();
    });
 
} else {
    callback();
  }
}

function bd () {
  return new Db(client,"statistique");
}

function disconnect() {
  if (client) {
    client.close();
    client = null;
  }
}

module.exports = { connect, bd, disconnect };

