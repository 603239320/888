const express = require('express');
const path = require('path');
const dotenv = require('dotenv');

dotenv.config();

const app = express();
const port = process.env.PORT || 3000;
const password = process.env.PASSWORD;

app.use(express.static(path.join(__dirname, 'public')));

app.get('/', (req, res) => {
  const auth = {login: 'admin', password: 123}; // 定义用户名和密码
  const b64auth = (req.headers.authorization || '').split(' ')[1] || '';
  const [login, pwd] = Buffer.from(b64auth, 'base64').toString().split(':');

  // 验证用户名和密码是否正确
  if (login && pwd && login === auth.login && pwd === auth.password) {
    res.sendFile(path.join(__dirname, 'public/index.html'));
  } else {
    res.set('WWW-Authenticate', 'Basic realm="401"');
    res.status(401).send('Authentication required.');
  }
});

app.listen(port, () => {
  console.log(`Server listening at http://localhost:${port}`);
});
