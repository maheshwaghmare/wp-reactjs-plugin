import React from 'react';
import ReactDOM from 'react-dom';
import HelloText from '../components/hello-world.jsx';

document.addEventListener('DOMContentLoaded', function () {
    ReactDOM.render(HelloText, document.getElementById('root'));
});