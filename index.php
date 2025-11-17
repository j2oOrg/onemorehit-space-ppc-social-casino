<?php
// Serve the existing static homepage while letting Heroku detect the PHP buildpack.
readfile(__DIR__ . '/index.html');
