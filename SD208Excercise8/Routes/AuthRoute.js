const express = require('express');
const router = express.Router();    

const Routes = require('../Controllers/directController');
router.get('/', Routes.homepage)
router.post('/register', Routes.register)
router.post('/login', Routes.login)
module.exports = router;