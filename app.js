var PDFDocument = require('pdfkit');
var doc = new PDFDocument();

var date = new Date();

doc.image('img/face.jpg', 100, 100)

doc.fontSize(12)
   .text(date, 200, 10)

doc.write('output.pdf')

