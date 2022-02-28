from flask import Flask, jsonify, request
  
app = Flask('Python')


@app.route('/hello', methods=['GET'])
def hello():
    if request.args.get('name'):
        return 'Hello, ' + request.args.get('name') + '!'
    return 'Hello, World!'

app.run(debug=False, port=8000)