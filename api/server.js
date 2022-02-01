const express = require('express');
const app = express();
require('dotenv').config();
const PORT = process.env.PORT || 3001;

app.get('/', function (req, res) {
    res.sendStatus(200);
})

app.listen(PORT, () => {
    console.log(`Now listening to requests on port ${PORT}`);
});