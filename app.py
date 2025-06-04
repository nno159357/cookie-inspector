from flask import Flask, request, make_response

app = Flask(__name__)

@app.route('/')
def index():
    name = request.cookies.get('name', 'guest')
    if name == 'admin':
        return "🎉 ISU{you_found_the_cookie_flag}"
    else:
        return f"Hello {name}. You are not admin."

@app.route('/set')
def set_cookie():
    resp = make_response("Cookie set to admin")
    resp.set_cookie('name', 'admin')
    return resp

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=10000)  # 新增這兩個參數