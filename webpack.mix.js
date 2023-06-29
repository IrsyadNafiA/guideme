const mix = require('laravel-mix')
const tailwindcss = require('tailwindcss');
const path = require('path')

mix.js("resources/js/app.js", "public/js")
  .postCss("resources/css/app.css", "public/css", [
    require("tailwindcss"),
  ]);
