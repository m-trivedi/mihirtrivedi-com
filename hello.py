from flask import Flask, render_template

app = Flask(__name__)


@app.route('/')
def index():
    return render_template('index.html')

@app.route('/now')
def now():
    return render_template('now.html')

@app.route('/contact')
def contact():
    return render_template('contact.html')