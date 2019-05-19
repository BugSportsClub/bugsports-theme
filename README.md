The actual theme is located in the bugsports-theme sub directory of the bugsports-theme repo.

Please see the README.md in the bugsports-theme subfolder for more information.

## Building the theme 

1. Clone the repo 
```
cd bugsports-theme/bugsports theme
```

3. Install dependencies

```bash
npm install
```
4. Build the theme
```bash
npm run build
```

5. Package the theme
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
3. Start the development environment with `docker compose-up -d`
4. Accesss your wordpress instance at http://localhost:8000/
5. Live reload resources with
```bash
npm run watch
```


Source(s):
 * https://docs.docker.com/compose/wordpress/