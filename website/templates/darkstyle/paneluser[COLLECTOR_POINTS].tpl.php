{#INCLUDE:header}
    
    <div id="content">
    
{#INCLUDE:menuLeft}









       	<div id="main">
        
            <h1 class="openPanel">Painel do usu&aacute;rio <span style="font-size: 10px;">Clique aqui para revelar/esconder o menu</span></h1>
            
            {#INCLUDE:menuPanelUser} 

            <div class="contentBox">
                <h2 class="noMargin">Coletor de pontos</h2>
                
                <div class="legend" style="margin-bottom: 25px;">
                    <h3 class="legend-title"><span style="font-size: 13px;">Leia as instru&ccedil;&atilde;es abaixo:</span></h3>
                    <div style="margin-bottom: 8px; margin-top: 10px;">
                    
                        O coletor de pontos � um servi�o oferecido no site para trocar determinados itens do jogo por pontos no site.<br />
                        Esses pontos podem ser utilizados nos eventos do site, como bol�es, leil�es e entre outros.<br /><br />
                        
                        <strong>O sistema atualmente, esta oferecendo <u>{#POINTS_PER_ITEM}</u> pontos por cada unidade que voc� dispor do item <u>{#ITEM_NAME}</u> (n�o importa suas condi��es como level e etc.).</strong><br /><br /> 
                        
                        Caso voc� possua alguma unidade desse item no seu bau principal do jogo, clique no bot�o abaixo e converta os mesmos por pontos no site.<br /><br />
                        <form action="?page=paneluser&option=COLLECTOR_POINTS&action=collect" method="post">
                        <input type="submit" value="Coletar itens e converter em pontos" class="button" />
                        </form>
                        <br />
                        {#RESPONSE_WRITE}
                        
                    </div>
                </div>
            </div>
            
        </div>
        <br style="clear: both" />











{#INCLUDE:footer}
