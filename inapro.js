// After receiving a successful response from the server
// Redirect to the welcome page
window.location.href = 'welcome.html';
// server.js

const express = require('express');
const path = require('path'); // Node.js built-in module for working with file paths

const app = express();
const PORT = process.env.PORT || 3000;

// Serve static files from the 'public' directory
app.use(express.static(path.join(__dirname, 'public')));

// Define a route to serve the inapro.html file
app.get('/inapro', (req, res) => {
    res.sendFile(path.join(__dirname, 'public', 'inapro.html'));
});

app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${5500}`);
});
