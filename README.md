## About

The project has been bootstrapped with Laravel Sail with all default options.
Some services & components not applicable to this project have been included as a result.

Additional information relating to Sail can be found here: https://laravel.com/docs/8.x/sail

Services used by this project:
- Nginx
- MySQL
- Redis

## Running the project

- Docker Desktop needs to be installed first.
- Ensure that nothing is already running on ports `80` or `3306`.
- Run `./vendor/bin/sail up -d` (The first time round may take some time, as the containers need to be built).
- Copy `.env.example` to `.env` -- please update the following variables with appropriate values:
    - MAIL_FROM_ADDRESS
    - MAILGUN_DOMAIN
    - MAILGUN_SECRET
    - DOCTOR_EMAIL
- Open a Shell into the container by running: `./vendor/bin/sail shell`.
- Inside the shell, run: `php artisan migrate`
- The project will be accessible at http://localhost

## Jobs/Queues

The queue driver is set to `Redis`.

To run the email sending jobs, run in the Sail Shell: `php artisan queue:work`

## Testing

The test can be run with `php artisan test` inside the container shell.

## Todo / Thoughts

- Better form error handling.
- ReCaptcha of some description to protect against bots.
- Allow users to edit/review their details before final submission.

