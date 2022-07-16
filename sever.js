
    "use strict"

    var nodemailer = require('nodemailer');
    var smtpTransport = require('nodemailer-smtp-transport');
 
var transporter = nodemailer.createTransport(smtpTransport({
  service: 'gmail',
  host: 'smtp.gmail.com',
  auth: {
    user: 'mokwon1951@gmail.com',
    pass: 'mokwon12!@'
  }
}));
 
var mailOptions = {
  from: 'mokwon1951@gmail.com',
  to: 'user_email',
  subject: 'Sending Email using Node.js[nodemailer]',
  text: 'That was easy!'
};
 
transporter.sendMail(mailOptions, function(error, info){
  if (error) {
    console.log(error);
  } else {
    console.log('Email sent: ' + info.response);
  }
}); 