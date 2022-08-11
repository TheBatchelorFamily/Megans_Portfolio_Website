# Website source files

## Local linting
You can run [stylelint](https://stylelint.io/user-guide/get-started) locally by running the following command after installing it with npm:
* Appending the `--fix` option will automatically fix most errors found.
```bash
npx stylelint "**/*.css" --config ../.github/linters/.stylelintrc.json
```

## Local testing
This website has been containerized using the [php:apache](https://hub.docker.com/_/php/?tab=description) docker image.

To build the image, run the following command from the website directory:
```bash
docker build -t batchelor_website .
```

The run the image run the following command:
```bash
docker run -p 80:80 -it batchelor_website
```