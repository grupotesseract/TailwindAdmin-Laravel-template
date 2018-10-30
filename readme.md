# TailwindAdmin + Laravel 5.7 Template whit Docker Vessel

## About

This project integrates [Laravel 5.7](https://laravel.com/) Framework whit [Tailwind Admin](https://github.com/tailwindadmin/admin), the environment is set by [Docker Vessel](https://vessel.shippingdocker.com/).

[Tailwind Admin](https://github.com/tailwindadmin/admin) is a super simple admin panel made whit [Tailwind CSS](https://tailwindcss.com).

![alt text](https://res.cloudinary.com/tesseract/image/upload/v1539428267/erp-time-tracking/github-cover.png)

## Requirements

- **Install [Docker](https://docs.docker.com/install/)**
- **Install [Docker Compose](https://docs.docker.com/compose/install/)**

The Rest of the tools will run from inside the container. 

## Installation

```
# Clone the repository from GitHub and open the directory:

git clone https://github.com/grupotesseract/erp-time-tracking.git && cd erp-time-tracking

# Start Vessel and prepare the environment:

cp .env.example .env
./vessel start
./vessel comp install
./vessel art key:generate
./vessel art migrate --seed

# Prepare the assets:

./vessel yarn install
./vessel yarn run watch
```

**Access [http://localhost](http://localhost)**

### Project made possible thanks to:

- [Tailwind Admin](https://github.com/tailwindadmin/admin)
- [Tailwind CSS](https://tailwindcss.com/)
- [Docker Vessel](https://vessel.shippingdocker.com/)
- [Docker](https://www.docker.com/)
- [Laravel](https://laravel.com/)
- [Vue.js](https://vuejs.org/)
- [Sass](https://sass-lang.com/)
- [Laracasts](https://laracasts.com/)
