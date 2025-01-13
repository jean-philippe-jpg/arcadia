
const express = require('express');
const { ajouterState } = require('../controller/state');
const router = express.Router();

router.route("/vue").post(ajouterState);

module.exports = router;