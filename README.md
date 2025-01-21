# mihirtrivedi-com

### Create virtual environment
`python3 -m venv my_env`

### Activate virtual environment
`source ./venv/bin/activate`

### Install necessary packages
`pip3 install flask`

### Set up & run
`export FLASK_APP=hello`
`export FLASK_ENV=development`
`flask run`

### Run Tailwind Build
`npx tailwindcss -i ./static/css/input.css -o ./static/css/output.css`