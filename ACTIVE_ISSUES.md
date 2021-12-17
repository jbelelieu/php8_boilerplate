

# Known Issues

## Github Actions

- tests are looking for the .env file, which isn't sent to github. We need to make it use a .env.test file or something in "APP_ENV = test" mode.
