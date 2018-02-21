<!DOCTYPE html>
    <html>
      <head>
        <title>Zadanie 5</title>
        <meta charset='UTF-8'>
        <link rel='stylesheet' type='text/css' href='./uprava_dokumentu.css'>
        <script type='text/javascript' src='javascript.js'></script>
      </head>
      <body>
        <header>
                <h1>Zadanie 5</h1>
        </header>
        <section>
                <form action='functionsForSearch.php' accept-charset='UTF-8' name='mojFormular' method='post'>
          <fieldset>
            <legend>Ceny benzínu</legend>
            <p>
              PSČ: <input type='text' name='psc' value=''>
              <br>
              <br>
              Palivo:
              <select name='benzin'>
                <option value='8'>Diesel</option>
                <option value='256'>Diesel+</option>
                <option value='32'>Normal95 (UNI)</option>
                <option value='2'>Natura95</option>
                <option value='4096'>Natura95+ (aditovaný)</option>
                <option value='4'>Natura98</option>
                <option value='128'>Natural99+ (aditovaný 99/100)</option>
                <option value='16'>LPG</option>
                <option value='16384'>CNG</option>
                <option value='8192'>Adblue</option>
              </select>
              <br>
              <br>
            </p>
            <input type='submit' name='tlacidlo' value='Vyhladať'>
          </fieldset>
        </form>
        </section>
        <footer>Zendo &copy; 2016</footer>
      </body>
    </html>