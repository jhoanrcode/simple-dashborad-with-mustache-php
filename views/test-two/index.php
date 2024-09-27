<?php
    $path_base = '../../';
    require_once ($path_base.'config.php');
    global $output; 
    
    /* Incluir archivos CSS y Title de la pagina */
    $css_stylesheet = [ array('url_css' => "") ]; //Ruta estilos CSS propios $path_base."/css/path/test.css"
    $css_stylesheet_vendor = [ array('url_css' => "") ]; //Ruta estilos CSS del Vendor  $path_base."/css/path/test.css"
    $name_page = "Test Two"; //Nombre de pagina
    $breadcrumb =  array( "page"=>"Categoria", "subpage"=>$name_page); //Miga de Pan (data/false)

    $params_metadata = [ 'title_page' => $name_page, 'css_stylesheet' => $css_stylesheet, 'css_stylesheet_vendor' => $css_stylesheet_vendor, "path_base"=>$path_base];
    $params_wrapper =['name_page' => $name_page, 'has_breadcrumb' => true, 'breadcrumb' => $breadcrumb, "path_base"=>$path_base];

    echo $output->render('head-page', $params_metadata); 
    echo $output->render('body-start-page', $params_wrapper); 
?>

<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Test Two</h4>
        </div>
        <div class="card-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, commodi? Ullam quaerat similique iusto
            temporibus, vero aliquam praesentium, odit deserunt eaque nihil saepe hic deleniti? Placeat delectus
            quibusdam ratione ullam!
        </div>
    </div>
</section>

<?php
    /* Incluir datos JS de la pagina */
    $js_scripts = [ array('url_js' => "") ]; //Ruta scripts JS propios $path_base."/js/path/test.js"
    $js_scripts_vendor = [ array('url_js' => "") ]; //Ruta scripts JS del Vendor $path_base."/js/path/test.js"
    $params_scriptsJs = [ 'test' => '$js_scripts', 'js_scripts' => $js_scripts, 'js_scripts_vendor' => $js_scripts_vendor, "path_base"=>$path_base];
    echo $output->render('body-end-page', $params_scriptsJs); 
?>