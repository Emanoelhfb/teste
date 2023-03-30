<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4" id="conteudo">
    
    <!-- Top Nav -->
    <nav class="flex px-5 py-3 text-gray-700  rounded-lg bg-gray-50 dark:bg-[#1E293B] " aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    <span class="material-symbols-outlined">task_alt</span>
                    Entregas Finalizadas
                </a>
                
            </li>

        </ol>
    </nav>

    <!-- Conteudo -->
    <?php if ($_SESSION["login_motoboy"]["status_cnh_motoboy"] == "Em Analise") {
        include("aviso_pedidos_mb.php");
    }elseif($_SESSION["login_motoboy"]["status_cnh_motoboy"] == "Negado"){
        echo '<br>
        <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">CNH Negado,Entre Em Contato</h1>'; 
    } else {
        include("table_finalizados.php");
    } ?>
    

</div>    