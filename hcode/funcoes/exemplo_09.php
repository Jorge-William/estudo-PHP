<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
                // inicio: Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                        // Inicio Gerente de vendas ---------------------
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                        // Termino gerente de vendas
                )
            ),
                // Termino: Diretor Comercial

                // Inicio Diretor Financeiro ------------------------------
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                        // Inicio: Gerente de contas a pagar --------------
                    array(
                        'nome_cargo' => 'Gerente de contas a Pagar',
                        'subordinados' => array(
                                // Inicio Supervisor de Pagamentos
                            array(
                                'nome_cargo' => 'Supervisor de Pagamentos'
                            )
                                // Termino Supervisor de Pagamentos
                        )
                    ),
                        // Termino gerente de contas a pagar
                        
                        // Inicio Gerente de Compras----------------------
                    array(
                        'nome_cargo' => 'Gerente de compras',
                        'subordinados' => array(
                                // Inicio supervisor de Suprimentos ------
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos'
                            )
                                // termino Supervisor de Suprimentos
                        )

                    )
                        // Termino gerente de compras

                )
            )
                // Termino Diretor Financeiro
        )
    )

);

 function exibe($cargos){

    $html = '<ul>';

    foreach ($cargos as $cargo) {

        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

            $html .= exibe($cargo['subordinados']);

        } 

        $html .= "</li>";
    }

    $html .= '</ul>';

    return $html;


 }
echo exibe($hierarquia);



?>