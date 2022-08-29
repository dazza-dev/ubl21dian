<?php

namespace Stenfrank\UBL21dian\Templates\SOAP;

use Stenfrank\UBL21dian\Templates\CreateTemplate;
use Stenfrank\UBL21dian\Templates\Template;

/**
 * Get Exchange Emails.
 * Función: Consultar el correo electrónico suministrada por el adquiriente registrado en el procedimiento de habilitación como facturador electrónico.
 * Proceso: Sincrónico
 * Método: GetExchangeEmails
 */
class GetExchangeEmails extends Template implements CreateTemplate
{
    /**
     * Action.
     *
     * @var string
     */
    public $Action = 'http://wcf.dian.colombia/IWcfDianCustomerServices/GetExchangeEmails';


    /**
     * Construct.
     *
     * @param string $pathCertificate
     * @param string $passwors
     */
    public function __construct($pathCertificate, $passwors)
    {
        parent::__construct($pathCertificate, $passwors);
    }

    /**
     * Create template.
     *
     * @return string
     */
    public function createTemplate()
    {
        return $this->templateXMLSOAP = <<<XML
<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:wcf="http://wcf.dian.colombia">
    <soap:Header/>
    <soap:Body>
        <wcf:GetExchangeEmails/>
    </soap:Body>
</soap:Envelope>
XML;
    }
}
