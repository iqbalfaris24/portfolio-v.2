var cb = new Date().getTime();
var css = document.createElement("link");
css.setAttribute("rel", "stylesheet");
css.setAttribute("type", "text/css");
css.setAttribute("href", "/css/app.css?v=" + cb);
document.getElementsByTagName("head")[0].appendChild(css);

var js = document.createElement("script");
js.setAttribute("type", "text/javascript");
js.setAttribute("src", "/js/app.js?v=" + cb);
document.getElementsByTagName("head")[0].appendChild(js);
