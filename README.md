# WP ReactJs Plugin

A simple Hello World WordPress Plugin build with React JS.

![WP ReactJs Plugin](https://i.imgur.com/WCvumFo.png)

## Getting Started

Before start you need to setup the Node.

#### Install plugin with zip

- Download the plugin **WP ReactJs Plugin** zip https://github.com/maheshwaghmare/wp-reactjs-plugin/archive/master.zip
- Goto `Plugins > Add New`
- Select `Upload` and upload the plugin.
- Click on activate.

OR

#### Install with Github

- Open CMD/Command Prompt
- Goto directory `/wp-content/`
- Type command `git clone https://github.com/maheshwaghmare/wp-reactjs-plugin.git` press Enter.
- Type command `cd wp-reactjs-plugin` press Enter.
- If you have WP CLI setup then activate plugin with command `wp plugin activate wp-reactjs-plugin` press Enter.
or
- Simply goto `Plugins` and activate **WP ReactJs Plugin**.

## Install All Dependancies

- Execute command `npm install` to install all the dependancies.

## How plugin works?

In plugin there are two main files.

- `/src/index.jsx` // React JS file.
- `/dist/bundle.js` // Compiled JS file.

The file `bundle.js` is auto generate from the `index.jsx` which is configure in the file `webpack.config.js`

## How to work on ReactJS?

Note that the changes from the the `index.jsx` does not reflect until we compile and build the `bundle.js`.

- Use command `npm run build` to compile and build.
- Use command `npm run dev` while development. This command auto compile and build the `bundle.js` after we save change from the file `index.jsx`.

See below video of debugging and testing video of above both commands:

[![Watch the video](https://img.youtube.com/vi/RuM-GZ5SlzU/maxresdefault.jpg)](https://youtu.be/RuM-GZ5SlzU)

## Credits!

- [@faisal-alvi](https://github.com/faisal-alvi/basic-react-files-for-wordpress)
# wp-starter-templates
