 <?php
    include_once 'classe_bancodedados.php';           
    include_once 'classe_compra.php';
    include_once 'classe_cliente.php';
    include_once 'classe_funcionario.php';
    include_once 'classe_produto.php';
    include_once'controle_painel.php';
    $GLOBALS['bd'] = new bancodedados();
    $GLOBALS['bd']->conectar();
        
    $query = " 
        SELECT 
    compra.id as 'id',
    cliente.nome AS 'cliente',
    produto.nome AS 'produto',
    funcionario.nome AS 'funcionario'
        FROM
    compra
        JOIN cliente ON
    cliente.id = compra.id_cliente
        JOIN produto ON
    produto.id = compra.id_produto
        JOIN funcionario ON
    funcionario.id = compra.id_funcionario;
    "; 

    $compras = $GLOBALS['bd']->query($query);
    
    $listagem= '<table border="2">';
    
    while ($compra = mysql_fetch_assoc($compras)){
        $compra1 = new compra($compra['id']);
        $listagem.= '<tr>';
        $listagem.= '<td>'. $compra1->getId().'</td>';
        $listagem.= '<td>'. $compra1->getId_cliente().'</td>';
        $listagem.= '<td>'. $compra1->getId_produto().'</td>';
        $listagem.= '<td>'. $compra1->getId_funcionario().'</td>';
        $listagem.='<td><a href="modificar_compra.php?id='.$compra1->getId().'">MODIFICAR</a></td>';
        $listagem.='<td><a href="?id='.$compra1->getId().'">APAGAR</a></td>';
        $listagem.='</tr>';
    }
    $listagem.='</table>';
    
    $GLOBALS['bd']->desconectar();
 
    
 ?>