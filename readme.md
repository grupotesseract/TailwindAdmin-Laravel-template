# ERP + Time Tracking using Laravel, Tailwind and Vue.js
## Under Development

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
