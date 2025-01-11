
const express = require('express');
const { ajouterState } = require('../controller/state');
const router = express.Router();

router.get('/vue').post(ajouterState);

module.exports = router;