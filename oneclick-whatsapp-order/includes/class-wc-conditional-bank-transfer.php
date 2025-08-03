<?php
// Prevenir el acceso directo
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Salir si se accede directamente
}

/**
 * Pasarela de Pago Condicional de Transferencia Bancaria
 *
 * @class       WC_Gateway_Conditional_Bank_Transfer
 * @extends     WC_Payment_Gateway
 * @version     1.0.0
 * @author      Tu Nombre
 */
if ( class_exists( 'WC_Payment_Gateway' ) ) {

    class WC_Gateway_Conditional_Bank_Transfer extends WC_Payment_Gateway {

        /**
         * Constructor de la pasarela.
         */
        public function __construct() {
            // Aca definiremos las propiedades de nuestra pasarela
        }

        /**
         * Inicializar campos del formulario de ajustes.
         */
        public function init_form_fields() {
            // Aca definiremos los ajustes en el admin de WooCommerce
        }

        /**
         * Procesar el pago y retornar el resultado.
         *
         * @param int $order_id
         * @return array
         */
        public function process_payment( $order_id ) {
            // Aca manejaremos lo que sucede cuando un cliente elige este metodo de pago
        }

        /**
         * Output para la pagina de agradecimiento.
         */
        public function thankyou_page() {
            // Aca mostraremos los datos bancarios condicionales
        }
    }
}
