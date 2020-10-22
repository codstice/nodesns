const express     = require('express');
const cookieParser= require('cookie-parser');
const morgan      = require('morgan');
const path        = require('path');
const session     = require('express-session');
const flash       = require('connect-flash');
require('dotenv').config();

const pageRouter  = require('./routes/page');

const app         = express();

app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'pug');
app.set('port', process.env.PORT || 4567); // If PORT already declared in env var, use it or 4567.

app.use(morgan('dev')); //Logging, it don't log views' log because of placing rear order
app.use(express.static(path.join(__dirname, 'public')));
app.use(express.json()); // work as body-parser.
app.use(express.urlencoded({extended:false})); // work as body-parser.
app.use(cookieParser(process.env.COOKIE_SECRET));
app.use(session({
  resave:false,
  saveUninitialized:false,
  secret: process.env.COOKIE_SECRET,
  cookie:{
    httpOnly:true,
    secure:false,
  },
}))
app.use(flash()); // session variable which occur only once.
app.use('/', pageRouter);
// has pageRouter no next()????? if req not matched path, process go on.
app.use((req,res,next) => {
  const err = new Error('Not Found');
  err.status = 404;
  next(err); // below 2 lines, toss "err" as parameter. between middleware are passed.
});
app.use((err,req,res,next)=>{
  res.locals.message = err.message;
  res.locals.error   = req.app.get('env') === 'development' ? err : {};
  res.status(err.status || 500); // 404 error or 500 error
  res.render('error'); // render /views/error file
});

// what return .get(one) VS .get(one, two)
app.listen(app.get('port'), ()=>{
  console.log(app.get('port'), '번 포트에서 대기중');
})