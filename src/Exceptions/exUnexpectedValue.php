<?php
namespace Poirot\ContentClient\Exceptions;


class exUnexpectedValue
    extends \RuntimeException
    implements iExceptionOfContentClient
{
    protected $code = 400;
}
