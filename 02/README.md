# Clase 2 → Miércoles 14 de marzo

### HTML5 

**Algunos apuntes iniciales:**  

- HTML es sigla de HyperText Markup Language. 

- HTML no es un lenguaje de programación. No tiene variables, condicionales, ciclos ni funciones. 

- HTML es un lenguaje descriptivo que ofrece lo necesario para estructurar el contenido de las páginas web.

- HTML5 es su versión más reciente, en ella se incorporan elementos semánticos, atributos y comportamientos que atienden a los actuales usos de la Web.

#### Elemento HTML

**Los elementos son el bloque constructivo más básico del HTML**. Un elemento HTML generalmente tiene una `<etiqueta de inicio>` y `</una etiqueta de cierre>`, entre las etiquetas hay un contenido, y dentro de la etiqueta de inicio pueden haber atributos. Hay ciertos elementos que no tienen contenido, y son solo `<una etiqueta>` que puede tener atributos.

En línea, pueden encontrar distintas referencias sobre los elementos HTML existentes. Algunos ejemplos:  

- [Lista de Elementos HTML5](https://developer.mozilla.org/es/docs/HTML/HTML5/HTML5_lista_elementos)
- [HTML5 Cheat Sheet](https://websitesetup.org/HTML5-cheat-sheet.pdf)
- [Referencias de elementos HTML](https://developer.mozilla.org/es/docs/Web/HTML/Elemento)
- [Element Index | HTML5 Doctor](http://html5doctor.com/element-index/)

Si queremos enfrentar el aprendizaje de un lenguaje de un modo natural, no tenemos que demorarnos mucho tiempo intentando memorizar cada elemento antes de escribir cualquier cosa. Además, recuerden que un editor de código les entregará pistas en la medida que vayan escribiendo, y los colores en el código servirán de indicación para sus aciertos o errores.

Iniciamos ahora mismo la "redacción" de una página web desde cero; lo primero será el elemento `<html>…</html>`. Dentro suyo deberíamos tener 2 elementos: Uno es `<head>…</head>`, el cual debe incluir información general acerca del documento, incluyendo su título, metadatos, enlaces a scripts y estilos. Otro elemento es `<body>…</body>`, el cual debe incluir el contenido del documento.

```
<html>
  <head>…</head>
  <body>…</body>
</html>
```

A esto deberíamos anteponer un `<!DOCTYPE html>`, que es una instrucción para que el navegador web "sepa" en qué versión de HTML está escrita la página.

```
<!DOCTYPE html>
<html>
  <head>…</head>
  <body>…</body>
</html>
```

Y esa es la estructura con la que deberíamos iniciar cada página web. 

**Lo que sigue es preocuparnos de incluir información general acerca del documento, y esto se hace dentro del elemento `<head>…</head>`**, donde incluiremos los elementos que, a continuación, se presentan con un `<!--comentario-->`:

```
<head>
  <!--Lo primero es indicar la codificación de caracteres utilizada-->
  <meta charset="utf-8">
  <!-- Luego los demás elementos meta, con sus atributos name y content -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Nunca olvidar el título que se desplegará en la peseña del navegador--> 
  <title>Hola mundo!</title>
  <!-- Podemos vincular un favicon -->
  <link rel="icon" type="image/png" href="favicon.png">
  <!-- Podemos vincular una o varias hojas de estilo CSS -->
  <link rel="stylesheet" href="estilo.css">
  <!-- Podemos incluir, directamente, algunas reglas de estilo CSS -->
  <style>…</style>
  <!-- Podemos vincular, aquí o en otra parte, uno o varios scripts de JS--> 
  <script src="javascript.js"></script>
  <!-- Podemos incluir, aquí o en otra parte, y directamente, algún script de JS--> 
  <script>…</script>  
</head>
```

Para mayor información respecto de lo recién presentado, favor revisar:
- [Meta Charset: como y por qué utilizarlo siempre](https://cybmeta.com/meta-charset-como-y-por-que-utilizarlo-siempre)
- [HTML \<meta> name Attribute](https://www.w3schools.com/tags/att_meta_name.asp)
- [\<meta> en HTML | MDN](https://developer.mozilla.org/es/docs/Web/HTML/Elemento/meta)
- [\<link> en HTML | MDN](https://developer.mozilla.org/es/docs/Web/HTML/Elemento/link);
- [\<script> en HTML | MDN](https://developer.mozilla.org/es/docs/Web/HTML/Elemento/script)
- [Mega Tags](https://megatags.co/)
- [How to Add a Favicon to your Site](https://www.w3.org/2005/10/howto-favicon)

Podemos seguir avanzando, y **preocuparnos de los contenidos del documento, de lo que va dentro del `<body>…</body>`**.

En este caso, la lista de posibles elementos es más amplia. Por lo que vamos a trabajar directamente en el documento HTML, primero definiendo una estructura de modo semántico, luego jerarquías de la misma manera, para después agregar vínculos, imágenes y otros elementos multimedia. Todo esto lo haremos sin hacer ajustes de estilo, para tener claridad sobre proporciones y comportamientos que se ofrecen por defecto.

En el documento a trabajar, podremos revisar algunos de los siguientes elementos:

- [HTML5.3 · Editor’s Draft, 9 March 2018 · **Document metadata**](http://w3c.github.io/html/document-metadata.html)

- [HTML5.3 · Editor’s Draft, 9 March 2018 · **Sections**](http://w3c.github.io/html/sections.html)

- [HTML5.3 · Editor’s Draft, 9 March 2018 · **Grouping content**](http://w3c.github.io/html/grouping-content.html)

- [HTML5.3 · Editor’s Draft, 9 March 2018 · **Text-level semantics**](http://w3c.github.io/html/textlevel-semantics.html)

- [HTML5.3 · Editor’s Draft, 9 March 2018 · **Edits**](http://w3c.github.io/html/edits.html)

- [HTML5.3 · Editor’s Draft, 9 March 2018 · **Embedded content**](http://w3c.github.io/html/semantics-embedded-content.html)

- [HTML5.3 · Editor’s Draft, 9 March 2018 · **Links**](http://w3c.github.io/html/links.html)

- [HTML5.3 · Editor’s Draft, 9 March 2018 · **Tabular data**](http://w3c.github.io/html/tabular-data.html)


- - - - - 

[Clase anterior](https://github.com/profesorfaco/dno037-2018-01) | [Siguiente clase](https://github.com/profesorfaco/dno037-2018-03)
