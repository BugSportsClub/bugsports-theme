The actual theme is located in the bugsports-theme sub directory of the bugsports-theme repo.

Please see the README.md in the bugsports-theme subfolder for more information.

[![Build Status](https://travis-ci.com/iokiwi/bugsports-theme.svg?branch=master)](https://travis-ci.com/iokiwi/bugsports-theme)

## Building the theme 

1. Install prequisites
```bash
npm install -g bower grunt
```
2. Clone the repo 
3. `cd` into the theme folder
```bash
cd bugsports-theme/bugsports-theme
```
4. Install dependencies
```bash
npm install
```
5. Build the theme
```bash
npm run build
```

6. Package the theme
```bash
npm run package
```

Find the packaged theme in
```bash
bugsports-theme/bugsports-theme/packaged/bugsports-theme_yyyy-mm-dd_HH-MM.zip
```

# Development environment

1. Install [Docker](https://docs.docker.com/install/)
2. Install [Docker Compose](https://docs.docker.com/compose/install/)
3. Build docker image `docker build -t bsc/wordpress .`
4. Start the development environment with `docker-compose up -d`
5. Accesss your wordpress instance at http://localhost:8000/
6. Live reload resources with

```bash
npm run watch
```

Other commands
```bash
docker exec -it bugsports-theme_wordpress_1 bash
```
```bash
docker-compose down --volumes
```

Source(s):
 * https://docs.docker.com/compose/wordpress/