# NPI Registry

This project was written for searching the npi registry for specific npi providers. I made the decision to develop this project with Laravel 12, Livewire 3 and Tailwind 4. Locally I created this using Laravel Sail which is a wrapper around docker compose.

*ISSUE*: As the application currently stands with this commit [github.com/JeffreyDavidson/npi-registry/commit/84b3eb58bed758017d8b2e5ca3ad15dead52a3fc] the modal isn't displaying on medium to larger viewports. To view modal please minimize your viewport to the sm breakpoint and the modal should display.

# Steps to See Application

1. Clone repository
2. Install Docker desktop possibly with Homebrew if using a mac. `brew install docker`
3. Install Composer `brew install composer`
4. Run `composer install`
5. Install NPM `brew install npm`
5. Run `npm install`
6. Run `sail up -d`
7. Visit `http://localhost/`
