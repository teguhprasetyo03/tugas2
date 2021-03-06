<!DOCTYPE html>
<html lang="en">

<head>
   <title>CSS Template</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <style>
      * {
         box-sizing: border-box;
      }

      body {
         font-family: Arial, Helvetica, sans-serif;
      }

      /* Style the header */
      header {
         background-color: #666;
         padding: 30px;
         text-align: center;
         font-size: 35px;
         color: white;
      }

      /* Create two columns/boxes that floats next to each other */
      nav {
         float: left;
         width: 30%;
         height: 400px;
         /* only for demonstration, should be removed */
         background: #ccc;
         padding: 20px;
      }

      /* Style the list inside the menu */
      nav ul {
         list-style-type: none;
         padding: 0;
      }

      article {
         float: left;
         padding: 20px;
         width: 70%;
         background-color: #f1f1f1;
         height: 400px;
         /* only for demonstration, should be removed */
      }

      /* Clear floats after the columns */
      section::after {
         content: "";
         display: table;
         clear: both;
      }

      /* Style the footer */
      footer {
         background-color: #777;
         padding: 10px;
         text-align: center;
         color: white;
      }

      /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
      @media (max-width: 600px) {

         nav,
         article {
            width: 100%;
            height: auto;
         }
      }
   </style>
</head>

<body>
   <header>
      <h2>201843500330-Teguh Prasetyo</h2>
   </header>

   <section>
      <nav>
         <ul>
            <h1>List Latihan</h1>
            <li><a href="">Hello World</a></li>
            <li><a href="variabel.html">Variabel</a></li>
            <li><a href="#">Object</a></li>
            <li><a href="#">Konstanta</a></li>
            <li><a href="#">Operator Aritmatika</a></li>
            <li><a href="#">Operator Perbandingan</a></li>
            <li><a href="#">Operator String</a></li>
            <li><a href="#">Kondisi If</a></li>
            <li><a href="#">Kondisi Else If</a></li>
            <li><a href="#">Kondisi Switch</a></li>
            <li><a href="#">While Loop</a></li>
            <li><a href="#">Do While</a></li>
            <li><a href="#">For Loop</a></li>
            <li><a href="#">Foreach Loop</a></li>
         </ul>
      </nav>
      <article>
         <h1>Basic Php Syntax</h1>
         <p>A PHP script can be placed anywhere in the document.</p>
         <p>A PHP script starts with php</p>
      </article>
   </section>

   <footer>
      <p>Pemrograman Web 2, Copyright Teguh Prasetyo</p>
   </footer>

</body>

</html>